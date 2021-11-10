<?php
class ConnectionManager
{

    public function getConnection()
    {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);

        $conn = new mysqli($server, $username, $password, $db);

        //$port = '3306';

        // Create connection
//         $pdoObject = new PDO(
//             "mysql:host=$server;dbname=$db;port=$port",
//             $username,
//             $password);

//         $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // if fail, exception will be thrown

        // this dont work
        // $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);


        // Return connection object
        return $conn; // PDO object (containing MySQL connection info)
    }

}

?>
