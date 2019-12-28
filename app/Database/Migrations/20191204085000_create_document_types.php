<?php namespace App\Database\Migrations;

class CreateDocumentTypes extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'document_type_code'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'document_type_name'       => [
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
                $this->forge->createTable('document_types');
        }

        public function down()
        {
                $this->forge->dropTable('document_types');
        }
}
