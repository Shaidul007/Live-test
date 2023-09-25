<?php
// Task 1

$students=[ 'name' => 'Alice', 'age' => 22, 'grade' => 'A'];
echo "The age of the student is : ". $students['age'];

// Task 2

$students=  ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];
if (array_key_exists('grade',$students))
  {
  echo "Grade Key exists!";
  }
else
  {
  echo "Grade Key does not exist!";
  }



// Task 3

$numbers=[100, 200, 50, 40, 50];

foreach ($numbers as $value) {
    echo $value . "\n";
}


// Task 4

$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];
  
  function findLetterM($names){
      if(strtoupper(substr($names, 0, 1)) === 'M'){
          return $names;
      }
  }
  
  $result = array_filter($names,'findLetterM');
  foreach ($result as $key => $name) {
   echo $name.PHP_EOL;
  }


// Task 5

$originalString = "Hello World";

$reverseString = strrev($originalString);
echo $reverseString;

