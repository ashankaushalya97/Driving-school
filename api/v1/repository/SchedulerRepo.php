<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/1/19
 * Time: 11:49 PM
 */

interface SchedulerRepo
{
    public function setConnection(mysqli $conn);

    public function create($time, $course, $description);

    public function delete($time);

    public function update($time, $course, $description);

    public function findAll();

    public function find($time);
}