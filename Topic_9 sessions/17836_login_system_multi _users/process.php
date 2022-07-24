<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
    <?php
    session_start();
    $flag=true;
    $users=array(
        'user 1'=>array(
            'username'=> 'ali_khan',
            'password'=> '12345',
            'role'    => 'admin',
            'active'  => '1',
        ),
        'user 2'=>array(
            'username'=> 'ahmed_khan',
            'password'=> '12345',
            'role'    => 'teacher',
            'active'  => '1',
        ),
        'user 3'=>array(
            'username'=> 'sultan',
            'password'=> '12345',
            'role'    => 'student',
            'active'  => '1',
        ),
        'user 4'=>array(
            'username'=> 'zameer',
            'password'=> '12345',
            'role'    => 'student',
            'active'  => '1',
        ),
    );
    
        if(isset($_REQUEST['submit'])){
            foreach ($users as $key => $value) {
                if($_REQUEST['password']==$value['password'] && $_REQUEST['username']==$value['username']){
                    $flag=false;
                    if ($value['active']) {
                        $_SESSION['user']=$users[$key];
                        
                        if ($value['role']=='admin') {
                            header('location:admin.php');die;
                        }
                        else if ($value['role']=='teacher') {
                            header('location:teacher.php');die;
                        }
                        else if ($value['role']=='student') {
                            header('location:student.php');die;
                        }
                    }else{
                        header('location:index.php?message=Your account is not active');die;
                    }
                }         
            }
            if($flag){
                header('location:index.php?message=Invalid User');
            }
        }
    ?>
</body>
</html>