<?php namespace App\Database\Migrations;

class AddIndicatorsBsaAreaSeven extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 593,
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
                  'id' => 594,
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
                  'id' => 595,
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
                  'id' => 596,
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
                  'id' => 597,
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
                  'id' => 598,
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
                  'id' => 599,
                  'parameter_item' => 'I.2.1. a full-time professional licensed librarian; and',
                  'description' => 'I.2.1. a full-time professional licensed librarian; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '598',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 560,
                  'parameter_item' => 'I.2.2. at least a master’s degree holder in MD Library and Information Service or MAEd/MA in Library Service',
                  'description' => 'I.2.2. at least a master’s degree holder in MD Library and Information Service or MAEd/MA in Library Service',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '28',
                  'parent_parameter_item_id' => '598',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 561,
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
                  'id' => 562,
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
                  'id' => 563,
                  'parameter_item' => 'I.5. The annual accomplishments and other reports of the library are promptly submitted to the higher offices recommended.',
                  'description' => 'I.5. The annual accomplishments and other reports of the library are promptly submitted to the higher offices recommended.',
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
                  'id' => 564,
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
                  'id' => 565,
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
                  'id' => 566,
                  'parameter_item' => 'O.2. iiThe library organizational structure is well-designed and effectively implemented.',
                  'description' => 'O.2. iiThe library organizational structure is well-designed and effectively implemented.',
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
                  'id' => 567,
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
                  'id' => 568,
                  'parameter_item' => 'S.1.1. BS in Library and Information Science for the College/Academic Unit Library, and',
                  'description' => 'S.1.1. BS in Library and Information Science for the College/Academic Unit Library, and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '567',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 569,
                  'parameter_item' => 'S.1.2. MS in Library and Information Science or MAED/MA in Library Science for the Institution.',
                  'description' => 'S.1.2. MS in Library and Information Science or MAED/MA in Library Science for the Institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '567',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 570,
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
                  'id' => 571,
                  'parameter_item' => 'S.2.1. one (1) Licensed Librarian with two (2) full-time staff for the first 500 student population; and. ',
                  'description' => 'S.2.1. one (1) Licensed Librarian with two (2) full-time staff for the first 500 student population; and.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '570',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 572,
                  'parameter_item' => 'S.2.2. one (1) additional full-time Professional Librarian with one (1) full time staff for every additional 1,000 students.',
                  'description' => 'S.2.2. one (1) additional full-time Professional Librarian with one (1) full time staff for every additional 1,000 students.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '29',
                  'parent_parameter_item_id' => '570',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 573,
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
                  'id' => 574,
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
                  'id' => 575,
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

              [
                  'id' => 576,
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
                  'id' => 577,
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
                  'id' => 578,
                  'parameter_item' => 'S.2.1. 5,000 titles for the Academic Unit Library; or',
                  'description' => 'SS.2.1. 5,000 titles for the Academic Unit Library; or',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '577',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 579,
                  'parameter_item' => 'S.2.2. 10,000 titles that support the instruction, research and other programs for an Institution Library.',
                  'description' => 'S.2.2. 10,000 titles that support the instruction, research and other programs for an Institution Library.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '577',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 580,
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
                  'id' => 581,
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
                  'id' => 582,
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
                  'id' => 583,
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
                  'id' => 584,
                  'parameter_item' => 'I.1. The following services/programs are provided:',
                  'description' => 'I.1. The following services/programs are provided:',
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
                  'id' => 585,
                  'parameter_item' => 'I.1.1. Functional and interactive library web page;',
                  'description' => 'I.1.1. Functional and interactive library web page;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 586,
                  'parameter_item' => 'I.1.2. Integrated livrary system;',
                  'description' => 'I.1.2. Integrated livrary system;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 587,
                  'parameter_item' => 'I.1.3. On-line Public Access (OPAC);',
                  'description' => 'I.1.3. On-line Public Access (OPAC);',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 588,
                  'parameter_item' => 'I.1.4. Circulation on-line;',
                  'description' => 'I.1.4. Circulation on-line;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 589,
                  'parameter_item' => 'I.1.5. Computerized cataloging;',
                  'description' => 'I.1.5. Computerized cataloging;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 590,
                  'parameter_item' => 'I.1.6. Inventory reporting;',
                  'description' => 'I.1.6. Inventory reporting;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 591,
                  'parameter_item' => 'I.1.7. Serials control;',
                  'description' => 'I.1.7. Serials control;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 592,
                  'parameter_item' => 'I.1.8. Internet searching;',
                  'description' => 'I.1.8. Internet searching;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '32',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 593,
                  'parameter_item' => 'I.1.9. CD-ROM;',
                  'description' => 'I.1.9. CD-ROM;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 594,
                  'parameter_item' => 'I.1.10. On-line database;',
                  'description' => 'I.1.10. On-line database;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 595,
                  'parameter_item' => 'I.1.11. Photocopying; and',
                  'description' => 'I.1.11. Photocopying; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 596,
                  'parameter_item' => 'I.1.12. Bar coding;',
                  'description' => 'I.1.12. Bar coding;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '584',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 597,
                  'parameter_item' => 'I.2. The library opens at least 54 hours per week for the College/Academic Unit or 60 hours per week for the Institution',
                  'description' => 'I.2. The library opens at least 54 hours per week for the College/Academic Unit or 60 hours per week for the Institution',
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
                  'id' => 598,
                  'parameter_item' => 'I.3. The library promotes and disseminates its program through a regular announcement of its new acquisitions of print materials (books, journals, magazines), resources, facilities, and services.',
                  'description' => 'I.3. The library promotes and disseminates its program through a regular announcement of its new acquisitions of print materials (books, journals, magazines), resources, facilities, and services.',
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
                  'id' => 599,
                  'parameter_item' => 'I.4. Librarians and staff are available during library hours to assist and provide library access.',
                  'description' => 'I.4. Librarians and staff are available during library hours to assist and provide library access.',
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
                  'id' => 600,
                  'parameter_item' => 'I.5. Statistical data on the utilization of various resources and services are compiled.',
                  'description' => 'I.5. Statistical data on the utilization of various resources and services are compiled.',
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
                  'id' => 601,
                  'parameter_item' => 'O.1. The library services are efficiently and effectively provided.',
                  'description' => 'O.1. The library services are efficiently and effectively provided.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 602,
                  'parameter_item' => 'O.2. The library users are satisfied with library services.',
                  'description' => 'O.2. The library users are satisfied with library services.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '30',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 603,
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
                  'id' => 604,
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
                  'id' => 605,
                  'parameter_item' => 'I.1.1 functional and interactive library web pages',
                  'description' => 'I.1.1 functional and interactive library web pages',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 606,
                  'parameter_item' => 'I.1.2 integrated library system',
                  'description' => 'I.1.2 integrated library system',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 607,
                  'parameter_item' => 'I.1.3 on-line public access (OPAC)',
                  'description' => 'I.1.3 on-line public access (OPAC)',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 608,
                  'parameter_item' => 'I.1.4 circulation on-line',
                  'description' => 'I.1.4 circulation on-line',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 609,
                  'parameter_item' => 'I.1.5 computerize cataloging',
                  'description' => 'I.1.5 computerize cataloging',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 610,
                  'parameter_item' => 'I.1.6 inventory reporting',
                  'description' => 'I.1.6 inventory reporting',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 611,
                  'parameter_item' => 'I.1.7 serial control',
                  'description' => 'I.1.7 serial control',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 612,
                  'parameter_item' => 'I.1.8 internet searching',
                  'description' => 'I.1.8 internet searching',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 613,
                  'parameter_item' => 'I.1.9 CD-ROM',
                  'description' => 'I.1.9 CD-ROM',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 614,
                  'parameter_item' => 'I.1.10 on-line database',
                  'description' => 'I.1.10 on-line database',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 615,
                  'parameter_item' => 'I.1.11 photocopying',
                  'description' => 'I.1.11 photocopying',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 616,
                  'parameter_item' => 'I.1.12 bar coding',
                  'description' => 'I.1.12 bar coding',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '31',
                  'parent_parameter_item_id' => '604',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 617,
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
                  'id' => 618,
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
                  'id' => 619,
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
                  'id' => 620,
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
                  'id' => 621,
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
                  'id' => 622,
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
              [
                  'id' => 623,
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
                  'id' => 624,
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
                  'id' => 625,
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
                  'id' => 626,
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
                  'id' => 627,
                  'parameter_item' => 'S.5. Space is provided for the librarian’s office, staff room, technical room, etc. ',
                  'description' => 'S.5. Space is provided for the librarian’s office, staff room, technical room, etc. ',
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
                  'id' => 628,
                  'parameter_item' => 'S.6. Ramps for the physically disabled are provided. ',
                  'description' => 'S.6. Ramps for the physically disabled are provided.',
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
                  'id' => 629,
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
                  'id' => 630,
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
                  'id' => 631,
                  'parameter_item' => 'S.9.1. Adjustable/movable shelves;',
                  'description' => 'S.9.1. Adjustable/movable shelves;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 632,
                  'parameter_item' => 'S.9.2. Magazine display shelves;',
                  'description' => 'S.9.2. Magazine display shelves;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 633,
                  'parameter_item' => 'S.9.3. Newspaper racks;',
                  'description' => 'S.9.3. Newspaper racks;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 634,
                  'parameter_item' => 'S.9.4. Standard tables and chairs;',
                  'description' => 'S.9.4. Standard tables and chairs;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 635,
                  'parameter_item' => 'S.9.5. Carrels for individual study;',
                  'description' => 'S.9.5. Carrels for individual study;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 636,
                  'parameter_item' => 'S.9.6. Desks and chairs for staff;',
                  'description' => 'S.9.6. Desks and chairs for staff;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 637,
                  'parameter_item' => 'S.9.7. Charging desk;',
                  'description' => 'S.9.7. Charging desk;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 638,
                  'parameter_item' => 'S.9.8. Dictionary stand;',
                  'description' => 'S.9.8. Dictionary stand;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 639,
                  'parameter_item' => 'S.9.9. Atlas stand; ',
                  'description' => 'S.9.9. Atlas stand;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 640,
                  'parameter_item' => 'S.9.10. Bulletin boards and display cabinets;',
                  'description' => 'S.9.10. Bulletin boards and display cabinets;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 641,
                  'parameter_item' => 'S.9.11. Vertical file cabinets;',
                  'description' => 'S.9.11. Vertical file cabinets;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 642,
                  'parameter_item' => 'S.9.12. Book racks;',
                  'description' => 'S.9.12. Book racks;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 643,
                  'parameter_item' => 'S.9.13. Map stands/cabinets;',
                  'description' => 'S.9.13. Map stands/cabinets;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 644,
                  'parameter_item' => 'S.9.14. Cardex/rotadex or any filling equipment for periodical records;',
                  'description' => 'S.9.14. Cardex/rotadex or any filling equipment for periodical records;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 645,
                  'parameter_item' => 'S.9.15. Typewriters;',
                  'description' => 'S.9.15. Typewriters;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 646,
                  'parameter_item' => 'S.9.16. Computers with printers; and',
                  'description' => 'S.9.16. Computers with printers; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 647,
                  'parameter_item' => 'S.9.17. Others (please specify) _________________________.',
                  'description' => 'S.9.17. Others (please specify) _________________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '7',
                  'template_parameter_id' => '32',
                  'parent_parameter_item_id' => '630',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 648,
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
                  'id' => 649,
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
                  'id' => 650,
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
                  'id' => 651,
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
                  'id' => 652,
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
                  'id' => 653,
                  'parameter_item' => 'I. 1. IT software and multi-media equipment are utilized.',
                  'description' => 'I. 1. IT software and multi-media equipment are utilized.',
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
                  'id' => 654,
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
                  'id' => 655,
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

              [
                  'id' => 656,
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
                  'id' => 657,
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
                  'id' => 658,
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
                  'id' => 659,
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
                  'id' => 660,
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

              [
                  'id' => 661,
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
                  'id' => 662,
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
                  'id' => 663,
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
                  'id' => 664,
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 593 AND id <= 664');
        }
}
