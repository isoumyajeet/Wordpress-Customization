<?php
include_once('../../../wp-load.php');
global $wpdb;
if(count($_POST)>0)
{
	$usedata=array();	
	
	$user_email=isset($_REQUEST['email'])?trim($_REQUEST['email']):"";
	$password=isset($_REQUEST['password'])?trim($_REQUEST['password']):"";
	
        //die();
$user_login = sanitize_user($user_email);

$creds = array();
$creds['user_login']    = $user_login;
$creds['user_password'] = $password;
//$creds['remember']      = $auto_login;

$user = wp_signon( $creds, false );

	if ( !is_wp_error($user) ) 
	{
	  //header("location:".get_permalink(165));
            wp_redirect( home_url()."/post-page-name" );
	}
	else
	{		
	  //header("location:".get_permalink(228));
            wp_redirect( home_url()."/login" );
	}
			
}
?>
