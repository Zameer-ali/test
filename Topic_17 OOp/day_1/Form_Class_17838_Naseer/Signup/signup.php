<?php


class SignUp
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
    /* SignUp Form */
    public function signUpForm()
    {
?>
        <fieldset style="width: 40%; margin: auto; border-radius: 6px; 
        background-color: rgba(1, 1, 1, 0.1);">
            <legend style="background-color: grey; margin-top: 2px; border-radius: 3px; padding: 3px; color: white;"> Sign Up Form </legend>
            <form style="margin: auto;" action="<?php echo $this->getAction(); ?>" method="<?php echo $this->getMethod(); ?>">
                <table>
                    <tr>
                        <td> Full Name </td>
                        <td> <input type="text" name="user_name"> </td>
                    </tr>
                    <tr>
                        <td> Email </td>
                        <td> <input type="email" name="email"> </td>
                    </tr>
                    <tr>
                        <td> Password </td>
                        <td> <input type="password" name="password"> </td>
                    </tr>
                    <tr>
                        <td> CNIC No </td>
                        <td> <input type="text" name="cnic"> </td>
                    </tr>
                    <tr>
                        <td> Gender </td>
                        <td>
                            <input type="radio" name="gender"> Male
                            <input type="radio" name="gender"> Female
                        </td>
                    </tr>
                    <tr>
                        <td> Date of Birth </td>
                        <td> <input type="date" name="date" style="width: 100%;"> </td>
                    </tr>
                    <tr>
                        <td> Country </td>
                        <td> <select name="country" style="background-color: white; border: none; border-radius: 3px; width: 100%;">
                                <option value="Select">--Select--</option>
                                <option value="Pakistan"> Paksitan </option>
                                <option value="Pakistan"> India </option>
                                <option value="Pakistan"> China </option>
                                <option value="Pakistan"> Iran </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <input type="submit" name="signup" value="SignUp" style="width: 120px; background-color: royalblue; border-radius: 3px; border: none; margin-left: 43%; padding:3pxpx;color: white; text-shadow: 1px 1px 1px blue; font-size: 15px; cursor:pointer;"> </td>
                    </tr>
                </table>
            </form>
        </fieldset>
<?php
    }
}

// $form = new SignUp;
// $form->setAction('#');
// $form->setMethod('POST');

// echo $form->getAction();
// echo $form->getMethod();
// echo $form->signUpForm();

?>