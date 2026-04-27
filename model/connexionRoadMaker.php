<?php

$credentialFiles = array();

$configuredCredentialFile = getenv('ROADMAKER_CREDENTIAL_FILE');
if ($configuredCredentialFile !== false && $configuredCredentialFile !== '') {
    $credentialFiles[] = $configuredCredentialFile;
}

$credentialFiles[] = '/etc/roadmaker/credentials.php';
$credentialFiles[] = __DIR__ . '/credential.local.php';

$credentialsLoaded = false;
foreach ($credentialFiles as $credentialFile) {
    if (file_exists($credentialFile)) {
        require $credentialFile;
        $credentialsLoaded = true;
        break;
    }
}

if (!$credentialsLoaded) {
    require __DIR__ . '/credential.php';
}

$dbHost = getenv('ROADMAKER_DB_HOST');
if ($dbHost === false || $dbHost === '') {
    $dbHost = 'localhost';
}

$dbName = getenv('ROADMAKER_DB_NAME');
if ($dbName === false || $dbName === '') {
    $dbName = 'roadmaker';
}

$dbCharset = getenv('ROADMAKER_DB_CHARSET');
if ($dbCharset === false || $dbCharset === '') {
    $dbCharset = 'utf8mb4';
}

try {
    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', $dbHost, $dbName, $dbCharset);
    $bdd = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('Erreur de connexion a la base de donnees.');
}

?>

