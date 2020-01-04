<?php namespace App\Database\Migrations;

class CreateAreas extends \CodeIgniter\Database\Migration {
        private $table = 'areas';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'area_code'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '10',
                        ],

                        'area_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
                        ],

                        'area_head_id' => [
                                'type'           => 'BIGINT',
                                'comment'        => 'User ID of the area Head',
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable($this->table);

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

        public function down()
        {
                $this->forge->dropTable($this->table);
        }
}
