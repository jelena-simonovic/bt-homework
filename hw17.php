<?php

$users = [
    [
        'name' => 'Pera',
        'last_name' => 'Miric',
        'img' => ''
    ],
    [
        'name' => 'Pera',
        'last_name' => 'Simic',
        'img' => ''
    ],
    [
        'name' => 'Sima',
        'last_name' => 'Simic',
        'img' => ''
    ]
];

$searchContent = 'Pera';

$filteredUsers = array_filter($users, function ($value) use ($searchContent) {
    return ($value['name'] == $searchContent);
});

echo "<pre>";
print_r($filteredUsers);
echo "</pre>";


// Evo na drugi nacin, ona prva verzija nije dobro radila