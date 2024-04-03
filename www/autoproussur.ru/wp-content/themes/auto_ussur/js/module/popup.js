export const initPopup = () => {
    const popupLinks = document.querySelectorAll('.popup-link');
    const body = document.querySelector('body');
    const lockPadding = document.querySelectorAll(".lock-padding");
    const popupPromoBtn = document.querySelector('.popup__today__btn');
    let unlock = true;

    const timeout = 800;

    const promo = document.querySelector('.popup_promo');
    setTimeout(function() {
        if (promo) {
            promo.classList.add('open');
        }
    }, 10000);


    const popup6__btn = document.querySelector('#popup6__btn');

    if(promo) {
    popupPromoBtn.addEventListener('click', function(e) {
        if (promo) {
            promo.classList.remove('open');
        }
    }
    )
    }

    if(popup6__btn) {
        popup6__btn.addEventListener('click', function(e) {
            if (promo) {
                promo.classList.remove('open');
            }
        });
    }

    const popupElements = document.querySelectorAll('.popup4');

   
    popupElements.forEach(popupElement => {
        const nextElement = popupElement.nextElementSibling;
        if (nextElement && nextElement.tagName.toLowerCase() === 'a') {
            nextElement.remove();
        }
    });


    // Получаю коллекцию карточек машин
    const cars = document.querySelectorAll('.cars');
    cars.forEach(car => {
        car.addEventListener('click', function (e) {
            const object = e.target.parentNode.parentNode.childNodes;
            const marka_name = e.target.parentNode.parentNode.childNodes[3].innerText;
            const model_price = e.target.parentNode.parentNode.childNodes[7].innerText;
        
            const name = document.querySelector('#order-name').value = marka_name;
            const price =  document.querySelector('#order-price').value = model_price;


        });
    });
    
    // jQuery('.cars').each(function (index, event) {
    //     jQuery(event).off('click').on('click', function (e) {
    //         const object = jQuery(e.target).parents('#test').eq(0).children('a');
    //         console.log(object);
    //     })
    // })




    if (popupLinks.length > 0) {
        for (let index = 0; index < popupLinks.length; index++) {
            
            const popupLink = popupLinks[index];
            popupLink.addEventListener("click", function (e) {
                const popupName = popupLink.getAttribute('href').replace('#', '');
                const curentPopup = document.getElementById(popupName);
                popupOpen(curentPopup);
                e.preventDefault();
                
                // Удаление padding у элементов с классом 'lock-padding'
                lockPadding.forEach((el) => {
                    el.style.padding = '0';
                });
            });
        }
    }

    const popupCloseIcon = document.querySelectorAll('.close-popup');
    if (popupCloseIcon.length > 0) {
        for (let index = 0; index < popupCloseIcon.length; index++) {
            const el = popupCloseIcon[index];
            el.addEventListener('click', function (e) {
                popupClose(el.closest('.popup'));
                e.preventDefault();
            });
        }
    }

    function popupOpen(curentPopup) {
        if (curentPopup && unlock) {
            const popupActive = document.querySelector('.popup.open');
            if (popupActive) {
                popupClose(popupActive, false);
            } else {
                bodyLock();
            }
            curentPopup.classList.add('open');
            curentPopup.addEventListener("click", function (e) {
                if (!e.target.closest('.popup__content')) {
                    popupClose(e.target.closest('.popup'));
                }
            });
        }
    }

    function popupClose(popupActive, doUnlock = true) {
        if (unlock) {
            popupActive.classList.remove('open');
            if (doUnlock) {
                bodyUnLock();
            }
        }
    }

    function bodyLock() {
        const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

        if (lockPadding.length > 0) {
            for (let index = 0; index < lockPadding.length; index++) {
                const el = lockPadding[index];
                el.style.paddingRight = lockPaddingValue;
            }
        }

        body.style.paddingRight = lockPaddingValue;
        body.classList.add('lock');

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, timeout);
    }

    function bodyUnLock() {
        setTimeout(function () {
            if (lockPadding.length > 0) {
                for (let index = 0; index < lockPadding.length; index++) {
                    const el = lockPadding[index];
                    el.style.paddingRight = '0px';
                }
            }
            body.style.paddingRight = '0px';
            body.classList.remove('lock');
        }, timeout);

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, timeout);
    }

    document.addEventListener('keydown', function (e) {
        if (e.which === 27) {
            const popupActive = document.querySelector('.popup.open');
            popupClose(popupActive);
        }
    });

    (function () {
        // проверяем поддержку
        if (!Element.prototype.closest) {
            // реализуем
            Element.prototype.closest = function (css) {
                var node = this;
                while (node) {
                    if (node.matches(css)) return node;
                    else node = node.parentElement;
                }
                return null;
            };
        }
    })();
    (function () {
        // проверяем поддержку
        if (!Element.prototype.matches) {
            // определяем свойство
            Element.prototype.matches = Element.prototype.matchesSelector ||
                Element.prototype.webkitMatchesSelector ||
                Element.prototype.mozMatchesSelector ||
                Element.prototype.msMatchesSelector;
        }
    })();


    // Promo
    
    // Появляется через 10 секунд

  
       

};

