<footer class="footer page-section-3 pt-12 md:pt-36">
            <div class="container">
                <a href="index.html">
                    <img class="block sm:hidden md:hidden" src="<?php echo get_template_directory_uri() .'/src/img/logo.svg'; ?>" alt="">
                </a>
                <div class="container flex justify-between md:flex-nowrap flex-wrap text-white pt-10">
                    <div class="hidden sm:block md:block">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/logo.svg'; ?>" alt="">
                        </a>
                    </div>
                    <div>
                        <ul class="text-gray md:text-base text-xs columns-1 sm:columns-1 md:columns-3">
                            <li class="pb-5 md:pb-8 text-black transform hover:scale-105 transition-all font-semibold">
                                <a href='/catalog'>
                                    Каталог
                                </a>
                            </li>  
                            <li class="pb-5 md:pb-8 text-black transform hover:scale-105 transition-all font-semibold">
                                <a href='/about__company'>
                                    О компании
                                </a>
                            </li>  
                            <li class="pb-5 md:pb-8 text-black transform hover:scale-105 transition-all font-semibold">
                                <a href='/reviews'>
                                    Отзывы
                                </a>
                            </li>  
                            <li class="pb-5 md:pb-8 text-black transform hover:scale-105 transition-all font-semibold">
                                <a href='/contacts'>
                                    Контакты
                                </a>
                            </li>  
                            <li class="pb-5 md:pb-8 text-black transform hover:scale-105 transition-all font-semibold">
                                <a href='/contract'>
                                    Договор
                                </a>
                            </li>  
                        </ul>
                    </div>
                    <div>
                        <ul class="text-gray md:text-base text-xs">
                            <li class="pb-5">
                                <a class=" font-bold text-black transform hover:scale-105 transition-all" href="tel:+79510288418">
                                    +7 951 028-84-18 
                                </a>
                            </li>
                            <li class="pb-5">
                                <a class=" font-bold text-black transform hover:scale-105 transition-all" href="tel:+79510154751">
                                    +7 951 015-47-51
                                </a>
                            </li>
                            <li class="pb-5">
                                <a href="mailto:lehachechel10@gmail.com" class=" font-bold text-black transform hover:scale-105 transition-all">lehachechel10@gmail.com</a>
                            </li>
    
                            <li class=" text-black md:text-base text-xs block md:hidden">г. Уссурийск, 
                                ул. Тургенева, 42</li>
    
                          
                        </ul>
                    </div>
    
                    <div>
                        <p class="text-black md:text-base text-xs hidden md:block">г. Уссурийск, 
                            ул. Тургенева, 42</p>
                    </div>
    
                    <div class="flex flex-row sm:flex-col md:flex-row gap-1">
                        <li class="mr-4 list-none gap-2">
                            <a href="https://api.whatsapp.com/send/?phone=79510154751">
                                <img class=" transform hover:scale-105 transition-all" src="<?php echo get_template_directory_uri().'/src/img/icons/sap.svg'; ?>" alt="" >
                            </a>
                        </li>
                        <li class="mr-4 list-none gap-2">
                            <a href="https://t.me/autoprouss">
                                <img class=" transform hover:scale-105 transition-all" src="<?php echo get_template_directory_uri().'/src/img/icons/tg.svg'; ?>" alt="" >
                            </a>
                        </li>
                        <li class="mr-4 list-none gap-2">
                            <a href="">
                                <img class=" transform hover:scale-105 transition-all" src="<?php echo get_template_directory_uri().'/src/img/icons/youtube.svg'; ?>" alt="" >
                            </a>
                        </li>
                    </div> 
                </div>
                
                <div class="container py-10">
                    <div class="flex items-center justify-between text-gray pt-10">
                        <div class="md:text-sm text-xs">
                            © AutoPROussur. Все права защищены
                        </div>
                        <a href="" class="md:text-sm text-xs underline">
                            Политика конфиденциальности
                        </a>
                    </div>    
                </div> 
            </div>
            
        </footer>

        <?php wp_footer(); ?>


        <!-- Подобрать авто -->
        <section id="popup1" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333"/>
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333"/>
                            </svg>
                    </button>
                    <h2 class="text-start text-black z-10  md:text-4xl text-xl pb-7 font-bold">Подобрать автомобиль</h2>
                    <div class="flex items-start justify-start">
                        <p class="text-black md:text-base text-sm text-start pb-7">Оставьте контакты и наш менеджер свяжется с вами в течение 15 минут и поможет подобрать автомобиль</p>
                    </div>

                    <div class="form-wrapper">
                        <input class="form__input" placeholder="Введите имя" />
                        <input class="form__input" placeholder="Введите номер" />
                        
                        <button class="form__button">
                            Подобрать автомобиль
                        </button>

                        <p class="text-gray text-sm text-start pt-7">
                            Нажимая кнопку «Подобрать автомобиль» вы даёте <br> согласие на обработку персональных данных
                        </p>

                        <p class="text-red text-start font-bold pt-7">Если не хотите ждать напишите на <a href="https://" class="underline">WhatsApp<a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Получить бесплатный расчет -->
        <section id="popup2" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333"/>
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333"/>
                            </svg>
                    </button>
                    <h2 class="text-start text-black z-10  md:text-4xl text-xl pb-7 font-bold">Получите бесплатный расчет</h2>
                    <div class="flex items-start justify-start">
                        <p class="text-black md:text-base text-sm text-start pb-7">Оставьте контакты и наш менеджер свяжется с вами в течение 15 минут и рассчитает конечную стоимость автомобиля</p>
                    </div>

                    <div class="form-wrapper">
                        <input class="form__input" placeholder="Введите имя" />
                        <input class="form__input" placeholder="Введите номер" />
                        
                        <button class="form__button">
                            Рассчитать стоимость
                        </button>

                        <p class="text-gray text-sm text-start pt-7">
                            Нажимая кнопку «Рассчитать стоимость» вы даёте <br> согласие на обработку персональных данных
                        </p>

                        <p class="text-red text-start font-bold pt-7">Если не хотите ждать напишите на <a href="https://" class="underline">WhatsApp<a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Заявка на обратный звонок -->
        <section id="popup3" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333"/>
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333"/>
                            </svg>
                    </button>
                    <h2 class="text-start text-black z-10  md:text-4xl text-xl pb-7 font-bold">Закажите обратный звонок</h2>
                    <div class="flex items-start justify-start">
                        <p class="text-black md:text-base text-sm text-start pb-7">Оставьте контакты и наш менеджер свяжется с вами</p>
                    </div>

                    <div class="form-wrapper">
                        <input class="form__input" placeholder="Введите имя" />
                        <input class="form__input" placeholder="Введите номер" />
                        
                        <button class="form__button">
                            Заказать звонок
                        </button>

                        <p class="text-gray text-sm text-start pt-7">
                            Нажимая кнопку «Заказать звонок» вы даёте согласие <br> на обработку персональных данных
                        </p>

                        <p class="text-red text-start font-bold pt-7">Если не хотите ждать напишите на <a href="https://" class="underline">WhatsApp<a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Заявка на купить авто -->
        <section id="popup4" class="popup">
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
                        <input class="form__input" placeholder="Введите имя" />
                        <input class="form__input" placeholder="Введите номер" />
                        
                        <button class="form__button">
                            Купить автомобиль
                        </button>

                        <p class="text-gray text-sm text-start pt-7">
                            Нажимая кнопку «Заказать звонок» вы даёте согласие <br> на обработку персональных данных
                        </p>

                        <p class="text-red text-start font-bold pt-7">Если не хотите ждать напишите на <a href="https://" class="underline">WhatsApp<a></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Акция -->
        <section id="popup5" class="popup">
            <div class="popup__body">
                <div class="popup__content__today">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333"/>
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333"/>
                        </svg>
                    </button>

                    <?php
                        $my_posts = get_posts(array(
                            'numberposts' => 1,
                            'category_name' => 'promotion',
                            'orderby' => 'rand',
                            'post_type' => 'post',
                            'suppress_filters' => true
                        ));

                        foreach ($my_posts as $post) :
                            setup_postdata($post);
                            $photos = get_field('photo_slide', $post->ID);
                            $firstPhoto = reset($photos);
                        ?>

                        <div class="grid grid-cols-1 md:grid-cols-2" style="gap: 30px;">
                            <div>
                                <h2 class="text-start text-black z-10 md:text-4xl text-xl pb-7 font-bold">
                                    Успей забрать сегодня!
                                </h2>
                                
                                <p class="text-black md:text-base text-sm text-start pb-7">
                                    <?php echo get_field('marka_name', $post->ID); ?>
                                    <?php echo get_field('model_name', $post->ID); ?>
                                </p>
                            </div>

                            <div>
                                <img width="300px" style="border-radius: 20px;" src="<?php echo $firstPhoto['url']; ?>" alt="<?php echo $firstPhoto['alt']; ?>" alt="">
                            </div>
                        </div>

                        <div style="margin-top: 20px;">
                            <a  href="<?php the_permalink(); ?>" class="button w-full flex justify-center py-4">
                                Смотреть
                            </a>
                        </div>

                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    
                </div>
            </div>
        </section>


        <!-- Акция -->
        <section id="popup6" class="popup">
            <div class="popup__body">
                <div class="">
                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                            <path d="M4 1.45508L19.9099 17.365" stroke="#333"/>
                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333"/>
                        </svg>
                    </button>
                    
                    <?php echo do_shortcode('[testimonial_view id="2"]'); ?>
                    
                </div>
            </div>
        </section>

        
    <div class="scroll-top">
        <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow.svg'; ?>" alt="стрелка вверх">
    </div>
    <script src="<?php echo get_template_directory_uri() . '/js/wow.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/baguettebox.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/swiper-bundle.min.js'; ?>"></script>
    <script type="module" src="<?php echo get_template_directory_uri() . '/js/main.js'; ?>"></script>
</body>

</html>