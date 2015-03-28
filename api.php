<?php

$url='http://api.reimaginebanking.com:80/';
$C_KEY="CUSTa55383bcc13316a92ddf6a123dd4b446";


// Create connection
if ($db = new SQLiteDatabase('filename')) {
  $q=@$db->query('CREATE TABLE IF NOT EXISTS users (id VARCHAR(25), last_bill VARCHAR(25), PRIMARY KEY (id))');
} else {
  die($err);
}

function login($id) {
  $q=@$db->query("INSERT INTO users IF NOT EXISTS (id, last_bill) VALUES('".$id."', '0')");
}

?>
