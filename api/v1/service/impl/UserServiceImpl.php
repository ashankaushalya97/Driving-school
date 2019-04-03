<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 2:48 PM
 */
require_once("../../../../inc/connection.php");

class UserServiceImpl implements UserService
{

    public $adminRepo;

    /**
     * UserServiceImpl constructor.
     */
    public function __construct()
    {
        $this->adminRepo->setConnection((new DBConnection())->getConnection());
        $this->adminRepo = new AdminRepoImpl();
    }


    public function login($username, $password)
    {
        $this->adminRepo->setConnection((new DBConnection())->getConnection());
        $admin = $this->adminRepo->find($username);

        if ($admin["password"] === $password) {
            return true;
        }

        return false;
    }
}