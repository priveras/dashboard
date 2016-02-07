<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "beerhouse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn, "DELETE FROM conekta");

$row = 1;
if (($handle = fopen("./uploads/conekta.csv", "r")) !== FALSE) {
    $flag = true;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        if($flag) { $flag = false; continue; }

        // print_r($data);
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";   
        $row++;
        $blackpowder = $data;
        // $dynamit = implode(";", $blackpowder);
        // $pieces = explode(";", $dynamit);

        $pieces = $data;
        
        
        foreach($pieces as $i=>$val){
            $pieces[$i] = str_replace("'", "", $val);
        }
        
        $col0 = $pieces[0];
        $col1 = $pieces[1];
        $col2 = $pieces[2];
        $col3 = $pieces[3];
        $col4 = $pieces[4];
        $col5 = $pieces[5];
        $col6 = $pieces[6];
        $col7 = $pieces[7];
        $col8 = $pieces[8];
        $col9 = $pieces[9];
        $col10 = $pieces[10];
        $col11 = $pieces[11];
        $col12 = $pieces[12];
        $col13 = $pieces[13];
        $col14 = $pieces[14];
        $col15 = $pieces[15];
        $col16 = $pieces[16];
        $col17 = $pieces[17];
        $col18 = $pieces[18];
        $col19 = $pieces[19];
        $col20 = $pieces[20];
        $col21 = $pieces[21];
        $col22 = $pieces[22];
        $col23 = $pieces[23];
        $col24 = $pieces[24];
        $col25 = $pieces[25];
        $col26 = $pieces[26];
        $col27 = $pieces[27];
        $col28 = $pieces[28];
        $col29 = $pieces[29];
        $col30 = $pieces[30];
        $col31 = $pieces[31];
        $col32 = $pieces[32];
        $col33 = $pieces[33];
        $col34 = $pieces[34];
        $col35 = $pieces[35];
        $col36 = $pieces[36];
        $col37 = $pieces[37];
        $col38 = $pieces[38];
        $col39 = $pieces[39];
        $col40 = $pieces[40];
        $col41 = $pieces[41];
        // $col42 = $pieces[42];
        $col43 = $pieces[43];


        $sql = "
            INSERT INTO `conekta` 
                (
                    `fecha_creacion`,
                    `fecha_pago`,
                    `id_cargo`,
                    `tipo_transaccion`,
                    `metodo_pago`,
                    `estatus`,
                    `mensaje_error`,
                    `codigo_falla`,
                    `codigo_antifraude`,
                    `monto_cargo`,
                    `comision`,
                    `monto_deposito`,
                    `moneda`,
                    `cantidad_original`,
                    `moneda_original`,
                    `tipo_cambio`,
                    `id_referencia`,
                    `descripcion`,
                    `nombre`,
                    `email`,
                    `telefono`,
                    `ip`,
                    `nombre_tarjetahabiente`,
                    `numero_tarjeta`,
                    `banco`,
                    `marca_tarjeta`,
                    `pais_tarjeta`,
                    `tipo`,
                    `tipo_tarjeta`,
                    `pago_efectivo`,
                    `sucursal`,
                    `ip_ciudad`,
                    `id_deposito`,
                    `referencia_deposito`,
                    `fecha_deposito`,
                    `meses_sin_intereses`,
                    `id_transaccion`,
                    `id_recibo`,
                    `livemode`,
                    `checkout_id`,
                    `decision_antifraude`,
                    `decision_bancaria`,
                    `reglas_antifraude_disparadas`,
                    `direccion_de_envio`
                ) 
            VALUES 
                (
                    '".date("Y-m-d H:i:s",strtotime($col0))."',
                    '".date("Y-m-d H:i:s",strtotime($col1))."',
                    '".$col2."',
                    '".$col3."',
                    '".$col4."',
                    '".$col5."',
                    '".$col6."',
                    '".$col7."',
                    '".$col8."',
                    '".$col9."',
                    '".$col10."',
                    '".$col11."',
                    '".$col12."',
                    '".$col13."',
                    '".$col14."',
                    '".$col15."',
                    '".$col16."',
                    '".$col17."',
                    '".$col18."',
                    '".$col19."',
                    '".$col20."',
                    '".$col21."',
                    '".$col22."',
                    '".$col23."',
                    '".$col24."',
                    '".$col25."',
                    '".$col26."',
                    '".$col27."',
                    '".$col28."',
                    '".$col29."',
                    '".$col30."',
                    '".$col31."',
                    '".$col32."',
                    '".$col33."',
                    '".$col34."',
                    '".$col35."',
                    '".$col36."',
                    '".$col37."',
                    '".$col38."',
                    '".$col39."',
                    '".$col40."',
                    '".$col41."',
                    '".$col42."',
                    '".$col43."'
                )
        ";
        // print $sql;
        // die();

        if( !empty($col5) ){
            mysqli_query($conn, $sql);
            echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
        }        
    }
}

echo "Cool!";

mysqli_close($conn);
?>
