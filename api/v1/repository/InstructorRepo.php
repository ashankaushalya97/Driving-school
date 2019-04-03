<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/1/19
 * Instructor_ID: 11:49 PM
 */

interface InstructorRepo
{
    public function setConnection(mysqli $conn);

    public function create($Instructor_ID, $course, $description);

    public function delete($Instructor_ID);

    public function update($Instructor_ID, $course, $description);

    public function findAll();

    public function find($Instructor_ID);
}