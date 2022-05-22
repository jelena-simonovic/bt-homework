<?php


function searchUsers($users, $searchContent = "")
{
    foreach ($users as $key => $value) {
        $filteredUsers = [];
        if ((str_contains($value['name'], $searchContent) !== false) ||
            (str_contains($value['last_name'], $searchContent) !== false)
        ) {
            $filteredUsers = $value;
            return $filteredUsers;
        } else {
            die('No such entries!');
        }
    }
}

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


echo "<pre>";

print_r(searchUsers($users, 'Simic'));

echo "</pre>";
