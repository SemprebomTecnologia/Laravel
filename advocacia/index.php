<!DOCTYPE html>
<html lang="en">

<title>Camargo Advocacia</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">-->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

<link rel="stylesheet" type="text/css" href="css/html.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/whatsapp.css">


<!--JS Slides -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- JS Navbar Responsive -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<body>

    <?php include_once('layouts/navbar.php'); ?>



    <div class="splide">
        <div class="splide__track d-flex justify-content-center">
            <ul class="splide__list d-flex justify-content-center">

                <div class="splide__slide d-flex justify-content-center">
                    <img src="imgs\slider1.jpg" class="img-fluid" alt="...">
                </div>

                <div class="splide__slide d-flex justify-content-center">
                    <img src="imgs\slider2.jpg" class="img-fluid" alt="...">
                </div>

                <div class="splide__slide d-flex justify-content-center">
                    <img src="imgs\slider3.jpg" class="img-fluid" alt="...">
                </div>

                <div class="splide__slide d-flex justify-content-center">
                    <img src="imgs\slider1.jpg" class="img-fluid" alt="...">
                </div>

            </ul>
        </div>
    </div>






    <?php include_once('layouts/footer.php'); ?>



    <script>
    //  https://splidejs.com/getting-started/

    // seletores 
    var elms = document.getElementsByClassName('splide');
    for (var i = 0, len = elms.length; i < len; i++) {
        new Splide(elms[i]).mount();
    }

    new Splide('.splide').mount();

    document.addEventListener('DOMContentLoaded', function() {
        new Splide('.splide').mount();
    });

    // ---------Responsive-navbar-active-animation-----------
    function test() {
        var tabsNewAnim = $('#navbarSupportedContent');
        var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
        var activeItemNewAnim = tabsNewAnim.find('.active');
        var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
        var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
        var itemPosNewAnimTop = activeItemNewAnim.position();
        var itemPosNewAnimLeft = activeItemNewAnim.position();

        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });

        $("#navbarSupportedContent").on("click", "li", function(e) {
            $('#navbarSupportedContent ul li').removeClass("active");
            $(this).addClass('active');
            var activeWidthNewAnimHeight = $(this).innerHeight();
            var activeWidthNewAnimWidth = $(this).innerWidth();
            var itemPosNewAnimTop = $(this).position();
            var itemPosNewAnimLeft = $(this).position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
        });
    }
    $(document).ready(function() {
        setTimeout(function() {
            test();
        });
    });
    $(window).on('resize', function() {
        setTimeout(function() {
            test();
        }, 500);
    });
    $(".navbar-toggler").click(function() {
        setTimeout(function() {
            test();
        });
    });
    </script>






</body>

</html>