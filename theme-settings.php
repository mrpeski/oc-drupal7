<?php
// $foo_example = theme_get_setting('foo_example');
// function hook_form_system_theme_settings_alter(&$form, &$form_state) {
    
function charity_form_system_theme_settings_alter(&$form, $form_state) {
    
    $form['hero'] = array(
        '#type' => 'fieldset', 
        '#title' => t('Hero'), 
        '#weight' => 5, 
        '#collapsible' => TRUE, 
        '#collapsed' => TRUE,
    );
    
    $form['hero']['hero_text'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Hero Text'),
        '#default_value' => theme_get_setting('hero_text'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['hero']['hero_paragraph'] = array(
        '#type'          => 'textarea',
        '#title'         => t('Hero Paragraph'),
        '#default_value' => theme_get_setting('hero_paragraph'),
        '#description'   => t("Feel free to edit as you see fit"),
    );

    $form['next_event'] = array(
        '#type' => 'fieldset', 
        '#title' => t('Next Event'), 
        '#weight' => 3, 
        '#collapsible' => TRUE, 
        '#collapsed' => FALSE,
    );

    $form['next_event']['event_date'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Next Event'),
        '#default_value' => theme_get_setting('event_date'),
        '#description'   => t("Enter event date and time e.g September 24th 2017 18:30 - 21:00"),
    );

    $form['next_event']['desc'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Description'),
        '#default_value' => theme_get_setting('desc'),
        '#description'   => t("A short and descriptive sentence about the event."),
    );

    $form['next_event']['lnk'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Registration url'),
        '#default_value' => theme_get_setting('lnk'),
        '#description'   => t("e.g The eventbrite page"),
    );


    $form['involved'] = array(
        '#type' => 'fieldset', 
        '#title' => t('Get Invovled'), 
        '#weight' => 5, 
        '#collapsible' => TRUE, 
        '#collapsed' => TRUE,
    );

    $form['involved']['involved_1'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Title'),
        '#default_value' => theme_get_setting('involved_1'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['involved']['involved_1_body'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Body'),
        '#default_value' => theme_get_setting('involved_1_body'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['involved']['involved_1_url'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Link'),
        '#default_value' => theme_get_setting('involved_1_url'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['involved']['involved_2'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Title'),
        '#default_value' => theme_get_setting('involved_2'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['involved']['involved_2_body'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Body'),
        '#default_value' => theme_get_setting('involved_2_body'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['involved']['involved_2_url'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Link'),
        '#default_value' => theme_get_setting('involved_2_url'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
  
    $form['involved']['involved_3'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Title'),
        '#default_value' => theme_get_setting('involved_3'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['involved']['involved_3_body'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Body'),
        '#default_value' => theme_get_setting('involved_3_body'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['involved']['involved_3_url'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Link'),
        '#default_value' => theme_get_setting('involved_3_url'),
        '#description'   => t("Feel free to edit as you see fit"),
    );

// Mission Statements

    $form['our_mission'] = array(
        '#type' => 'fieldset', 
        '#title' => t('Our Mission'), 
        '#weight' => 5, 
        '#collapsible' => TRUE, 
        '#collapsed' => TRUE,
    );

    $form['our_mission']['mission_body'] = array(
        '#type' => 'textarea',
        '#title' => 'body',
        '#default_value' => theme_get_setting('mission_body'),
        '#description'   => t("Feel free to edit as you see fit"),
    );

    $form['our_mission']['mission_1'] = array(
        '#type'          => 'textfield',
        '#title'         => t('We Help Charities...'),
        '#default_value' => theme_get_setting('mission_1'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['our_mission']['mission_2'] = array(
        '#type'          => 'textfield',
        '#title'         => t('We Bring Together...'),
        '#default_value' => theme_get_setting('mission_2'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
    $form['our_mission']['mission_3'] = array(
        '#type'          => 'textfield',
        '#title'         => t('We Encourage...'),
        '#default_value' => theme_get_setting('mission_3'),
        '#description'   => t("Feel free to edit as you see fit"),
    );
  
  $form['footer'] = array(
        '#type' => 'fieldset', 
        '#title' => t('Footer'), 
        '#weight' => 5, 
        '#collapsible' => TRUE, 
        '#collapsed' => TRUE,
    );
  $form['footer']['facebook'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook'),
    '#default_value' => theme_get_setting('facebook'),
    '#description'   => t("Please enter your facebook page uri here"),
  );
  $form['footer']['twitter'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter'),
    '#default_value' => theme_get_setting('twitter'),
    '#description'   => t("Please enter your twitter page uri here"),
  );
  $form['footer']['googl'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Google+'),
    '#default_value' => theme_get_setting('googl'),
    '#description'   => t("Please enter your Google+ page uri here"),
  );

  $form['footer']['credit_1'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Company Name'),
    '#default_value' => theme_get_setting('credit_1'),
    '#description'   => t("Please enter your Company name here"),
  );
  $form['footer']['credit_1_uri'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Company Uri'),
    '#default_value' => theme_get_setting('credit_1_uri'),
    '#description'   => t("Please enter your Company uri here"),
  );
  $form['footer']['credit_2'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Company Name'),
    '#default_value' => theme_get_setting('credit_2'),
    '#description'   => t("Please enter your Company name here"),
  );
  $form['footer']['credit_2_uri'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Company Uri'),
    '#default_value' => theme_get_setting('credit_2_uri'),
    '#description'   => t("Please enter your Company uri here"),
  );
}

