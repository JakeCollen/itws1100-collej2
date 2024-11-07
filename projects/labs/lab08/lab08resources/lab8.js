$(document).ready(function() {
  
      
        $.ajax({
              type: "GET",
              url: "labs/lab08/lab08resources/lab8.json",
              dataType: "json",
              success: function(responseData){
               var output = "<ul>";  
               $.each(responseData.labListItem, function(i, labListItem) {
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