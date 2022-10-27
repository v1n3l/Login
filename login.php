<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="bootstrap/bootstrap-5.1.0-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap-5.1.0-dist/js/jquery3.6.0.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();
    if(isset($_POST['signinBtn']) && isset($_POST['UserType'])){
        $arrUtype = $_POST['UserType'];

        foreach ($arrUtype as $key => $Utypevalue){
            if(($Utypevalue == "admin")){
                
                $admin1 ="admin";
                $Padmin1 ="admin";
                $admin2 = "vinel";
                $Padmin2 = "1234";
                
    
                if(($_POST['Username'] == $admin1 && $_POST['Password']==$Padmin1))
                {
                    $_SESSION['Username'] = $admin1;


                    echo '<div class="alert alert-success w-50 p-3 mx-auto">
                    welcome to the system ',$admin1,
                   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                }
                elseif(($_POST['Username'] == $admin2 && $_POST['Password']==$Padmin2)){
                        $_SESSION['Username'] = $admin2;
                        echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                        welcome to the system ',$admin2,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                    }
                    else
                    {
                    echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                    You Entered the wrong password
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }         
                }


                if(($Utypevalue == "ContMan")){
                
                    $ContMan1 ="vinel";
                    $PcontMan1 ="domingo";
                    $ContMan2 = "juan";
                    $PcontMan2 = "delacruz";
                    
        
                    if(($_POST['Username'] == $ContMan1 && $_POST['Password']==$PcontMan1))
                    {
                        $_SESSION['Username'] = $ContMan1;
    
    
                        echo '<div class="alert alert-success w-50 p-3 mx-auto">
                        welcome to the system ',$ContMan1,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }
                    elseif(($_POST['Username'] == $ContMan2 && $_POST['Password']==$PcontMan2)){
                            $_SESSION['Username'] = $ContMan2;
                            echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                            welcome to the system ',$ContMan2,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                        }
                        else
                        {
                        echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                        You Entered the wrong password
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }         
                    }

                    if(($Utypevalue == "SystemUs")){
                
                        $SystemUs1 ="jaun";
                        $PSystemUs1 ="tamad";
                        
                        
            
                        if(($_POST['Username'] == $SystemUs1 && $_POST['Password']==$PSystemUs1))
                        {
                            $_SESSION['Username'] = $SystemUs1;
        
        
                            echo '<div class="alert alert-success w-50 p-3 mx-auto">
                            welcome to the system ',$SystemUs1,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }
                            else
                            {
                            echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                            You Entered the wrong password
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                            }         
                        }
    

            }
        }
    ?>


<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card "src="vinel.jpg" width="200" height="200" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
            <div class="form-row align-items-center">
            <div class="col-auto my-1">
            <select class="form-control" id="UType" name ="UserType[]">
                <option value="admin">Admin</option>
                <option value="ContMan">Content Manager</option>
                <option value="SystemUs">System User</option>
            </select>
            </div>
                <br>
                <input type="text" name="Username" id="username" class="form-control" placeholder="User" required autofocus><br>
                <input type="password" name="Password"  id="password" class="form-control" placeholder="Password" required><br> 
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="signinBtn">Sign in</button><br>
            </form>
        </div>
    </div>
</body>
</html>