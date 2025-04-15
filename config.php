<!-- <?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exitsurvey";
    
    
    $con = new mysqli($servername, $username, $password);
    
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
    
    $result = $con->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'");
?> -->