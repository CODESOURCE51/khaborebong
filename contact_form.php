<?php 
include_once('admin/connection.php');
?>
<?php 
$cat_id=$_REQUEST['cat_id'];
$cat=$_REQUEST['category_name'];
$tag=$_REQUEST['caption'];
?>
 <?php				
$select_user = "SELECT * FROM `news` WHERE `url`= '$tag'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row_news= mysql_fetch_array($exe_selectuser);

$previous = 'select * from news where id = (select max(id) from news where id < "'.$row_news["id"].'") order by category desc';
$pre_query = mysql_query($previous) or die(mysql_error());
$pre_data = mysql_fetch_assoc($pre_query);
$tot_pre = mysql_num_rows($pre_query);

if($tot_pre > 0) {
$pre_category = 'select * from category where id ='.$pre_data['category'];
$pre_category_query = mysql_query($pre_category) or die(mysql_error());
$pre_category_data = mysql_fetch_assoc($pre_category_query);
}

$next = 'select * from news where id = (select min(id) from news where id > "'.$row_news["id"].'") order by category asc';
$next_query = mysql_query($next) or die(mysql_error());
$next_data = mysql_fetch_assoc($next_query);
$tot_nxt = mysql_num_rows($next_query);

if($tot_nxt > 0) {
$next_category = 'select * from category where id ='.$next_data['category'];
$next_category_query = mysql_query($next_category) or die(mysql_error());
$next_category_data = mysql_fetch_assoc($next_category_query);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="<?php echo $caption; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<link rel="image_src" href="http://www.khaborebong.com/admin/news_image/<?php echo $news_image; ?>" />

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="styles.css">
<link href="css/flexslider.css" rel="stylesheet" media="screen">
<!--rating_start-->
<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    
   <!--rating_end--> 

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script>
function review_post() {
  
 $('#process').css('display','block'); 
            $.ajax({type:'POST', url: 'http://khaborebong.com/probal/post_review1.php', data:$('#review_form').serialize(), success: function(response) {
            alert(1);
            var res = response.split("|"); 
           
            if( res[0]=='ok' ) {
                 $('#process').css('display','none');
                 //window.location.href = 'billing.php?b_id='+res[1]; 
                 //window.location.href="billing.php?b_id"+res[1];

            }
}
});
return false;
}
</script>
   <script src="script.js"></script>
   <script src="js/star-rating.js" type="text/javascript"></script><!--rating_script--> 
  <script src="js/jquery.rating.js" type="text/javascript"></script>
   <link rel="stylesheet" href="css/jquery.rating.css" media="all" rel="stylesheet" type="text/css"/>
   <!--social_start-->
   <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "548392b5-111a-442f-8c11-a036bfe02227", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<!--social_end-->
   

<title>Khaborebong.com - Online Bengali News Portal</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #B1C7D6;
}
.style4 {color: #FF0000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; }
.style6 {
	color: #FFFFFF;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.style8 {
	font-size: 12px;
	color: #FFFFFF;
}
.style9 {
	color: #FF0000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style11 {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
}
.style16 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
}
.style19 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #003366;
	font-weight: bold;
}
.style20 {
	color: #FFFFFF;
	font-size: 20px;
	font-family: 'Roboto Condensed', sans-serif;
	
}
.style22 {font-family: 'Roboto Condensed', sans-serif; font-size: 20px; color:#FFFFFF;}
.style23 {
	font-size: 24px;
	color: #FF0000;
}
.style27 {font-size: 19px}
.style28 {font-family: Arial, Helvetica, sans-serif}
.style29 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
}
.style31 {font-size: 14px; font-family: 'Roboto Condensed', sans-serif; }
.style34 {
	color: #666666;
	font-size: 12px;
	font-family: 'Roboto Condensed', sans-serif;
}
.style35 {
	color: #999999;
	font-weight: bold;
}
.style36 {color: #999999}
.style37 {font-size: 14px; font-family: 'Roboto Condensed', sans-serif; font-weight: bold; color: #999999; }
.style38 {font-size: 14px; font-family: 'Roboto Condensed', sans-serif; color: #999999; }
.style41, p:not(.contact p), ul.p {
	font-size: 15px;
	font-family: 'Roboto Condensed', sans-serif;
	color: #000000;
    line-height: 22px;
}
.contact p {width: 35%!important; line-height: 20px!important;}
.contact input, .contact select, .contact textarea {width: 65%!important; line-height: 34px; padding: 2px; min-height: 42px; margin-bottom: 5px}
.contact .hl {float: left; width: 31.5%!important; margin-right: 2%!important;}
.contact .hr {float: left; width: 31.5%!important;}
.style44 {
	font-size: 18px;
	color: #FF0000;
}
.style46 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style48 {font-size: 24px; color: #FFFF00; }
.style50 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
-->
</style>

</head>

<body>
<script type="text/javascript" src="js/arrow27.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
<table width="1064" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1064" height="36" align="center" valign="middle" bgcolor="#000000"><?php include('social_search.php');?></td>
  </tr>
  <tr>
    <td width="1064" height="140" align="center" valign="middle" bgcolor="#FFFFFF"><?php include('banner.php');?></td>
  </tr>
  <tr>
    <td width="1064" height="40" align="center" valign="middle" bgcolor="#FFFFFF"><?php include('breaking_news.php');?></td>
  </tr>
  <tr>
    <td width="1064" height="76" align="center" valign="middle" bgcolor="#FFFFFF"><?php include('menu.php');?></td>
  </tr>
  
  <tr>
    <td height="40" align="center" valign="top" bgcolor="#FFFFFF"><?php include('news_flash.php');?></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?php /*?><?php include('slider.php');?><?php */?></td>
  </tr>
  <tr>
    <td height="20" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF"><table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td rowspan="2" valign="top"><table width="640" border="0" cellspacing="0" cellpadding="0">
          
          
          <tr>
            <td height="40"bgcolor="#FF0000" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><span class="style20">&nbsp;&nbsp;&nbsp;
	 Khabore Bong Online Short film Festival (KBOSFF) 2017 - ছোট্ট ছবির মুক্ত মঞ্চ</span><span class="more"></span></td>
            </tr>
          <tr>
            <td height="25px">
             
            </td>
            </tr>

                <tr>
                    <td height="25px">
                        <h3>Introduction</h3>
                        <p>Khabore Bong Online Short film Festival (KBOSFF) 2017 (ছোট্ট ছবির মুক্ত  মঞ্চ) is a competitive grass roots short film festival organized by www.khaborebong.com 24x7 Bengali News & Entertainment Website. This Festival is exclusively online.
This arena has been created a way for Bong youth to express their questions, answers, inspirations, desperations and everything in between. Our only criteria are that all entries should be related to Bong (Bengali). We consider it to be a venue that anyone of any skill level can participate in.
</p>
<h3>Event Details</h3>
                        <p>Duration of the festival is from 4th February to 28th February 2017, among from all entries only top 25 films will be selected for the festival. List of top 25 selected short films / documentaries with screening schedule will be published on 20th January 2017. Selected top 25 films will be screened online During the Festival at our website www.khaborebong.com Everyday only one Film Will be screened. Online Voting will be available for all viewers during the screening of the film. List of Winners for all categories will be published at www.khaborebong.com on 3rd March 2017.</p>
<h3>Award Category</h3>
                        <ul class="p">
                            <li>Best Film</li>
                            <li>Best Cinematography</li>
                            <li>Best Direction</li>
                            <li>Best Social message</li>
                            <li>Judges Choice</li>
                            <li>Viewer’s Choice</li>
                        </ul>
                        <h3>Judgment</h3>
                        <p>A distinguished panel of industry  experts will judge all the entries, a various number of awards will be given to  winners of different categories.</p>
<h3>Eligibility</h3>
                        <ul class="p">
                            <li>Films Completed After January 2012</li>
                               <li>Film Duration Minimum 3 minutes Maximum 30 Minutes</li>
                               <li>Accepted Genres : All kinds of Short Films, Documentary, Animation Films &amp; Music Videos</li>
                               <li><em>No entry will be accepted after 5 pm of 16h January 2017</em></li></ul>
                        <h3>Submission process</h3>
                        <ul class="p">
                            <li>Step 1 to participate, enroll your film at www.khaborebong.com on or after 16th December 2017.</li>
                            <li>Step 2 Send your Short film (DVD) and registration fees (Rs 200/- Only) at khaborebong.com office by hand or by courier. Office addresses 5/4 Netaji Nagar, Kolkata 700040. West Bengal.</li>
                            <li>The submission deadline without late fine is January 8th , 2017</li>
                            <li>All participant should enroll their entry by filling up specified form online at our website www.khaborebong.com</li>
                            <li>Enrollment fee Rs 200/- only for every single film.</li>
                            <li>The submission deadline with late fine (Rs 50) is January 16th,2017</li>
                            <li>An extra amount of Rs 50 will be charged as late entry (9th to 16th January 2017)</li>
                            <li>In case of online submission of short film or DVD submission through Courier service. Payment must be done by Pay TM (Mobile No 9903404207) and have to mention the Transaction number at the specified area at the time of online Enrollment.</li>
                            <li>Online payments are subject to realization, an official acknowledgement letter will send after clearance and receipt of DVD, via email or sms.</li>
                            <li>In case of online submission of short films applicant must send (/share) the file via Google Drive or www.wetransfer.com at our official mail id kbosff.khaborebong@gmail.com</li>
                            
                            <li>After successful online enrollment of the entry candidates also can send their DVD and submission fees by hand at khaborebong.com office, Between 11.30 am to 5 pm, Our office address is 5/4 Netaji Nagar, Kolkata 700040 , West Bengal , India</li>
                            <li>For any enquiry or information regarding KBOSFF please call us at 9903404207 ( 11 am to 7 pm ) or email us at editor.khaborebong@gmail.com</li>
                            
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td height="25px">

                    </td>
                </tr>
           
         <tr>
            <td height="25px">
                <h3>KBOSFF 2017 Enrollment Form</h3><br>
            <form name="contact_form" action="send_contact_mail.php" method="post" enctype="multipart/form-data">
             <ul class="contact">
             	<li>
                	<p>1. Film Title</p>
                    <input type="text" name="film_title" required="required"/>
                </li>
                <li>
                	<p>2. Year of Production</p>
                    <select name="production_year" required>
                        <option value="" selected disabled>--Select Production Year--</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                    </select>
                </li>
                 <li>
                     <p>3. Running Time (min/sec)</p>
                     <input class="hl" type="text" name="running_time_min" placeholder="min" required="required">
                     <input class="hr" type="text" name="running_time_sec" placeholder="sec" required="required">
                 </li>
                 <li>
                     <p>4. Genre of Film</p>
                     <input type="text" name="genre" required="required"/>
                 </li>
                 <li>
                     <p>5. Type of Camera Used</p>
                     <input type="text" name="camera" required="required"/>
                 </li>
                <li>
                	<p>6. Language of Dialogues</p>
                    <input type="text" name="dialogue_lang" required="required"/>
                </li>
                 <li>
                     <p>7. Language of Subtitles</p>
                     <input type="text" name="subtitle_lang" required="required"/>
                 </li>
                 <li>
                     <p>8. Brief synopsis (in English • max. 350 characters)</p>
                     <textarea name="synopsis_en" required="required"></textarea>
                 </li>
                 <li>
                     <p>9. Brief synopsis (in Bengali if available • max. 350 characters)</p>
                     <textarea name="synopsis_bn"></textarea>
                 </li>
                 <li>
                     <p>10. Previous screenings of this submission( if any )</p>
                     <input type="text" name="previous_screening"/>
                 </li>
                 <li>
                     <p>11.	Upload Poster / Cover of the Film (in Jpeg format)  (max 3 photos )</p>
                     <input type="file" name="attach1" required="required"/><br>
                     <p></p>
                     <input type="file" name="attach2"/><br>
                     <p></p>
                     <input type="file" name="attach3"/>
                 </li>
                 <li>
                     <p>12. Director(s)</p><input type="text" disabled style="opacity: 0">
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Director 1</p><input class="hl" type="text" name="director_1_name" placeholder="Name" required="required"/><input class="hr" type="text" name="director_1_facebook" placeholder="Facebook / Twitter Link" required="required"/>
                     <p></p><label for="director_1_image" class="hl">Upload Image</label><input class="hr" type="file" name="attach4" required="required"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Director 2</p><input class="hl" type="text" name="director_2_name" placeholder="Name"/><input class="hr" type="text" name="director_2_facebook" placeholder="Facebook / Twitter Link"/>
                     <p></p><label for="director_2_image" class="hl">Upload Image</label><input class="hr" type="file" name="attach5"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Director 3</p><input class="hl" type="text" name="director_3_name" placeholder="Name"/><input class="hr" type="text" name="director_3_facebook" placeholder="Facebook / Twitter Link"/>
                     <p></p><label for="director_3_image" class="hl">Upload Image</label><input class="hr" type="file" name="attach6"/>
                 </li>
                 <li>
                     <p>13. Production Team</p><input type="text" disabled style="opacity: 0">
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script</p><input type="text" name="production_script"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cinematography</p><input type="text" name="production_cinematography"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editing</p><input type="text" name="production_editing"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sound</p><input type="text" name="production_sound"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Composing/Sound Design</p><input type="text" name="production_composing"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cast</p><textarea name="production_cast"></textarea>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</p><textarea name="production_others"></textarea>
                 </li>
                 <li>
                     <p>14. Addresses and Contacts</p><input type="text" disabled style="opacity: 0">
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Director's mailing address</strong></p><input type="text" name="director_address" required="required"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</p><input type="text" name="director_phone"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Id</p><input type="email" name="director_email"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name of the entrant</strong></p><input type="text" name="entrant_name" required="required"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relation with the Film<br><small style="font-size: 10px!important;">( Director / Producer / Cast & Crew / other )</small></p><input type="text" name="entrant_relation" required="required"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No</p><input type="text" name="entrant_phone" required="required"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Id</p><input type="text" name="entrant_email" required="required"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Production Company</strong></p><input type="text" name="production_company_name"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No.</p><input type="text" name="production_company_phone"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Id</p><input type="email" name="production_company_email"/>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address</p><input type="text" name="production_company_address"/>
                 </li>
                 <li>
                     <p>15. Social Message / Moral of the film (if any)</p>
                     <input type="text" name="moral"/>
                 </li>
                 <li>
                     <p>16. Film Submission</p>
                     <select class="hl" name="film_submission_type" required>
                         <option value="" disabled selected>--Select Method--</option>
                         <option value="googledrive">Google Drive</option>
                         <option value="wetransfer">WeTransfer.com</option>
                         <option value="offline">Offline (by hand / courior)</option>
                     </select>
                     <input type="text" class="hr" name="film_submission_detail" placeholder="Provide link / Details">
                 </li>
                 <li>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enrollment Fees</p>
                     <select name="enrollment_fees" required>
                         <option value="" disabled selected>--Select Applicable Fee--</option>
                         <option value="normal">Rs. 200</option>
                         <option value="late">Rs. 250 (late entry)</option>
                     </select>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment Mode</p>
                     <select name="payment_mode" required onchange="if(this.value=='cash'){document.getElementById('cdd_no').disabled=true}else{document.getElementById('cdd_no').disabled=false}">
                         <option value="" disabled selected>--Select Mode--</option>
                         <option value="cash">Cash</option>
                         <option value="Paytm">Paytm</option>
                     </select>
                     <!-- <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheque / DD No.</p> -->
                     <input id="cdd_no" type="hidden" name="payment_detail" value="NA" />
                 </li>
                 <li>
                     <h5>RIGHTS</h5>
                     <p style="width: 100%!important; font-size: 12px!important;">The person or institution submitting the film is responsible for clearing all rights to the content of the work relevant to the film's use by the Festival (especially screening and streaming on our website). By submitting, they state that they are authorized representatives thereof, i. e. that screening or other use of the film by the Festival does not infringe rights held by third parties (e. g. copyrights, personality or trademark rights), and that especially the rights to any material produced by others (music, film footage, photo- graphs, text etc.) used in the film have been cleared</p>
                 </li>
                 <li>
                        <button type="submit">SUBMIT</button><b style="float:right;"><?php if(isset($_REQUEST['p']) && $_REQUEST['p'] == 's') {echo 'Mail Sent Successfully';}?></b>
                    </li>
             </ul>
             </form>
            </td>
            </tr>
                <tr>
                    <td height="25px" style="padding-top: 50px">
                        <hr>
                        <h3>Terms & Conditions</h3>
                        <ul>
                            <li>Your film should be related to some aspect of being a Bong (Bengali).</li>
                            <li>Khaborebong.com authority reserves all rights for the festival, the authority reserves the right to disqualify any submission for profanity, gratuitous violence, discrimination based on religion, race or gender, inappropriate or politically inflammatory themes.</li>
                            <li>Khaborebong.com strongly encourages all filmmakers to use original or copyright free music for their soundtracks, however khaborebong.com does not enforce that filmmakers use copyright free music. Khaborebong.com features all films on YouTube which does enforce copyrighted music and will remove videos on those grounds.</li>
                            <li>A maximum of 3 individuals can be listed as directors in the film registration. Additional people helping can be credited in the movie. An individual photo is required of all directors (no group photos). Acceptable formats: jpg, jpeg . This photo should be a clear view of the entire face.</li>
                            <li>Entrants must comply with all rules to be eligible for the prizes.</li>
                            <li>While all due care and attention will be exercised, the khaborebong.com cannot accept or assume responsibility for damage or loss of materials submitted, either while in possession by khaborebong.com and/or its staff, or while on route through the mail or internet.</li>
                            <li>By submitting your film to the festival, you are granting khaborebong.com non-exclusive rights to use your film and images there from for the non-profit purposes of exhibition, promotion, Filmmakers should make their actors aware of this.</li>
                            <li>By submitting your film(s) or video(s) to KBOSFF you understand that it will be shown in khaborebong.com and possibly available for download freely.</li>
                            <li>Videos must meet a certain quality standard. KBOSFF reserves the right to decide which videos are featured and entered into the Khabore Bong Online Short Film Festival.</li>
                        </ul>
                    </td>
                </tr>
          <tr>
            <td height="15px"></td>
            </tr>
         
          <tr>
            <td height="15px"></td>
            </tr>
         
            
            <tr>
            <td height="15px"></td>
            </tr>
           
        </table></td>
        <td width="40" rowspan="2" align="center" valign="middle" background="images_khaborebong/divider.png">&nbsp;</td>
        <td width="360" height="40" bgcolor="#000000" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Popular News</td>
      </tr>
      <tr>
        <td width="360" align="center" valign="top"><?php include('right_bar.php');?></td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="center" valign="middle"><hr /></td>
      </tr>
      <tr>
        <td height="320" colspan="3" align="center" valign="top"><?php include('footer.php');?></td>
        </tr>
      
      
    </table></td>
  </tr>
</table>
 <?php				
$select_user = "SELECT * FROM `category` where `category`='$cat'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row= mysql_fetch_array($exe_selectuser);
$cat_image= $row['cat_image']; 

?>
<div id="pbg">
<img src="admin/background/5542tegnology .jpg" />
</div>
<script src="js/jquery.ez-bg-resize.js"></script>
<script>
$("#pbg").ezBgResize();


</script>
</body>
</html>
