<!DOCTYPE html>
<!-- Pour l'enregistrement -->
<?php 
if(isset($_POST['submit'])){
    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));
    $repeatpassword = htmlentities(trim($_POST['repeatpassword']));
    if($email&&$password&&$repeatpassword){
        if($password==$repeatpassword){
            $_connect= ('localhost','root')or die('Error');
            mysql_select_db('phplogin');
            $querry = mysql_query("INSERT INTO users VALUES(,'$email','$password')");
            die("Inscription términée <a href='login.php'>connectez</a> vous");

        }else echo"Les mots de passe ne sont pas indentique";
    }else echo"Veuillez remplir les champs";
}
?>
<!-- Fin Enregistrement -->
<html>
    <head>
        <?php include("head.php");?>
    </head>
    <body>

        <!-- //Regist -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" method="POST" action="register.php">
                        <h2 class="text-center">S'enregister à l'espace membre M2L</h2>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                        </div>
                        <div class="form-group">
                            <input type="password" name="repeatpassword" class="form-control input-lg" placeholder="repeat Password" tabindex="5" >
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-3 col-md-6"><input type="submit" Value="s'inscrire " name="submit" class="btn btn-success btn-block btn-lg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </br></br></br></br></br></br></br></br></br></br>
<!-- regist -->
</body>	
</html>