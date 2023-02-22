<?php
    
    $dbhost = 'localhost';
    $dbport = '5432';
    $dbname = 'php_postgre';
    $dbuser = 'postgres';
    $dbpassword = 12136270;

    $dbconn = pg_connect("host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpassword");

    if (!$dbconn) {
        echo "Could not connect to database.\n";
    exit;
    }else{
        echo "Connected to database.\n";
    }

    $query = "INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
    VALUES (1, 'Paul', 32, 'California', 20000.00 ),
            (2, 'Allen', 25, 'Texas', 15000.00 ),
            (3, 'Teddy', 23, 'Norway', 20000.00 ),
            (4, 'Mark', 25, 'Rich-Mond ', 65000.00)
        ";

    $result = pg_query($dbconn, $query);

    if (!$result) {
        echo "Error to insert in the table.\n";
    exit;
    }else{
        echo "Inserted successfully.\n";
    }
    
    pg_close($dbconn);
?>
