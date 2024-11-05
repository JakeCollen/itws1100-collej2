function getNames() {
    
        $.ajax({
              type: "GET",
              url: "Question1A.json",
              dataType: "json",
              success: function(responseData, status){
               var output = "<ol>";  
               $.each(responseData.names, function(i, names) {
                var current_name=names.name
                output += '<li>';
              output += names.name;
              output += '</li>';
              $('#namesList').html(output);
              $('#namesList li').on('click', function() {
                  alert(current_name);
               })
            });
            output += "</ol>";
          },
        })}