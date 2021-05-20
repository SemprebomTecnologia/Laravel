<!DOCTYPE html>
<html lang="en">

<title>Camargo Advocacia</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




<style>
html,
body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Roboto", sans-serif;
}



@media only screen and (max-width:200px) {

    .w3-sidebar.w3-collapse {
        display: none !important;
    }

    /* .w3-top,
    .w3-bottom {
        position: relative;
        width: 100%;
        z-index: 1;
    } */

}

@media only screen and (min-width:993px) {

    .w3-sidebar.w3-collapse {
        display: none !important;
    }

}

.w3-top,
.w3-bottom {
    position: relative;
    width: 100%;
    z-index: 1;
}

.w3-sidebar {
    z-index: 3;
    width: 250px;
    top: 43px;
    bottom: 0;
    height: inherit;

}
</style>

<body>

    <?php include_once('layouts/navbar.php'); ?>



    <?php include_once('layouts/sidebar.php'); ?>




    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay"></div>

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main" style="margin-left:150px;  ; margin-right: 150px; background-color: rebeccapurple;">

        <div class="w3-row w3-padding-64 d-flex justify-content-center">        
            <div class="w3-twothird w3-container d-flex justify-content-center">
                <div class="w3-half w3-blue-grey w3-container d-flex justify-content-center" style="height:100%">

                    <div class="w3-padding-64 w3-center">
                        <h1>About Me</h1>
                        <img src="/w3images/avatar3.png" class="w3-margin w3-circle" alt="Person" style="width:50%">
                        <div class="w3-left-align w3-padding-large">
                            <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida
                                diam non
                                fringilla.</p>
                            <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida
                                diam non
                                fringilla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- END MAIN -->
    </div>

    <?php include_once('layouts/footer.php'); ?>


    <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    //Toggle between showing and hiding the sidebar, and add overlay effect

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    //Close the sidebar with the close button

    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
    </script>

</body>

</html>