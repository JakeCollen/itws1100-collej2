I have copies of the files I used in quiz3/resources so it's easy to find them but their locations are as follows:
I made a separate folder called "login" to handle my login.php and logout.php
I put all of the files that I used includes to put in index.php in my main resources folder
My old projects page with my list of labs is what my new labs.php looks like
I made a new projects.php that has links to labs.php and a link to our group project
I included the add/delete labs page alongside labs.php inside the labs folder as it felt unnecessary to create a resources folder just for that

I had the logout working perfectly but it was impacted when I moved files around and is now having problems.

I wasn't able to get the delete lab button to work. I tried to use lab 9 as a resource and I understand how index.php and actor-delete.php work individually but couldn't figure out how they work together. index.php never has an include for actor-delete.php and I'm confused as to how actor-delete implements itself in index.php.

Instead of having an error message when trying to access add/delete labs if not logged in with admin permissions, I just have the link not appear at all if not logged in with admin.
