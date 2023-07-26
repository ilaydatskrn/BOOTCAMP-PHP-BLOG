<?php
phpinfo();
sqlite_open(database.db, 0666, $hata )

$databaseFile = "database.db";


$db = new SQLite3($databaseFile);


if (!$db) {
    die("Veritabanı bağlantısı başarısız: " . $db->lastErrorMsg());
}
?>