<?php
include('admin/connection.php');
$cat_id = $_REQUEST['id'];
$cate_name = $_REQUEST['category'];
$cap = $_REQUEST['caption'];
$nid = $_REQUEST['news_id'];
$name = $_REQUEST['post_name'];
$email = $_REQUEST['post_email'];
$rating = $_REQUEST['rating'];
$coment = $_REQUEST['post_comment'];
$data = date('d-m-Y');
$customer_add = 'INSERT INTO td_review(news_id,cust_name,cust_email,rate,rdate,message) VALUES("'.$nid.'","'.$name.'","'.$email.'","'.$rating.'","'.$data.'","'.$coment.'")';
$add_query = mysql_query($customer_add, $con) or die(mysql_error());
header('Location: http://khaborebong.com/somc/news_details.php?cat_id='.$cat_id.'&category_name='.$cate_name.'&caption='.$cap);
?>
