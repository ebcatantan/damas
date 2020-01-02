<?php namespace App\Database\Seeds;

class UsersSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'users';

        public function run()
        {
                $data = [
                    [
                        'lastname' => 'Admin',
                        'firstname' => 'Admin',
                        'username' => 'admin',
                        'email' => 'admin@admin.com',
                        'password' => password_hash('admin', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'User',
                        'firstname' => 'User',
                        'username' => 'user',
                        'email' => 'user@admin.com',
                        'password' => password_hash('user', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 2,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'Area',
                        'firstname' => 'Area',
                        'username' => 'area',
                        'email' => 'area@admin.com',
                        'password' => password_hash('area', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'Department',
                        'firstname' => 'Department',
                        'username' => 'department',
                        'email' => 'department@admin.com',
                        'password' => password_hash('department', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 4,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'lastname' => 'Academic',
                        'firstname' => 'Academic',
                        'username' => 'academic',
                        'email' => 'academic@admin.com',
                        'password' => password_hash('academic', PASSWORD_DEFAULT),
                        'birthdate' => date('Y-m-d'),
                        'role_id' => 5,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
