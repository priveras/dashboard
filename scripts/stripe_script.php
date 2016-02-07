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

mysqli_query($conn, "DELETE FROM stripe");


$row = 1;
if (($handle = fopen("./uploads/stripe.csv", "r")) !== FALSE) {
    $flag = true;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        if($flag) { $flag = false; continue; }

        // print_r($data);
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";   
        $row++;
        $blackpowder = $data;
        $dynamit = implode(";", $blackpowder);
        $pieces = explode(";", $dynamit);
        $col0 = $pieces[0];
        $col1 = $pieces[1];
        $col2 = $pieces[2];
        $col3 = str_replace(',','',$pieces[3]);
        $col4 = str_replace(',','',$pieces[4]);
        $col5 = $pieces[5];
        $col6 = str_replace(',','',$pieces[6]);
        $col7 = str_replace(',','',$pieces[7]);
        $col8 = str_replace(',','',$pieces[8]);
        $col9 = str_replace(',','',$pieces[9]);
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
        $col36 = str_replace(',','',$pieces[36]);
        $col37 = $pieces[37];
        $col38 = $pieces[38];
        $col39 = $pieces[39];
        $col40 = $pieces[40];
        $col41 = $pieces[41];
        $col42 = $pieces[42];
        $col43 = $pieces[43];
        $col44 = $pieces[44];
        $col45 = $pieces[45];
        $col46 = $pieces[46];
        $col47 = $pieces[47];


        $sql = "
            INSERT INTO `stripe` 
                (
                    `stripe_id`,
                    `description`,
                    `created`,
                    `amount`,
                    `amount_refunded`,
                    `currency`,
                    `converted_amount`,
                    `converted_amount_refunded`,
                    `fee`,
                    `tax`,
                    `converted_currency`,
                    `mode`,
                    `status`,
                    `statement_descriptor`,
                    `customer_id`,
                    `customer_description`,
                    `customer_email`,
                    `captured`,
                    `card_id`,
                    `card_last4`,
                    `card_brand`,
                    `card_funding`,
                    `card_exp_month`,
                    `card_exp_year`,
                    `card_name`,
                    `card_address_line1`,
                    `card_address_line2`,
                    `card_address_city`,
                    `card_address_state`,
                    `card_address_country`,
                    `card_address_zip`,
                    `card_issue_country`,
                    `card_fingerprint`,
                    `card_cvc_status`,
                    `card_avs_zip_status`,
                    `card_avs_line1_status`,
                    `disputed_amount`,
                    `dispute_status`,
                    `dispute_reason`,
                    `dispute_date`,
                    `dispute_evidence_due`,
                    `invoice_id`,
                    `payment_source_type`,
                    `destination`,
                    `transfer`,
                    `address_metadata`,
                    `email_metadata`,
                    `phone_metadata`
                ) 
            VALUES 
                (
                    '".utf8_encode($col0)."',
                    '".utf8_encode($col1)."',
                    '".utf8_encode($col2)."',
                    '".utf8_encode($col3)."',
                    '".utf8_encode($col4)."',
                    '".utf8_encode($col5)."',
                    '".utf8_encode($col6)."',
                    '".utf8_encode($col7)."',
                    '".utf8_encode($col8)."',
                    '".utf8_encode($col9)."',
                    '".utf8_encode($col10)."',
                    '".utf8_encode($col11)."',
                    '".utf8_encode($col12)."',
                    '".utf8_encode($col13)."',
                    '".utf8_encode($col14)."',
                    '".utf8_encode($col15)."',
                    '".utf8_encode($col16)."',
                    '".utf8_encode($col17)."',
                    '".utf8_encode($col18)."',
                    '".utf8_encode($col19)."',
                    '".utf8_encode($col20)."',
                    '".utf8_encode($col21)."',
                    '".utf8_encode($col22)."',
                    '".utf8_encode($col23)."',
                    '".utf8_encode($col24)."',
                    '".utf8_encode($col25)."',
                    '".utf8_encode($col26)."',
                    '".utf8_encode($col27)."',
                    '".utf8_encode($col28)."',
                    '".utf8_encode($col29)."',
                    '".utf8_encode($col30)."',
                    '".utf8_encode($col31)."',
                    '".utf8_encode($col32)."',
                    '".utf8_encode($col33)."',
                    '".utf8_encode($col34)."',
                    '".utf8_encode($col35)."',
                    '".utf8_encode($col36)."',
                    '".utf8_encode($col37)."',
                    '".utf8_encode($col38)."',
                    '".date("Y-m-d H:i:s",strtotime($col39))."',
                    '".utf8_encode($col40)."',
                    '".utf8_encode($col41)."',
                    '".utf8_encode($col42)."',
                    '".utf8_encode($col43)."',
                    '".utf8_encode($col44)."',
                    '".utf8_encode($col45)."',
                    '".utf8_encode($col46)."',
                    '".utf8_encode($col47)."'
                )
        ";
        // print $sql."\n";
        mysqli_query($conn, $sql);

        echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
        
    }
}

echo "Cool!";

mysqli_close($conn);
?>
