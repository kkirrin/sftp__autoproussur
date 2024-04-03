<?php 
/*
Template Name: catalog
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
                            <span class="font-bold text-bg-black">Каталог</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Фильтрация -->
        <section class="pt-12 md:pt-14 filter-swiper filter">
            <div class="container relative">
                
                <div class="p-4 pb-10 bg-gray bg-opacity-10 rounded-2xl">
                    <div class=" pt-8 flex items-center justify-between">
                        <h2 class="text-4xl md:text-5xl font-bold text-black pb-10 text-center md:text-start">
                            Подберите  автомобиль 
                        </h2>       

                        <div class="flex flex-row gap-2">
                            <!-- <input type="checkbox" id="customCheckbox" class="hidden-checkbox">
                            <label for="customCheckbox" class="customCheckboxLabel"></label> -->
                            <!-- <label>В наличии</label> -->
                        </div>

                    </div>    
                    
                    <div class="w-full rounded-xl">
                        <?php echo do_shortcode( '[fe_widget id=152]' ); ?>
                        <button class="block md:hidden text-center underline" style="font-weight: 600;" id="expand-btn">Развернуть</button>   
                    </div>   
                    

                </div>
                <div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 pt-10">
                    <?php
                        $categories_ids = array(3, 4, 5, 6, 7, 1);
                        $my_posts = get_posts(array(
                            'numberposts' => -1,
                            'category__in' => $categories_ids, 
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
                                <div class="flex flex-col w-auto relative cars">

                                <?php echo get_field('state') ? '<span style="width: max-content; top: 10px; left: 10px;" class="absolute bg-yellow py-2 px-4 rounded-3xl">' . get_field('state') . '</span>' : ''; ?>
                                <a href="<?php echo the_permalink(); ?>">
                                    <img class="rounded-3xl" src="<?php echo $firstPhoto['url']; ?>" alt="<?php echo $firstPhoto['alt']; ?>">
                                    <p class="font-bold text-black text-base md:text-xl pb-6 pt-5">
                                        <?php echo get_field('marka_name', $post->ID); ?>
                                        <?php echo get_field('model_name', $post->ID); ?>
                                    </p>
                                </a>
        
                                        <ul class="ul__car">
                                            <div class="flex justify-between flex-row">
                                                    <li class="text-gray pb-2">Год выпуска</li>
                                                    <li class="pb-2 md:pb-6">
                                                    <?= get_field('year') ? get_field('year') : '-'; ?>
                                                    </li>
                                            </div> 
                                            <div class="flex justify-between flex-row">
                                                    <li class="text-gray pb-2">Пробег</li>
                                                    <li class="pb-2 md:pb-6">
                                                        <?php echo get_field('milleage') ? get_field('milleage') : '-'  ?>
                                                    </li>
                                            </div> 
                                            <div class="flex justify-between flex-row">
                                                    <li class="text-gray pb-2">Топливо</li>
                                                    <li class="pb-2 md:pb-6">
                                                    <?php echo get_field('fuel') ? get_field('fuel') : '-'; ?>
                                                    </li>
                                            </div> 
                                            <div class="flex justify-between flex-row">
                                                    <li class="text-gray pb-2">Объём двигателя</li>
                                                    <li class="pb-2 md:pb-6">
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
        
                                        <p class="text-black py-6 font-bold"> 
                                            <?php echo get_field('price', $post->ID); ?> ₽
                                        </p>
        
        
                                        <div class="flex gap-5 justify-between items-center">
                                            <a href="#popup4" class="button__order popup-link text-center">
                                                <!-- <?php echo get_field('state') === 'В пути' ? 'Заказать' : 'Купить'; ?> -->
                                                Заказать
                                            </a>
                                            <a href="<?php echo the_permalink(); ?>" class="button__circle">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow__order.svg'; ?>" alt="">
                                            </a>
                                        </div>

                                        
                                     
                                        
                                    </div>
                                    

        
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
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

        
 
        <!-- Рассчитаем стоимость -->
        
        <section class="pt-12 md:pt-32 relative p-5 md:p-0">
            <div class="container rounded-3xl relative  h-[45vh] sm:h-[55vh] md:h-[69vh]">

                <img class="hidden md:block absolute inset-0 -z-10 object-cover md:object-fill w-full h-full rounded-3xl" src="<?php echo get_template_directory_uri() . '/src/img/price/price__bg.png'; ?>" alt="">

                <img class="block md:hidden absolute inset-0 -z-10 object-cover md:object-fill w-full h-full rounded-3xl" src="<?php echo get_template_directory_uri() . '/src/img/price/price__small.png'; ?>" alt="">
                
                <div class="p-5 md:p-32 text-center md:text-start">
                    <h2 class="text-center md:text-start text-3xl lg:text-5xl relative" style="font-weight: 600;">РАССЧИТАЕМ СТОИМОСТЬ!</h2>
                    <p class="text-sm md:font-base text-black py-5" style="font-weight: 500;">
                        Заполните анкету и мы подберём автомобиль под ваш бюджет,<br> рассчитаем все расходы на покупку и доставку совершенно <br> бесплатно
                    </p>
                    <a href="#popup2" class="button__count popup-link text-center">Рассчитать</a>
                </div>

            </div>
        </section>

        
      
        
    </main>

<?php get_footer(); ?>
