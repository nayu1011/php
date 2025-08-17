<?php

function searchCityTime($city_name) {
    // 各国の連想配列を使うのにcities.phpを呼び出す
    require('config/cities.php');

    // 連想配列を回す
    foreach($cities as $city) {
        // 引数の国名と連想配列の国名がイコールの場合
        if ($city['name'] === $city_name ) {
            // マッチした国の現在日時を取得
            $date_time = new DateTime('',new DateTimeZone($city['time_zone']));
            // 00:00にフォーマット変更
            $time = $date_time->format('H:i');
            // キー：timeとその値を配列に追加
            $city['time']= $time;
            
            return $city;
        }

    }
}