<?php
$contents = file_get_contents('sh.sh');
echo shell_exec($contents);
?>