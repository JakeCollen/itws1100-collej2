INSERT INTO `myLabs` (`labNumber`, `labTitle`, `labLink`) VALUES
(1, "GitHub and Azure", "labs/lab01/lab01.html"),
(2, "Building a Resume", "labs/lab02/lab02.html"),
(3, "Personal Website", "labs/lab03/lab03.html"),
(4, "XML and RSS", "labs/lab04/lab04.html"),
(5, "JavaScript", "labs/lab05/lab05.html"),
(6, "JQuery", "labs/lab06/lab06.html"),
(7, "Group Project Mockup", "labs/lab07/lab07.html"),
(8, "Dynamic Website", "labs/lab08/lab08.html"),
(9, "PHP and MySql", "labs/lab09/lab09.html"),
(10, "Moving to Production", "labs/lab10/lab10.html");

INSERT INTO `myProjects` (`projectNumber`, `projectTitle`, `projectLink`, `projectClass`) VALUES
(1, "Labs", "labs/labs.php", "Intro to ITWS"),
(2, "Group Project", "../../grp/index.php", "Intro to ITWS");

INSERT INTO `myFooter` (`footerId`, `footerText`) VALUES
(1, "Jake Collen-ITWS @ RPI");

INSERT INTO `mySiteUsers` (`userId`, `username`, `password`, `userType`) VALUES
(1, "collej2", "JaysonTatum0$", `admin`),
(2, "rplotka", "JakeServer", `admin`),
(3, "mojiso", "JakeServer", `admin`);
(4, "testuser", "testpass", `user`)