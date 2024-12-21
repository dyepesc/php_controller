<?php

require_once 'inc/config.inc.php';

require_once 'inc/Entity/Course.class.php';
require_once 'inc/Entity/Page.class.php';
require_once 'inc/Entity/User.class.php';

require_once 'inc/Utility/CourseDAO.class.php';
require_once 'inc/Utility/LoginManager.php';
require_once 'inc/Utility/UserDAO.class.php';
require_once 'inc/Utility/PDOService.class.php';

CourseDAO::init();
UserDAO::init();




if (!empty($_POST)) {
    if (LoginManager::verifyLogin() && isset($_POST["logout"])) {
        unset($_SESSION);
        session_destroy();
        $uriParts = explode('?', $_SERVER['REQUEST_URI'], 2);
        header("Location:" . $uriParts[0]);
        exit();
    }

    if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $existedUser = UserDAO::getUser($username);
        if ($existedUser && $existedUser->verifyPassword($_POST["password"])) {
            session_start();
            $_SESSION["username"] = $existedUser->getUsername();
        }
    }

}


if (LoginManager::verifyLogin()) {
    Page::displayLogoutForm();
} else {
    Page::displayLoginForm();
}

$courses = CourseDAO::getCourses();

Page::header();
Page::displayTable($courses);

if (isset($_GET['id']) && isset($_SESSION["username"])) {
    $id = $_GET['id'];
    $course = CourseDAO::getCourse($id);
    Page::displayCourseDetail($course);
}
Page::footer();
