<?php	
	//link to database
    $host = 'localhost';
    $db = 'DummyDatabase'; 
    $user = 'DummyUser'; 
    $password = 'DummyPassword';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false  ];
    $pdo = new PDO($dsn, $user, $password, $options);