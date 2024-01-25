<?php
    /*
    $command="python test.py ";
    exec($command,$output);
    print "$output[0]\n";
    print "$output[1]\n";
    print "$output[2]\n";
    */


    // Google Cloud Function がデプロイされた URL
    $functionUrl = 'https://us-central1-cloud-server-408602.cloudfunctions.net/function-1';
    //$functionUrl = 'https://us-central1-cloud-server-408602.cloudfunctions.net/function-2';


    $str="OK";
    $data = array('string' => $str);
    
    $options = array(
        'http' => array(
            'header' => "Content-type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ),
    );
    
    $context = stream_context_create($options);
    $response = file_get_contents($functionUrl,false,$context);
    //$response = file_get_contents($functionUrl, false, $context);

    if ($response === FALSE) {
        // エラーレスポンスを表示
        echo "Error: " . print_r(error_get_last(), true);
    } else {
        // 正常なレスポンスを表示
        echo $response;
    }


