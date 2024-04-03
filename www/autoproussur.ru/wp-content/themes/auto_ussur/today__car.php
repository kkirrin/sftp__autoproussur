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
                        <div class="swiper-slide flex flex-col w-[310px] relative">
                        <?php echo get_field('state') ? '<span style="width: max-content; top: 10px; left: 10px;" class="absolute bg-yellow py-2 px-4 rounded-3xl">' . get_field('state') . '</span>' : ''; ?>
                        <?php echo get_field('sale') ? '<span style="width: max-content; top: 10px; left: 250px;" class="absolute bg-red py-2 px-4 rounded-3xl">' . get_field('sale') . ' %</span>' : ''; ?>

                        <a href="<?php echo the_permalink(); ?>">
                        
                            <img class="rounded-3xl pb-5" src="<?php echo $firstPhoto['url']; ?>" alt="<?php echo $firstPhoto['alt']; ?>">
                            <p class="font-bold text-black text-base md:text-xl pb-6">
                                <?php echo get_field('marka_name', $post->ID); ?>
                                <?php echo get_field('model_name', $post->ID); ?>
                            </p>    
                        </a>
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
                                    <!-- <a href="#popup4" class="button__order popup-link"> <?php echo get_field('state') === 'В пути' ? 'Заказать' : 'Купить'; ?></a> -->
                                    <a href="#popup8" class="button__order popup-link">Заказать</a>
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
    <section class="pt-12 md:pt-32 p-5 ">
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

       <!-- Заявка на купить авто -->
       <section id="popup8" class="popup">
                <div class="popup__body">
                    <div class="popup__content">
                        <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                <path d="M4 1.45508L19.9099 17.365" stroke="#333"/>
                                <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333"/>
                                </svg>
                        </button>
                        <h2 class="text-start text-black z-10  md:text-4xl text-xl pb-7 font-bold">Хотите купить автомобиль?</h2>
                        <div class="flex items-start justify-start">
                            <p class="text-black md:text-base text-sm text-start pb-7">Оставьте контакты и наш менеджер свяжется с вами 
                                в течение 15 минут и проконсультирует по всем вопросам</p>
                        </div>

                        <div class="form-wrapper">
                            <?php echo do_shortcode('[contact-form-7 id="ff42d03" title="Заявка на покупку автомобиля"]'); ?>

                            <p class="text-gray text-sm text-start pt-7">
                                Нажимая кнопку «Заказать звонок» вы даёте согласие <br> на обработку персональных данных
                            </p>

                            <p class="text-red text-start font-bold pt-7">Если не хотите ждать напишите на <a class="nav-link" href="https://api.whatsapp.com/send/?phone=79510154751" class="underline">WhatsApp<a></p>
                        </div>
                    </div>
                </div>
            </section>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery('#order-name').val("<?php the_field('marka_name'); ?> <?php the_field('model_name'); ?>");
                    jQuery('#order-price').val("<?php echo get_field('price'); ?>");
                });
            </script>


</main>


<?php get_footer(); ?>