<?php
	if(!defined('LIBRARIES')) die("Error");

	/* Timezone */
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	/* Cấu hình coder */
	define('NN_CONTRACT', 'MSHD');
	define('NN_AUTHOR', 'tranvduong.nina@gmail.com');

	/* Cấu hình chung */
	$config = array(
		'author' => array(
			'name' => 'Trần Văn Dương',
			'email' => 'tranvduong.nina@gmail.com',
			'timefinish' => '01/01/2022'
		),
		'arrayDomainSSL' => array(),
		'database' => array(
			'server-name' => $_SERVER["SERVER_NAME"],
			'url' => '/2022/source_company/12/datduc_235622w/', // Thay
			'type' => 'mysql',
			'host' => 'localhost',
			'username' => 'root',
			'password' => '',
			'dbname' => '2022-12_datduc_235622w',//Thay
			'port' => 3306,
			'prefix' => 'table_',
			'charset' => 'utf8mb4'
		),
		'website' => array(
			'error-reporting' => true,
			'secret' => '$nina@',
			'salt' => 'swKJjeS!t',
			'debug-developer' => true,
			'debug-css' => true,
			'debug-js' => true,
			'index' => false,
			'image' => array(
				'hasWebp' => false,
			),
			'video' => array(
				'extension' => array('mp4', 'mkv'),
				'poster' => array(
					'width' => 700,
					'height' => 610,
					'extension' => '.jpg|.png|.jpeg'
				),
				'allow-size' => '100Mb',
				'max-size' => 100 * 1024 *1024
			),
			'upload' => array(
				'max-width' => 1600,
				'max-height' => 1600
			),
			'lang' => array(
				'vi'=>'Tiếng Việt',
				
			),
			'lang-doc' => 'vi|en',
			'slug' => array(
				'vi'=>'Tiếng Việt',
				
			),
			'seo' => array(
				'vi'=>'Tiếng Việt',
				
			),
			'comlang' => array(
				"gioi-thieu" => array("vi"=>"gioi-thieu","en"=>"about-us"),
				"san-pham" => array("vi"=>"san-pham","en"=>"product"),
			)
		),
		'order' => array(
			'ship' => true
		),
		'login' => array(
			'admin' => 'LoginAdmin'.NN_CONTRACT,
			'member' => 'LoginMember'.NN_CONTRACT,
			'attempt' => 5,
			'delay' => 15
		),
		'googleAPI' => array(
			'recaptcha' => array(
				'active' => false,
				'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
				'sitekey' => '6LezS5kUAAAAAF2A6ICaSvm7R5M-BUAcVOgJT_31',
				'secretkey' => '6LezS5kUAAAAAGCGtfV7C1DyiqlPFFuxvacuJfdq'
			)
		),
		'oneSignal' => array(
			'active' => false,
			'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
			'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
		),
		'license' => array(
			'version' => "7.1.0",
			'powered' => "phuctai.nina@gmail.com"
		)
	);

	/* Error reporting */
	error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);

	/* Cấu hình http */
	if(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
	{
		$http = 'https://';
	}
	else
	{
		$http = 'http://';
	}

	/* Cấu hình SSL */
	if(count($config['arrayDomainSSL']))
	{
		if(file_exists(LIBRARIES."ssl.txt"))
		{
			if(time() - filemtime(LIBRARIES."ssl.txt") > 24*3600*1)
			{
				include LIBRARIES."checkSSLv2.php";
			}
			else
			{
				$httpz = file_get_contents(LIBRARIES."ssl.txt");

				if($httpz != $http)
				{
					header("HTTP/1.1 301 Moved Permanently");
					header("Location:".$httpz.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
					exit();
				}
			}
		}
		else
		{
			include LIBRARIES."checkSSL.php";
		}
	}

	/* Cấu hình base */
	$configUrl = $config['database']['server-name'].$config['database']['url'];
	$configBase = $http.$configUrl;

	/* Token */
	define('TOKEN', md5(NN_CONTRACT.$config['database']['url']));

	/* Path */
	define('ROOT', str_replace(basename(__DIR__), '', __DIR__));
	define('ASSET', $http.$configUrl);
	define('ADMIN', 'admin');

	/* Cấu hình login */
	$loginAdmin = $config['login']['admin'];
	$loginMember = $config['login']['member'];

	/* Cấu hình upload */
	require_once LIBRARIES."constant.php";
?>