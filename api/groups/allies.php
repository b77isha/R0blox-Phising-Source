<?php
$url = str_replace('/api/groups','https://groups.roblox.com',$_SERVER['REQUEST_URI']);
echo file_get_contents($url);
?>