<?php


$result= [];

if( !empty($_POST) ){
    if( !empty($_POST['key']) ){
        $check = md5( $_SERVER['REMOTE_ADDR'] . '123');

        if( $check == $_POST['key']){


            $message = "New order on Veldt360.com  
--
name {$_POST['name']}
phone {$_POST['phone']}
email {$_POST['email']}
message:
--
{$_POST['request']}
--
            ";

            $snd = mail ( 'info@veldt360.com', 'VELDT360 NEW ORDER',  $message);

            $result['sended'] = $snd;

        }
    }
}

echo json_encode($result);