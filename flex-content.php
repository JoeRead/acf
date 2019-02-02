<?php
	/*
		ACF Flexible Content
		--------------------
		- Example Element
		- Other Element
	*/
	$flex = 'layout';

	// Listing out all the layouts that are being used
	$exampleelement = 'example-element';
	$otherelement = 'other-element';

	// Check if the flexible content field has rows of data
	if( have_rows($flex) ) :

		// loop through the rows of data
		while ( have_rows($flex) ) : the_row();

			/* Title of first example element */
			if( get_row_layout() == $exampleelement ) : get_template_part('modules/example','element');

			/* Description of the other element */
			elseif( get_row_layout() == $otherelement ) : get_template_part('modules/other','element');

			endif;

		endwhile;

	endif;

?>
