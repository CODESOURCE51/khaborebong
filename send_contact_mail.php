<?php
$film_title = $_REQUEST['film_title'];
$prod_yr = $_REQUEST['production_year'];
$run_time = $_REQUEST['running_time_min'].':'.$_REQUEST['running_time_sec'];
$genre = $_REQUEST['genre'];
$type_cam = $_REQUEST['camera'];
$dia_lang = $_REQUEST['dialogue_lang'];
$sub_lang = $_REQUEST['subtitle_lang'];
$eng_brief = $_REQUEST['synopsis_en'];
$beng_brief = $_REQUEST['synopsis_bn'];
$pre_screen = $_REQUEST['previous_screening'];
$dir_name1 = $_REQUEST['director_1_name'];
$dir_link1 = $_REQUEST['director_1_facebook'];
$dir_name2 = $_REQUEST['director_2_name'];
$dir_link2 = $_REQUEST['director_2_facebook'];
$dir_name3 = $_REQUEST['director_3_name'];
$dir_link3 = $_REQUEST['director_3_facebook'];
$script = $_REQUEST['production_script'];
$cinematography = $_REQUEST['production_cinematography'];
$editing = $_REQUEST['production_editing'];
$sound = $_REQUEST['production_sound'];
$sound_dsgn = $_REQUEST['production_composing'];
$cast = $_REQUEST['production_cast'];
$others = $_REQUEST['production_others'];
$dir_mail = $_REQUEST['director_address'];
$dir_cont = $_REQUEST['director_phone'];
$email = $_REQUEST['director_email'];
$entrant = $_REQUEST['entrant_name'];
$rltn = $_REQUEST['entrant_relation'];
$contact = $_REQUEST['entrant_phone'];
$eemail = $_REQUEST['entrant_email'];
$p_company = $_REQUEST['production_company_name'];
$p_contact = $_REQUEST['production_company_phone'];
$p_email = $_REQUEST['production_company_email'];
$p_add = $_REQUEST['production_company_address'];
$moral = $_REQUEST['moral'];
$submission_type = $_REQUEST['film_submission_type'];
$submission_link = $_REQUEST['film_submission_detail'];
$fees = $_REQUEST['enrollment_fees'];
$pay_mode = $_REQUEST['payment_mode'];
$pay_no = $_REQUEST['payment_detail'];

$image_name1 = $_FILES['attach1']['name'];
  $image_tmp1 = $_FILES['attach1']['tmp_name'];
  $img1 = explode('.',$image_name1);
    $fileName1 = $img1[0].time().'.'.$img1[1];
      $pathAndName1 = "mail_files/".$fileName1;
      move_uploaded_file($image_tmp1, $pathAndName1);

      $image_name2 = $_FILES['attach2']['name'];
  $image_tmp2 = $_FILES['attach2']['tmp_name'];
  $img2 = explode('.',$image_name2);
    $fileName2 = $img2[0].time().'.'.$img2[1];
      $pathAndName2 = "mail_files/".$fileName2;
      move_uploaded_file($image_tmp2, $pathAndName2);

      $image_name3 = $_FILES['attach3']['name'];
  $image_tmp3 = $_FILES['attach3']['tmp_name'];
  $img3 = explode('.',$image_name3);
    $fileName3 = $img3[0].time().'.'.$img3[1];
      $pathAndName3 = "mail_files/".$fileName3;
      move_uploaded_file($image_tmp3, $pathAndName3);

      $image_name4 = $_FILES['attach4']['name'];
  $image_tmp4 = $_FILES['attach4']['tmp_name'];
  $img4 = explode('.',$image_name4);
    $fileName4 = $img4[0].time().'.'.$img4[1];
      $pathAndName4 = "mail_files/".$fileName4;
      move_uploaded_file($image_tmp4, $pathAndName4);

      $image_name5 = $_FILES['attach5']['name'];
  $image_tmp5 = $_FILES['attach5']['tmp_name'];
  $img5 = explode('.',$image_name5);
    $fileName5 = $img5[0].time().'.'.$img5[1];
      $pathAndName5 = "mail_files/".$fileName5;
      move_uploaded_file($image_tmp5, $pathAndName5);

       $image_name6 = $_FILES['attach6']['name'];
  $image_tmp6 = $_FILES['attach6']['tmp_name'];
  $img6 = explode('.',$image_name6);
    $fileName6 = $img6[0].time().'.'.$img6[1];
      $pathAndName6 = "mail_files/".$fileName6;
      move_uploaded_file($image_tmp6, $pathAndName6);



function multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files){

    $from = $senderName." <".$senderMail.">"; 
    $headers = "From: $from";

    // boundary 
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

    // multipart boundary 
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 

    // preparing attachments
  if(count($files) > 0){
    for($i=0;$i<count($files);$i++){
      if(is_file($files[$i])){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($files[$i],"rb");
        $data =  @fread($fp,filesize($files[$i]));
        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($files[$i])."\"\n" . 
        "Content-Description: ".basename($files[$i])."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($files[$i])."\"; size=".filesize($files[$i]).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
      }
    }
  }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $senderMail;
  
  //send email
    $mail = @mail($to, $subject, $message, $headers, $returnpath); 
  
  //function return true, if email sent, otherwise return fasle
    if($mail){ return TRUE; } else { return FALSE; }
}


//email variables
$to = 'editor.khaborebong@gmail.com';
$from = $eemail;
$from_name = $entrant;

//attachment files path array
$files = array('mail_files/'.$fileName6,'mail_files/'.$fileName5,'mail_files/'.$fileName4, 'mail_files/'.$fileName3, 'mail_files/'.$fileName2, 'mail_files/'.$fileName1);

$subject = 'Enquiry from Khoborebong about KBSOFF'; 
 $html_content = 'Below are the Details of the enquery:<br/> Film Title : '.$film_title.'<br/> 
    Year of Production: '.$prod_yr.'<br/> 
    Running Time (min/sec) : '.$run_time.'<br/> 
    Genre of Film : '.$genre.'<br/> 
    Type of Camera Used : '.$type_cam.'<br/> 
    Language of Dialogues : '.$dia_lang.'<br/> 
    Language of Subtitles : '.$sub_lang.'<br/> 
    Brief synopsis (in English • max. 350 characters) : '.$eng_brief.'<br/>
    Brief synopsis (in Bengali if available • max. 350 characters) : '.$beng_brief.'<br/> Previous screenings of this submission( if any ) : '.$pre_screen.'<br/>
    Director 1 : '.$dir_name1.'<br/>
    Link : '.$dir_link1.'<br/>
    Director 2 : '.$dir_name2.'<br/>
    Link : '.$dir_link2.'<br/>
    Director 3 : '.$dir_name3.'<br/>
    Link : '.$dir_link3.'<br/>
    Script : '.$script.'<br/>
    Cinematography : '.$cinematography.'<br/>
    Editing : '.$editing.'<br/>
    Sound : '.$sound.'<br/>
    Composing/Sound Design : '.$sound_dsgn.'<br/>
    Cast : '.$cast.'<br/>
    Others : '.$others.'<br/>
    Director mailing address : '.$dir_mail.'<br/>
    Contact No : '.$dir_cont.'<br/>
    Email Id : '.$email.'<br/>
    Name of the entrant : '.$entrant.'<br/>
    Relation with the Film : '.$rltn.'<br/>
    Contact No : '.$contact.'<br/> Email Id : '.$eemail.'<br/>
    Production Company : '.$p_company.'<br/>
    Contact No. : '.$p_contact.'<br/>
    Email Id : '.$p_email.'<br/>
    Address : '.$p_add.'<br/>
    Moral of the film : '.$moral.'<br/>
    Submission Method : '.$submission_type.'<br/>
    Submission Link : '.$submission_link.'<br/>
    Enrollment Fees : '.$fees.'<br/>
    Payment Mode : '.$pay_mode.'<br/>
    Cheque / DD No : '.$pay_no.'';
$html_content .= '<h1>Enquiry from Khoborebong about KBSOFF</h1>
      <p><b>Total Attachments : </b>'.count($files).' attachments</p>';
      

//call multi_attach_mail() function and pass the required arguments
$send_email = multi_attach_mail($to,$subject,$html_content,$from,$from_name,$files);

//print message after email sent
//echo $send_email?"<h1> Mail Sent</h1>":"<h1> Mail not SEND</h1>";
header('Location: http://khaborebong.com/contact_form.php?p=s');

?>