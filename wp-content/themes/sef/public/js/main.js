const revealElements = document.querySelectorAll('.reveal');

revealElements.forEach((element) => {

    element.classList.add('slideUp');

    window.addEventListener('scroll', () => {
        const elPos = element.getBoundingClientRect().top;
        const windowMaxLimit = window.innerHeight;
        if (elPos < windowMaxLimit - 50) {
            element.classList.remove('slideUp');
        }
    })

})

const revealSideElements = document.querySelectorAll('.reveal-side');

revealSideElements.forEach((element) => {

    element.classList.add('slideSide');

    window.addEventListener('scroll', () => {
        const elPos = element.getBoundingClientRect().top;
        const windowMaxLimit = window.innerHeight;
        if (elPos < windowMaxLimit - 300) {
            element.classList.remove('slideSide');
        }
    })

})