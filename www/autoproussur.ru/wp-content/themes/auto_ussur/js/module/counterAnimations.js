export const initCounterAnimation = () => {
    const counterList = document.querySelector('.counter-list');

    const counterAnimation = (el, initialNum, finalNum) => {
        if (Number.isInteger(finalNum)) {
            let interval = setInterval(function () {
                el.innerHTML = initialNum;
                (initialNum >= finalNum) ? clearInterval(interval) : '';
                initialNum++;
            }, 50);
        } else {
            let intInitialNum = Math.floor(initialNum);
            let intFinalNum = Math.floor(finalNum);
            let interval = setInterval(function () {
                el.innerHTML = intInitialNum;
                if (intInitialNum >= intFinalNum) {
                    clearInterval(interval);
                    el.innerHTML = `${finalNum.toString().replace('.', ',')}`;
                }
                intInitialNum++;
            }, 50);
        }
    };

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                counterAnimation(document.querySelector('.counter-years'), 0, 8);
                counterAnimation(document.querySelector('.counter-items'), 950, 1000);
                counterAnimation(document.querySelector('.counter-client'), 2400, 2500);
                observer.unobserve(entry.target)
            }
        });
    }, options);

    if (counterList) {
        observer.observe(counterList);
    }
};