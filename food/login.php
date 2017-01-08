<!DOCTYPE html>

<!-- Pour la connexion -->
<?php
session_start();
try{
    $con = new PDO ("mysql:host=localhost;dbname=food","root","");
    //creation d'un compte user (non utilisé pour le moment)
    if(isset($_POST['signup'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $insert = $con->prepare("INSERT INTO users (email,pass)  values(:email,:pass) ");
        $insert->bindParam(':email',$email);
        $insert->bindParam(':pass',$pass);
        $insert->execute();
    //récupération des données utilisateur dans la bdd
    }elseif(isset($_POST['signin'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $select = $con->prepare("SELECT * FROM users WHERE email='$email' and pass='$pass'");
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $select->execute();
        $data=$select->fetch();
        if($data['email']!=$email and $data['pass']!=$pass)
        {
            echo "invalid email or pass";
        }
        elseif($data['email']==$email and $data['pass']==$pass)
        {
            $_SESSION['email']=$data['email'];
            $_SESSION['name']=$data['name'];
            header("location:index.php"); 
        }
    }
}
catch(PDOException $e)
{
    echo "error".$e->getMessage();
}
?>
<!-- fin connexion -->
<html>
    <head>
        <?php include("head.php");?>
    </head>
    <body>

        <!-- //LogIN -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" method="post" action="login.php">
                        <h2 class="text-center">Connexion à l'espace membre M2L</h2>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control input-lg" placeholder="Password" tabindex="5">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-3 col-md-6">
                                <input type="submit" Value="Se connecter" name="signin" class="btn btn-success btn-block btn-lg">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </br></br></br></br></br></br></br></br></br></br>
<!-- logIN -->


</body>	
</html>