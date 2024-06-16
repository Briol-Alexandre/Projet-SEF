const revealElements = document.querySelectorAll('.reveal');

revealElements.forEach((element) => {

    element.classList.add('slideUp');

    window.addEventListener('scroll', () => {
        const elPos = element.getBoundingClientRect().top;
        const windowMaxLimit = window.innerHeight;
        if (elPos < windowMaxLimit - 100) {
            element.classList.remove('slideUp');
        }
    })

})