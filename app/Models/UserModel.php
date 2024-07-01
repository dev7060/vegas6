<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Table name in your database
    protected $primaryKey = 'id'; // Primary key of the table
    protected $allowedFields = ['name', 'email', 'password', 'picture']; // Fields that can be mass-assigned

    // Disable timestamps
    protected $useTimestamps = false;
}
