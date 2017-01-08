<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php");?>
        <script>
            $(document).ready(function() { 
                $("#owl-demo").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    autoPlay:true,
                    items : 4,
                    itemsDesktop : [640,5],
                    itemsDesktopSmall : [414,4]

                });

            }); 
        </script>
    </head>
    <body>
        <!-- banner -->
        <div class="banner">
            <!--header-->

            <?php include("topNav.php");?>

            <?php
            foreach($_POST['plat'] as $value)
            {
                echo "Votre recette est $value ";
            }
            ?>

            <?php
            foreach($_POST['nombre'] as $value)
            {
                echo "elle est faite pour $value. </br>";
            }
            ?>

            <?php 

            foreach($_POST['difficulte'] as $value)
            {
                echo "Cette recette est de difficulté $value d'après l'avis de la personne l'ayant postée.";
            }
            ?>


            <?php
            /*
        //Déclaration des variables
        $radio1= (isset($_POST["radio1"])) ? $_POST ["radio1"] : " ";
        $radio2= (isset($_POST["radio2"])) ? $_POST ["radio2"] : " ";
        $personnes= (isset($_POST["personnes"])) ? $_POST ["personnes"] : " ";


        //Connection à la db
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=foodastique;charset=utf8', 'root', '');
        }
        //Attraper les erreurs possibles
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

        //Afficher une recette

        //var radio1 = $("input[name=radio1]:checked").val();
        //alert (radio1);



        /*echo "<table border=\"1\" >";
        echo "<caption><b>Informations de la recette</b></caption>";
        foreach($_POST['radio1'] as $value){
            echo "<tr> <td> $value : </td> <td>"."</td></tr>";
        }
        echo "</table>";
        echo "<table border=\"1\" >";
        */

            ?>
            <!-- footer -->

            <?php include("footer.php");?>

            <!-- //footer -->
            <!-- agileits-copyright -->
            <div class="agileits-copyright">
                <div class="container">
                    <p>© 2016 FoodAstique. Tous droits réservés</a></p>
        </div>
        </div>
    <!-- //agileits-copyright -->
    <script src="js/owl.carousel.js"></script>  
    </body>	
</html>
