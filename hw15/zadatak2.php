<?php

$data = [
    [
        "name" => "John",
        "last_name" => "Doe",
        "age" => 25,
        "gender" => "male",
        "avg_rating" => 9.1,
        "married" => true,
        "courses" => ["HTML", "Bootstrap"]
    ],
    [
        "name" => "Sarah",
        "last_name" => "Hawley",
        "age" => 32,
        "gender" => "female",
        "avg_rating" => 7.7,
        "married" => true,
        "courses" => ["UI Design", "Design Principles", "SEO"]
    ],
    [
        "name" => "Jake",
        "last_name" => "Starks",
        "age" => 21,
        "gender" => "male",
        "avg_rating" => 9.5,
        "married" => false,
        "courses" => ["PHP", "WordPress", "CSS"]
    ],
    [
        "name" => "Kayla",
        "last_name" => "Bernstein",
        "age" => 23,
        "gender" => "female",
        "avg_rating" => 8.5,
        "married" => false,
        "courses" => ["Figma", "UX Design", "CSS"]
    ],
    [
        "name" => "Brock",
        "last_name" => "Lesnar",
        "age" => 44,
        "gender" => "male",
        "avg_rating" => 8.9,
        "married" => true,
        "courses" => ["Bootstrap", "PHP", "MySQL"]
    ]
];

$studentName = "";
$studentLastName = "";
$studentAge = "";
$studentGender = "";
$studentRating = "";
$studentMarried = "";
$studentCourse = [];

foreach ($data as $alldata) {
    foreach ($alldata as $input => $value) {
        if ($input == 'name') {
            $studentName = $value;
        }
        if ($input == 'last_name') {
            $studentLastName = $value;
        }
        if ($input == 'age') {
            $studentAge = $value;
        }
        if ($input == 'gender' && $value == 'male') {
            $studentGender = "he";
        } else if ($input == 'gender' && $value == 'female') {
            $studentGender = "she";
        }
        if ($input == 'avg_rating') {
            $studentRating = $value;
        }
        if ($input == 'married' && $value) {
            $studentMarried = 'is married';
        } else if ($input == 'married' && !$value) {
            $studentMarried = 'is not married';
        }
        if ($input == 'courses') {
            $studentCourses = implode(" , ", $value);
        }
    }
    echo "$studentName $studentLastName is $studentAge years old, and $studentGender $studentMarried. This student has an average grade
    of $studentRating, and is currently enrolled in the following courses: $studentCourses. <br>";
}
