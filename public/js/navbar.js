document.addEventListener('DOMContentLoaded', function () {
    // Function to close all dropdowns
    function closeDropdowns() {
        productDropdown.classList.add('hidden');
        serviceDropdown.classList.add('hidden');
        mobileProductDropdown.classList.add('hidden');
        mobileServiceDropdown.classList.add('hidden');
    }

    // Toggle Product dropdown on desktop
    const productButton = document.getElementById('menu-button');
    const productDropdown = document.getElementById('product-dropdown');
    productButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent click from reaching the document
        productDropdown.classList.toggle('hidden');
        serviceDropdown.classList.add('hidden'); // Close other dropdown
    });

    // Toggle Service dropdown on desktop
    const serviceButton = document.getElementById('service-button');
    const serviceDropdown = document.getElementById('service-dropdown');
    serviceButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent click from reaching the document
        serviceDropdown.classList.toggle('hidden');
        productDropdown.classList.add('hidden'); // Close other dropdown
    });

    // Toggle Mobile Product dropdown
    const mobileProductButton = document.getElementById('mobile-product-button');
    const mobileProductDropdown = document.getElementById('mobile-product-dropdown');
    mobileProductButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent click from reaching the document
        mobileProductDropdown.classList.toggle('hidden');
        mobileServiceDropdown.classList.add('hidden'); // Close other dropdown
    });

    // Toggle Mobile Service dropdown
    const mobileServiceButton = document.getElementById('mobile-service-button');
    const mobileServiceDropdown = document.getElementById('mobile-service-dropdown');
    mobileServiceButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent click from reaching the document
        mobileServiceDropdown.classList.toggle('hidden');
        mobileProductDropdown.classList.add('hidden'); // Close other dropdown
    });

    // Toggle Mobile menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    mobileMenuButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent click from reaching the document
        mobileMenu.classList.toggle('hidden');
    });

    mobileMenuClose.addEventListener('click', function () {
        mobileMenu.classList.add('hidden');
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function () {
        closeDropdowns();
    });

    // Prevent the document click event from closing the dropdown when clicking inside
    productDropdown.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    serviceDropdown.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    mobileProductDropdown.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    mobileServiceDropdown.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});
