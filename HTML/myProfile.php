<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../js/actions.js" defer></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@next"></script>
    <title>Your Profile</title>
</head>

<body>
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

    <h1 class="pageTitle my-5">Your Profile</h1>
    <div class="container-fluid m-5 profile">
        <div class="row">
            <div class="col col-sm-12 col-lg-6">
                <div class="row personProfile shadow rounded rounded-3 container mb-3" style="width: 100%;">
                    <span style="position:absolute;right:0;top:-15px"><i class="bi bi-pencil fill-secondary"></i></span>
                    <div class="col col-sm-12 col-md-12 col-lg-6 text-center align-middle">
                        <!-- How to vertically align image? -->
                        <img src="../IMG/avatar3.svg" style="width: 75%; height: 75%; border-radius: 50%;" class="m-3">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <span style="position:absolute;right:0;top:-15px"></span>
                        <div class="m-5">
                            <h3 class="text-start my-5">Name</h3> <!-- How to make this centered when small? -->
                            <p>Gender: <span id="profileGender"></span></p>
                            <p>Email: <span id="profileEmailAddress"></span></p>
                            <p>Password: <span id="profilePW"></span></p>
                        </div>

                    </div>
                </div>

                <div class="row profile">
                    <div class="mb-xs-3 mx-1 col mb-sm-3 col col-sm-12 col-lg-6 shadow rounded-2 container" style="width: 45%;">
                        <img src="../IMG/SMU_Campus.jpeg" class="d-block align-content-center m-3" style="width: 90%;"></img> <!-- How to align image horizontally -->
                        <p class="text-center">Singapore Management University, <br> Singapore</p>
                    </div>

                    <div class="mb-xs-3 mx-1 mb-sm-3 col col-sm-12 col-lg-6 m shadow rounded-2 align-middle text-center" style="width: 45%;">
                        <h1 class="display-1">3</h1>
                        <p>Reviews</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="footerComp">
        <intern-footer home="home.php" abt="about.php" career="career.php" help="help.php" feedback="feedback.php" @gotohome="goHome"></intern-footer>
    </div>
    <script>
        Vue.createApp({
            data() {
                return {
                    name: ''
                }
            },
            created() { // created is a hook that executes as soon as Vue instance is created

            }
        }).mount('.profile')
    </script>


</body>

</html>