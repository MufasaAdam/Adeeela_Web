// Side-nav Initialization
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('.sidenav');
//     var instances = M.Sidenav.init(elems, options);
// });

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function () {
    $('.sidenav').sidenav();
});
//--------------------------------

// Select Initialization 
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('select');
//     var instances = M.FormSelect.init(elems, options);
// });

// Or with jQuery

$(document).ready(function () {
    $('select').formSelect();
});
//---------------------------------

// Dater Picker Initialiazation 
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('.datepicker');
//     var instances = M.Datepicker.init(elems, options);
    
// }); 

// Or with jQuery

$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'dd,mm,yyyy'
    });
});
//-------------------------------

// Initializes Tooltips
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('.tooltipped');
//     var instances = M.Tooltip.init(elems, options);
// });

// Or with jQuery

$(document).ready(function () {
    $('.tooltipped').tooltip();
});
//-----------------------------

// Initializes Tabs
// var instance = M.Tabs.init(el, options);

// Or with jQuery

$(document).ready(function () {
    $('.tabs').tabs();
});
//---------------------------

// Initializes Going Back button
function goBack() {
    window.history.back();
}