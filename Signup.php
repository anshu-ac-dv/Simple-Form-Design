<?php

$showAlert = false;
$showError = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include'server.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $exists=false;
        if($password == $cpassword && $exists==false){
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Password do not match";
        }
    }

    
?>
<head>
    <title>
        Sign Up
    </title>


    <style>
        form{
            width: 50%;
            margin: 0px auto;
            padding: 20px;
            margin-top: 20px;
            border: 2px solid gray;
            background-color: white;
            border-radius: 10px 10px 10px 10px;
        }
        .input-group{
            margin: 10px 0px 10px 0px;
        }
        .input-group label{
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input{
            height: 40px;
            width: 100%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        .input-group button{
            padding: 10px;
            font-size: 15px;
            color: white;
            background-color: blue;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>




    
<form action="Signup.php" method="post">
    
        <h1>
            Register Here!
        </h1>
    
    <div class="input-group">
        <label>User Name</label>
        <input type="text" id="username" name="username">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword">
    </div>
    <div class="input-group">
        <button type="submit" name="register">Register</button>
    </div>
        <p>
            Already a member? <a href="login.php">Login</a>
        </p>
        
    </form>

    <?php
    
    if($showAlert){
        echo 'Your accouct is created';
    }
    
    if($showError){
        echo ''.$showError.'';
    }
    ?>
    ?>
    
</body>