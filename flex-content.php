<?php
	/*
		ACF Flexible Content
		--------------------
		- Masthead
		- Tabs
	*/
	$flex = 'layout';

	// Listing out all the layouts that are being used
	$headerbg = 'header-bg';
	$featproducts = 'featured-products';

	// Check if the flexible content field has rows of data
	if( have_rows($flex) ) :

		// loop through the rows of data
		while ( have_rows($flex) ) : the_row();

			/* Header Image module using Background */
			if( get_row_layout() == $headerbg ) : get_template_part('modules/element','headerbg');

			/* Featured Products Section */
			elseif( get_row_layout() == $featproducts ) : get_template_part('modules/featured','products');

			endif;

		endwhile;

	endif;

?>
