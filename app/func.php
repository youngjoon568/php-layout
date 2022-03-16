<?php
function view($name, $modal, $title) {
    require("./view/$name.view.php");
}

function get_data() {
    $fname =  CONFIG['data_file'];
    $json = '';
    // $filename = './data.json';
    if(!file_exists($fname)) {
        file_put_contents($fname, ''); // 파일 생성
        // $handle = fopen("$fname", "w+");
        // fclose($handle);
    } else {
        $json = file_get_contents($fname); // 파일이 있으면 저장
        // $handle = fopen("$fname", "r");
        // $json = fread($handle, filesize($filename));
    }

    return $json;
}
?>