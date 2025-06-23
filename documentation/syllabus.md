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

- HW: follow dry rule in cards html part as well 
