<?php 
    /* 
        Template name: card__item
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
                                <span class="font-bold text-bg-black">Название машины</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <section class="pt-12 md:pt-14">
                <div class="container">
                    <h2 class="text-start text-4xl lg:text-5xl font-extrabold relative pb-5">
                        <!-- <?php the_field('marka_name'); ?> <?php the_field('model_name'); ?> -->
                           
                                <!-- <?php the_field('price'); ?>₽ -->
                                НАЗВАНИЕ АВТО
                        
                    </h2>
                    <div class="flex flex-col md:flex-row  gap-10 ">
                        <section class="section product__item w-full md:w-2/3">
                            <div class="container">
                                <div class="section__wrapper">
                                <div class="card card--product">
                                    <div class="slider card__slider relative">
                                        <div class="swiper slider__slider">
                                            <div class="swiper-wrapper gallery-wrapper">
                                               
                                            <!-- <?php
                                                $photos = get_field('галерея');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                        echo '<div class="swiper-slide">';
                                                        echo '<img class="img_car md:w-[650px] md:h-[500px] w-[335px] h-[290px]" src="' . esc_url($photo['url']) . '" alt="">';
                                                        echo '</div>';
                                                    }
                                                } else {
                                                    echo 'No photos found.'; 
                                                }
                                            ?> -->
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_1.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_2.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_1.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_2.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_1.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_2.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_1.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="src/img/item/item_slide_3.png">
                                                        <img class="img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="src/img/item/item_slide_2.png" alt="" data-caption="Image caption">>
                                                    </a>
                                                </div>
                                            </div>
                                       
                                        </div>
        
                                        <div class="swiper slider__thumb md:pt-10 pt-5 md:w-full w-80 md:relative absolute">
                                            <div class="swiper-wrapper">
                                            <!-- <?php
                                                $photos = get_field('галерея');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                        echo '<div class="swiper-slide">';
                                                        echo '<img class="img_car md:w-24 md:h-24 w-[60px] h-[60px]" src="' . esc_url($photo['url']) . '" alt="">';
                                                        echo '</div>';
                                                    }
                                                } else {
                                                    echo 'No photos found.'; 
                                                }
                                            ?> -->
        
                                            <div class="swiper-slide">
                                                <a href="src/img/item/item_slide_3.png">
                                                    <img class="img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="./src/img/item/item_slide_3.png" alt="" data-caption="Image caption">>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="src/img/item/item_slide_3.png">
                                                    <img class="img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="./src/img/item/item_slide_3.png" alt="" data-caption="Image caption">>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="src/img/item/item_slide_3.png">
                                                    <img class="img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="./src/img/item/item_slide_3.png" alt="" data-caption="Image caption">>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="src/img/item/item_slide_3.png">
                                                    <img class="img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="./src/img/item/item_slide_3.png" alt="" data-caption="Image caption">>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="src/img/item/item_slide_3.png">
                                                    <img class="img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="./src/img/item/item_slide_3.png" alt="" data-caption="Image caption">>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="src/img/item/item_slide_3.png">
                                                    <img class="img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="./src/img/item/item_slide_3.png" alt="" data-caption="Image caption">>
                                                </a>
                                            </div>
                                              
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </section>
        
                        <div class="md:pt-0 pt-20 w-full md:w-1/3">
                            <div class="font-bold md:text-4xl text-xl">
                                <!-- <?php the_field('marka_name'); ?> <?php the_field('model_name'); ?> -->
                                
                                <div class="flex justify-start items-center gap-4 pb-7">
                                        <p class="text-xs md:text-sm py-2 px-6 bg-yellow rounded-3xl">
                                            <!-- <?php the_field('price'); ?>₽ -->
                                            В наличии
                                        </p>
                                        <p class="text-xs md:text-sm py-2 px-6 bg-red rounded-3xl text-white">
                                            <!-- <?php the_field('price'); ?>₽ -->
                                            -20%
                                        </p>
                                </div>

                                <div class="flex justify-start items-center gap-5">
                                    <p class="font-bold md:text-2xl text-lg">
                                        <!-- <?php the_field('price'); ?>₽ -->
                                        Цена
                                    </p>
                                     <p class="text-gray text-sm">
                                        <!-- <?php the_field('price'); ?>₽ -->
                                        cтарая цена
                                    </p>
                                </div>
                                
                            </div>

                            <div class="flex justify-between items-center pt-10">
                                <ul>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Топливо
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Объем двигателя
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Мощность
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Коробка передач
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Привод
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Тип кузова
                                    </li>
                                     <li class="md:text-base text-xs text-gray pb-5">
                                        Пробег
                                    </li>
                                     <li class="md:text-base text-xs text-gray pb-5">
                                        Руль
                                    </li>
                                    <!--  
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Лот
                                    </li> -->
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Поколение
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Комлектация
                                    </li>
                                </ul>
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('marka_name'); ?> -->
                                        бензин
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('model_name'); ?> -->
                                        1.8 л
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('year'); ?> -->
                                        140 л.с.
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('тип_кузова'); ?> -->
                                        АКПП
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('тип_двигателя'); ?> -->
                                        передний
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('value'); ?> л -->
                                        хэтчбек 5 дв.
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('fuel'); ?> -->
                                        121 000 км, без пробега по РФ
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('цвет'); ?> -->
                                        Правый
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('цвет'); ?> -->
                                        2
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <!-- <?php the_field('цвет'); ?> -->
                                        1.8 RSZ S package
                                    </li>
                                </ul>
                               
                                
                            </div>
                            
                            <a class="bg-red flex popup-link text-white justify-center py-4 px-5 rounded-2xl"
                            href="#popup4"
                            >Купить
                        </a>
                        </div>
                   </div>
                </div>
            </section>

            
        
             <!-- Популярные автомобили -->
            <section class="pt-12 md:pt-40 popular-swiper">
                <div class="container">
                    <h2 class="text-4xl md:text-5xl font-bold text-black">
                        Популярные модели
                    </h2>

                    <div class="popular-item w-0 min-w-[100%] overflow-hidden pt-6 md:pt-12">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide flex flex-col w-[310px]">
                                <img src="./src/img/catalog/car_1.png" alt="">
                                <p class="font-bold text-black text-base md:text-xl pb-6">Toyota Land Cruiser Prado</p>
                                <ul>
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Год выпуска</li>
                                        <li class="pb-6">2019</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Пробег</li>
                                        <li class="pb-6">68 000 км</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Топливо</li>
                                        <li class="pb-6">дизель</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Объём двигателя</li>
                                        <li class="pb-6">2.8 л</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Привод</li>
                                        <li>4WD</li>
                                </div> 
                                </ul>
                                <p class="text-black py-6">3 895 000 ₽</p>
                                <div class="flex gap-5 justify-between items-center">
                                    <button class="button__order">Заказать</button>
                                    <button class="button__circle">
                                        <img src="./src/img/icons/arrow__order.svg" alt="">
                                    </button>
                                </div>
                            </div>    
                            <div class="swiper-slide flex flex-col w-[310px]">
                                <img src="./src/img/catalog/car_1.png" alt="">
                                <p class="font-bold text-black text-base md:text-xl pb-6">Toyota Land Cruiser Prado</p>
                                <ul>
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Год выпуска</li>
                                        <li class="pb-6">2019</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Пробег</li>
                                        <li class="pb-6">68 000 км</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Топливо</li>
                                        <li class="pb-6">дизель</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Объём двигателя</li>
                                        <li class="pb-6">2.8 л</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Привод</li>
                                        <li>4WD</li>
                                </div> 
                                </ul>
                                <p class="text-black py-6">3 895 000 ₽</p>
                                <div class="flex gap-5 justify-between items-center">
                                    <button class="button__order">Заказать</button>
                                    <button class="button__circle">
                                        <img src="./src/img/icons/arrow__order.svg" alt="">
                                    </button>
                                </div>
                            </div>    
                            <div class="swiper-slide flex flex-col w-[310px]">
                                <img src="./src/img/catalog/car_1.png" alt="">
                                <p class="font-bold text-black text-base md:text-xl pb-6">Toyota Land Cruiser Prado</p>
                                <ul>
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Год выпуска</li>
                                        <li class="pb-6">2019</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Пробег</li>
                                        <li class="pb-6">68 000 км</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Топливо</li>
                                        <li class="pb-6">дизель</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Объём двигателя</li>
                                        <li class="pb-6">2.8 л</li>
                                </div> 
                                <div class="flex justify-between flex-row">
                                        <li class="text-gray pb-2">Привод</li>
                                        <li>4WD</li>
                                </div> 
                                </ul>
                                <p class="text-black py-6">3 895 000 ₽</p>
                                <div class="flex gap-5 justify-between items-center">
                                    <button class="button__order">Заказать</button>
                                    <button class="button__circle">
                                        <img src="./src/img/icons/arrow__order.svg" alt="">
                                    </button>
                                </div>
                            </div>    
                        </div>                      
                    </div>


                </div>
            </section>
                
          <!-- Рассчитаем стоимость -->
          <section class="pt-12 md:pt-36 relative p-5 md:p-0">
            <div class="container rounded-3xl relative  h-[38vh] sm:h-[55vh] md:h-[69vh]">
                <img class="block absolute inset-0 -z-10 object-cover md:object-fill w-full h-full rounded-3xl" src="./src/img/price/price__bg.png" alt="">
                <div class="p-5 md:p-32 text-center md:text-start">
                    <h2 class="text-xl lg:text-5xl text-jost font-extrabold relative text-black">РАССЧИТАЕМ СТОИМОСТЬ!</h2>
                    <p class="text-sm md:font-base font-normal text-black py-5">
                        Заполните анкету и мы подберём автомобиль под ваш бюджет,<br> рассчитаем все расходы на покупку и доставку совершенно <br> бесплатно
                    </p>
                    <a href="#popup2" class="button__count popup-link">Рассчитать</a>
                </div>
 
            </div>
        </section>

        
    </main>


<?php get_footer(); ?>