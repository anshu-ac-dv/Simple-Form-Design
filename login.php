<?php

$login = false;
$loginErr = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'server.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
            $sql = "Select * from users where username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $login = true;
            }
        
        else{
            $loginErr = "Invalid Crentials";
        }
    }

    
?>
<head>
    <title>
        Login
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
            Login Here!
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
        <button type="submit" name="register">Login</button>
    </div>
        <p>
            You do have not any account? <a href="Signup.php" style="text-decoration: none;">Register Now</a>
        </p>
        
    </form>

    <?php

    if($login){
        echo 'Your are logied in';
    }

    if($loginErr){
        echo ''.$loginErr.'';
    }
    ?>
    
    
    
</body>