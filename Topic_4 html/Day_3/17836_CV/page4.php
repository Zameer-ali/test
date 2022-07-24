<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV builder</title>
</head>
<body>
    <h1 align='center'>CV Builder</h1>
    <table align='center' border='1' width='75%' cellspacing="0" cellpadding="4">
            <tr>
                <td colspan="100%">
                    
                    <h2 align='center'>Personal Details</h2>
                </td>
            </tr> 
            <tr>
                <td>Name:</td>
                <td colspan="100%"><?php echo $_POST['name']; ?></td>
            </tr>
            <tr>
                <td>Father's Name:</td>
                <td colspan="100%"><?php echo $_POST['fname']; ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td colspan="100%"><?php echo $_POST['gender']; ?></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td colspan="100%"><?php echo $_POST['country']; ?></td>
            </tr>
            <tr>
                <td colspan="100%">
                    
                    <h2 align='center'>Contact Details</h2>
                </td>
            </tr>
            <tr>
                <td>Contact NO:</td>
                <td colspan="100%"><?php echo $_POST['phone']; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td colspan="100%"><?php echo $_POST['email']; ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td colspan="100%"><?php echo $_POST['address']; ?></td>
            </tr>
            <tr>
                <td colspan="100%">
                    
                    <h2 align='center'>Professional Info</h2>
                </td>
            </tr>
            <tr>
                <td>Name of School:</td>
                <td><?php echo $_POST['NoS']; ?></td>
                <td>School Start Date:</td>
                <td><?php echo $_POST['schSdate']; ?></td>
                <td>School End Date:</td>
                <td><?php echo $_POST['schEdate']; ?></td>
            </tr>
            <tr>
            <td>Name of College:</td>
                <td><?php echo $_POST['NoC']; ?></td>
                <td>College Start Date:</td>
                <td><?php echo $_POST['colSdate']; ?></td>
                <td>College End Date:</td>
                <td><?php echo $_POST['colEdate']; ?></td>
            </tr>
            <tr>
            <td>Name of University:</td>
                <td><?php echo $_POST['NoU']; ?></td>
                <td>University Start Date:</td>
                <td><?php echo $_POST['uniSdate']; ?></td>
                <td>University End Date:</td>
                <td><?php echo $_POST['uniEdate']; ?></td>
            </tr>
            <td>Summary:</td>
                <td colspan="100%"><?php echo $_POST['summary']; ?></td>
            </tr>
           
    </table>
</body>
</html>