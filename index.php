<?php
require('./app/app.php');
$title = '안녕하세요';

$data = get_data();

view('layout', $data, $title);
?>