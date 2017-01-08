<div class="header">
    <div class="logo">
        <h1><a href="index.php">FoodAstique</a></h1>
    </div>
    <div class="top-nav">
        <span class="menu"><img src="images/menu.png" alt=""/></span>
        <ul>
            <li><a class="active" href="index.php">Accueil</a></li>					
            <li><a href="menu.php">Recettes</a></li>
            <li><a href="propmenu.php">Proposition de Menu</a></li>
            <li><a href="logout.php">deconnexion</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">A Propos</a></li>
        </ul>
        <!-- script-for-menu -->
        <script>					
        $("span.menu").click(function(){
            $(".top-nav ul").slideToggle("slow" , function(){
            });
        });
        </script>
        <!-- script-for-menu -->
    </div>
    <div class="clearfix"> </div>
</div>

