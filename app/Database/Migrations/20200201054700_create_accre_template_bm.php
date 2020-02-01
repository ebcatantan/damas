<?php namespace App\Database\Migrations;

class CreateAccreTemplateBm extends \CodeIgniter\Database\Migration {

        private $table = 'accreditation_templates';
        public function up()
        {
          $data = [
              [
                  'id' => '100',
                  'template_code' => 'MSI-BM-AI',
                  'template_name' => 'MSI BM - Area I',
                  'description' => 'MSI BM - Area I',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '101',
                  'template_code' => 'MSI-BM-AII',
                  'template_name' => 'MSI BM - Area II',
                  'description' => 'MSI BM - Area II',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '102',
                  'template_code' => 'MSI-BM-AIII',
                  'template_name' => 'MSI BM - Area III',
                  'description' => 'MSI BM - Area III',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '103',
                  'template_code' => 'MSI-BM-AIV',
                  'template_name' => 'MSI BM - Area IV',
                  'description' => 'MSI BM - Area IV',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '104',
                  'template_code' => 'MSI-BM-AV',
                  'template_name' => 'MSI BM - Area V',
                  'description' => 'MSI BM - Area V',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '105',
                  'template_code' => 'MSI-BM-AVI',
                  'template_name' => 'MSI BM - Area VI',
                  'description' => 'MSI BM - Area VI',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '106',
                  'template_code' => 'MSI-BM-AVII',
                  'template_name' => 'MSI BM - Area VII',
                  'description' => 'MSI BM - Area VII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '107',
                  'template_code' => 'MSI-BM-AVIII',
                  'template_name' => 'MSI BM - Area VIII',
                  'description' => 'MSI BM - Area VIII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '108',
                  'template_code' => 'MSI-BM-AIX',
                  'template_name' => 'MSI BM - Area IX',
                  'description' => 'MSI BM - Area IX',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '109',
                  'template_code' => 'MSI-BM-AX',
                  'template_name' => 'MSI BM - Area X',
                  'description' => 'MSI BM - Area X',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
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
