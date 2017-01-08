<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <!--header-->
        <div class="header">
            <div class="logo">
                <h1><a href="index.html">FoodAstique</a></h1>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="images/menu.png" alt=""/></span>
                <ul>
                    <li><a class="active" href="index.html">Accueil</a></li>					
                    <li><a href="menu.php">Recettes</a></li>
                    <li><a href="propmenu.php">Proposition de Menu</a></li>
                    <li><a href="blog.php">Connexion</a></li>
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
        <!--//header-->
    </body>
</html>