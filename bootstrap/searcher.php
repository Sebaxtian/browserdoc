<?php
    // Datos de consulta
    $consulta = $_POST["consulta"];

    $exito = false;
    $msgestado = "Inicio Searcher";
    $jsonbusqueda = null;

    // Verifica si existen datos recibidos
	if(isset($consulta)) {
        $msgestado = "Consulta Recibida";

        $output = shell_exec('/usr/local/jdk/jdk1.8.0_92/bin/java -jar /var/www/html/browserdoc/bootstrap/bin/Searcher/BrowserDocSearcher.jar /var/www/html/BrowserDoc/index/ "'.$consulta.'" 2>&1');
        $jsonbusqueda = json_decode($output);

        $exito = true;
    } else {
        $msgestado = "No se recibe consulta";
        $exito = false;
    }

    $msgrespuesta = array('exito' => $exito, 'msgestado' => $msgestado, 'busqueda' => $jsonbusqueda);

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($msgrespuesta);
    exit();
?>
