<?php
$access_token = 'N289D+HEfDtM1cJTXeDU1+Rd1xwiRyJZdS+KyG0SJOokrjHXx4j+DSVQs0FVtOq3Fp0Y211dS999I+V4bl45piUIvTHqvdZgR8ORaMaJgSBV5A0prPtNxHW+M3G4HzPzPlr/9FsrM8FuOwJRDVPwCwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' N289D+HEfDtM1cJTXeDU1+Rd1xwiRyJZdS+KyG0SJOokrjHXx4j+DSVQs0FVtOq3Fp0Y211dS999I+V4bl45piUIvTHqvdZgR8ORaMaJgSBV5A0prPtNxHW+M3G4HzPzPlr/9FsrM8FuOwJRDVPwCwdB04t89/1O/w1cDnyilFU=);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
