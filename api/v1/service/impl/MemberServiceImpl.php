<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 3:40 PM
 */

class MemberServiceImpl implements MemberService
{

    private $MemberRepo;

    /**
     * CourseServiceImpl constructor.
     */
    public function __construct()
    {
        $this->MemberRepo = new MemberRepoImpl();
    }


    function addMember($Name,$Address,$DOB,$Contact_No)
    {
        $this->MemberRepo->setConnection((new DBConnection())->getConnection());
        $result = $this->MemberRepo->save($Name,$Address,$DOB,$Contact_No);

        if ($result > 0) {
            return true;
        }

        return false;
    }

    function editMember ($Member_ID,$Name,$Address,$DOB,$Contact_No)
    {
        $this->MemberRepo->setConnection((new DBConnection())->getConnection());
        $result = $this->MemberRepo->update($Member_ID,$Name,$Address,$DOB,$Contact_No);

        if ($result > 0) {
            return true;
        }

        return false;
    }

    function getMember($Member_ID)
    {
        // TODO: Implement getCourseUsers() method.
    }
}