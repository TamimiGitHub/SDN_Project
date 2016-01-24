<?php 

$output = exec(`sudo mn 2>&1`);
echo "<pre>$output</pre>";

?>

<?php 


echo 'hdhi'; 

$output = exec(`sudo subl`);
echo "<pre>$output</pre>";


?>


<?php 
    exec("dir", $output, $return);
    echo "Dir returned $return, and output:\n";
    var_dump($output);

    exec("python test.py");
    
?>

<br><br>


<?php
    exec("sudo mn", $output, $return);
    echo "Dir returned $return, and output:\n";
    var_dump($output);
?>

<br><br>

<?php system("uname -a"); ?>
<br><br>

<?php 
echo 'test'; 
$command = escapeshellcmd('pyhton test.py');
$output = shell_exec($command);
echo $output;

?>



<?php
 
$param1 = "first";
$param2 = "second";
$param3 = "third";
 
$command = "python test.py";
$command .= " $param1 $param2 $param3 2>&1";
 
header('Content-Type: text/html; charset=utf-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
echo "<style type='text/css'>
 body{
 background:#000;
 color: #7FFF00;
 font-family:'Lucida Console',sans-serif !important;
 font-size: 12px;
 }
 </style>";
 
$pid = popen( $command,"r");
 
echo "<body><pre>";
while( !feof( $pid ) )
{
 echo fread($pid, 256);
 flush();
 ob_flush();
 echo "<script>window.scrollTo(0,99999);</script>";
 usleep(100000);
}
pclose($pid);
 
echo "</pre><script>window.scrollTo(0,99999);</script>";
echo "<br /><br />Script finalizado<br /><br />";
?>

<?php 

shell_exec("pyhton test.py");

?>