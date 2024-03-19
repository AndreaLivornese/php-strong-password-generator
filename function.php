

<?php
function passGenerator($length){

$seed = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()');

shuffle($seed);

$pass = '';

foreach(array_rand($seed, $length) as $nRand){
    $pass .= $seed[$nRand];
}

return $pass;

};
?>
