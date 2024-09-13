document.addEventListener('DOMContentLoaded', function () {
    // Toggle Product dropdown on desktop
    const productButton = document.getElementById('menu-button');
    const productDropdown = document.getElementById('product-dropdown');
    productButton.addEventListener('click', function () {
        productDropdown.classList.toggle('hidden');
    });

    // Toggle Service dropdown on desktop
    const serviceButton = document.getElementById('service-button');
    const serviceDropdown = document.getElementById('service-dropdown');
    serviceButton.addEventListener('click', function () {
        serviceDropdown.classList.toggle('hidden');
    });

    // Toggle Mobile menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    mobileMenuButton.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });

    mobileMenuClose.addEventListener('click', function () {
        mobileMenu.classList.add('hidden');
    });

    // Toggle Mobile Product dropdown
    const mobileProductButton = document.getElementById('mobile-product-button');
    const mobileProductDropdown = document.getElementById('mobile-product-dropdown');
    mobileProductButton.addEventListener('click', function () {
        mobileProductDropdown.classList.toggle('hidden');
    });

    // Toggle Mobile Service dropdown
    const mobileServiceButton = document.getElementById('mobile-service-button');
    const mobileServiceDropdown = document.getElementById('mobile-service-dropdown');
    mobileServiceButton.addEventListener('click', function () {
        mobileServiceDropdown.classList.toggle('hidden');
    });
});
