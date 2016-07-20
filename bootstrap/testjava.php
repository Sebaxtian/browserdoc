<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    echo "Prueba Ejecutar Programa Java Desde PHP<br>";

    /*
    $output = shell_exec("/usr/local/jdk/jdk1.8.0_92/bin/java -version 2>&1");
    echo $output;
    */

    $output = shell_exec('/usr/local/jdk/jdk1.8.0_92/bin/java -jar /var/www/html/browserdoc/bootstrap/bin/Searcher/BrowserDocSearcher.jar /home/sebaxtian/Descargas/BrowserDoc/index/ "oswaldo solarte" 2>&1');
    echo $output;
    echo "<br><br>";
    var_dump(json_decode($output));

?>
