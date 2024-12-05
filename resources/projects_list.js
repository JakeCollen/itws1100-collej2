$(document).ready(function() {
  
      
    $.ajax({
          type: "GET",
          url: "../resources/projects_list.json",
          dataType: "json",
          success: function(responseData){
           var output = "<ul>";  
           $.each(responseData.projectListItem, function(i, projectListItem) {
            output += '<li><a href="' + projectListItem.page + '">';
            output += projectListItem.class + "-";
            output += projectListItem.title;
            output += '</a></li>';
        });
        output += "</ul>";
        $('.labs').html(output);
      }
    })
})