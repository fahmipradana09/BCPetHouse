new DataTable('#ambulatoir');
new DataTable('#rawatinap');

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
    var formattedDate = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear(); // Format it as YYYY-MM-DD

    $('#datePicker input').val(formattedDate); // Set input value to today's date
});
