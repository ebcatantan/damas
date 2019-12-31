<?php namespace App\Database\Seeds;

class PermissionSystemSettingsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'creating a department',
                        'function_description' => 'creating a department',
                        'slugs' => 'add-department',
                        'name_on_class' => 'add_department',
                        'page_title' => 'creating a department',
                        'module_id' => '1',
                        'order' => '14',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'departments',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show department',
                        'function_description' => 'show department',
                        'slugs' => 'show-department',
                        'name_on_class' => 'show_department',
                        'page_title' => 'department details',
                        'module_id' => '1',
                        'order' => '15',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'departments',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of departments',
                        'function_description' => 'list of departments',
                        'slugs' => 'list-departments',
                        'name_on_class' => 'index',
                        'page_title' => 'list of departments',
                        'module_id' => '1',
                        'order' => '16',
                        'allowed_roles' => '[1]',
                        'link_icon' => '<i class="far fa-building"></i>',
                        'table_name' => 'departments',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit department',
                        'function_description' => 'edit of department',
                        'slugs' => 'edit-department',
                        'name_on_class' => 'edit_department',
                        'page_title' => 'edit department',
                        'module_id' => '1',
                        'order' => '17',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'departments',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete department',
                        'function_description' => 'delete department',
                        'slugs' => 'delete-department',
                        'name_on_class' => 'delete_department',
                        'page_title' => 'edit department',
                        'module_id' => '1',
                        'order' => '18',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'departments',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create a area',
                        'function_description' => 'creating a area',
                        'slugs' => 'add-area',
                        'name_on_class' => 'add_area',
                        'page_title' => 'creating a area',
                        'module_id' => '1',
                        'order' => '19',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'areas',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'show area',
                        'function_description' => 'show area',
                        'slugs' => 'show-area',
                        'name_on_class' => 'show_area',
                        'page_title' => 'area details',
                        'module_id' => '1',
                        'order' => '20',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'areas',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of area',
                        'function_description' => 'list of area',
                        'slugs' => 'list-area',
                        'name_on_class' => 'index',
                        'page_title' => 'list of area',
                        'module_id' => '1',
                        'order' => '21',
                        'allowed_roles' => '[1]',
                        'link_icon' => '<i class="fas fa-layer-group"></i>',
                        'table_name' => 'areas',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit area',
                        'function_description' => 'edit area',
                        'slugs' => 'edit-area',
                        'name_on_class' => 'edit_area',
                        'page_title' => 'edit area',
                        'module_id' => '1',
                        'order' => '22',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'areas',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete area',
                        'function_description' => 'delete area',
                        'slugs' => 'delete-area',
                        'name_on_class' => 'delete_area',
                        'page_title' => 'edit area',
                        'module_id' => '1',
                        'order' => '23',
                        'allowed_roles' => '[1]',
                        'link_icon' => '',
                        'table_name' => 'areas',
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
