<?php
if (isset($_REQUEST['phone'])) {
    $phone = $_REQUEST['phone'];

    $key = '';

    $countries = array('US', 'CA');

    $parameters = array(
        'country' => $countries
    );

    $formatted_parameters = http_build_query($parameters);

    $url = sprintf(
        'https://www.ipqualityscore.com/api/json/phone/%s/%s?%s', 
        $key,
        $phone, 
        $formatted_parameters
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $json = curl_exec($ch);

    echo $json;

    curl_close($ch);
}
?>
