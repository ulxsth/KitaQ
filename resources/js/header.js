function toggleChange() {
    var navToggle = document.querySelector(".nav__toggle");
    var navWrapper = document.querySelector(".nav__wrapper");

    if (navWrapper.classList.contains("active")) {
        navToggle.setAttribute("aria-expanded", "false");
        navToggle.setAttribute("aria-label", "menu");
        navWrapper.classList.remove("active");
    } else {
        navWrapper.classList.add("active");
        navToggle.setAttribute("aria-label", "close menu");
        navToggle.setAttribute("aria-expanded", "true");
    }
}