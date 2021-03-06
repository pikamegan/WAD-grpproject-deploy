<?php
class ConnectionManager
{
    

    public function getConnection()
    {
        $url = getenv('JAWSDB_URL');
        $dbparts = parse_url($url);

        $hostname = $dbparts['host'];
        $username = $dbparts['user'];
        $password = $dbparts['pass'];
        $database = ltrim($dbparts['path'],'/');
        
        // for cleardb
        //$dbanfang = 'mysql:host=' . $server . ';dbname=' . $db;
        //$pdoObject = new PDO($dbanfang, $username, $password);
        
        try {
            $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

        //$port = '3306';

        // Create connection
//         $pdoObject = new PDO(
//             "mysql:host=$server;dbname=$db;port=$port",
//             $username,
//             $password);

         //$pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // if fail, exception will be thrown

        // this dont work
        // $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);


        // Return connection object
        //return $pdoObject; // PDO object (containing MySQL connection info)
    }

}

?>
