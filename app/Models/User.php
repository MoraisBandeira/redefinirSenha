<?php namespace App\Models;

use CodeIgniter\Model;

class User  extends Model{

    protected $table = 'users';
    protected $allowedFields = ['email' ,'password'];
}