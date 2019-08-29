<?php
 echo "Hello Ethical Hackers<br>";
 echo "PHP is so easy to learn ...<br>";
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 echo "Deine IP Adresse ist: $ipaddress <br>";

 /* und nun setzen wir noch ein Cookie
 */

 $date_of_expiry = time() + 60 ;
 setcookie( "userlogin", "anonymous", $date_of_expiry );
?> 
