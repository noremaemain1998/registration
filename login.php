<?php

$page_title = "Register";



if($_POST){

    
    $database = new Database();
    $db = $database->getConnection();

    $user->firstname=$_POST['firstname'];
    $user->lastname=$_POST['lastname'];
    $user->email=$_POST['email'];
     $user->email=$_POST['password'];

    // create the user
if($user->create()){

    echo "<div class='alert alert-info'>";
        echo "Successfully registered. <a href='{$home_url}login'>Please login</a>.";
    echo "</div>";
    }else{
    echo "<div class='alert alert-danger' role='alert'>Unable to register. Please try again.</div>";
}
}
?>
<center>
<form action='register.php' method='post' id='register'>
 <h1>Register</h1>
    <table class='table table-responsive'>

        <tr>
            <td class='width-30-percent'>Firstname</td>
            <td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>

        <tr>
            <td>Lastname</td>
            <td><input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
 <tr>
            <td>Email</td>
            <td><input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>

         <tr>
            <td>password</td>
            <td><input type='password' name='password' class='form-control' required value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
        <td></td>
            <td>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span> Register
                </button>
            </td>
        </tr>

    </table>
</form>
</center>