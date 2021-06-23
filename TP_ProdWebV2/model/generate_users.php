<?php
$a_users =
[
    1=>[
        "userId"=> 1,
        "mail"=>"admin@admin.com",
        'username'=>"admin",
        "password"=>"admin"
        ]
    ];

    UpdateArrayFile($a_users,"json","users.json");
 ?>