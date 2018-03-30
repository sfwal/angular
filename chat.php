<?php
    header("Access-Control-Allow-Origin: *");
    $messages = array(
        '小伙子很不错，我很看好你！',
        '你们90后作为中国复兴的主力军，一定要承担起祖国发展的重任，争取创造辉煌。',
        '学好前端，找个好工作，为社会做贡献。',
        '嗯，好好干，这个位置跟你准备了。'
    );
    $key = array_rand($messages);
    echo $messages[$key];
    sleep(2);
?>
