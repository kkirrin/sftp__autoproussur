<?php 
    /* 
    Template Name: card__item
    Template Post Type: post
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
                            <div class="container">
                                <div class="section__wrapper">
                                <div class="card card--product">
                                    <div class="slider card__slider relative">
                                        <div class="swiper slider__slider">
                                            <div class="swiper-wrapper gallery-wrapper pb-5">
                                     
                                                <?php
                                                    $photos = get_field('photo_slide');
                                                    if ($photos) {
                                                        foreach ($photos as $photo) {
                                                            echo '<div class="swiper-slide">';
                                                            echo '<a href="' . esc_url($photo['url']) . '">';
                                                            echo '<img class="rounded-3xl img_car md:w-[460px] md:h-[340px] w-[335px] h-[290px]" src="' . esc_url($photo['url']) . '" alt="">';
                                                            echo '</a>';
                                                            echo '</div>';
                                                        }
                                                    } else {
                                                        echo 'No photos found.'; 
                                                    }
                                                ?>
                                            </div>
                                       
                                        
        
                                        <div class="swiper slider__thumb md:pt-10 pt-5 md:w-full w-80 md:relative absolute">
                                            <div class="swiper-wrapper">

                                            <?php
                                                $photos = get_field('photo_slide');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                        echo '<div class="swiper-slide">';
                                                        echo '<a href="' . esc_url($photo['url']) . '">';
                                                        echo '<img class="rounded-2xl img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="' . esc_url($photo['url']) . '" alt="">';
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
        
                        <div class="md:pt-0 pt-20 w-full md:w-1/3">
                            <div class="font-bold md:text-4xl text-xl">
                                <?php the_field('marka_name'); ?> <?php the_field('model_name'); ?>
                            
                                <div class="flex justify-start items-center gap-4 pb-7">
                                        <p class="text-xs md:text-sm py-2 px-6 bg-yellow rounded-3xl">
                                            <?php the_field('state'); ?>
                                        </p>
                                        <p class="text-xs md:text-sm py-2 px-6 bg-red rounded-3xl text-white">
                                            <?php the_field('sale') ? 'sale' : '' ?> %
                                        </p>
                                </div>

                                <div class="flex justify-start items-center gap-5">
                                    <p class="font-bold md:text-2xl text-lg">
                                        <?php the_field('price'); ?>₽
                                    </p>
                                     <p class="text-gray text-sm">
                                        <?php the_field('old_price'); ?>₽
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
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Поколение
                                    </li>     
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Комплектация
                                    </li>     
                                </ul>
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('fuel') ? get_field('fuel') : '-'; ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('volume') ? get_field('volume') : '-'; ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('capacity') ? get_field('capacity') : '-'; ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('transmission') ? get_field('transmission') : '-'; ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('drive') ? get_field('drive') : '-'; ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('kuzov') ? get_field('kuzov') : '-'; ?>
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('milleage') ? get_field('milleage') : '-'; ?>
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('rudder') ? get_field('rudder') : '-'; ?>
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('generation') ? get_field('generation') : '-'; ?>
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php echo get_field('equipment') ? get_field('equipment') : '-'; ?>
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

                 <!-- Акция -->
                <div class="popup__today fixed right-0 top-2/3" style="z-index: 1000;">
                    <section id="popup_promo" class="popup_promo" style="display: flex; justify-content: end;">
                        <div class="">
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
                    </section>
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
                            

                            <div class="swiper-slide flex flex-col w-[310px]">
                                <img class="rounded-3xl pb-4" src="<?php echo $firstPhoto['url']; ?>" alt="<?php echo $firstPhoto['alt']; ?>">
                                <p class="font-bold text-black text-base md:text-xl pb-6">
                                <?php echo get_field('marka_name', $post->ID); ?>
                                <?php echo get_field('model_name', $post->ID); ?>

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
                                    <a href="#popup5" class="button__order popup-link">Заказать</a>
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
          <section class="pt-12 md:pt-36 relative p-5 md:p-0">
            <div class="container rounded-3xl relative  h-[38vh] sm:h-[55vh] md:h-[69vh]">
                <img class="block absolute inset-0 -z-10 object-cover md:object-fill w-full h-full rounded-3xl" src="<?php echo get_template_directory_uri() . '/src/img/price/price__bg.png'; ?>" alt="">
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