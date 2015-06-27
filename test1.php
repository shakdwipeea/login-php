<?php
$public_key = substr(hash('sha1',hash('md5',substr(uniqid(mt_rand(1, rand()), true),3,5))),4,10);
echo $public_key;
?>