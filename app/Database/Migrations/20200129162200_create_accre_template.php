<?php namespace App\Database\Migrations;
class CreateAccreTemplate extends \CodeIgniter\Database\Migration {

        private $table = 'accreditation_templates';
        public function up()
        {
          $data = [
              [
                  'id' => 1,
                  'template_code' => 'MSI-BSA-AI',
                  'template_name' => 'MSI BS Accountancy - Area I',
                  'description' => 'MSI BS Accountancy - Area I',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 2,
                  'template_code' => 'MSI-BSA-AII',
                  'template_name' => 'MSI BS Accountancy - Area II',
                  'description' => 'MSI BS Accountancy - Area II',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '2',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 3,
                  'template_code' => 'MSI-BSA-AIII',
                  'template_name' => 'MSI BS Accountancy - Area III',
                  'description' => 'MSI BS Accountancy - Area III',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '3',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 4,
                  'template_code' => 'MSI-BSA-AIV',
                  'template_name' => 'MSI BS Accountancy - Area IV',
                  'description' => 'MSI BS Accountancy - Area IV',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '4',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 5,
                  'template_code' => 'MSI-BSA-AV',
                  'template_name' => 'MSI BS Accountancy - Area V',
                  'description' => 'MSI BS Accountancy - Area V',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '5',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 6,
                  'template_code' => 'MSI-BSA-AVI',
                  'template_name' => 'MSI BS Accountancy - Area VI',
                  'description' => 'MSI BS Accountancy - Area VI',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '6',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 7,
                  'template_code' => 'MSI-BSA-AVII',
                  'template_name' => 'MSI BS Accountancy - Area VII',
                  'description' => 'MSI BS Accountancy - Area VII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '7',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 8,
                  'template_code' => 'MSI-BSA-AVIII',
                  'template_name' => 'MSI BS Accountancy - Area VIII',
                  'description' => 'MSI BS Accountancy - Area VIII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 9,
                  'template_code' => 'MSI-BSA-AIX',
                  'template_name' => 'MSI BS Accountancy - Area IX',
                  'description' => 'MSI BS Accountancy - Area IX',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 10,
                  'template_code' => 'MSI-BSA-AIX',
                  'template_name' => 'MSI BS Accountancy - Area X',
                  'description' => 'MSI BS Accountancy - Area X',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 4,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 11,
                  'template_code' => 'MSI-BSECE-AI',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area I',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area I',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 12,
                  'template_code' => 'MSI-BSECE-AII',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area II',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area II',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '2',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 13,
                  'template_code' => 'MSI-BSECE-AIII',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area III',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area III',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '3',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 14,
                  'template_code' => 'MSI-BSECE-AIV',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area IV',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area IV',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '4',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 15,
                  'template_code' => 'MSI-BSECE-AV',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area V',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area V',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '5',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 16,
                  'template_code' => 'MSI-BSECE-AVI',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area VI',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area VI',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '6',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 17,
                  'template_code' => 'MSI-BSECE-AVII',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area VII',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area VII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '7',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 18,
                  'template_code' => 'MSI-BSECE-AVIII',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area VIII',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area VIII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 19,
                  'template_code' => 'MSI-BSECE-AIX',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area IX',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area IX',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 20,
                  'template_code' => 'MSI-BSECE-AX',
                  'template_name' => 'MSI BS Electronics and Communications Engineering - Area X',
                  'description' => 'MSI BS Electronics and Communications Engineering - Area X',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 2,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 21,
                  'template_code' => 'MSI-BSME-AI',
                  'template_name' => 'MSI BS Mechanical Engineering - Area I',
                  'description' => 'MSI BS Mechanical Engineering - Area I',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 22,
                  'template_code' => 'MSI-BSME-AII',
                  'template_name' => 'MSI BS Mechanical Engineering - Area II',
                  'description' => 'MSI BS Mechanical Engineering - Area II',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '2',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 23,
                  'template_code' => 'MSI-BSME-AIII',
                  'template_name' => 'MSI BS Mechanical Engineering - Area III',
                  'description' => 'MSI BS Mechanical Engineering - Area III',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '3',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 24,
                  'template_code' => 'MSI-BSME-AIV',
                  'template_name' => 'MSI BS Mechanical Engineering - Area IV',
                  'description' => 'MSI BS Mechanical Engineering - Area IV',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '4',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 25,
                  'template_code' => 'MSI-BSME-AV',
                  'template_name' => 'MSI BS Mechanical Engineering - Area V',
                  'description' => 'MSI BS Mechanical Engineering - Area V',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '5',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 26,
                  'template_code' => 'MSI-BSME-AVI',
                  'template_name' => 'MSI BS Mechanical Engineering - Area VI',
                  'description' => 'MSI BS Mechanical Engineering - Area VI',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '6',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 27,
                  'template_code' => 'MSI-BSME-AVII',
                  'template_name' => 'MSI BS Mechanical Engineering - Area VII',
                  'description' => 'MSI BS Mechanical Engineering - Area VII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '7',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 28,
                  'template_code' => 'MSI-BSME-AVIII',
                  'template_name' => 'MSI BS Mechanical - Area VIII',
                  'description' => 'MSI BS Mechanical - Area VIII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 29,
                  'template_code' => 'MSI-BSME-AIX',
                  'template_name' => 'MSI BS Mechanical Engineering - Area IX',
                  'description' => 'MSI BS Mechanical Engineering - Area IX',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 30,
                  'template_code' => 'MSI-BSME-AX',
                  'template_name' => 'MSI BS Mechanical Engineering - Area X',
                  'description' => 'MSI BS Mechanical Engineering - Area X',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 3,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 31,
                  'template_code' => 'MSI-BSBAMM-AI',
                  'template_name' => 'MSI BS business administration major in marketing management - Area I',
                  'description' => 'MSI BS business administration major in marketing management - Area I',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 32,
                  'template_code' => 'MSI-BSBAMM-AII',
                  'template_name' => 'MSI BS business administration major in marketing management - Area II',
                  'description' => 'MSI BS business administration major in marketing management - Area II',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '2',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 33,
                  'template_code' => 'MSI-BSBAMM-AIII',
                  'template_name' => 'MSI BS business administration major in marketing management - Area III',
                  'description' => 'MSI BS business administration major in marketing management - Area III',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '3',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 34,
                  'template_code' => 'MSI-BSBAMM-AIV',
                  'template_name' => 'MSI BS business administration major in marketing management - Area IV',
                  'description' => 'MSI BS business administration major in marketing management - Area IV',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '4',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 35,
                  'template_code' => 'MSI-BSBAMM-AV',
                  'template_name' => 'MSI BS business administration major in marketing management - Area V',
                  'description' => 'MSI BS business administration major in marketing management - Area V',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '5',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 36,
                  'template_code' => 'MSI-BSBAMM-AVI',
                  'template_name' => 'MSI BS business administration major in marketing management - Area VI',
                  'description' => 'MSI BS business administration major in marketing management - Area VI',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '6',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 37,
                  'template_code' => 'MSI-BSBAMM-AVII',
                  'template_name' => 'MSI BS business administration major in marketing management - Area VII',
                  'description' => 'MSI BS business administration major in marketing management - Area VII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '7',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 38,
                  'template_code' => 'MSI-BSBAMM-AVIII',
                  'template_name' => 'MSI BS business administration major in marketing management - Area VIII',
                  'description' => 'MSI BS business administration major in marketing management - Area VIII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 39,
                  'template_code' => 'MSI-BSBAMM-AIX',
                  'template_name' => 'MSI BS business administration major in marketing management - Area IX',
                  'description' => 'MSI BS business administration major in marketing management - Area IX',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 40,
                  'template_code' => 'MSI-BSBAMM-AX',
                  'template_name' => 'MSI BS business administration major in marketing management - Area X',
                  'description' => 'MSI BS business administration major in marketing management - Area X',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 5,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 41,
                  'template_code' => 'MSI-BSBAHR-AI',
                  'template_name' => 'MSI BS business administration major in human resources - Area I',
                  'description' => 'MSI BS business administration major in human resources - Area I',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 42,
                  'template_code' => 'MSI-BSBAHR-AII',
                  'template_name' => 'MSI BS business administration major in human resources - Area II',
                  'description' => 'MSI BS business administration major in human resources - Area II',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '2',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 43,
                  'template_code' => 'MSI-BSBAHR-AIII',
                  'template_name' => 'MSI BS business administration major in human resources - Area III',
                  'description' => 'MSI BS business administration major in human resources - Area III',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '3',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 44,
                  'template_code' => 'MSI-BSBAHR-AIV',
                  'template_name' => 'MSI BS business administration major in human resources - Area IV',
                  'description' => 'MSI BS business administration major in human resources - Area IV',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '4',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 45,
                  'template_code' => 'MSI-BSBAHR-AV',
                  'template_name' => 'MSI BS business administration major in human resources - Area V',
                  'description' => 'MSI BS business administration major in human resources - Area V',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '5',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 46,
                  'template_code' => 'MSI-BSBAHR-AVI',
                  'template_name' => 'MSI BS business administration major in human resources - Area VI',
                  'description' => 'MSI BS business administration major in human resources - Area VI',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '6',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 47,
                  'template_code' => 'MSI-BSBAHR-AVII',
                  'template_name' => 'MSI BS business administration major in human resources - Area VII',
                  'description' => 'MSI BS business administration major in human resources - Area VII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '7',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 48,
                  'template_code' => 'MSI-BSBAHR-AVIII',
                  'template_name' => 'MSI BS business administration major in human resources - Area VIII',
                  'description' => 'MSI BS business administration major in human resources - Area VIII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 49,
                  'template_code' => 'MSI-BSBAHR-AIX',
                  'template_name' => 'MSI BS business administration major in human resources - Area IX',
                  'description' => 'MSI BS business administration major in human resources - Area IX',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 50,
                  'template_code' => 'MSI-BSBAHR-AX',
                  'template_name' => 'MSI BS business administration major in human resources - Area X',
                  'description' => 'MSI BS business administration major in human resources - Area X',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 51,
                  'template_code' => 'MSI-BSOA-AI',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area I',
                  'description' => 'MSI BS office administration major in legal transcription - Area I',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '1',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 52,
                  'template_code' => 'MSI-BSOA-AII',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area II',
                  'description' => 'MSI BS office administration major in legal transcription - Area II',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '2',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 53,
                  'template_code' => 'MSI-BSOA-AIII',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area III',
                  'description' => 'MSI BS office administration major in legal transcription - Area III',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '3',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 54,
                  'template_code' => 'MSI-BSOA-AIV',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area IV',
                  'description' => 'MSI BS office administration major in legal transcription - Area IV',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '4',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 55,
                  'template_code' => 'MSI-BSOA-AV',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area V',
                  'description' => 'MSI BS office administration major in legal transcription - Area V',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '5',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 56,
                  'template_code' => 'MSI-BSOA-AVI',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area VI',
                  'description' => 'MSI BS office administration major in legal transcription - Area VI',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '6',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 57,
                  'template_code' => 'MSI-BSOA-AVII',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area VII',
                  'description' => 'MSI BS office administration major in legal transcription - Area VII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '7',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 58,
                  'template_code' => 'MSI-BSOA-AVIII',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area VIII',
                  'description' => 'MSI BS office administration major in legal transcription - Area VIII',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 59,
                  'template_code' => 'MSI-BSOA-AIX',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area IX',
                  'description' => 'MSI BS office administration major in legal transcription - Area IX',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 6,7
                  'area_id' => '8',
                  'status' => 'a',
                  'is_finalized' => 0,
                  'created_by' => 1,
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 60,
                  'template_code' => 'MSI-BSOA-AX',
                  'template_name' => 'MSI BS office administration major in legal transcription - Area X',
                  'description' => 'MSI BS office administration major in legal transcription - Area X',
                  'accreditation_level_id' => 2,
                  'academic_program_id' => 7,
                  'area_id' => '8',
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
