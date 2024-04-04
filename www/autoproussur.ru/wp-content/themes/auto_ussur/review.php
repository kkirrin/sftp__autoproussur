<?php 
    /*
        Template name: review
    */
?>

<?php get_header(); ?>

<main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>   

            
            <section class="pt-20 md:pt-32">
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
                                <span class="font-bold text-bg-black">Отзывы</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

    
            <!-- Секция отзывы -->
            <section class="pt-12 md:pt-14">
                <div class="container relative">

                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative pb-5">Реальные отзывы клиентов </h2>

                        <a class="flex justify-center py-2 my-4 button popup-link" style="padding-right: 15px; padding-left: 15px;" href="#popup6">Оставить отзыв</a>
                        
                    </div>
                    


                    <div class="tabs-container">
                        <button class="_tabs-item md:text-lg text-xs _active" data-tab="#review">Отзывы</button>
                        <button class="_tabs-item md:text-lg text-xs" data-tab="#video">Видео - отзывы</button>
                
                        <!-- Первый таб со слайдерами -->
                        <div id="video" class="_tabs-block"> 
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                                <?php
                                    $my_posts = get_posts(array(
                                        'numberposts' => 25,
                                        'category_name' => 'file__reviews',
                                        'order' => 'title',
                                        'orderby' => 'rand',
                                        'post_type' => 'post',
                                        'suppress_filters' => true
                                    ));

                                    foreach ($my_posts as $post) :
                                        setup_postdata($post);
                                        $img = get_field('file__img');
                                        $video = get_field('file__video');
                                        $poster = get_field('file__poster');

                                        if ($poster && $video) {
                                    ?>
                                            <div class="rounded-2xl transform hover:scale-105 transition-all w-full">  
                                                <video class="rounded-2xl" controls poster="<?php echo $poster; ?>" alt="отзыв">
                                                    <source src="<?php echo $video; ?>" type="video/mp4"> 
                                                    <source src="<?php echo $video; ?>" type="video/webm"> 
                                                </video>
                                            </div>
                                    <?php
                                        } else {
                                    ?>
                                            <img class="rounded-3xl pb-5 transform hover:scale-105 transition-all w-full" src="<?php echo $img; ?>" alt="">
                                    <?php
                                        }
                                    endforeach;
                                    wp_reset_postdata(); 
                                ?>
                            </div>
                        </div>

                        <div id="review" class="_tabs-block _active"> 
                           

                           <?php
                                $file_path = 'reviews-functions.php';
                                 require_once $file_path;

                                 echo show_reviews();

                           ?>
                            
                           <div class="review__page">
                               <?php echo do_shortcode('[testimonial_view id="2"]'); ?>
                           </div>


                        </div>
                    </div>      
                </div>

                <!-- Акция -->
                <div class="popup__today fixed right-0 top-2/3" style="z-index: 1000;">
                    <div id="popup_promo" class="popup_promo" style="display: flex; justify-content: end;">
                        <div class="">
                            <button class="popup__today__btn" aria-label="Закрыть" tabindex="4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                    <path d="M4 1.45508L19.9099 17.365" stroke="#333"/>
                                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333"/>
                                </svg>
                            </button>
                            <div class="bg-black rounded-3xl p-10 relative w-[400px]">
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
                                    <img  class="absolute -right-5 top-0 pb-5" src="<?php echo get_template_directory_uri() . '/src/img/icons/percent.png'; ?>" alt="">
                                    <h3 class="text-white text-2xl font-bold pb-5">Успей забрать сегодня!</h3>
                                    
                                    <p class="font-medium text-white text-base pb-5">
                                        <?php echo get_field('marka_name', $post->ID); ?>
                                        <?php echo get_field('model_name', $post->ID); ?>
                                    </p>

                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                            
                                <a class="button popup-link flex py-4" href="#popup5" id="popup6__btn">Подробнее</a>
                            </div>
                        </div>
                                </div>
                </div>
            </section>

             <!-- Ответы на частые вопросы -->
            <section class="pt-12 md:pt-32">
                <div class="container">
                    <div class="faq__wrapper">
                        <h2 class="text-center md:text-start text-4xl lg:text-5xl relative pb-5 md:pb-10" style="font-weight: 600;">Ответы на частые вопросы </h2>
                        <div class="faq__tabs _tabs flex flex-col md:flex-row">
                            <ul class="faq__list">
                                <li class="faq__item _tabs-accordion wow fadeInUp" data-wow-delay="0.2s">
                                    <button class="faq__btn _tabs-button">Где производится продукция?</button>
                                    <div class="faq__content _tabs-content">
                                        <p>Задаток выдаётся на поставку конкретной машины и гарантирует приобретение автомобиля покупателем. Часто задаток используется при отсутствии нужной комплектации и заказе её с завода-производителя. В документе указывают дату поставки и размер пени за просроченные дни.
                                        </p>
                                    </div>
                                </li>                              
                                <li class="faq__item _tabs-accordion wow fadeInUp" data-wow-delay="0.2s">
                                    <button class="faq__btn _tabs-button">Сколько времени уходит на покупку автомобиля?</button>
                                    <div class="faq__content _tabs-content">
                                        <p>Задаток выдаётся на поставку конкретной машины и гарантирует приобретение автомобиля покупателем. Часто задаток используется при отсутствии нужной комплектации и заказе её с завода-производителя. В документе указывают дату поставки и размер пени за просроченные дни.
                                        </p>
                                    </div>
                                </li>                              
                                <li class="faq__item _tabs-accordion wow fadeInUp" data-wow-delay="0.2s">
                                    <button class="faq__btn _tabs-button">Для чего нужен задаток? Входит ли он в цену машины?</button>
                                    <div class="faq__content _tabs-content">
                                        <p>Задаток выдаётся на поставку конкретной машины и гарантирует приобретение автомобиля покупателем. Часто задаток используется при отсутствии нужной комплектации и заказе её с завода-производителя. В документе указывают дату поставки и размер пени за просроченные дни.
                                        </p>
                                    </div>
                                </li>                                                     
                            </ul>

                            <ul class="faq__list">
                                <li class="faq__item _tabs-accordion wow fadeInUp" data-wow-delay="0.2s">
                                    <button class="faq__btn _tabs-button">Сколько времени уходит на покупку автомобиля?</button>
                                    <div class="faq__content _tabs-content">
                                        <p>Задаток выдаётся на поставку конкретной машины и гарантирует приобретение автомобиля покупателем. Часто задаток используется при отсутствии нужной комплектации и заказе её с завода-производителя. В документе указывают дату поставки и размер пени за просроченные дни.
                                        </p>
                                    </div>
                                </li>                              
                                <li class="faq__item _tabs-accordion wow fadeInUp" data-wow-delay="0.2s">
                                    <button class="faq__btn _tabs-button">Сколько времени уходит на покупку автомобиля?</button>
                                    <div class="faq__content _tabs-content">
                                        <p>Задаток выдаётся на поставку конкретной машины и гарантирует приобретение автомобиля покупателем. Часто задаток используется при отсутствии нужной комплектации и заказе её с завода-производителя. В документе указывают дату поставки и размер пени за просроченные дни.
                                        </p>
                                    </div>
                                </li>                              
                                <li class="faq__item _tabs-accordion wow fadeInUp" data-wow-delay="0.2s">
                                    <button class="faq__btn _tabs-button">Сколько времени уходит на покупку автомобиля?</button>
                                    <div class="faq__content _tabs-content">
                                        <p>Задаток выдаётся на поставку конкретной машины и гарантирует приобретение автомобиля покупателем. Часто задаток используется при отсутствии нужной комплектации и заказе её с завода-производителя. В документе указывают дату поставки и размер пени за просроченные дни.
                                        </p>
                                    </div>
                                </li>       
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Новости -->
            <section class="pt-12 md:pt-32 p-5 ">
                <div class="container h-[40vh] md:h-auto bg-black relative rounded-2xl overflow-hidden">
                    <img class="hidden md:block absolute -right-52 md:right-0 object-cover" style="height: -webkit-fill-available;" src="<?php echo get_template_directory_uri() . '/src/img/news/news.png'; ?>" alt="">
                    <img class="block left-0 md:hidden absolute bottom-0" src="<?php echo get_template_directory_uri() . '/src/img/news/news_small.png'; ?>" alt="">
                    <div class="pt-5 md:pt-0 p-0 md:p-4 md:p-16 z-100">
                        <h2 class="text-center md:text-start text-2xl lg:text-5xl relative pb-4 text-white" style="font-weight: 600;">Следите за новостями в <br>нашем telegram-канале или <br> на youtube </h2>
                        <div class="flex justify-center md:justify-start gap-2 md:gap-10">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/tg__white.svg'; ?>" alt="">
                            </a>
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/youtube__white.svg'; ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            
            
        </main>


<?php get_footer(); ?>