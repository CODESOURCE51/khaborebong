<?php 
$con=mysql_connect("localhost","khaboreb_ong","khabor123") or die(mysql_error());
mysql_select_db("khaboreb_ong",$con) or die(mysql_error());
?>
<?php
if(isset($_REQUEST['vote']))
{
$vote = $_REQUEST['vote'];

$ar = explode("*", $vote);
$oid = $ar[0];
$vid = $ar[1];


$queryvote="INSERT INTO video_votes(vid, option_id, pdate, ip) VALUES('".$vid."', '".$oid."', '".date('Y-m-d H:i:s')."', '".$_SERVER['REMOTE_ADDR']."')";
$exe_vote = mysql_query($queryvote) or die (mysql_error());

} else {
	$vid = $_REQUEST['cat_id'];
}
?>
<?php 
	  
	  $q=mysql_query("SELECT * FROM video_votes where `vid`='$vid'");
	  $anscount=mysql_num_rows($q);
	
      $f=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=1");
	  $fcount=mysql_num_rows($f);
	  
	  $s=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=2");
	  $scount=mysql_num_rows($s);

	  $f1=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=3");
	  $fcount1=mysql_num_rows($f1);
	  
	  $s1=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=4");
	  $scount1=mysql_num_rows($s1);

?>
<h2 style="text-align:center;">People's Voting Graph on this video</h2>
<table>
<tr>
<td>Good</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($fcount/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($fcount/($anscount),2)); ?>%
</td>
</tr>
<tr>
<td>Average</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($scount/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($scount/($anscount),2)); ?>%
</td>
</tr>
<tr>
<td>Better</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($fcount1/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($fcount1/($anscount),2)); ?>%
</td>
</tr>
<tr>
<td>Best</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($scount1/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($scount1/($anscount),2)); ?>%
</td>
</tr>
</table>