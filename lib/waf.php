<?php
include __DIR__ . '/../src/autoload.php';
$waf = new \PhpWaf\Firewall();
$waf->run();
