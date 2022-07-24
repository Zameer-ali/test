
<!DOCTYPE html>
<html>
<head>
<title>Make a list php as described</title>
</head>
<body>
    <h1>Make a list php as described</h1>
    <?php
    $type='squar';
    
    ?>
  <ul type="$type">
             <?php 
             if($type=='square'){
                 echo "<h1>Even Number series</h1>"  ;  
                for($i=0;$i<=10;$i+=2){   
                       echo "<li>$i</li>"  ;  
                }
            }
             else if($type=='disc'){
                echo "<h1>Odd Number series</h1>"  ;  
                for($i=1;$i<=10;$i+=2){   
                        
                       echo "<li>$i</li>"  ;  
                }
            }
             else if($type=='circle'){
                echo "<h1>Square Number series</h1>"  ;  
                for($i=1;$i<=10;$i++){  
                    $result=$i*$i; 
                       echo "<li>$i*$i=$result</li>"  ;  
                }
            }
             else {
                
                       echo "<h1>incorrect Value</h1>"  ;  
                }
                ?>
                </ul>
</body>
</html>
