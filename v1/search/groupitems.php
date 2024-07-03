<?php
header('content-type: application/json; charset=utf-8');

if(!isset($_SERVER['HTTP_REFERER'])){
    http_response_code(400);
    die(json_encode(["errors" => [["code" => 400,'message' => 'BadRequest']]]));
    }elseif(isset($_GET['creatorTargetId'])){
    if(is_numeric($_GET['creatorTargetId'])){
     die(json_encode(array("errors" => [["code" => 2,  "message" => "Creator id not found.", "userFacingMessage" => "Something went wrong" ]]))); 
    }
}
?>