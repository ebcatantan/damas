<?php namespace App\Database\Migrations;

class AddIndicatorsBsaAreaEight extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 665,
                  'parameter_item' => 'S.1. There is a site Development Plan, and program of implementation.',
                  'description' => 'S.1. There is a site Development Plan, and program of implementation.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 666,
                  'parameter_item' => 'S.2. The Campus has accessible good roads and pathways.',
                  'description' => 'S.2. The Campus has accessible good roads and pathways.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 667,
                  'parameter_item' => 'S.3. The campus is in a well-planned, clean and properly landscaped environment.',
                  'description' => 'S.3. The campus is in a well-planned, clean and properly landscaped environment.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 668,
                  'parameter_item' => 'S.4. There is a system to ensure that all of the following are provided:',
                  'description' => 'S.4. There is a system to ensure that all of the following are provided:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 669,
                  'parameter_item' => 'S.4.1. traffic safety in and outside the campus;',
                  'description' => 'S.4.1. traffic safety in and outside the campus;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '668',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 670,
                  'parameter_item' => 'S.4.2. waste management program;',
                  'description' => 'S.4.2. waste management program;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '668',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 671,
                  'parameter_item' => 'S.4.3. proper utilization, repair and upkeep of school facilities and equipment; and',
                  'description' => 'S.4.3. proper utilization, repair and upkeep of school facilities and equipment; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '668',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 672,
                  'parameter_item' => 'S.4.4. cleanliness and orderliness of the school campus.',
                  'description' => 'S.4.4. cleanliness and orderliness of the school campus.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '668',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 673,
                  'parameter_item' => 'S.5. An area for outdooreducational activities, e.g. social, physical, athletic, cultural, military training, etc. exists.',
                  'description' => 'S.5. An area for outdooreducational activities, e.g. social, physical, athletic, cultural, military training, etc. exists.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 674,
                  'parameter_item' => 'S.6. There is a campus security unit that ensures safety of the academic community.',
                  'description' => 'S.6. There is a campus security unit that ensures safety of the academic community.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 675,
                  'parameter_item' => 'I.1. The site infrastructure development plan is implemented as planned.',
                  'description' => 'I.1. The site infrastructure development plan is implemented as planned.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 676,
                  'parameter_item' => 'I.2. The site plan is strategically displayed inside the campus indicating the location of the different buildings, driveways, parking areas, etc.',
                  'description' => 'I.2. The site plan is strategically displayed inside the campus indicating the location of the different buildings, driveways, parking areas, etc.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 677,
                  'parameter_item' => 'I.3. The Infrastructure development plan is implemented in accordance with approved zoning ordinances.',
                  'description' => 'I.3. The Infrastructure development plan is implemented in accordance with approved zoning ordinances.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 678,
                  'parameter_item' => 'I.4. Covered walks are provided to protect the academic community from inclement weather.',
                  'description' => 'I.4. Covered walks are provided to protect the academic community from inclement weather.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 679,
                  'parameter_item' => 'I.5. The institution implements a Waste Management Program.',
                  'description' => 'I.5. The institution implements a Waste Management Program.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 680,
                  'parameter_item' => 'I.6. The Maintenance Unit or its equivalent periodically inspects school facilities and equipment to ensure their proper utilization upkeep.',
                  'description' => 'I.6. The Maintenance Unit or its equivalent periodically inspects school facilities and equipment to ensure their proper utilization upkeep.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 681,
                  'parameter_item' => 'O.1. The campus environment is conductive to all educational activities. ',
                  'description' => 'O.1. The campus environment is conductive to all educational activities. ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 682,
                  'parameter_item' => 'O.2. The site can accommodate its present school population and future expansion.',
                  'description' => 'O.2. The site can accommodate its present school population and future expansion.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 683,
                  'parameter_item' => 'O.3. The campus is safe and well-maintained.',
                  'description' => 'O.3. The campus is safe and well-maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 684,
                  'parameter_item' => 'O.4. The campus is well-planned, clean and properly landscaped',
                  'description' => 'O.4. The campus is well-planned, clean and properly landscaped',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '35',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 685,
                  'parameter_item' => 'S.1. The buildings meet all the requirements of the Building Code. A Certificate of Occupancy for each building is conspicuously displayed.',
                  'description' => 'S.1. The buildings meet all the requirements of the Building Code. A Certificate of Occupancy for each building is conspicuously displayed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 686,
                  'parameter_item' => 'S.2. The buildings are constructed according to their respective uses.',
                  'description' => 'S.2. The buildings are constructed according to their respective uses.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 687,
                  'parameter_item' => 'S.3. The buildings are well-planned and appropriately located to provide for future expansion.',
                  'description' => 'S.3. The buildings are well-planned and appropriately located to provide for future expansion.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 688,
                  'parameter_item' => 'S.4. Entry and exit points permit the use of the buildings for public and other functions with minimum interference to school activities.',
                  'description' => 'S.4. Entry and exit points permit the use of the buildings for public and other functions with minimum interference to school activities.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 689,
                  'parameter_item' => 'S.5. Emergency exits are provided and properly marked.',
                  'description' => 'S.5. Emergency exits are provided and properly marked.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 690,
                  'parameter_item' => 'S.6. The buildings are with emergency/fire escapes which are readily accessible.',
                  'description' => 'S.6. The buildings are with emergency/fire escapes which are readily accessible.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 691,
                  'parameter_item' => 'S.7. The corridors, doorways and alleys are well-constructed for better mobility.',
                  'description' => 'S.7. The corridors, doorways and alleys are well-constructed for better mobility.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 692,
                  'parameter_item' => 'S.8. The buildings are well-ventilated and lighted.',
                  'description' => 'S.8. The buildings are well-ventilated and lighted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 693,
                  'parameter_item' => 'S.9. The buildings have facilities for persons with disability (PWDs) as provided by law.',
                  'description' => 'S.9. The buildings have facilities for persons with disability (PWDs) as provided by law.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 694,
                  'parameter_item' => 'S.10. There is a central signal and fire alarm system.',
                  'description' => 'S.10. There is a central signal and fire alarm system.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 695,
                  'parameter_item' => 'S.11. There are readily accessible and functional fire extinguishers and other fire-fighting equipment.',
                  'description' => 'S.11. There are readily accessible and functional fire extinguishers and other fire-fighting equipment.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 696,
                  'parameter_item' => 'S.12. Bulletin boards, display boards, waste disposal containers and other amenities are strategically located inside the buildings.',
                  'description' => 'S.12. Bulletin boards, display boards, waste disposal containers and other amenities are strategically located inside the buildings.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 697,
                  'parameter_item' => 'S.13. There are faculty rooms and offices.',
                  'description' => 'S.13. There are faculty rooms and offices.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 698,
                  'parameter_item' => 'S.14. The buildings are insured.',
                  'description' => 'S.14. The buildings are insured.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 699,
                  'parameter_item' => 'I.1. The buildings are clean, well-maintained and free from vandalistic acts.',
                  'description' => 'I.1. The buildings are clean, well-maintained and free from vandalistic acts.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 700,
                  'parameter_item' => 'I.2. Toilets are clean and well-maintained.',
                  'description' => 'I.2. Toilets are clean and well-maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 701,
                  'parameter_item' => 'I.3. Electrical lines are safely installed and periodically checked.',
                  'description' => 'I.3. Electrical lines are safely installed and periodically checked.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 702,
                  'parameter_item' => 'I.4. Water facilities are functional and well-distributed in all buildings.',
                  'description' => 'I.4. Water facilities are functional and well-distributed in all buildings.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 703,
                  'parameter_item' => 'I.5. There is a periodic potability testing of drinking water.',
                  'description' => 'I.5. There is a periodic potability testing of drinking water.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 704,
                  'parameter_item' => 'I.6. Floor plans indicating fire exits and location of fire-fighting equipment, stand pipes, and other water sources are conspicuously displayed in each building.',
                  'description' => 'I.6. Floor plans indicating fire exits and location of fire-fighting equipment, stand pipes, and other water sources are conspicuously displayed in each building.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 705,
                  'parameter_item' => 'I.7. All school facilities are periodically subjected to pest control and inspection.',
                  'description' => 'I.7. All school facilities are periodically subjected to pest control and inspection.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 706,
                  'parameter_item' => 'I.8. Smoking is strictly prohibited inside the campus.',
                  'description' => 'I.8. Smoking is strictly prohibited inside the campus.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 707,
                  'parameter_item' => 'I.9. Periodic drill on disaster and risk reduction (earthquake, flood, fire, etc.) is conducted.',
                  'description' => 'I.9. Periodic drill on disaster and risk reduction (earthquake, flood, fire, etc.) is conducted.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 708,
                  'parameter_item' => 'O.1. The buildings and facilities are safe, well-maintained and functional. ',
                  'description' => 'O.1. The buildings and facilities are safe, well-maintained and functional. ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '36',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 709,
                  'parameter_item' => 'S.1. Classroom size (1.5sq.m. per student) meets standard specifications for instruction.',
                  'description' => 'S.1. Classroom size (1.5sq.m. per student) meets standard specifications for instruction.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 710,
                  'parameter_item' => 'S.2. The classrooms are well-lighted , ventilated and acoustically conditioned.',
                  'description' => 'S.2. The classrooms are well-lighted , ventilated and acoustically conditioned.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 711,
                  'parameter_item' => 'S.3. The classrooms are adequate and are provided with enough chairs, furniture and equipment.',
                  'description' => 'S.3. The classrooms are adequate and are provided with enough chairs, furniture and equipment.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 712,
                  'parameter_item' => 'S.4.There are sufficient supplies (chalkboards, and instructional materials) in each classroom.',
                  'description' => 'S.4.There are sufficient supplies (chalkboards, and instructional materials) in each classroom.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 713,
                  'parameter_item' => 'I.1. The classrooms are marked and arranged relative to their functions.',
                  'description' => 'I.1. The classrooms are marked and arranged relative to their functions.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 714,
                  'parameter_item' => 'I.2. The classrooms are well-maintained and free from interference.',
                  'description' => 'I.2. The classrooms are well-maintained and free from interference.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 715,
                  'parameter_item' => 'I.3. Students cooperate in maintaining the cleanliness and orderliness of the classrooms.',
                  'description' => 'I.3. Students cooperate in maintaining the cleanliness and orderliness of the classrooms.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 716,
                  'parameter_item' => 'O.1. Classrooms are adequate and conductive to learning.',
                  'description' => 'O.1. Classrooms are adequate and conductive to learning.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '37',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 717,
                  'parameter_item' => 'S.1.The administrative offices are accessible to stakeholders',
                  'description' => 'S.1.The administrative offices are accessible to stakeholders',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 718,
                  'parameter_item' => 'S.2. All officers are accessible and conveniently located in accordance to their functions.',
                  'description' => 'S.2. All officers are accessible and conveniently located in accordance to their functions.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 719,
                  'parameter_item' => 'S.3.There are offices and workspaces for all officials, faculty and administrative staff.',
                  'description' => 'S.3.There are offices and workspaces for all officials, faculty and administrative staff.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 720,
                  'parameter_item' => 'S.4.Administration and faculty offices and staff rooms are clean, well-lighted and ventilated.',
                  'description' => 'S.4.Administration and faculty offices and staff rooms are clean, well-lighted and ventilated.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 721,
                  'parameter_item' => 'S.5.Function rooms and lounge are available and accessible.',
                  'description' => 'S.5.Function rooms and lounge are available and accessible.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 722,
                  'parameter_item' => 'S.6.Storerooms are strategically located.',
                  'description' => 'S.6.Storerooms are strategically located.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 723,
                  'parameter_item' => 'S.7. There is internal and external communication system.',
                  'description' => 'S.7. There is internal and external communication system.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 724,
                  'parameter_item' => 'S.8.There are clean toilets for administrators, faculty, staff, and students.',
                  'description' => 'S.8.There are clean toilets for administrators, faculty, staff, and students.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 725,
                  'parameter_item' => 'I.1. All offices are furnished with necessary equipment, furniture, supplies, and materials.',
                  'description' => 'I.1. All offices are furnished with necessary equipment, furniture, supplies, and materials.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 726,
                  'parameter_item' => 'I.2. All offices are well-maintained.',
                  'description' => 'I.2. All offices are well-maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 727,
                  'parameter_item' => 'O.1. The offices and staff rooms are adequate and conductive to working environment.',
                  'description' => 'O.1. The offices and staff rooms are adequate and conductive to working environment.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '38',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 728,
                  'parameter_item' => 'S.1. Function rooms for holding meetings, conferences, convocations and similar activities are sufficient.',
                  'description' => 'S.1. Function rooms for holding meetings, conferences, convocations and similar activities are sufficient.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 729,
                  'parameter_item' => 'S.2. Facilities for athletics sports, cultural activities, military training, etc. are accessible.',
                  'description' => 'S.2. Facilities for athletics sports, cultural activities, military training, etc. are accessible.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 730,
                  'parameter_item' => 'S.3. The sitting capacity conforms to standards.',
                  'description' => 'S.3. The sitting capacity conforms to standards.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 731,
                  'parameter_item' => 'S.4. There are adequate and well-marked entry and exit points.',
                  'description' => 'S.4. There are adequate and well-marked entry and exit points.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 732,
                  'parameter_item' => 'S.5. There are storage facilities for athletic sports and other curricular training equipment.',
                  'description' => 'S.5. There are storage facilities for athletic sports and other curricular training equipment.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 733,
                  'parameter_item' => 'I. 1. Indoor facilities are constructed with:',
                  'description' => 'I. 1. Indoor facilities are constructed with:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 734,
                  'parameter_item' => 'I.1.1. appropriate flooring;',
                  'description' => 'I.1.1. appropriate flooring;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '733',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 735,
                  'parameter_item' => 'I.1.2. proper lighting and ventilation;',
                  'description' => 'I.1.2. proper lighting and ventilation;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '733',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 736,
                  'parameter_item' => 'I.1.3. safety measures;',
                  'description' => 'I.1.3. safety measures;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '733',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 737,
                  'parameter_item' => 'I.1.4. toilets;',
                  'description' => 'I.1.4. toilets;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '733',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 738,
                  'parameter_item' => 'I.1.5. functional drinking facilities; and',
                  'description' => 'I.1.5. functional drinking facilities; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '733',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 739,
                  'parameter_item' => 'I.1.6. enough chairs.',
                  'description' => 'I.1.6. enough chairs.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '733',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 740,
                  'parameter_item' => 'I.2. The constructed outdoor facilities are:',
                  'description' => 'I.2. The constructed outdoor facilities are:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 741,
                  'parameter_item' => 'I.2.1. free from hazards;',
                  'description' => 'I.2.1. free from hazards;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '740',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 742,
                  'parameter_item' => 'I.2.2. suitably laid out for a variety of activities;',
                  'description' => 'I.2.2. suitably laid out for a variety of activities;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '740',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 743,
                  'parameter_item' => 'I.2.3. approximately laid out for a variety of activities;',
                  'description' => 'I.2.3. approximately laid out for a variety of activities;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '740',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 744,
                  'parameter_item' => 'I.2.4. properly maintained and secured; and ',
                  'description' => 'I.2.4. properly maintained and secured; and ',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '740',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 745,
                  'parameter_item' => 'I.2.5. installed with drainage system.',
                  'description' => 'I.2.5. installed with drainage system.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '740',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 746,
                  'parameter_item' => 'I.3. Assembly, athletic sports and cultural facilities are sufficient and varied to meet the requirements of the institution.',
                  'description' => 'I.3. Assembly, athletic sports and cultural facilities are sufficient and varied to meet the requirements of the institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 747,
                  'parameter_item' => 'I.4. Audio-visual room and facilities with appropriate equipment are utilized in support of the teaching-learning such as but not limited to vide/ overhead/ slide projector, sound system, LCD projectors and screens.',
                  'description' => 'I.4. Audio-visual room and facilities with appropriate equipment are utilized in support of the teaching-learning such as but not limited to vide/ overhead/ slide projector, sound system, LCD projectors and screens.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 748,
                  'parameter_item' => 'O.1. Indoor and outdoor activities are well-equipped and properly maintained.',
                  'description' => 'O.1. Indoor and outdoor activities are well-equipped and properly maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '39',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 749,
                  'parameter_item' => 'S.1. The medical and dental clinic has basic facilities such as: reception area, records section, examination/ treatment room and toilets.',
                  'description' => 'S.1. The medical and dental clinic has basic facilities such as: reception area, records section, examination/ treatment room and toilets.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 750,
                  'parameter_item' => 'S.2. The institution has functional medical and dental section/area.',
                  'description' => 'S.2. The institution has functional medical and dental section/area.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 751,
                  'parameter_item' => 'S.3. Potable water is available and sufficient.',
                  'description' => 'S.3. Potable water is available and sufficient.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 752,
                  'parameter_item' => 'S.4. Medical and dental equipment are provided.',
                  'description' => 'S.4. Medical and dental equipment are provided.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 753,
                  'parameter_item' => 'S.5. There are enough medical and dental supplies and materials.',
                  'description' => 'S.5. There are enough medical and dental supplies and materials.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 754,
                  'parameter_item' => 'S.6. Storage facilities (refrigerator, steel cabinets, etc.) are available.',
                  'description' => 'S.6. Storage facilities (refrigerator, steel cabinets, etc.) are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 755,
                  'parameter_item' => 'S.7. Medical and Dental supplies and materials are properly labeled.',
                  'description' => 'S.7. Medical and Dental supplies and materials are properly labeled.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 756,
                  'parameter_item' => 'S.8. The following basic medical equipment and medicines are all available:',
                  'description' => 'S.8. The following basic medical equipment and medicines are all available:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 757,
                  'parameter_item' => 'S.8.1. emergency medicines;',
                  'description' => 'S.8.1. emergency medicines;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 758,
                  'parameter_item' => 'S.8.2. ambobag;',
                  'description' => 'S.8.2. ambobag;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 759,
                  'parameter_item' => 'S.8.3. oxygen tank;',
                  'description' => 'S.8.3. oxygen tank;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 760,
                  'parameter_item' => 'S.8.4. intravenous fluid;',
                  'description' => 'S.8.4. intravenous fluid;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 761,
                  'parameter_item' => 'S.8.5. sphygmomanometer (at least 2 sets);',
                  'description' => 'S.8.5. sphygmomanometer (at least 2 sets);',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 762,
                  'parameter_item' => 'S.8.6. thermometer (at least 10 pcs);',
                  'description' => 'S.8.6. thermometer (at least 10 pcs);',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 763,
                  'parameter_item' => 'S.8.7. diagnostic sets;',
                  'description' => 'S.8.7. diagnostic sets;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 764,
                  'parameter_item' => 'S.8.8. stethoscope (at least 2 units);',
                  'description' => 'S.8.8. stethoscope (at least 2 units);',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 765,
                  'parameter_item' => 'S.8.9. treatment cart; and',
                  'description' => 'S.8.9. treatment cart; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 766,
                  'parameter_item' => 'S.8.10. nebulizer.',
                  'description' => 'S.8.10. nebulizer.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '756',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 767,
                  'parameter_item' => 'S.9. The following basic dental equipment and apparatuses are available:',
                  'description' => 'S.9. The following basic dental equipment and apparatuses are available:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 768,
                  'parameter_item' => 'S.9.1. dental chair;',
                  'description' => 'S.9.1. dental chair;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '767',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 769,
                  'parameter_item' => 'S.9.2. autoclave (sterilizer);',
                  'description' => 'S.9.2. autoclave (sterilizer);',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '767',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 770,
                  'parameter_item' => 'S.9.3. medical supplies;',
                  'description' => 'S.9.3. medical supplies;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '767',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 771,
                  'parameter_item' => 'S.9.4. filling instruments; and',
                  'description' => 'S.9.4. filling instruments; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '767',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 772,
                  'parameter_item' => 'S.9.5. basic instruments (forceps, mouth mirror, cotton fliers, explorer, etc.).',
                  'description' => 'S.9.5. basic instruments (forceps, mouth mirror, cotton fliers, explorer, etc.).',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '767',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 773,
                  'parameter_item' => 'S.10. The Medical/Dental Clinic has ample space adequate lighting and',
                  'description' => 'S.10. The Medical/Dental Clinic has ample space adequate lighting and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 774,
                  'parameter_item' => 'I.1. The medical and Dental Clinics are managed by qualified medical and dental officers.',
                  'description' => 'I.1. The medical and Dental Clinics are managed by qualified medical and dental officers.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 775,
                  'parameter_item' => 'I.2. Distinct rooms and storage areas are properly labeled.',
                  'description' => 'I.2. Distinct rooms and storage areas are properly labeled.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 776,
                  'parameter_item' => '1.3. Medical and dental services are regularly monitored and evaluated',
                  'description' => '1.3. Medical and dental services are regularly monitored and evaluated',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 777,
                  'parameter_item' => 'O.1. The medical, dental clinic and services are functional',
                  'description' => 'O.1. The medical, dental clinic and services are functional',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '40',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 778,
                  'parameter_item' => 'S.1. The institution has a Student Center with supplies and materials.',
                  'description' => 'S.1. The institution has a Student Center with supplies and materials.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 779,
                  'parameter_item' => 'S.2. Policies and guidance on the proper utilization of Student Center are in place.',
                  'description' => 'S.2. Policies and guidance on the proper utilization of Student Center are in place.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 780,
                  'parameter_item' => 'S.3. The Student Center is well-lighted and ventilated.',
                  'description' => 'S.3. The Student Center is well-lighted and ventilated.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 781,
                  'parameter_item' => 'S.4. A conference room is available for students’ use.',
                  'description' => 'S.4. A conference room is available for students’ use.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 782,
                  'parameter_item' => 'S.5. There are facilities and equipment for table games, music appreciation, and TB or video viewing.',
                  'description' => 'S.5. There are facilities and equipment for table games, music appreciation, and TB or video viewing.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 783,
                  'parameter_item' => 'S.6. Clean and sanitary toilets, for men separate from those of women are available.',
                  'description' => 'S.6. Clean and sanitary toilets, for men separate from those of women are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 784,
                  'parameter_item' => 'S.7. Toilets fixtures for students with special needs and PWD’s are provided',
                  'description' => 'S.7. Toilets fixtures for students with special needs and PWD’s are provided',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 785,
                  'parameter_item' => 'S.8 There are offices for student leaders, the editorial staff of the student publication and the officers of other student organizations.',
                  'description' => 'S.8 There are offices for student leaders, the editorial staff of the student publication and the officers of other student organizations.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 786,
                  'parameter_item' => 'I.1. Student activities at the Student Center are regularly conducted and monitored',
                  'description' => 'I.1. Student activities at the Student Center are regularly conducted and monitored',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 787,
                  'parameter_item' => 'I.2. The Student Center is properly maintained.',
                  'description' => 'I.2. The Student Center is properly maintained.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 788,
                  'parameter_item' => 'O.1 The Student Center is fully equipped and functional',
                  'description' => 'O.1 The Student Center is fully equipped and functional',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '41',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 789,
                  'parameter_item' => 'S.1 The canteen/ cafeteria is well-lighted, ventilated, screened and provided with potable water supply.',
                  'description' => 'S.1 The canteen/ cafeteria is well-lighted, ventilated, screened and provided with potable water supply.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 790,
                  'parameter_item' => 'S.2 There are enough;',
                  'description' => 'S.2 There are enough;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 791,
                  'parameter_item' => 'S.2.1. cooking and preparatory equipment;',
                  'description' => 'S.2.1. cooking and preparatory equipment;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '790',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 792,
                  'parameter_item' => 'S.2.2. serving tools and utensils;',
                  'description' => 'S.2.2. serving tools and utensils;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '790',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 793,
                  'parameter_item' => 'S.2.3. cleaning supplies and materials; and',
                  'description' => 'S.2.3. cleaning supplies and materials; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '790',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 794,
                  'parameter_item' => 'S.2.4. dining tables and chairs.',
                  'description' => 'S.2.4. dining tables and chairs.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '790',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 795,
                  'parameter_item' => 'S.3. Wash area and toilets are available.',
                  'description' => 'S.3. Wash area and toilets are available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 796,
                  'parameter_item' => 'I.1. The institution requires business and sanitary permits for the operation of the Food Center/ Cafeteria/Canteen',
                  'description' => 'I.1. The institution requires business and sanitary permits for the operation of the Food Center/ Cafeteria/Canteen',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 797,
                  'parameter_item' => 'I.2. Food served is varied, nutritious, safe and sold at affordable price.',
                  'description' => 'I.2. Food served is varied, nutritious, safe and sold at affordable price.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 798,
                  'parameter_item' => 'I.3. The Food Center/ Cafeteria/ Canteen is well-managed by qualified and competent staff.',
                  'description' => 'I.3. The Food Center/ Cafeteria/ Canteen is well-managed by qualified and competent staff.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 799,
                  'parameter_item' => 'I.4. Cleanliness and orderliness are enforced.',
                  'description' => 'I.4. Cleanliness and orderliness are enforced.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 800,
                  'parameter_item' => 'I.5. The food services are prompt.',
                  'description' => 'I.5. The food services are prompt.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 801,
                  'parameter_item' => 'O.1 The Canteen/Cafeteria/Food Center is well-patronized.',
                  'description' => 'O.1 The Canteen/Cafeteria/Food Center is well-patronized.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 802,
                  'parameter_item' => 'O.2 The food services generate income for the institution.',
                  'description' => 'O.2 The food services generate income for the institution.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '42',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 803,
                  'parameter_item' => 'S.1 The Accreditation Center (AC) is accessible and conveniently located.',
                  'description' => 'S.1 The Accreditation Center (AC) is accessible and conveniently located.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 804,
                  'parameter_item' => 'S.2 The AC has the following equipment and fixtures:',
                  'description' => 'S.2 The AC has the following equipment and fixtures:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 805,
                  'parameter_item' => 'S.2.1. working tables and chair;',
                  'description' => 'S.2.1. working tables and chair;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '804',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 806,
                  'parameter_item' => 'S.2.2. cabinets for display and filing;',
                  'description' => 'S.2.2. cabinets for display and filing;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '804',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 807,
                  'parameter_item' => 'S.2.3. good for ventilation and lightning;',
                  'description' => 'S.2.3. good for ventilation and lightning;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '804',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 808,
                  'parameter_item' => 'S.2.4. computer unit;',
                  'description' => 'S.2.4. computer unit;',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '804',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 809,
                  'parameter_item' => 'S.2.5. toilets; and',
                  'description' => 'S.2.5. toilets; and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '804',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 810,
                  'parameter_item' => 'S.2.6. lounge.',
                  'description' => 'S.2.6. lounge.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '804',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 811,
                  'parameter_item' => 'I.1. The Institution/ College/Academic Unit maintains the AC with the required resources, furniture, and documents.',
                  'description' => 'I.1. The Institution/ College/Academic Unit maintains the AC with the required resources, furniture, and documents.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 812,
                  'parameter_item' => 'I.2. The AC is managed by a qualified and committed staff/faculty.',
                  'description' => 'I.2. The AC is managed by a qualified and committed staff/faculty.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 813,
                  'parameter_item' => 'I.3. Required documents/information and exhibits are updated, systematically packaged and readily available.',
                  'description' => 'I.3. Required documents/information and exhibits are updated, systematically packaged and readily available.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 814,
                  'parameter_item' => 'O.1 The AC is well-equipped and managed.',
                  'description' => 'O.1 The AC is well-equipped and managed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '43',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 815,
                  'parameter_item' => 'S.1. There are dormitories and housing facilities for students, faculty and staff',
                  'description' => 'S.1. There are dormitories and housing facilities for students, faculty and staff',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 816,
                  'parameter_item' => 'S.2. There is an Implementing Rules and Regulations (IRR) for in-campus Housing services.',
                  'description' => 'S.2. There is an Implementing Rules and Regulations (IRR) for in-campus Housing services.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 817,
                  'parameter_item' => 'S.3. There is a system of coordinating with LGU’s on privately owned boarding houses.',
                  'description' => 'S.3. There is a system of coordinating with LGU’s on privately owned boarding houses.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 818,
                  'parameter_item' => 'I.1. The housing facilities are functionally designed.',
                  'description' => 'I.1. The housing facilities are functionally designed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 819,
                  'parameter_item' => 'I.2. The housing facilities and surroundings are properly maintained and monitored.',
                  'description' => 'I.2. The housing facilities and surroundings are properly maintained and monitored.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 820,
                  'parameter_item' => 'I.3. The IRR on housing services is strictly followed (e.g. dormitory fees, etc.)',
                  'description' => 'I.3. The IRR on housing services is strictly followed (e.g. dormitory fees, etc.)',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 821,
                  'parameter_item' => 'I.4. The institution coordinates with LGU’s and owners of private boarding houses.',
                  'description' => 'I.4. The institution coordinates with LGU’s and owners of private boarding houses.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 822,
                  'parameter_item' => 'O.1. The AC is well-equipped and managed.',
                  'description' => 'O.1. The AC is well-equipped and managed.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 823,
                  'parameter_item' => 'O.2. There is wholesome coordination among the Institution, the LGU’s and the owners of private boarding houses.',
                  'description' => 'O.2. There is wholesome coordination among the Institution, the LGU’s and the owners of private boarding houses.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '8',
                  'template_parameter_id' => '44',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 665 AND id <= 823');
        }
}
