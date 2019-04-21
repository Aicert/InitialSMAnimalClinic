<?php
if(isset($_POST['loginButton'])){
    require 'db.inc.php';

    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];

    if (empty($userName)||empty($userPassword)){
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE userName=?;";
        $stmt = mysqli_stmt_init($conn);
    
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($userPassword, $row['userPassword']);
                if ($pwdCheck == false){
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['idUser'] = $row['idUser'];
                    $_SESSION['userName'] = $row['userName'];

                    header("Location: ../index.php?login=success");
                    exit();

                }
                else{
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                
            }
        }
    }
}
else{
    header("Location:../login.php");
    exit();
}