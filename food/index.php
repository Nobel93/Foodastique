<!DOCTYPE html>
<?php include("sessionTest.php");?>
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
            <!--//header-->
            <div class="banner-slider">
                <div class="container">
                    <div class="slider">
                        <div class="callbacks_container">
                            <div class ></div>
                            <!-- search -->
                            <div class="col-md-6.offset-md-3 in-gp-tb">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Que recherchez-vous ?">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Rechercher !</button>
                                    </span>
                                </div>
                            </div>
                            <!-- //search -->
                            <ul class="rslides" id="slider4">
                                <li>
                                    <div class="banner-info">
                                        <img src="images/teemo_mignon.jpg" width="80%"/>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-info">
                                        <img src="images/Raclette_du_Valais_AOC_5.jpg" width="80%"/>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-info">
                                        <img src="images/doge.jpg" width="40%"/>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <script src="js/responsiveslides.min.js"></script>
                        <script>
// You can also use "$(window).load(function() {"
$(function () {
    // Slideshow 4
    $("#slider4").responsiveSlides({
        auto: true,
        pager:true,
        nav:false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
            $('.events').append("<li>after event fired.</li>");
        }
    });
});
                        </script>
                        <!--banner Slider starts Here-->
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
        <!-- special -->
        <div class="special">
            <div class="container">
                <div class="services-info">
                    <h3>Bon appetit !</h3>
                </div>
                <div class="special-grids">
                    <div class="col-md-4 w3ls-special-img">
                        <div class="wpf-demo-6">
                            <figcaption class="view-caption">
                                <h4>Entrée</h4> 
                                <a href="menu.html">Menu</a>
                            </figcaption>
                        </div>
                    </div>
                    <div class="col-md-4 w3ls-special-img wthree-img">
                        <div class="wpf-demo-6">
                            <figcaption class="view-caption">
                                <h4>Plats</h4> 
                                <a href="menu.html">Menu</a>
                            </figcaption>
                        </div>
                    </div>
                    <div class="col-md-4 w3ls-special-img wthree-img2">
                        <div class="wpf-demo-6">
                            <figcaption class="view-caption">
                                <h4>Desserts</h4> 
                                <a href="menu.html">Menu</a>
                            </figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //special -->
        <!-- services -->
        <div class="services">
            <div class="container">
                <div class="services-info">
                    <h3>Our Services</h3>
                    <p>Pellentesque ultrices tincidunt risus in pellentesque. Morbi facilisis consectetur nunc in luctus.</p>
                </div>
            </div>
            <div class="services-grids">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s1.jpg" alt="" />
                            <div class="services-grid-caption"> 
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Justo congue</h4>
                                <p>Fusce laoreet</p>
                            </div>
                        </div>	
                    </div>
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s2.jpg" alt="" />
                            <div class="services-grid-caption"> 
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Nulla facilisi</h4>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>	
                    </div>
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s3.jpg" alt="" />
                            <div class="services-grid-caption"> 
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Aenean sed</h4>
                                <p>Nunc tincidunt</p>
                            </div>
                        </div>	
                    </div>
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s4.jpg" alt="" />
                            <div class="services-grid-caption"> 
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Justo congue</h4>
                                <p>Phasellus magna</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s5.jpg" alt="" />
                            <div class="services-grid-caption"> 
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Justo congue</h4>
                                <p>Fusce laoreet</p>
                            </div>
                        </div>	
                    </div>
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s6.jpg" alt="" />
                            <div class="services-grid-caption"> 
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Nulla facilisi</h4>
                                <p>Lorem ipsum</p>
                            </div>
                        </div>	
                    </div>
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s7.jpg" alt="" />
                            <div class="services-grid-caption"> 
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Aenean sed</h4>
                                <p>Nunc tincidunt</p>
                            </div>
                        </div>	
                    </div>
                    <div class="item">
                        <div class="services-grid-info">
                            <img src="images/s1.jpg" alt="" />
                            <div class="services-grid-caption">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <h4>Justo congue</h4>
                                <p>Phasellus magna</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //services -->
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