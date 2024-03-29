import { initMobileMenu } from "./module/nav.js";
import { initReviewsSlider } from "./module/sliders.js";
import { initScrollToTop } from "./module/scroll-to-top.js";
import { initScroll } from "./module/scroll.js";
import { initCounterAnimation } from "./module/counterAnimations.js";
import { initPopup } from './module/popup.js'
import { initMainSlider } from "./module/sliders.js";
import { initFilterSlider } from "./module/sliders.js";
import { initPopularSlider } from "./module/sliders.js";
import { initParkingSlider } from "./module/sliders.js";
import { initAccordion } from "./module/tabs.js";
import { initCardItemSlider } from "./module/sliders.js";
import { init404 } from "./module/404.js";
import { initStickyHeader } from "./module/sticky-header.js";
import { initLoader } from './module/loader.js';
import { initTabsReview } from "./module/tabsReview.js";

initLoader();

    
// function rebuild_input_file(input) {
//     let input_id = input.attr('id');
//     input.attr('accept', 'image/*').wrap('<span class="hidden"></span>').parent().after('<label for="' + input_id + '" class="file__button"></label>');
// }




window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    const spans = document.querySelectorAll('.wpc-dropdown-default');

    spans.forEach(span => {
        if (span) {
            if (span.textContent.includes('Select')) {
                span.textContent = span.textContent.replace('Select', '');
            }
        }
    });

    
    initMobileMenu();
    initScrollToTop();
    initScroll();
    initCounterAnimation();
    initPopup();
    initReviewsSlider();
    initMainSlider();
    initFilterSlider();
    initPopularSlider();
    initParkingSlider();
    initAccordion();
    init404();
    initCardItemSlider();
    initStickyHeader();
    initTabsReview();

    baguetteBox.run('.gallery-wrapper');


    
    // rebuild_input_file(jQuery('input[name="featured_image"]'));

    // jQuery('body').on('change', 'input[name="featured_image"]', function(event_object)
    // {
    //     let input_file = jQuery(event_object.currentTarget);
    //     console.log(input_file);
    //     let file_name = input_file.val().split("\\").reverse()[0];
        
    //     jQuery('label[for="'+ input_file.attr('id') +'"].file__button').text(file_name);
    // });



});
