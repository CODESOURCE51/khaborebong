<?php 
$con=mysql_connect("localhost","khaboreb_ong","khabor123") or die(mysql_error());
mysql_select_db("khaboreb_ong",$con) or die(mysql_error());
?>
<?php
if(isset($_REQUEST['vote']))
{
$vote = $_REQUEST['vote'];

$ar = explode("*", $vote);
$qid = $ar[0];
$aid = $ar[1];


$queryvote="INSERT INTO film_votes(ques_id, option_id, voted_on, ip) VALUES('".$qid."', '".$aid."', '".date('Y-m-d H:i:s')."', '".$_SERVER['REMOTE_ADDR']."')";
$exe_vote = mysql_query($queryvote) or die (mysql_error());

}
?>
<?php $query=mysql_query("SELECT id, ques FROM film_questions ORDER BY id DESC LIMIT 1");
	  $row=mysql_fetch_assoc($query);
	  $qid=$row['id'];
	  $ques=$row['ques'];
	  
	  $q=mysql_query("SELECT * FROM film_votes where `ques_id`='$qid'");
	  $anscount=mysql_num_rows($q);
	  
	 $queryans=mysql_query("SELECT id,value FROM film_options where `ques_id`='$qid'");
	 while($rowans=mysql_fetch_array($queryans)){ $fid[]=$rowans['id']; $val[]=$rowans['value'];}
	
      $f=mysql_query("SELECT * FROM film_votes where `ques_id`='$qid' and `option_id`='".$fid[0]."'");
	  $fcount=mysql_num_rows($f);
	  
	  $s=mysql_query("SELECT * FROM film_votes where `ques_id`='$qid' and `option_id`='".$fid[1]."'");
	  $scount=mysql_num_rows($s);

?>
<h2 style="text-align:center;"><?php echo $ques; ?></h2>
<table>
<tr>
<td><?php echo $val[0]; ?></td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($fcount/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($fcount/($anscount),2)); ?>%
</td>
</tr>
<tr>
<td><?php echo $val[1]; ?></td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($scount/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($scount/($anscount),2)); ?>%
</td>
</tr>
</table>