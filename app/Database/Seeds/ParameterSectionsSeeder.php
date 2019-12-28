<?php namespace App\Database\Seeds;

class ParameterSectionsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'parameter_sections';

        public function run()
        { 
                $data = [
                    [
                        'parameter_section_name' => 'system - inputs and processes',
                        'description' => 'system - inputs and processes',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'parameter_section_name' => 'implimentation',
                        'description' => 'implimentation',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'parameter_section_name' => 'outcome/s',
                        'description' => 'outcome/s',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                   
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}