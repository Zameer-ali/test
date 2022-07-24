<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send email</title>
    <style>
        fieldset{
            width: 50%;
            margin-top: 50px;
            height: 500px;
        }
        input{
            width: 100%;
            height: 35px;
        }
        input[type='submit']{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
        <fieldset>
            <legend>Send Email</legend>
            <?php
                    if(isset($_REQUEST['message'])){
                        ?>
                        <p style="color:<?=$_REQUEST['color']?>;    margin-top:15px;"><?=$_REQUEST['message']?></p>
                        <?php
                    }
            ?>
            <h1>Send  Email</h1>
            <table>
                <form action="process.php" method="POST" enctype="multipart/form-data">

                    <tr>
                        <td> <label>To :</label> </td>
                    <td><input type="email" name="to" placeholder="To"></td>
                </tr>
                <tr>
                    <td> <label>From :</label> </td>
                    <td><input type="email" name="from" value="sahabdummy@gmail.com" readonly></td>
                </tr>
                <tr>
                    <td> <label>CC :</label> </td>
                    <td><input type="email" name="cc" placeholder="CC"></td>
                </tr>
                <tr>
                    <td> <label>BCC :</label> </td>
                    <td><input type="email" name="bcc" placeholder="BCC"></td>
                </tr>
                <tr>
                    <td> <label>Subject :</label> </td>
                    <td><input type="text" name="sub" placeholder="subject"></td>
                </tr>
                <tr>
                    <td> <label>Message :</label> </td>
                    <td> <textarea name="msg" id="" cols="50" rows="3" placeholder="Enter Message"></textarea> </td>
                </tr>
                <tr>
                    <td> <label>Image :</label> </td>
                    
                    <td>
                        <input type="file" name="file" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="btn" type="submit" name="submit" ></td>
                </tr>
                
            </form>
            </table>
        </fieldset>
    </center>
</body>
</html>