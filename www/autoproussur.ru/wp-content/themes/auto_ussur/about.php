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
                </div>
            </section>

            <section class="pt-12 md:pt-32">
                <div class="container">
                    <ul class=" flex items-start md:justify-between justify-start flex-wrap gap-10 counter-list">
                        <li class="border bg-black rounded-3xl py-6 px-16 transform hover:scale-105 transition-all">
                            <p class="md:text-5xl text-3xl text-white pt-4 pb-2 inline-flex items-center">
                                <span class="ml-2 mr-4">Более</span>
                                <span class="counter-years md:text-5xl text-3xl text-white w-8 sm:w-16"></span>
                            </p>
                            <p class="md:text-xl text-sm text-gray">лет на рынке</p>
                        </li>
                        <li class="border bg-black rounded-3xl py-6 px-16 transform hover:scale-105 transition-all">
                            <p class="md:text-5xl text-3xl text-white pt-4 pb-2 inline-flex items-center">
                                <span class="ml-2 mr-4">Более</span>
                                <span class="counter-items md:text-5xl text-3xl text-white w-8 sm:w-16"></span>
                            </p>
                            <p class="md:text-xl text-sm text-gray">довольных клиентов по всей России</p>
                        </li>
                        <li class="border bg-black rounded-3xl py-6 px-16 transform hover:scale-105 transition-all">
                            <p class="md:text-5xl text-3xl text-white pt-4 pb-2 inline-flex items-center">
                                <span class="ml-2 mr-4">Более</span>
                                <span class="counter-client md:text-5xl text-3xl text-white w-8 sm:w-16"></span>
                            </p>
                            <p class="md:text-xl text-sm text-gray">автомобилей продаём в год</p>
                        </li>
                    </ul>
                </div>
            </section>

              <!-- Как происходит работа -->
              <section class="pt-12 md:pt-24">
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

                    <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative pb-5 md:pb-10">Собственная стоянка в Уссурийске</h2>

                    <div class="arrows__slider">             
                        <button
                            class="parking-prev rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="parking-next rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>
        
                    <div class="parking-wrapper overflow-hidden">
                        <div class="parking-item">
                            <div class="swiper-wrapper gallery-wrapper">
                                <div class="swiper-slide p-5 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="<?php echo get_template_directory_uri() .'/src/img/stop/stopping.png'; ?>" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                                <div class="swiper-slide p-5 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="<?php echo get_template_directory_uri() .'/src/img/stop/stopping.png'; ?>" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                                <div class="swiper-slide p-5 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="<?php echo get_template_directory_uri() .'/src/img/stop/stopping.png'; ?>" alt="" data-caption="Image caption">
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

                    <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative pb-5 md:pb-10">Отзывы реальных клиентов </h2>
                    
                    <div class="arrows__slider">             
                        <button
                            class="review-prev rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="review-next rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>
                   
        
                    <div class="review-wrapper overflow-hidden">
                        <div class="review-item">
                            <div class="swiper-wrapper">

                              


                                <div class="swiper-slide p-5">
                                    
                                   
                                        <div class="flex flex-col shadow-md bg-white p-7 rounded-2xl transform hover:scale-105 transition-all">
                                            <div class="flex flex-row justify-between pb-7">
                                            <div class="flex gap-5">
                                                <p>Аватар</p>
                                                <p>Дмитрий</p>
                                            </div>

                                            <div class="flex gap-2">
                                                <p>5.0</p>
                                                <p><img src="<?php echo get_template_directory_uri() . '/src/img/icons/star.svg'; ?>" alt=""></p>
                                            </div>
                                        </div>

                                        <div class="text-base pb-7 textFull">
                                            Благодарю компанию AutoPROussur, в помощи приобретения автомобиля Toyota Raсtis из Японии. В особенности менеджеру Алексею, за отличное сотрудничество и понимание. Автомобиль был доставлен в срок, в состоянии соответствуещему фото без нареканий. Забирал машину сам, эмоции переполняли т.к оказалось лучше чем ожидал. Заказывайте автомобили через эту компанию, все честно, грамотно, и без всякого обмана!
                                        </div>

                                        <div class="flex gap-7 pb-7">
                                            <img class="rounded-2xl" src="<?php echo get_template_directory_uri() .'/src/img/review/review_2.png'; ?>">
                                            <img class="rounded-2xl" src="<?php echo get_template_directory_uri() .'/src/img/review/review_2.png'; ?>">
                                        </div>

                                        <div class="text-gray">
                                            26.02.2024  
                                        </div>
                                        <!--                                         
                                        <div class="pt-4 pb-4 pr-3 pl-3">
                                            <button class="watchFull text-yellow hover:text-red">Посмотреть полностью</buton>
                                        </div> -->
                                    </div>



                                    
                                </div>   

                                
<!--                                 
                                ?php
                                    }
                                    wp_reset_postdata();
                                ?> -->
                                <div class="swiper-slide p-5">
                                    <div class="flex flex-col rounded-2xl transform hover:scale-105 transition-all w-full">
                                        <video poster="<?php echo get_template_directory_uri() .'/src/img/review/review_3.png'; ?>"></video>
                                    </div>
                                </div>            
                                <div class="swiper-slide p-5">
                                    <div class="flex flex-col rounded-2xl transform hover:scale-105 transition-all">
                                        <video poster="<?php echo get_template_directory_uri() .'/src/img/review/review_1.png'; ?>"></video>
                                    </div>
                                </div>            
                            </div>
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
                        <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative pb-5 md:pb-10">Ответы на частые вопросы </h2>
                        <div class="faq__tabs _tabs">
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
                <div class="bg-black max-w-xl p-10 rounded-3xl">
                    <div class="pb-5">
                        <h2 class="text-xl lg:text-5xl text-jost font-extrabold text-white relative">Контакты </h2>
                    </div>
                    <ul>
                        <li class="pb-8">
                            <img class="pb-2" src="./src/img/icons_nav/phonw.svg" alt="">
                            <a class="text-white font-bold" href="tel:79510288418">
                                +7 951 028-84-18 
                            </a>
                            <a class="text-white font-bold" href="tel:+79510154751">
                                +7 951 015-47-51
                            </a>
                        </li>
                        <li class="pb-8">
                            <img class="pb-2" src="./src/img/icons_nav/email.svg" alt="">
                            <a href="mailto:lehachechel10@gmail.com" class="text-white font-bold">lehachechel10@gmail.com</a>
                        
                        </li>
                        <li class="pb-8">
                            <img class="pb-2" src="./src/img/icons_nav/geo.svg" alt="">
                                <p class="text-white">г. Уссурийск, ул. Тургенева, 42</p>
                        </li>
                        <li class="pb-8">
                            <img class="pb-2" src="./src/img/icons_nav/clock.svg" alt="">
                                <p class="text-white">Режим работы: 10:00–18:00</p>
                        </li>
                        
                        <button class="bg-red text-white py-4 px-5 rounded-3xl" type="button">
                            Написать на WhatsApp
                        </button>
                    </ul>
                </div>

                <div class="rounded-3xl">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7d14f03da43a713481229bc3e5293be7da1905bc838564f5aeb4bef5ac84089a&amp;width=900&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </section> 
            
    </main>
                                


<?php get_footer(); ?>