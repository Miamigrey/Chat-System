<?php
$con = mysqli_connect("localhost","root","");
if($con) {
	echo "Connection Succed";
}else {
	echo "Connection Error".mysqli_error($con);
}
