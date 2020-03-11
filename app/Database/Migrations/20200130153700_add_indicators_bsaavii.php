<?php namespace App\Database\Migrations;

class AddIndicatorsBsaavii extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 800,
                  'parameter_item' => 'S.1 The organizational structure of the library is well-defined.',
                  'description' => 'S.1 The organizational structure of the library is well-defined.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 801,
                  'parameter_item' => 'S.2 The development of the library goals and objectives is the responsibility of the library head and staff with the approval of the Head of the Institution.',
                  'description' => 'S.2 The development of the library goals and objectives is the responsibility of the library head and staff with the approval of the Head of the Institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 802,
                  'parameter_item' => 'S.3 There is a Library Board/Committee which sets library policies, rules and procedures and periodically reviews them',
                  'description' => 'S.3 There is a Library Board/Committee which sets library policies, rules and procedures and periodically reviews them',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 803,
                  'parameter_item' => 'S.4 There is a duly approved and widely disseminated Library Manual or written policies and procedures covering the library’s internal administration and operation.',
                  'description' => 'S.4 There is a duly approved and widely disseminated Library Manual or written policies and procedures covering the library’s internal administration and operation.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 804,
                  'parameter_item' => 'I.1 The library develops an explicit statement of its goals and objectives in conformity with the mandate of the institution',
                  'description' => 'I.1 The library develops an explicit statement of its goals and objectives in conformity with the mandate of the institution',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 805,
                  'parameter_item' => 'I.2. The library is administered and supervised by:',
                  'description' => 'I.2. The library is administered and supervised by:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 806,
                  'parameter_item' => 'I.2.1. a full-time professional licensed librarian and',
                  'description' => 'I.2.1. a full-time professional licensed librarian and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '805',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 807,
                  'parameter_item' => 'I.2.2. at least a master’s degree holder in MD Library and Information Service or MAEd/MA in Library Service',
                  'description' => 'I.2.2. at least a master’s degree holder in MD Library and Information Service or MAEd/MA in Library Service',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '805',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 808,
                  'parameter_item' => 'I.3. The Head Librarian directs and supervises the total operation of the library and is responsible for the administration of its resources and services.',
                  'description' => 'I.3. The Head Librarian directs and supervises the total operation of the library and is responsible for the administration of its resources and services.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 809,
                  'parameter_item' => 'I.4. The Head Librarian, preferable with an academic rank, actively participates in the academic and administrative activities of the institution.',
                  'description' => 'I.4. The Head Librarian, preferable with an academic rank, actively participates in the academic and administrative activities of the institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 810,
                  'parameter_item' => 'I.5. The annual accomplishments and other reports of the library are promptly submitted to the higher offices concerned.',
                  'description' => 'I.5. The annual accomplishments and other reports of the library are promptly submitted to the higher offices concerned.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 811,
                  'parameter_item' => 'I.6. A Library Development Plan is prepared in conclusion with the institution’s officials and stakeholders.',
                  'description' => 'I.6. A Library Development Plan is prepared in conclusion with the institution’s officials and stakeholders.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 812,
                  'parameter_item' => 'O.1. The goals and objectives of the library are satisfactorily attained.',
                  'description' => 'O.1. The goals and objectives of the library are satisfactorily attained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 813,
                  'parameter_item' => 'O.2.The library organizational structure is well-designed and effectively implemented.',
                  'description' => 'O.2. The library organizational structure is well-designed and effectively implemented.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter b
              [
                  'id' => 814,
                  'parameter_item' => 'S.1. The library has staff with the following qualifications:',
                  'description' => 'S.1. The library has staff with the following qualifications:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 815,
                  'parameter_item' => 'S.1.1. BS in Library and Information Science for the College/Academic Unit Library, and',
                  'description' => 'S.1.1. BS in Library and Information Science for the College/Academic Unit Library, and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '814',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 816,
                  'parameter_item' => 'S.1.2. MS in Library and Information Science or MAED/MA in Library Science for the Institution.',
                  'description' => 'S.1.2. MS in Library and Information Science or MAED/MA in Library Science for the Institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '814',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 817,
                  'parameter_item' => 'S.2. The library meets the required number of qualified and licensed librarians and staff to meet the needs of the school population in ratio of: ',
                  'description' => 'S.2. The library meets the required number of qualified and licensed librarians and staff to meet the needs of the school population in ratio of:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 818,
                  'parameter_item' => 'S.2.1. one (1) Licensed Librarian with two (2) full-time staff for the first 500 student population and. ',
                  'description' => 'S.2.1. one (1) Licensed Librarian with two (2) full-time staff for the first 500 student population and.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '817',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 819,
                  'parameter_item' => 'S.2.2. one (1) additional full-time Professional Librarian with one (1) full time staff for every additional 1,000 students.',
                  'description' => 'S.2.2. one (1) additional full-time Professional Librarian with one (1) full time staff for every additional 1,000 students.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '817',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 820,
                  'parameter_item' => 'S.3. There is a continuing staff development program with the corresponding financial assistance from the institution.',
                  'description' => 'S.3. There is a continuing staff development program with the corresponding financial assistance from the institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 821,
                  'parameter_item' => 'I.1. The library staff compensation, retirement, and fringe benefits, as well as other privileges, are granted in accordcance with existing government laws and institutional policies.',
                  'description' => 'I.1. The library staff compensation, retirement, and fringe benefits, as well as other privileges, are granted in accordcance with existing government laws and institutional policies.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 822,
                  'parameter_item' => 'O.1. The librarians are qualified.',
                  'description' => 'O.1. The librarians are qualified.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter c
              [
                  'id' => 823,
                  'parameter_item' => 'S.1. There is a written Collection Development Policy',
                  'description' => 'S.1. There is a written Collection Development Policy',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 824,
                  'parameter_item' => 'S.2. There is a core collection at least:',
                  'description' => 'S.2. There is a core collection at least:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 825,
                  'parameter_item' => 'S.2.1. 5,000 titles for the Academic Unit Library or',
                  'description' => 'SS.2.1. 5,000 titles for the Academic Unit Library or',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '824',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 826,
                  'parameter_item' => 'S.2.2. 10,000 titles that support the instruction, research and other programs for an Institution Library.',
                  'description' => 'S.2.2. 10,000 titles that support the instruction, research and other programs for an Institution Library.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '824',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 827,
                  'parameter_item' => 'S.3. Twenty percent (20%) of the library holdings are of current edition, i.e., with copyright written within the last 5 years.',
                  'description' => 'S.3. Twenty percent (20%) of the library holdings are of current edition, i.e., with copyright written within the last 5 years.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 828,
                  'parameter_item' => 'S.4. The Non-print, digital and electronic resources are available.',
                  'description' => 'S.4. The Non-print, digital and electronic resources are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 829,
                  'parameter_item' => 'S.5. There is an integrated library system.',
                  'description' => 'S.5. There is an integrated library system.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 830,
                  'parameter_item' => 'S.6. There are provisions for the preservation, general care, and upkeep of library resources.',
                  'description' => 'S.6. There are provisions for the preservation, general care, and upkeep of library resources.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 831,
                  'parameter_item' => 'I.1. The Collection development Policy is regularly reviewed and evaluated by the library committee',
                  'description' => 'I.1. The Collection development Policy is regularly reviewed and evaluated by the library committee',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 832,
                  'parameter_item' => 'I.2 The collection and services support the mission and vision of the institution, goals of the college/academic unit and objective of the program',
                  'description' => 'I.2 The collection and services support the mission and vision of the institution, goals of the college/academic unit and objective of the program',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 833,
                  'parameter_item' => 'I.3 The llibrary provides sufficient reseaerch books and materials to suppliment the clients\' curricular needs',
                  'description' => 'I.3 The llibrary provides sufficient reseaerch books and materials to suppliment the clients\' curricular needs',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 834,
                  'parameter_item' => 'I.4 The library maintains s extensive (15% of the total) Filipiniana collection',
                  'description' => 'I.4 The library maintains s extensive (15% of the total) Filipiniana collection',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 835,
                  'parameter_item' => 'I.5 The library provides 3-5 book/journal titles for professional subects in the major fields of specification',
                  'description' => 'I.5 The library provides 3-5 book/journal titles for professional subects in the major fields of specification',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 836,
                  'parameter_item' => 'I.6 The library collection is organizedd according to an accepted scheme of classification and standard code of cataloging',
                  'description' => 'I.6 The library collection is organizedd according to an accepted scheme of classification and standard code of cataloging',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 837,
                  'parameter_item' => 'I.7 Regular weeding-out program is conducted to maintain a relevant and updated collection',
                  'description' => 'I.7 Regular weeding-out program is conducted to maintain a relevant and updated collection',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 838,
                  'parameter_item' => 'I.8 The quality and quantity of library materials and resources conform with the standards set for a particuar academic program',
                  'description' => 'I.8 The quality and quantity of library materials and resources conform with the standards set for a particuar academic program',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 839,
                  'parameter_item' => 'O.1 The library core collection is adequate, updated and well-ballanced',
                  'description' => 'O.1 The library core collection is adequate, updated and well-ballanced',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 840,
                  'parameter_item' => 'O.2 THe professional books, journals and electronic resources for the program are sufficient',
                  'description' => 'O.2 THe professional books, journals and electronic resources for the program are sufficient',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '624',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              //parameter d
              [
                  'id' => 841,
                  'parameter_item' => 'S.1 The library has information services pertinent to the institution\'s requirements',
                  'description' => 'S.1 The library has information services pertinent to the institution\'s requirements',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 842,
                  'parameter_item' => 'I.1 The following services/programs are provided',
                  'description' => 'I.1 The following services/programs are provided',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 845,
                  'parameter_item' => 'I.1.1 functional and interactive library web pages',
                  'description' => 'I.1.1 functional and interactive library web pages',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 846,
                  'parameter_item' => 'I.1.2 integrated library system',
                  'description' => 'I.1.2 integrated library system',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 847,
                  'parameter_item' => 'I.1.3 on-line public access (OPAC)',
                  'description' => 'I.1.3 on-line public access (OPAC)',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 848,
                  'parameter_item' => 'I.1.4 circulation on-line',
                  'description' => 'I.1.4 circulation on-line',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 849,
                  'parameter_item' => 'I.1.5 computerize cataloging',
                  'description' => 'I.1.5 computerize cataloging',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 850,
                  'parameter_item' => 'I.1.6 inventory reporting',
                  'description' => 'I.1.6 inventory reporting',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 851,
                  'parameter_item' => 'I.1.7 serial control',
                  'description' => 'I.1.7 serial control',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 852,
                  'parameter_item' => 'I.1.8 internet searching',
                  'description' => 'I.1.8 internet searching',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 853,
                  'parameter_item' => 'I.1.9 CD-ROM',
                  'description' => 'I.1.9 CD-ROM',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 854,
                  'parameter_item' => 'I.1.10 on-line database',
                  'description' => 'I.1.10 on-line database',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 855,
                  'parameter_item' => 'I.1.11 photocopying',
                  'description' => 'I.1.11 photocopying',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 856,
                  'parameter_item' => 'I.1.12 bar coding',
                  'description' => 'I.1.12 bar coding',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '842',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 857,
                  'parameter_item' => 'I.2 the library open at least 54 hours per week for the College/Academic Unit or 60 hours per week for the institution.',
                  'description' => 'I.2 the library open at least 54 hours per week for the College/Academic Unit or 60 hours per week for the institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 858,
                  'parameter_item' => 'I.3 The library promotes and disseminates its program through a regular announcement of its new acquisitions of print materials (books, journals, magazines), resurces, facilities, and services',
                  'description' => 'I.3 The library promotes and disseminates its program through a regular announcement of its new acquisitions of print materials (books, journals, magazines), resurces, facilities, and services',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 859,
                  'parameter_item' => 'I.4 Library and staff are available during library hours to assist and provide library services',
                  'description' => 'I.4 Library and staff are available during library hours to assist and provide library services',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 860,
                  'parameter_item' => 'I.5 Statistical data on the utilization of various resources and services are compiled and used to improve the library collection and operation',
                  'description' => 'I.5 Statistical data on the utilization of various resources and services are compiled and used to improve the library collection and operation',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 861,
                  'parameter_item' => 'O.1 The library services are efficiently and effectively provided',
                  'description' => 'O.1 The library services are efficiently and effectively provided',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 862,
                  'parameter_item' => 'O.2 The library users are satisfied with library services',
                  'description' => 'O.2 The library users are satisfied with library services',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter e
              [
                  'id' => 863,
                  'parameter_item' => 'S.1. The library is strategically located and accessible to students, faculty and other clientele',
                  'description' => 'S.1. The library is strategically located and accessible to students, faculty and other clientele',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 864,
                  'parameter_item' => 'S.2. The library is systematically planned to allow future expansion. ',
                  'description' => 'S.2. The library is systematically planned to allow future expansion. ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 865,
                  'parameter_item' => 'S.3. The size of the library meets standard requirements considering the present enrollment and future expansion. ',
                  'description' => 'S.3. The size of the library meets standard requirements considering the present enrollment and future expansion. ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 866,
                  'parameter_item' => 'S.4. The reading room can accommodate at least 10% of the school enrollment at any given time. ',
                  'description' => 'S.4. The reading room can accommodate at least 10% of the school enrollment at any given time. ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 867,
                  'parameter_item' => 'S.5. Space is provided for print resources as well as work stations for electronic resources',
                  'description' => 'S.5. Space is provided for print resources as well as work stations for electronic resources',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 868,
                  'parameter_item' => 'S.6. Space is provided for the librarians\' office, staff room, technical room, etc.',
                  'description' => 'S.6. Space is provided for the librarians\' office, staff room, technical room, etc.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 869,
                  'parameter_item' => 'S.7. Ramps for the physically disabled are provided. ',
                  'description' => 'S.7. Ramps for the physically disabled are provided.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 870,
                  'parameter_item' => 'S.8. The library meets the required and standard-sized furniture and equipment.',
                  'description' => 'S.8. The library meets the required and standard-sized furniture and equipment.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 871,
                  'parameter_item' => 'S.9. The following library furniture and equipment are available.',
                  'description' => 'S.9. The following library furniture and equipment are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 872,
                  'parameter_item' => 'S.9.1. Adjustable/movable shelves',
                  'description' => 'S.9.1. Adjustable/movable shelves',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 873,
                  'parameter_item' => 'S.9.2. Magazine display shelves',
                  'description' => 'S.9.2. Magazine display shelves',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 874,
                  'parameter_item' => 'S.9.3. Newspaper racks',
                  'description' => 'S.9.3. Newspaper racks',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 875,
                  'parameter_item' => 'S.9.4. Standard tables and chairs',
                  'description' => 'S.9.4. Standard tables and chairs',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 876,
                  'parameter_item' => 'S.9.5. Carrels for individual study',
                  'description' => 'S.9.5. Carrels for individual study',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 877,
                  'parameter_item' => 'S.9.6. Desks and chairs for staff',
                  'description' => 'S.9.6. Desks and chairs for staff',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 878,
                  'parameter_item' => 'S.9.7. Charging desk',
                  'description' => 'S.9.7. Charging desk',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 879,
                  'parameter_item' => 'S.9.8. Dictionary stand',
                  'description' => 'S.9.8. Dictionary stand',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 880,
                  'parameter_item' => 'S.9.9. Atlas stand ',
                  'description' => 'S.9.9. Atlas stand',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 881,
                  'parameter_item' => 'S.9.10. Bulletin boards and display cabinets',
                  'description' => 'S.9.10. Bulletin boards and display cabinets',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 882,
                  'parameter_item' => 'S.9.11. Vertical file cabinets',
                  'description' => 'S.9.11. Vertical file cabinets',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 883,
                  'parameter_item' => 'S.9.12. Book racks',
                  'description' => 'S.9.12. Book racks',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 884,
                  'parameter_item' => 'S.9.13. Map stands/cabinets',
                  'description' => 'S.9.13. Map stands/cabinets',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 885,
                  'parameter_item' => 'S.9.14. Cardex/rotadex or any filling equipment for periodical records',
                  'description' => 'S.9.14. Cardex/rotadex or any filling equipment for periodical records',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 886,
                  'parameter_item' => 'S.9.15. Typewriters',
                  'description' => 'S.9.15. Typewriters',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 887,
                  'parameter_item' => 'S.9.16. Computers with printers and',
                  'description' => 'S.9.16. Computers with printers and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 888,
                  'parameter_item' => 'S.9.17. Others (please specify) _________________________.',
                  'description' => 'S.9.17. Others (please specify) _________________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '871',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 889,
                  'parameter_item' => 'S.10. The library is well-lighted.',
                  'description' => 'S.10. The library is well-lighted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 890,
                  'parameter_item' => 'S.11. The library is well-ventilated.',
                  'description' => 'S.11. The library is well-ventilated.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 891,
                  'parameter_item' => 'S.12. The atmosphere is conductive to learning.',
                  'description' => 'S.12. The atmosphere is conductive to learning.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 892,
                  'parameter_item' => 'S.13. Fire extinguishers and a local fire system are available.',
                  'description' => 'S.13. Fire extinguishers and a local fire system are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 893,
                  'parameter_item' => 'S.14. The Library employs a system for security and control of library resources.',
                  'description' => 'S.14. The Library employs a system for security and control of library resources.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 894,
                  'parameter_item' => 'I. 15. IT software and multi-media equipment are utilized.',
                  'description' => 'I. 15. IT software and multi-media equipment are utilized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 895,
                  'parameter_item' => 'O.1. The environment in the library is conductive to learning.',
                  'description' => 'O.1. The environment in the library is conductive to learning.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 896,
                  'parameter_item' => '0.2. The library facilities are well-maintained and aesthetically designed.',
                  'description' => '0.2. The library facilities are well-maintained and aesthetically designed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              //parameter f
              [
                  'id' => 897,
                  'parameter_item' => 'S.1. The institution has a regular and realistic budget for the library.',
                  'description' => 'S.1. The institution has a regular and realistic budget for the library.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '33',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 898,
                  'parameter_item' => 'I.1. The Head Librarian and staff, in coordination with other officials of the institution, prepare and manage the annual library budget.',
                  'description' => 'I.1. The Head Librarian and staff, in coordination with other officials of the institution, prepare and manage the annual library budget.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '33',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 899,
                  'parameter_item' => 'I.2. All fees and funds allocated for library resources and services are utilized solely for such purposes and are properly audited.',
                  'description' => 'I.2. All fees and funds allocated for library resources and services are utilized solely for such purposes and are properly audited.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '33',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 900,
                  'parameter_item' => 'I.3. Other sources of financial assistance are sought.',
                  'description' => 'I.3. Other sources of financial assistance are sought.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '33',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 901,
                  'parameter_item' => 'O.1. The final support from fiduciary, supplemental and external funds is adequate.',
                  'description' => 'O.1. The final support from fiduciary, supplemental and external funds is adequate.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '33',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter g
              [
                  'id' => 902,
                  'parameter_item' => 'S.1. The library is on the mailing list of agencies, foundations, etc., for exchange of publications and other books and journal donations',
                  'description' => 'S.1. The library is on the mailing list of agencies, foundations, etc., for exchange of publications and other books and journal donations',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '34',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 903,
                  'parameter_item' => 'I.1. Linkages with other institutions and funding agencies are explored and established for purposes of enhancing library facilities and resources.',
                  'description' => 'I.1. Linkages with other institutions and funding agencies are explored and established for purposes of enhancing library facilities and resources.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '34',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 904,
                  'parameter_item' => 'I.2. The library establishes consortia, networking and resource sharing with other institutions and library collaborative activities.',
                  'description' => 'I.2. The library establishes consortia, networking and resource sharing with other institutions and library collaborative activities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '34',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 905,
                  'parameter_item' => 'O.1. Library resource sharing and linkages are well-established.',
                  'description' => 'O.1. Library resource sharing and linkages are well-established.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '34',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 800 AND id <= 905');
        }
}
