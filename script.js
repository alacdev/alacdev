document.addEventListener('DOMContentLoaded', () => {
    const row = document.querySelector('.row');
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            row.classList.add('hover-active');
        });

        card.addEventListener('mouseleave', () => {
            row.classList.remove('hover-active');
        });
    });
});
