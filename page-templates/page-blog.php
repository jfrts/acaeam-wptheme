<?php // Template Name: Blog ?>
<?php get_header(); ?>

<?php $query_blog = new WP_Query(["post_type" => "post", "post_limits" => 4]); ?>

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
            <p
                class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                Blog
            </p>
        </div>
        <h2
            class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block">
                <svg viewBox="0 0 52 24" fill="currentColor"
                    class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                        <pattern id="db164e35-2a0e-4c0f-ab05-f14edc6d4d30" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#db164e35-2a0e-4c0f-ab05-f14edc6d4d30)" width="52" height="24"></rect>
                </svg>
                <span class="relative">Fique por dentro das nossas ações</span>
            </span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque
            ipsa quae.
        </p>
    </div>


    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">

            <?php if(have_posts()) : while($query_blog->have_posts()) : $query_blog->the_post() ?>

            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                <img src="<?php the_post_thumbnail_url() ?>" class="object-cover w-full h-64" alt="" />

                <div class="py-8 px-5 border border-t-0">
                    <a href="/"
                        class="inline-block mb-3 text-2xl text-primary-color-shade font-bold leading-5 transition-colors">
                        <?php the_title() ?>
                    </a>
                    <div class="line-clamp-3 text-gray-700 my-3">
                        <p class="">
                            <?php the_content() ?>
                        </p>
                    </div>
                    <a href="<?php the_permalink() ?>" class="inline-flex items-center transition duration-200 text-primary-color hover:text-primary-color-tint hover:underline">
                        Leia mais
                    </a>
                </div>
            </div>

            <?php endwhile; endif; wp_reset_query(); ?>

        </div>
    </div>

</div>



<?php get_footer(); ?>