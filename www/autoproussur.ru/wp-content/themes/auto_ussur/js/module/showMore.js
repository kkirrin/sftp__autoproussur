export const initShowMore = () => {
    const textFullElements = document.querySelectorAll('.textFull');

    textFullElements.forEach(function(textFull) {
        const button = document.querySelectorAll('.watchFull');
        // console.log(button)
        button.forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                const currentButton = event.currentTarget;
                // console.log(currentButton);
                textFull.classList.toggle('truncate');
                currentButton.click();
            });
        });
    });
}