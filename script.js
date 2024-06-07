

document.addEventListener("DOMContentLoaded", function() {
    const popup = document.querySelector('.popup');
    const overlay = document.querySelector('.overlay');
    const closeBtn = document.getElementById('closeBtn');

    // Mostra o pop-up
    function showPopup() {
        popup.style.display = 'block';
        overlay.style.display = 'block';
    }

    // Fecha o pop-up e altera a posição
    function closePopup() {
        popup.style.display = 'none';
        overlay.style.display = 'none';

        // Calcula uma nova posição aleatória
        var maxX = window.innerWidth - popup.offsetWidth;
        var maxY = window.innerHeight - popup.offsetHeight;

        var randomX = Math.floor(Math.random() * maxX);
        var randomY = Math.floor(Math.random() * maxY);

        popup.style.left = randomX + 'px';
        popup.style.top = randomY + 'px';

        setTimeout(showPopup, 1000);
    }

    // Evento para fechar o pop-up e alterar a posição
    closeBtn.addEventListener('click', closePopup);

    // Mostra o pop-up inicialmente
    showPopup();
});
