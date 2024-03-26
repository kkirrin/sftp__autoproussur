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

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

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
    baguetteBox.run('.gallery-wrapper');


    

});
