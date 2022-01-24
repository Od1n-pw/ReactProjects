<?php
$courses = [
    [
        "id" => 1,
        "name" => "learn reactJS from scratch",
        "category" => 'IT & technology',
        "creator" => 'MAX MILIAN SHWARZMOLLER',
        "rate" => 4,
        "date" => '12/12/2020',
        "hours" => 10

    ],
    [
        "id" => 2,
        "name" => 'javascript fundamentals before learning react',
        "category" => 'IT & technology',
        "creator" => 'BRAD TRAVERCY',
        "rate" => 4.5,
        "date" => '05/05/2020',
        "hours" => 20


    ],

    [
        "id" => 3,
        "name" => 'nodejs from 0 to hero',
        "category" => 'IT & technology',
        "creator" => 'DEV ED',
        "rate" => 4.5,
        "date" => '09/05/2020',
        "hours" => 40

    ],

    [
        "id" => 4,
        "name" => 'MERN STACK FOR ADVANCED',
        "category" => 'IT & technology',
        "creator" => 'BRAD TRAVERCY',
        "rate" => 4.5,
        "date" => '22/05/2020',
        "hours" => 50

    ],
    [
        "id" => 5,
        "name" => 'LEARN ANGULAR 10 WITH FIREBASE',
        "category" => 'IT & technology',
        "creator" => 'YOHA DOE',
        "rate" => 4,
        "date" => '06/06/2019',
        "hours" => 35

    ],

    [
        "id" => 6,
        "name" => 'LARAVEL 8 LAST UPDATE',
        "category" => 'IT & technology',
        "creator" => 'THE NET NINJA',
        "rate" => 4,
        "date" => '08/06/2016',
        "hours" => 30

    ],

    [
        "id" => 7,
        "name" => 'LEARN REACTJS CONTEXT API & REDUX ',
        "category" => 'IT & technology',
        "creator" => 'THE NET NINJA',
        "rate" => 4.5,
        "date" => '01/01/2017',
        "hours" => 20

    ],


    [
        "id" => 8,
        "name" => 'LEARN PYTHON & MACHIN LEARNING',
        "category" => 'IT & technology',
        "creator" => 'STIFAN ARDWELL',
        "rate" => 4.5,
        "date" => '05/07/2017',
        "hours" => 120

    ],

    [
        "id" => 9,
        "name" => 'LEARN C# ENTITY FRAMEWORK & FLUENT API',
        "category" => 'IT & technology',
        "creator" => 'MOSH HAMADANI',
        "rate" => 4.5,
        "date" => '05/22/2018',
        "hours" => 15

    ],

    [
        "id" => 10,
        "name" => 'LEARN C# ENTITY FRAMEWORK & ASP.NET CORE',
        "category" => 'IT & technology',
        "creator" => 'MOSH HAMADANI',
        "rate" => 4.5,
        "date" => '05/19/2019',
        "hours" => 15
    ],



    [
        "id" => 11,
        "name" => 'LEARN C# & ADO.NET WINDOWS FORM',
        "category" => 'IT & technology',
        "creator" => 'MOSH HAMADANI',
        "rate" => 4.5,
        "date" => '05/19/2015',
        "hours" => 15
    ]



];

?>

<div class="container">
    <div class="row">
        <h1 class="fw-bold text-center">Courses</h1>
        <?php foreach ($courses as $cours) : ?>
            <ul class="list-group col-md-4 mt-4">
                <li class="list-group-item active">Name : <?php echo $cours['name'] ?></li>
                <li class="list-group-item">Category : <?php echo $cours['category'] ?></li>
                <li class="list-group-item">Creator : <?php echo $cours['creator'] ?></li>
                <li class="list-group-item">Rate : <?php echo $cours['rate'] ?></li>
                <li class="list-group-item">Date : <?php echo $cours['date'] ?></li>
                <li class="list-group-item">Hours : <?php echo $cours['hours'] ?></li>
            </ul>
        <?php endforeach ?>
    </div>

</div>