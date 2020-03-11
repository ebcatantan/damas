<?php namespace App\Database\Migrations;

class AddIndicatorsBsaAreaEight extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 824,
                  'parameter_item' => 'S.1. The laboratory layout conforms with standards (RA 6541 National Building Code of the Philippines/PD 856 “Code of Sanitation of the Philippines) and to particular needs of the program.',
                  'description' => 'S.1. The laboratory layout conforms with standards (RA 6541 National Building Code of the Philippines/PD 856 “Code of Sanitation of the Philippines) and to particular needs of the program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 825,
                  'parameter_item' => 'S.2. Rooms have lightnings in accordance to the standard requirements of fluorescent bulbs relative to their size.',
                  'description' => 'S.2. Rooms have lightnings in accordance to the standard requirements of fluorescent bulbs relative to their size.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 826,
                  'parameter_item' => 'S.3. The laboratories have proper lightning and ventilation.',
                  'description' => 'S.3. The laboratories have proper lightning and ventilation.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 827,
                  'parameter_item' => 'S.4. Each laboratory for shop work for specific technologies.',
                  'description' => 'S.4. Each laboratory for shop work for specific technologies.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 828,
                  'parameter_item' => 'S.5. There is a laboratory for shop work for specific technologies.',
                  'description' => 'S.5. There is a laboratory for shop work for specific technologies.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 829,
                  'parameter_item' => 'S.6 There is a computer laboratory with at least 15 usable computer units and printer.',
                  'description' => 'S.6 There is a computer laboratory with at least 15 usable computer units and printer.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 830,
                  'parameter_item' => 'I.1. Furniture and equipment arrangement allows mobility and enables student to work comfortably without interference.',
                  'description' => 'I.1. Furniture and equipment arrangement allows mobility and enables student to work comfortably without interference.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 831,
                  'parameter_item' => 'I.2. Safety and precautionary measures are implemented.',
                  'description' => 'I.2. Safety and precautionary measures are implemented.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 832,
                  'parameter_item' => 'I.3. Usable fire extinguishers are accessible to staff and students.',
                  'description' => 'I.3. Usable fire extinguishers are accessible to staff and students.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 833,
                  'parameter_item' => 'I.4. Laboratory Operations Manuals for the faculty and students are provided in each laboratory.',
                  'description' => 'I.4. Laboratory Operations Manuals for the faculty and students are provided in each laboratory.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 834,
                  'parameter_item' => 'I.5. Demonstrations and training on the use of fire extinguishers, first-aid kit and other emergency measures are periodically conducted.',
                  'description' => 'I.5. Demonstrations and training on the use of fire extinguishers, first-aid kit and other emergency measures are periodically conducted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 835,
                  'parameter_item' => 'I.6. A well-equipped first-aid kit charts for antidotes and neutralizing solutions are made available in each laboratory room.',
                  'description' => 'I.6. A well-equipped first-aid kit charts for antidotes and neutralizing solutions are made available in each laboratory room.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 836,
                  'parameter_item' => 'I.7. A student’s access to a computer is at least 18 hours per semester for every subject.',
                  'description' => 'I.7. A student’s access to a computer is at least 18 hours per semester for every subject.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 837,
                  'parameter_item' => 'I.8. Appropriate laboratories for general education subjects are adequately equipped and well-maintained.',
                  'description' => 'I.8. Appropriate laboratories for general education subjects are adequately equipped and well-maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 838,
                  'parameter_item' => 'I.9. A well-equipped Multimedia Center is maintained.',
                  'description' => 'I.9. A well-equipped Multimedia Center is maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 839,
                  'parameter_item' => 'I.10. Gas, water and electricity are utilized for class practicum activities.',
                  'description' => 'I.10. Gas, water and electricity are utilized for class practicum activities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 840,
                  'parameter_item' => 'I.11. A demonstration table, equipped with sink, water, electrical and gas outlets is available and utilized.',
                  'description' => 'I.11. A demonstration table, equipped with sink, water, electrical and gas outlets is available and utilized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 841,
                  'parameter_item' => 'I.12. Laboratory equipment, supplies and materials are kept in separate stock rooms.',
                  'description' => 'I.12. Laboratory equipment, supplies and materials are kept in separate stock rooms.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 842,
                  'parameter_item' => 'O.1. The laboratories and shops are well-equipped, functional and are conductive to learning.',
                  'description' => 'O.1. The laboratories and shops are well-equipped, functional and are conductive to learning.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '45',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 843,
                  'parameter_item' => 'S.1. The equipment, instruments and materials needed in the classroom are available.',
                  'description' => 'S.1. The equipment, instruments and materials needed in the classroom are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '46',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 844,
                  'parameter_item' => 'S.2. Apparatuses, tools and materials conform with the standard required for the subject in the accordance with the CMO No. 3 s 2007 of the program.',
                  'description' => 'S.2. Apparatuses, tools and materials conform with the standard required for the subject in the accordance with the CMO No. 3 s 2007 of the program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '46',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 845,
                  'parameter_item' => 'S.3. Varied computer software are available.',
                  'description' => 'S.3. Varied computer software are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '46',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 846,
                  'parameter_item' => 'I.1. Equipment are well-maintained.',
                  'description' => 'I.1. Equipment are well-maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '46',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 847,
                  'parameter_item' => 'I.2. Laboratory supplies and materials are wisely utilized.',
                  'description' => 'I.2. Laboratory supplies and materials are wisely utilized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '46',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 848,
                  'parameter_item' => 'I.3. licensed computer software are installed and utilized.',
                  'description' => 'I.3. licensed computer software are installed and utilized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '46',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 849,
                  'parameter_item' => 'O.1. The laboratory equipment, supplies and materials are sufficient and wisely utilized.',
                  'description' => 'O.1. The laboratory equipment, supplies and materials are sufficient and wisely utilized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '46',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 850,
                  'parameter_item' => 'S.1. A laboratory technician/assistant is available for the proper upkeep of the laboratories.',
                  'description' => 'S.1. A laboratory technician/assistant is available for the proper upkeep of the laboratories.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 851,
                  'parameter_item' => 'S.2. The institution has a Maintenance and Repair Department/Unit managed by skilled personnel who provides services on direct call.',
                  'description' => 'S.2. The institution has a Maintenance and Repair Department/Unit managed by skilled personnel who provides services on direct call.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 852,
                  'parameter_item' => 'I.1. The institution keeps the laboratories neat, clean and orderly.',
                  'description' => 'I.1. The institution keeps the laboratories neat, clean and orderly.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 853,
                  'parameter_item' => 'I.2. There is regular replenishment/replacement of laboratory supplies and materials, whenever applicable.',
                  'description' => 'I.2. There is regular replenishment/replacement of laboratory supplies and materials, whenever applicable.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 854,
                  'parameter_item' => 'I.3. The inventory of laboratory, facilities and equipment is systematically and periodically conducted.',
                  'description' => 'I.3. The inventory of laboratory, facilities and equipment is systematically and periodically conducted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 855,
                  'parameter_item' => 'I.4. The laboratory equipment and instrument are periodically calibrated.',
                  'description' => 'I.4. The laboratory equipment and instrument are periodically calibrated.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 856,
                  'parameter_item' => 'I.5. Waste disposal is efficiently and effectively managed.',
                  'description' => 'I.5. Waste disposal is efficiently and effectively managed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 857,
                  'parameter_item' => 'I.6. The following are properly maintained by trained staff/technicians:',
                  'description' => 'I.6. The following are properly maintained by trained staff/technicians:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 858,
                  'parameter_item' => 'I.6.1. shops;',
                  'description' => 'I.6.1. shops;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '857',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 859,
                  'parameter_item' => 'I.6.2. computer laboratory;',
                  'description' => 'I.6.2. computer laboratory;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '857',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 860,
                  'parameter_item' => 'I.6.3. multi-media/educational technology center;',
                  'description' => 'I.6.3. multi-media/educational technology center;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '857',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 861,
                  'parameter_item' => 'I.6.4. research facility;',
                  'description' => 'I.6.4. research facility;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '857',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 862,
                  'parameter_item' => 'I.6.5. general education;',
                  'description' => 'I.6.5. general education;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '857',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 863,
                  'parameter_item' => 'I.6.5.1. Natural/physical sciences;',
                  'description' => 'I.6.5.1. Natural/physical sciences;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '862',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 864,
                  'parameter_item' => 'I.6.5.2. speech laboratory;',
                  'description' => 'I.6.5.2. speech laboratory;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '862',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 865,
                  'parameter_item' => 'I.6.5.3. physical education; and',
                  'description' => 'I.6.5.3. physical education; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '862',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 866,
                  'parameter_item' => '1.6.6 others (please specify)_________________.',
                  'description' => '1.6.6 others (please specify)_________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '857',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 867,
                  'parameter_item' => 'O.1. The laboratories and shops are functional and are properly maintained.',
                  'description' => 'O.1. The laboratories and shops are functional and are properly maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '47',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 868,
                  'parameter_item' => 'S.1. Specific program requirements (listing of materials and equipment as per CMO) are in accordance with guidelines/policies embodied in official issuances.',
                  'description' => 'S.1. Specific program requirements (listing of materials and equipment as per CMO) are in accordance with guidelines/policies embodied in official issuances.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '48',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 869,
                  'parameter_item' => 'S.2. There is an approved Annual Procurement Plan (APP) for laboratory equipment, supplies and materials.',
                  'description' => 'S.2. There is an approved Annual Procurement Plan (APP) for laboratory equipment, supplies and materials.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '48',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 870,
                  'parameter_item' => 'l.1. The institution implements the provisions as stated in the CMO.',
                  'description' => 'l.1. The institution implements the provisions as stated in the CMO.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '48',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 871,
                  'parameter_item' => 'O.1. The special provisions in the CMO of the program are complied with.',
                  'description' => 'O.1. The special provisions in the CMO of the program are complied with.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '9',
                  'template_parameter_id' => '48',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 824 AND id <= 871');
        }
}
