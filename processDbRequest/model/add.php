<?php

require_once 'common.php';
require_once "./reviewDAO.php";

$status = false;
//var_dump($_POST);

if (isset($_POST['companyid']) && isset($_POST['jobtitle'])&& isset($_POST['schoolemail'])&& isset($_POST['reviewdesc'])&& isset($_POST['overallrating'])&& isset($_POST['criteria1'])&& isset($_POST['criteria2'])&& isset($_POST['criteria3'])&& isset($_POST['criteria4'])&& isset($_POST['criteria5'])&& isset($_POST['criteria6'])) {
    $companyid = $_POST['companyid'];
    $jobtitle = $_POST['jobtitle'];
    $schoolemail = $_POST['schoolemail'];
    $reviewdesc = $_POST['reviewdesc'];
    $overallrating = $_POST['overallrating'];
    $criteria1 = $_POST['criteria1'];
    $criteria2 = $_POST['criteria2'];
    $criteria3 = $_POST['criteria3'];
    $criteria4 = $_POST['criteria4'];
    $criteria5 = $_POST['criteria5'];
    $criteria6 = $_POST['criteria6'];
    echo $criteria6;

    $dao = new reviewDAO();
    $status = $dao->addreview($companyid, $jobtitle, $schoolemail, $reviewdesc, $overallrating,$criteria1,$criteria2, $criteria3, $criteria4, $criteria5, $criteria6);
}

?>
<html>
<body>
    <?php
if ($status) {
    echo "<h1>Insertion was successful</h1>";
    echo "Click <a href='display.php'>here</a> to return to Main Page";
} else {
    echo "<h1>Insertion was NOT successful</h1>";

}



// header("Location: Go to home html");
// exit;


?>
</body>
</html>