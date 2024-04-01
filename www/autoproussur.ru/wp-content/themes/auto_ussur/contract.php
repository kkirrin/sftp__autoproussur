<?php
    /*
        Template name: contract
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
                                <span class="font-bold text-bg-black">Договор</span>
                            </li>
                        </ul>
                    </div>
            </section>


            <section class="pt-12 md:pt-14">
                <div class="container relative contract">
                    <!-- <a href="<?php echo get_template_directory_uri() . '/src/img/contract/contract_1.png'; ?>""> -->
                        <img style="background-color: white !important;" src="<?php echo get_template_directory_uri() . '/src/img/contract/contract_1.png'; ?>" alt="">
                    <!-- </a> -->

                    <!-- <a href="<?php echo get_template_directory_uri() . '/src/img/contract/contract_2.png'; ?>""> -->
                        <img style="background-color: white !important;" src="<?php echo get_template_directory_uri() . '/src/img/contract/contract_1.png'; ?>" alt="">
                    <!-- </a> -->

                    <!-- <a href="<?php echo get_template_directory_uri() . '/src/img/contract/contract_3.png'; ?>""> -->
                        <img style="background-color: white !important;" src="<?php echo get_template_directory_uri() . '/src/img/contract/contract_1.png'; ?>" alt="">
                    <!-- </a> -->
                </div>
            </section>
        </main>

<?php get_footer(); ?>