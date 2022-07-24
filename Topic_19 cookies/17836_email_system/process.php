<?php 
    require_once('require/connection.php');
    if(isset($_REQUEST['register'])){
        $dir='images';
        if(!is_dir($dir)){
            mkdir($dir);
        }
        $imgSize=$_FILES['pic']['size'];

        if($imgSize<=1048576){
            $imgPath=$dir."/"."_image_".rand(1000,10000).$_FILES['pic']['name'];
            if(move_uploaded_file($_FILES['pic']['tmp_name'],$imgPath)){
                extract($_REQUEST);

                $query="INSERT INTO users(user_name,email,password,imgpath) Values('".$user_name."','".$email."','".md5($password)."','$imgPath')";
                $result=mysqli_query($connection,$query);
                
                if ($result) {
                    header('location:index.php?message=User Successfully Registered&color=green');
                    
                }else{
                    $error=mysqli_error($connection);
                    header('location:register.php?message=User not Registered try Later&error='.$error);

                }
            }else{
                header('location:register.php?message=Error While Uplaoding Image');
            }
        }else{
            header('location:register.php?message=Image should be less than 1 mb');die;
        }
    }  elseif(isset($_REQUEST['login'])){
        
        extract($_REQUEST);
        echo $query="SELECT * FROM users WHERE email='".$email."' AND password='".md5($password)."'";
        $result=mysqli_query($connection,$query);
        $user=mysqli_fetch_assoc($result);
        
        if($result->num_rows){
            setcookie('user',serialize($user));
            header('location:Dashboard.php');
        }else{
            header('location:index.php?message=Invalid Email and Password&color=red');
        }
    }
    else{
        header('location:index.php?message=Access Denied&color=red');
    }
    

?>