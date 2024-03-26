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
                        <form id="formForMain" class="pt-10 pb-10 grid grid-cols-1 md:grid-cols-4 gap-4 uppercase">
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Марка
                                </label>
                                <select name="brand" id="brand" class="w-full px-4 py-2 pr-8 rounded-lg">
                                    <option class="text-opacity-10">Выберите марку</option>
                                    <option class="text-opacity-10"></option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Модель
                                </label>
                                <select id="model" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                    <option class="text-opacity-10">Выберите модель</option>
                                    <option class="text-opacity-10"></option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Поколение
                                </label>
                                <select id="fuel" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                    <option class="text-gray">Бензин</option>
                                    <option class="text-gray">Дизель</option>
                                    <option class="text-gray">Газ</option>
                                    <option class="text-gray">Электричество</option>
                                    <option class="text-gray">Гибрид</option>

                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Топливо
                                </label>
                                <select id="drive" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                    <option>Привод</option>
                                    <option>4WD</option>
                                    <option>Задний</option>
                                    <option>Передний</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    КПП
                                </label>
                                <select id="transmition" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                    <option>Трансмиссия</option>
                                    <option>АКПП</option>
                                    <option>Робот</option>
                                    <option>Вариантор</option>
                                    <option>Механика</option>

                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Привод
                                </label>
                                <select id="transmition" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                    <option>Трансмиссия</option>
                                    <option>АКПП</option>
                                    <option>Робот</option>
                                    <option>Вариантор</option>
                                    <option>Механика</option>

                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Тип кузова
                                </label>
                                <select id="transmition" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                    <option>Трансмиссия</option>
                                    <option>АКПП</option>
                                    <option>Робот</option>
                                    <option>Вариантор</option>
                                    <option>Механика</option>

                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Объем 
                                </label>
                                <div class="flex gap-10">
                                    <div class="w-full">
                                        <select id="value_from" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                            <option>от</option>
                                            <option>600</option>
                                            <option>700</option>
                                            <option>800</option>
                                            <option>900</option>
                                            <option>1000</option>
                                            <option>1100</option>
                                            <option>1200</option>
                                            <option>1300</option>
                                            <option>1400</option>
                                            <option>1500</option>
                                            <option>1600</option>
                                            <option>1700</option>
                                            <option>1800</option>
                                            <option>1900</option>
                                            <option>2000</option>
                                            <option>2100</option>
                                            <option>2200</option>
                                            <option>2300</option>
                                            <option>2400</option>
                                            <option>2500</option>
                                            <option>2600</option>
                                            <option>2700</option>
                                            <option>2800</option>
                                            <option>2900</option>
                                            <option>3000</option>
                                            <option>3100</option>
                                            <option>3200</option>
                                            <option>3200</option>
                                            <option>3300</option>
                                            <option>3400</option>
                                            <option>3500</option>
                                            <option>3600</option>
                                            <option>3700</option>
                                            <option>3800</option>
                                            <option>3900</option>
                                            <option>4000</option>
                                            <option>4100</option>
                                            <option>4200</option>
                                            <option>4300</option>
                                            <option>4400</option>
                                            <option>4500</option>
                                            <option>4600</option>
                                            <option>4700</option>
                                            <option>4800</option>
                                            <option>4900</option>
                                            <option>5000</option>
                                            <option>5200</option>
                                            <option>5300</option>
                                            <option>5400</option>
                                            <option>5500</option>
                                            <option>5600</option>
                                            <option>5700</option>
                                            <option>5800</option>
                                            <option>5900</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                    <div class="w-full custom-select">
                                        <select id="value_to" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" > 
                                            <option>до</option>
                                            <option>600</option>
                                            <option>700</option>
                                            <option>800</option>
                                            <option>900</option>
                                            <option>1000</option>
                                            <option>1100</option>
                                            <option>1200</option>
                                            <option>1300</option>
                                            <option>1400</option>
                                            <option>1500</option>
                                            <option>1600</option>
                                            <option>1700</option>
                                            <option>1800</option>
                                            <option>1900</option>
                                            <option>2000</option>
                                            <option>2100</option>
                                            <option>2200</option>
                                            <option>2300</option>
                                            <option>2400</option>
                                            <option>2500</option>
                                            <option>2600</option>
                                            <option>2700</option>
                                            <option>2800</option>
                                            <option>2900</option>
                                            <option>3000</option>
                                            <option>3100</option>
                                            <option>3200</option>
                                            <option>3200</option>
                                            <option>3300</option>
                                            <option>3400</option>
                                            <option>3500</option>
                                            <option>3600</option>
                                            <option>3700</option>
                                            <option>3800</option>
                                            <option>3900</option>
                                            <option>4000</option>
                                            <option>4100</option>
                                            <option>4200</option>
                                            <option>4300</option>
                                            <option>4400</option>
                                            <option>4500</option>
                                            <option>4600</option>
                                            <option>4700</option>
                                            <option>4800</option>
                                            <option>4900</option>
                                            <option>5000</option>
                                            <option>5200</option>
                                            <option>5300</option>
                                            <option>5400</option>
                                            <option>5500</option>
                                            <option>5600</option>
                                            <option>5700</option>
                                            <option>5800</option>
                                            <option>5900</option>
                                            <option>6000</option>
                                        </select>   
                                    
                                    </div>
                                
                                </div>
                            </div>
                        
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Год 
                                </label>
                                <div class="flex gap-10">
                                    <div class="w-full">
                                        <select id="year_from" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                            <option>от</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <select id="year_to" name="make" class="w-full px-4 py-2 pr-8 rounded-lg" > 
                                            <option>до</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-black text-sm mb-2" for="make">
                                    Цена 
                                </label>
                                <div class="flex gap-10">
                                <div class="w-full">
                                    <select id="price_from" name="make" class="w-full px-4 py-2 pr-8 rounded-lg">
                                        <option>от</option>
                                        <option>100 000</option>
                                        <option>250 000</option>
                                        <option>500 000</option>
                                        <option>750 000</option>
                                        <option>1 000 000</option>
                                        <option>1 500 000</option>
                                        <option>2 000 000</option>
                                        <option>2 500 000</option>
                                        <option>3 000 000</option>
                                        <option>3 500 000</option>
                                        <option>4 500 000</option>
                                        <option>5 000 000</option>
                                        <option>5 500 000</option>
                                        <option>6 000 000</option>
                                        <option>6 500 000</option>
                                        <option>7 000 000</option>
                                        <option>8 000 000</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <select id="price_to" name="make" class="w-full px-4 py-2 pr-8 rounded-lg" > 
                                        <option>до</option>
                                        <option>100 000</option>
                                        <option>250 000</option>
                                        <option>500 000</option>
                                        <option>750 000</option>
                                        <option>1 000 000</option>
                                        <option>1 500 000</option>
                                        <option>2 000 000</option>
                                        <option>2 500 000</option>
                                        <option>3 000 000</option>
                                        <option>3 500 000</option>
                                        <option>4 500 000</option>
                                        <option>5 000 000</option>
                                        <option>5 500 000</option>
                                        <option>6 000 000</option>
                                        <option>6 500 000</option>
                                        <option>7 000 000</option>
                                        <option>8 000 000</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="flex items-center justify-center pt-2 ">
                                <a class="button py-3 px-5 capitalize w-[287px] text-center" href="#popup3">
                                    Показать
                                </a>
                                <button class=" text-yellow py-2 px-10 underline">
                                    Сбросить
                                </button>
                            </div>
                        </form>
                    </div>         
                </div>

                <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4  overflow-hidden pt-12 md:pt-32 gap-10">
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    
                        <div class="w-auto flex flex-col">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/catalog/car_2.png'; ?>" alt="">
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
                                    <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow__order.svg'; ?>" alt="">
                                </button>
                            </div>
                        </div>    

                    </div>                      
            </div>
                    
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
