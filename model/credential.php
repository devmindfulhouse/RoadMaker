<?php

// Default credential loader for local and portable deployments.
// Prefer one of the following, in order:
// 1. ROADMAKER_CREDENTIAL_FILE
// 2. /etc/roadmaker/credentials.php
// 3. model/credential.local.php
// 4. environment variables below

$user = getenv('ROADMAKER_DB_USER');
$password = getenv('ROADMAKER_DB_PASSWORD');

if ($user === false || $user === '' || $password === false || $password === '') {
	throw new RuntimeException(
		'Database credentials are not configured. Use ROADMAKER_DB_USER and ROADMAKER_DB_PASSWORD, '
		. 'or create model/credential.local.php from model/credential.local.example.php.'
	);
}

?>
