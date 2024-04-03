<?php
function show_reviews()
{
    $reviews = new WP_Query(
        array(
            'post_type' => 'wpm-testimonial',
            'posts_per_page' => -1
        )
    );

    $review_box = '<ul class="reviews__list grid sx:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-7">';

    foreach ($reviews->posts as $review) {
        $review_meta = get_post_meta($review->ID);

        $short_name = '';
        foreach (explode(' ', $review_meta['client_name'][0]) as $name_element) {
            $short_name .= mb_substr($name_element, 0, 1);
        }

        $review_box .= '<li class="review__item__item relative transform hover:scale-105 transition-all w-full">';
        $review_box .= '<div class="flex justify-between items-center">';
        $review_box .= '<div class="flex justify-center gap-5 items-center">';
        $review_box .= '<p class="avatar rounded-full bg-white text-light-green" style="margin-bottom: 10px; border-radius: 100%; background-color: rgb(237, 237, 237); padding: 10px 20px;">' . $short_name . '</p>';
        $review_box .= '<p class="text-black md:text-xl font-medium">' . $review_meta['client_name'][0] . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-center items-center gap-2">';
        $review_box .= '<span class="font-medium text-black md:text-xl text-base">' . $review_meta['rating'][0] . '</span>';
        $review_box.= '<img src='. get_template_directory_uri(). "/src/img/icons/star.svg". ' class="" alt="star">';
        $review_box .= '</div>';
        $review_box .= '</div>';

        $review_box .= '<div class="text">';
        $review_box .= '<p class="text-black font-medium md:text-lg text-base">' . $review->post_content . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-start gap-3 py-3 gallery-wrapper">';
        $review_box .= '<a href="' . $review_meta['featured_image'][0] . '" style="margin-bottom: 10px;"> ';
        if (isset($review_meta['featured_image'])) {

            $review_box .= '<img class="review__img rounded-lg" src="' . $review_meta['featured_image'][0] . '" alt="">';

        }
        $review_box .= '</a>';
        $review_box .= '</div>';

        $review_box .= '<div class="">';
        $review_box .= '<span style="bottom: 20px;" class="absolute text-gray text-sm font-normal">' . date('d.m.Y', strtotime($review->post_date)) . '</span>';
        $review_box .= '</div>';
        $review_box .= '</li>';
    }

    $review_box .= '</ul>';

    return $review_box;
}

function show_reviews_one()
{
    $reviews = new WP_Query(
        array(
            'post_type' => 'wpm-testimonial',
            'posts_per_page' => -1
        )
    );

    $review_box = '<ul class="swiper-wrapper justify-items-stretch">';

    foreach ($reviews->posts as $review) {
        $review_meta = get_post_meta($review->ID);
        $reviews_rating = $review_meta['rating'][0];

        $short_name = '';
        foreach (explode(' ', $review_meta['client_name'][0]) as $name_element) {
            $short_name .= mb_substr($name_element, 0, 1);
        }

        $review_box .= '<li class="relative bg-light-gray rounded-xl swiper-slide h-auto p-5">';
        $review_box .= '<div class="flex justify-between items-center">';
        $review_box .= '<div class="flex justify-center gap-5 items-center">';
        $review_box .= '<p class="avatar rounded-full bg-white text-light-green">' . $short_name . '</p>';
        $review_box .= '<p class="text-black md:text-xl font-medium">' . $review_meta['client_name'][0] . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-center items-center gap-2">';
        $review_box .= '<span class="font-medium text-black md:text-xl text-base">' . $reviews_rating . '</span>';
        $review_box .= '<span class="star_symbol"></span>';
        $review_box .= '</div>';
        $review_box .= '</div>';

        $review_box .= '<div class="text pt-3">';
        $review_box .= '<p class="text-black font-medium md:text-lg text-base">' . $review->post_content . '</p>';
        $review_box .= '</div>';

        $review_box .= '<div class="flex justify-start gap-3 py-3 gallery-wrapper">';
        $review_box .= '<a href="' . $review_meta['featured_image'][0] . '">';
        if (isset($review_meta['featured_image'])) {

            $review_box .= '<img class="rounded-lg" src="' . $review_meta['featured_image'][0] . '" alt="">';

        }
        $review_box .= '</a>';
        $review_box .= '</div>';

        $review_box .= '<div class="py-2">';
        $review_box .= '<span class="text-gray text-sm font-normal">' . date('d.m.Y', strtotime($review->post_date)) . '</span>';
        $review_box .= '</div>';
        $review_box .= '</li>';
    }

    $review_box .= '</ul>';

    return $review_box;
}

?>