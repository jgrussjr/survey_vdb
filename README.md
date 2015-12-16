# survey_vdb
Repository for survey assignment for Visual Database Programing, Fall 2015
This is the documentation file.

Purpose: 
To create a student survey website to demonstrate abilities learned in class.
Specifically: HTML, CSS, PHP, CRUD.

Notes: 
This project follows the instructions given in the Survey "Form Assignment - index.html" 
available on the course's moodle. The file stated to not edit the html that already existed on the page.
However, editing absolutely none of the html would have been partially impossible since functionality
needed to be changed for the page. For example, removing comments to create a deliverable product. I also
did modify some other areas. Among these in index are: name attributes for "programming skills" and "date"; max values to
increase data validation; and style links to add custom css. One larger change is the transformation of "index.html" to "index.php". 
This was done in order to add a header and navigation bar to the survey site. 

Using the site:
First, upload the sql file to you database manager (phpmyadmin). If database name changes must be made, do them in this file
to ensure usability. Next, set database connection options in "includes/". If the sql file is uploaded in its default state,
one should only need to change "constants.inc.php". Most basically, to connect to a local server, define 
DB_SERVER_IN_USE as "local". To use remote settings, define as "remote". Other changes beyond this scope can be made using this 
file in conjunction with changes to "connection.inc.php". After this is accomplished and the site is sitting on a usable server 
of sorts, it should be ready to use. 

Notable Changes:
Added navigation, documentation, and user interaction are the main additions. Moreover, I removed the responsibility of 
setting local vs remote declarations from individual files and gave it to the includes pages through setting a variable 
value. This single variable should enable fast switches from local to remote. This also aids object orientation and is, 
I think, much better programming practice. 


Files:
	Note: Most files adapted from files previously used in class; some files are new additions.

index.php: main survey page; in place of index.html;
insert.php: inserts data into database. Called by index.php; this page will not be landed upon unless an error occurs on insertion.
select.php: shows styled query of records from the database. Styling added.
delete.php: page to delete a record from the database. Accessed via select.php. Functionality improved compared to class example.
edit.php: page to edit a record. Accessed via select.php. Functionality improved compared to class example.
infopage.php: New page created to show this readme document.
navbar.html: file containing html and most styling for the banner and navigation bar. File is loaded via php onto pages which reasonably expect
	user interaction. This aids in design, usability, and, hopefully, ease of grading.
survey_db.sql: SQL file that creates database "db_gruss001" if it does not exist, adds creates survey_tbl table in that database, and 
	inserts 3 sample rows of data into the table.
README.md: file created by git/github, my choice of SCM software. This is the documentation file.
LICENSE: file created by git/github, my choice of SCM software. Disregard this file.
css/: contains three (3) css files - 2 from moodle and 1 created to style parts of the site (select.php table, infopage.php).
includes/: contains database connection information. slight edits have been made to improve usability in comparison to the
	files we have used on past projects.
	
	
	


