<?php
error_reporting(E_ALL);

define('SILENTC_TOKEN', file_get_contents('1454928832:AAH542d19wm9P94LBzhukaaFY2bnr4ykBt0'));
$db_data = ['sqlite:silentc.db'];

$cfg = [
	# Users that can use the special commands
	'sudoers' => [
		1261257884,
	],
	'api_id' => 1948374,
	'api_hash' => '113be69e13bf6f71583fb0783b1ab841',
];

# User that will receive the error reports
define('SILENTC_ADMIN', 1261257884;
