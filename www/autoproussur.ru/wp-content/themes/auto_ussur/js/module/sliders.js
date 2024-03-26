export const initMainSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.main-item');
        let swiper;
        if (item) {
            swiper = new Swiper(item, {
                // loop: true,

                speed: 1200,
                // effect: "fade",
                autoHeight: true,
                equalHeight: true,
                breakpoints: {
                  320: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  695: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  767: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  1200: {
                      slidesPerView: 1,
                      spaceBetween:10
                  }
                  },
                // If we need pagination
                pagination: {
                  clickable: true,
                  el: `swiper-pagination`,
               }
    
            });
        }
    };

    itemSlider();
}


export const initReviewsSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.review-item');
        let swiper;
        // console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                // autoplay: {
                //     delay: 3000
                // },
                speed: 1000,
                direction: 'horizontal',
                spaceBetween: 5,
                // equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".review-next",
                    prevEl: ".review-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    695: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween:10
                    }
                    }
            });
        }
    };

    itemSlider();
}

export const initFilterSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.filter-item');
        let swiper;
        // console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                // autoplay: {
                //     delay: 3000
                // },
                speed: 1500,
                direction: 'horizontal',
                spaceBetween: 5,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".review-next",
                    prevEl: ".review-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    695: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    769: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween:20
                    }
                    }
            });
        }
    };

    itemSlider();
}


export const initPopularSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.popular-item');
        let swiper;
        // console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                // autoplay: {
                //     delay: 3000
                // },
                speed: 1500,
                direction: 'horizontal',
                spaceBetween: 5,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".review-next",
                    prevEl: ".review-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    695: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    769: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween:20
                    }
                    }
            });
        }
    };

    itemSlider();
}

export const initParkingSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.parking-item');
        let swiper;
        // console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                // autoplay: {
                //     delay: 3000
                // },
                speed: 1500,
                direction: 'horizontal',
                spaceBetween: 5,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".parking-next",
                    prevEl: ".parking-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    695: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween:20
                    }
                    }
            });
        }
    };

    itemSlider();
}


export const initCardItemSlider = function initCardItemSlider() {
 
    var swiper = new Swiper('.slider__thumb', {
      loop: true,
      spaceBetween: 16,
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
      autoHeight: true,
      breakpoints: {
        320: {
          slidesPerView: 4,
          spaceBetween: 8
        },
        768: {
          slidesPerView: 5,
          spaceBetween: 16
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 16
        },
        1920: {
          slidesPerView: 6,
          spaceBetween: 16
        }
      }
      
    }); 
  
    var swiper2 = new Swiper('.slider__slider', {
      spaceBetween: 10,
      breakpoints: {
        480: {
          slidesPerView: 1,
          spaceBetween: 8
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 16
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 16
        },
        1920: {
          slidesPerView: 2,
          spaceBetween: 16
        }
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      thumbs: {
  
        swiper: swiper
      }
    });
  
    var swiper3 = new Swiper('.recommendation', {
      spaceBetween: 16,
      slidesPerView: 2,
      breakpoints: {
        320: {
          slidesPerView: 1.5,
          spaceBetween: 8
        },
        768: {
          slidesPerView: 2.5,
          spaceBetween: 16
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 16
        },
        1920: {
          slidesPerView: 6,
          spaceBetween: 16
        }
      }
    });
};
