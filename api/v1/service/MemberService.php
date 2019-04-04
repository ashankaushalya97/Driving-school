<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 2:45 PM
 */

interface MemberService
{
    function addMember ($Name,$Address,$DOB,$Contact_No);

    function editMember ($Member_ID,$Name,$Address,$DOB,$Contact_No);

    function getMember ($Member_ID);
}