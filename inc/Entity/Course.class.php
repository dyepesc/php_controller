<?php

class Course
{

    //Attributes
    private $id;
    private $course_name;
    private $category;
    private $avg_rating;
    private $enrollment;
    private $price;
    private $num_lectures;
    private $course_length;


    //Getters
    function getId()
    {
        return $this->id;
    }

    function getCourseName()
    {
        return $this->course_name;
    }

    function getCategory()
    {
        return $this->category;
    }

    function getAvgRating()
    {
        return $this->avg_rating;
    }

    function getEnrollment()
    {
        return $this->enrollment;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getNumLectures()
    {
        return $this->num_lectures;
    }

    function getCourseLength()
    {
        return $this->course_length;
    }

}



?>