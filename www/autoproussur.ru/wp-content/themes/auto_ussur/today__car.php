<?php 
    /*
        Template Name: today__car
    */
?>

<?php get_header(); ?>

<main>

    <h1 class="visually-hidden">Скрытый заголовок</h1>

    <section class="pt-32">
        <div class="container">

            <div class="breadcrumb">
                <ul class="breadcrumb__list flex items-center justify-start gap-2">
                    <li class="breadcrumb__item text-bg-black opacity-60 ">
                        <a href="/" class="font-medium">
                            Главная
                        </a>
                    </li>
                    <li class="opacity-60 text-bg-black">
                        -
                    </li>
                    <li class="breadcrumb__item">
                        <span class="font-bold text-bg-black">Каталог</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="pt-12 md:pt-20">
        <div class="container relative">
            <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10">
            <?php
                    $my_posts = get_posts(array(
                        'numberposts' => 25,
                        'category_name' => 'promotion',
                        'order' => 'title',
                        'orderby' => 'rand',
                        'post_type' => 'post',
                        'suppress_filters' => true
                    ));

                    foreach ($my_posts as $post) : 
                        setup_postdata($post);
                        $photos = get_field('photo_slide', $post->ID);
                        $firstPhoto = reset($photos);
                    ?>
                        <div class="swiper-slide flex flex-col w-[310px]">
                        <img class="rounded-3xl pb-5" src="<?php echo $firstPhoto['url']; ?>" alt="<?php echo $firstPhoto['alt']; ?>">
                                <p class="font-bold text-black text-base md:text-xl pb-6">
                                <?php echo get_field('marka_name', $post->ID); ?>
                                <?php echo get_field('model_name', $post->ID); ?>

                                <ul>
                                    <div class="flex justify-between flex-row">
                                            <li class="text-gray pb-2">Год выпуска</li>
                                            <li class="pb-6">
                                            <?= get_field('year') ? get_field('year') : '-'; ?>
                                            </li>
                                    </div> 
                                    <div class="flex justify-between flex-row">
                                            <li class="text-gray pb-2">Пробег</li>
                                            <li class="pb-6">
                                                <?php echo get_field('milleage') ? get_field('milleage') : '-'  ?>
                                            </li>
                                    </div> 
                                    <div class="flex justify-between flex-row">
                                            <li class="text-gray pb-2">Топливо</li>
                                            <li class="pb-6">
                                            <?php echo get_field('fuel') ? get_field('fuel') : '-'; ?>
                                            </li>
                                    </div> 
                                    <div class="flex justify-between flex-row">
                                            <li class="text-gray pb-2">Объём двигателя</li>
                                            <li class="pb-6">
                                                <?php echo get_field('volume') ? get_field('volume') : '-'; ?>
                                            </li>
                                    </div> 
                                    <div class="flex justify-between flex-row">
                                            <li class="text-gray pb-2">Привод</li>
                                            <li>
                                                <?php echo get_field('drive') ? get_field('drive') : '-'; ?>
                                            </li>
                                    </div> 
                                </ul>

                                <p class="text-black py-6"> 
                                    <?php echo get_field('price', $post->ID); ?> ₽
                                </p>


                                <div class="flex gap-5 justify-between items-center">
                                    <a href="#popup5" class="button__order popup-link">Заказать</a>
                                    <a href="<?php echo the_permalink(); ?>" class="button__circle">
                                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow__order.svg'; ?>" alt="">
                                    </a>
                                </div>
                        </div>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </section>


    <!-- Новости -->
    <section class="pt-12 md:pt-36 p-5 ">
        <div class="container h-[40vh] md:h-auto bg-black relative rounded-2xl overflow-hidden">
            <img class="hidden md:block absolute -right-52 md:right-0 object-cover" style="height: -webkit-fill-available;" src="src/img/news/news.png" alt="">
            <img class="block left-0 md:hidden absolute bottom-0" src="src/img/news/news_small.png" alt="">
            <div class="p-4 md:p-16 z-100">
                <h2 class="text-xl lg:text-5xl font-extrabold relative pb-4 text-white">Следите за новостями в <br>нашем telegram-канале или <br> на youtube </h2>
                <div class="flex justify-start gap-10">
                    <img src="src/img/icons/tg__white.svg" alt="">
                    <img src="src/img/icons/youtube__white.svg" alt="">
                </div>
            </div>
        </div>
    </section>


</main>


<?php get_footer(); ?>