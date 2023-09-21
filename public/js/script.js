const navigation = document.querySelector("nav");
const navigationHeight = navigation.offsetHeight; 

document.documentElement.style.setProperty(
    "--scroll-padding",
    navigationHeight + "px"
);  

const links = document.querySelectorAll('.nav-link'); 

links.forEach(link => {
    link.addEventListener('click', () => {
        // Remove the class from all links
        links.forEach(otherLink => {
            otherLink.classList.remove('text-amber-800');
        });

        // Add the class to the clicked link
        link.classList.add('text-amber-800');
    });
}); 

let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

window.addEventListener("scroll", event => {
    let fromTop = window.scrollY + 200;

    mainNavLinks.forEach(link => {
        let section = document.querySelector(link.hash);

        if (
            section.offsetTop <= fromTop &&
            section.offsetTop + section.offsetHeight > fromTop
        ) {
            link.classList.add("text-amber-800");
        } else {
            link.classList.remove("text-amber-800");
        }
    });
});