import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Get the input element and table
var input = document.getElementById("searchInput");
var table = document.getElementById("dataTable");
var rows = table.getElementsByTagName("tr");

// Add an event listener to the input field
input.addEventListener("keyup", function() {
    var filter = input.value.toLowerCase();
    
    // Loop through all table rows and hide those that don't match the search input
    for (var i = 1  ; i < rows.length; i++) {
        var row = rows[i];
        var cells = row.getElementsByTagName("td");
        var shouldShow = false;
        var cell = cells[0];
        if (cell){
            var text = cell.textContent || cell.innerText;
            if (text.toLowerCase().indexOf(filter)> -1){
                shouldShow = true;
            }
        }
        
        // Loop through all cells in the current row
        // for (var j = 0; j < cells.length; j++) {
        //     var cell = cells[j];
        //     if (cell) {
        //         var text = cell.textContent || cell.innerText;
        //         if (text.toLowerCase().indexOf(filter) > -1) {
        //             shouldShow = true;
        //             break;
        //         }
        //     }
        // }
        // Toggle the row's visibility
        row.style.display = shouldShow ? "" : "none";
    }
});
