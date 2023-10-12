    // showMoreLess.js
    
    const showMoreButton = document.getElementById('show-more-button');
    const hiddenCategories = document.querySelectorAll('#category-list li.hidden');
    
    showMoreButton.addEventListener('click', function() {
        hiddenCategories.forEach(function(category) {
            category.classList.toggle('hidden');
        });

        showMoreButton.style.display = 'none'; // Hide the "Show More" button after revealing all categories
    });