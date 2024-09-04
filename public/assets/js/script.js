$(document).ready(function () {
    var table = $('#ambulatoir').DataTable({
        "scrollX": true
    });

    $('#ambulatoir tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        var flag = $(this).data('flag'); // Get the flag value from the data attribute
        // Append the flag parameter to the URL
        window.location.href = href + '?flag=' + flag;
    });
    
});

new DataTable('#detailAmbulatoir', {
    info: false,
    paging: false
});

// $(document).ready(function(){
//     var i=1;
//    $("#add_row").click(function(){b=i-1;
//     $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
//     $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
//     i++; 
//     });
    
//    $("#delete_row").click(function(){
//        if(i>1){
//        $("#addr"+(i-1)).html('');
//        i--;
//        }
//    });
// });


$(function(){
    var today = new Date(); // Get current date
    var formattedDateTime =
        today.getFullYear() + '-' +
        ('0' + (today.getMonth() + 1)).slice(-2) + '-' +
        ('0' + today.getDate()).slice(-2) + ' ' +
        ('0' + today.getHours()).slice(-2) + ':' +
        ('0' + today.getMinutes()).slice(-2) + ':' +
        ('0' + today.getSeconds()).slice(-2);

    $('#datePicker input').val(formattedDateTime); // Set input value to today's date
});

$(document).ready(function () {
    var table = $('#petlist').DataTable({
        "scrollX": true,
    });

    table.columns.adjust().draw();

    // $('#petlist tbody').on('click', 'tr.clickable-row', function () {
    //     var href = $(this).data('href');
    //     window.location.href = href;
    // });
    
    $('#petlist tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        var flag = $(this).data('flag'); // Get the flag value from the data attribute
        // Append the flag parameter to the URL
        window.location.href = href + '?flag=' + flag;
    });
});

$(document).ready(function () {
    var table = $('#rawatInap').DataTable({
        "scrollX": true,
    });

    table.columns.adjust().draw();

    // $('#petlist tbody').on('click', 'tr.clickable-row', function () {
    //     var href = $(this).data('href');
    //     window.location.href = href;
    // });
    
    $('#rawatInap tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        var flag = $(this).data('flag'); // Get the flag value from the data attribute
        // Append the flag parameter to the URL
        window.location.href = href + '?flag=' + flag;
    });
});


document.getElementById('sidebar-toggle').addEventListener('click', function() {
    const sidebar = document.getElementById('sidenav-main');
    sidebar.classList.toggle('collapsed');

    const isCollapsed = sidebar.classList.contains('collapsed');
    localStorage.setItem('sidebarCollapsed', isCollapsed);
});

document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidenav-main');
    const mainContent = document.querySelector('.main-content');

    // Get the collapse state from localStorage
    const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';

    // Apply the collapse state
    if (isCollapsed) {
        sidebar.classList.add('collapsed');
        mainContent.classList.add('expanded');
    }
});



//modal confirm
document.getElementById('triggerModal').addEventListener('click', function() {
    // Get the state of the "hospitalize" switch
var isHospitalized = document.getElementById('flexSwitchCheckHospitalization').checked;

// Update the modal body text based on the switch state
var hospitalizeText = isHospitalized ? " with hospitalize." : " without hospitalize.";
document.getElementById('hospitalizeState').textContent = hospitalizeText;

// Open the modal
var myModal = new bootstrap.Modal(document.getElementById('confirmModal'), {});
myModal.show();
});

document.getElementById('confirmSave').addEventListener('click', function() {
document.querySelector('form').submit();  // Submit the form when confirmed
});




document.getElementById('triggerModalPet').addEventListener('click', function() {
    var myModal = new bootstrap.Modal(document.getElementById('confirmModalPet'), {});
    myModal.show();
  });

  document.getElementById('confirmSavePet').addEventListener('click', function() {
    document.querySelector('form').submit();  // Submit the form when confirmed
  });