<?php


class CourseDAO
{

    private static $db;

    static function init()
    {
        //Initialize the internal PDO Service
        self::$db = new PDOService("Course");
    }

    static function getCourse(int $cid)
    {

        $selectSQL = "SELECT * FROM course WHERE id=:id";
        self::$db->query($selectSQL);
        self::$db->bind(':id', $cid);
        self::$db->execute();
        return self::$db->singleResult();

    }

    static function getCourses(string $sortby = null, string $sort = null)
    {
        $selectSQL = "SELECT * FROM course";
        if ($sortby) {
            $selectSQL .= " ORDER BY " . $sortby;
            if ($sort)
                $selectSQL .= " " . $sort;
        }
        self::$db->query($selectSQL);
        self::$db->execute();
        return self::$db->multipleResults();

    }


}