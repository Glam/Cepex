<?php
/**
 * Define our settings sections
 *
 * array key=$id, array value=$title in: add_settings_section( $id, $title, $callback, $page );
 * @return array
 */
function wptuts_options_page_sections() {
	
	$sections = array();
	// $sections[$id] 				= __($title, 'wptuts_textdomain');
	
// Línea modificada - sitio web UEC
	$sections['txt_section'] 		= __('Encabezado y pie de página', 'wptuts_textdomain');
	
	
/*
	$sections['txtarea_section'] 	= __('Textarea Form Fields', 'wptuts_textdomain');
	$sections['select_section'] 	= __('Select Form Fields', 'wptuts_textdomain');
	$sections['checkbox_section'] 	= __('Checkbox Form Fields', 'wptuts_textdomain');
*/

// Fin de Línea modificada - sitio web UEC
	
	return $sections;	
}

/**
 * Define our form fields (settings) 
 *
 * @return array
 */
function wptuts_options_page_fields() {

	

	// Textarea Form Fields section
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_txtarea_input",
		"title"   => __( 'Escriba aquí la información de contacto, teléfonos y ubicación.', 'wptuts_textdomain' ),
		"desc"    => __( 'Aparece en el pie de página. Use código HTML si es necesario.', 'wptuts_textdomain' ),
		"type"    => "textarea",
		"std"     => __('Some default value','wptuts_textdomain')
	);

// Línea modificada - sitio web UEC
/*


	// Text Form Fields section
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_txt_input",
		"title"   => __( 'Escriba la edición y la fecha de publicación de la revista:', 'wptuts_textdomain' ),
		"desc"    => __( 'Aparece en el encabezado de la página.', 'wptuts_textdomain' ),
		"type"    => "text",
		"std"     => __('Some default value','wptuts_textdomain')
	);
	
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_nohtml_txt_input",
		"title"   => __( 'No HTML!', 'wptuts_textdomain' ),
		"desc"    => __( 'A text input field where no html input is allowed.', 'wptuts_textdomain' ),
		"type"    => "text",
		"std"     => __('Some default value','wptuts_textdomain'),
		"class"   => "nohtml"
	);
	
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_numeric_txt_input",
		"title"   => __( 'Numeric Input', 'wptuts_textdomain' ),
		"desc"    => __( 'A text input field where only numeric input is allowed.', 'wptuts_textdomain' ),
		"type"    => "text",
		"std"     => "123",
		"class"   => "numeric"
	);
	
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_multinumeric_txt_input",
		"title"   => __( 'Multinumeric Input', 'wptuts_textdomain' ),
		"desc"    => __( 'A text input field where only multible numeric input (i.e. comma separated numeric values) is allowed.', 'wptuts_textdomain' ),
		"type"    => "text",
		"std"     => "123,234,345",
		"class"   => "multinumeric"
	);
	
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_url_txt_input",
		"title"   => __( 'URL Input', 'wptuts_textdomain' ),
		"desc"    => __( 'A text input field which can be used for urls.', 'wptuts_textdomain' ),
		"type"    => "text",
		"std"     => "http://wp.tutsplus.com",
		"class"   => "url"
	);
	
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_email_txt_input",
		"title"   => __( 'Email Input', 'wptuts_textdomain' ),
		"desc"    => __( 'A text input field which can be used for email input.', 'wptuts_textdomain' ),
		"type"    => "text",
		"std"     => "email@email.com",
		"class"   => "email"
	);
	
	$options[] = array(
		"section" => "txt_section",
		"id"      => WPTUTS_SHORTNAME . "_multi_txt_input",
		"title"   => __( 'Multi-Text Inputs', 'wptuts_textdomain' ),
		"desc"    => __( 'A group of text input fields', 'wptuts_textdomain' ),
		"type"    => "multi-text",
		"choices" => array( __('Text input 1','wptuts_textdomain') . "|txt_input1", __('Text input 2','wptuts_textdomain') . "|txt_input2", __('Text input 3','wptuts_textdomain') . "|txt_input3", __('Text input 4','wptuts_textdomain') . "|txt_input4"),
		"std"     => ""
	);
	
	// Textarea Form Fields section
	$options[] = array(
		"section" => "txtarea_section",
		"id"      => WPTUTS_SHORTNAME . "_txtarea_input",
		"title"   => __( 'Textarea - HTML OK!', 'wptuts_textdomain' ),
		"desc"    => __( 'A textarea for a block of text. HTML tags allowed!', 'wptuts_textdomain' ),
		"type"    => "textarea",
		"std"     => __('Some default value','wptuts_textdomain')
	);

	$options[] = array(
		"section" => "txtarea_section",
		"id"      => WPTUTS_SHORTNAME . "_nohtml_txtarea_input",
		"title"   => __( 'No HTML!', 'wptuts_textdomain' ),
		"desc"    => __( 'A textarea for a block of text. No HTML!', 'wptuts_textdomain' ),
		"type"    => "textarea",
		"std"     => __('Some default value','wptuts_textdomain'),
		"class"   => "nohtml"
	);
	
	$options[] = array(
		"section" => "txtarea_section",
		"id"      => WPTUTS_SHORTNAME . "_allowlinebreaks_txtarea_input",
		"title"   => __( 'No HTML! Line breaks OK!', 'wptuts_textdomain' ),
		"desc"    => __( 'No HTML! Line breaks allowed!', 'wptuts_textdomain' ),
		"type"    => "textarea",
		"std"     => __('Some default value','wptuts_textdomain'),
		"class"   => "allowlinebreaks"
	);

	$options[] = array(
		"section" => "txtarea_section",
		"id"      => WPTUTS_SHORTNAME . "_inlinehtml_txtarea_input",
		"title"   => __( 'Some Inline HTML ONLY!', 'wptuts_textdomain' ),
		"desc"    => __( 'A textarea for a block of text. 
		Only some inline HTML 
		(&lt;a&gt;, &lt;b&gt;, &lt;em&gt;, &lt;strong&gt;, &lt;abbr&gt;, &lt;acronym&gt;, &lt;blockquote&gt;, &lt;cite&gt;, &lt;code&gt;, &lt;del&gt;, &lt;q&gt;, &lt;strike&gt;) 
		is allowed!', 'wptuts_textdomain' ),
		"type"    => "textarea",
		"std"     => __('Some default value','wptuts_textdomain'),
		"class"   => "inlinehtml"
	);	
	
	// Select Form Fields section
	$options[] = array(
		"section" => "select_section",
		"id"      => WPTUTS_SHORTNAME . "_select_input",
		"title"   => __( 'Select (type one)', 'wptuts_textdomain' ),
		"desc"    => __( 'A regular select form field', 'wptuts_textdomain' ),
		"type"    => "select",
		"std"    => "3",
		"choices" => array( "1", "2", "3")
	);
	
	$options[] = array(
		"section" => "select_section",
		"id"      => WPTUTS_SHORTNAME . "_select2_input",
		"title"   => __( 'Select (type two)', 'wptuts_textdomain' ),
		"desc"    => __( 'A select field with a label for the option and a corresponding value.', 'wptuts_textdomain' ),
		"type"    => "select2",
		"std"    => "",
		"choices" => array( __('Option 1','wptuts_textdomain') . "|opt1", __('Option 2','wptuts_textdomain') . "|opt2", __('Option 3','wptuts_textdomain') . "|opt3", __('Option 4','wptuts_textdomain') . "|opt4")
	);
	
	// Checkbox Form Fields section
	$options[] = array(
		"section" => "checkbox_section",
		"id"      => WPTUTS_SHORTNAME . "_checkbox_input",
		"title"   => __( 'Checkbox', 'wptuts_textdomain' ),
		"desc"    => __( 'Some Description', 'wptuts_textdomain' ),
		"type"    => "checkbox",
		"std"     => 1 // 0 for off
	);
	
	$options[] = array(
		"section" => "checkbox_section",
		"id"      => WPTUTS_SHORTNAME . "_multicheckbox_inputs",
		"title"   => __( 'Multi-Checkbox', 'wptuts_textdomain' ),
		"desc"    => __( 'Some Description', 'wptuts_textdomain' ),
		"type"    => "multi-checkbox",
		"std"     => '',
		"choices" => array( __('Checkbox 1','wptuts_textdomain') . "|chckbx1", __('Checkbox 2','wptuts_textdomain') . "|chckbx2", __('Checkbox 3','wptuts_textdomain') . "|chckbx3", __('Checkbox 4','wptuts_textdomain') . "|chckbx4")	
	);
*/

// Línea modificada - sitio web UEC
	
	return $options;	
}

/**
 * Contextual Help
 */
function wptuts_options_page_contextual_help() {
	
	$text 	= "<h3>" . __('Wptuts Settings - Contextual Help','wptuts_textdomain') . "</h3>";
	$text 	.= "<p>" . __('Contextual help goes here. You may want to use different html elements to format your text as you want.','wptuts_textdomain') . "</p>";
	
	// must return text! NOT echo
	return $text;
} ?>