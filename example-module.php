<?php
/*  Your Module Title/Description Goes Here  -------

//Update the below section as you create your ACF fields - this helps to keep track of their identifier and the type of field.

   example-module
    example_heading - text
    example_content - textarea
    example_image1 - image (array)

*/

// This section turns your ACF value into a string - this makes it easier to manipuulate and display as you create your module.
// Update this using the values above
// If you are using flexible content, you will use get_sub_field (example below).
// If you are uusing get_template_part, you will need to change this to get_field

$heading = get_sub_field('example_heading');
$content = get_sub_field('example_content');
$img1 = get_sub_field('example_image1');
  $img1_url = $img1['url'];
  $img1_alt = $img1['alt'];


?>

<div id="my-example-row" class="flr100">
  <div class="container">
  <h1><?php echo $heading; ?></h1>
  <div class="content-section">
     <img src="<?php echo $img1_url; ?>" alt="<?php echo $img1_alt; ?>" />
     <?php echo $content; ?>
  </div>
  </div>
</div>

