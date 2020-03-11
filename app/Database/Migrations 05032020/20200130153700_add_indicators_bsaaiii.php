<?php namespace App\Database\Migrations;

class AddIndicatorsBsaAreaThree extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 205,
                  'parameter_item' => 'S.1 The curriculum provides for the development of the following professional competencies:',
                  'description' => 'S.1 The curriculum provides for the development of the following professional competencies:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 206,
                  'parameter_item' => 'S.1.1 acquisition of knowledge of theories based on the field of specialization/discipline',
                  'description' => 'S.1.1 acquisition of knowledge of theories based on the field of specialization/discipline',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '205',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 207,
                  'parameter_item' => 'S.1.2 application of the theories to real problem in the field and',
                  'description' => 'S.1.2 application of the theories to real problem in the field and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '205',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 208,
                  'parameter_item' => 'S.1.3 demonstration of skills in applying different strategies in actual work setting. ',
                  'description' => 'S.1.3 demonstration of skills in applying different strategies in actual work setting.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '205',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 209,
                  'parameter_item' => 'S.2 There is a system of validation of subjects taken from others Schools',
                  'description' => 'S.2 There is a system of validation of subjects taken from others Schools',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 210,
                  'parameter_item' => 'S.3 The curriculum reflects the local, regional and national development goals as well as the institution’s vision and mission.',
                  'description' => 'S.3 The curriculum reflects the local, regional and national development goals as well as the institution’s vision and mission.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 211,
                  'parameter_item' => 'I.1 The College/ Academic Unit implements the curriculum/ program of study in consonance with CMO No.3s 2007 as follows:',
                  'description' => 'I.1 The College/ Academic Unit implements the curriculum/ program of study in consonance with CMO No.3s 2007 as follows:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 212,
                  'parameter_item' => 'I.1.1 General Education - 51 units',
                  'description' => 'I.1.1 General Education - 51 units',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '211',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 213,
                  'parameter_item' => 'I.1.2 Business Education - 46 units',
                  'description' => 'I.1.2 Business Education - 46 units',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '211',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 214,
                  'parameter_item' => 'I.1.3 IT Education - 9 units',
                  'description' => 'I.1.3 IT Education - 9 units',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '211',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 215,
                  'parameter_item' => 'I.1.4 Accounting & Finance - 6 units',
                  'description' => 'I.1.4 Accounting & Finance - 6 units',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '211',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 216,
                  'parameter_item' => 'I.1.5 Physical Education/NSTP - 14 units',
                  'description' => 'I.1.5 Physical Education/NSTP - 14 units',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '211',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 217,
                  'parameter_item' => 'I.2 The subjects are logically sequenced and prerequisites are identified.',
                  'description' => 'I.2 The subjects are logically sequenced and prerequisites are identified.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 218,
                  'parameter_item' => 'I.3 The curricular content is responsive to the needs of the country and recent developments in the professions',
                  'description' => 'I.3 The curricular content is responsive to the needs of the country and recent developments in the professions',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 219,
                  'parameter_item' => 'I.4 The curricular content covers the extent of the professional and technical preparation required of its graduates',
                  'description' => 'I.4 The curricular content covers the extent of the professional and technical preparation required of its graduates',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 220,
                  'parameter_item' => 'I.5 The curriculum integrates values, reflective of national customs, culture and traditions in cases where applicable',
                  'description' => 'I.5 The curriculum integrates values, reflective of national customs, culture and traditions in cases where applicable',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 221,
                  'parameter_item' => 'I.6 Opportunities for participation in hands-on activities such as immersion/practical training and field study are maintained in the curriculum',
                  'description' => 'I.6 Opportunities for participation in hands-on activities such as immersion/practical training and field study are maintained in the curriculum',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 222,
                  'parameter_item' => 'I.7 The following activities are undertaken to ensure quality in the process of curriculum development',
                  'description' => 'I.7 The following activities are undertaken to ensure quality in the process of curriculum development',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 223,
                  'parameter_item' => 'I.7.1 participate planning and designing of the curriculum by the following stakeholders:',
                  'description' => 'I.7.1 participate planning and designing of the curriculum by the following stakeholders:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '222',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 224,
                  'parameter_item' => 'I.7.1.1 administration',
                  'description' => 'I.7.1.1 administration',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '223',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 225,
                  'parameter_item' => 'I.7.1.2 faculty',
                  'description' => 'I.7.1.2 faculty',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '223',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 226,
                  'parameter_item' => 'I.7.1.3 students',
                  'description' => 'I.7.1.3 students',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '223',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 227,
                  'parameter_item' => '1.7.1.4 alumni',
                  'description' => '1.7.1.4 alumni',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '223',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 228,
                  'parameter_item' => '1.7.1.5 representative from the industry/sector and',
                  'description' => '1.7.1.5 representative from the industry/sector and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '223',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 229,
                  'parameter_item' => '1.7.1.6 others (please specify) _____________',
                  'description' => '1.7.1.6 others (please specify) _____________',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '223',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 230,
                  'parameter_item' => '1.7.2 periodic review, assessment and updating of the curriculum by the Academic Council',
                  'description' => '1.7.2 periodic review, assessment and updating of the curriculum by the Academic Council',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '222',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 231,
                  'parameter_item' => '1.7.3 confirmation of the curriculum by the BOR/BOT and ',
                  'description' => '1.7.3 confirmation of the curriculum by the BOR/BOT and ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '222',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 232,
                  'parameter_item' => '1.7.4 others (please specify) ______________________',
                  'description' => '1.7.4 others (please specify) ______________________',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '222',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 233,
                  'parameter_item' => 'I.8 The program of study allows the accommodation of students with special needs and assists them to finish the degree',
                  'description' => 'I.8 The program of study allows the accommodation of students with special needs and assists them to finish the degree',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 234,
                  'parameter_item' => 'O.1 The curriculum is responsive and relevant to the demands of the times',
                  'description' => 'O.1 The curriculum is responsive and relevant to the demands of the times',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 235,
                  'parameter_item' => 'O.2 There is a passing average performance in the Board of  Examination for Certified Public Accountants',
                  'description' => 'O.2 There is a passing average performance in the Board of Examination for Certified Public Accountants',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '11',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              //parameter b
              [
                  'id' => 236,
                  'parameter_item' => 'S.1 There is an institutional outcome-based standard format in the preparation of the course syllabi',
                  'description' => 'S.1 There is an institutional outcome-based standard format in the preparation of the course syllabi',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 237,
                  'parameter_item' => 'S.2 The syllabus includes a list of suggested readings and references of print and electronic resources within the last ten (10) years',
                  'description' => 'S.2 The syllabus includes a list of suggested readings and references of print and electronic resources within the last ten (10) years',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 238,
                  'parameter_item' => 'S.3 Copies of all course syllabi during the term are available at the Dean’s office or in any other appropriate repository',
                  'description' => 'S.3 Copies of all course syllabi during the term are available at the Dean’s office or in any other appropriate repository',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 239,
                  'parameter_item' => 'S.4. Copies of all course syllabi in the previous semesters are filed for reference purposes.',
                  'description' => 'S.4. Copies of all course syllabi in the previous semesters are filed for reference purposes.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 240,
                  'parameter_item' => 'S.5. There is a provision for remedial measures to strengthen the basic skills in Mathematics and English, and other “tool” subjects.',
                  'description' => 'S.5. There is a provision for remedial measures to strengthen the basic skills in Mathematics and English, and other “tool” subjects.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 241,
                  'parameter_item' => 'S.6. There is a mechanism to facilitate the teaching-learning process.',
                  'description' => 'S.6. There is a mechanism to facilitate the teaching-learning process.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 242,
                  'parameter_item' => 'I.1. The Dean or official concerned approves the updated syllabus for each subject.',
                  'description' => 'I.1. The Dean or official concerned approves the updated syllabus for each subject.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 243,
                  'parameter_item' => 'I.2. The faculty prepares syllabi with comprehensive contents.',
                  'description' => 'I.2. The faculty prepares syllabi with comprehensive contents.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 244,
                  'parameter_item' => 'I.3. The faculty revise and enhance their syllabi preferably every two years and as needed.',
                  'description' => 'I.3. The faculty revise and enhance their syllabi preferably every two years and as needed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 245,
                  'parameter_item' => 'I.4. The faculty provides a copy of the syllabus to each student.',
                  'description' => 'I.4. The faculty provides a copy of the syllabus to each student.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 246,
                  'parameter_item' => 'I.5. Teaching strategies stimulate the development of the students’ higher-order thinking skills (HOTS) such as critical thinking, analytical thinking, creative thinking and problem-solving.',
                  'description' => 'I.5. Teaching strategies stimulate the development of the students’ higher-order thinking skills (HOTS) such as critical thinking, analytical thinking, creative thinking and problem-solving.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 247,
                  'parameter_item' => 'I.6. Classroom instruction is enriched through the use of the following strategies:',
                  'description' => 'I.6. Classroom instruction is enriched through the use of the following strategies:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 248,
                  'parameter_item' => 'I.6.1. symposia, seminars, workshops, professional lectures',
                  'description' => 'I.6.1. symposia, seminars, workshops, professional lectures',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '247',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 249,
                  'parameter_item' => 'I.6.2. educational tours/learning visits/other co-curricular activities',
                  'description' => 'I.6.2. educational tours/learning visits/other co-curricular activities',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '247',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 250,
                  'parameter_item' => 'I.6.3. peer teaching/cooperative learning and',
                  'description' => 'I.6.3. peer teaching/cooperative learning and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '247',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 251,
                  'parameter_item' => 'I.6.4. computer-assisted instruction (CAI) and computer-assisted learning (CAL).',
                  'description' => 'I.6.4. computer-assisted instruction (CAI) and computer-assisted learning (CAL).',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '247',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 252,
                  'parameter_item' => 'I.7. At least three (3) of the following course requirements are used and to be rated accordingly:',
                  'description' => 'I.7. At least three (3) of the following course requirements are used and to be rated accordingly:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 253,
                  'parameter_item' => 'I.7.1. group/individual projects',
                  'description' => 'I.7.1. group/individual projects',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 254,
                  'parameter_item' => 'I.7.2. group/individual reports',
                  'description' => 'I.7.2. group/individual reports',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 255,
                  'parameter_item' => 'I.7.3. group/individual term papers',
                  'description' => 'I.7.3. group/individual term papers',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 256,
                  'parameter_item' => 'I.7.4. performance activities',
                  'description' => 'I.7.4. performance activities',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 257,
                  'parameter_item' => 'I.7.5. learning modules',
                  'description' => 'I.7.5. learning modules',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 258,
                  'parameter_item' => 'I.7.6. learning contract',
                  'description' => 'I.7.6. learning contract',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 259,
                  'parameter_item' => ' I.7.7. portfolio',
                  'description' => ' I.7.7. portfolio',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 260,
                  'parameter_item' => 'I.7.8. research study and',
                  'description' => 'I.7.8. research study and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 261,
                  'parameter_item' => 'I.7.9. others (please specify) __________________________',
                  'description' => 'I.7.9. others (please specify) __________________________',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '252',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 262,
                  'parameter_item' => 'I.8. Instruction is enriched through the use of, at least, 10 of the following techniques/strategies:',
                  'description' => 'I.8. Instruction is enriched through the use of, at least, 10 of the following techniques/strategies:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 263,
                  'parameter_item' => 'I.8.1. film showing',
                  'description' => 'I.8.1. film showing',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 264,
                  'parameter_item' => 'I.8.2. projects',
                  'description' => 'I.8.2. projects',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 265,
                  'parameter_item' => 'I.8.3. group dynamics',
                  'description' => 'I.8.3. group dynamics',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 266,
                  'parameter_item' => 'I.8.4. case study',
                  'description' => 'I.8.4. case study',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 267,
                  'parameter_item' => ' I.8.5. workshops',
                  'description' => ' I.8.5. workshops',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 268,
                  'parameter_item' => ' I.8.6. simulations',
                  'description' => ' I.8.6. simulations',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 269,
                  'parameter_item' => ' I.8.7. dimensional question approach',
                  'description' => 'I.8.7. dimensional question approach',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 270,
                  'parameter_item' => 'I.8.8. brainstorming',
                  'description' => 'I.8.8. brainstorming',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 271,
                  'parameter_item' => 'I.8.9. buzz sessions',
                  'description' => 'I.8.9. buzz sessions',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 272,
                  'parameter_item' => 'I.8.10. informal creative groups',
                  'description' => 'I.8.10. informal creative groups',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 273,
                  'parameter_item' => 'I.8.11. interactive learning',
                  'description' => 'I.8.11. interactive learning',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 274,
                  'parameter_item' => 'I.8.12. team teaching',
                  'description' => 'I.8.12. team teaching',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 275,
                  'parameter_item' => 'I.8.13. micro teaching',
                  'description' => 'I.8.13. micro teaching',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 276,
                  'parameter_item' => 'I.8.14. macro teaching',
                  'description' => 'I.8.14. macro teaching',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 277,
                  'parameter_item' => 'I.8.15. tandem teaching',
                  'description' => 'I.8.15. tandem teaching',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 278,
                  'parameter_item' => 'I.8.16. peer teaching',
                  'description' => 'I.8.16. peer teaching',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 279,
                  'parameter_item' => 'I.8.17. multi-media/courseware/teach ware',
                  'description' => 'I.8.17. multi-media/courseware/teach ware',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 280,
                  'parameter_item' => 'I.8.18. experiments',
                  'description' => 'I.8.18. experiments',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 281,
                  'parameter_item' => 'I.8.19. problem-solving',
                  'description' => 'I.8.19. problem-solving',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 282,
                  'parameter_item' => 'I.8.20. type study methods',
                  'description' => 'I.8.20. type study methods',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 283,
                  'parameter_item' => 'I.8.21. reporting',
                  'description' => 'I.8.21. reporting',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 284,
                  'parameter_item' => 'I.8.22. panel discussion and',
                  'description' => 'I.8.22. panel discussion and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 285,
                  'parameter_item' => 'I.8.23. others (please specify) ______________________.',
                  'description' => 'I.8.23. others (please specify) ______________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '262',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 286,
                  'parameter_item' => 'I.9. Instructional strategies provide for students’ individual needs and multiple intelligences.',
                  'description' => 'I.9. Instructional strategies provide for students’ individual needs and multiple intelligences.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 287,
                  'parameter_item' => 'I.10. Instruction is enhanced through the following:',
                  'description' => 'I.10. Instruction is enhanced through the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 288,
                  'parameter_item' => 'I.10.1. submission of approved and updated syllabus for every subject/course',
                  'description' => 'I.10.1. submission of approved and updated syllabus for every subject/course',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '287',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 289,
                  'parameter_item' => 'I.10.2. regular classroom observation/supervision',
                  'description' => 'I.10.2. regular classroom observation/supervision',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '287',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 290,
                  'parameter_item' => 'I.10.3. regular faculty meetings with the Dean/Academic Head/Department Chair',
                  'description' => 'I.10.3. regular faculty meetings with the Dean/Academic Head/Department Chair',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '287',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 291,
                  'parameter_item' => 'I.10.4. regular faculty performance evaluation',
                  'description' => 'I.10.4. regular faculty performance evaluation',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '287',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 292,
                  'parameter_item' => 'I.10.5. attendance/participation of faculty in in-service training',
                  'description' => 'I.10.5. attendance/participation of faculty in in-service training',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '287',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 293,
                  'parameter_item' => 'I.10.6. conduct of experimental classes and',
                  'description' => 'I.10.6. conduct of experimental classes and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '287',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 294,
                  'parameter_item' => 'I.10.7. adoption of alternative instructional delivery modes such as modular instruction, e-learning and on-line study, etc.',
                  'description' => 'I.10.7. adoption of alternative instructional delivery modes such as modular instruction, e-learning and on-line study, etc.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '287',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 295,
                  'parameter_item' => 'I.11. Instructional materials (IMs) are reviewed and recommended by a duly created Instructional Materials Committee (IMC).',
                  'description' => 'I.11. Instructional materials (IMs) are reviewed and recommended by a duly created Instructional Materials Committee (IMC).',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 296,
                  'parameter_item' => 'I.12. Varied, multi-sensory materials and computer programs are utilized.',
                  'description' => 'I.12. Varied, multi-sensory materials and computer programs are utilized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 297,
                  'parameter_item' => 'I.13. The College/Academic Unit maintains consortia and linkages with other learning institutions for academic exchange of instructional materials.',
                  'description' => 'I.13. The College/Academic Unit maintains consortia and linkages with other learning institutions for academic exchange of instructional materials.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 298,
                  'parameter_item' => 'I.14. The faculty are encouraged to produce their own instructional materials such as modules, software, visual aids, manuals and textbooks.',
                  'description' => 'I.14. The faculty are encouraged to produce their own instructional materials such as modules, software, visual aids, manuals and textbooks.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 299,
                  'parameter_item' => 'O.1. Course syllabi are updated and approved by concerned authorities.',
                  'description' => 'O.1. Course syllabi are updated and approved by concerned authorities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 300,
                  'parameter_item' => 'O.2. Varied teaching strategies are efficiently and effectively used.',
                  'description' => 'O.2. Varied teaching strategies are efficiently and effectively used.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 301,
                  'parameter_item' => 'O.3. Instructional materials produced by the faculty are copyrighted/patented.',
                  'description' => 'O.3. Instructional materials produced by the faculty are copyrighted/patented.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '12',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //paramater  c
              [
                  'id' => 302,
                  'parameter_item' => 'S.1. The program of studies has a system of evaluating student performance through a combination of the following:',
                  'description' => 'S.1. The program of studies has a system of evaluating student performance through a combination of the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 303,
                  'parameter_item' => 'S.1.1. formative tests such as quizzes, units tests',
                  'description' => 'S.1.1. formative tests such as quizzes, units tests',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '302',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 304,
                  'parameter_item' => 'S.1.2. summative tests such as mid-term and final examinations',
                  'description' => 'S.1.2. summative tests such as mid-term and final examinations',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '302',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 305,
                  'parameter_item' => 'S.1.3. project and term papers',
                  'description' => 'S.1.3. project and term papers',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '302',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 306,
                  'parameter_item' => 'S.1.4. practicum and performance tests and',
                  'description' => 'S.1.4. practicum and performance tests and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '302',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 307,
                  'parameter_item' => 'S.1.5. other course requirements.',
                  'description' => 'S.1.5. other course requirements.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '302',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 308,
                  'parameter_item' => 'S.2. The summative tests have the following descriptions:',
                  'description' => 'S.2. The summative tests have the following descriptions:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 309,
                  'parameter_item' => 'S.2.1. comprehensive enough to test the different levels of cognitive skills and knowledge of content and',
                  'description' => 'S.2.1. comprehensive enough to test the different levels of cognitive skills and knowledge of content and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '308',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 310,
                  'parameter_item' => 'S.2.2. based on a well-designed Table of Specifications (TOS).',
                  'description' => 'S.2.2. based on a well-designed Table of Specifications (TOS).',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '308',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 311,
                  'parameter_item' => 'I.1. Varied evaluation measures are used, such as:',
                  'description' => 'I.1. Varied evaluation measures are used, such as:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 312,
                  'parameter_item' => 'I.1.1. portfolio',
                  'description' => 'I.1.1. portfolio',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 313,
                  'parameter_item' => 'I.1.2. rubric assessment',
                  'description' => 'I.1.2. rubric assessment',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 314,
                  'parameter_item' => 'I.1.3. skills demonstration',
                  'description' => 'I.1.3. skills demonstration',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 315,
                  'parameter_item' => 'I.1.4. paper and pencil tests',
                  'description' => 'I.1.4. paper and pencil tests',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 316,
                  'parameter_item' => 'I.1.5. oral examinations',
                  'description' => 'I.1.5. oral examinations',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 317,
                  'parameter_item' => 'I.1.6. group/individual reports',
                  'description' => 'I.1.6. group/individual reports',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 318,
                  'parameter_item' => 'I.1.7. group/individual study/projects and',
                  'description' => 'I.1.7. group/individual study/projects and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 319,
                  'parameter_item' => 'I.1.8. other (please specify) ________________________.',
                  'description' => 'I.1.8. other (please specify) ________________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '311',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 320,
                  'parameter_item' => 'I.2. Evaluation tools/instruments are reviewed and revised periodically.',
                  'description' => 'I.2. Evaluation tools/instruments are reviewed and revised periodically.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 321,
                  'parameter_item' => 'I.3. The faculty are trained how to assess student performance properly.',
                  'description' => 'I.3. The faculty are trained how to assess student performance properly.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 322,
                  'parameter_item' => 'I.4. The College/Academic Unit encourages and supports assessment for multiple intelligences.',
                  'description' => 'I.4. The College/Academic Unit encourages and supports assessment for multiple intelligences.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 323,
                  'parameter_item' => 'I.5. Course and test requirements are returned to the students after results are checked, recorded and analyzed.',
                  'description' => 'I.5. Course and test requirements are returned to the students after results are checked, recorded and analyzed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 324,
                  'parameter_item' => 'I.6. The system of student evaluation and grading is defined, understood, and disseminated to the:',
                  'description' => 'I.6. The system of student evaluation and grading is defined, understood, anddisseminated to the:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 325,
                  'parameter_item' => 'I.6.1. students',
                  'description' => 'I.6.1. students',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '324',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 326,
                  'parameter_item' => 'I.6.2. faculty',
                  'description' => 'I.6.2. faculty',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '324',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 327,
                  'parameter_item' => 'I.6.3. academic administrators and',
                  'description' => 'I.6.3. academic administrators and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '324',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 328,
                  'parameter_item' => 'I.6.4. parents/guardians.',
                  'description' => 'I.6.4. parents/guardians.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '324',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 329,
                  'parameter_item' => 'O.1. The students’ academic performance is commendable.',
                  'description' => 'O.1. The students’ academic performance is commendable.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 330,
                  'parameter_item' => 'O.2. Retention rate of students is on the average.',
                  'description' => 'O.2. Retention rate of students is on the average.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '13',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              //parameter d
              [
                  'id' => 331,
                  'parameter_item' => 'S.1. There are policies on management of learning which include the following:',
                  'description' => 'S.1. There are policies on management of learning which include the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 332,
                  'parameter_item' => 'S.1.1. students’ attendance in class and other academic activities',
                  'description' => 'S.1.1. students’ attendance in class and other academic activities',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '331',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 333,
                  'parameter_item' => 'S.1.2. schedule of classes',
                  'description' => 'S.1.2. schedule of classes',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '331',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 334,
                  'parameter_item' => 'S.1.3. students\' discipline and',
                  'description' => 'S.1.3. students’ discipline and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '331',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 335,
                  'parameter_item' => 'S.1.4. maintenance of cleanliness and orderliness.',
                  'description' => 'S.1.4. maintenance of cleanliness and orderliness.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '331',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 336,
                  'parameter_item' => 'I.1. The policies on management of learning are enforced.',
                  'description' => 'I.1. The policies on management of learning are enforced.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 337,
                  'parameter_item' => 'I.2. Student activities are well-planned and implemented.',
                  'description' => 'I.2. Student activities are well-planned and implemented.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 338,
                  'parameter_item' => 'I.3. Assignments are designed to reinforce teaching which result to students maximum learning.',
                  'description' => 'I.3. Assignments are designed to reinforce teaching which result to students maximum learning.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 339,
                  'parameter_item' => 'I.4. The maximum class size of 50 for undergraduate courses is enforced.',
                  'description' => 'I.4. The maximum class size of 50 for undergraduate courses is enforced.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 340,
                  'parameter_item' => 'I.5. Classroom discipline is maintained in accordance with democratic practices.',
                  'description' => 'I.5. Classroom discipline is maintained in accordance with democratic practices.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 341,
                  'parameter_item' => 'I.6. The class officers and assigned students assist in maintaining cleanliness of classroom, laboratories, corridors and the school campus.',
                  'description' => 'I.6. The class officers and assigned students assist in maintaining cleanliness of classroom, laboratories, corridors and the school campus.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 342,
                  'parameter_item' => 'I.7. Independent work and performance are encouraged and monitored in the following:',
                  'description' => 'I.7. Independent work and performance are encouraged and monitored in the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 343,
                  'parameter_item' => 'I.7.1. case studies/projects/reports',
                  'description' => 'I.7.1. case studies/projects/reports',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '342',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 344,
                  'parameter_item' => 'I.7.2. accounting practices',
                  'description' => 'I.7.2. accounting practices',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '342',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 345,
                  'parameter_item' => 'I.7.3. thesis',
                  'description' => 'I.7.3. thesis',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '342',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 346,
                  'parameter_item' => 'I.7.4. on the job-training and',
                  'description' => 'I.7.4. on the job-training and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '342',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 347,
                  'parameter_item' => 'I.7.5. others (please specify) ____________________.',
                  'description' => 'I.7.5. others (please specify) ____________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '342',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 348,
                  'parameter_item' => 'I.8. In classes using lecture and other similar methods of teaching, the number of students does not exceed 50. ',
                  'description' => 'I.8. In classes using lecture and other similar methods of teaching, the number of students does not exceed 50.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 349,
                  'parameter_item' => 'O.1. Learning is efficiently and effectively managed.',
                  'description' => 'O.1. Learning is efficiently and effectively managed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '14',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              //parameter E
              [
                  'id' => 350,
                  'parameter_item' => 'S.1. There is a policy on graduation requirements.',
                  'description' => 'S.1. There is a policy on graduation requirements.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '15',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 351,
                  'parameter_item' => 'I.1. The students are regularly informed of the academic requirements of their respective courses.',
                  'description' => 'I.1. The students are regularly informed of the academic requirements of their respective courses.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '15',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 352,
                  'parameter_item' => 'I.2. The College/Academic Unit implements a system for student returnees and transferees to meet the residence and other graduation requirements.',
                  'description' => 'I.2. The College/Academic Unit implements a system for student returnees and transferees to meet the residence and other graduation requirements.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '15',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 353,
                  'parameter_item' => 'I.3. Graduating students conduct research and/or undergo practicum/OJT or other activities prescribed in their respective curricula.',
                  'description' => 'I.3. Graduating students conduct research and/or undergo practicum/OJT or other activities prescribed in their respective curricula.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '15',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 354,
                  'parameter_item' => 'I.4. The College/Academic Unit assists the graduating students with academic deficiencies, disciplinary cases and other problems which hider issuance of their clearances.',
                  'description' => 'I.4. The College/Academic Unit assists the graduating students with academic deficiencies, disciplinary cases and other problems which hider issuance of their clearances.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '15',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 355,
                  'parameter_item' => 'I.5. Clearance from academic and financial accountabilities and responsibilities is required before graduation.',
                  'description' => 'I.5. Clearance from academic and financial accountabilities and responsibilities is required before graduation.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '15',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 356,
                  'parameter_item' => 'O.1. At least 60% of the students enrolled in the program are able to graduate within the regular time frame.',
                  'description' => 'O.1. At least 60% of the students enrolled in the program are able to graduate within the regular time frame.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '15',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter f
              [
                  'id' => 357,
                  'parameter_item' => 'S.1. The institution has policies on:',
                  'description' => 'S.1. The institution has policies on:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 358,
                  'parameter_item' => 'S.1.1. substitution or special arrangements whenever a faculty is on leave or absent',
                  'description' => 'S.1.1. substitution or special arrangements whenever a faculty is on leave or absent',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '357',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 359,
                  'parameter_item' => 'S.1.2. giving awards and/or recognition for faculty and students with outstanding achievements and',
                  'description' => 'S.1.2. giving awards and/or recognition for faculty and students with outstanding achievements and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '357',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 360,
                  'parameter_item' => 'S.1.3. supervision monitoring and evaluation of faculty performance.',
                  'description' => 'S.1.3. supervision monitoring and evaluation of faculty performance.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '357',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 361,
                  'parameter_item' => 'I.1. The institution implements rules on the attendance of the faculty in their respective classes',
                  'description' => 'I.1. The institution implements rules on the attendance of the faculty in their respective classes',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 362,
                  'parameter_item' => 'I.2. Dialogues are regularly conducted between the administration and the:',
                  'description' => 'I.2. Dialogues are regularly conducted between the administration and the:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 363,
                  'parameter_item' => 'I.2.1. faculty and',
                  'description' => 'I.2.1. faculty and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '362',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 364,
                  'parameter_item' => 'I.2.2. students',
                  'description' => 'I.2.2. students',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '362',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 365,
                  'parameter_item' => 'I.3. Quality instruction is assured through the following strategies:',
                  'description' => 'I.3. Quality instruction is assured through the following strategies:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 366,
                  'parameter_item' => 'I.3.1. conducting seminars/workshops on syllabi making',
                  'description' => 'I.3.1. conducting seminars/workshops on syllabi making',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 367,
                  'parameter_item' => 'I.3.2. holding workshops on test construction and the corresponding table of specifications.',
                  'description' => 'I.3.2. holding workshops on test construction and the corresponding table of specifications.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 368,
                  'parameter_item' => 'I.3.3. conducting competency assessment',
                  'description' => 'I.3.3. conducting competency assessment',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 368,
                  'parameter_item' => 'I.3.4 Conducting supervisory visit of classes and providing assistance, if necessary',
                  'description' => 'I.3.4 Conducting supervisory visit of classes and providing assistance, if necessary',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 370,
                  'parameter_item' => 'I.3.5 holding a regular faculty meeting',
                  'description' => 'I.3.5 holding a regular faculty meeting',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 371,
                  'parameter_item' => 'I.3.6 requiring consultations between students and faculty',
                  'description' => 'I.3.6 requiring consultations between students and faculty',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 372,
                  'parameter_item' => 'I.3.7 conducting studies on academic performance of students',
                  'description' => 'I.3.7 conducting studies on academic performance of students',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 373,
                  'parameter_item' => 'I.3.8 providing opportunities for the participation of the faculty in in-service training activities',
                  'description' => 'I.3.8 providing opportunities for the participation of the faculty in in-service training activities',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '365',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 374,
                  'parameter_item' => 'I.4. Periodic faculty performance evaluation in teaching and in other fucntions is done by at least three of the following:',
                  'description' => 'I.4. Periodic faculty performance evaluation in teaching and in other fucntions is done by at least three of the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 375,
                'parameter_item' => 'I.4.1 the Dean/Academic Head/Department Chair',
                'description' => 'I.4.1 the Dean/Academic Head/Department Chair',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '374',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 376,
                'parameter_item' => 'I.4.2 the students',
                'description' => 'I.4.2 the students',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '374',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 377,
                'parameter_item' => 'I.4.3 the faculty members himself/herself',
                'description' => 'I.4.3 the faculty members himself/herself',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '374',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 378,
                'parameter_item' => 'I.4.4 the peers and',
                'description' => 'I.4.4 the peers and',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '374',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 379,
                'parameter_item' => 'I.4.5 other (please specify)',
                'description' => 'I.4.4 other (please specify)',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '374',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 380,
                'parameter_item' => 'I.5 The result of the performance evaluation are used to improve the performance/competencies of the faculty',
                'description' => 'I.5 The result of the performance evaluation are used to improve the performance/competencies of the faculty',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 381,
                'parameter_item' => 'I.6 Students are given recognition for exemplary academic and non-academic performances',
                'description' => 'I.6 Students are given recognition for exemplary academic and non-academic performances',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 382,
                'parameter_item' => 'I.7 Outstanding achievement of students is recognized and encouraged through',
                'description' => 'I.7 Outstanding achievement of students is recognized and encouraged through',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 383,
                'parameter_item' => 'I.7.1 inclusion in the honor roll, Dean\'s list, etc',
                'description' => 'I.7.1 inclusion in the honor roll, Dean\'s list, etc',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '382',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 384,
                'parameter_item' => 'I.7.2 grant of tuition scholarship',
                'description' => 'I.7.2 grant of tuition scholarship',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '382',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 385,
                'parameter_item' => 'I.7.3 award of honor medals and merit certificates',
                'description' => 'I.7.3 award of honor medals and merit certificates',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '382',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 386,
                'parameter_item' => 'I.7.4 Membership in honor societies/honor class/sections, etc',
                'description' => 'I.7.4 Membership in honor societies/honor class/sections, etc',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '382',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 387,
                'parameter_item' => 'I.7.5. grant of special privileges such as opportunities for leadership and others (excluding exception form major exams on all professional business subjects)',
                'description' => 'I.7.5. grant of special privileges such as opportunities for leadership and others (excluding exception form major exams on all professional business subjects)',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '382',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 388,
                'parameter_item' => 'I.7.6 grant awards and recognition for outstanding academic accomplishments, e.g., Best Thesis, Student Researcher of the Year, etc',
                'description' => 'I.7.6 grant awards and recognition for outstanding academic accomplishments, e.g., Best Thesis, Student Researcher of the Year, etc',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2',
                'accreditation_template_id' => '3',
                'template_parameter_id' => '16',
                'parent_parameter_item_id' => '382',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 389,
                  'parameter_item' => 'I.8 Indicators on performance of graduates are studied such as.',
                  'description' => 'I.8 Indicators on performance of graduates are studied such as',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 390,
                  'parameter_item' => 'I.8.1 analysis of performance of the graduates in the CPA Licensure Examiniation',
                  'description' => 'I.8.1 analysis of performance of the graduates in the CPA Licensure Examiniation',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '389',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 391,
                  'parameter_item' => 'I.8.2 employability of graduates',
                  'description' => 'I.8.2 employability of graduates',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '389',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 392,
                  'parameter_item' => 'I.8.3 feedback from employers regarding performance of grauates',
                  'description' => 'I.8.3 feedback from employers regarding performance of grauates',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '389',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 393,
                  'parameter_item' => 'O.1 Faculty and Students have commendable performance as a result of administrative support',
                  'description' => 'O.1 Faculty and Students have commendable performance as a result of administrative support',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 394,
                  'parameter_item' => 'O.2 The graduates of the program are employable',
                  'description' => 'O.2 The graduates of the program are employable',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '3',
                  'template_parameter_id' => '16',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 205 AND id <= 394');
        }
}
