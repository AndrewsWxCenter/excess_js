<?php

//Specify Request Parameters
//$stid = "KRDU";
//$within = "1440";
//$token = "b0b6f4798ee945bcab5c743a02626b4c";

//Construct the query string
//$apiString = "&token={$token}&within={$within}&stid={$stid}";
$apiPull = file_get_contents("https://api.synopticdata.com/v2/stations/nearesttime?&token=b0b6f4798ee945bcab5c743a02626b4c&within=1440&stid=KRDU&timeformat=%25Y%25m%25d&obtimezone=local&units=english&output=json");

//Get the raw JSON object and convert to a PHP variable
//$response = file_get_contents("https://api.synopticdata.com/v2/stations/nearesttime?{$apiString}");
//$data = json_decode($response); 
//print_r($data);

// convert object => json
//$json = json_encode($apiPull);

// convert json => object
$data = json_decode($apiPull,TRUE);

    //$data = json_decode($apiPull,TRUE);

    // Precipitation
     
    //$KRDU = $data->UNITS;
     
    //print_r(array_keys($data));
    //print_r(array_values($data));
     
    //$KRDU = print_r($data[STATION][0][OBSERVATIONS][precip_accum_24_hour_value_1][value]);
     
    echo "<br>";
    echo "KRDU precip: "; print_r($data[STATION][0][OBSERVATIONS][precip_accum_24_hour_value_1][value]);
    echo "<br>";
    
?>
