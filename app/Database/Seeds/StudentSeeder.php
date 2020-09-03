<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
          'name' => 'Pawn',
          'age' => 29
        ];

        $dataUsers = [
          'fname' => 'Pawn',
          'lname' => 'Gupta',
          'email' => 'pawn@prolongservices.com',
          'gender' => 'male',
          'address' => 'India'
        ];

        $this->db->table('students')->insert($data);

        $this->db->table('users')->insert($dataUsers);
    }
}
