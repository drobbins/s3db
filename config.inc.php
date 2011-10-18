<?php
include_once 'constants.php';
    $cwd = str_replace("/admin", "", dirname($_SERVER['SCRIPT_FILENAME']));
    define('S3DB_SERVER_ROOT', $cwd);
    $uri_base = str_replace("/admin", "", substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/')));
    define('S3DB_URI_BASE', $uri_base);;
    $GLOBALS['s3db_info']['server']['email_host']='mail';
    $GLOBALS['s3db_info']['server']['site_config_admin']='Admin';
    $GLOBALS['s3db_info']['server']['site_config_admin_pass']='Qt5Shn3J5o';
    $GLOBALS['s3db_info']['server']['logo_file']='/usr/local/var/www/s3db/images/s3db.png';
    $GLOBALS['s3db_info']['server']['site_title']='s3db-secure-data';
    $GLOBALS['s3db_info']['server']['site_intro']='Data store for secure S3DB experiments.';
    $GLOBALS['s3db_info']['server']['db']['db_type']='mysql';
    $GLOBALS['s3db_info']['server']['db']['db_host']='localhost';
    $GLOBALS['s3db_info']['server']['db']['db_name']='s3db';
    $GLOBALS['s3db_info']['server']['db']['db_user']='s3dbuser';
    $GLOBALS['s3db_info']['server']['db']['db_pass']='a4WJI';
    $GLOBALS['s3db_info']['server']['db']['uploads_file']='QwrcYkTkebydRle';
    $GLOBALS['s3db_info']['server']['db']['uploads_folder']='/usr/local/var/www/s3db/extras/';
    $GLOBALS['s3db_info']['deployment']['private_key']='-----BEGIN RSA PRIVATE KEY-----
MIIBgQIBAAJRAICTbGtTFyxqDg6+dMDlSRSlwmg7+ytsUMjUxTp/q8UNLiHVeXyls8C19e2cb+F5
3oxGQhzbKhvrsxFWDTPZgzbuxLYo50y7LVQ/GfezNwJJAgMBAAECUBdov+iabDGt7XlJu8AS/sc/
lrGbmhNB2UN3WaFY9VEfITMPxtqm4J8FAEETrajhfiQ4RgZC0blFVUChJ6QJqwLVf12GJtx7UpMy
lPqxdEAxAikAilbXPg35F7yX9WqHSdpMqHB3Lbpv6/tV+JDkIr6sMsgg/C/sh9ew7wIpAO3uxO1i
lRIVeUjQEEWIiNM2HcDRqsEus41elF99GlmO2sGqgn4KEEcCKGYc2b5lZANgYy501q3t4/3FHkNz
xZ+Dox7aHHuFEOhfDvH3kflnfaMCKCN3aQFdpYzpiIezBAnpXUPmmC7K0iIzvO4AwCsvscLRyYf+
y67P/zcCKF62z7f3R12AAGBLz/qauu4V2Xq13sHXumpu9NVg/rwghJA6Y7bV6/I=
-----END RSA PRIVATE KEY-----';
    $GLOBALS['s3db_info']['deployment']['public_key']='LS0tLS1CRUdJTiBQVUJMSUMgS0VZLS0tLS0NCk1GZ0NVUUNBazJ4clV4Y3NhZzRPdm5UQTVVa1VwY0pvTy9zcmJGREkxTVU2ZjZ2RkRTNGgxWGw4cGJQQXRmWHRuRy9oZWQ2TVJrSWMNCjJ5b2I2N01SVmcwejJZTTI3c1MyS09kTXV5MVVQeG4zc3pjQ1NRSURBUUFCDQotLS0tLUVORCBQVUJMSUMgS0VZLS0tLS0=';
    $GLOBALS['s3db_info']['deployment']['mothership']='http://root.s3db.org/';
    $GLOBALS['s3db_info']['deployment']['Did']='2691';
    $GLOBALS['s3db_info']['deployment']['did_keywords']='';
    $GLOBALS['s3db_info']['deployment']['userName']='';
    $GLOBALS['s3db_info']['deployment']['email']='';
?>
