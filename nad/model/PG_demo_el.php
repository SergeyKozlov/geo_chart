<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/nad/model/PostgreSQL.php');

class PG_demo_el extends PostgreSQL
{
    public function pgConnect()
    {
        $host = 'demo.sergeykozlov.ru';
        $port = '5433';
        $username = 'pgvideme';
        $password = 'pgvideme';
        $database = 'elaboration';
        try {
            $conn = pg_pconnect("host=$host port=$port dbname=$database user=$username password=$password") or die("No base connect");
            return $conn;
        } catch (Exception $e) {
            echo 'No DB. ' . $e;
            return false;
        }
    }
}