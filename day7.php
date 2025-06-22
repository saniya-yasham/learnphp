<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <?php
    $courses = [
        [
            "name" => "Web Development",
            "duration" => "3 months",
            "price" => 300,
            "description" => "Learn HTML, CSS, and JavaScript to build modern websites.",
            "url" => "web.com"
        ],
        [
            "name" => "Data Science",
            "duration" => "6 months",
            "price" => 600,
            "description" => "Master data analysis, machine learning, and data visualization.",
            "url" => "data.com"
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
            "url" => "cybersecurity.com"
        ]
    ];
    ?>

    <div class="card-wrapper container d-flex flex-wrap gap-5 mt-5">

        <?php foreach ($courses as $course): ?>

            <div class="card" style="width: 18rem;">
                <img src="https://placehold.co/600x400?text=Hello+World"
                    class="card-img-top"
                    alt="<?= $course["name"] ?? ""; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $course["name"] ?? ""; ?></h5>
                    <p class="card-text"><?= $course["description"] ?? ""; ?></p>
                    <a href="<?= $course["url"] ?? '#'; ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

</body>

</html>