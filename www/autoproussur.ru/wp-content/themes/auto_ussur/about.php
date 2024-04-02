<?php 
/*
Template Name: about
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
                                <span class="font-bold text-bg-black">О компании</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="pt-12 md:pt-14">
                <div class="relative container rounded-3xl">
                    <img class="rounded-3xl object-cover h-[50vh] md:h-auto w-full" src="<?php echo get_template_directory_uri() .'/src/img/about/about__bg.png'; ?>" alt="Background Image">
                    <div class="z-0 left-0 md:left-32 absolute inset-0 flex flex-col justify-center items-start text-left p-8">
                        <h2 class="text-start text-4xl lg:text-5xl font-extrabold relative text-white pb-5 md:pb-10">
                            Компания AutoPROussur
                        </h2>
                        <p class="text-white font-medium pb-5 text-base md:text-xl">
                            Ориентирована на предоставление услуг<br> по выбору, приобретению и доставке <br>Японских автомобилей
                        </p>

                        <button class="bg-red text-center rounded-3xl text-white py-4 px-6 text-lg font-bold"> Перейти в каталог </button>

                    </div>

                    <ul class="right-0 absolute flex items-start md:justify-between justify-center flex-wrap gap-4 counter-list counter-list__about">
                        <li class="border bg-black rounded-3xl py-3 md:py-6 px-10 md:px-16 transform hover:scale-105 transition-all">
                            <p class="md:text-5xl text-3xl text-white pt-4 pb-2 inline-flex items-center">
                                <span class="ml-2 mr-4 md:text-5xl text-3xl">Более</span>
                                <span class="counter-years md:text-5xl text-3xl text-white w-8 sm:w-16"></span>
                            </p>
                            <p class="md:text-xl text-sm text-gray">лет на рынке</p>
                        </li>
                        <li class="border bg-black rounded-3xl py-3 md:py-6 px-10 md:px-16 transform hover:scale-105 transition-all">
                            <p class="md:text-5xl text-3xl text-white pt-4 pb-2 inline-flex items-center">
                                <span class="ml-2 mr-4 md:text-5xl text-3xl">Более</span>
                                <span class="counter-items md:text-5xl text-3xl text-white w-8 sm:w-16"></span>
                            </p>
                            <p class="md:text-xl text-sm text-gray">довольных клиентов по всей России</p>
                        </li>
                        <li class="border bg-black rounded-3xl py-3 md:py-6 px-10 md:px-16 transform hover:scale-105 transition-all">
                            <p class="md:text-5xl text-3xl text-white pt-4 pb-2 inline-flex items-center">
                                <span class="ml-2 mr-4 md:text-5xl text-3xl">Более</span>
                                <span class="counter-client md:text-5xl text-3xl text-white w-8 sm:w-16"></span>
                            </p>
                            <p class="md:text-xl text-sm text-gray">автомобилей продаём в год</p>
                        </li>
                    </ul>
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


                    


              <!-- Как происходит работа -->
              <section class="how__we__work__section__about">
                <div class="container relative h-max">
                    <img class="hidden sm:hidden md:block absolute bg-no-repeat bg-center top-10 scale-75 md:scale-100" src="<?php echo get_template_directory_uri() . '/src/img/how/how__bg.png' ;?>" alt="">
                    <img class="block sm:block md:hidden absolute bg-no-repeat bg-center top-10 scale-75 md:scale-100" src="<?php echo get_template_directory_uri() . '/src/img/how/how__bg__small.png' ;?>" alt="">
                    
                    <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative pb-5 md:pb-10">Как происходит работа?</h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 pt-10 how__we__work">
                        <div style="width: -webkit-fill-available;" class="h-min relative p-7  bg-black rounded-2xl">
                            <img class="absolute -top-5 right-0 left-0 m-auto" src="<?php echo get_template_directory_uri() .'/src/img/how/1.svg'; ?>" alt="">
                            <div>
                                <p class="text-center md:text-start text-white text-xl pt-12 pb-5 font-bold">
                                    Выбор автомобиля
                                </p>

                                <p class="text-center md:text-start text-gray text-base">
                                    Обговариваем и согласуем ваши требования к параметрам автомобиля и бюджет, помогаем в подборе
                                </p>
                            </div>
                        </div>
                        <div style="width: -webkit-fill-available;" class="h-min relative mt-0 md:mt-14 p-7  bg-black rounded-2xl">
                            <img class="absolute -top-5 right-0 left-0 m-auto" src="<?php echo get_template_directory_uri() .'/src/img/how/2.svg'; ?>" alt="">
                            <div>g
                                <p class="text-center md:text-start text-white text-xl pt-12 pb-5 font-bold">
                                    Заключение договора
                                </p>

                                <p class="text-center md:text-start text-gray text-base">
                                    От вас необходимы: ксерокопия паспорта, заверенная натариусом, снилса и инн
                                </p>
                                <a href="">Образец договора</a>
                            </div>
                        </div>
                        <div style="width: -webkit-fill-available;" class="h-min relative p-7 bg-black rounded-2xl">
                            <img class="absolute -top-5 right-0 left-0 m-auto" src="<?php echo get_template_directory_uri() .'/src/img/how/3.svg'; ?>" alt="">
                            <div>
                                <p class="text-center md:text-start text-white text-xl pt-12 pb-5 font-bold">
                                    Вносится предоплата
                                </p>

                                <p class="text-center md:text-start text-gray text-base">
                                    30 000–50 000 ₽ в зависимости от выбранного автомобиля
                                </p>
                            </div>
                        </div>
                        <div style="width: -webkit-fill-available;" class="h-min relative mt-0 md:mt-14 p-7 bg-black rounded-2xl">
                            <img class="absolute -top-5 right-0 left-0 m-auto" src="<?php echo get_template_directory_uri() .'/src/img/how/4.svg'; ?>" alt="">
                            <div>
                                <p class="text-center md:text-start text-white text-xl pt-12 pb-5 font-bold">
                                    Передача автомобиля или доставка по РФ
                                </p>

                                <p class="text-center md:text-start text-gray text-base">
                                    Вы вносите оставшеюся сумма и автомобиль с полным пакетом документов передаётся вам
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Собственная стоянка в Уссурийске -->
            <section class="pt-12 md:pt-36">
                <div class="container relative">

                    <h2 class="text-center md:text-start text-4xl lg:text-5xl relative pb-5 md:pb-10" style="font-weight: 600;">Собственная стоянка в Уссурийске</h2>

                    <div class="arrows__slider">             
                        <button
                            class="parking-prev rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="parking-next rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>

                    <div class="parking-wrapper overflow-hidden">
                        <div class="parking-item">
                            <div class="swiper-wrapper gallery-wrapper">
                                <div class="swiper-slide p-2 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="<?php echo get_template_directory_uri() . '/src/img/stop/stopping.png'; ?>" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                                <div class="swiper-slide p-2 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="<?php echo get_template_directory_uri() . '/src/img/stop/stopping.png'; ?>" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                                <div class="swiper-slide p-2 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="<?php echo get_template_directory_uri() . '/src/img/stop/stopping.png'; ?>" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                            </div>
                        </div> 
                    </div>       
                </div>
            </section>

            <!-- Секция отзывы -->
            <section class="pt-12 md:pt-36">
                <div class="container relative">

                    <h2 class="text-center md:text-start text-4xl lg:text-5xl relative pb-5 md:pb-10" style="font-weight: 600;">Отзывы реальных клиентов </h2>
                    
                    <div class="arrows__slider">             
                        <button
                            class="review-prev rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="review-next rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>
                    

                    <div class="review-wrapper">
                        <div class="review-item p-0 md:p-4 overflow-hidden">

                            <?php
                                $file_path = 'review-slider-functions.php';
                                    require_once $file_path;

                                    echo showReviewSlider();
                            ?>

                        </div>
                    </div>       
                    
                </div>
            </section> 

            <!-- Банки партнеры -->
            <section class="pt-12 md:pt-36">
                <div class="container">
                    <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative pb-5 md:pb-10">Банки-партнеры </h2>
                    <p class="text-xl pb-8">Мы сотрудничаем с банками для вашего удобства</p>
                    <div class="flex justify-center md:justify-start gap-10 items-center flex-wrap">
                        <img class="transform hover:scale-105 transition-all" src="<?php echo get_template_directory_uri().'/src/img/banks/atb.png'; ?>" alt="">
                        <img class="transform hover:scale-105 transition-all" src="<?php echo get_template_directory_uri().'/src/img/banks/sber.png'; ?>" alt="">
                        <img class="transform hover:scale-105 transition-all" src="<?php echo get_template_directory_uri().'/src/img/banks/vtb.png'; ?>" alt="">
                    </div>
                </div>
            </section> 

          <!-- Ответы на частые вопросы -->
            <section class="pt-12 md:pt-36">
                <div class="container">
                    <div class="faq__wrapper">
                        <h2 class="text-center md:text-start text-4xl lg:text-5xl relative pb-5 md:pb-10" style="font-weight: 600;">Ответы на частые вопросы </h2>
                        <div class="faq__tabs _tabs flex flex-col md:flex-row gap-10">
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
           <section class="pt-12 md:pt-36 p-5 ">
            <div class="container h-[40vh] md:h-auto bg-black relative rounded-2xl overflow-hidden">
                <img class="hidden md:block absolute -right-52 md:right-0 object-cover" style="height: -webkit-fill-available;" src="<?php echo get_template_directory_uri() .'/src/img/news/news.png'; ?>" alt="">
                <img class="block left-0 md:hidden absolute bottom-0" src="<?php echo get_template_directory_uri() .'/src/img/news/news_small.png'; ?>" alt="">
                <div class="p-4 md:p-16 z-100">
                    <h2 class="text-xl lg:text-5xl font-extrabold relative pb-4 text-white">Следите за новостями в <br>нашем telegram-канале или <br> на youtube </h2>
                    <div class="flex justify-start gap-10">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/icons/tg__white.svg'; ?>" alt="">
                        </a>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/icons/youtube__white.svg'; ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

      
        <!-- Контакты -->
        <section class="pt-12 md:pt-36">
            <div class="container relative flex justify-between flex-wrap md:flex-row flex-col gap-10">
                <div class="bg-black max-w-xl p-10 rounded-3xl contact__div">
                    <div class="pb-5">
                        <h2 class="text-start text-4xl lg:text-5xl relative text-white" style="font-weight: 600;">Контакты </h2>
                    </div>
                    <ul>
                        <li class="pb-8">
                            <a class="text-white font-bold" href="tel:79510288418">
                                +7 951 028-84-18 
                            </a>
                            <a class="text-white font-bold" href="tel:+79510154751">
                                +7 951 015-47-51
                            </a>
                        </li>
                        <li class="pb-8">
                            <a href="mailto:lehachechel10@gmail.com" class="text-white font-bold">lehachechel10@gmail.com</a>
                        
                        </li>
                        <li class="pb-8">
                                <p class="text-white">г. Уссурийск, ул. Тургенева, 42</p>
                        </li>
                        <li class="pb-8">
                                <p class="text-white">Режим работы: 10:00–18:00</p>
                        </li>
                        
                        <a class="bg-red text-white py-4 px-5 rounded-3xl" href="https://api.whatsapp.com/send/?phone=79510154751">
                            Написать на WhatsApp
                        </a>
                    </ul>
                </div>

                <div class="rounded-3xl">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7d14f03da43a713481229bc3e5293be7da1905bc838564f5aeb4bef5ac84089a&amp;width=900&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </section> 
            
    </main>
                                


<?php get_footer(); ?>