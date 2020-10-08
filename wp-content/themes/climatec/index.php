<?php

/**

 * Template name: Home 

 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php the_title() ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/css/pages/main.css" />
    <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/Group 70.png" sizes="32x32" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&amp;display=swap" rel="stylesheet" />
    <?php wp_head(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />



</head>

<body>
    <header class="big_Container">
        <div class="header_cont">
            <button class="open_menu">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </button>

            <?php
            wp_nav_menu([
                'theme_location'  => 'menu-2',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu ancor-link',
                'menu_id'         => 'menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ]);
            ?>

            <a href="tel:<?php the_field('tel'); ?>" class="number"><?php the_field('company_telephone'); ?></a>

        </div>
    </header>
    <div class="main_popap main_popap_item">
        <div class="main_popap_cont">
            <div class="main_popap_block">
                <button class="clous_main_popap">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector (4).png" />
                </button>
                <h2>Получить расчет</h2>
                <?php echo do_shortcode('[contact-form-7 id="198" title="Контактная форма 3"]'); ?>
            </div>
        </div>
    </div>
    <div class="main_popap main_popap_item1">
        <div class="main_popap_cont">
            <div class="main_popap_block">
                <button class="clous_main_popap"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector (4).png" /></button>
                <h2>Заказать звонок</h2>
                <?php echo do_shortcode('[contact-form-7 id="196" title="Контактная форма 1"]'); ?>
            </div>
        </div>
    </div>
    <div class="pomishenia_popap" id="pomishenia_popap1">
        <div class="pomishenia_popap_cont">
            <button class="clous_pomishenia_popap" id="clous_pomishenia_popap1">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector (4).png" /></button>
            <div class="pomishenia_popap_block">
                <div class="pomishenia_popap_title">
                    <img src="<?php the_field('blok1_modal_img') ?>" />
                    <h2><?php the_field('blok1_modal_heading') ?></h2>
                </div>
                <div class="pomishenia_popap_text">
                    <?php the_field('blok1_modal_text') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pomishenia_popap" id="pomishenia_popap2">
        <div class="pomishenia_popap_cont">
            <button class="clous_pomishenia_popap" id="clous_pomishenia_popap2"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector (4).png" /></button>
            <div class="pomishenia_popap_block">
                <div class="pomishenia_popap_title">
                    <img src="<?php the_field('blok2_modal_img') ?>" />
                    <h2><?php the_field('blok2_modal_heading') ?></h2>
                </div>
                <div class="pomishenia_popap_text">
                    <?php the_field('blok2_modal_text') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pomishenia_popap" id="pomishenia_popap3">
        <div class="pomishenia_popap_cont">
            <button class="clous_pomishenia_popap" id="clous_pomishenia_popap3"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector (4).png" /></button>
            <div class="pomishenia_popap_block">
                <div class="pomishenia_popap_title">
                    <img src="<?php the_field('blok3_modal_img') ?>" />
                    <h2><?php the_field('blok3_modal_heading') ?></h2>
                </div>
                <div class="pomishenia_popap_text">
                    <?php the_field('blok3_modal_text') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="calc_popap">
        <div class="calc_popap_cont">
            <button class="clous_calc_popap"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector (4).png" /></button>
            <div class="calc_popap_block">
                <div class="calc_popap_itog">
                    <h4>Что получилось</h4>
                    <div class="caluclator_itog_item">
                        <p>Зон увлажнения</p>
                        <h5 class="zon">3</h5>
                    </div>
                    <div class="caluclator_itog_item">
                        <p>Площадь помещения</p>
                        <h5 class="kvadratmetr">45м<span>2</span></h5>
                    </div>
                    <div class="caluclator_itog_item">
                        <p>Ультрафиолетовая лампа</p>
                        <h5 class="ultra">Открытый</h5>
                    </div>
                    <div class="caluclator_itog_item">
                        <p>Система защиты от протечек</p>
                        <h5 class="sistem">Открытый</h5>
                    </div>
                    <div class="caluclator_itog_bottom">
                        <div class="caluclator_itog_item_bottom">
                            <p>ИТОГО</p>
                            <h5 class="itog">Итоговая сумма</h5>
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="209" title="Контактная форма 4"]'); ?>
            </div>
        </div>
    </div>

    <div class="page_wrap">
        <div class="main big_Container" id="main">
            <video src="<?php the_field('header_video') ?>" playsinline autobuffer autoplay muted></video>
            <div class="main_cont">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group (4).png" style="opacity: 0;" />
                <div class="main_bottom">
                    <div class="left">
                        <?php the_field('text_in_video') ?>
                    </div>
                    <a class="open_main_popap">Получить расчет</a>
                </div>
            </div>
        </div>
        <div class="offer big_Container" id="about_system">
            <div class="offer_cont">
                <div class="img"><img src="<?php the_field('image'); ?>" /></div>
                <div class="offer_flex">
                    <div class="offer_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14 (3).png" />
                        <?php the_field('mucous'); ?>
                    </div>

                    <div class="offer_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14 (2).png" />
                        <?php the_field('skin'); ?>
                    </div>

                    <div class="offer_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14 (1).png" />
                        <?php the_field('sleep') ?>
                    </div>

                    <div class="offer_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14.png" />
                        <?php the_field('interier'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="what_you_need big_Container" id="what_you_need">
            <div class="what_you_need_cont">
                <div class="what_you_need_text">
                    <?php the_field('humidity') ?>
                    <a class="open_in_hide_text">Подробнее</a>
                </div>
                <div class="what_you_need_procent_block">
                    <div class="what_you_need_procent_item">
                        <div class="title">
                            <h4><?php the_field('field1') ?></h4>
                            <p><?php the_field('field1_price') ?>%</p>
                        </div>
                        <div class="procent" data-price="<?php the_field('field1_price') ?>"></div>
                    </div>
                    <div class="what_you_need_procent_item">
                        <div class="title">
                            <h4><?php the_field('field2') ?></h4>
                            <p><?php the_field('field2_price') ?> %</p>
                        </div>
                        <div class="procent" data-price="<?php the_field('field2_price') ?>"></div>
                    </div>
                    <div class="what_you_need_procent_item">
                        <div class="title">
                            <h4><?php the_field('field3') ?></h4>
                            <p><?php the_field('field3_price') ?>%</p>
                        </div>
                        <div class="procent" data-price="<?php the_field('field3_price') ?>"></div>
                    </div>
                    <div class="what_you_need_procent_item">
                        <div class="title">
                            <h4><?php the_field('field4') ?></h4>
                            <p><?php the_field('field4_price') ?> %</p>
                        </div>
                        <div class="procent" data-price="<?php the_field('field4_price') ?>"></div>
                    </div>
                    <div class="what_you_need_procent_item">
                        <div class="title">
                            <h4><?php the_field('field5') ?></h4>
                            <p><?php the_field('field5_price') ?> %</p>
                        </div>
                        <div class="procent" data-price="<?php the_field('field5_price') ?>"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="obaut_work big_Container" id="obaut_work">
            <div class="obaut_work_cont">
                <h2>О работе системы</h2>
                <div class="obaut_work_video">
                    <div class="play_video">
                        <button></button>
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/MP0bgaS_d1c.png" />
                    </div>
                    <video src="<?php the_field('video') ?>" playsinline autobuffer loop muted>
                    </video>
                </div>
                <div class="obaut_work_flex">
                    <h4><?php the_field('text_left'); ?></h4>
                    <div class="p">
                        <?php the_field('text_right'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="automatick_block big_Container" id="automatick_block">
            <h2><?php the_field('automatick_block_title') ?></h2>
            <div class="automatick_block_cont">
                <?php

                $args = array(
                    'category' => 3,
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                );
                $result = wp_get_recent_posts($args);
                $fullResult_ch = array_slice($result, 1);
                foreach ($fullResult_ch as $p) {

                ?>
                    <div class="automatick_block_text">

                        <?php the_field('characteristics', $p['ID'])  ?>
                    </div>
                <?php
                }
                ?>
                <div class="automatick_block_slide">
                    <div class="automatick_block_slide_cont">
                        <?php

                        $args = array(
                            'category' => 3,
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                        );

                        $result = wp_get_recent_posts($args);
                        $fullResult = array_slice($result, 0);
                        $secondChild = array_slice($result, 1, 1);
                        ?>
                        <?php foreach ($fullResult as $q) : ?>
                            <div class="automatick_block_item">
                                <img src="<?php the_field('hardware_image', $q['ID']); ?>" />
                                <h5><?php the_field('aparat_name', $q['ID']) ?></h5>
                            </div>
                        <?php endforeach; ?>
                        <div class="automatick_block_item">
                            <img src="<?php the_field('hardware_image', $secondChild[0]['ID']); ?>" />
                            <h5><?php the_field('aparat_name', $secondChild[0]['ID']); ?></h5>
                        </div>
                    </div>

                    <div class="automatick_block_button">
                        <button class="btn_next"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector 11.png" /></button>
                    </div>
                </div>

            </div>
        </div>

        <div class="automatic-slider">
            
        </div>

        <div class="primushestvo big_Container" id="primushestvo">
            <div class="primushestvo_cont">
                <h2>Примущества форсуночной системы увлажнения</h2>
                <div class="primushestvo_flex">
                    <div class="primushestvo_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 72.png" />
                        <h4>Эстетичность</h4>
                        <p>Не занимает место в жилых помещениях и впишется в любой интерьер</p>
                    </div>
                    <div class="primushestvo_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 71 (1).png" />
                        <h4>Автономность</h4>
                        <p>Полностью автономна. Не требует ухода и долива воды</p>
                    </div>
                    <div class="primushestvo_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 70 (4).png" />
                        <h4>Комфорт</h4>
                        <p>Управление с вашего смартфона или с настенных сенсорных панелей</p>
                    </div>
                    <div class="primushestvo_item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14 (7).png" />
                        <h4>Экономичность</h4>
                        <p>Имеет низкое энерго- и водопотребление</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sxema big_Container" id="sxema">
            <div class="sxema_cont">
                <h2>Схема устройства</h2>
                <img class="open_height_img" src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 82.png" />
                <div class="sxem_flex">
                    <div class="left">
                        <div class="sxem_item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector 67.png" />
                            <p>Трубопровод низкого давления</p>
                        </div>
                        <div class="sxem_item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector 68.png" />
                            <p>Трубопровод высокого давления</p>
                        </div>
                        <div class="sxem_item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector 69.png" />
                            <p>Кабель передачи данных</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="sxem_item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 71.png" />
                            <p>Датчик температуры и влажности</p>
                        </div>
                        <div class="sxem_item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 66.png" />
                            <p>Форсунка</p>
                        </div>
                        <div class="sxem_item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Rectangle 73.png" />
                            <p>Сенсорный дисплей</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="applications big_Container" id="applications">
            <img class="bg_image" src="<?php echo bloginfo('template_url'); ?>/assets/img/Group (6).png" />
            <div class="applications_cont">
                <h2>Где применяются системы?</h2>
                <div class="applications_flex">
                    <div class="applications_item " id="open_pomishenia_popap1">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14 (4).png" />
                        <?php the_field('blok__1') ?>

                        <a href="javascript:void(0)">Подробнее</a>
                    </div>
                    <div class="applications_item " id="open_pomishenia_popap2">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14 (5).png" />
                        <?php the_field('blok__2') ?>

                        <a href="javascript:void(0)">Подробнее</a>
                    </div>
                    <div class="applications_item" id="open_pomishenia_popap3">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 14 (6).png" />
                        <?php the_field('blok__3') ?>

                        <a href="javascript:void(0)">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="caluclator big_Container" id="calculate">
            <div class="caluclator_cont">
                <h2>Рассчитать стоимость</h2>
                <div class="caluclator_block">
                    <div class="caluclator_type">
                        <div class="caluclator_range">
                            <div class="title">
                                <h4>Площадь помещения</h4>
                                <div class="output">
                                    <output name="ageOutputName" id="ageOutputId">45</output>
                                    <p>м<span>2</span></p>
                                </div>
                            </div>
                            <input type="range" min="10" max="300" value="45" step="1" oninput="ageOutputId.value = ageInputId.value" id="ageInputId" />
                        </div>
                        <div class="caluclator_type_item">
                            <p>Количество зон увлажнения</p>
                            <div class="select_zon">
                                <div class="zon_num">
                                    <p>1</p> <input type="hidden" value="1" id="zon_num_input">
                                </div>
                                <div class="select_button">
                                    <button class="btn_minus">
                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="#656565" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 4.56699C0.416667 4.75944 0.416666 5.24056 0.75 5.43301L8.25 9.76314C8.58333 9.95559 9 9.71503 9 9.33013L9 0.669873C9 0.284973 8.58333 0.0444107 8.25 0.236861L0.75 4.56699Z" />
                                        </svg>
                                    </button>
                                    <button class="btn_plus">
                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="#656565" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.25 4.56699C8.58333 4.75944 8.58333 5.24056 8.25 5.43301L0.75 9.76314C0.416667 9.95559 4.68369e-07 9.71503 4.51544e-07 9.33013L7.29925e-08 0.669873C5.61679e-08 0.284973 0.416667 0.0444107 0.75 0.236861L8.25 4.56699Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="caluclator_type_item">
                            <label for="ultra" class="label-accept">
                                <input type="checkbox" id="ultra" />
                                <p>Ультрафиолетовая антибактериальная лампа</p>
                            </label>
                            <label for="sistem" class="label-accept">
                                <input type="checkbox" id="sistem" />
                                <p>Система защиты от протечек</p>
                            </label>
                        </div>

                    </div>
                    <div class="caluclator_itog">
                        <h4>Что получилось</h4>
                        <div class="caluclator_itog_item">
                            <p>Зон увлажнения</p>
                            <h5 class="zon">3</h5>
                        </div>
                        <div class="caluclator_itog_item">
                            <p>Площадь помещения</p>
                            <h5 class="kvadratmetr">45м<span>2</span></h5>
                        </div>
                        <div class="caluclator_itog_item">
                            <p>Ультрафиолетовая лампа</p>
                            <h5 class="ultra">Открытый</h5>
                        </div>
                        <div class="caluclator_itog_item">
                            <p>Система защиты от протечек</p>
                            <h5 class="sistem">Открытый</h5>
                        </div>
                        <div class="caluclator_itog_bottom">
                            <div class="caluclator_itog_item_bottom">
                                <p>ИТОГО</p>
                                <h5 class="itog">Итоговая сумма</h5>
                            </div>
                            <button class="zakaz_btn open_calc_popap">Заказать установку</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio big_Container" id="examples">
            <div class="portfolio_cont">
                <h2>Примеры наших работ</h2>
                <div class="portfolio_owl_carusel">
                    <?php
                    $args = array(
                        'category' => 2,
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                    );

                    $result = wp_get_recent_posts($args);
                    $count = -1;
                    foreach ($result as $p) {
                        $count++;
                    ?>
                        <div class="portfolio_item open_primer_popap">
                            <div class="portfolio_img">
                                <a href="<?php the_field('_image', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                    <img class="img" src="<?php the_field('_image', $p['ID']) ?>" />
                                    <span>
                                        Смотреть проект
                                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5303 6.53033C21.8232 6.23743 21.8232 5.76256 21.5303 5.46967L16.7574 0.696698C16.4645 0.403804 15.9896 0.403804 15.6967 0.696698C15.4038 0.989591 15.4038 1.46446 15.6967 1.75736L19.9393 6L15.6967 10.2426C15.4038 10.5355 15.4038 11.0104 15.6967 11.3033C15.9896 11.5962 16.4645 11.5962 16.7574 11.3033L21.5303 6.53033ZM6.55671e-08 6.75L21 6.75L21 5.25L-6.55671e-08 5.25L6.55671e-08 6.75Z" fill="#229E24" />
                                        </svg>
                                    </span>
                                </a>

                                <div style="display: none">
                                    <?php if (get_field('_image_gallary', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>" class="fancybox-gallary-thum">
                                            <img src="<?php the_field('_image_gallary', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>

                                    <?php if (get_field('_image_gallary_2', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_2', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_2', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_3', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_3', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_3', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_4', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_4', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_4', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_5', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_5', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_5', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_6', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_6', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_6', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_7', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_7', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_7', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_8', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_8', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_8', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_9', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_9', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_9', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>
                                    <?php if (get_field('_image_gallary_10', $p['ID'])) {
                                    ?>
                                        <a href="<?php the_field('_image_gallary_10', $p['ID']) ?>" data-fancybox="images<?php echo $p['ID']; ?>">
                                            <img src="<?php the_field('_image_gallary_10', $p['ID']) ?>" alt="">
                                        </a>
                                    <?php
                                    } ?>


                                </div>
                            </div>
                            <h4><?php the_field('title', $p['ID']) ?></h4>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="company big_Container" id="company">
            <img class="bg_image" src="<?php echo bloginfo('template_url'); ?>/assets/img/Vector (2).png" />
            <div class="company_cont">
                <div class="company_img"><img src="<?php the_field('company_image') ?>" /></div>
                <div class="company_text">
                    <?php the_field('company_climatec') ?>
                </div>
            </div>
        </div>
        <div class="contact big_Container" id="questions_answers">
            <img class="bg_img" src="<?php echo bloginfo('template_url'); ?>/assets/img/Group 70 (3).png" />
            <div class="contact_cont">
                <?php echo do_shortcode('[contact-form-7 id="197" title="Контактная форма 2"]'); ?>
                <div class="contact_items">
                    <div class="item">
                        <h4>Адрес</h4>
                        <p> <?php the_field('company_address')  ?> </p>
                    </div>
                    <div class="item">
                        <h4>Телефон</h4>
                        <a href="tel:<?php the_field('tel'); ?>"><?php the_field('company_telephone'); ?></a>
                    </div>
                    <div class="item">
                        <h4>Почта</h4>
                        <a><?php the_field('company_mail')  ?> </a>
                    </div>
                    <div class="item">
                        <h4>Социальные сети</h4>
                        <div class="sites">
                            <a href="<?php the_field('instagram') ?>" target="_blank">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="#343434" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.164 0 0 7.164 0 16C0 24.836 7.164 32 16 32C24.836 32 32 24.836 32 16C32 7.164 24.836 0 16 0ZM16 1C24.271 1 31 7.729 31 16C31 24.271 24.271 31 16 31C7.729 31 1 24.271 1 16C1 7.729 7.729 1 16 1ZM10.6667 13.3333H13.3333V11.0773C13.3333 9.056 14.3973 8 16.7947 8H20V11.3333H18.0773C17.4613 11.3333 17.3333 11.5853 17.3333 12.2227V13.3333H20L19.76 16H17.3333V24H13.3333V16H10.6667V13.3333Z" />
                                </svg>
                            </a>
                            <a href="<?php the_field('twitter') ?>" target="_blank">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#343434" />
                                    <path d="M23.1831 12.251C23.0103 11.6084 22.5036 11.1019 21.8611 10.9288C20.6873 10.6077 15.992 10.6077 15.992 10.6077C15.992 10.6077 11.2969 10.6077 10.1231 10.9167C9.49295 11.0895 8.97394 11.6085 8.80109 12.251C8.49219 13.4247 8.49219 15.8589 8.49219 15.8589C8.49219 15.8589 8.49219 18.3052 8.80109 19.4667C8.97412 20.1092 9.48059 20.6158 10.1232 20.7888C11.3093 21.11 15.9922 21.11 15.9922 21.11C15.9922 21.11 20.6873 21.11 21.8611 20.8011C22.5037 20.6281 23.0103 20.1216 23.1833 19.479C23.4921 18.3052 23.4921 15.8712 23.4921 15.8712C23.4921 15.8712 23.5045 13.4247 23.1831 12.251ZM14.4971 18.1076V13.6101L18.4015 15.8589L14.4971 18.1076Z" fill="#343434" />
                                </svg>

                            </a>
                            <a href="<?php the_field('facebook') ?>" target="_blank">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="#343434" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.164 0 0 7.164 0 16C0 24.836 7.164 32 16 32C24.836 32 32 24.836 32 16C32 7.164 24.836 0 16 0ZM16 1C24.271 1 31 7.729 31 16C31 24.271 24.271 31 16 31C7.729 31 1 24.271 1 16C1 7.729 7.729 1 16 1ZM11.4491 8C9.54425 8 8.00003 9.54422 8.00003 11.4491V20.5509C8.00003 22.4558 9.54425 24 11.4491 24H20.5509C22.4558 24 24 22.4558 24 20.5509V11.4491C24 9.54422 22.4558 8 20.5509 8H11.4491ZM16 19.4491C17.9049 19.4491 19.4491 17.9049 19.4491 16C19.4491 14.0951 17.9049 12.5509 16 12.5509C14.0951 12.5509 12.5509 14.0951 12.5509 16C12.5509 17.9049 14.0951 19.4491 16 19.4491ZM21.6647 11.3234C21.6647 11.8756 21.217 12.3234 20.6647 12.3234C20.1124 12.3234 19.6647 11.8756 19.6647 11.3234C19.6647 10.7711 20.1124 10.3234 20.6647 10.3234C21.217 10.3234 21.6647 10.7711 21.6647 11.3234Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer big_Container" id="contacts">
        <div class="footer_cont">
            <div class="left">
                <div class="footer_item">
                    <a class="logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Frame.png" /></a>
                    <p> <?php the_field('company_address') ?> </p>
                    <span>CLIMATEC © 2017–2020</span>
                </div>
                <div class="footer_item">
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'menu-3',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'ancor-link',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ]);
                    ?>
                </div>
            </div>
            <div class="right">
                <div class="footer_item">
                    <div class="sites">
                        <a href="<?php the_field('instagram') ?>" target="_blank">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="#343434" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.164 0 0 7.164 0 16C0 24.836 7.164 32 16 32C24.836 32 32 24.836 32 16C32 7.164 24.836 0 16 0ZM16 1C24.271 1 31 7.729 31 16C31 24.271 24.271 31 16 31C7.729 31 1 24.271 1 16C1 7.729 7.729 1 16 1ZM10.6667 13.3333H13.3333V11.0773C13.3333 9.056 14.3973 8 16.7947 8H20V11.3333H18.0773C17.4613 11.3333 17.3333 11.5853 17.3333 12.2227V13.3333H20L19.76 16H17.3333V24H13.3333V16H10.6667V13.3333Z" />
                            </svg>
                        </a>
                        <a href="<?php the_field('twitter') ?>" target="_blank">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#343434" />
                                <path d="M23.1831 12.251C23.0103 11.6084 22.5036 11.1019 21.8611 10.9288C20.6873 10.6077 15.992 10.6077 15.992 10.6077C15.992 10.6077 11.2969 10.6077 10.1231 10.9167C9.49295 11.0895 8.97394 11.6085 8.80109 12.251C8.49219 13.4247 8.49219 15.8589 8.49219 15.8589C8.49219 15.8589 8.49219 18.3052 8.80109 19.4667C8.97412 20.1092 9.48059 20.6158 10.1232 20.7888C11.3093 21.11 15.9922 21.11 15.9922 21.11C15.9922 21.11 20.6873 21.11 21.8611 20.8011C22.5037 20.6281 23.0103 20.1216 23.1833 19.479C23.4921 18.3052 23.4921 15.8712 23.4921 15.8712C23.4921 15.8712 23.5045 13.4247 23.1831 12.251ZM14.4971 18.1076V13.6101L18.4015 15.8589L14.4971 18.1076Z" fill="#343434" />
                            </svg>
                        </a>
                        <a href="<?php the_field('facebook') ?>" target="_blank">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="#343434" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.164 0 0 7.164 0 16C0 24.836 7.164 32 16 32C24.836 32 32 24.836 32 16C32 7.164 24.836 0 16 0ZM16 1C24.271 1 31 7.729 31 16C31 24.271 24.271 31 16 31C7.729 31 1 24.271 1 16C1 7.729 7.729 1 16 1ZM11.4491 8C9.54425 8 8.00003 9.54422 8.00003 11.4491V20.5509C8.00003 22.4558 9.54425 24 11.4491 24H20.5509C22.4558 24 24 22.4558 24 20.5509V11.4491C24 9.54422 22.4558 8 20.5509 8H11.4491ZM16 19.4491C17.9049 19.4491 19.4491 17.9049 19.4491 16C19.4491 14.0951 17.9049 12.5509 16 12.5509C14.0951 12.5509 12.5509 14.0951 12.5509 16C12.5509 17.9049 14.0951 19.4491 16 19.4491ZM21.6647 11.3234C21.6647 11.8756 21.217 12.3234 20.6647 12.3234C20.1124 12.3234 19.6647 11.8756 19.6647 11.3234C19.6647 10.7711 20.1124 10.3234 20.6647 10.3234C21.217 10.3234 21.6647 10.7711 21.6647 11.3234Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer_item">
                    <a class="a_btn">Заказать звонок</a>
                    <a href="tel:<?php the_field('tel'); ?>" class="a_href"><?php the_field('company_telephone'); ?>
                    </a>
                    <a class="a_href"> <?php the_field('company_mail') ?> </a>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div id="policy" style="display: none;" class="policy">
                <?php the_field('policy') ?>
            </div>
            <a href="#policy" data-fancybox>Политика конфиденциальности</a><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Component 6.svg" />
        </div>
    </footer>
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/assets/js/index.js"></script>

    <script type='text/javascript' src='http://climatec.wishme.am/wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
    <script type="text/javascript">
        var menu = 0;

        $(".open_menu").click(function(event) {

            if (menu == 0) {

                $(".menu").css("width", "100%");

                $(".line1").css("background", "transparent")

                $(".line2").css("transform", "rotate(45deg)")

                $(".line3").css("transform", "rotate(-45deg)")

                $(".line3").css("top", "-7px")

                menu = 1;

            } else {

                $(".menu").css("width", "0");

                $(".line1").css("background", "#FFF")

                $(".line2").css("transform", "rotate(0)")

                $(".line3").css("transform", "rotate(0)")

                $(".line3").css("top", "0")

                menu = 0;

            }

        })

        var max_proc = 40;

        var proc_before = 0;

        var proc_helper = 0;

        var proc_num = 0;

        var proc_helper2 = 0

        var proc_procent = 0;

        var proc_sec = 0.4;

        var procent_chislo = 0;

        var procent_chislo2 = 0;

        var procent_chislo3 = 0;

        var procent_chislo4 = 0;

        var procent_chislo5 = 0;

        var proc_items = $(".what_you_need_procent_item .procent");

        var proc_items3 = $(".what_you_need_procent_item .title");

        var set_img_height = 0

        for (var i = 0; i < max_proc; i++) {

            $(proc_items).append("<div class='procent_after'></div>")

        }

        var y = 0

        $(window).scroll(function() {

            y = window.scrollY

            for (var g = 0; g < proc_items.length; g++) {

                proc_helper = 0

                proc_helper2 = 0

                proc_sec = 0.4

                for (var kar = 0; kar < max_proc; kar++) {

                    proc_num = $(proc_items[g]).data("price");

                    proc_before = max_proc / 100 * proc_num;

                    proc_procent = $(proc_items[g]).children(".procent_after");

                    proc_sec += 0.4

                    $(proc_procent[kar]).css("transition", "all " + proc_sec + "s")

                    if (y >= 1500) {

                        if (kar < proc_before) {

                            $(proc_procent[proc_helper2]).css("background", "#1CE17E")

                            proc_helper2 += 1

                        }

                    }

                }

            }

            if (y >= 1500) {

                setInterval(function() {

                    if (procent_chislo < $(proc_items[0]).data("price")) {

                        procent_chislo += 1

                        $(proc_items3[0]).children("p").text("" + procent_chislo + "%")

                    }

                }, 150);

                setInterval(function() {

                    if (procent_chislo2 < $(proc_items[1]).data("price")) {

                        procent_chislo2 += 1

                        $(proc_items3[1]).children("p").text("" + procent_chislo2 + "%")

                    }

                }, 150);

                setInterval(function() {

                    if (procent_chislo3 < $(proc_items[2]).data("price")) {

                        procent_chislo3 += 1

                        $(proc_items3[2]).children("p").text("" + procent_chislo3 + "%")

                    }

                }, 150);

                setInterval(function() {

                    if (procent_chislo4 < $(proc_items[3]).data("price")) {

                        procent_chislo4 += 1

                        $(proc_items3[3]).children("p").text("" + procent_chislo4 + "%")

                    }

                }, 150);

                setInterval(function() {

                    if (procent_chislo5 < $(proc_items[4]).data("price")) {

                        procent_chislo5 += 1

                        $(proc_items3[4]).children("p").text("" + procent_chislo5 + "%")

                    }

                }, 150);

            }

            if (y > 4917) {

                $(".open_height_img").css("height", "20%")

            }

            if (y > 5017) {

                $(".open_height_img").css("height", "33%")

            }

            if (y > 5117) {

                $(".open_height_img").css("height", "100%")

            }

        });

        var play_vid = 0;

        $(".obaut_work_video").click(function(event) {

            if (play_vid == 0) {

                play_vid = 1

                $(".obaut_work_video video").show()

                $(".obaut_work_video video").get(0).play();

                $(".obaut_work_video video").css("z-index", "5")



            } else {

                $(".obaut_work_video video").hide();

                $(".obaut_work_video video").get(0).pause();

                $(".obaut_work_video video").css("z-index", "-2")

                play_vid = 0

            }

        })



        jQuery(function($) {

            $(document).ready(function() {

                var owl = $('.portfolio_owl_carusel').owlCarousel({

                    items: 3,

                    slideSpeed: 500,

                    autoplay: false,

                    loop: false,

                    nav: true,

                    rewindNav: true,

                    mouseDrag: true,

                    margin: 30,

                    autoWidth: true,

                    responsive: {

                        0: {

                            items: 1,

                            margin: 60

                        },

                        600: {

                            items: 1

                        },

                        1000: {

                            items: 1

                        },

                    }

                }).data('owlCarousel');

            });

        })

        var all_items = $(".automatick_block_item");

        var all_items_text = $(".automatick_block_text");

        $(all_items_text).hide()

        $(all_items_text[0]).show()

        var set_all_items_text = 0;

        $(all_items).hide();

        var show_items = [all_items[0], all_items[1], all_items[2]];

        var set_item = 2

        $(show_items[0]).addClass("automatick_block_item_1")
        // console.log(show_items[0])

        $(show_items[2]).addClass("automatick_block_item_3")

        $(show_items).show();

        if ($(window).width() < 671) {

            $(show_items).removeClass("automatick_block_item_3")

            show_items = [all_items[0], all_items[1]];

            $(all_items).hide();

            $(show_items).show();

            set_item = 1

        }

        $(".btn_next").click(function() {

            if (set_all_items_text < all_items_text.length) {

                set_all_items_text += 1;

                $(all_items_text).hide();
                if (window.innerWidth > 700) {
                    $(all_items_text[set_all_items_text]).slideDown(500);
                } else {
                    $(all_items_text[set_all_items_text]).slideDown(0);
                }


                if (set_all_items_text == all_items_text.length) {

                    set_all_items_text = 0

                    $(all_items_text).hide();
                    if (window.innerWidth > 700) {
                        $(all_items_text[set_all_items_text]).slideDown(500);
                    } else {
                        $(all_items_text[set_all_items_text]).slideDown(0);
                    }


                }

            }

            if (set_item < all_items.length) {

                if ($(window).width() > 671) {

                    if (set_item == all_items.length - 1) {

                        set_item = 2;

                        $(all_items).hide();

                        show_items = []

                        show_items = [all_items[0], all_items[1], all_items[2]];

                        $(all_items).removeClass("automatick_block_item_1")

                        $(all_items).removeClass("automatick_block_item_3")

                        $(show_items[0]).addClass("automatick_block_item_1")

                        $(show_items[2]).addClass("automatick_block_item_3")

                        $(show_items).show();

                        return;

                    }

                    set_item += 1;

                    $(all_items).hide();

                    show_items = []

                    show_items = [all_items[set_item - 2], all_items[set_item - 1], all_items[set_item]];

                    $(all_items).removeClass("automatick_block_item_1")

                    $(all_items).removeClass("automatick_block_item_3")

                    $(show_items[0]).addClass("automatick_block_item_1")

                    $(show_items[2]).addClass("automatick_block_item_3")

                    $(show_items).show();

                }

                if ($(window).width() < 671) {

                    $(show_items).removeClass("automatick_block_item_3")

                    set_item += 1;

                    $(all_items).hide();

                    show_items = []

                    show_items = [all_items[set_item], all_items[set_item - 1]];

                    $(show_items).show()

                    $(".automatick_block_item_1").css("width", "100%")

                    $(".automatick_block_item_1").css("width", "0")

                    $(all_items).removeClass("automatick_block_item_1")

                    $(show_items[1]).addClass("automatick_block_item_1")

                    $(show_items).show();

                    if (set_item == all_items.length - 1) {

                        $(all_items).hide();

                        set_item = 1

                        show_items = []

                        show_items = [all_items[set_item], all_items[set_item - 1]];

                        $(show_items).show();

                        $(".automatick_block_item_1").css("width", "100%")

                        $(".automatick_block_item_1").css("width", "0")

                        $(all_items).removeClass("automatick_block_item_1")

                        $(show_items[1]).addClass("automatick_block_item_1")

                        console.log("4654654")

                    }

                }

            }

        });

        var zon_num = 1;

        var zon_num_back = 2;

        var zon_num_help = 4;



        $(".btn_plus").click(function() {

            zon_num += 1;

            $(".zon_num p").remove()

            $(".zon_num").append("<p>" + zon_num + "</p>")
            $('#zon_num_input').val(zon_num);
            $('#zon_num_input').trigger('change');
            $(".zon").text(zon_num)
            // if(zon_num==zon_num_help){

            //   zon_num_back+=1

            //   zon_num_help+=3


            // }

        })

        $(".btn_minus").click(function() {

            if (zon_num > 1) {

                zon_num -= 1;

                $(".zon_num p").remove()

                $(".zon_num").append("<p>" + zon_num + "</p>")
                $('#zon_num_input').val(zon_num);
                $('#zon_num_input').trigger('change');
                $(".zon").text(zon_num)

            }

        })

        var n = 0;

        var f = 0

        $(".caluclator_type_item label").click(function() {

            checkSelectedParam();

        })
        checkSelectedParam();

        function checkSelectedParam() {
            if ($('#ultra').is(':checked')) {

                n = 1

                $(".ultra").text("Да")

            } else {

                n = 0

                $(".ultra").text("Нет")

            }

            if ($('#sistem').is(':checked')) {

                f = 1;

                $(".sistem").text("Да")

            } else {

                f = 0;

                $(".sistem").text("Нет")

            }
        }

        var c = 0

        var summa = 0;

        var dollar = 0;


        var cal_help = 0;

        var cal_help1 = 0;

        var cal_help2 = 0;

        var cal_help22 = 0;

        var cal_help3 = 0;

        var cal_help4 = 0;

        var cal_help5 = 0;

        var cal_help6 = 0;

        var cal_help7 = 0;

        var cal_help8 = 0;
        $(document).ready(function() {
            $('#ageInputId').trigger('change');
        })
        $(document).on('input change', 'input[type="range"], #ultra, #sistem, #zon_num_input', function() {


            c = $('#ageInputId').val(); // S

            $(".kvadratmetr").text("" + c + "м2")

            dollar = "<?php print_r(get_field('dollar_course')); ?>";

            rubl = "<?php print_r(get_field('ruble_course')); ?>";

            par_1 = <?php print_r(get_field('param_1')); ?>; //4550;
            p_2 = <?php print_r(get_field('param_2')); ?>; // 150;
            p_3 = <?php print_r(get_field('param_3')); ?>; //1160;
            p_4 = <?php print_r(get_field('param_4')); ?>; //265;
            p_5 = <?php print_r(get_field('param_5')); ?>; //170;
            p_6 = <?php print_r(get_field('param_6')); ?>; //25;
            p_7 = <?php print_r(get_field('param_7')); ?>; //3;
            // param_3


            // X1-0 dollar
            // X1-1
            cal_help1 = zon_num / p_7;
            polu_itog1 = Math.ceil(cal_help1);

            // X1-2
            cal_help2 = p_2 * n;
            // X1-3
            polu_itog2 = cal_help2 + par_1;



            // X2
            polu_itog3 = zon_num * p_3;


            // X3
            cal_help3 = c / p_6;
            polu_itog4 = Math.round(cal_help3);
            polu_itog5 = p_4 * polu_itog4;

            // X4
            cal_help4 = p_5 * f;


            // X1=====
            cal_help5 = polu_itog1 * polu_itog2;

            // X3=====
            cal_help6 = polu_itog5;

            cal_help7 = (cal_help5 + cal_help6 + polu_itog3 + cal_help4) * dollar;


            // cal_help8 =  Math.round(cal_help7*rubl);

            itog = cal_help7;

            $(".itog").text(itog + " Р")

        });

        jQuery(function() {

            if (n == 0) {

                $(".ultra").text("Нет")

            }

            if (f == 0) {

                $(".sistem").text("Нет")

            }

            $(".zon").text("1")

        })

        var open_text = 0;

        $(".open_in_hide_text").click(function() {

            if (open_text == 0) {
                $(".text_show_and_hidden").addClass('text_show_and_hidden--active');
                $(".text_show_and_hidden").css("max-height", "1200px")

                $(".open_in_hide_text").text("Скрыть")

                open_text = 1;

            } else {
                $(".text_show_and_hidden").removeClass('text_show_and_hidden--active');
                $(".text_show_and_hidden").css("max-height", "200px")

                $(".open_in_hide_text").text("Подробнее")

                open_text = 0;

            }

        })

        $(".open_main_popap").click(function() {

            $(".main_popap_item").css("display", "flex");

        });

        $(".a_btn").click(function() {

            $(".main_popap_item1").css("display", "flex");

        });

        $(".clous_main_popap").click(function() {


            $(".main_popap").css("display", "none");

        });

        $(".main_popap").on('click', function(e) {
            var el = e.target;
            if ($(el).hasClass('main_popap')) {
                $(".main_popap").css("display", "none");
            }
        });


        $("#open_pomishenia_popap1").click(function() {

            $("#pomishenia_popap1").css("display", "flex");

        });

        $("#clous_pomishenia_popap1").click(function() {

            $("#pomishenia_popap1").css("display", "none");

        });

        $("#open_pomishenia_popap2").click(function() {

            $("#pomishenia_popap2").css("display", "flex");

        });

        $("#clous_pomishenia_popap2").click(function() {

            $("#pomishenia_popap2").css("display", "none");

        });

        $("#open_pomishenia_popap3").click(function() {

            $("#pomishenia_popap3").css("display", "flex");

        });

        $("#clous_pomishenia_popap3").click(function() {

            $("#pomishenia_popap3").css("display", "none");

        });


        $(".pomishenia_popap").on('click', function(e) {
            var el = e.target;
            if ($(el).hasClass('pomishenia_popap')) {
                $("#pomishenia_popap1").css("display", "none");
                $("#pomishenia_popap2").css("display", "none");
                $("#pomishenia_popap3").css("display", "none");
            }
        });

        $(".open_calc_popap").click(function() {

            $(".calc_popap").css("display", "flex");

        });

        $(".clous_calc_popap").click(function() {

            $(".calc_popap").css("display", "none");

        });

        $(".calc_popap").on('click', function(e) {
            var el = e.target;
            if ($(el).hasClass('calc_popap')) {
                $(".calc_popap").css("display", "none");
            }
        });
        // $(".open_primer_popap").click(function(){

        //   $(".primer_popap").css("display","flex");

        // });

        $(".clous_primer_popap").click(function() {

            $(".primer_popap").css("display", "none");
            $('body').css('overflow-x', 'hidden');
            $('body').css('overflow-y', 'unset');

        });



        var primer_img = $(".primer_popap-owl img")

        $(primer_img).hide()

        $(primer_img[0]).show()

        var primer_num = 0;

        $(".next_primer").click(function() {

            if (primer_num < primer_img.length - 1) {


                primer_num += 1;

                $(primer_img).hide()

                $(primer_img[primer_num]).show();

            }

        });

        // $(document).on('click','.owl-item',function(){

        //   let data_id = $(this).find('img').attr('data-id');
        //   $('.primer_popap-owl .active_img').hide();
        //   $('.primer_popap-owl .active_img.data-id'+data_id).show();    
        //        $('body').css({
        //        overflow: 'hidden',
        //      });
        //   });



        $(".prev_primer").click(function() {

            if (primer_num > 0) {

                primer_num -= 1;

                $(primer_img).hide()

                $(primer_img[primer_num]).show()

            }

        });

        $(".about_system").click(function() {

            $('html, body').animate({

                scrollTop: $("#about_system").position().top

            }, 500);

        });



        $(".examples").click(function() {

            $('html, body').animate({

                scrollTop: $("#examples").position().top

            }, 500);

        });

        $(".calculate").click(function() {

            $('html, body').animate({

                scrollTop: $("#calculate").position().top

            }, 500);

        });

        $(".questions_answers").click(function() {

            $('html, body').animate({

                scrollTop: $("#questions_answers").position().top

            }, 500);

        });

        $(".contacts").click(function() {

            $('html, body').animate({

                scrollTop: $("#contacts").position().top

            }, 500);
        });


        $('.ancor-link a').click(function(e) {
            e.preventDefault();
            var href = $(this).attr('href');

            $('html, body').animate({

                scrollTop: $(href).position().top

            }, 500);

        });

        // Добавить фалй
        $('#file-for-user').click(function() {
            $('#file-for-wp').trigger('click');
        });
        $('#add-file-raschet').click(function() {
            $('#file-for-wp-raschet').trigger('click');
        });
        $('#add-file-raschet-2').click(function() {
            $('#file-for-wp-raschet-2').trigger('click');
        });

        $('#add-file-question').click(function() {
            $('#file-for-wp-ques').trigger('click');
        });


        $('[data-fancybox*="images"]').fancybox({
            loop: false,
            buttons: [
                "zoom",
                //"share",
                "slideShow",
                //"fullScreen",
                //"download",
                "thumbs",
                "close"
            ],
            thumbs: {
                autoStart: true,
                axis: 'x',
                hideOnClose: false,
            }
        })
    </script>
    <style>
        @media all and (min-width: 100px) {
            .fancybox-thumbs {
                top: auto;
                width: auto;
                bottom: 0;
                left: 0;
                right: 0;
                height: 95px;
                padding: 10px 10px 5px 10px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.3);
            }

            .fancybox-show-thumbs .fancybox-inner {
                right: 0;
                bottom: 95px;
            }
        }
    </style>
    <?php wp_footer(); ?>
</body>

</html>