/* Lab 5 JavaScript File 
   Place variables and functions in this file */

function validate(formObj) {
   // put your validation code here
   // it will be a series of if statements

   var textAlert = "";
   var setFocus = 0;

   if (formObj.firstName.value == "") {
      textAlert += "You must enter a first name\n";
      if (setFocus = 0);
         formObj.firstName.focus();
         setFocus = 1;
   }

   if (formObj.lastName.value == "")  {
      textAlert += "You must enter a last name\n";
      if (setFocus = 0);
         formObj.lastName.focus();
         setFocus = 1;
   }

   if (formObj.title.value == "")  {
      textAlert += "You must enter a title\n";
      if (setFocus = 0);
         formObj.title.focus();
         setFocus = 1;
   }

   if (formObj.org.value == "")  {
      textAlert += "You must enter an organization\n";
      if (setFocus = 0);
         formObj.org.focus();
         setFocus = 1;
   }

   if (formObj.pseudonym.value == "")  {
      textAlert += "You must enter a nickname\n";
      if (setFocus = 0);
         formObj.pseudonym.focus();
         setFocus = 1;
   }

   if (formObj.comments.value == "Please enter your comments" || formObj.comments.value == "")  {
      textAlert += "You must enter any comments\n";
      if (setFocus = 0);
         formObj.comments.focus();
         setFocus = 1;
   }

   if (textAlert == "") {
      alert("Form submitted");
      return true;
   }

   if (textAlert !== "") {
      alert(textAlert);
      return false;
   }
}

function remove_template(comments) {
   if (comments.value == "Please enter your comments")  {
      document.getElementById("comments").value="";
   }

}

function add_template(comments) {
   if (comments.value == "") {
      document.getElementById("comments").value="Please enter your comments";
   }
}