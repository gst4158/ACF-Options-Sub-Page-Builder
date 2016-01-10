// Cannot be loaded in the ACF functions.php file b/c it has not loaded ACF fields yet
if( function_exists('acf_add_options_page') ) {
	// creates subpages based on textarea input
	echo createSubPages(get_field('field_build_add_textarea', 'option', false));
};
