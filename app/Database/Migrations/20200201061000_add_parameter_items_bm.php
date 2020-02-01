<?php namespace App\Database\Migrations;

class AddParameterItemsBm extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => '1000',
                  'parameter_item' => 'S.1 The institution has a system of determining the Vision and Mission.',
                  'description' => 'S.1 The institution has a system of determining the Vision and Mission.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1001',
                  'parameter_item' => 'S.2 The Vision clearly reflects what the Institution hopes to become in the future.',
                  'description' => 'S.2 The Vision clearly reflects what the Institution hopes to become in the future.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1002',
                  'parameter_item' => 'S.3 The Mission clearly reflects the Institution’s legal and other statutory mandates.',
                  'description' => 'S.3 The Mission clearly reflects the Institution’s legal and other statutory mandates.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1003',
                  'parameter_item' => 'S.4 The Goals of the academic unit/department are clearly stated and are consistent with the Mission of the Institution.',
                  'description' => 'S.4 The Goals of the academic unit/department are clearly stated and are consistent with the Mission of the Institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1004',
                  'parameter_item' => 'S.5 The Objectives clearly state the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of:',
                  'description' => 'S.5 The Objectives clearly state the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of:',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1005',
                  'parameter_item' => 'S.5.1 technical skills in Business and Management Education;',
                  'description' => 'S.5.1 technical skills in Business and Management Education;',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1004',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1006',
                  'parameter_item' => 'S.5.2 research and extension capabilities;',
                  'description' => 'S.5.2 research and extension capabilities;',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1004',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1007',
                  'parameter_item' => 'S.5.3. students’ desirable attitudes and personal discipline;',
                  'description' => 'S.5.3. students’ desirable attitudes and personal discipline;',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1004',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1008',
                  'parameter_item' => 'S.5.4. moral character;',
                  'description' => 'S.5.4. moral character;',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1004',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1009',
                  'parameter_item' => 'S.5.5. critical, analytical, problem solving and other higher order thinking  skills; and',
                  'description' => 'S.5.5. critical, analytical, problem solving and other higher order thinking  skills; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1004',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1010',
                  'parameter_item' => 'S.5.6. aesthetic and cultural values.',
                  'description' => 'S.5.6. aesthetic and cultural values.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '1004',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1011',
                  'parameter_item' => 'I.1.  The Institution/ College conducts a review on the statement of the Vision and Mission as well as its goals and program objectives for the approval of authorities concerned.',
                  'description' => 'I.1.  The Institution/ College conducts a review on the statement of the Vision and Mission as well as its goals and program objectives for the approval of authorities concerned.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1012',
                  'parameter_item' => 'I.2   The Academic Unit/College follows a system of formulating its goals and the objectives of the program.',
                  'description' => 'I.2   The Academic Unit/College follows a system of formulating its goals and the objectives of the program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1013',
                  'parameter_item' => 'I.3 The Institution’s/Academic Unit’s/ College faculty, personnel, students and other stakeholders (cooperating agencies, linkages, alumni, industry sector and other concerned groups) participate in the formulation, review and/or revision of the VMGO.',
                  'description' => 'I.3 The Institution’s/Academic Unit’s/ College faculty, personnel, students and other stakeholders (cooperating agencies, linkages, alumni, industry sector and other concerned groups) participate in the formulation, review and/or revision of the VMGO.',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => '1014',
                  'parameter_item' => 'O.1 The VMGO are crafted and duly approved by the BOT/BOR',
                  'description' => 'O.1 The VMGO are crafted and duly approved by the BOT/BOR',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '100',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '',
                  'status' => 'a',
                  'is_finalized' => '0',
                  'created_by' => '1',
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
