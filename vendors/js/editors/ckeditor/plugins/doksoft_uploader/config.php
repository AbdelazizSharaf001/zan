<?php
define("access", true);

require_once('config.php');
require_once('../../../../../../../www/dir.php');
require_once('../../../../../../../www/config/config.php');

$baseUrl = $ZP["webURL"] .'/www/lib/files/'; 
$baseDir = DIR ."/lib/files/";

$config['Images'] = array(
		'maxWidth' 	=> 1600,
		'maxHeight' => 1200,
		'quality' 	=> 80);

$config['ResizedImages'] = array(
		'maxWidth' 	=> 640,
		'maxHeight' => 480,
		'quality'	=> 80);

$config['Thumbnails'] = array(
		'maxWidth' 	=> 200,
		'maxHeight' => 140,
		'quality' 	=> 80);
		
$config['ResourceType']['Files'] = array(
		'url' 				=> $baseUrl .'documents/uploads',
		'directory' 		=> $baseDir .'documents/uploads',
		'maxSize' 			=> 0, 
		'allowedExtensions' => '7z,aiff,asf,avi,bmp,csv,doc,docx,fla,flv,gif,gz,gzip,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,
		ods,odt,pdf,png,ppt,pptx,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vsd,wav,wma,wmv,xls,xlsx,zip');

$config['ResourceType']['Images'] = array(
		'url' 				=> $baseUrl .'images/uploads',
		'directory' 		=> $baseDir .'images/uploads',
		'maxSize' 			=> 16 * 1024 * 1024, 
		'allowedExtensions' => 'bmp,gif,jpeg,jpg,png');
		
?>