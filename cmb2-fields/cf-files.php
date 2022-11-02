<?php

add_action('cmb2_init', 'cmb2_add_files');

function cmb2_add_files() {
	$prefix = '_cmb_files_';

	$cmb_files = new_cmb2_box([
		'id' => $prefix . 'files',
		'title' => __('Informações sobre o arquivo', 'cmb2'),
		'object_types' => ['arquivos'],
		'priority' => 'high',
	]);

	$cmb_files->add_field([
		'id' => $prefix . 'short_description',
		'name' => __('Descrição Curta', 'cmb2'),
		'title' => __('Descrição Curta', 'cmb2'),
		'type' => 'textarea',
	]);

	$cmb_files->add_field([
		'name' => __('Arquivo', 'cmb2'),
		'id' => $prefix . 'file',
		'type' => 'file',
	]);
}

?>