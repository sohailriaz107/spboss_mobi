<?php 
$con = mysqli_connect("15.235.214.152","dpboss_user","LdgDDG6hFxAXJmk","dpboss_net_new"); 
if (mysqli_connect_errno() || 0) {
	$con = mysqli_connect("51.89.43.122","dpboss_user","LdgDDG6hFxAXJmk","dpboss_net");
	if (mysqli_connect_errno()) {
		$con = mysqli_connect("51.178.76.17","dpboss_user","LdgDDG6hFxAXJmk","dpboss_net");
	}
	if (mysqli_connect_errno()) {
		$con = mysqli_connect("51.195.4.25","dpboss_user","LdgDDG6hFxAXJmk","dpboss_net");
	}
	if (mysqli_connect_errno()) {
		$con = mysqli_connect("51.195.4.25","dpboss_user","LdgDDG6hFxAXJmk","dpboss_net");
	}
}
date_default_timezone_set('Asia/Kolkata');
?>
 
 
