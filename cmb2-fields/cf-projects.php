<?php

add_action('cmb2_init', 'cmb2_add_projects');

function cmb2_add_projects() {
	$prefix = '_cmb_';

	$cmb = new_cmb2_box([
		'id' => $prefix . 'projetos',
		'title' => __('Informações sobre o Projeto', 'cmb2'),
		'object_types' => ['projetos'],
		'priority' => 'high',
	]);

	$cmb->add_field([
		'id' => $prefix . 'short_description',
		'name' => __( 'Descrição Curta', 'cmb2' ),
		'title' => __('Descrição Curta', 'cmb2'),
		'type' => 'textarea',
	]);

	$cmb->add_field([
		'name' => __( 'Imagens', 'cmb2' ),
		'id' => $prefix . 'imagens',
		'type' => 'file_list',
	]);
}

?>