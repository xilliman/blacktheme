class Header {
    constructor(component) {
        this.component = component;

        this.menuButton = this.component.querySelector(".header__nav--menu-button");
        this.menuButtonWrapper = this.component.querySelector(".header__nav--menu-button-wrapper");
        this.menuButtonWrapperMobile = this.component.querySelector(".header__nav--menu-button-wrapper--mobile");
        this.navMenu = this.component.querySelector(".header__nav--menu");

        this.addEventListeners();
    }

    addEventListeners = () => {
        this.menuButtonWrapper.addEventListener("click", () => {
            this.navMenu.classList.toggle("open");
        })

        this.menuButtonWrapperMobile.addEventListener("click", () => {
            this.navMenu.classList.toggle("open");
        })
    }
}

(() => {
    const headers = Array.from(document.querySelectorAll(".header__container"));

    headers.forEach((header) => {
        new Header(header);
    })
})();