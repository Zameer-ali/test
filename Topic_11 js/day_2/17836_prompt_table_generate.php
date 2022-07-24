<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Generate</title>
</head>
<body>
    <center>
                <H1 align='center'>Table Generate</H1>
                      <script>
                        var number=prompt()
                        document.write('<table border=1>')
                        document.write('<tr>')
                        for(var i=1;i<=number;i++){
                            if(i==5){
                                console.log(check= confirm('Print table or not'))
                                if (!check) {
                                    break;
                                }
                            }
                            if(true){
                                    document.write('<td>')
                                    for(j=1;j<=10;j++){
                                    document.write( i+"*"+j+"="+i*j+'<br>')
                                    }
                                    document.write('</td>')
                            }
                            if(i%5==0){
                            document.write("</tr ><tr>");   
                            }
                        } 
                        document.write("</tr>");   
                        document.write('</table>') 
                    </script>
        
    </center>
                    
                     
      
       
    
</body>
</html>