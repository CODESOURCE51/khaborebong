<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<link href="css/flexslider.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
<table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="420" height="400" align="center" valign="top" background="images_khaborebong/tvstand.jpg">
        <div><?php $qa= "SELECT * FROM `video` WHERE `pub`= '1'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	echo $image= $row1['video_path']; ?></div>
    
    
    <a href="video_album.php?cat_id=18&category_name=video_gallery"><div style="color:#F00; font-weight:bold; font-size:14px; padding-left:20px; padding-top:5px; float:left;">Click here for more videos</div></a><a href="javascript:void(0);" onClick="window.open('test.php?cat_id=<?php echo $row1['id'];?>', 'socialPopupWindow',
                'location=no,width=400,height=400,scrollbars=yes,top=100,left=300,resizable = no');"><div style="color:#F00; font-weight:bold; font-size:14px; padding-top:5px; float:right; padding-right:20px;">Vote US</div></a>
    
    
        </td>
        <td width="20" height="400">&nbsp;</td>
        <td width="600" height="400" align="center" valign="middle"><div id="slider-home" class="row-fluid slider-home">
            <div class="span12">
            <section class="slider">
            <div id="main-slider" class="flexslider">
            <ul class="slides">
            <?php
$select_user = "SELECT * FROM `feature_slider`";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	$path= $row['path']; 
	$caption= $row['caption']; 
	$slider_image= $row['slider_image']; 

?>
            <li>
           <div class="container flex-caption">
            	<div class="title"><?php echo $caption; ?></div>
            </div>
            <a href="<?php echo $path; ?>">
            <img alt="" src="admin/slider_image/<?php echo $slider_image; ?>" />
            </a>
            </li>
            <?php } ?>
            
            </ul>
            </div>
            </section>
             </div>
            </div></td>
      </tr>
    </table>
    

<script src="js/flexslider.js"></script>
<script type="text/javascript">
jQuery(function($){

  $('#main-slider').flexslider();



  jQuery('.box').niceScroll({

    autohidemode:false,

    scrollspeed: 100,

    cursorcolor: '#d84949',

    cursorwidth: '15px',

    cursorborderradius: '0px',

    cursorborder: '0',

    background: '#dddddd'

  });

});

/* ]]> */

</script>

