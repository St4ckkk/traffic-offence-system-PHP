<?php
    //Start session
    session_start();

    //Array to store validation errors
    $errmsg_arr = array();

    //Validation error flag
    $errflag = false;

    //Connect to mysql server
    $link = mysqli_connect('localhost', 'root', '', 'DATABASE');
    if (!$link) {
        die('Failed to connect to server: ' . mysqli_connect_error());
    }

    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str)
    {
        global $link;
        $str = trim($str);
        $str = stripslashes($str);
        return mysqli_real_escape_string($link, $str);
    }

    //Sanitize the POST values
    $login = clean($_POST['username']);
    $password = clean($_POST['pass']);

    //Input Validations
    if ($login == '') {
        $errmsg_arr[] = 'Username missing';
        $errflag = true;
    }
    if ($password == '') {
        $errmsg_arr[] = 'Password missing';
        $errflag = true;
    }

    //If there are input validations, redirect back to the login form
    if ($errflag) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php");
        exit();
    }

    //Create query
    $qry = "SELECT * FROM user WHERE username='$login' AND pass='$password'";
    $result = mysqli_query($link, $qry);

    //Check whether the query was successful or not
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            //Login Successful
            session_regenerate_id();
            $member = mysqli_fetch_assoc($result);
            $_SESSION['SESS_MEMBER_ID'] = $member['id'];
            $_SESSION['SESS_FIRST_NAME'] = $member['name'];
            $_SESSION['SESS_LAST_NAME'] = $member['position'];
            $_SESSION['SESS_PRO_PIC'] = $member['username'];
            session_write_close();
            header("location: index.php");
            exit();
        } else {
            //Login failed
            header("location: login.php");
            exit();
        }
    } else {
        die("Query failed");
    }
?>