<?php get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <main class="container max-w-6xl px-8 py-12">
        <h1 class="mb-4 text-2xl lg:text-3xl tracking-tight font-bold text-primary-color-shade"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </main>

<?php endwhile; else: ?>
    <p><?php _e("Desculpe, não encontramos nenhuma postagem."); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
