<?php namespace App\Database\Migrations;

class AddIndicatorsBsaai extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  //parameter a
                  'id' => 1,
                  'parameter_item' => 'S.1. The institution has a system of determining its Vision and Mission.',
                  'description' => 'S.1. The institution has a system of determining its Vision and Mission.',
                  'document_needed_list' => '-University Vision and Mission (UVM) Statement
                                              -Notices of Meeting re formulation of UVM
                                              -Received Letters of Invitation to Stakeholders re UVM
                                              -Minutes of the Meetings  Attendance of meetings
                                              -Action Photos of the proceedings’
                                              -BOR approval of UVM
                                              ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

               [
                  'id' => 2,
                  'parameter_item' => 'S.2. The Vision clearly reflects what the institution hopes to become in the future.',
                  'description' => 'S.2. The Vision clearly reflects what the institution hopes to become in the future.',
                  'document_needed_list' => '-University Vision (UV) Statement
                                              -NEDA’s National and Regional Development Plan
                                              -CHED’s Development Plan
                                              -PUP Development Plan',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 3,
                  'parameter_item' => 'S.3. The Mission clearly reflects the institution’s legal and other statutory mandates.',
                  'description' => 'S.3. The Mission clearly reflects the institution’s legal and other statutory mandates.',
                  'document_needed_list' => '-University Vision (UV) Statement
                                            -NEDA’s Philippine Development Plan
                                            -CHED’s Development Plan
                                            -PUP Development Plan and
                                            -PUP Charter
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 4,
                  'parameter_item' => 'S.4. The Goals of the College/Academic Unit/ are consistent with the Mission of the institution.',
                  'description' => 'S.4. The Goals of the College/Academic Unit/ are consistent with the Mission of the institution.',
                  'document_needed_list' => '-Statement of the College Goals and University Mission (UM) ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 5,
                  'parameter_item' => 'S.5. The Objectives of the program have the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of: ',
                  'description' => 'S.5. The Objectives of the program have the expected outcomes in terms of competencies (skills and knowledge), values and other attributes of the graduates which include the development of: ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 6,
                  'parameter_item' => 'S.5.1 Technical skills in Accountancy',
                  'description' => 'S.5.1 Technical skills in Accountancy ',
                  'document_needed_list' => '-Statement of the Objectives of the Academic Program',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '5',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 7,
                  'parameter_item' => 'S.5.2. research and extension capabilities',
                  'description' => 'S.5.2. research and extension capabilities',
                  'document_needed_list' => '-Statement of the Objectives of the Academic Program',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '5',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 8,
                  'parameter_item' => 'S.5.3. students’ own ideas, desirable attitudes, personal discipline and moral character',
                  'description' => 'S.5.3. students’ own ideas, desirable attitudes, personal discipline and moral character',
                  'document_needed_list' => '-Statement of the Objectives of the Academic Program',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '5',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 9,
                  'parameter_item' => ' S.5.4. entrepreneurial skills',
                  'description' => ' S.5.4. entrepreneurial skills ',
                  'document_needed_list' => '-Statement of the Objectives of the Academic Program',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '5',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 10,
                  'parameter_item' => 'S.5.5. critical, analytical, problem solving and other higher order thinking skills and',
                  'description' => ' S.5.5. critical, analytical, problem solving and other higher order thinking skills and',
                  'document_needed_list' => '-Statement of the Objectives of the Academic Program',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '5',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 11,
                  'parameter_item' => 'S.5.6. aesthetic and cultural values.',
                  'description' => ' S.5.6. aesthetic and cultural values.',
                  'document_needed_list' => '-Statement of the Objectives of the Academic Program',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '5',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 12,
                  'parameter_item' => 'I.1. The Institution/College conducts review on the statement of the Vision and Mission as well as its goals and program objectives for the approval of authorities concerned.',
                  'description' => 'I.1. The Institution/College conducts review on the statement of the Vision and Mission as well as its goals and program objectives for the approval of authorities concerned.',
                  'document_needed_list' => '-University Notices of Meetings re Review of UMV, College goals and program objectives
                                              - Minutes of Meetings with attendance
                                              -Action photos of proceedings
                                              -and Guidelines on  Review of UMV, College goals and program objectives
                                              ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 13,
                  'parameter_item' => 'I.2. The College/ Academic Unit follows a system of formulating its goals and the objectives of the program.',
                  'description' => 'I.2. The College/ Academic Unit follows a system of formulating its goals and the objectives of the program.',
                  'document_needed_list' => '-College and Department Notices of Meetings re Review of College goals and program objectives
                                            - Minutes of Meetings with attendance
                                            -Action photos of proceedings and
                                            - Guidelines on  Review of UMV, College goals and program objectives
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 14,
                  'parameter_item' => 'I.3. The College/Academic Unit faculty, personnel, students and other stakeholders (cooperating agencies, linkages, alumni, industry sector and other concerned groups) participate in the formulation, review and/or revision of the VMGO.',
                  'description' => 'I.3. The College/Academic Unit faculty, personnel, students and other stakeholders (cooperating agencies, linkages, alumni, industry sector and other concerned groups) participate in the formulation, review and/or revision of the VMGO.',
                  'document_needed_list'=> '-College and Department Notices of Meetings re Review of College goals and program objectives
                                          - Minutes of Meetings with attendance Action photos of meetings
                                          -Letters of Invitation to Stakeholders to participate in  the formulation, review and revision of UVM, college Goals and program Objectives and
                                          -Action photos of the proceedings
                                          ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 15,
                  'parameter_item' => 'O.1. The VMGO are crafted and duly-approved by the BOR/BOT.',
                  'description' => 'O.1. The VMGO are crafted and duly-approved by the BOR/BOT.',
                  'document_needed_list'=> '-BOR approval of the UVM, college Goals and program Objectives',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '1',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              // parameter b
               [
                  'id' => 16,
                  'parameter_item' => 'S.1. The VMGO are available on bulletin boards, in catalogs/manuals and in other forms of communication media.',
                  'description' => 'S.1. The VMGO are available on bulletin boards, in catalogs/manuals and in other forms of communication media.',
                  'document_needed_list'=> '-Photos of  Bulletin Boards with UVM, college goals and program objectives
                                            -Printout of PUP Webpages, Catalogs, brochures, bulletin of information, newsletter and other forms of communication media with UVM, college goals and program objectives
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 17,
                  'parameter_item' => 'I.1. A System of dissemination and acceptability of the VMGO is enforced.',
                  'description' => 'I.1. A System of dissemination and acceptability of the VMGO is enforced.',
                  'document_needed_list'=> '-Policy for dissemination and acceptability
                                            -Results of Acceptability and Awareness Survey of the VMGO with different stakeholders
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 18,
                  'parameter_item' => 'I.2. The administrators/faculty attend in-service seminars and training on awareness and acceptability of the: ',
                  'description' => 'I.2. The administrators/faculty attend in-service seminars and training on awareness and acceptability of the: ',
                  'document_needed_list'=> '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 19,
                  'parameter_item' => 'I.2.1. Vision and Mission of the Institution',
                  'description' => 'I.2.1. Vision and Mission of the Institution ',
                  'document_needed_list'=> '-Matrix of  in-service seminars and trainings on awareness and acceptability of UMV, college goals and program objectives
                                            -Copies of the programs of the in-service seminars and trainings
                                            - Photocopies of the certificate of attendance of the administrators and faculty,
                                            -Action photos of in-service seminars and trainings
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '18',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 20,
                  'parameter_item' => 'I.2.2. Goals of the College/Academic Unit and',
                  'description' => 'I.2.2. Goals of the College/Academic Unit and',
                  'document_needed_list'=> '-Matrix of  in-service seminars and trainings on awareness and acceptability of UMV, college goals and program objectives
                                            -Copies of the programs of the in-service seminars and trainings
                                            - Photocopies of the certificate of attendance of the administrators and faculty,
                                            -Action photos of in-service seminars and trainings
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '18',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 21,
                  'parameter_item' => 'I.2.3. Objectives of the Program.',
                  'description' => 'I.2.3. Objectives of the Program.',
                  'document_needed_list'=> '-Matrix of  in-service seminars and trainings on awareness and acceptability of UMV, college goals and program objectives
                                            -Copies of the programs of the in-service seminars and trainings
                                            - Photocopies of the certificate of attendance of the administrators and faculty,
                                            -Action photos of in-service seminars and trainings
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '18',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 22,
                  'parameter_item' => 'I.3. The formulation/review/revision of the VMGO is participated in by the following:',
                  'description' => 'I.3. The formulation/review/revision of the VMGO is participated in by the following:',
                  'document_needed_list'=> '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 23,
                  'parameter_item' => 'I.3.1. administrators ',
                  'description' => 'I.3.1. administrators ',
                  'document_needed_list'=> '-University Notices of Meetings re formulation, review and revision of UMV, College goals and program objectives Letters of invitation to stakeholders
                                            -Minutes of Meetings with attendance
                                            Action photos of meetings and
                                            - Guidelines on  Review of UMV, College goals and program objectives
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '22',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 24,
                  'parameter_item' => 'I.3.2. faculty ',
                  'description' => 'I.3.2. faculty ',
                  'document_needed_list'=> '-University Notices of Meetings re formulation, review and revision of UMV, College goals and program objectives Letters of invitation to stakeholders
                                            -Minutes of Meetings with attendance
                                            Action photos of meetings and
                                            - Guidelines on  Review of UMV, College goals and program objectives
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '22',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 25,
                  'parameter_item' => 'I.3.3. staff',
                  'description' => 'I.3.3. staff ',
                  'document_needed_list'=> '-University Notices of Meetings re formulation, review and revision of UMV, College goals and program objectives Letters of invitation to stakeholders
                                            -Minutes of Meetings with attendance
                                            Action photos of meetings and
                                            - Guidelines on  Review of UMV, College goals and program objectives
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '22',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 26,
                  'parameter_item' => 'I.3.4. students and',
                  'description' => 'I.3.4. students and ',
                  'document_needed_list'=> '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '22',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 27,
                  'parameter_item' => 'I.3.5. other stakeholders.',
                  'description' => 'I.3.5. other stakeholders. ',
                  'document_needed_list'=> '-University Notices of Meetings re formulation, review and revision of UMV, College goals and program objectives Letters of invitation to stakeholders
                                            -Minutes of Meetings with attendance
                                            Action photos of meetings and
                                            - Guidelines on  Review of UMV, College goals and program objectives
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '22',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 28,
                  'parameter_item' => 'I.4. The faculty and staff perform their jobs/functions in consonance with the VMGO.',
                  'description' => 'I.4. The faculty and staff perform their jobs/functions in consonance with the VMGO.',
                  'document_needed_list'=> '-Copies of OPCR and IPCR with ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 29,
                  'parameter_item' => 'I.5. The VMGO are widely disseminated to the different agencies, institutions, industry sector and the community.',
                  'description' => 'I.5. The VMGO are widely disseminated to the different agencies, institutions, industry sector and the community.',
                  'document_needed_list'=> '-Printout PUP Webpages, Catalogs, brochures, bulletin of information, newsletter and other forms of communication media,
                                            -Results of Acceptability and Awareness Survey of the VMGO with different stakeholders
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 30,
                  'parameter_item' => 'O.1 There is full awareness and acceptance of the VMGO by the administrators, faculty, staff, students and other stakeholders.',
                  'description' => 'O.1 There is full awareness and acceptance of the VMGO by the administrators, faculty, staff, students and other stakeholders.',
                  'document_needed_list'=> '-Results of Acceptability and Awareness Survey of the VMGO with different stakeholders',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 31,
                  'parameter_item' => 'O.2 There is congruency between actual educational practices and activities with the following:',
                  'description' => 'O.2 There is congruency between actual educational practices and activities with the following:',
                  'document_needed_list'=> '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 32,
                  'parameter_item' => 'O.2.1. Vision and mission of the SUC ',
                  'description' => 'O.2.1. Vision and mission of the SUC ',
                  'document_needed_list'=> '-Matrix of educational practices and activities congruent with the UMV, college goals and program objectives with Attendance and
                                            -Action pictures of educational practices
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '31',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 33,
                  'parameter_item' => 'O.2.2 Goals of the College/Academic Unit of Business Education and ',
                  'description' => 'O.2.2 Goals of the College/Academic Unit of Business Education and ',
                  'document_needed_list'=> '-Matrix of educational practices and activities congruent with the UMV, college goals and program objectives with Attendance and
                                            -Action pictures of educational practices
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '31',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 34,
                  'parameter_item' => 'O.2.3. Objectives of the Accountancy Program.',
                  'description' => 'O.2.3. Objectives of the Accountancy Program.',
                  'document_needed_list'=> '-Matrix of educational practices and activities congruent with the UMV, college goals and program objectives with Attendance and
                                            -Action pictures of educational practices
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '31',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 35,
                  'parameter_item' => 'O.3. The goals and objectives are being achieved.',
                  'description' => 'O.3. The goals and objectives are being achieved.',
                  'document_needed_list'=> '-Matrix of Achievement of the college and program based on the goals and objectives
                                            -Copy of Accomplishment  Reports
                                            -List of Remarkable Graduates with Profile
                                            ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '1',
                  'template_parameter_id' => '2',
                  'parent_parameter_item_id' => '0',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 1 AND id <= 35');
        }
}
