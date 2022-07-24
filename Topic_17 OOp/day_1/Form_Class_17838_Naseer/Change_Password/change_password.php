<?php


class ChangePassword
{
    public $action = NULL;
    public $method = null;

    public function setAction($Action)
    {
        $this->action = $Action;
    }
    public function setMethod($Method)
    {
        $this->method = $Method;
    }


    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }
    /* Forgot Password Form */
    public function changePasswordForm()
    {
?>
        <fieldset style="width: 40%; height: 200px; margin: auto; border-radius: 6px; 
        background-color: rgba(1, 1, 1, 0.1);">
            <legend style="background-color: grey; margin-top: 2px; border-radius: 3px; padding: 3px; color: white;"> Change Password Form </legend>
            <form style="margin: auto; padding: 50px;" action="<?php echo $this->getAction(); ?>" method="<?php echo $this->getMethod(); ?>">
                <table>
                    <tr>
                        <td> Old Password </td>
                        <td> <input type="password" name="password"> </td>
                    </tr>
                    <tr>
                        <td> New Password </td>
                        <td> <input type="password" name="password"> </td>
                    </tr>
                    <tr>
                        <td> Confirm Password </td>
                        <td> <input type="password" name="password"> </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <input type="submit" name="change_password" value="Forgot Password" style="width: 120px; 
                        background-color: royalblue; border-radius: 3px; border: none; 
                        margin-left: 50%; padding:3pxpx;color: white; text-shadow: 1px 1px 1px blue; 
                        font-size: 15px; cursor: pointer;"> </td>
                    </tr>
                </table>
            </form>
        </fieldset>
<?php
    }
}


?>