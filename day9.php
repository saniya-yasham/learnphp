<?php
@include_once('header.php');
@include("courses.php");
?>

<?php

function renderCourses($title, $courses)
{
?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1><?= $title ?> (<?= count($courses); ?>)</h1>
            </div>
        </div>
    </div>

    <div class="card-wrapper container d-flex flex-wrap gap-5 mt-5">
        <?php foreach ($courses as $course): ?>
            <div class="card" style="width: 18rem;">
                <img src="https://placehold.co/600x400?text=Hello+World"
                    class="card-img-top"
                    alt="<?= $course["name"] ?? ""; ?>">
                <div class="card-body">
                    <div class="text-sm text-primary mb-1"><?= $course["category"]; ?></div>
                    <h5 class="card-title"><?= $course["name"] ?? ""; ?></h5>
                    <p class="card-text"><?= $course["description"] ?? ""; ?></p>
                    <a href="<?= $course["url"] ?? '#'; ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php
}
function filterByCategory($items, $category)
{
    $categoryCourses = [];
    foreach ($items as $item) {
        if ($item['category'] === $category) {
            $categoryCourses[] = $item;
        }
    }

    return $categoryCourses;
}

$securityCourses = filterByCategory($courses, "Security");
$designCourses = filterByCategory($courses, "Design");

// foreach ($courses as $course) {
//     if ($course["category"] === "Security") {
//         $securityCourses[] = $course;
//     }
// }

// design category filter

// foreach ($courses as $course) {
//     if ($course["category"] === "Design") {
//         $designCourses[] = $course;
//     }
// }

renderCourses("Price == 300", $securityCourses);
renderCourses("Design Courses", $designCourses);
?>

<?php
@include_once('footer.php');
?>

<!-- DRY - DO NOT repeat yourself -->