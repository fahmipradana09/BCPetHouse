new DataTable('#ambulatoir');

new DataTable('#detailAmbulatoir', {
    info: false,
    paging: false
});

$(document).ready(function(){
    var i=1;
   $("#add_row").click(function(){b=i-1;
    $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
    i++; 
});
   $("#delete_row").click(function(){
       if(i>1){
       $("#addr"+(i-1)).html('');
       i--;
       }
   });

});


$(function(){
    var today = new Date(); // Get current date
    var formattedDateTime = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate() +
        ' ' + today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds(); // Format as YYYY-MM-DD HH:MM:SS

    $('#datePicker input').val(formattedDateTime); // Set input value to today's date
});

$(document).ready(function () {
    var table = $('#rawatinap').DataTable();

    $('#rawatinap tbody').on('click', 'tr.clickable-row', function () {
        var href = $(this).data('href');
        window.location.href = href;
    });
});

function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this item?')) {
      // Submit the form
      document.getElementById('deleteForm' + id).submit();
    }
  }
