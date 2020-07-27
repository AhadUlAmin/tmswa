<?php 
include("database_connection.php");
function anotherRandomIDGenerator($length = 11) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}



$ip_altusername = anotherRandomIDGenerator();
$ip = $_POST['ip']; 
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
$ip_number = $details->ip ;
$ip_country = $details->country ;
$ip_city =  $details->city ; 
$join_date = date('d-m-Y');
$ip_region = $details->region ;
$ip_postal =  $details->postal ;
$ip_loc = $details->loc ;
 


$check_ip = mysqli_query($conn,"select * from `ipaddress` where `ip_number` = '".mysqli_real_escape_string($conn,$ip)."' ");
$check_ip_deactive = mysqli_query("select * from `ipaddress` where `ip_number` = '".mysqli_real_escape_string($conn,$ip)."' ");

if(mysqli_num_rows($check_ip) > 0){
        $xyzabc = mysqli_fetch_array($check_ip);
		$_SESSION["USER_ID"] =  $xyzabc['ip_id']; 
		$_SESSION["ALT_USERNAME"] = $xyzabc['ip_altusername']; 

 }
 
 
else if(mysqli_query($conn,"INSERT INTO `ipaddress`( `ip_number`,`join_date`,`ip_country`,`ip_city`,`ip_region`,`ip_postal`,`ip_loc`,`ip_altusername`) 
VALUES('$ip','$join_date','$ip_country','$ip_city','$ip_region','$ip_postal','$ip_loc' ,'$ip_altusername')")){
	
	
		$_SESSION["USER_ID"] =   mysqli_insert_id();
		$_SESSION["ALT_USERNAME"] = $ip_altusername; 


}


?>