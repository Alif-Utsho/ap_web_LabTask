<?php 


class Student{
    public $Name;
    public $Id;
    public $Dob;
    public $Courses;

    function ShowInfo(){
        echo "Student's name: ". $this->Name ."<br>";
        echo "Student's id: ". $this->Id ."<br>";
        echo "Student's DOB: ". $this->Dob ."<br><br>";
    }

    function AddCourse($courseName){
        array_push($this->Courses, $courseName);
    }

    function ShowAllCourses(){
        echo "Student's name: ". $this->Name ."<br>";
        echo "Student's id: ". $this->Id ."<br>";
        echo "Courses: ";
        foreach($this->Courses as $c){
            echo $c .", ";
        }
        echo "<br><br>";
    }
}

$s1 = new Student();
$s1->Name = "Utsho";
$s1->Id = "18-38055-2";
$s1->Dob = "01-12-97";
$s1->Courses = array("Web Technology", "Advance Web Technology", "C#", "Java");
$s1->ShowInfo();
$s1->ShowAllCourses();
$s1->AddCourse("Programming");
$s1->ShowAllCourses();

?>