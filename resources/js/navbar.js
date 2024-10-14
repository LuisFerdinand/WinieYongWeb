document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[aria-haspopup="true"]').forEach(button => {
        button.addEventListener('mouseover', () => {
            const menuId = button.getAttribute('aria-labelledby');
            document.getElementById(menuId).classList.remove('hidden');
        });

        button.addEventListener('mouseleave', () => {
            const menuId = button.getAttribute('aria-labelledby');
            document.getElementById(menuId).classList.add('hidden');
        });
    });
});
