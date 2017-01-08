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

            <form action="traitement.php" method="post"> 
                Votre recette est: </br>
            <input type="radio" name="plat[]" value=" une entrée"/> Une entrée </br>    
        <input type="radio" name="plat[]" value=" un plat"/> Un plat </br>
    <input type="radio" name="plat[]" value=" un dessert"/> Un dessert </br>

Votre recette est faite pour: </br>
<input type="radio" name="nombre[]" value="moins de 3 personnes"/> Moins de 3 personnes </br>
<input type="radio" name="nombre[]" value="plus de 3 personnes"/> Plus de 3 personnes </br> 

Choisissez la difficulté de votre recette: </br>
<input type="radio" name="difficulte[]" value="facile" /> Facile<br>
<input type="radio" name="difficulte[]" value="moyenne" /> Moyenne<br>
<input type="radio" name="difficulte[]" value="difficile" /> Difficlie<br>
<input type='submit' value="Envoyer" />
</form>  
</div>     


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