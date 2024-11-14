document.addEventListener("DOMContentLoaded", function() {
    const title = document.querySelector(".hero-section > h1");
    const subTitle = document.querySelector(".hero-section > p");
    const arrowLink = document.querySelector(".hero-section > .arrow-link");

    title.classList.add('show-hero-section');
    subTitle.classList.add('show-hero-section');
    arrowLink.classList.add('show-hero-section');

});

document.addEventListener('scroll', function() {
    const contentSections = [...document.getElementsByClassName("content-section")];

    contentSections.forEach(contentSection => {
        const props = contentSection.getBoundingClientRect();
        if (props.top < 500) {
            contentSection.classList.add('show-content-section');
        }
    });
});