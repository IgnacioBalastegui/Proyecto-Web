<?php
$a_categories =
[
    1=>[
        'id_category'=> 1,
        'name'=>'Remeras'
    ],
    2=>[
        'id_category'=> 2,
        'name'=>'Pantalones'
    ],
    3=>[
        'id_category'=> 3,
        'name'=>'Zapatillas'
    ],
    4=>[
        'id_category'=> 4,
        'name'=>'Buzos'
    ]
    
];

UpdateArrayFile($a_categories,"json","categories.json");
 ?>