<?php

echo "Hello World!";
echo "<br> Client IP is: " . $_SERVER['HTTP_CLIENT_IP'];
echo "<br> Forwarded For is: " . $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "<br> Remote ADDR is: " . $_SERVER['REMOTE_ADDR'];
?> 
