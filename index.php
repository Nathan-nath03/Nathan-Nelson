<?php

class Person {
    public $name;
    public $age;
    public $id;

    public function __construct($name, $age, $id) {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
    }
}

class Student extends Person {
    public $course;

    public function __construct($name, $age, $id, $course) {
        parent::__construct($name, $age, $id);
        $this->course = $course;
    }

    public function displayInfo() {
        echo "Student Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "ID: {$this->id}<br>";
        echo "Course: {$this->course}<br>";
        echo "-------------------------<br>";
    }
}

class Teacher extends Person {
    public $course;

    public function __construct($name, $age, $id, $course) {
        parent::__construct($name, $age, $id);
        $this->course = $course;
    }

    public function displayInfo() {
        echo "Teacher Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "ID: {$this->id}<br>";
        echo "Course: {$this->course}<br>";
        echo "-------------------------<br>";
    }
}

// Create an array of students
$students = [
    new Student("Nathan", 20, "S12345", "Advance Web Application Development"),
   
    // Add more students as needed
];

// Create an array of teachers
$teachers = [
    new Teacher("Javeria", 25, "T67890", "Advance Web Application Development"),
 
    // Add more teachers as needed
];

// Display student information
echo "Student Information:<br>";
foreach ($students as $student) {
    $student->displayInfo();
}

// Display teacher information
echo "Teacher Information:<br>";
foreach ($teachers as $teacher) {
    $teacher->displayInfo();
}

?>
