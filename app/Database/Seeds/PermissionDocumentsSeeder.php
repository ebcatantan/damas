<?php namespace App\Database\Seeds;

class PermissionDocumentsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'creating a document type',
                        'function_description' => 'creating a document type',
                        'slugs' => 'add-document-type',
                        'name_on_class' => 'add_document_type',
                        'page_title' => 'creating a document type',
                        'module_id' => '3',
                        'order' => '100',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'document_types',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show document type',
                        'function_description' => 'show document type',
                        'slugs' => 'show-document-type',
                        'name_on_class' => 'show_document_type',
                        'page_title' => 'document type details',
                        'module_id' => '3',
                        'order' => '101',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'document_types',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'document types',
                        'function_description' => 'document types',
                        'slugs' => 'list-document-types',
                        'name_on_class' => 'index',
                        'page_title' => 'list of document types',
                        'module_id' => '3',
                        'order' => '102',
                        'allowed_roles' => '[1]',
                        'link_icon' => '<i class="far fa-file-image"></i>',
                        'table_name' => 'document_types',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit document type',
                        'function_description' => 'edit of document type',
                        'slugs' => 'edit-document-type',
                        'name_on_class' => 'edit_document_type',
                        'page_title' => 'edit document type',
                        'module_id' => '3',
                        'order' => '103',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'document_types',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete document type',
                        'function_description' => 'delete document type',
                        'slugs' => 'delete-document-type',
                        'name_on_class' => 'delete_document_type',
                        'page_title' => 'edit document type',
                        'module_id' => '3',
                        'order' => '104',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'document_types',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
