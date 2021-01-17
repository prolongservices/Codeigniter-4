<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins';

    protected $allowedFields = [
        'name','email', 'password', 'token'
    ];

}