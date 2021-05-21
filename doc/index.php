<?php

$a = file_get_contents('php://input');
file_put_contents('./webhook.txt', $a.PHP_EOL.PHP_EOL,FILE_APPEND);
$result=array(
    "errcode"=>200,
    "errmsg"=>"SUCCESS",
);
echo json_encode($result);
exit;
