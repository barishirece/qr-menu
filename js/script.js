document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.menu-item');
    const menuDetails = document.querySelectorAll('.menu-details');
    const backButtons = document.querySelectorAll('.back-button');

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            const targetId = item.getAttribute('data-target');
            document.getElementById('main-menu').style.display = 'none';
            document.getElementById(targetId).style.display = 'block';
        });
    });

    backButtons.forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('main-menu').style.display = 'block';
            menuDetails.forEach(detail => {
                detail.style.display = 'none';
            });
        });
    });
});
