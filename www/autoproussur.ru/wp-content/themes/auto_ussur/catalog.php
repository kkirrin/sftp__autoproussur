<?php 
/*
Template Name: catalog
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


        <!-- Фильтрация -->
        <section class="pt-12 md:pt-24 filter-swiper">
            <div class="container relative">
                
                <div class="p-4 pb-10 bg-gray bg-opacity-10 rounded-2xl">
                    <div class=" pt-8 flex items-center justify-between">
                        <h3 class="text-start font-normal md:text-3xl text-base">
                            Подберите  автомобиль 
                        </h3>       

                        <div class="flex flex-row gap-2">
                            <input type="checkbox" id="customCheckbox" class="hidden-checkbox">
                            <label for="customCheckbox" class="customCheckboxLabel"></label>
                            <label>В наличии</label>
                        </div>

                    </div>    
                    
                    <div class="w-full rounded-xl">
                        <?php echo do_shortcode( '[fe_widget id=152]' ); ?>
                    </div>         
                </div>
            </div>

            <!-- Акция -->
            <div class="popup__today fixed right-0 top-2/3" style="z-index: 1000;">
                <section id="popup_promo" class="popup_promo" style="display: flex; justify-content: end;">
                    <div class="">
                        <div class="bg-black rounded-3xl p-10 relative w-[400px]">
                            <img class="absolute -right-5 top-0 pb-5" src="<?php echo get_template_directory_uri(). '/src/img/icons/percent.png'; ?>" alt="" >
                            <h3 class="text-white text-2xl font-bold pb-5">Успей забрать сегодня !</h3>
                            <p class="font-medium text-white text-base pb-5">Toyota Land Cruiser Prado <span class="font-extrabold"> cо скидкой 20%</span></p>
                            <a class="button popup-link flex py-4" href="#popup5" id="popup6__btn">Подробнее</a>
                        </div>
                    </div>
                </section>
            </div>
                
        </section>

        
        <!-- Рассчитаем стоимость -->
        <section class="pt-12 md:pt-36 relative p-5 md:p-0">
            <div class="container rounded-3xl relative  h-[45vh] sm:h-[55vh] md:h-[69vh]">
                <img class="block absolute inset-0 -z-10 object-cover md:object-fill w-full h-full rounded-3xl" src="<?php echo get_template_directory_uri() .'/src/img/price/price__bg.png'; ?>" alt="">
                <div class="p-5 md:p-32 text-center md:text-start">
                    <h2 class="text-center md:text-start text-4xl lg:text-5xl font-extrabold relative">РАССЧИТАЕМ СТОИМОСТЬ!</h2>
                    <p class="text-sm md:font-base font-normal text-black py-5">
                        Заполните анкету и мы подберём автомобиль под ваш бюджет,<br> рассчитаем все расходы на покупку и доставку совершенно <br> бесплатно
                    </p>
                    <a href="#popup2" class="button__count popup-link">Рассчитать</a>
                </div>
    
            </div>
        </section>
        
    </main>

<?php get_footer(); ?>
