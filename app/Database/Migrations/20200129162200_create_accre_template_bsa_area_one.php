<?php namespace App\Database\Migrations;

class CreateAccreTemplateBsaOne extends \CodeIgniter\Database\Migration {

        private $table = 'accreditation_templates';
        public function up()
        {
          $data = [
              [
                  'id' => '1',
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area 1',
                  'description' => 'MSI BS Accountancy - Area 1',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ]
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
