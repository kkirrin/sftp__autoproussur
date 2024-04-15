<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Алиса знает, что делать, центр развлечений - это игровое пространство по мотивам мультфильма режиссера Тимура Бекмамбетова">
    <title>AutoPROussur</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


    <?php wp_head(); ?>

</head>


<body class="wrapper hidden">
    
    <div class="">
        <header style="z-index: 11;" class=" w-full md-28 transition-colors header py-5 fixed">
            <div class="container">
        
                <div class="flex items-center justify-between">
                        
                    <!-- Левая часть шапки -->
                    <div class="hidden md:flex justify-between items-center gap-10">
                        <div class="flex items-center justify-between gap-2">
                            <a href="/" class="flex items-center justify-between gap-2">
                                <img src="<?php echo get_template_directory_uri() . '/logo.png'; ?>" alt="логотип в шапке">     
                            </a>
                        </div>
        
                        <div> 
                            <ul class="mobile gap-2 flex-wrap text-main-black hidden md:flex items-center justify-center mobile__menu__style">
                                <li class="transform hover:scale-105 transition-all mr-4 "><a class="text-black font-semibold" href="/catalog">Каталог</a></li>
                                <li class="transform hover:scale-105 transition-all mr-4 "><a class="text-black font-semibold" href="/about__company">О компании</a></li>
                                <li class="transform hover:scale-105 transition-all mr-4 "><a class="text-black font-semibold" href="/reviews">Отзывы</a></li>
                                <li class="transform hover:scale-105 transition-all mr-4 "><a class="text-black font-semibold" href="/contacts">Контакты</a></li>
                                <li class="transform hover:scale-105 transition-all mr-4 "><a class="text-black font-semibold" href="/contract">Договор</a></li>
                                
                            </ul>
                        </div>
                    </div>
        
                    <div class="flex md:hidden items-center justify-between gap-2">
                        <a href="/" class="flex md:hidden items-center justify-between gap-2">
                            <img width="100px" src="<?php echo get_template_directory_uri() . '/logo.png'; ?>" class="" alt="логотип в шапке">
                        </a>
                    </div>
        
        
                    <!-- Правая часть шапки -->
                    <ul class="hidden md:flex items-center justify-between gap-7">       
                        <li class="flex flex-col">
                           <address class="font-semibold" style="font-style: normal;">г. Уссурийск, <br>
                            ул. Тургенева, 42 </address>
                        </li>

                        <li class="flex flex-col">
                            <a class="text-black font-bold nav-link" href="tel:+79510288418">
                                8 (951) 028-84-18 
                            </a>
                            <a class="text-black font-bold nav-link" href="tel:+79510154751">
                                8 (951) 015-47-51
                            </a>
                        </li>

                        <li>
                            <a class="button popup-link" href="#popup1">
                                Подобрать автомобиль
                            </a>
                        </li>
                        
                        <li class="list-none flex gap-3">
                            <a href="https://api.whatsapp.com/send/?phone=79510154751">
                                <svg class="button__icons" width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="47" height="47" rx="23.5" fill="#B7090A"/>
                                    <path d="M23.5029 11.75H23.4971C17.0184 11.75 11.75 17.0199 11.75 23.5C11.75 26.0703 12.5784 28.4526 13.9869 30.387L12.5226 34.7521L17.039 33.3083C18.8969 34.5391 21.1133 35.25 23.5029 35.25C29.9816 35.25 35.25 29.9787 35.25 23.5C35.25 17.0213 29.9816 11.75 23.5029 11.75ZM30.34 28.3425C30.0565 29.1429 28.9314 29.8068 28.034 30.0007C27.4201 30.1314 26.6182 30.2357 23.9186 29.1165C20.4656 27.6859 18.2419 24.1771 18.0686 23.9494C17.9026 23.7218 16.6733 22.0915 16.6733 20.4053C16.6733 18.7192 17.5295 17.8982 17.8747 17.5457C18.1582 17.2563 18.6267 17.1242 19.0761 17.1242C19.2215 17.1242 19.3523 17.1315 19.4697 17.1374C19.8149 17.1521 19.9882 17.1726 20.2159 17.7175C20.4993 18.4005 21.1897 20.0866 21.2719 20.2599C21.3556 20.4333 21.4393 20.6683 21.3218 20.8959C21.2117 21.1309 21.1147 21.2352 20.9414 21.4349C20.7681 21.6347 20.6036 21.7874 20.4303 22.0019C20.2717 22.1884 20.0925 22.3882 20.2922 22.7333C20.492 23.0711 21.1823 24.1977 22.1987 25.1024C23.5103 26.2701 24.5737 26.6431 24.9541 26.8018C25.2375 26.9193 25.5753 26.8913 25.7824 26.671C26.0453 26.3876 26.3699 25.9176 26.7004 25.4549C26.9354 25.123 27.2321 25.0818 27.5435 25.1993C27.8607 25.3095 29.5395 26.1393 29.8847 26.3112C30.2298 26.4845 30.4575 26.5668 30.5412 26.7122C30.6234 26.8576 30.6234 27.5405 30.34 28.3425Z" fill="white"/>
                                </svg>            
                            </a>
    
                            <a href="https://t.me/autoprouss">
                                <svg class="button__icons" width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="47" height="47" rx="23.5" fill="#B7090A"/>
                                    <path d="M20.9712 26.8643L20.5825 32.7694C21.1387 32.7694 21.3795 32.5113 21.6684 32.2015L24.276 29.5102L29.6791 33.7835C30.6701 34.3799 31.3682 34.0659 31.6356 32.799L35.1822 14.8512L35.1832 14.8501C35.4975 13.2681 34.6534 12.6495 33.688 13.0376L12.841 21.6572C11.4182 22.2536 11.4398 23.1102 12.5991 23.4983L17.9289 25.2886L30.3088 16.9228C30.8914 16.5062 31.4211 16.7367 30.9854 17.1533L20.9712 26.8643Z" fill="white"/>
                                </svg>                                 
                            </a>    
                        </li>
                        
                       
                    </ul>
        
            
        
                    <!-- Кнопка для мобильного меню -->
                    <div class="flex md:hidden items-center">

                        <li class=" hidden xs:flex sm:flex md:hidden items-center justify-center sm:gap-0 xs:gap-0 gap-0 md:gap-2 transform hover:scale-105 transition-all">
                            <img src="" alt="">
                            <a class="text-black font-bold phone nav-link p-2" href="tel:+79532109127">
                                +7-953-210-91-27
                            </a>
                        </li>
        
                        <li class="flex xs:flex sm:flex md:hidden sm:list-none">
                            <a href="https://t.me/autoprouss">
                                <img width="50px" class="transform hover:scale-105 transition-all p-2" src="<?php echo get_template_directory_uri() . '/src/img/icons/tg.svg'; ?>" alt="" >
                            </a>
                        </li>
        
                        <li class="flex xs:flex sm:flex md:hidden pr-3">
                            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=79510154751">
                            <img width="50px" class="transform hover:scale-105 transition-all p-2" src="<?php echo get_template_directory_uri() . '/src/img/icons/sap.svg'; ?>" alt="" >
                            </a>
                        </li>

                        <button class="btn__menu--mobile md:hidden flex z-100">
                                <svg class="h-3 w-3" viewBox="0 0 64 48">
                                    <path style="padding-bottom: 2px;" d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path style="padding-bottom: 2px;" d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path style="padding-bottom: 2px;" d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                        </button>
                    </div>
        
                    <!-- Мобильное меню -->
                    <div class="mobile-menu">
                        <div class="container">

                            <nav class="catalog-menu">
                                    <ul>
                                        <li class="text-white pt-2 pb-5 nav-link"><a href="/catalog">Каталог</a></li>
                                        <li class="text-white pt-2 pb-5 nav-link"><a href="/about">О компании</a></li>
                                        <li class="text-white pt-2 pb-5 nav-link"><a href="/review">Отзывы</a></li>
                                        <li class="text-white pt-2 pb-5 nav-link"><a href="/contacts">Контакты</a></li>
                                        <li class="text-white pt-2 pb-5 nav-link"><a href="/contract">Договор</a></li>

                                        <li class="mr-4 flex pt-2 pb-10">
                                            <img src="" alt="">
                                            <a class="text-white font-bold nav-link" href="tel:+79532109127">
                                                +7-953-210-91-27
                                            </a>
                                        </li>
                                    </ul>

                                    <a class="py-4 px-5 w-[238px] text-red bg-white rounded-2xl font-bold popup-link " href="#popup1">
                                        Подобрать авто
                                    </a>


                                        
                                    <ul class="flex justify-start padding__bottom__link pt-7">
                                        <li class="mr-2 list-none pt-2 pb-5 gap-2">
                                            <a href="https://api.whatsapp.com/send/?phone=79510154751">
                                                <img class="" src="<?php echo get_template_directory_uri() . '/src/img/icons/sap__white.svg'; ?>" alt="" >
                                            </a>
                                        </li>
                                        <li class="mr-2 list-none pt-2 pb-5 gap-2">
                                            <a href="https://t.me/autoprouss">
                                                <img class="" src="<?php echo get_template_directory_uri() . '/src/img/icons/tg__white1.svg'; ?>" alt="" >
                                            </a>
                                        </li>
                                        
                                        <li class="mr-4 list-none pt-2 pb-5 gap-2 padding__bottom__link">
                                            <a href="">
                                                <img class="" src="<?php echo get_template_directory_uri() . '/src/img/icons/youtube_white.svg'; ?>" alt="" >
                                            </a>
                                        </li>
                                    </ul>  
                            </nav>                
                        </div>
                    </div>
                </div>
        
            </div>
        </header>