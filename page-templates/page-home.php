<?php // Template Name: Home ?>
<?php get_header(); ?>

    <main class="py-4">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper container py-12 max-w-6xl w-full items-center">
                <?php foreach(get_field("slide_home") as $slide) { ?>
                    <div class="swiper-slide flex flex-col gap-12 justify-between px-8 md:flex-row md:gap-24">
                        <div class="md:max-w-[524px] flex flex-col justify-center items-center md:items-start">
                            <h1 class="text-2xl font-bold text-center tracking-tight text-primary-shade md:text-3xl md:text-left">
                                <?= $slide["title"] ?>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 text-center sm:mx-auto sm:mt-5 sm:text-lg md:mt-5 md:text-xl lg:mx-0 md:text-left">
                                <?= $slide["description"] ?>
                            </p>
                            <a href="<?= $slide["button_url"] ?>" class="py-4 px-12 text-lg font-bold mt-8 max-w-xs text-center text-primary-off-white rounded-md inline-block bg-primary-color transition-all duration-300 border border-primary-color hover:bg-primary-off-white hover:text-primary-color">
                                <?= $slide["button_text"] ?>
                            </a>
                        </div>
                        <div class="right-0 max-w-lg">
                            <img src="<?= $slide["slide_img"] ?>" alt="<?= $slide["title"] ?>">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="swiper-button-next text-primary-color"></div>
        <div class="swiper-button-prev"></div>
    </main>

    <?php $query = new WP_Query(["post_type" => "projetos", "post_limits" => 4]); ?>
    <section class="bg-primary-off-white px-4">
        <div class="py-8 px-4 mx-auto container max-w-6xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-primary-color-shade">
                    <?= get_field("projects_title") ?>
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    <?= get_field("projects_description") ?>
                </p>
            </div> 
            <?php if($query->have_posts()): ?>
                <div class="grid gap-8 lg:grid-cols-2">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                            <div class="flex justify-between items-center mb-5 text-gray-500">
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-primary-color-shade">
                                <a href="#">
                                    <?= the_title(); ?>
                                </a>
                            </h2>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                <?= get_field("_cmb_short_description") ?>
                            </p>
                            <div class="flex justify-between items-center">
                                <a href="<?= the_permalink(); ?>" class="inline-flex items-center font-medium text-primary-color hover:underline">
                                    Saiba mais
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>  
            <?php endif; wp_reset_query(); ?>      
        </div>
    </section>

    <section class="text-gray-600 body-font overflow-hidden container max-w-6xl px-4">
        <div class="container px-5 py-16 mx-auto">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-primary-color-shade">
                    <?= get_field("files_title") ?>
                </h2>
                <p class="font-light sm:text-xl text-gray-400">
                    <?= get_field("files_description") ?>
                </p>
            </div> 

            <?php $query_files = new WP_Query(["post_type" => "arquivos", "post_limits" => 6]); ?>
            <?php if($query_files->have_posts()): ?>

            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="py-8 flex flex-wrap flex-col gap-12">

                    <?php while ($query_files->have_posts()) : $query_files->the_post(); ?>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
                                <?php the_title(); ?>
                            </h2>
                            <p class="leading-relaxed">
                                <?= get_field("_cmb_files_short_description") ?>
                            </p>
                            <a href="<?= get_field("_cmb_files_file") ?>" target="_blank" class="text-green-500 inline-flex items-center mt-4 hover:underline">
                                Fazer download
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; wp_reset_query(); ?>      
        </div>
    </section>
    
    <section class="py-16 bg-primary-color-shade">
        <div class="container px-4 mx-auto max-w-6xl">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-primary-off-white">
                    <?= get_field("_cmb2_blog_title") ?>
                </h2>
                <p class="font-light text-white/[.85] sm:text-xl">
                    <?= get_field("_cmb2_blog_description") ?>
                </p>
            </div>
            
            <div class="-mx-4 flex flex-wrap">
                
                <?php $query_blog = new WP_Query(["post_type" => "post", "post_limits" => 4]); ?>
                <?php if(have_posts()) : while($query_blog->have_posts()) : $query_blog->the_post() ?>                

                <article class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="overflow-hidden rounded">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" class="w-full"/>
                        </div>
                    <div>
                    <div class="bg-white py-8 px-6 rounded-b">
                        <h3>
                            <a href="#" class="text-black mb-4 inline-block font-bold text-xl">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p class="text-body-color text-base">
                            <?= the_content(); ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="inline-flex items-center mt-6 font-medium text-primary-color hover:underline">
                            Continuar lendo
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>

                <?php endwhile; endif; wp_reset_query(); ?> 

            </div>
        </div>
    </section>

    <?php if(get_field("sponsors")) : ?>
        <section class="container overflow-hidden max-w-6xl px-4 py-12">
            <div class="swiper swiper-brand brandsSwiper">
                <div class="swiper-wrapper flex items-center">
                    <?php foreach(get_field("sponsors") as $sponsor) { ?>
                        <div class="swiper-slide swiper-slide-brand">
                            <img src="<?= $sponsor ?>" class="grayscale transition hover:grayscale-0">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php get_footer(); ?>