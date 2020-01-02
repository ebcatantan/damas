<?php namespace App\Database\Seeds;

class DocumentTypeSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'document_types';

        public function run()
        {
                $data = [
                    [
                        'document_type_code' => 'memo',
                        'document_type_name' => 'memo',
                        'description' => 'memo',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'document_type_code' => 'tm',
                        'document_type_name' => 'teaching materials',
                        'description' => 'teaching materials',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
