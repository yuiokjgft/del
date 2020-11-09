<?php
error_reporting(E_ALL);

define('1454928832:AAH542d19wm9P94LBzhukaaFY2bnr4ykBt0', file_get_contents('_token'));
$db_data = ['sqlite:silentc.db'];

$cfg = [
	# Users that can use the special commands
	'sudoers' => [
		1261257884,
	],
	'api_id' => 123456,
	'api_hash' => 'change-to-yours',
];

# User that will receive the error reports
define('SILENTC_ADMIN', 1261257884;
