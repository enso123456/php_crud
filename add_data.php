<?php
include_once 'db.php';
    if(isset($_POST['btn-save']))
    {
        // variables for input data
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        // variables for input data

        // sql query for inserting data into database

        $sql_query = "INSERT INTO user(full_name, email) VALUES('$full_name','$email')";
        mysql_query($sql_query);
        // sql query for inserting data into database
    }
?>
<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRUD Operations With PHP and MySql - By Cleartuts</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <center>
        <div id="header">
               <div id="content">
                <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
            </div>
        </div>
        <div id="body">
            <div id="content">
                <form method="post">
                    <table align="center">
                        <tr>
                            <td align="center"><a href="index.php">back to main page</a></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="full_name" placeholder="Full Name" required /></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="email" placeholder="Email" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </center>
</body>