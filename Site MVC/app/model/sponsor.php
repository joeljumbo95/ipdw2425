<?php
function get_sponsor_data() {
    $json_file_url = "http://playground.burotix.be/adv/banner_for_isfce.json";
    $json_string = file_get_contents($json_file_url);
    $adv_a = json_decode($json_string, true);

    return [
        'image' => $adv_a['banner_4IPDW']['image'],
        'text' => $adv_a['banner_4IPDW']['text']
    ];
}
