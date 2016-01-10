//--------------------------//
// FUNCTION: Creates set of sub option pages for site-builder
//-----------------------------------------------------//
function createSubPages($choices) {

	// explode the value so that each line is a new array piece
	$choices = explode("\n", $choices);
	
	// remove any unwanted white space
	$choices = array_map('trim', $choices);
	
	// loop through array and add to field 'choices'
	if( is_array($choices) ) {
		foreach( $choices as $choice ) : if ($choice) :
			acf_add_options_sub_page(array(
				'page_title' 	=> ucwords($choice),
				'menu_title'	=> ucwords($choice),
				'parent_slug'	=> 'site-builder',
			));
		endif; endforeach;
	};

}
