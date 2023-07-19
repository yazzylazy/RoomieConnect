To work/test the app with a functioning database...

    1. Move the 'roomieconnect' folder into /XAMPP/htdocs/
    2. Launch XAMPP and the APACHE/MySQL server
    3. Go to localhost/phpmyadmin in your browser
    4. Click User Accounts
    5. Click 'Add User Accounts'
    6. Fill in the following:
        Username: roomieconnect
        Host Name: localhost
        Password: *Click the drop down and select no password*
    7. Click on database tab
    8. Under 'Create Database', enter database name 'roomieconnect' and click 'Create'
    9. Now that we are in the new database, create the tables that are in the 'db.sql' file
        This is done by clicking on the 'SQL' tab at the top and entering/running queries
        a. Copy + paste the 'users' table, click 'Go'
        b. Copy + past the 'roomateMatching' table, click 'Go'
    10. Now you can access the app with the database, start by entering this in the browser...
        localhost/roomieconnect/index.html

        Test the log in, create account, etc.