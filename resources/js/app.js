import './bootstrap';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const dropdownButton = document.getElementById('dropdownButton');
const dropdownContent = document.getElementById('dropdownContent');

dropdownButton.addEventListener('click', function() {
    // Toggle the 'hidden' class to show/hide the dropdown content
    dropdownContent.classList.toggle('hidden');
});
