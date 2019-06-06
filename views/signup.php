<?php
/**
 * Created by PhpStorm.
 * User: vito
 * Date: 6/5/2019
 * Time: 6:35 PM
 */
if(isset($_SESSION['SuccesSignup'])){
    if($_SESSION['SuccesSignup']==true){
        echo "<h3 class=\"d-flex justify-content-center\" style='color: green'>You Have Registered Successfully</h3><hr>";
        unset($_SESSION['SuccesSignup']);
    }
}
?>
<div class="container">
    <form method="post" action="/submit-signup" class="form-horizontal" role="form">
                                    <h2>Registration</h2>
        <div class="form-group">
            <label class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input name="fullname" class="form-control" placeholder="Full name" type="text">
                <?php
                if(isset($_SESSION['errName'])){
                if($_SESSION['errName']==true){
                echo "<p style='color: red'>Full Name Can't be <b>Empty</b></p>";
                unset($_SESSION['errName']);
                }
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input name="email" class="form-control" placeholder="Email address" type="email">
                <?php
                if(isset($_SESSION['errEmail'])){
                    if($_SESSION['errEmail']==true){
                        echo "<p style='color: red'>Email is Already exists</p>";
                        unset($_SESSION['errEmail']);
                    }
                }elseif(isset($_SESSION['errEmaillen'])){
                    if($_SESSION['errEmaillen']==true){
                        echo "<p style='color: red'>E-mail Can't be <b>Empty</b></p>";
                        unset($_SESSION['errEmaillen']);
                    }
                }
                ?>
            </div>

        </div>
        <div class="form-group">
            <label  class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input name="password" class="form-control" placeholder="Create password" type="password">
                <?php
                if(isset($_SESSION['errPasslen'])){
                if($_SESSION['errPasslen']==true){
                echo "<p style='color:red;'>Password Should be <b>at least 5 Characters</b> Long</p>";
                unset($_SESSION['errPasslen']);
                }
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-9">
                <input name="repeat" class="form-control" placeholder="Repeat password" type="password">
                <?php
                    if(isset($_SESSION['errPass'])){
                        if($_SESSION['errPass']==true){
                            echo "<p style='color: red'>Password Doesn't Match</p>";
                            unset($_SESSION['errPass']);
                        }
                    }
                    ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>

                <p class="text-center">Have an account? <a href="/login">Log In</a> </p>
            </form>

    </div>

</div>
