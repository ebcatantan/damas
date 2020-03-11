<?php namespace App\Database\Migrations;

class AddIndicatorsBsaAreaFive extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 540,
                  'parameter_item' => 'S.1. The extension agenda is in consonance of local, regional and national development thrusts and priorities.',
                  'description' => 'S.1. The extension agenda is in consonance of local, regional and national development thrusts and priorities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 541,
                  'parameter_item' => 'S.2. The College/Academic Unit of Accountancy has a benchmark survey of the problems, needs priorities and resources of the community.',
                  'description' => 'S.2. The College/Academic Unit of Accountancy has a benchmark survey of the problems, needs priorities and resources of the community.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 542,
                  'parameter_item' => 'S.3. The extension program reflects the VMGO.',
                  'description' => 'S.3. The extension program reflects the VMGO.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 543,
                  'parameter_item' => 'S.4. There is a pool of consultants/experts from various discipline to serve in extension projects and activities.',
                  'description' => 'S.4. There is a pool of consultants/experts from various discipline to serve in extension projects and activities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 544,
                  'parameter_item' => 'S.5. The institution has an approved and copyrighted Extension Manual.',
                  'description' => 'S.5. The institution has an approved and copyrighted Extension Manual.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 545,
                  'parameter_item' => 'I.1. The extension projects and activities implemented are based on the results of the benchmark survey.',
                  'description' => 'I.1. The extension projects and activities implemented are based on the results of the benchmark survey.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 546,
                  'parameter_item' => 'I.2. The extension projects and activities complement the curriculum of the Accountancy program under review.',
                  'description' => 'I.2. The extension projects and activities complement the curriculum of the Accountancy program under review.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 547,
                  'parameter_item' => 'I.3. A mutual exchange of resources and services between the College/Academic unit and the community is evident.',
                  'description' => 'I.3. A mutual exchange of resources and services between the College/Academic unit and the community is evident.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 548,
                  'parameter_item' => 'I.4. Linkages with local, national, foreign, and non-governmental agencies are institutionalized.',
                  'description' => 'I.4. Linkages with local, national, foreign, and non-governmental agencies are institutionalized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 549,
                  'parameter_item' => 'O.1. Priority and relevant extension and activities are conducted.',
                  'description' => 'O.1. Priority and relevant extension and activities are conducted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 550,
                  'parameter_item' => 'S.1. There is a distinct office that manages the Extension Program.',
                  'description' => 'S.1. There is a distinct office that manages the Extension Program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 551,
                  'parameter_item' => 'S.2. Instruments for monitoring and evaluation are available.',
                  'description' => 'S.2. Instruments for monitoring and evaluation are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 552,
                  'parameter_item' => 'I.1. The administration, faculty, students and other stakeholders of the College/Academic Unit of Accountancy participate in the planning and organization of Extension Program.',
                  'description' => 'I.1. The administration, faculty, students and other stakeholders of the College/Academic Unit of Accountancy participate in the planning and organization of Extension Program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 553,
                  'parameter_item' => 'I.2 The administration, faculty and students are involved in the implementation and dissemination of extension programs.',
                  'description' => 'I.2 The administration, faculty and students are involved in the implementation and dissemination of extension programs.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 554,
                  'parameter_item' => 'I.3. The extension projects and activities serve varied clientele.',
                  'description' => 'I.3. The extension projects and activities serve varied clientele.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 555,
                  'parameter_item' => 'I.4. The conduct of extension projects and activities is sustainable.',
                  'description' => 'I.4. The conduct of extension projects and activities is sustainable.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 556,
                  'parameter_item' => 'I.5. Technologies/new knowledge are disseminated to the target clientele through appropriate extension delivery systems.',
                  'description' => 'I.5. Technologies/new knowledge are disseminated to the target clientele through appropriate extension delivery systems.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 557,
                  'parameter_item' => 'I.6. The extension activities are documented in the form of:',
                  'description' => 'I.6. The extension activities are documented in the form of:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 558,
                  'parameter_item' => 'I.6.1. pamphlets;',
                  'description' => 'I.6.1. pamphlets;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '557',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 559,
                  'parameter_item' => 'I.6.2. flyers;',
                  'description' => 'I.6.2. flyers;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '557',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 560,
                  'parameter_item' => 'I.6.3 bulletins;',
                  'description' => 'I.6.3 bulletins;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '557',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 561,
                  'parameter_item' => 'I.6.4. newsletters; and',
                  'description' => 'I.6.4. newsletters; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '557',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 562,
                  'parameter_item' => 'I.6.5. electronic resources',
                  'description' => 'I.6.5. electronic resources',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '557',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 563,
                  'parameter_item' => 'I.7. Periodic monitoring and evaluation of extension projects and activities are conducted.',
                  'description' => 'I.7. Periodic monitoring and evaluation of extension projects and activities are conducted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 564,
                  'parameter_item' => 'I.8. Results of monitoring and evaluation are disseminated and discussed with concerned stakeholders.',
                  'description' => 'I.8. Results of monitoring and evaluation are disseminated and discussed with concerned stakeholders.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 565,
                  'parameter_item' => 'I.9. Re-planning of activities based on feedback is conducted.',
                  'description' => 'I.9. Re-planning of activities based on feedback is conducted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 566,
                  'parameter_item' => 'I.10. Accomplishment and terminal reports are filed and submitted on time.',
                  'description' => 'I.10. Accomplishment and terminal reports are filed and submitted on time.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 567,
                  'parameter_item' => 'O.1. The Extension Program is well-planned, implemented, monitored, evaluated and disseminated.',
                  'description' => 'O.1. The Extension Program is well-planned, implemented, monitored, evaluated and disseminated.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 568,
                  'parameter_item' => 'O.2 The Extension Program has contributed to the improvement on the quality of life of the target clientele/beneficiaries.',
                  'description' => 'O.2 The Extension Program has contributed to the improvement on the quality of life of the target clientele/beneficiaries.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 569,
                  'parameter_item' => 'S.1. There is an approved and adequate budget for extension',
                  'description' => 'S.1. There is an approved and adequate budget for extension',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 570,
                  'parameter_item' => 'S.2. There is a provision of:',
                  'description' => 'S.2. There is a provision of:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 571,
                  'parameter_item' => 'S.2.1. facilities and equipment such as internet and other ICT resources;',
                  'description' => 'S.2.1. facilities and equipment such as internet and other ICT resources;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '570',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 572,
                  'parameter_item' => 'S.2.2. extension staff;',
                  'description' => 'S.2.2. extension staff;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '570',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 573,
                  'parameter_item' => 'S.2.3. supplies and materials; and',
                  'description' => 'S.2.3. supplies and materials; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '570',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 574,
                  'parameter_item' => 'S.2.4. workplace.',
                  'description' => 'S.2.4. workplace.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '570',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 575,
                  'parameter_item' => 'I.1. The budget for the extension program is utilized as planned.',
                  'description' => 'I.1. The budget for the extension program is utilized as planned.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 576,
                  'parameter_item' => 'I.2 Honoraria and other incentives (deloading, credit unit equivalent, etc.) to faculty involved in extension work are granted.',
                  'description' => 'I.2 Honoraria and other incentives (deloading, credit unit equivalent, etc.) to faculty involved in extension work are granted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 577,
                  'parameter_item' => 'I.3. The college/Academic Unit of Accountancy sources out the following from other agencies:',
                  'description' => 'I.3. The college/Academic Unit of Accountancy sources out the following from other agencies:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 578,
                  'parameter_item' => 'I.3.1. additional funding; and',
                  'description' => 'I.3.1. additional funding; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '577',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 579,
                  'parameter_item' => 'I.3.2. technical assistance and service inputs.',
                  'description' => 'I.3.2. technical assistance and service inputs.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '577',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 580,
                  'parameter_item' => 'O.1. The Extension Program is adequately funded.',
                  'description' => 'O.1. The Extension Program is adequately funded.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 581,
                  'parameter_item' => 'S.1. There is a strategy for involving the community, government and private agencies in the Extension Program.',
                  'description' => 'S.1. There is a strategy for involving the community, government and private agencies in the Extension Program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 582,
                  'parameter_item' => 'I.1. The College/Academic Unit is committed to the service and development of the community, and',
                  'description' => 'I.1. The College/Academic Unit is committed to the service and development of the community, and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 583,
                  'parameter_item' => 'I.1.1. Initiates and maintains community development projects;',
                  'description' => 'I.1.1. Initiates and maintains community development projects;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '582',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 584,
                  'parameter_item' => 'I.1.2. involves the students, faculty, staff administrators in the projects; and',
                  'description' => 'I.1.2. involves the students, faculty, staff administrators in the projects; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '582',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 585,
                  'parameter_item' => 'I.2.3. coordinates its community programs and services with the target clientele.',
                  'description' => 'I.2.3. coordinates its community programs and services with the target clientele.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '582',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 586,
                  'parameter_item' => 'I.2. There is community participation and involvement in extension activities in the following:',
                  'description' => 'I.2. There is community participation and involvement in extension activities in the following:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 587,
                  'parameter_item' => 'I.2.1. planning',
                  'description' => 'I.2.1. planning',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '586',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 588,
                  'parameter_item' => 'I.2.2. Implementation and dissemination;',
                  'description' => 'I.2.2. Implementation and dissemination;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '586',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 589,
                  'parameter_item' => 'I.2.3. monitoring and evaluation;',
                  'description' => 'I.2.3. monitoring and evaluation;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '586',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 590,
                  'parameter_item' => 'I.2.4. out-sourcing of funds, materials ad other service inputs; and',
                  'description' => 'I.2.4. out-sourcing of funds, materials ad other service inputs; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '586',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 591,
                  'parameter_item' => 'I.2.5. Utilization of technology, knowledge learned skills acquired from the extension projects and activities.',
                  'description' => 'I.2.5. Utilization of technology, knowledge learned skills acquired from the extension projects and activities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '586',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 592,
                  'parameter_item' => 'O.1. There is wholesome coordination between the Extension Program implementers and target clientele/beneficiaries.',
                  'description' => 'O.1. There is wholesome coordination between the Extension Program implementers and target clientele/beneficiaries.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 540 AND id <= 592');
        }
}
