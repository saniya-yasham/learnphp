# Day 8

    Holiday

---

# Day 9

-   how to add values in array after initializing them

```php
        $arr = []; //initialize array
        print_r($arr);

        echo "<pre><h1>";
        print_r($arr);
        echo "</h1></pre>";

        $arr[] = 10;
        $arr[5] = "5th position";
        $arr["name"] = "Web";
        $arr[1] = ["name"=> "Web development"];
        $arr[1] = $newArr;

```

-   make nested array big , don't tell them about added category
-   @include(data.php); @include(header.php); @include(footer.php)
-   @include_once , DRY rule
-   category in courses, show them
-   how to show only a specific category if ($course['category'] == "Security"):
-   show category heading and print number of available courses
-   ask about issue of count($courses),
-   create $securityCourses, and add in it only particular category courses using foreach and if
-   create another $marketingCourses same as above
-   now follow DRY rule and move the code into fn

```php
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
```

-   HW:

1. Make a filter function
2. Make a reusable function for cards html code

---

# Day 10

-   Anonymous fn
-   how to call anonymous fn. 1. (fn)() wrap, 2. store in a variable
-   how to make any filter during call if ($condition). First take a variable and tell then the items local scope issue, we cant use items outside of foreach loop, We need to somehow pass the variable.

```php
if ($condition($item))

filter($courses,   function ($item) {
    return $item['price'] < 300;
});
```

-   array_filter($array, callback fn)
-   make folders, views
-   then controllers and model

---

# Day 11

-   give intro to the db, mysql and sqlite
-   create a table (just add name, type, length)
-   CRUD commads
    `INSERT INTO courses () VALUES ();`
    `SELECT * FROM courses;`
    `UPDATE courses SET fees = 3500 WHERE name = 'PHP';`
    `DELETE FROM courses WHERE name = 'PHP';`

```php
$conn = mysqli_connect("localhost", "root", "", "learn_php");

if(isset($conn) && $conn ) {
    echo   "DB connected !";
}
else{
    echo "failed";
}

```

```php
courses.php model
@require_once("../database.php");


$sql = "SELECT * FROM `courses`";
$result = $conn->query($sql);

$courses = $result->fetch_assoc();

while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
}

```
