<?php // Template Name: Home ?>
<?php get_header(); ?>

    <main class="">
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
            <div class="grid gap-8 lg:grid-cols-2">
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-primary-color-shade">
                        <a href="#">
                            How to quickly deploy a static website
                        </a>
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="inline-flex items-center font-medium text-primary-color hover:underline">
                            Saiba mais
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>  
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-primary-color-shade"><a href="#">How to quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="inline-flex items-center font-medium text-primary-color hover:underline">
                            Saiba mais
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-primary-color-shade"><a href="#">How to quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="inline-flex items-center font-medium text-primary-color hover:underline">
                            Saiba mais
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-primary-color-shade"><a href="#">How to quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="inline-flex items-center font-medium text-primary-color hover:underline">
                            Saiba mais
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>              
            </div>  
        </div>
    </section>

    <section class="text-gray-600 body-font overflow-hidden container max-w-6xl px-4">
        <div class="container px-5 py-16 mx-auto">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-primary-color-shade">
                    <?= get_field("files_title") ?>
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    <?= get_field("files_description") ?>
                </p>
            </div> 
            <div class="-my-8 divide-y-2 divide-gray-100">
            <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                <a class="text-green-500 inline-flex items-center mt-4">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                </div>
            </div>
            <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Meditation bushwick direct trade taxidermy shaman</h2>
                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                <a class="text-green-500 inline-flex items-center mt-4">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                </div>
            </div>
            <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                <span class="text-sm text-gray-500">12 Jun 2019</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Woke master cleanse drinking vinegar salvia</h2>
                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                <a class="text-green-500 inline-flex items-center mt-4">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-primary-color-shade">
        <div class="container px-4 mx-auto max-w-6xl">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-primary-off-white">
                    <?= get_field("blog_title") ?>
                </h2>
                <p class="font-light text-white/[.85] sm:text-xl">
                    <?= get_field("blog_description") ?>
                </p>
            </div> 
            <div class="-mx-4 flex flex-wrap">
                <article class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="overflow-hidden rounded">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg" alt="image" class="w-full"/>
                        </div>
                    <div>
                    <div class="bg-white py-8 px-6 rounded-b">
                        <h3>
                            <a href="#" class="text-black mb-4 inline-block font-bold text-2xl">
                                Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                        <p class="text-body-color text-base">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <a href="#" class="inline-flex items-center mt-6 font-medium text-primary-color hover:underline">
                            Continuar lendo
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>

                <article class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="overflow-hidden rounded">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg" alt="image" class="w-full"/>
                        </div>
                    <div>
                    <div class="bg-white py-8 px-6 rounded-b">
                        <h3>
                            <a href="#" class="text-black mb-4 inline-block font-bold text-2xl">
                                Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                        <p class="text-body-color text-base">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <a href="#" class="inline-flex items-center mt-6 font-medium text-primary-color hover:underline">
                            Continuar lendo
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>

                <article class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="overflow-hidden rounded">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg" alt="image" class="w-full"/>
                        </div>
                    <div>
                    <div class="bg-white py-8 px-6 rounded-b">
                        <h3>
                            <a href="#" class="text-black mb-4 inline-block font-bold text-2xl">
                                Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                        <p class="text-body-color text-base">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <a href="#" class="inline-flex items-center mt-6 font-medium text-primary-color hover:underline">
                            Continuar lendo
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="container overflow-hidden max-w-6xl px-4 py-12">
        <div class="swiper swiper-brand brandsSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-brand">Slide 1</div>
                <div class="swiper-slide swiper-slide-brand">Slide 2</div>
                <div class="swiper-slide swiper-slide-brand">Slide 3</div>
                <div class="swiper-slide swiper-slide-brand">Slide 4</div>
                <div class="swiper-slide swiper-slide-brand">Slide 5</div>
                <div class="swiper-slide swiper-slide-brand">Slide 6</div>
                <div class="swiper-slide swiper-slide-brand">Slide 7</div>
                <div class="swiper-slide swiper-slide-brand">Slide 8</div>
                <div class="swiper-slide swiper-slide-brand">Slide 9</div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
