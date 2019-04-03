<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 2:47 PM
 */

interface CourseService
{
    function addCourse($course_id , $course_name, $fee);

    function changeCourseDetails($course_id , $course_name, $fee);

    function getCourseUsers($course_id);

}