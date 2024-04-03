export const initShowFilter = () => {
    const isSmallScreen = window.innerWidth <= 480;
    const filter = document.querySelector('.filter');
    
    if(isSmallScreen && filter) {
        const inputs = document.querySelectorAll('.wpc-filters-section');
        const expandBtn = document.getElementById('expand-btn');
        const inputsCount = 3;

        inputs.forEach((input, index) => {
            if (index >= 2) {
                input.style.display = 'none';
            }
        });

        inputs.forEach((input, index) => {
            if(index < inputsCount) {
                input.style.display = 'block';
            }
        })

        expandBtn.addEventListener('click', () => {
            inputs.forEach((input, index) => {
                if (index >= inputsCount && input.style.display === 'none') {
                    input.style.display = 'inline-block';
                } else if (index >= inputsCount) {
                    input.style.display = 'none';
                }
            });

            if (expandBtn.innerText === 'Развернуть') {
                expandBtn.innerText = 'Свернуть';
            } else {
                expandBtn.innerText = 'Развернуть';
            }
        });
    }
}
