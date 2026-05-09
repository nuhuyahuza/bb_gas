<?php

require __DIR__ . '/../config.php';

$c_mysqli = false;
$c_pdo = false;
$link = null;
$dbh = null;

$pdoMysqlMulti = [];
if (defined('Pdo\Mysql::ATTR_MULTI_STATEMENTS')) {
    $pdoMysqlMulti[\Pdo\Mysql::ATTR_MULTI_STATEMENTS] = true;
} elseif (defined('PDO::MYSQL_ATTR_MULTI_STATEMENTS')) {
    $pdoMysqlMulti[PDO::MYSQL_ATTR_MULTI_STATEMENTS] = true;
}

mysqli_report(MYSQLI_REPORT_OFF);
$link = @mysqli_connect($db_host, $db_user, $db_password, $db_name);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (!$link) {
    try {
        $dbh = new PDO(
            "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
            $db_user,
            $db_password,
            array_merge(
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ],
                $pdoMysqlMulti
            )
        );
        $c_pdo = true;
    } catch (PDOException $ex) {
        http_response_code(500);
        echo 'Failed';
        exit;
    }
} else {
    $c_mysqli = true;
}

$sqlPath = __DIR__ . '/database.sql';
$sql = file_get_contents($sqlPath);
if ($sql === false || $sql === '') {
    http_response_code(500);
    echo 'Failed';
    exit;
}

$db_ident = preg_replace('/[^0-9a-zA-Z$_]/', '', $db_name);
if ($db_ident !== '') {
    $sql = str_replace('`ibilling`', '`' . $db_ident . '`', $sql);
}

if ($c_mysqli) {
    if (!mysqli_multi_query($link, $sql)) {
        http_response_code(500);
        echo 'Failed';
        exit;
    }
    do {
        if ($res = mysqli_store_result($link)) {
            mysqli_free_result($res);
        }
    } while (mysqli_next_result($link));
} elseif ($c_pdo) {
    try {
        $dbh->exec($sql);
    } catch (PDOException $e) {
        http_response_code(500);
        echo 'Failed';
        exit;
    }
} else {
    http_response_code(500);
    echo 'Failed';
    exit;
}

echo '1';
