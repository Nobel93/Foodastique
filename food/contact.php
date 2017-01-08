<!DOCTYPE html>
<?php include("sessionTest.php");?>
<head>
    //Include de lien du head
    <?php include("head.php");?>
</head>
<body>
    <!-- banner -->
    <div class="banner about-bg">
        <!--header-->

        <?php include("topNav.php");?>

        <!--//header-->
        <div class="about-heading">
            <h2>Contact US</h2>
        </div>
    </div>
    <!-- //banner -->

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="map">
                <h4>How to find us :</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3771907.975236311!2d-2.09480472072984!3d39.07355564363949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436857347604" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>

            <div class="address">
                <div class="col-md-4 address-grids">
                    <h4>Address :</h4>
                    <ul>
                        <li><p>Eiusmod Tempor inc<br>
                            St Dolore Place,<br>
                            Kingsport 56777</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 address-grids">
                    <h4>Phone :</h4>
                    <p>+2 123 456 789</p>
                    <p>+2 987 654 321</p>
                </div>
                <div class="col-md-4 address-grids">
                    <h4>Email :</h4>
                    <p><a href="mailto:example@email.com">mail@example.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="contact-infom">
                <h4>Miscellaneous Information:</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.It was popularised in the 1960s with the release of Letraset
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>	
            <div class="contact-form">
                <h4>Contact Form</h4>
                <form action="#" method="post">
                    <input type="text" placeholder="Name" required="">
                    <input type="email" placeholder="Email" required="">
                    <input type="text" placeholder="Telephone" required="">
                    <textarea placeholder="Message" required=""></textarea>
                    <button class="btn1">Submit</button>
                </form>
            </div>	
        </div>
    </div>
    <!-- //contact -->
    <!-- footer -->

    <?php include("footer.php");?>

    <!-- //footer -->
    <!-- agileits-copyright -->
    <div class="agileits-copyright">
        <div class="container">
            <p>© 2016 Food Corner. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
    <!-- //agileits-copyright -->
</body>	
</html>