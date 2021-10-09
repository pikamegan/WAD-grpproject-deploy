<?php 
spl_autoload_register(
    function($class){
        require_once "model/$class.php";
    }
);
?>

<?php

// to be changed
header("Access-Control-Allow-Origin: *");

if(isset($_GET['request'])) {

    $requstName = $_GET['request'];

    if($requstName == 'getAllCompanies') {
        // localhost ... ... processDbRequest/processCompanyRequest.php?request=getAllCompanies
        // see tmpOutputProcessProcessComapnyRequest.json
        // json output to be used in front end, the json file to be deleted when deploying
        $dao = new CompanyDAO();
        $allCompanies = $dao->retrieveAll();
        echo json_encode($allCompanies);
    }
}
?>