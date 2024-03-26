const animate = () => {
    console.log('Я тут')
    window.addEventListener('DOMContentLoaded', () => { 
        const icon = document.querySelector('.pulse')
        const open = document.querySelector('.icon-open')
        const close = document.querySelector('.icon-close'); 
        const panel = document.querySelector('.chat_panel'); 
        icon.addEventListener('click', () => { 
            open.classList.toggle('icon-hide'); 
            close.classList.toggle('icon-hide'); 
            panel.classList.toggle('panel-open'); 
            icon.classList.toggle('stoppulse'); 
        }); 
    }) 
}

animate();

// 


//     <div class="pulse_wrap"> 
{/* <div class="pulse"> 
<div class="chat_icon"> 
<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" 
class="svg-inline--fa fa-comments fa-w-18 icon-open" role="img" 
xmlns="http://www.w3.org/2000/svg" 
viewbox="0 0 576 512"> 
<path 
d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"> </path> 
</svg> 
<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" 
class="svg-inline--fa fa-times fa-w-11 icon-close icon-hide" role="img" 
xmlns="http://www.w3.org/2000/svg" viewbox="0 0 352 512"> 
<path 
d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 
0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 
89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"> </path> 
</svg> 
</div> 
</div>
<!-- Блок панели иконок --> 
<div class="chat_panel"> <!-- Обертка панели --> 
<!-- Блок иконки Whatsapp --> 
<div class="chat_panel_item"> 
<a rel="noopener nofollow" href="https://wa.me/79089791761" class="chat_panel_item_link" target="_blank"> 
<div class="chat_panel_item_link_icon chat_link_icon_whatsapp"> 
<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" 
class="svg-inline--fa fa-whatsapp fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"> 
<path 
d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 
184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 
1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7
1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"> </path> 
</svg> 
</div> 
</a> 
</div>
<!-- Конец блока иконки Whatsapp -->  
<!-- Блок иконки Instagram --> 
<!-- <div class="chat_panel_item"> 
<a rel="noopener nofollow" href="https://www.instagram.com/insta_market.ru" 
class="chat_panel_item_link" target="_blank"> 
<div class="chat_panel_item_link_icon chat_link_icon_instagram"> 
<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" 
    class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"> 
    <path 
    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 
    27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"> 
</path> 
</svg> 
</div> 
</a> 
</div> 
Конец блока иконки Instagram -->
<!-- Блок иконки телефон --> 
<div class="chat_panel_item"> 
<a rel="noopener nofollow" href="tel:+79089791761" class="chat_panel_item_link"> 
<div class="chat_panel_item_link_icon chat_link_icon_call"> 
<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" 
class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"> 
<path 
d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"> </path> 
</svg> 
</div> 
</a> 
</div> 
<!-- Конец блока иконки телефон --> 
<!-- Блок иконки Telegram --> 
<!-- <div class="chat_panel_item"> 
<a rel="noopener nofollow" href="https://t.me/Yuriy_inside" class="chat_panel_item_link" target="_blank"> 
<div class="chat_panel_item_link_icon chat_link_icon_telegram"> 
<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="telegram-plane" class="svg-inline--fa fa-telegram-plane fa-w-14" role="img" 
xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
<path 
d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"> 
</path> 
</svg> 
</div> 
</a> 
</div>  -->
<!-- Конец блока иконки Telegram --> 
</div> 
</div> 
<!-- Конец блока панели иконок -->  */}

