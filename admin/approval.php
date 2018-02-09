<?php
ob_start();
include("connection.php"); 
$txtUsername=$_SESSION['txtUsername'];

if($_SESSION['txtUsername'])
	{
	
	}
	
else
{
echo "<script type='text/javascript'> window.location='index.php'; </script>"; 
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khabor Ebong</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<link rel='stylesheet' type='text/css' href='styles.css' />
<link rel='stylesheet' type='text/css' href='css/admin.css' />
<script type='text/javascript' src='menu_jquery.js'></script>
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}
function readURL2(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test2').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}
function readURL3(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test3').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL4(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test4').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL5(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test5').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL6(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test6').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL7(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test7').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL8(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test8').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL9(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test9').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL10(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test10').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL11(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test11').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}

function readURL12(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test12').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}
</script>
<script src="js/modernizr-2.6.2.min.js"></script>

<style type="text/css">
.style4 {	font-family: Tahoma;
	font-size: 12px;
}
</style>

<!----------------------validation----------------------------->
<style type="text/css">
body {
	background: #FFFFFF;
	margin: 0;
	padding: 0;
	font: 10px normal Verdana, Arial, Helvetica, sans-serif;
	color: #444;
}
h1 {font-size: 3em; margin: 20px 0;}
.container {width: 850px; margin: 10px auto;}
ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	width: 100%;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 31px;
	line-height: 31px;
	border: 1px solid #999;
	border-left: none;
	margin-bottom: -1px;
	background: #e0e0e0;
	overflow: hidden;
	position: relative;
}
ul.tabs li a {
	text-decoration: none;
	color: #000;
	display: block;
	font-size: 1.2em;
	padding: 0 20px;
	border: 1px solid #fff;
	outline: none;
}
ul.tabs li a:hover {
	background: #ccc;
}	
html ul.tabs li.active, html ul.tabs li.active a:hover  {
	background: #fff;
	border-bottom: 1px solid #fff;
}
.tab_container {
	border: 1px solid #999;
	border-top: none;
	clear: both;
	float: left; 
	width: 100%;
	background: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
.tab_content {
	padding: 20px;
	font-size: 1.2em;
}
.tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;
	border-bottom: 1px dashed #ddd;
	font-size: 1.8em;
}
.tab_content h3 a{
	color: #254588;
}
.tab_content img {
	float: left;
	margin: 0 20px 20px 0;
	border: 1px solid #ddd;
	padding: 5px;
}
</style>
<script type="text/javascript"src="jquery.js"></script>
<script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>

 <script type="text/javascript" src="js/jquery.js"></script>  
  <script type="text/javascript" src="js/validate.js"></script>  
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#payslip").validate({
		rules: {
			category: {
				required: true
			},
			slider_image: {
				required: true
			},
			caption: {
				required: true
			},
			description: {
				required: true
			},
			date: {
				required: true
			},
			url: {
				required: true
			},
			hass_code: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			category: {
				required: "<br /> Please Select Category."
			
			},
			slider_image: {
				required: "<br /> Please Choose Image."
			
			},
			caption: {
				required: "<br /> Select Caption."
			
			},
			description: {
				required: "<br />Select Description."
			
			},
			date: {
				required: "<br /> Please Choose Date."
			
			}
			,
			url: {
				required: "<br /> Enter URL title Using _."
			
			},
			hass_code: {
				required: "<br /> Enter # code."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<!----------------------validation----------------------------->

</head>

<body topmargin="0">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" style="border-left:solid #CCCCCC 1px; border-right:solid #CCCCCC 1px; border-bottom:solid #CCCCCC 1px;">
<tr>
<td align="left" valign="middle" height="110"><?php include("header.php"); ?></td>
</tr>
<tr>
<td align="left" valign="top" bgcolor="#ffffff" style="padding-left:8px; padding-right:8px;">
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="265" rowspan="2" align="left" valign="top" class="left_panel"><?php include("left_panel.php"); ?></td>
<td height="250" align="center" valign="top" style="padding-left:6px; padding-top:10px;">
<?php
if(isset($_POST['form_submit']) && $_POST['form_submit'] == 'form_submit')
{
	
//$slider_image= mysql_real_escape_string($_REQUEST['slider_image']);	
$category=$_REQUEST['category'];
$date=$_REQUEST['date'];
$caption=addslashes($_REQUEST['caption']);
$description=addslashes($_REQUEST['description']);
$caption_display=$_REQUEST['caption_display'];
$recent_news=$_REQUEST['recent_news'];
$popular=$_REQUEST['popular'];
$editor=$_REQUEST['editor'];
$url=$_REQUEST['url'];
$video_url=$_REQUEST['vid_url'];
$hass_code=addslashes($_REQUEST['hass_code']);
$reporter=$_REQUEST['reporter'];
$path="http://khaborebong.com/".$category;
if(isset($_FILES['slider_image2']['name']) && $_FILES['slider_image2']['name'] != '') {
	$image_name = $_FILES['slider_image2']['name'];
	$image_tmp = $_FILES['slider_image2']['tmp_name'];
	$img = explode('.',$image_name);
	//print_r($img);
	
		$item_image2 = $img[0].time().'.'.$img[1];
    	$pathAndName = "news_image/".$item_image2;
    	move_uploaded_file($image_tmp, $pathAndName);
	// $tmp_name2=$_FILES["slider_image2"]["tmp_name"];
	//  $rand= rand(1000, 9999);
	// 	$target1 = "news_image/"; 
 //        $target = $target1 .$rand. basename( $_FILES["slider_image2"]["name"]) ; 
 //      move_uploaded_file($_FILES["slider_image2"]["tmp_name"],$target);
	  //$item_image2= basename($rand.$_FILES['slider_image2']['name']);
} else {
	 $item_image2= '';
}
		if(isset($_FILES['slider_image3']['name']) && $_FILES['slider_image3']['name'] != '') {
	$tmp_name2=$_FILES["slider_image3"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image3"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image3"]["tmp_name"],$target);
	  $item_image3= basename($rand.$_FILES['slider_image3']['name']);
} else {
	 $item_image3= '';
}
if(isset($_FILES['slider_image4']['name']) && $_FILES['slider_image4']['name'] != '') {
	$tmp_name2=$_FILES["slider_image4"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image4"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image4"]["tmp_name"],$target);
	  $item_image4= basename($rand.$_FILES['slider_image4']['name']);
} else {
	 $item_image4= '';
}
if(isset($_FILES['slider_image5']['name']) && $_FILES['slider_image5']['name'] != '') {
	$tmp_name2=$_FILES["slider_image5"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image5"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image5"]["tmp_name"],$target);
	  $item_image5= basename($rand.$_FILES['slider_image5']['name']);
} else {
	 $item_image5= '';
}
if(isset($_FILES['slider_image6']['name']) && $_FILES['slider_image6']['name'] != '') {
	$tmp_name2=$_FILES["slider_image6"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image6"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image6"]["tmp_name"],$target);
	  $item_image6= basename($rand.$_FILES['slider_image6']['name']);
} else {
	 $item_image6= '';
}
if(isset($_FILES['slider_image7']['name']) && $_FILES['slider_image7']['name'] != '') {
	$tmp_name2=$_FILES["slider_image7"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image7"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image7"]["tmp_name"],$target);
	  $item_image7= basename($rand.$_FILES['slider_image7']['name']);
} else {
	 $item_image7= '';
}
if(isset($_FILES['slider_image8']['name']) && $_FILES['slider_image8']['name'] != '') {
	$tmp_name2=$_FILES["slider_image8"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image8"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image8"]["tmp_name"],$target);
	  $item_image8= basename($rand.$_FILES['slider_image8']['name']);
} else {
	 $item_image8= '';
}
if(isset($_FILES['slider_image9']['name']) && $_FILES['slider_image9']['name'] != '') {
	$tmp_name2=$_FILES["slider_image9"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image9"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image9"]["tmp_name"],$target);
	  $item_image9= basename($rand.$_FILES['slider_image9']['name']);
} else {
	 $item_image9= '';
}
if(isset($_FILES['slider_image10']['name']) && $_FILES['slider_image10']['name'] != '') {
	$tmp_name2=$_FILES["slider_image10"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image10"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image10"]["tmp_name"],$target);
	  $item_image10= basename($rand.$_FILES['slider_image10']['name']);
} else {
	 $item_image10= '';
}
if(isset($_FILES['slider_image11']['name']) && $_FILES['slider_image11']['name'] != '') {
	$tmp_name2=$_FILES["slider_image11"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image11"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image11"]["tmp_name"],$target);
	  $item_image11= basename($rand.$_FILES['slider_image11']['name']);
} else {
	 $item_image11= '';
}
if(isset($_FILES['slider_image12']['name']) && $_FILES['slider_image12']['name'] != '') {
	$tmp_name2=$_FILES["slider_image12"]["tmp_name"];
	 $rand= rand(1000, 9999);
		$target1 = "news_image/"; 
        $target = $target1 .$rand. basename( $_FILES["slider_image12"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image12"]["tmp_name"],$target);
	  $item_image12= basename($rand.$_FILES['slider_image12']['name']);
} else {
	 $item_image12= '';
}

if(isset($_REQUEST['description2'])) {
	$desc2 = $_REQUEST['description2'];
} else {
	$desc2 = 'N/A';
}

if(isset($_REQUEST['description3'])) {
	$desc3 = $_REQUEST['description3'];
} else {
	$desc3 = 'N/A';
}
if(isset($_REQUEST['description4'])) {
	$desc4 = $_REQUEST['description4'];
} else {
	$desc4 = 'N/A';
}
if(isset($_REQUEST['description5'])) {
	$desc5 = $_REQUEST['description5'];
} else {
	$desc5 = 'N/A';
}
if(isset($_REQUEST['description6'])) {
	$desc6 = $_REQUEST['description6'];
} else {
	$desc6 = 'N/A';
}
if(isset($_REQUEST['description7'])) {
	$desc7 = $_REQUEST['description7'];
} else {
	$desc7 = 'N/A';
}
if(isset($_REQUEST['description8'])) {
	$desc8 = $_REQUEST['description8'];
} else {
	$desc8 = 'N/A';
}
if(isset($_REQUEST['description9'])) {
	$desc9 = $_REQUEST['description9'];
} else {
	$desc9 = 'N/A';
}
if(isset($_REQUEST['description10'])) {
	$desc10 = $_REQUEST['description10'];
} else {
	$desc10 = 'N/A';
}
if(isset($_REQUEST['description11'])) {
	$desc11 = $_REQUEST['description11'];
} else {
	$desc11 = 'N/A';
}
if(isset($_REQUEST['description12'])) {
	$desc12 = $_REQUEST['description12'];
} else {
	$desc12 = 'N/A';
}

$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["slider_image"]["name"]);
$extension = end($temp);
if ((($_FILES["slider_image"]["type"] == "image/gif")
|| ($_FILES["slider_image"]["type"] == "image/jpeg")
|| ($_FILES["slider_image"]["type"] == "image/jpg")
|| ($_FILES["slider_image"]["type"] == "image/pjpeg")
|| ($_FILES["slider_image"]["type"] == "image/x-png")
|| ($_FILES["slider_image"]["type"] == "image/png"))
&& ($_FILES["slider_image"]["size"] < 2097152)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["slider_image"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["slider_image"]["error"] . "<br>";
    }
  else
    {
		
		$tmp_name=$_FILES["slider_image"]["tmp_name"];
        $rand= rand(1000, 9999);
		$target = "news_image/"; 
        $target = $target .$rand. basename( $_FILES["slider_image"]["name"]) ; 
      move_uploaded_file($_FILES["slider_image"]["tmp_name"],$target);
	  $item_image= basename($rand.$_FILES['slider_image']['name']);
	  
	$query= "INSERT INTO `news` (`category`,`caption`,`video_url`,`image`,`description`,`image2`,`description2`,`image3`,`description3`,`image4`,`description4`,`image5`,`description5`,`image6`,`description6`,`image7`,`description7`,`image8`,`description8`,`image9`,`description9`,`image10`,`description10`,`image11`,`description11`,`image12`,`description12`,`caption_display`,`recent_news`,`popular`,`editor`,`date`,`url`,`hass_code`,`reporter`) 
                       VALUES('$category','$caption','$video_url','$item_image','$description','$item_image2','$desc2','$item_image3','$desc3','$item_image4','$desc4','$item_image5','$desc5','$item_image6','$desc6','$item_image7','$desc7','$item_image8','$desc8','$item_image9','$desc9','$item_image10','$desc10','$item_image11','$desc11','$item_image12','$desc12','$caption_display','$recent_news','$popular','$editor','$date','$url','$hass_code','$reporter')";
			
			$query_exi= mysql_query($query) or die(mysql_error());
		
echo "<script type='text/javascript'> window.location= 'approval.php?success'; </script>";
      
      }
    }
else
  {
  echo "<script type='text/javascript'> window.location= 'approval.php?fail'; </script>";
  }			
	
}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="600" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="4" class="err">&nbsp;</td> </tr>
<tr> <td height="40" colspan="4"  align="center" class="edit">ADD NEWS</td> </tr>

<tr>
  <td height="20" align="left" class="form_txtr">Category<span style="font-family:'Courier New', Courier, monospace; font-size:10px;">(except index.php)</span></td>
  <td width="7" height="35" align="center" valign="middle">:</td>
  <td align="left" valign="middle"><select name="category" id="category" class="rounded" style="width:265px; height:30px;">
    <option value=""> Select Category</option>
     <?php
$sql3 = "SELECT * from `category` order by id";
$rs3 = mysql_query($sql3);
while($row3 = mysql_fetch_array($rs3))
{
?>
    <option value="<?php echo $row3['id']; ?>"><?php echo $row3['category']; ?></option>
    <?php } ?>
    </select>
  </td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Caption</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="text" name="caption" id="caption" value="" /></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image1</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL(this);" type="file" name="slider_image" id="slider_image" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description1</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description" id="description" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image2</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL2(this);" type="file" name="slider_image2" id="slider_image2" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test2" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description2</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description2" id="description2" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image3</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL3(this);" type="file" name="slider_image3" id="slider_image3" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test3" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description3</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description3" id="description3" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image4</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL4(this);" type="file" name="slider_image4" id="slider_image4" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test4" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description4</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description4" id="description4" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image5</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL5(this);" type="file" name="slider_image5" id="slider_image5" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test5" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description5</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description5" id="description5" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image6</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL6(this);" type="file" name="slider_image6" id="slider_image6" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test6" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description6</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description6" id="description6" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image7</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL7(this);" type="file" name="slider_image7" id="slider_image7" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test7" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description7</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description7" id="description7" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image8</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL8(this);" type="file" name="slider_image8" id="slider_image8" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test8" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description8</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description8" id="description8" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image9</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL9(this);" type="file" name="slider_image9" id="slider_image9" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test9" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description9</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description9" id="description9" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image10</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL10(this);" type="file" name="slider_image10" id="slider_image10" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test10" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description10</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description10" id="description10" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image11</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL11(this);" type="file" name="slider_image11" id="slider_image11" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test11" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description11</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description11" id="description11" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image12</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL12(this);" type="file" name="slider_image12" id="slider_image12" style="width:250px; height:20px;" /></td>
  <td width="217" rowspan="2" align="left" valign="middle"><img alt="" id="test12" src="" width="120" height="120"/></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description12</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description12" id="description12" class="posting_categori_txtbox"></textarea></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Video URL</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="text" name="vid_url" id="vid_url" value="" /></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">Insert Date</td>
  <td height="35" align="center" valign="middle">&nbsp;</td>
  <td align="left" valign="middle"><input type="text" name="date" id="date" placeholder="date" /></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Caption Display on HomePage</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="checkbox" name="caption_display" id="caption_display" value="1" /></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Recent News</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="checkbox" name="recent_news" id="recent_news" value="1"/></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">Popular</td>
  <td height="35" align="center" valign="middle">:</td>
  <td align="left" valign="middle"><input type="checkbox" name="popular" id="popular" value="1"/></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">Editors Pick</td>
  <td height="35" align="center" valign="middle">:</td>
  <td align="left" valign="middle"><input type="checkbox" name="editor" id="editor" value="1"/></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">URL</td>
  <td height="35" align="center" valign="middle">&nbsp;</td>
  <td align="left" valign="middle"><input type="text" name="url" id="url" placeholder="   URL" /></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr"># code</td>
  <td height="35" align="center" valign="middle">&nbsp;</td>
  <td align="left" valign="middle"><input type="text" name="hass_code" id="hass_code" placeholder=" abc1,abc2,abc3..." /></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">Reporter</td>
  <td height="35" align="center" valign="middle">&nbsp;</td>
  <td align="left" valign="middle"><input type="text" name="reporter" id="reporter" value="Staff Reporter" placeholder=" Staff Reporter" /></td>
</tr>


<tr>
  <td height="5" align="left" valign="middle">&nbsp;</td>
  <td height="5" align="center" valign="middle">&nbsp;</td>
  <td height="5" align="left" valign="middle" class="thanks">
    <?php if(isset($_REQUEST['success'])) { echo "Thanks! News inserted successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
    <?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
    <?php if(isset($_REQUEST['success_up'])) { echo "Thanks! News updated successfully."; } ?>
  </td>
  </tr>


<tr>
  <td width="116" height="35" align="left" valign="middle">&nbsp; </td>  <td width="7" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle"><input type="hidden" name="form_submit" value="form_submit" /><input type="image" src="images/submit.jpg" border="0" name="submit" id="submit" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form>
<a href="javascript:void(0);" onclick="getCheckedCheckboxesFor()" style="font-size:14px; float:left; margin-left:70px;">Multiple Delete</a>
<div class="container">

	
    <ul class="tabs">
        <li><a href="#tab1">Kolkata</a></li>
        <li><a href="#tab2">District</a></li>
        <li><a href="#tab3">Nation</a></li>
        <li><a href="#tab4">International</a></li>
        <li><a href="#tab5">Sports</a></li>
        <li><a href="#tab6">Entertainment</a></li>
        <li><a href="#tab7">Business & Technology</a></li>
        <li><a href="#tab8">Health & Lifestyle</a></li>
        <li><a href="#tab9">Aaj</a></li>
        <li><a href="#tab10">Astrology</a></li>
        <li><a href="#tab11">Ladies Special</a></li>
        <li><a href="#tab12">Ranna Ghar</a></li>
        <li><a href="#tab13">Travel</a></li>
        <li><a href="#tab14">Career</a></li>
        <li><a href="#tab15">Bureau Report</a></li>
        <li><a href="#tab16">Blog</a></li>
        <li><a href="#tab17">Special Page</a></li>

    </ul>

    <div class="tab_container">
    
        <div id="tab1" class="tab_content">

            <h2>Kolkata</h2>
            
           <?php
$select_user = "SELECT * FROM `news` where `category`='1' ORDER BY id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image'];
 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab2" class="tab_content">
            <h2>District</h2>
            <?php
$select_user = "SELECT * FROM `news` where `category`='2' ORDER BY id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image'];

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 

        </div>
        <div id="tab3" class="tab_content">
            <h2>Nation</h2>
          	<?php
$select_user = "SELECT * FROM `news` where `category`='3' ORDER BY id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
            
        </div>
        <div id="tab4" class="tab_content">
            <h2>International</h2>
            <?php
$select_user = "SELECT * FROM `news` where `category`='4' ORDER BY id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab5" class="tab_content">
            <h2>Sports</h2>
            <?php
$select_user = "SELECT * FROM `news` where `category`='5' ORDER BY id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab6" class="tab_content">
            <h2>Entertainment</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='6' ORDER BY id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab7" class="tab_content">
            <h2>Business & Technology</h2>
          <?php
$select_user = "SELECT * FROM `news` where `category`='7' ORDER BY id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab8" class="tab_content">
            <h2>Health & Lifestyle</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='8'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab9" class="tab_content">
            <h2>Aaj</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='9'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab10" class="tab_content">
            <h2>Astrology</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='10'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab11" class="tab_content">
            <h2>Ladies Special</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='11'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab12" class="tab_content">
            <h2>Ranna Ghar</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='12'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab13" class="tab_content">
            <h2>Travel</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='13'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab14" class="tab_content">
            <h2>Career</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='14'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab15" class="tab_content">
            <h2>Bureau Report</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='15'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab16" class="tab_content">
            <h2>Blog</h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='16'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><input type="checkbox" name="employee" value="<?php echo $id;?>" /></td>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
        <div id="tab17" class="tab_content">
            <h2><?php $s = "SELECT * FROM `category` where id=20";
$exe = mysql_query($s) or die (mysql_error());
$rowss= mysql_fetch_array($exe);
echo $rowss['cat_name'];  ?></h2>
           <?php
$select_user = "SELECT * FROM `news` where `category`='20'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	//$path= $row['path']; 
	$image= $row['image']; 

?>
        

       		  <table width="750" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
    <td width="208" style="padding:6px 0 6px 15px;"><?php echo "<img src='news_image/$image' border='0' width='100' height='65' />"; ?></td>
    <td width="447" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
    <td width="123" align="center"><a href="delete_news.php?id=<?php echo $id;?>&image=<?php echo $image;?>"><img src="images/del_icon.png" border="0" /></a></td>
    <td width="100" align="center"><a href="edit_news.php?id=<?php echo $id;?>"><img src="images/edit_icon.png" border="0" /></a></td>
  </tr>
</table>

                    <?php } ?> 
        </div>
    </div>
</div>
</td> 
</tr>
<tr>
  <td height="30" align="center" valign="top">&nbsp;</td>
</tr>
</table></td>
</tr>
<tr>
  <td align="left" valign="top"><?php include_once ("footer.php"); ?></td>
</tr>

</table>
<script>

    function getCheckedCheckboxesFor() {
   var checkboxes = document.getElementsByName('employee');
var selected = [];
for (var i=0; i<checkboxes.length; i++) {
    if (checkboxes[i].checked) {
        selected.push(checkboxes[i].value);
    }
}
 if(selected == '') {
    alert('You didn"t Select Any News');
 } else {
    alert(selected);
    //window.location.href = 'billing_multiple.php?news_id='+selected;
    window.open('delete_multiple.php?news_id='+selected,'_blank');
 }
}
</script>
</body>
</html>