<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@next"></script>

    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../js/actions.js" defer></script>
    <title>Help and FAQ</title>
</head>

<body onload="loadFAQ()">
    <!-- copy this part: start-->
    <div class="navbarTemplate">
        <div id="smallNavBar">
            <?php
            session_start();

            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo "<navigation-bar-small-login></navigation-bar-small-login>";
            } else {
                echo "<navigation-bar-small-logout></navigation-bar-small-logout>";
            }
            ?>
        </div>
        <div id="bigNavBar">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $url = $_SESSION['piclink'];
                echo "<navigation-bar-big-login>
                    <img class='img-fluid m-0' src= '$url' style='width: 60px; height: 60px;'>
                    </navigation-bar-big-login>";
            } else {
                echo "<navigation-bar-big-logout></navigation-bar-big-logout>";
            }
            ?>
        </div>
    </div>
    <!-- copy this part: end -->

    <div class="p-5 mb-4" style="background-color: #EAF5FF;">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col col-12 col-lg-4">
                    <h1 class="pageTitle mt-5" style="text-align:left">How can we help you?</h1>
                </div>
                <div class="col col-12 col-lg-8">
                    <div class="d-flex bd-highlight mt-5 py-3 justify-content-left" style="border-bottom: 2px solid #4E6AF0;">
                        <img src="../IMG/search.svg" class="d-none d-sm-block pe-1"></img>
                        <h2 class="mt-3 ps-2" style="text-align:left">Can't find what you're looking for? <a href="feedback.php" class="text-decoration-none">Ask us here</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-3 justify-content-center" id="questionBox">
        </div>
    </div>

    <div class="footerComp">
        <intern-footer home="home.php" abt="about.php" career="career.php" help="help.php" feedback="feedback.php" @gotohome="goHome"></intern-footer>
    </div>


</body>

</html>