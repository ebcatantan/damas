<?php namespace App\Database\Migrations;

class AddIndicatorsBsaAreaFive extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [ [
                  'id' => 872,
                  'parameter_item' => 'S.1. The institution has an organizational structure approved by the Board of Regents/Trustees (BOR/BOT)',
                  'description' => 'S.1. The institution has an organizational structure approved by the Board of Regents/Trustees (BOR/BOT)',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 873,
                  'parameter_item' => 'S.2. Every office/unit in the organizational structure has functions approved by the BOT/BOT',
                  'description' => 'S.2. Every office/unit in the organizational structure has functions approved by the BOT/BOT',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 874,
                  'parameter_item' => 'I.1. The institution is subdivided into administrative units in accordance with the organizational structure',
                  'description' => 'I.1. The institution is subdivided into administrative units in accordance with the organizational structure',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 875,
                  'parameter_item' => 'I.2. The functions, duties and responsibilities of administrative staff in each unit/office are carried out.',
                  'description' => 'I.2. The functions, duties and responsibilities of administrative staff in each unit/office are carried out.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 876,
                  'parameter_item' => 'I.3. The Board of Regents/Trustees I supportive with the growth and development of the Institution.',
                  'description' => 'I.3. The Board of Regents/Trustees I supportive with the growth and development of the Institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 878,
                  'parameter_item' => 'I.4. The Academic and Administrative Councils exercise their powers and perform functions.',
                  'description' => 'I.4. The Academic and Administrative Councils exercise their powers and perform functions.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 879,
                  'parameter_item' => 'I.5. The flow of communication among and within units/departments is observed.',
                  'description' => 'I.5. The flow of communication among and within units/departments is observed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 880,
                  'parameter_item' => 'O.1. The functions has a well-designed and functional organizational structure.',
                  'description' => 'O.1. The functions has a well-designed and functional organizational structure.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 881,
                  'parameter_item' => 'S.1. The Dean/Academic Unit Head possesses the required educational qualification, experience and other prescribed requirments needed to administer the College/Academic Unit, as follows:',
                  'description' => 'S.1. The Dean/Academic Unit Head possesses the required educational qualification, experience and other prescribed requirments needed to administer the College/Academic Unit, as follows:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 882,
                  'parameter_item' => 'S.1.1. regitered Professional Accountant in the Philippines woth current PRC Identification Card;',
                  'description' => 'S.1.1. regitered Professional Accountant in the Philippines woth current PRC Identification Card;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '9',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 883,
                  'parameter_item' => 'S.1.2. teaching experience of at least five (5) years in the tertiary level, and preferably, two (2) years of administrative experience; and',
                  'description' => 'S.1.2. teaching experience of at least five (5) years in the tertiary level, and preferably, two (2) years of administrative experience; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '9',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 884,
                  'parameter_item' => 'S.1.3. masters degree in business, accountancy, business education, educational management, or other related area of studies.',
                  'description' => 'S.1.3. masters degree in business, accountancy, business education, educational management, or other related area of studies.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '9',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 885,
                  'parameter_item' => 'S.2. The Dean/Department Chair is full-time administrator.',
                  'description' => 'S.2. The Dean/Department Chair is full-time administrator.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 886,
                  'parameter_item' => 'I.1. The Dean is assisted by Department Chair/s or their equivalent with appropriate/relevant educational experience.',
                  'description' => 'I.1. The Dean is assisted by Department Chair/s or their equivalent with appropriate/relevant educational experience.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 887,
                  'parameter_item' => 'I.2. The Dean implements a supervisory program.',
                  'description' => 'I.2. The Dean implements a supervisory program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 888,
                  'parameter_item' => 'I.3. The Dean participates in the recruitment and promotion of faculty and staff.',
                  'description' => 'I.3. The Dean participates in the recruitment and promotion of faculty and staff.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 889,
                  'parameter_item' => 'I.4. The Dean, the faculty and the aministration work together for the improvement of the College/Academic Unit particularly in:',
                  'description' => 'I.4. The Dean, the faculty and the aministration work together for the improvement of the College/Academic Unit particularly in:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 890,
                  'parameter_item' => 'I.4.1. setting standards and targets;',
                  'description' => 'I.4.1. setting standards and targets;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '17',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 891,
                  'parameter_item' => 'I.4.2. planning of prgrams and other related activities;',
                  'description' => 'I.4.2. planning of prgrams and other related activities;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '17',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 892,
                  'parameter_item' => 'I.4.3. implementing, monitoring and evaluation of plans, programs and other related activities;',
                  'description' => 'I.4.3. implementing, monitoring and evaluation of plans, programs and other related activities;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '17',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 893,
                  'parameter_item' => 'I.4.4. establishing linkages, partnerships and networking activities;',
                  'description' => 'I.4.4. establishing linkages, partnerships and networking activities;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '17',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 894,
                  'parameter_item' => 'I.4.5. providing opportnities for professional growth and development for the faculty and staff;',
                  'description' => 'I.4.5. providing opportnities for professional growth and development for the faculty and staff;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '17',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 895,
                  'parameter_item' => 'I.4.6. preparing policies and guidelines on the internal administration and operation of the College/Acdemic Unit/ and;',
                  'description' => 'I.4.6. preparing policies and guidelines on the internal administration and operation of the College/Acdemic Unit/ and;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '17',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 896,
                  'parameter_item' => 'I.4.7. preparing guidelines on the proper use and maintenance of facilities, equipment, supplis and materials, etc.',
                  'description' => 'I.4.7. preparing guidelines on the proper use and maintenance of facilities, equipment, supplis and materials, etc.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '17',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 897,
                  'parameter_item' => 'I.5. Definite criteria and procedures in the selection and promotion of the most qualified faculty and staff are observed',
                  'description' => 'I.5. Definite criteria and procedures in the selection and promotion of the most qualified faculty and staff are observed',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 898,
                  'parameter_item' => 'I.6. The Dean, faculty, staff and students pursue collaborative activities in generating resources and income and in implementing cost-effective measures.',
                  'description' => 'I.6. The Dean, faculty, staff and students pursue collaborative activities in generating resources and income and in implementing cost-effective measures.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 899,
                  'parameter_item' => 'I.7. The Dean implements policies and procedures on internal administration and operations of the College/Academic Unit.',
                  'description' => 'I.7. The Dean implements policies and procedures on internal administration and operations of the College/Academic Unit.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 901,
                  'parameter_item' => 'O.1. The College/Academic Unit is efficiently and effectively managed.',
                  'description' => 'O.1. The College/Academic Unit is efficiently and effectively managed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 902,
                  'parameter_item' => 'S.1. The institution has an approved and printed Student Handbook/Manula containing policies and guidelines on the following aspects of student life:',
                  'description' => 'S.1. The institution has an approved and printed Student Handbook/Manula containing policies and guidelines on the following aspects of student life:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 903,
                  'parameter_item' => 'S.1.1. admission and retention policies',
                  'description' => 'S.1.1. admission and retention policies',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 904,
                  'parameter_item' => 'S.1.2. regirstration requirments;',
                  'description' => 'S.1.2. regirstration requirments;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 905,
                  'parameter_item' => 'S.1.3. school fees;',
                  'description' => 'S.1.3. school fees;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 906,
                  'parameter_item' => 'S.1.4. academic load;',
                  'description' => 'S.1.4. academic load;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 907,
                  'parameter_item' => 'S.1.5. tranfers;',
                  'description' => 'S.1.5. tranfers;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 908,
                  'parameter_item' => 'S.1.6. residence, course work, scholastic and graduation requirments;',
                  'description' => 'S.1.6. residence, course work, scholastic and graduation requirments;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 909,
                  'parameter_item' => 'S.1.7. examination and grading system;',
                  'description' => 'S.1.7. examination and grading system;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 910,
                  'parameter_item' => 'S.1.8. scholarship/grants/assistanships;',
                  'description' => 'S.1.8. scholarship/grants/assistanships;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 911,
                  'parameter_item' => 'S.1.9. shifting and adding/dropping of course/s/subjects/s;',
                  'description' => 'S.1.9. shifting and adding/dropping of course/s/subjects/s;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 912,
                  'parameter_item' => 'S.1.10. code of conduct and discipline; and',
                  'description' => 'S.1.10. code of conduct and discipline; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 913,
                  'parameter_item' => 'S.1.11. others (please specify) ____________________________________________________________.',
                  'description' => 'S.1.11. others (please specify) ____________________________________________________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '29',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 914,
                  'parameter_item' => 'I.1. Students are provided opportunities to participate in the planning and implementation of activities concernig their welfare.',
                  'description' => 'I.1. Students are provided opportunities to participate in the planning and implementation of activities concernig their welfare.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],


              [
                  'id' => 915,
                  'parameter_item' => 'I.2. Concerned officials, faculty and staff act promptly on requests and problems of the students.',
                  'description' => 'I.2. Concerned officials, faculty and staff act promptly on requests and problems of the students.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 916,
                  'parameter_item' => 'I.3. The administration, faculty, staff and studetsn work harmoniously and maintain good relationship.',
                  'description' => 'I.3. The administration, faculty, staff and studetsn work harmoniously and maintain good relationship',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 917,
                  'parameter_item' => 'O.1. The Institution has an effective and functional student administration.',
                  'description' => 'O.1. The Institution has an effective and functional student administration.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 918,
                  'parameter_item' => 'O.2. Policy implementation is efficient.',
                  'description' => 'O.2. Policy implementation is efficient.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 919,
                  'parameter_item' => 'S.1. The Institution has an approved Financial Development Plan(FDP).',
                  'description' => 'S.1. The Institution has an approved Financial Development Plan(FDP).',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 920,
                  'parameter_item' => 'S.2. The approved budget is in consonance with the FDP.',
                  'description' => 'S.2. The approved budget is in consonance with the FDP.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],


              [
                  'id' => 921,
                  'parameter_item' => 'S.3. The Institution has specific budgetary allotment for the following:',
                  'description' => 'S.3. The Institution has specific budgetary allotment for the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 922,
                  'parameter_item' => 'S.3.1. personnel services;',
                  'description' => 'S.3.1. personnel services;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '48',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 923,
                  'parameter_item' => 'S.3.2. Maintenance and Other Operating Expenses (MOOE);',
                  'description' => 'S.3.2. Maintenance and Other Operating Expenses (MOOE);',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '48',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 924,
                  'parameter_item' => 'S.3.3. capital outlay; and',
                  'description' => 'S.3.3. capital outlay; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '48',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 925,
                  'parameter_item' => 'S.3.4. special projects.',
                  'description' => 'S.3.4. special projects.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '48',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 926,
                  'parameter_item' => 'I.1. The Institution maintain a Financial Management Office managed by qualified and competent staff',
                  'description' => 'I.1. The Institution maintain a Financial Management Office managed by qualified and competent staff',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 927,
                  'parameter_item' => 'I.2 . The financial management staff are responsible for the efficient management of financial resources/funds of the Institution.',
                  'description' => 'I.2 . The financial management staff are responsible for the efficient management of financial resources/funds of the Institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 928,
                  'parameter_item' => 'I.3. The administration officials, faculty, staff and student representatives praticipate in the budget preperation and in the procurement program of the Institution.',
                  'description' => 'I.3. The administration officials, faculty, staff and student representatives praticipate in the budget preperation and in the procurement program of the Institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 929,
                  'parameter_item' => 'I.4. The budget of the Institution is fairly and objectively allocated.',
                  'description' => 'I.4. The budget of the Institution is fairly and objectively allocated.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 930,
                  'parameter_item' => 'I.5. The Institution allocates funds for the follwing services and activities:',
                  'description' => 'I.5. The Institution allocates funds for the follwing services and activities:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 931,
                  'parameter_item' => 'I.5.1. cultural development;',
                  'description' => 'I.5.1. cultural development;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 932,
                  'parameter_item' => 'I.5.2. athletic and sports development;',
                  'description' => 'I.5.2. athletic and sports development;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 933,
                  'parameter_item' => 'I.5.3. medical and dental services;',
                  'description' => 'I.5.3. medical and dental services;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 934,
                  'parameter_item' => 'I.5.4. library;',
                  'description' => 'I.5.4. library;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 935,
                  'parameter_item' => 'I.5.5. student body organization;',
                  'description' => 'I.5.5. student body organization;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],


              [
                  'id' => 936,
                  'parameter_item' => 'I.5.6. guidance and counseling;',
                  'description' => 'I.5.6. guidance and counseling;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 937,
                  'parameter_item' => 'I.5.7. improvement of laboratories/shops;',
                  'description' => 'I.5.7. improvement of laboratories/shops;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 938,
                  'parameter_item' => 'I.5.8. repair and maintenance of facilities and equipment;',
                  'description' => 'I.5.8. repair and maintenance of facilities and equipment;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 939,
                  'parameter_item' => 'I.5.9. purchase of new equipment, supplies and materials;',
                  'description' => 'I.5.9. purchase of new equipment, supplies and materials;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 940,
                  'parameter_item' => 'I.5.10. replacement of old and unservicable equipment;',
                  'description' => 'I.5.10. replacement of old and unservicable equipment;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 941,
                  'parameter_item' => 'I.5.11. construction of new facilities;',
                  'description' => 'I.5.11. construction of new facilities;',
                'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 942,
                  'parameter_item' => 'I.5.12. improvement/expasion of physical plant;',
                  'description' => 'I.5.12. improvement/expasion of physical plant;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 943,
                  'parameter_item' => 'I.5.13. extension and community services;',
                  'description' => 'I.5.13. extension and community services;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 944,
                  'parameter_item' => 'I.5.14. disaster and risk reduction; and',
                  'description' => 'I.5.14. disaster and risk reduction; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 945,
                  'parameter_item' => 'I.5.15. auxillary services.',
                  'description' => 'I.5.15. auxillary services.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '57',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 946,
                  'parameter_item' => 'I.6. The budget for specific ependitures indicates in item I.5 is allotted in consonance with existing policies and guidelines.',
                  'description' => 'I.6. The budget for specific ependitures indicates in item I.5 is allotted in consonance with existing policies and guidelines.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 947,
                  'parameter_item' => 'O.1. The Institution has a sound and effective financial management system.',
                  'description' => 'O.1. The Institution has a sound and effective financial management system.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 872 AND id <= 947');
        }
}
