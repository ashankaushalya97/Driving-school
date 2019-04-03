<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/1/19
 * Time: 11:49 PM
 */

interface AdminRepo
{
    public function setConnection(mysqli $conn);

    public function create($ID, $username, $password);

    public function delete($ID);

    public function update($ID, $username, $password);

    public function findAll();

    public function find($ID);
}