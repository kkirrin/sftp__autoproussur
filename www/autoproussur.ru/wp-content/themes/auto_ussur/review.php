<?php 
    /*
        Template name: review
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

                        <a class="flex justify-center py-4 my-4 button popup-link" href="#popup6">Оставить отзыв</a>
                        
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="rounded-2xl transform hover:scale-105 transition-all w-full">
                            <video poster="<?php echo get_template_directory_uri() . '/src/img/review/review_3.png'; ?>"></video>
                        </div>

                        <div class="p-5 w-full md:w-auto">
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
                                    <img class="rounded-2xl" src="<?php echo get_template_directory_uri() . '/src/img/review/review_2.png'; ?>">
                                    <img class="rounded-2xl" src="<?php echo get_template_directory_uri() . '/src/img/review/review_2.png'; ?>">
                                </div>
    
                                <div class="text-gray">
                                    26.02.2024  
                                </div>
                            </div>
                        </div>

                        <?php echo do_shortcode('[testimonial_view id="2"]'); ?>

                        <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
            
                        <div class="rounded-2xl transform hover:scale-105 transition-all w-full">
                            <video poster="<?php echo get_template_directory_uri() . '/src/img/review/review_3.png'; ?>"></video>
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
            
        </main>


<?php get_footer(); ?>