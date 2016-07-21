<?php
class RespObj
{
    public $uid;
    public $username;
    public $first_name;
    public $last_name;
    public $email;
    public $response;
    public function __construct($username, $data)
    {
        $this->uid = $data['uid'];
        $this->username = $username;
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->email = $data['email'];
        $this->response = $data['response'];

    }
}
