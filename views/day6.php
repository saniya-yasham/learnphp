<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> -->
</head>

<body>
    
    <?php
    // $x = 10;

    // if ($x) {
    //     echo "x=" . $x;
    // } else {
    //     echo "x doesnt exist";
    // }

    // $x = false;
    // $x = 0;
    // $x = null;
    // $x = [];
    // $x = '';

    // truthy
    // if ($x) {
    //     echo "x = $x";
    // } else {
    //     echo "echo part = $x";
    // }

    // $x= "test";

    // null colescing
    // echo $x ?? null;


    $courses = [
        [
            "name" => "Web Development",
            "duration" => "3 months",
            "price" => 300,
            "description" => "Learn HTML, CSS, and JavaScript to build modern websites.",
            "url" => "web.com"
        ],
        [
            // "name" => "Data Science",
            "duration" => "6 months",
            "price" => 600,
            "description" => "Master data analysis, machine learning, and data visualization.",
        ],
        [
            "name" => "Mobile App Development",
            "duration" => "4 months",
            "price" => 400,
            "description" => "Create Android and iOS applications using Flutter.",
            "url" => "mobile.com"
        ],
        [
            "name" => "Cybersecurity",
            "duration" => "5 months",
            "price" => 500,
            "description" => "Learn how to protect systems and networks from cyber threats.",
        ]
    ];

    ?>

    <div class="card-wrapper container d-flex gap-5 mt-5">

        <?php foreach ($courses as $course): ?>

            <div class="card" style="width: 18rem;">
                <img src="https://placehold.co/600x400?text=Hello+World" class="card-img-top" alt="<?= $course["name"] ?? ""; ?>">
                <div class="card-body">
                    <h5 class="card-title"> <?= $course["name"] ?? ""; ?> </h5>
                    <p class="card-text"><?= $course["description"] ?? ""; ?></p>
                    <a href="<?= $course["url"] ?? '#'; ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

</body>

</html>