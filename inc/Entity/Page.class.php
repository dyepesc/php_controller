<?php


class Page
{

    public static $heading = "Learning PHP";
    public static $studentID = "Controllers";
    public static $studentName = "Space X";
    public static $notifications;

    // This function set the html document header
    static function header()
    {
        ?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta name="author" content="<?= self::$studentName ?>">
            <link rel="stylesheet" href="css/styles.css">
        </head>

        <body>
            <?php
    }

    // This function set the html document footer
    static function footer()
    {
        ?>
        </body>

        </html>
        <?php
    }

    // This function is used to display the Course detail
    static function displayCourseDetail(Course $course)
    {
        $formattedPrice = "$" . number_format($course->getPrice(), 2);
        ?>
        <section class="detail">
            <div>
                <h2>Course details</h2>
                <table>

                    <tr>
                        <th>Name</th>
                        <td><?= $course->getCourseName() ?></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td><?= $course->getCategory() ?></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><?= $formattedPrice ?></td>
                    </tr>
                    <tr>
                        <th>Avg. rating</th>
                        <td><?= $course->getAvgRating() ?></td>
                    </tr>
                    <tr>
                        <th>Enrollment</th>
                        <td><?= $course->getEnrollment() ?></td>
                    </tr>
                    <tr>
                        <th>Number of lectures</th>
                        <td><?= $course->getNumLectures() ?></td>
                    </tr>
                    <tr>
                        <th>Course length</th>
                        <td><?= $course->getCourseLength() ?></td>
                    </tr>
                </table>
            </div>
        </section>
        <?php
    }

    // This function is to display the main table
    static function displayTable(array $courses)
    {
        $isLoggedIn = isset($_SESSION["username"]);
        ?>
        <section class="main">
            <h1><?= self::$heading . " - " . self::$studentName . " (" . self::$studentID . ")" ?></h1>
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>Course Name</td>
                            <td>Category</td>
                            <td>Price</td>
                            <?php
                            if ($isLoggedIn) {
                                ?>
                                <td>Detail</td>
                                <?php
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($courses as $course) {
                            $formattedPrice = "$" . number_format($course->getPrice(), 0);
                            ?>
                            <tr>
                                <td><?= $course->getCourseName() ?></td>
                                <td><?= $course->getCategory() ?></td>
                                <td><?= $formattedPrice ?></td>
                                <?php
                                if ($isLoggedIn) {
                                    ?>
                                    <td><a href="<?= $_SERVER['PHP_SELF'] ?>?action=get&id=<?= $course->getId() ?>">Detail</a></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <?php
    }

    // This function is to show the login form
    static function displayLoginForm()
    {
        ?>
        <section class="login">
            <h2>Login Details</h2>
            <form method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
        </section>
        <?php

    }

    // This function is to show the logout form
    static function displayLogoutForm()
    {
        ?>
        <section class="logout">
            <h2>Login Details</h2>
            <form method="post">
                <div>
                    <span>Welcome <?= $_SESSION["username"] ?>!</span>
                    <input type="submit" name="logout" value="Logout">
                </div>
            </form>
        </section>
        <?php
    }

}