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

        $dbanfang = 'mysql:host=' . $server . ';dbname=' . $db;
        $pdoObject = new PDO($dbanfang, $username, $password);

        //$port = '3306';

        // Create connection
//         $pdoObject = new PDO(
//             "mysql:host=$server;dbname=$db;port=$port",
//             $username,
//             $password);

         $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // if fail, exception will be thrown

        // this dont work
        // $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);


        // Return connection object
        return $pdoObject; // PDO object (containing MySQL connection info)
    }

}

?>
