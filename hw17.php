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

$searchContent = 'ic';
foreach ($users as $user) {
    $filteredUsers = array_filter($users, function ($value) use ($searchContent) {
        return (str_contains($value['name'], $searchContent)) || (str_contains($value['last_name'], $searchContent));
    });
}

echo "<pre>";
print_r($filteredUsers);
echo "</pre>";


// Evo na drugi nacin, ona prva verzija nije dobro radila
// Jos jedna ispravka, zaboravila sam prezime i da moze i deo reci da se trazi