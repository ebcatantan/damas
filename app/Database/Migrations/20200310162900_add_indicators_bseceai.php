<?php namespace App\Database\Migrations;

class AddIndicatorsBseceai extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  //parameter a
                  'id' => 1501,
                  'parameter_item' => 'S.1. The institution has a system of determining its Vision and Mission',
                  'description' => 'S.1. The institution has a system of determining its Vision and Mission',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1502,
                  'parameter_item' => 'S.2. The Vision clearly reflects what the Institution hopes to become in the future.',
                  'description' => 'S.2. The Vision clearly reflects what the Institution hopes to become in the future.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1503,
                  'parameter_item' => 'S.3. The Mission clearly reflects the Institution’s legal and other statutory mandates.',
                  'description' => 'S.3. The Mission clearly reflects the Institution’s legal and other statutory mandates.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1504,
                  'parameter_item' => 'S.4. The Goals of the College/Academic Unit are consistent with the Mission of the institution.',
                  'description' => 'S.4. The Goals of the College/Academic Unit are consistent with the Mission of the institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1505,
                  'parameter_item' => 'S.5. The Objectives of the program have the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of:',
                  'description' => 'S.5. The Objectives of the program have the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1506,
                  'parameter_item' => 'S.5.1. technical skills in Electronics Engineering',
                  'description' => 'S.5.1. technical skills in Electronics Engineering',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1505',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1507,
                  'parameter_item' => 'S.5.2. research and extension capabilities',
                  'description' => 'S.5.2. research and extension capabilities',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1505',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1508,
                  'parameter_item' => 'S.5.3. students’ own ideas, desirable attitudes and personal discipline',
                  'description' => 'S.5.3. students’ own ideas, desirable attitudes and personal discipline',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1505',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1509,
                  'parameter_item' => 'S.5.4. moral character',
                  'description' => 'S.5.4. moral character',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1505',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1510,
                  'parameter_item' => 'S.5.5. critical, analytical, problem solving and other higher order thinking skills and',
                  'description' => 'S.5.5. critical, analytical, problem solving and other higher order thinking skills and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1505',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1511,
                  'parameter_item' => 'S.5.6. aesthetic and cultural values.',
                  'description' => 'S.5.6. aesthetic and cultural values.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1505',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1512,
                  'parameter_item' => 'I.1. The Institution/College conducts a review on the statement of the Vision and Mission as well as its goals and program objectives for the approval of authorities concerned.',
                  'description' => 'I.1. The Institution/College conducts a review on the statement of the Vision and Mission as well as its goals and program objectives for the approval of authorities concerned.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1513,
                  'parameter_item' => 'I.2. The College/Academic Unit follows a system in formulating its goals and the objectives of the program.',
                  'description' => 'I.2. The College/Academic Unit follows a system in formulating its goals and the objectives of the program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1514,
                  'parameter_item' => 'I.3. The College/Academic Unit’s faculty, personnel, students and other stakeholders (cooperating agencies, linkages, alumni, industry sector and other concerned groups) participate in the formulation, review and/or revision of the VMGO.',
                  'description' => 'I.3. The College/Academic Unit’s faculty, personnel, students and other stakeholders (cooperating agencies, linkages, alumni, industry sector and other concerned groups) participate in the formulation, review and/or revision of the VMGO.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1515,
                  'parameter_item' => 'O.1. The VMGO are crafted and duly approved by the BOR/BOT.',
                  'description' => 'O.1. The VMGO are crafted and duly approved by the BOR/BOT.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter b
              [
                  'id' => 1516,
                  'parameter_item' => 'S.1. The VMGO are available on bulletin boards, in catalogs/manuals and are available in other forms of communication media.',
                  'description' => 'S.1. The VMGO are available on bulletin boards, in catalogs/manuals and are available in other forms of communication media.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1517,
                  'parameter_item' => 'I.1. A system of dissemination and acceptability of the VMGO is enforced.',
                  'description' => 'I.1. A system of dissemination and acceptability of the VMGO is enforced.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1518,
                  'parameter_item' => 'I.2. The administrators/faculty attend in-service seminars and training, the following:',
                  'description' => 'I.2. The administrators/faculty attend in-service seminars and training, the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1519,
                  'parameter_item' => 'I.2.1. Vision and Mission of the Institution',
                  'description' => 'I.2.1. Vision and Mission of the Institution',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1518',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1520,
                  'parameter_item' => 'I.2.2. Goals of the College/Academic Unit and',
                  'description' => 'I.2.2. Goals of the College/Academic Unit and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1518',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1521,
                  'parameter_item' => 'I.2.3. Objectives of the Program.',
                  'description' => 'I.2.3. Objectives of the Program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1518',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1522,
                  'parameter_item' => 'I.3. The formulation/review/revision of the VMGO is participated on by the following:',
                  'description' => 'I.3. The formulation/review/revision of the VMGO is participated on by the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1523,
                  'parameter_item' => 'I.3.1. administrators',
                  'description' => 'I.3.1. administrators',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1522',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1524,
                  'parameter_item' => 'I.3.2. faculty',
                  'description' => 'I.3.2. faculty',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1522',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1525,
                  'parameter_item' => 'I.3.3. staff',
                  'description' => 'I.3.3. staff',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1522',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1526,
                  'parameter_item' => 'I.3.4. students and',
                  'description' => 'I.3.4. students and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1522',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1527,
                  'parameter_item' => 'I.3.5. other stakeholders',
                  'description' => 'I.3.5. other stakeholders',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1522',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1528,
                  'parameter_item' => 'I.4. The faculty and staff perform their jobs/functions in consonance with the VMGO.',
                  'description' => 'I.4. The faculty and staff perform their jobs/functions in consonance with the VMGO.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1529,
                  'parameter_item' => 'I.5. The VMGO are widely disseminated to the different agencies, institutions, industry sector, and the community.',
                  'description' => 'I.5. The VMGO are widely disseminated to the different agencies, institutions, industry sector, and the community.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1530,
                  'parameter_item' => 'O.1. There is full awareness and acceptance of the VMGO by the administrators, faculty, staff, students and other stakeholders',
                  'description' => 'O.1. There is full awareness and acceptance of the VMGO by the administrators, faculty, staff, students and other stakeholders',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1531,
                  'parameter_item' => 'O.2. There is congruency between actual educational practices and activities with the following:',
                  'description' => 'O.2. There is congruency between actual educational practices and activities with the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1532,
                  'parameter_item' => 'O.2.1. Vision and mission of the SUC',
                  'description' => 'O.2.1. Vision and mission of the SUC',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1531',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1533,
                  'parameter_item' => 'O.2.2. Goals of the College/Academic Unit and',
                  'description' => 'O.2.2. Goals of the College/Academic Unit and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1531',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1534,
                  'parameter_item' => 'O.2.3. Objectives of the Electronics Engineering program.',
                  'description' => 'O.2.3. Objectives of the Electronics Engineering program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '1531',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 1535,
                  'parameter_item' => 'O.3. The goals and objectives are being achieved.',
                  'description' => 'O.3. The goals and objectives are being achieved.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '11',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 1501 AND id <= 1535');
        }
}
