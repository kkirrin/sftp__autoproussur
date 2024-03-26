<?php 
/*
Template Name: contact
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
                                <span class="font-bold text-bg-black">Контакты</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <!-- Карта -->
            <section class="pt-12 md:pt-14 ">
                <div class="container">
                    <h2 class="text-4xl md:text-5xl font-bold text-blac pb-12">
                        Контактная информация
                    </h2>

                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <ul class="columns-1 md:columns-2">
                            <li class="pb-5">
                                <p>г. Уссурийск, ул. Тургенева, 42</p>
                            </li>
                            <li class="pb-5">
                                <p>
                                    Режим работы: 10:00–18:00
                                </p>
                            </li>
                            <li class="pb-5">
                                <a class="font-bold transform hover:scale-105 transition-all" href="tel:+79510288418">
                                    +7 951 028-84-18,
                                </a>
                                <a class="font-bold transform hover:scale-105 transition-all" href="tel:+79510154751">
                                    +7 951 015-47-51
                                </a>
                            </li>
                            <li class="pb-5">
                                <a class="font-bold transform hover:scale-105 transition-all" href="mailto:lehachechel10@gmail.com">
                                    lehachechel10@gmail.com
                                </a>
                            </li>
                        </ul>

                        <button class="bg-red text-white py-4 px-5 rounded-3xl" type="button">
                            Написать на WhatsApp
                        </button>
                    </div>
                </div>
            </section>

            <!-- Карта -->
            <section class="pt-12 md:pt-36 contact__map">
                <div class="container">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A40c23e493b20b3fcf4e84ebb21a3ba8f240084f4def0c23d942e3e03c164c6e9&amp;width=1228&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </section>

            <!-- Собственная стоянка в Уссурийске -->
            <section class="pt-12 md:pt-36">
                <div class="container relative">

                    <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative pb-5 md:pb-10">Собственная стоянка в Уссурийске</h2>

                    <div class="arrows__slider">             
                        <button
                            class="parking-prev rounded-full bg-yellow p-4">
                            <img src="./src/img/icons/arrow_prev.svg" alt="влево">
                        </button>
                        <button
                            class="parking-next rounded-full bg-yellow p-4">
                            <img src="./src/img/icons/arrow_next.svg" alt="вправо" >
                        </button>
                    </div>
        
                    <div class="parking-wrapper overflow-hidden">
                        <div class="parking-item">
                            <div class="swiper-wrapper gallery-wrapper">
                                <div class="swiper-slide p-5 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="./src/img/stop/stopping.png" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                                <div class="swiper-slide p-5 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="./src/img/stop/stopping.png" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                                <div class="swiper-slide p-5 transform hover:scale-105 transition-all">
                                    <a href="src/img/stop/stopping.png">
                                        <img class="rounded-3xl" src="./src/img/stop/stopping.png" alt="" data-caption="Image caption">
                                    </a>
                                </div>            
                            </div>
                        </div> 
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


