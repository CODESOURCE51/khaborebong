<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['msg'];
 //$comment = $_REQUEST['txt_msg'];
 $to='admin@khaborebong.com';
 $subject="Someone contacted you from Khabor Ebong";

 $message = '<table align="center" width="700" style="border:outset #B1F05E;">
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;">Below are the Details of the enquery:</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Name : '.$name.'</span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Email ID : '.$email.'</span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Phone : '.$phone.'</span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Comment : '.$msg.'</span></td>
  </tr>
 </table>';

 $headers = "From: admin@khaborebong.com\r\nReply-To: admin@khaborebong.com";
 $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=iso-8859-1";
 mail($to, $subject, $message, $headers);
 header('Location: http://khaborebong.com/somc/contact_form.php?p=s');
?>


