<?php namespace App\Database\Migrations;

class CreateTemplateParameters extends \CodeIgniter\Database\Migration {
        private $table = 'template_parameters';
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'parameter_code'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'title'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description' => [
                                'type'           => 'TEXT',
                                'null'           => TRUE,
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
                        'parameter_code' => 'parameter a',
                        'title' => 'curriculum and program of studies',
                        'description' => 'curriculum and program of studies',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'parameter_code' => 'parameter b',
                        'title' => 'faculty adequacy ad loading',
                        'description' => 'faculty adequacy ad loading',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'parameter_code' => 'parameter c',
                        'title' => 'assessment of academic performance',
                        'description' => 'assessment of academic performance',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'parameter_code' => 'parameter d',
                        'title' => 'management of learning',
                        'description' => 'management of learning',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'parameter_code' => 'parameter e',
                        'title' => 'graduation requirements',
                        'description' => 'graduation requirements',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'parameter_code' => 'parameter f',
                        'title' => 'administrative support for effective instruction',
                        'description' => 'administrative support for effective instruction',
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
