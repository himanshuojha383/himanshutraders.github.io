<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

?>