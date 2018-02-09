<table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="128" height="30" align="center" valign="middle" bgcolor="#003366"><span class="style16">NEWS FLASH</span></td>
        <td width="12" height="30" bgcolor="#BFE9FB">&nbsp;</td>
        <td width="900" height="30" align="left" valign="middle" bgcolor="#BFE9FB"><table width="880" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="20">
            <?php

	$q= "SELECT MAX(id) AS id FROM `page_news_flash`";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `page_news_flash` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$caption= $row1['caption'];
	
?>
            <marquee behavior="scroll" direction="left" width="880" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "2994038546470396",
    enable_page_level_ads: true
  });
</script>
              <span class="style19"><?php echo $caption; ?></span>
            </marquee></td>
          </tr>
        </table></td>
      </tr>
    </table>