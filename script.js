document.addEventListener("DOMContentLoaded", function() {
    const popup = document.querySelector('.popup');
    const closeBtn = document.getElementById('closeBtn');

    // Mostra o pop-up
    function showPopup() {
        popup.style.display = 'block';
    }

    // Fecha o pop-up e altera a posição
    function closePopup() {
        popup.style.display = 'none';
    
        // Calcula uma nova posição aleatória
        var maxX = window.innerWidth - popup.offsetWidth;
        var maxY = window.innerHeight - popup.offsetHeight;
    
        var randomX = Math.floor(Math.random() * maxX);
        var randomY = Math.floor(Math.random() * maxY);
    
        popup.style.left = randomX + 'px';
        popup.style.top = randomY + 'px';
    
        setTimeout(showPopup, 1000); 
    }

    closeBtn.addEventListener('click', closePopup);

    // Atrasa a exibição inicial em 3 segundos
    setTimeout(showPopup, 3000);
});
