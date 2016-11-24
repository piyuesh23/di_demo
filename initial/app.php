<?php

require __DIR__ . '/vendor/autoload.php';

use DependencyInjectionDemo\Notifier\Mailer;

$dsn = 'sqlite:' . __DIR__ . '/data/database.sqlite';
$pdo = new PDO($dsn);

$mailer = new Mailer('smtp.blogtrottr.com', 'smtpuser', 'smtppass', '465');

$sql = 'SELECT * FROM subscribers';


