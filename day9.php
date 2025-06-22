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
    @include('data.php');
    ?>

    <?php echo count($courses); ?>



    <?php

    function filterByCategory($items, $category)
    {
        $categoryItems = []; //initialize array
        foreach ($items as $item) {
            if ($item['category'] == $category) {
                $categoryItems[] = $item;
            }
        }

        return $categoryItems;
    }

    // $securityCourses = []; //initialize array
    // $marketingCourses = []; //initialize array

    // foreach ($courses as $course) {
    //     if ($course['category'] == "Security") {
    //         $securityCourses[] = $course;
    //     }
    // }
    // foreach ($courses as $course) {
    //     if ($course['category'] == "Marketing") {
    //         $marketingCourses[] = $course;
    //     }
    // }

    $securityCourses = filterByCategory($courses, "Security");
    $marketingCourses = filterByCategory($courses, "Marketing");


    ?>

    <h1>Security Course <?= count($securityCourses); ?> </h1>
    <div class="card-wrapper container d-flex flex-wrap gap-5 mt-5">

        <?php foreach ($securityCourses as $course): ?>

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
            <br>
        <?php endforeach; ?>
    </div>

    <!-- /* ------------------------------------------------------------------------------------------------------------------------------------------------ */ -->

    <h1>Marketing Course <?= count($marketingCourses); ?></h1>
    <div class="card-wrapper container d-flex flex-wrap gap-5 mt-5">

        <?php foreach ($marketingCourses as $course): ?>

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