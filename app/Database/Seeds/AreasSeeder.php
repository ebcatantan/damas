<?php namespace App\Database\Seeds;

class AreasSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'areas';

        public function run()
        {
                $data = [
                    [
                        'area_code' => 'area 1',
                        'area_name' => 'research',
                        'description' => 'research area',
                        'area_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'area_code' => 'area 2',
                      'area_name' => 'curriculum and instruction',
                      'description' => 'curriculum and instruction',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'area_code' => 'area 3',
                      'area_name' => 'extension programs',
                      'description' => 'extension programs',
                      'area_head_id' => 1,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ],                    
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
