<?php 
    /* 
    Template Name: card__item
    Template Post Type: post
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
                            <li class="breadcrumb__item text-bg-black opacity-60 ">
                                <a href="/catalog" class="font-medium">
                                    Каталог
                                </a>
                            </li>
                            <li class="opacity-60 text-bg-black">
                                -
                            </li>
                            <li class="breadcrumb__item">
                                <span class="font-bold text-bg-black"><?php the_field('marka_name'); ?> <?php the_field('model_name'); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <section class="pt-12 md:pt-14">
                <div class="container">
                    <h2 class="text-start text-4xl lg:text-5xl font-extrabold relative pb-5">
                        <?php the_field('marka_name'); ?> <?php the_field('model_name'); ?>
                    </h2>
                    <div class="flex flex-col md:flex-row  gap-10 ">
                        <section class="section product__item w-full md:w-2/3">
                            <div class="">
                                <div class="section__wrapper">
                                <div class="card card--product">
                                    <div class="slider card__slider relative">
                                        <div class="swiper slider__slider">
                                            <div class="swiper-wrapper gallery-wrapper">
                                     
                                                <?php
                                                    $photos = get_field('photo_slide');
                                                    if ($photos) {
                                                        foreach ($photos as $photo) {
                                                            echo '<div class="swiper-slide pr-0 md:pr-15">';
                                                            echo '<a href="' . esc_url($photo['url']) . '">';
                                                            echo '<img style="border-radius: 20px;" class=" img_car md:w-[460px] md:h-[340px] w-auto h-[290px] object-cover" src="' . esc_url($photo['url']) . '" alt="">';
                                                            echo '</a>';
                                                            echo '</div>';
                                                        }
                                                    } else {
                                                        echo 'No photos found.'; 
                                                    }
                                                ?>
                                            </div>
                                       
                                        
        
                                        <div class="swiper slider__thumb md:pt-10 pt-5 md:w-full md:relative absolute h-[16vh] md:h-auto">
                                            <div class="swiper-wrapper h-[16vh] md:h-auto">

                                            <?php
                                                $photos = get_field('photo_slide');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                        echo '<div class="swiper-slide" style="padding-top: 30px;">';
                                                        echo '<a href="' . esc_url($photo['url']) . '">';
                                                        echo '<img class="img_car img_car__small md:w-[120px] md:h-[100px] w-[80px] h-[80px]" src="' . esc_url($photo['url']) . '" alt="">';
                                                        echo '</a>';
                                                        echo '</div>';
                                                    }
                                                } else {
                                                    echo 'No photos found.'; 
                                                }
                                            ?>
                                           
                                                
                                            </div>
                                       
                                        </div>
                                </div>
                            </div>
                        </section>
        
                        <div class="md:pt-0 pt-10 w-full md:w-1/3">
                            <div style="font-weight: 600;" class=" md:text-4xl text-xl">
                                <!-- <?php the_field('marka_name'); ?> <?php the_field('model_name'); ?> -->
                            
                                <div class="flex justify-start items-center gap-4 pb-7 hidden md:flex">
                                        <p class="text-xs md:text-sm py-2 bg-yellow rounded-3xl" style="font-weight: 500; padding-right: 26px; padding-left: 26px;">
                                            <?php the_field('state'); ?>
                                        </p>
                                        <?php echo get_field('sale') ? '
                                            <p class="text-xs md:text-sm py-2 px-6 bg-red rounded-3xl text-white">
                                                '.get_field('sale').'%
                                            </p>' 
                                            : '';
                                        ?>
                                </div>
                                
                                <div class="flex justify-between">
                                    <div class="flex justify-start md:justify-start items-start md:items-center gap-5 flex-col md:flex-row">
                                        <p class="font-bold md:text-2xl text-xl">
                                            <?php the_field('price'); ?>₽
                                        </p>
                                        <?php if(get_field('old_price')): ?>
                                            <p class="text-gray text-xs" style="text-decoration: line-through;">
                                                <?php echo get_field('old_price'); ?>₽
                                            </p>

                                            <?php endif; ?>
                                    </div>                              
                                    

                                    <div class="flex justify-start items-center gap-4 pb-7 block md:hidden flex-col md:flex-row">
                                        <p class="text-xs md:text-sm py-2 bg-yellow rounded-3xl" style="font-weight: 500; padding-right: 26px; padding-left: 26px;">
                                            <?php the_field('state'); ?>
                                        </p>
                                        <?php echo get_field('sale') ? '
                                            <p class="text-xs md:text-sm py-2 px-6 bg-red rounded-3xl text-white">
                                                '.get_field('sale').'%
                                            </p>' 
                                            : '';
                                        ?>
                                    </div>
                                </div>

                            <div class="flex justify-between items-center pt-2 pb-5 md:pb-10">
                                <ul>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Год выпуска
                                    </li>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Топливо
                                    </li>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Объем двигателя
                                    </li>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Мощность
                                    </li>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Коробка передач
                                    </li>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Привод
                                    </li>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Тип кузова
                                    </li>
                                     <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Пробег
                                    </li>
                                     <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Руль
                                    </li>
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Поколение
                                    </li>     
                                    <li style="font-weight: 400; padding-bottom: 15px;" class="md:text-base text-xs text-gray">
                                        Комплектация
                                    </li>     
                                </ul>
                                <ul>
                                    <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('year') ? get_field('year') : '-'; ?>
                                    </li>
                                    <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('fuel') ? get_field('fuel') : '-'; ?>
                                    </li>
                                    <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('volume') ? get_field('volume') : '-'; ?>
                                    </li>
                                    <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('capacity') ? get_field('capacity') : '-'; ?>
                                    </li>
                                    <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('transmission') ? get_field('transmission') : '-'; ?>
                                    </li>
                                    <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('drive') ? get_field('drive') : '-'; ?>
                                    </li>
                                    <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('kuzov') ? get_field('kuzov') : '-'; ?>
                                    </li>
                                     <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('milleage') ? get_field('milleage') : '-'; ?>
                                    </li>
                                     <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('rudder') ? get_field('rudder') : '-'; ?>
                                    </li>
                                     <li style="font-weight: 500; padding-bottom: 15px;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('generation') ? get_field('generation') : '-'; ?>
                                    </li>
                                     <li style="font-weight: 500;" class="md:text-base text-xs font-semibold card_item--li">
                                        <?php echo get_field('equipment') ? get_field('equipment') : '-'; ?>
                                    </li>
                                </ul>
                               
                                
                            </div>
                            
                            <a style="border-radius: 40px;" class="bg-red flex popup-link text-white justify-center py-4 px-5 text-base md:text-2xl"
                            href="#popup8"
                            >Купить
                        </a>
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

            
        
            <!-- Популярные автомобили -->
            <section class="pt-12 md:pt-40 popular-swiper cars">
                <div class="container relative">
                    <h2 class="text-4xl md:text-5xl text-black" style="font-weight: 600;">
                        Популярные модели
                    </h2>

                    <div class="arrows__slider">             
                        <button
                            class="popular-prev rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="popular-next rounded-full bg-yellow p-4">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>

                    <div class="popular-item w-0 min-w-[100%] overflow-hidden pt-6 md:pt-12">
                        <div class="swiper-wrapper cars">

                        <?php
                            $my_posts = get_posts(array(
                                'numberposts' => 25,
                                'category_name' => 'popular__auto',
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

                                <p class="text-black py-6"> 
                                    <?php echo get_field('price', $post->ID); ?> ₽
                                </p>


                                <div class="flex gap-5 justify-between items-center">
                                    <a href="<?php echo the_permalink(); ?>" class="button__order popup-link text-center">
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


                            <div class="flex md:justify-between flex-col md:flex-row gap-2">
                                <a class="text-black font-bold nav-link" href="tel:<?php echo get_field('tel_1'); ?>">
                                    <?php echo get_field('tel_1'); ?>
                                </a>
                                <a class="text-black font-bold nav-link" href="tel:<?php echo get_field('tel_2'); ?>">
                                    <?php echo get_field('tel_2'); ?>
                                </a>
                                <a class="text-black font-bold nav-link" href="tel:<?php echo get_field('tel_3'); ?>">
                                    <?php echo get_field('tel_3'); ?>
                                </a>
                            </div>
                            


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