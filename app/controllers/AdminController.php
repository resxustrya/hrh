<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 7/6/2017
 * Time: 4:01 PM
 */
class AdminController extends BaseController
{
    public function __construct()
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('admin');
    }
}