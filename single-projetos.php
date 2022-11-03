<?php get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<main class="container max-w-6xl px-8 py-12">
    <h1 class="pb-4 border-b border-gray-200 text-2xl lg:text-3xl tracking-tight font-bold text-primary-color-shade">
        <?php the_title(); ?>
    </h1>

    <div class="blog-post py-6">
        <?php the_content(); ?>
    </div>

    <?php if(get_field("_cmb_imagens")) { ?>
    <div class="swiper projectsSlide w-[640px]">
        <div class="swiper-wrapper w-[640px]">
            <?php foreach(get_field("_cmb_imagens") as $image) { ?>
            <div class="swiper-slide" style="justify-content: center !important">
                <img src="<?= $image ?>" alt="" class="w-[640px]">
            </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <?php } ?>
</main>

<?php endwhile; else: ?>
<p><?php _e("Desculpe, não encontramos nenhuma postagem."); ?></p>
<?php endif; ?>

<?php get_footer(); ?>