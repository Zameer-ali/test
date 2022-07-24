<?php  
error_reporting(0);
        try{
             $connection=mysqli_connect('localhost','rot','','test');
            }catch(Throwable $error){
                echo $error->getMessage()."<br>";
                $file=fopen("error/error_logs.txt","a+");
                fwrite($file,"Error:".$error->getMessage().",Path:".$error->getFile().",level No:".$error->getCode().",line NO:".$error->getLine()."\r\n");
               
                    $connection=mysqli_connect('localhost','root','','test');
                    $query="INSERT INTO error_logs(error_level,error_msg,path,error_line,date_time) VALUES('".$error->getCode()."','".htmlspecialchars($error->getMessage()) ."','".$error->getFile()."','".$error->getLine()."',NOW())";
                    $result=mysqli_query($connection,$query);
         }
         
         function custom_error($error_level,$error,$error_file,$error_line){
             echo $error;
            $connection=mysqli_connect('localhost','root','','test');
                $file=fopen("error/error_logs.txt","a+");
                fwrite($file,"Error:".$error.",Level No:".$error_level.",Path:".$error_file.",line NO:".$error_line."\r\n");

                 $query="INSERT INTO error_logs(error_level,error_msg,error_line,path,date_time) VALUES('".$error_level."','".$error ."','".$error_line."','".$error_file."',NOW())";
                $result=mysqli_query($connection,$query);
                
         }
        set_error_handler('custom_error');
        echo $abc;
        $name='asad@gmail.com';
        if($name=='zame@gmail.com')
        {
        }else{
            trigger_error("Invalid User");
        }

?>