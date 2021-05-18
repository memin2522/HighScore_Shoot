<?php
$arch = fopen($_POST['archivo'] . '.txt', 'w');
$t = $_POST['texto'];

fwrite($arch, $t);
fclose($arch);
echo 'ok';