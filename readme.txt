Internet Programming Lab Project-------B.S.Abdur Rahman University

Instructor: Dr.Sabiyath Fathima( Senior Grade)

Project Members: Raghuram p and Shyam Sundar

Title: website for "VEHICLE SYSTEM"

Instructions to run project:

1.Download xampp php development environment. 
  (link: https://www.apachefriends.org/index.html)

2.Ensure that the MySql and Apache server are installed during xampp setup.

3.Open up htdocs in the xampp installation directory in you hard drive and
  copy all the files provided in the Gitub project.

4.Make sure to create the subdirectories as mentioned in the file names, and 
  place the necessary files within those subdirectories (img,imgthumb,inc,css)

5.Open up the xampp control panel and start the Apache server and Mysql.

6.You can configure the default browser for xampp by using the config. button
  in the control panel.

7.Type localhost/phpmyadmin in the url bar of your browser. This will open
  up your mysql database.

8.Create a db 'Automobile'. Create the tables, 'register', 'feedback'

9.Create the following columns in 'register': id, fName,contact,blood, city, MODEL-NUMBER,gender, profession.

10.The 'contact US' table has the columns: id,Name,Email,Message.

11.Fill the table with the details of the articles you wish to display and their corresponding link.

12.New rows can be inserted using the insert query or the insert button included in phpmyadmin.

13.In order to get the email function working, the following changes need to be made:

14.Open the php.ini file find [mail function] and change

	SMTP=smtp.gmail.com
	smtp_port=587
	sendmail_from = my-gmail-id@gmail.com
	sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

15.Typing localhost/index.php should now open up the completed project.

16.All code is commented annotated for easier understanding.

Note: Internet connection is required for jquery functions to operate.

credits: Copyright ? 2015 Arif Productions!

The project was developed as a part of the curriculum for the course IP lab(CS405).