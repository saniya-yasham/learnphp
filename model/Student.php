<?php


// function test($conn){
//     echo $conn;
// }

class Student
{
    public $conn; //undefined

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function all()
    {
        $sql = "SELECT * FROM `courses`";
        $result = $this->conn->query($sql);

        while ($result->fetch_assoc()) {
            $courses[] = $result->fetch_assoc();
        };

        return $courses;
    }
}

