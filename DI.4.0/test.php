<?php


 $url = 'https://requestb.in/wmpgakwm';
 $data = array("name" => "Niels", "email" => "nmlabc@iba.dk");
 $chandle = curl_init($url);

 curl_setopt($chandle, CURLOPT_POST, 1);
 curl_setopt($chandle, CURLOPT_POSTFIELDS, json_encode($data));
 curl_setopt($chandle, CURLOPT_HTTPHEADER,
                             array('Content-Type: application/json'));
 curl_setopt($chandle, CURLOPT_RETURNTRANSFER, true);

 $result = curl_exec($chandle);
 curl_close($chandle);
 if ($result === 'ok') {
     printf('<h3>%s</h3>', 'The request was sent successfully');
 } else {
     printf('<h3>%s</h3>', 'You failed miserably');
 }

