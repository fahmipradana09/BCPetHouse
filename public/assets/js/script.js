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

$(document).ready(function(){
    var ambulatoirData = json_encode($ambulatoir) // Assuming $ambulatoir is an array of data

    var i = ambulatoirData.length;
    
    // Add a new row at the bottom of the table
    $("#add_row").click(function(){
        var newRow = '<tr id="addr' + i + '">' + $('#addr0').html() + '</tr>';
        $('#tab_logic tbody').append(newRow);
        $('#addr' + i + ' td:first-child').html(i + 1);
        i++;
    });

    // Delete the last row
    $("#delete_row").click(function(){
        if (i > 1){
            $("#addr" + (i - 1)).remove();
            i--;
        }
    });
});

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



