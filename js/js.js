// Отримання елементів з DOM
var modal = document.getElementById('popup');
var closeModalBtn = document.getElementById('closeModalBtn');
var modalImage = document.getElementById('modalImage');
var modalContent1 = document.getElementById('modalContent1');
var modalContent2 = document.getElementById('modalContent2');
var clashero=document.getElementById('classhero')
var objectList = document.getElementById('objectList');

// Додавання обробника подій для кожного елемента списку
objectList.addEventListener('click', function(event) {
    var targetElement = event.target;

    // Перевірка, чи клікнуто на елементі списку
    if (targetElement.tagName === 'LI') {
        var objectInfo1 = targetElement.getAttribute('data-info1');
        var objectInfo2 = targetElement.getAttribute('data-info2');
        var objectImage = targetElement.getAttribute('data-image1');
        var objectClass=targetElement.getAttribute('data-image2');
        
        // Заповнення модального вікна і відображення його
        modalContent1.innerHTML = objectInfo1;
        modalContent2.innerHTML = objectInfo2;
        modalImage.src = objectImage;
        clashero.src=objectClass;
        modal.style.display = 'block';
    }
});

// Закриття модального вікна при кліку на хрестик
closeModalBtn.onclick = function() {
    modal.style.display = 'none';
}

// Закриття модального вікна при кліку за межі вікна
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
