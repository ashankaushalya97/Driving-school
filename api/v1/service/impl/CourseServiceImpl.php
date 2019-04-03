<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 3:40 PM
 */

class CourseServiceImpl implements CourseService
{

    private $courseRepo;

    /**
     * CourseServiceImpl constructor.
     */
    public function __construct()
    {
        $this->courseRepo = new CourseRepoImpl();
    }


    function addCourse($course_id, $course_name, $fee)
    {
        $this->courseRepo->setConnection((new DBConnection())->getConnection());
        $result = $this->courseRepo->save($course_id, $course_name, $fee);

        if ($result > 0) {
            return true;
        }

        return false;
    }

    function changeCourseDetails($course_id, $course_name, $fee)
    {
        $this->courseRepo->setConnection((new DBConnection())->getConnection());
        $result = $this->courseRepo->update($course_id, $course_name, $fee);

        if ($result > 0) {
            return true;
        }

        return false;
    }

    function getCourseUsers($course_id)
    {
        // TODO: Implement getCourseUsers() method.
    }
}