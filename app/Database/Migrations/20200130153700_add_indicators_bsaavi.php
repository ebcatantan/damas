<?php namespace App\Database\Migrations;

class AddIndicatorsBsaavi extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 661,
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
                  'id' => 662,
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
                  'id' => 663,
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
                  'id' => 664,
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
                  'id' => 665,
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
                  'id' => 666,
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
                  'id' => 667,
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
                  'id' => 668,
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
                  'id' => 669,
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
                  'id' => 670,
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

              //parameter b

              [
                  'id' => 671,
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
                  'id' => 672,
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
                  'id' => 673,
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
                  'id' => 674,
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
                  'id' => 675,
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
                  'id' => 676,
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
                  'id' => 677,
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
                  'id' => 678,
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
                  'id' => 679,
                  'parameter_item' => 'I.6.1. pamphlets',
                  'description' => 'I.6.1. pamphlets',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '678',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 680,
                  'parameter_item' => 'I.6.2. flyers',
                  'description' => 'I.6.2. flyers',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '678',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 681,
                  'parameter_item' => 'I.6.3 bulletins',
                  'description' => 'I.6.3 bulletins',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '678',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 682,
                  'parameter_item' => 'I.6.4. newsletters and',
                  'description' => 'I.6.4. newsletters and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '678',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 683,
                  'parameter_item' => 'I.6.5. electronic resources',
                  'description' => 'I.6.5. electronic resources',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '26',
                  'parent_parameter_item_id' => '678',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 684,
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
                  'id' => 685,
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
                  'id' => 686,
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
                  'id' => 687,
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
                  'id' => 688,
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
                  'id' => 689,
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

              //parameter c
              [
                  'id' => 690,
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
                  'id' => 691,
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
                  'id' => 692,
                  'parameter_item' => 'S.2.1. facilities and equipment such as internet and other ICT resources',
                  'description' => 'S.2.1. facilities and equipment such as internet and other ICT resources',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '691',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 693,
                  'parameter_item' => 'S.2.2. extension staff',
                  'description' => 'S.2.2. extension staff',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '691',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 694,
                  'parameter_item' => 'S.2.3. supplies and materials and',
                  'description' => 'S.2.3. supplies and materials and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '691',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 695,
                  'parameter_item' => 'S.2.4. workplace.',
                  'description' => 'S.2.4. workplace.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '691',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 696,
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
                  'id' => 697,
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
                  'id' => 698,
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
                  'id' => 699,
                  'parameter_item' => 'I.3.1. additional funding and',
                  'description' => 'I.3.1. additional funding and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '698',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 700,
                  'parameter_item' => 'I.3.2. technical assistance and service inputs.',
                  'description' => 'I.3.2. technical assistance and service inputs.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '698',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 701,
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

              //parameter d
              [
                  'id' => 702,
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
                  'id' => 703,
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
                  'id' => 704,
                  'parameter_item' => 'I.1.1. Initiates and maintains community development projects',
                  'description' => 'I.1.1. Initiates and maintains community development projects',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '703',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 705,
                  'parameter_item' => 'I.1.2. involves the students, faculty, staff administrators in the projects and',
                  'description' => 'I.1.2. involves the students, faculty, staff administrators in the projects and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '703',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 706,
                  'parameter_item' => 'I.2.3. coordinates its community programs and services with the target clientele.',
                  'description' => 'I.2.3. coordinates its community programs and services with the target clientele.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '703',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 707,
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
                  'id' => 708,
                  'parameter_item' => 'I.2.1. planning',
                  'description' => 'I.2.1. planning',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '707',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 709,
                  'parameter_item' => 'I.2.2. Implementation and dissemination',
                  'description' => 'I.2.2. Implementation and dissemination',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '707',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 710,
                  'parameter_item' => 'I.2.3. monitoring and evaluation',
                  'description' => 'I.2.3. monitoring and evaluation',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '707',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 711,
                  'parameter_item' => 'I.2.4. out-sourcing of funds, materials ad other service inputs and',
                  'description' => 'I.2.4. out-sourcing of funds, materials ad other service inputs and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '707',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 712,
                  'parameter_item' => 'I.2.5. Utilization of technology, knowledge learned skills acquired from the extension projects and activities.',
                  'description' => 'I.2.5. Utilization of technology, knowledge learned skills acquired from the extension projects and activities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '6',
                  'template_parameter_id' => '27',
                  'parent_parameter_item_id' => '707',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 713,
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 661 AND id <= 713');
        }
}
