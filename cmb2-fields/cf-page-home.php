<?php

add_action("cmb2_init", "cmb2_cf_home");

function cmb2_cf_home() {
    // SLIDE
    $cmb_slide = new_cmb2_box([
        "id" => "home_box_slide",
        "title" => "Slide",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "id",
            "value" => "7"
        ],
    ]);

    $group_field_id = $cmb_slide->add_field([
        "id" => "slide_home",
        "type" => "group",
        "options" => [
            "group_title" => __("Slide - {#}", "cmb2"),
            "add_button" => __("Adicionar novo slide", "cmb2"),
            "remove_button" => __("Remover slide", "cmb2"),
            "sortable" => true,
        ],
    ]);

    $cmb_slide->add_group_field($group_field_id, [
        "name" => "Título",
        "id" => "title",
        "type" => "text",
    ]);
    
    $cmb_slide->add_group_field($group_field_id, [
        "name" => "Descrição",
        "id"   => "description",
        "type" => "textarea",
    ]);

    $cmb_slide->add_group_field($group_field_id, [
        "name" => "Texto do botão",
        "id" => "button_text",
        "type" => "text",
    ]);

    $cmb_slide->add_group_field($group_field_id, [
        "name" => "Link do botão",
        "id" => "button_url",
        "type" => "text",
    ]);

    $cmb_slide->add_group_field($group_field_id, [
        "name" => "Título",
        "id" => "title",
        "type" => "text",
    ]);
    
    $cmb_slide->add_group_field($group_field_id, [
        "name" => "Imagem",
        "desc" => "Enviar uma imagem ou URL",
        "id" => "slide_img",
        "type" => "file",
        "options" => [
            "url" => false,
        ],
        "text" => [
            "add_upload_file_text" => "Adicionar Imagem"
        ],
        "query_args" => [
            "type" => ["image/jpeg", "image/png"],
        ],
        "preview_size" => "large",
    ]);

    // PROJECTS
    $cmb_projects = new_cmb2_box([
        "id" => "home_box_projects",
        "title" => "Projetos",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "id",
            "value" => "7"
        ],
    ]);

    $cmb_projects->add_field([
        "id" => "projects_title",
        "name" => "Título",
        "type" => "text",
    ]);

    $cmb_projects->add_field([
        "id" => "projects_description",
        "name" => "Descrição",
        "type" => "textarea",
    ]);

    // FILES
    $cmb_files = new_cmb2_box([
        "id" => "home_box_files",
        "title" => "Arquivos",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "id",
            "value" => "7"
        ],
    ]);

    $cmb_files->add_field([
        "id" => "files_title",
        "name" => "Título",
        "type" => "text",
    ]);

    $cmb_files->add_field([
        "id" => "files_description",
        "name" => "Descrição",
        "type" => "textarea",
    ]);

    // BLOG
    $cmb_blog = new_cmb2_box([
        "id" => "home_box_blog",
        "title" => "Blog",
        "object_types" => ["page"],
        'priority' => 'high',
        "show_on" => [
            "key" => "id",
            "value" => "7"
        ],
    ]);

    $cmb_blog->add_field([
        "id" => "_cmb2_blog_title",
        "name" => "Titulo",
        "type" => "text",
    ]);

    $cmb_blog->add_field([
        "id" => "_cmb2_blog_description",
        "name" => "Descrição",
        "type" => "textarea",
    ]);

    // SPONSORS
    $cmb_sponsors = new_cmb2_box([
        "id" => "home_box_sponsors",
        "title" => "Patrocinadores",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "id",
            "value" => "7"
        ],
    ]);

    $cmb_sponsors->add_field([
        "id" => "sponsors",
        "type" => "file_list",
        "text" => [
            "add_upload_files_text" => "Adicionar Imagens"
        ],
    ]);
}

?>