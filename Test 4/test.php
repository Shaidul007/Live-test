<?php
class Person {

    // attributes

    public $name;

    public $age;

    // constructor

    public function __construct( $name, $age ) {
        $this->name = $name;
        $this->age  = $age;
    }

    // method

    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.";

    }

}

$person = new Person( "John", 30 );

$person->introduce();


class Student extends Person {

    // attribute
    private string $mark;
    
        
    
    // constructor
    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
    }
        
    
    // method
    
        
    
    // method override )
    
        public function introduce() {
            parent::introduce();
        }
    
    // additional method


    
    public function calculate_grade_percentage() {
    
         // Assume that the mark is out of 100
    
         // Implement your logic to calculate the mark percentage here
         $gradePercentage = ($this->mark / 100) * 100;
        return "{$gradePercentage}%";
         
    
    }
    
     
    
        
    
    }
    
    
    $student = new Student("Robert", 18, 85);
    
    $student->introduce();
    
    $gradePercentage = $student->calculate_grade_percentage();
    
    echo "My grade percentage is {$gradePercentage}\n";