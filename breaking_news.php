<link href="css/global.css" rel="stylesheet" type="text/css" />
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "2994038546470396",
    enable_page_level_ads: true
  });
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #0099CC;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style3 {	font-weight: bold;
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style2 {color: #000000}
-->
</style>
<table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="240" height="40" align="center" valign="middle" background="images_khaborebong/redmovinglines.gif" bgcolor="#FE0000"><span class="style11">BREAKING NEWS</span></td>
        <td width="12" height="40" bgcolor="#000000">&nbsp;</td>
        <td width="788" align="left" valign="middle" bgcolor="#000000">
        <ul id="ticker_01" class="ticker">
        <?php
$select_user = "SELECT * FROM `breaking_news` order by id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id']; 
	$breakingnews= $row['breakingnews']; 

?>
 
		 <li style="font-size:18px;"><span class="style48"><?php echo $breakingnews; ?></span></li>
<?php } ?>
 </ul></td>
      </tr>
    </table>
    <script>

	function tick(){
		$('#ticker_01 li:first').slideUp( function () { $(this).appendTo($('#ticker_01')).slideDown(); });
	}
	setInterval(function(){ tick () }, 5000);

</script>