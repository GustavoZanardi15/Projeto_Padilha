document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById('popup');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closeBtn');

    // Mostra o pop-up e o overlay
    function showPopup() {
        popup.style.display = 'block';
        overlay.style.display = 'block';
    }

    // Fecha o pop-up e o overlay
    function closePopup() {
        popup.style.display = 'none';
        overlay.style.display = 'none'; 
    }

    closeBtn.addEventListener('click', closePopup);

    overlay.addEventListener('click', closePopup);

    showPopup()
});

