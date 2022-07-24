<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Structure</title>
</head>
<body>
    <table border='3'cellspacing='0' cellpadding='0' align='center' >
        <tr >
            <th align='center' colspan='5' >
                <h1>Header</h1>
            </th>         
        </tr>
        <tr>
            <td align='center' rowspan='4' colspan='' >
                <h1>Side 1</h1>
            </td>         
            <td align='center' colspan='3' >
                <h1>Content 1</h1>
            </td> 
            <td align='center' rowspan='4' colspan='' >
                <h1>Side 2</h1>
            </td>         
        </tr>
        <tr>
            <td align='center' colspan='' >
                <h1>Img</h1>
            </td>         
            <td align='center' colspan='' >
                <h1>Img</h1>
            </td> 
            <td align='center' colspan='' >
                <h1>Img</h1>
            </td>         
        </tr>
        <tr>
             
            <td align='center' colspan='3' >
                <table border="" cellspacing="0" cellpadding="0">
                    <tr>
                     <td align='center' colspan='3' >
                        <h1>Content 2</h1>
                     </td> 
                     <td align='center' colspan='3' >
                        <h1>Content 2</h1>
                     </td> 
                    </tr>
                </table> 
            </td>                 
        </tr>
        <tr>
                   
            <td align='center' colspan='3' >
                <h1>Content 2</h1>
            </td> 
                  
        </tr>
        <tr>
                   
            <td align='center' colspan='5' >
                <h1>Footer</h1>
            </td> 
                  
        </tr>
        
    </table>
</body>
</html>