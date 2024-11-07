$(document).ready(function() {
  
      
    $.ajax({
          type: "GET",
          url: "../resources/labs_list.json",
          dataType: "json",
          success: function(responseData){
           var output = "<ul>";  
           $.each(responseData.labListItem, function(labListItem) {
            output += '<li><a href="' + labListItem.page + '">';
            output += labListItem.number + "-";
            output += labListItem.title;
            output += '</a></li>';
        });
        output += "</ul>";
        $('.labs').html(output);
      }
    })
})