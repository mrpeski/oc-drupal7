## MY APPROACH
I began by studying the brand files, identifying colors and brand marks. This led to further examination of the website mockup files in photoshop, taking notes of elements proportions and sizes. The vector files were also considered in great detail saving them in SVG for use on the web.

A basic HTML scaffolding was then created from the design. This process is majorly described as the bedrock of the theme. Marking sections and there contents with semantic HTML5 tags. Adding the needed responsive design meta tags. etc.

### SASS/SMACSS

The next phase of this theme development is the styling of HTML tags. I chose SASS preprocessing language due to its ease of use and higher productivity thresholds. The SASS files were separated using the SMACSS methodology. Starting with the base styles, styling single elements and adding basic elements reset. 
The layouts file contained layout styles, special attention was taken here, making sure to start small. i.e all block level parent elements are set to 100% of the viewport width. These styles are then progressively adjusted to reflect the desktop design. The breakpoints were chosen by examining the content flow, when it becomes harder to read, a breakpoint is assigned and appropriate style is added to the content at this point. The preceding steps were repeated to accommodate viewports of up to 2650px and higher. The module file contains specific elements styles. Targetting elements of a section of the website. In addition to the standard SMACSS files and overrides file wass added, this includes the few theme overrides file.

The navigation was designed as an off-canvas element, which is only revealed on request by the user through the hamburger icon. This approach is thought to be less distracting compared to toggling visiblity of navigation element by sliding it down or up. 

### The Templates

The standard template files were copied over from the various core modules for overriding, these includes the html, page, block and node templates. A custom page--front template was created for frontpage override through the drupal template suggestion engine. Theme regions are defined in the theme info file. The base HTML file is then split appropriately between the template files minimizing duplication as much as possible. An appropriate theme settings page was created for the theme. This allow for easy customization of the theme.

### Block Module

The various sections on the frontpage are converted into blocks. This is to allow for more granular customization of the theme frontpage.  The site administrator can disable sections or even swap them around.

### Features
- Fully Responsive (The website adapts to various devices, serving appropriate content on a device capability basis, resulting in higher conversion rates)
- Easy customization through descriptive form controls
- Cross browser support - Internet Explorer 11 and Latest version of the following browsers; Firefox Chrome and Safari.
- Judicious use of 'VIP HTML tags'. Use of appropriate heading tags for clear page hierarchy, useful for screen readers, page crawlers and ultimately page rank.


