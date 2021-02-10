<?php 
$filename = time(); 
$cmd1 = "sudo /var/www/html/openvpn-install/add_client.sh $filename";
$info = shell_exec($cmd1);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> get config file</title>
    </head>
    <body>
        <center>
            <?php
                if (strpos($info, "The configuration file has been written to") === false) {
                    echo "<p> config file can't be created !!!</p>";
                } else {
                    echo "<p> config file <strong>{$filename}.ovpn</strong> has been created, please download it. </p>";
                }
            ?>
            <a href=<?php echo "./clients/" . $filename . ".ovpn"?>><button> download </button></a>
            <br>
            <a href="./index.php"><button> back to index </button></a>
        </center>
    </body>
</html>