<?php

require_once('Employee.php');


$employee1 = new Employee();

$employee1->name = 'Ahmed';
$employee1->email = 'ahmed@gmail.com';
$employee1->salary = 10000;
$employee1->isManager = true;
$employee1->address = [
    'city' => 'Cairo',
    'street' => '123 Radwan St',
    'country' => 'Egypt',
];

$employee2 = new Employee();

$employee2->name = 'Mohamed';
$employee2->email = 'mohamed@gmail.com';
$employee2->salary = 30000;
$employee2->isManager = false;
$employee2->address = [
    'city' => 'Cairo',
    'street' => '123 Radwan St',
    'country' => 'Egypt',
];

$employee3 = new Employee();

$employee3->name = 'Ali';
$employee3->email = 'ali@gmail.com';
$employee3->salary = 5000;
$employee3->isManager = true;
$employee3->address = [
    'city' => 'Cairo',
    'street' => '123 Radwan St',
    'country' => 'Egypt',
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Salary</th>
                <th scope="col">Title</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">1</th>
                <td><?= $employee1->name ?></td>
                <td><?= $employee1->email ?></td>
                <td class="<?= $employee1->salaryStyle() ?>"><?= $employee1->salary ?></td>
                <td class="<?= $employee1->roleStyle() ?>"><?= $employee1->role() ?></td>
                <td><?= implode(",", $employee1->address) ?></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td><?= $employee2->name ?></td>
                <td><?= $employee2->email ?></td>
                <td class="<?= $employee2->salaryStyle() ?>"><?= $employee2->salary ?></td>
                <td class="<?= $employee2->roleStyle() ?>"><?= $employee2->role() ?></td>
                <td><?= implode(",", $employee2->address) ?></td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td><?= $employee3->name ?></td>
                <td><?= $employee3->email ?></td>
                <td class="<?= $employee3->salaryStyle() ?>"><?= $employee3->salary ?></td>
                <td class="<?= $employee3->roleStyle() ?>"><?= $employee3->role() ?></td>
                <td><?= implode(",", $employee3->address) ?></td>

            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>