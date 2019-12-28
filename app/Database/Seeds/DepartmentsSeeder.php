<?php namespace App\Database\Seeds;

class DepartmentsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'departments';

        public function run()
        { 
                $data = [
                    [
                        'department_name' => 'Student Services',
                        'description' => 'Student Services',
                        'dept_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'department_name' => 'Academic Programs',
                        'description' => 'Academic Programs',
                        'dept_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'department_name' => 'Medical',
                        'description' => 'Medical',
                        'dept_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'department_name' => 'Dental',
                        'description' => 'Dental',
                        'dept_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'department_name' => 'Information Technology',
                        'description' => 'Information Technology',
                        'dept_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'department_name' => 'Library',
                        'description' => 'Library',
                        'dept_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'department_name' => 'Administration',
                        'description' => 'Administration',
                        'dept_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}