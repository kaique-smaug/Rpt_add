// Adicionando menu Hamburguer
class mobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";
        this.handleClick =  this.handleClick.bind(this);
    };

    animateLinks() {
        this.navLinks.forEach((link, index) => {
            console.log(index / 7 + 0.3);
              link.style.animation  
              ? (link.style.animation = "")
              : (link.style.animation = 'navLinkFade 0.2s ease forwards 0.3s')
        });
    };

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks();
    };
    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    };
    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        };
        return this;
    };
};

mobileNavbar = new mobileNavbar(
    '.mobile-menu',
    '.nav-list',
    '.nav-list li',
);
mobileNavbar.init();
// ---------------------------------------------------------------------------------------------
// Adicionando um modoDark

const button = document.querySelector("#noturno");
const pagina = document.querySelector("body");

// changeThemeBtn.addEventListener("click", function() {
   
//     // document.body.classList.toggle("dark-kaique")
//     console.log("ok");
// })

// button.addEventListener("click", function () {
//     pagina.classList.toggle("kaique123");
// })


// const botao = document.querySelector("#noturno");
// botao.addEventListener("click", function () {
//     pagina.classList.toggle("modo-noturno");
// });




    
