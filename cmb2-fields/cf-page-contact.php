<?php

add_action('cmb2_init', 'cmb2_cf_contact');

function cmb2_cf_contact() {
	$prefix_contact = '_cmb_contact_';

	$cmb_contact = new_cmb2_box([
        "id" => "contact_box_slide",
        "title" => "Informações de contato",
        "object_types" => ["page"],
		'context' => 'advanced',
		'priority' => 'high',
        "show_on" => [
            "key" => "id",
            "value" => "53"
        ],
    ]);

	$cmb_contact->add_field([
		'name' => __('Texto Descritivo', 'cmb2'),
		'id' => $prefix_contact . 'texto_descritivo',
		'type' => 'textarea',
	]);
	
	$cmb_contact->add_field([
		'name' => __('WhatsApp', 'cmb2'),
		'id' => $prefix_contact . 'whatsapp',
		'type' => 'text',
	]);
	
	$cmb_contact->add_field([
		'name' => __('E-mail', 'cmb2'),
		'id' => $prefix_contact . 'e_mail',
		'type' => 'text',
	]);
	
	$cmb_contact->add_field([
		'name' => __('Localização', 'cmb2'),
		'id' => $prefix_contact . 'localizacao',
		'type' => 'textarea',
	]);	
};

?>