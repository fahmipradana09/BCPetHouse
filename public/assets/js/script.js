$(document).ready(function () {

    // Initialize DataTable for ambulatoir
    var tableAmbulatoir = $('#ambulatoir').DataTable({
        "scrollX": true,
    });
    tableAmbulatoir.columns.adjust().draw();

    // Redirect with flag parameter for ambulatoir
    $('#ambulatoir tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        var flag = $(this).data('flag'); // Get the flag value from the data attribute
        // Append the flag parameter to the URL
        window.location.href = href + '?flag=' + flag;
    });



    // Initialize DataTable for petlist
    var tablePetlist = $('#petlist').DataTable({
        "scrollX": true,
    });
    tablePetlist.columns.adjust().draw();

    // Redirect with flag parameter for petlist
    $('#petlist tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        var flag = $(this).data('flag'); // Get the flag value from the data attribute
        window.location.href = href + '?flag=' + flag;
    });


    // Initialize DataTable for rawatInap
    var tableRawatInap = $('#rawatInap').DataTable({
        "scrollX": true,
    });
    tableRawatInap.columns.adjust().draw();

    // Redirect with flag parameter for rawatInap
    $('#rawatInap tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        var flag = $(this).data('flag'); // Get the flag value from the data attribute
        window.location.href = href + '?flag=' + flag;
    });


    var tableAmbulatoir = $('#rawatInapActive').DataTable({
        "scrollX": true,
    });
    tableAmbulatoir.columns.adjust().draw();

    // Redirect with flag parameter for ambulatoir
    $('#rawatInapActive tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        var flag = $(this).data('flag'); // Get the flag value from the data attribute
        // Append the flag parameter to the URL
        window.location.href = href + '?flag=' + flag;
    });

    // Sidebar toggle functionality
    $('#sidebar-toggle').on('click', function () {
        const sidebar = $('#sidenav-main');
        sidebar.toggleClass('collapsed');

        const isCollapsed = sidebar.hasClass('collapsed');
        localStorage.setItem('sidebarCollapsed', isCollapsed);
    });

    // Apply sidebar collapsed state from localStorage
    const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
    if (isCollapsed) {
        $('#sidenav-main').addClass('collapsed');
        $('.main-content').addClass('expanded');
    }

    // Date picker functionality
    var today = new Date(); // Get current date
    var formattedDateTime =
        today.getFullYear() + '-' +
        ('0' + (today.getMonth() + 1)).slice(-2) + '-' +
        ('0' + today.getDate()).slice(-2) + ' ' +
        ('0' + today.getHours()).slice(-2) + ':' +
        ('0' + today.getMinutes()).slice(-2) + ':' +
        ('0' + today.getSeconds()).slice(-2);

    $('#datePicker input').val(formattedDateTime); // Set input value to today's date

    // Modal for hospitalize state confirmation (triggerModal)
    $('#triggerModal').on('click', function () {
        var isHospitalized = $('#flexSwitchCheckHospitalization').prop('checked');
        var hospitalizeText = isHospitalized ? " with hospitalize." : " without hospitalize.";
        $('#hospitalizeState').text(hospitalizeText);

        var myModal = new bootstrap.Modal(document.getElementById('confirmModal'), {});
        myModal.show();
    });

    //Create Ambulatoir
    $('#confirmSaveCreateAmbulatoir').on('click', function () {
        $('#ambulatoirCreate').submit();  // Submit the form when confirmed
    });

    // Petlist -> Create Ambulatoir
    $('#confirmSave').on('click', function () {
        $('#ambulatoirForm').submit();  // Submit the form when confirmed
    });

    // Modal for Pet save confirmation (triggerModalPet)
    $('#triggerModalPet').on('click', function () {
        var myModal = new bootstrap.Modal(document.getElementById('confirmModalPet'), {});
        myModal.show();
    });

    // PetForm
    $('#confirmSavePet').on('click', function () {
        $('#petLisForm').submit();  // This submits the form
    });

    $('#triggerModalFisiologis').on('click', function () {
        var myModal = new bootstrap.Modal(document.getElementById('confirmModalPet'), {});
        myModal.show();
    });
    
    // // Optional dynamic row addition and deletion (if needed)
    // var i = 1;
    // $("#add_row").click(function () {
    //     var b = i - 1;
    //     $('#addr' + i).html($('#addr' + b).html()).find('td:first-child').html(i + 1);
    //     $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
    //     i++;
    // });

    // $("#delete_row").click(function () {
    //     if (i > 1) {
    //         $("#addr" + (i - 1)).html('');
    //         i--;
    //     }
    // });



    var triggerTabList = [].slice.call(document.querySelectorAll('#tabFisiologis button'))
    triggerTabList.forEach(function (triggerEl) {
      var tabTrigger = new bootstrap.Tab(triggerEl)
    
      triggerEl.addEventListener('click', function (event) {
        event.preventDefault()
        tabTrigger.show()
      })
    })
});


// document.addEventListener("DOMContentLoaded", function() {
//     // Main form save button
//     document.getElementById("triggerModalPet").addEventListener("click", function() {
//         // Trigger modal confirmation
//         var confirmModal = new bootstrap.Modal(document.getElementById('confirmModalPet'));
//         confirmModal.show();
//     });

//     // Confirm save button in the modal
//     document.getElementById("confirmSavePet").addEventListener("click", function() {
//         // Hide modal
//         var confirmModal = bootstrap.Modal.getInstance(document.getElementById('confirmModalPet'));
//         confirmModal.hide();

//         // Submit the main form
//         document.querySelector("form[action*='PetList/save/']").submit();
//     });

//     // Save ambulatoir form button
//     document.getElementById("saveAmbulatoir").addEventListener("click", function(event) {
//         event.preventDefault(); // Prevent default form submission

//         // Submit ambulatoir form
//         document.querySelector("form[action*='PetList/saveAmbulatoir/']").submit();
//     });
// });