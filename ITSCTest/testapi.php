<?php
$username    = "user16";
$password    = "VVfuk4MMjwxsopt5F74V";

  // Parameters
$tpm_base_url = 'https://dummy-api.cm.edu/employees'; // ending with /


  // Request headers
  $headers = array(	
    'Content-Type: application/json; charset=utf-8'
  );

  // Request
  $ch = curl_init($tpm_base_url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, TRUE); // Includes the header in the output
  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password); // HTTP Basic Authentication
  $result = curl_exec($ch);	
  $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);	
  curl_close($ch);

  // Get headers and body
  list($headers, $body) = explode("\r\n\r\n", $result, 2);
  $arr_headers = explode("\r\n", $headers);
  $arr_body = json_decode($body, TRUE);

  // Show status and array of passwords
  echo 'Status: ' . $status . '<br/>';
  print_r($arr_body);
?>