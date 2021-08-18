<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 26/09/2018
 * Time: 11:34
 */

namespace mondel;


class UserTable
{
    public $id;
    public $username;
    public $balance;

    public function __construct($id, $username, $balance)
    {
        $this->id = $id;
        $this->username = $username;
        $this->balance = $balance;
    }
}