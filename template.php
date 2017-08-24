<?php

/**
 * Register theme hook
 *
 * @return void
 */
function charity_theme() {
    return array(
        'oc_links' => array(
            'variables' => array('links' => NULL, 'attributes' => array('class' => array('links')), 'heading' => array()),
            'function'          =>  'oc_d_links',
        ),
        'our_mission' => array(
            'variables' => array('mission_1' => NULL, 'mission_body' => NULL, 'mission_2' => NULL, 'mission_3' => NULL),
            'template'  => 'our_mission',
        ),
        'our_members' => array(
            'template'  => 'our_members',
        ),
        'get_involved' => array(
            'template'  => 'get_involved',
        ),
        'window' => array(
            'template'  => 'window',
        ),
        'social'  =>  array(
            'template'  => 'social',
        ),
        'event' => array(
            'template'  => 'next_event',
        )
    );
}
/**
 * Override Powered By
 *
 * @return string
 */
function charity_system_powered_by() {
  $credits = array(['credit_1', 'credit_1_uri'], ['credit_2', 'credit_2_uri']);
    $n = 0;
    $value = [];
    while ($n < count($credits)):
      foreach($credits[$n] as $item) {
        $value[$item] = theme_get_setting($item);
      }
      $n++;
    endwhile;
    extract($value);
  return '<p>' . t('This site was built as a collaboration between <a href="@compucorp">'. $credit_1 . '</a> and <a href="@manifesto">' . $credit_2 .'</a>', array('@compucorp' => $credit_1_uri, '@manifesto' => $credit_2_uri)) . '</p>';
}


/**
 * Custom Links Implementation
 *
 * @param [type] $variables
 * @return void
 */
function oc_d_links($variables) {
  $links = $variables['links'];
  $attributes = $variables['attributes'];
  $heading = $variables['heading'];
  global $language_url;
  $output = '';

  if (count($links) > 0) {
    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,
          // Set the default level of the heading.
          'level' => 'h2',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $output .= '<nav' . drupal_attributes($attributes) . '>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = array($key);

      // Add first, last and active classes to the list of links to help out
      // themers.
      if ($i == 1) {
        $class[] = 'first';
      }
      if ($i == $num_links) {
        $class[] = 'last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page()))
          && (empty($link['language']) || $link['language']->language == $language_url->language)) {
        $class[] = 'active';
      }
      $output .= '<li' . drupal_attributes(array('class' => $class)) . '>';

      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      elseif (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for
        // adding title and class attributes.
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span' . $span_attributes . '>' . $link['title'] . '</span>';
      }

      $i++;
      $output .= "</li>\n";
    }

    $output .= '</nav>';
  }

  return $output;
}

function charity_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $output = '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}

function charity_preprocess_node(&$variables) {
  // $date = $variables['date'];
  $name = $variables['name'];
  $output = '';
  $output .= "By: " . $name;
  
  $variables['submitted'] = $output;
}

function charity_preprocess_page(&$variables) {

  if (isset($variables['node'])){
    if($variables['node']->type == "article") 
    {
      $variables['is_article'] = TRUE;
    }
    else if ($variables['node']->type == "page") 
    {
      $variables['is_page'] = TRUE;
    }
    else {
      $variables['is_article'] = FALSE;
      $variables['is_page'] = FALSE;
    }
  }
}

function charity_process_page(&$variables) {
    if(!isset($variables['is_article'])){
      $variables['is_article'] = FALSE;
    }
    if(!isset($variables['is_page'])){
      $variables['is_page'] = FALSE;
    }
}