<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title><?= bloginfo("name") ?> | <?= bloginfo("description") ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:type" content=website>
    <meta property="og:title" content="ACAEAM | Associação Cultural, Artística e Esportiva: Arte e Movimento.">
    <meta property="og:site_name" content="Associação Cultural, Artística e Esportiva: Arte e Movimento.">
    <meta property="og:url" content="<?= bloginfo("url") ?>">
    <meta property="og:description" content="Associação Cultural, Artística e Esportiva: Arte e Movimento.">
    <meta property="og:image" content="">

    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <link rel="shortcut icon" href="<?= get_theme_file_uri("assets/img/favicon.svg"); ?>" type="image/svg+xml">

    <?php wp_head(); ?>
</head>
<body class="bg-white">  
    <div class="shadow-sm">
        <header class="px-4 container mx-auto max-w-6xl">
            <nav class="px-2 sm:px-4 py-4">
                <div class="container flex relative flex-wrap justify-between items-center mx-auto">
                    <a href="#" class="flex items-center gap-3">
                        <img src="<?= get_theme_file_uri("assets/img/logo-acaeam.svg"); ?>" alt="Logo ACAEAM" class="w-11">
                        <span class="text-gray-900 text-xl font-bold whitespace-nowrap">ACAEAM</span>
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-primary-color rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-primary-off-white dark:focus:primary-color-tint" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Abrir menu principal</span>
                        
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="hidden absolute top-8 w-full md:block md:w-auto md:relative md:top-0 z-50" id="navbar-default">
                        <ul class="flex flex-col bg-primary-off-white mt-4 rounded-md p-4 md:flex-row md:gap-12 md:bg-white md:mt-0">
                            <li class="border-b border-primary-color-tint pt-0 py-4 md:border-0 md:py-0">
                                <a href="" class="font-bold text-primary-color-shade hover:text-primary-color transition-all">
                                    A ACAEAM
                                </a>
                            </li>
                            <li class="border-b border-primary-color-tint py-4 md:border-0 md:py-0">
                                <a href="" class="font-bold text-primary-color-shade hover:text-primary-color transition-all">
                                    Projetos
                                </a>
                            </li>
                            <li class="border-b border-primary-color-tint py-4 md:border-0 md:py-0">
                                <a href="" class="font-bold text-primary-color-shade hover:text-primary-color transition-all">
                                    Blog
                                </a>
                            </li>
                            <li class="border-b border-primary-color-tint py-4 md:border-0 md:py-0">
                                <a href="" class="font-bold text-primary-color-shade hover:text-primary-color transition-all">
                                    Arquivos
                                </a>
                            </li>
                            <li class="py-4 pb-0 md:border-0 md:py-0">
                                <a href="" class="font-bold text-primary-color-shade hover:text-primary-color transition-all">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>