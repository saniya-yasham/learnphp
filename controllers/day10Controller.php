<?php


class BowlOfPoha
{
    public $salt = "Pink Salt"; //property
    public $type = "";

    public function __construct($type){
        $this->type =  $type;
    }
  // Getter method
    public function getSalt()
    {
        return $this->salt;
    }

    // Setter method
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }
    public function describe (){ //method
        echo "This is $this->type Poha";
    }

}


$obj = new BowlOfPoha("Yellow");

$obj->setSalt("Rock Salt");
echo "<h1>Type=" . $obj->describe() . "</h1>";
echo "<h1>getters =" . $obj->getSalt() . "</h1>";














// logic
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

?>