<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://auth.pingone.com/323fb8a2-7ba4-459e-a605-27a93e5cfb42/as/userinfo",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer eyJraWQiOiJkZWZhdWx0IiwiYWxnIjoiUlMyNTYifQ.eyJhdWQiOiJodHRwczpcL1wvYXBpLnBpbmdvbmUuY29tIiwic3ViIjoiZWRmODkxNzYtYjViMi00YmEzLTkzM2ItZTY4MmEyYTAzMzI1Iiwib3JnIjoiZDQzZTdkMjctMTZkNC00Nzg3LWEyYTctZDg3NzE2Y2YxODM1Iiwic2NvcGUiOiJhZGRyZXNzIG9wZW5pZCBwcm9maWxlIGVtYWlsIiwiaXNzIjoiaHR0cHM6XC9cL2F1dGgucGluZ29uZS5jb21cLzMyM2ZiOGEyLTdiYTQtNDU5ZS1hNjA1LTI3YTkzZTVjZmI0MlwvYXMiLCJleHAiOjE1NTM3MTI1NjQsImVudiI6IjMyM2ZiOGEyLTdiYTQtNDU5ZS1hNjA1LTI3YTkzZTVjZmI0MiIsImlhdCI6MTU1MzcwODk2NCwiY2xpZW50X2lkIjoiNjM5OWY2YzktNTZkNS00N2Y2LTg4ZGQtNzBmMTE0MjE0ZTA2In0.GxRryzHTLOz2fLTH5wtvJ1FUxVcdR7rFkeCE7gTDILUyEaAeUcRGV-wYhyy-9CrDpc2CsOO7_jivWb9MuhmPClzXtpN0hQMwgR_bFbFm7X3rmNOfFptT4JBQdmYdW9YHx22kPry6GfhD6MuhfVLEdAwC34dwp8UaIt52J4DnE9px4ORsLTxO9jATgsntHAt0rAdl6Wwf2Hv_d2utXVpAuCF1j0z1Bu83-g-_J31YcIxjUpwDrnSL8iQsLFqL6EfllwH_O_5JcVUjJ5inI1ZvayF51zJq57xAu7ZL0g7Iz_hk-T7idwU5ZgdfZuANwvAXeA6VlwlWdsNz1xPcflPX3Q",
    "Postman-Token: ac264a4b-4c33-4433-a6cf-09ef3c52c55c",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>
