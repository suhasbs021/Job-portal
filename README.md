# job-portal
First, you need to have MySQL installed on your system. If it's not installed, you can download and install it from the official MySQL website.
Once MySQL is installed, you'll need to start the MySQL server. This is usually done by running a command like mysql.server start in your terminal or using services in your operating system.
Now, you'll need to create a MySQL database. You can do this using a tool like phpMyAdmin or by running SQL commands directly in the MySQL command-line interface (CLI). For example:CREATE DATABASE your_database_name; 
and database name should be jobportals
Making Use of the Database:

Once your MySQL server is set up and your database is created, you can start using it in your PHP application.
In your PHP code, you'll need to establish a connection to the MySQL database using the appropriate credentials. This is typically done using the mysqli or PDO extension in PHP.
Opening main .php File:

After setting up the connection to the database, you can start working on your PHP application by creating or opening the main .php file.
In this file, you can start writing PHP code to perform various operations like querying the database, inserting data, updating data, deleting data, etc.
You can include the database connection code from the previous step at the beginning of your main .php file or in a separate file and include it wherever needed
