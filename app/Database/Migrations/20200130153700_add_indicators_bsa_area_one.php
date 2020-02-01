<?php namespace App\Database\Migrations;

class AddIndicatorsBsaAreaOne extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 1,
                  'parameter_item' => 'S.1. The institution has a system of determining its Vision and Mission.',
                  'description' => 'S.1. The institution has a system of determining its Vision and Mission.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1',
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
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 39 AND id <= 47');
        }
}
