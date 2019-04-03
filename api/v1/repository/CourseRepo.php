<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/1/19
 * Time: 11:49 PM
 */

interface CourseRepo
{
    public function setConnection(mysqli $conn);

    public function create($Course_ID, $C_Name, $Fee);

    public function delete($Course_ID);

    public function update($Course_ID, $C_Name, $Fee);

    public function findAll();

    public function find($Course_ID);
}