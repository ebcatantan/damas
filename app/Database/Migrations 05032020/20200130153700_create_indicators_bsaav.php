<?php namespace App\Database\Migrations;

class CreateIndicatorsBsaav extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
            //parameter 1
              [
                  'id' => 593,
                  'parameter_item' => 'S.1 The institutions research agenda is in consonance with institutional, regional and national priorities concerned such as DOST, CHED - National Higher Education Research Agenda, NEDA,  etc.',
                  'description' => 'S.1 The institutions research agenda is in consonance with institutional, regional and national priorities concerned such as DOST, CHED - National Higher Education Research Agenda, NEDA, etc.',
                  'document_needed_list' => '-Copy of the developmental goals of NEDA  -Copy of the development goals and research agenda of DOST, -Copy of the CHED-National Higher Education Research Agenda,
                        -Copy of the PUP Research Agenda
                        -Matrix of Benchmark of PUP Research Agenda with NEDA, DOST and CHED
                        -Notice of consultative meeting received by different stakeholders
                        -Minutes of the consultative meetings with attendance of participants
                        -Action photos of the proceedings
                        -Copy of the College and Department Research Agenda
                        -Matrix of Benchmark of College and Department Research Agenda with NEDA, DOST CHED, PUP Notice of consultative meeting received by different stakeholders
                        -Minutes of the college and department meetings with attendance of participantsx',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
            [
                  'id' => 594,
                  'parameter_item' => 'S.2 The institution has an approved Research Manual',
                  'description' => 'S.2 The institution has an approved Research Manual',
                  'document_needed_list' => '-Copy of the University Research Manual
                                      -BOR approval of the University Research Manual
                                      -Notice of dissemination received by faculty and administrators',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 595,
                  'parameter_item' => 'I.1 The approved Research Agenda is implemented',
                  'description' => 'I.1 The approved Research Agenda is implemented',
                  'document_needed_list' => '-Copy of the College and Department Research Agenda
                                      -Notice of dissemination received by stakeholders
                                      -Matrix of Completed and Outgoing research works classified according to research thrust and priorities',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 596,
                  'parameter_item' => 'I.2 The following stakeholders participate in the formulation of research agenda as bases for identifying institutional thrusts and priorities',
                  'description' => 'I.2 The following stakeholders participate in the formulation of research agenda as bases for identifying institutional thrusts and priorities',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 597,
                  'parameter_item' => 'I.2.1 administration',
                  'description' => 'I.2.1 administration',
                  'document_needed_list' => '-Notice of Meeting received by stakeholders
                          -Letters of invitation to government agencies, graduates and others
                          -Minutes of the proceedings with the attendance of stakeholders
                          -Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '596',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 598,
                  'parameter_item' => 'I.2.2 faculty',
                  'description' => 'I.2.2 faculty',
                  'document_needed_list' => '-Notice of Meeting received by stakeholders
                      -Letters of invitation to government agencies, graduates and others
                      -Minutes of the proceedings with the attendance of stakeholders
                      -Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '596',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 599,
                  'parameter_item' => 'I.2.3 students',
                  'description' => 'I.2.3 students',
                  'document_needed_list' => '-Notice of Meeting received by stakeholders
                        -Letters of invitation to government agencies, graduates and others
                        -Minutes of the proceedings with the attendance of stakeholders
                        -Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '596',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 600,
                  'parameter_item' => 'I.2.4 government agency representatives (DOST, CHED, NEDA, etc)',
                  'description' => 'I.2.4 government agency representatives (DOST, CHED, NEDA, etc)',
                  'document_needed_list' => '-Notice of Meeting received by stakeholders
                        -Letters of invitation to government agencies, graduates and others
                        -Minutes of the proceedings with the attendance of stakeholders
                        -Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '596',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 601,
                  'parameter_item' => '1.2.5 other stakeholders (alumni, parents, etc.).',
                  'description' => '1.2.5 other stakeholders (alumni, parents, etc.).',
                  'document_needed_list' => '-Notice of Meeting received by stakeholders
                        -Letters of invitation to government agencies, graduates and others
                        -Minutes of the proceedings with the attendance of stakeholders
                        -Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '596',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 602,
                  'parameter_item' => 'I.3 Action researches to test theory in practice are conducted by faulty and students',
                  'description' => 'I.3 Action researches to test theory in practice are conducted by faulty and students',
                  'document_needed_list' => '-Matrix of action research works conducted by faculty and students
                                -Copies of the action research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 603,
                  'parameter_item' => 'I.4 Team/collaborative and interdisciplinary research is encouraged',
                  'description' => 'I.4 Team/collaborative and interdisciplinary research is encouraged',
                  'document_needed_list' => '-Matrix of team. collaborative and interdisciplinary research works conducted by faculty and students
                      -Copies of team. collaborative and interdisciplinary research works conducted by faculty and students
                      -Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 604,
                  'parameter_item' => 'I.5 Research outputs are published in refereed national and/or international journals.',
                  'description' => 'I.5 Research outputs are published in refereed national and/or international journals.',
                  'document_needed_list' => '-Matrix of research works published in referred national and international journals
                            -Copies of the referred national and international journals',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 605,
                  'parameter_item' => 'O.1 Priority researches are identified and conducted.',
                  'description' => 'O.1 Priority researches are identified and conducted.',
                  'document_needed_list' => '-Awards and recognition of research and research works
                                      -Results of faculty evaluation
                                      -OPCR and IPCR with ratings
                                      -PBB Rating
                                      -PASUC Promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 606,
                  'parameter_item' => 'O.2 Research results are published',
                  'description' => 'O.2 Research results are published',
                  'document_needed_list' => '-Awards and recognition of research and research works
                            -Results of faculty evaluation
                            -OPCR and IPCR with ratings
                            -PBB Rating
                            -PASUC Promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter b
              [
                  'id' => 607,
                  'parameter_item' => 'S.1 The institution has an approved and adequate budget for research.',
                  'description' => 'S.1 The institution has an approved and adequate budget for research.',
                  'document_needed_list' => '-Policy on Research Budget
                              -Notice dissemination of the policy received by stakeholders
                              -Copy of the approved budget for research
                              -Report of budget utilization
                              -Approved letters for research funding',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 608,
                  'parameter_item' => 'S.2 There are provisions for the following.',
                  'description' => 'S.2 There are provisions for the following.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 609,
                  'parameter_item' => 'S.2.1 facilities and equipment such as Internet, statistical, software, and other ICT resources',
                  'description' => 'S.2.1 facilities and equipment such as Internet, statistical, software, and other ICT resources',
                  'document_needed_list' => '-Inventory of research facilities and equipment such ICT, library, statistical soft wares and others
                            -Photos of research facilities and equipment such ICT, library, statistical soft wares and others
                            -Letters of requests for research facilities and equipment',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '608',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 610,
                  'parameter_item' => 'S.2.2 research staff',
                  'description' => 'S.2.2 research staff',
                  'document_needed_list' => '-Profile matrix of the research staff
                        -Copies of TORs, certificates of trainings completed and conferences, seminars  attended, certificates of recognition and appreciation, and copies of research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '608',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 611,
                  'parameter_item' => 'S.2.3 supplies and materialsand',
                  'description' => 'S.2.3 supplies and materialsand',
                  'document_needed_list' => '-Inventory of research supplies and materials
                        -Letters of requests for research supplies and materials',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '608',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 612,
                  'parameter_item' => 'S.2.4 workplace.',
                  'description' => 'S.2.4 workplace.',
                  'document_needed_list' => '-Photo of research office and laboratory',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '608',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 613,
                  'parameter_item' => 'I.1 allocates adequate funds for the conduct of faculty andstudent research.',
                  'description' => 'I.1 allocates adequate funds for the conduct of faculty andstudent research.',
                  'document_needed_list' => '-Copy of the approved budget for research
                            -Report of budget utilization
                            -Approved letters for research funding',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 614,
                  'parameter_item' => 'I.2 establishes linkages with the local/national/international agencies for funding support and assistance.',
                  'description' => 'I.2 establishes linkages with the local/national/international agencies for funding support and assistance.',
                  'document_needed_list' => '-Matrix of research linkages and networks
                                -Copies of MOA/MOU
                                -Action photos of the MOA/MOU signing
                                -Letters of invitation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 615,
                  'parameter_item' => 'I.3 maintains a functional and long-range program of faculty/staff development to enhance competence.',
                  'description' => 'I.3 maintains a functional and long-range program of faculty/staff development to enhance competence.',
                  'document_needed_list' => '-Copy of the University, College and Department Research Program
                        -BOR approval of  University, College and Department Research Program
                        -Notice of dissemination
                        -Matrix of faculty and staff development projects and activities
                        -Action photos of faculty and staff development projects and activities
                        -Evaluation of  faculty and staff development projects and activities
                        -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 616,
                  'parameter_item' => 'I.4 encourage the conduct of externally funded researches.',
                  'description' => 'I.4 encourage the conduct of externally funded researches.',
                  'document_needed_list' => '-Policy on externally funded research
                            -Notice of dissemination
                            -Matrix of externally funded research works
                            -Copies of MOA/MOU
                            -Action photos of MOA/MOU signing',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 617,
                  'parameter_item' => 'O.1 The research program is adequately funded',
                  'description' => 'O.1 The research program is adequately funded',
                  'document_needed_list' => '-Matrix of completed and on-going research works
                          -Awards and recognition of researchers and research works
                          -Faculty evaluation ratings
                          -OPCR/IPCR with ratings
                          -PBB ratings
                          -PASUC promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '23',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              //parameter c
              [
                  'id' => 618,
                  'parameter_item' => 'S.1 There is a system of implementation, monitoring, evaluation and utilization of research outputs.',
                  'description' => 'S.1 There is a system of implementation, monitoring, evaluation and utilization of research outputs.',
                  'document_needed_list' => '-Policy on the implementation, monitoring, evaluation and utilization of research outputs.
                              -Notice of dissemination
                              -Matrix of research implementation, monitoring, evaluation and utilization of research outputs
                              -Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 619,
                  'parameter_item' => 'S.2 The institution has a policy on intellectual Property Rights (IPR).',
                  'description' => 'S.2 The institution has a policy on intellectual Property Rights (IPR).',
                  'document_needed_list' => '-Policy on Intellectual Property Rights (IPR).
                                  -Matrix of research works applied  for and approved copyright and patent',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 620,
                  'parameter_item' => 'I.1. The institution/College/Academic Unit has a Research Unit managed by competent staff.',
                  'description' => 'I.1. The institution/College/Academic Unit has a Research Unit managed by competent staff.',
                  'document_needed_list' => '-Profile matrix OVPRED/College/Department
                                -Copies of CV, TOR, certificates of recognition or appreciation, certificates of training completed, conferences, convention, seminars, workshops attended, copies of completed and on-going research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 621,
                  'parameter_item' => 'I.2. The Research Manual provides guidelines and procedures for the administration and conduct of research.',
                  'description' => 'I.2. The Research Manual provides guidelines and procedures for the administration and conduct of research.',
                  'document_needed_list' => '-Copy of guidelines and procedures for the administration and conduct of research
                                  -Matrix of completed and ongoing research works
                                  -Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 622,
                  'parameter_item' => 'I.3. The faculty conduct applied and operational researches in their fields of specialization in accordance with the thrusts and priorities of the program/institution.',
                  'description' => 'I.3. The faculty conduct applied and operational researches in their fields of specialization in accordance with the thrusts and priorities of the program/institution.',
                  'document_needed_list' => '-	Matrix of completed and ongoing research works classified according to the Research Thrusts and Priorities
                        -	Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 623,
                  'parameter_item' => 'I.4. The institution provides incentives to faculty researchers such as honoraria, service credits, deloading, etc.',
                  'description' => 'I.4. The institution provides incentives to faculty researchers such as honoraria, service credits, deloading, etc.',
                  'document_needed_list' => '-Policy on the Incentives to faculty researchers such as honoraria, service credits, deloading, etc.
                                      -Notice of dissemination
                                      -List of faculty granted honoraria, service credits, deloading, etc.',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 624,
                  'parameter_item' => 'I.5. The College/Academic Unit requires its students to conduct research as a course requirement, (whenever applicable).',
                  'description' => 'I.5. The College/Academic Unit requires its students to conduct research as a course requirement, (whenever applicable).',
                  'document_needed_list' => '-Policy requiring students to conduct research, as a course requirement,
                              -Copy of the curriculum and syllabus
                              -Matrix of completed and ongoing student research works
                              -Copies of completed and ongoing student research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 625,
                  'parameter_item' => 'I.6. The institution provides opportunities for advanced studies and/or training to enhance faculty/staff research competence.',
                  'description' => 'I.6. The institution provides opportunities for advanced studies and/or training to enhance faculty/staff research competence.',
                  'document_needed_list' => '-Policy for advanced studies and/or training to enhance faculty/staff research competence
                                  -Notice of dissemination
                                  -Matrix of advanced studies and training attended by faculty
                                  -Copies of TOR/Certificates of Grade/Certificates of attendance or Participation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 626,
                  'parameter_item' => 'I.7. Completed and on-going research studies are periodically monitored and evaluated in local and regional in-house reviews.',
                  'description' => 'I.7. Completed and on-going research studies are periodically monitored and evaluated in local and regional in-house reviews.',
                  'document_needed_list' => '-Proof of attendance in local, regional, national and international research conference, colloquia, symposia, conventions
                                      -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 627,
                  'parameter_item' => 'I.8. Research outputs are utilized as inputs in:',
                  'description' => 'I.8. Research outputs are utilized as inputs in:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 628,
                  'parameter_item' => 'I.8.1. Institutional development',
                  'description' => 'I.8.1. Institutional development',
                  'document_needed_list' => '-Letter of transmittal of completed research works to administrators
                                -Letter of acknowledgement of completed research works by  administrators
                                -Copy of the completed research works
                                -Minutes of the meeting
                                -Certificate of recognition or appreciation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '627',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 629,
                  'parameter_item' => 'I.8.2. the improvement of instructional processes and',
                  'description' => 'I.8.2. the improvement of instructional processes and',
                  'document_needed_list' => '-Letter of transmittal of completed research works to administrators
                                -Letter of acknowledgement of completed research works by  administrators
                                -Copy of the completed research works
                                -Minutes of the meeting
                                -Certificate of recognition or appreciation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '627',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 630,
                  'parameter_item' => 'I.8.3. the transfer of generated technology/knowledge to the community.',
                  'description' => 'I.8.3. the transfer of generated technology/knowledge to the community.',
                  'document_needed_list' => '-Letter of transmittal of completed research works to administrators
                                -Letter of acknowledgement of completed research works by  administrators
                                -Copy of the completed research works
                                -Minutes of the meeting
                                -Certificate of recognition or appreciation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '627',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 631,
                  'parameter_item' => 'I.9. Packaged technologies and new information are disseminated to target clientele through appropriate delivery systems.',
                  'description' => 'I.9. Packaged technologies and new information are disseminated to target clientele through appropriate delivery systems.',
                  'document_needed_list' => '-List of  package technologies and new information used in the conduct of research
                                -Notice of dissemination',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 632,
                  'parameter_item' => 'I.10. The institution ensures that:',
                  'description' => 'I.10. The institution ensures that:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 633,
                  'parameter_item' => 'I.10.1. research outputs are protected by IPR laws and',
                  'description' => 'I.10.1. research outputs are protected by IPR laws and',
                  'document_needed_list' => '-Policy on IPR for research works
                              -List of research works submitted for patent and copyright
                              -List of research works with approved patent and copyright',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '632',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 634,
                  'parameter_item' => 'I.10.2. faculty and students observe research ethics to avoid malpractices like plagiarism, fabrication of data, etc.',
                  'description' => 'I.10.2. faculty and students observe research ethics to avoid malpractices like plagiarism, fabrication of data, etc.',
                  'document_needed_list' => '-Policy on research ethics
                            -Notice of dissemination',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '632',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 635,
                  'parameter_item' => 'O.1. Implementation, monitoring, evaluation and research utilization of outputs are effective.',
                  'description' => 'O.1. Implementation, monitoring, evaluation and research utilization of outputs are effective.',
                  'document_needed_list' => '-Matrix of completed and on-going research works
                                  -Awards and recognition of researchers and research works
                                  -Faculty evaluation rating
                                  -OPCR/IPCR with ratings
                                  -PBB ratings
                                  -PASUC promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '24',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              //parameter d
              [
                  'id' => 636,
                  'parameter_item' => 'S.1. The institution has an approved and copyrighted Research Journal.',
                  'description' => 'S.1. The institution has an approved and copyrighted Research Journal.',
                  'document_needed_list' => '-List of approved and copyrighted University Research Journal.
                                -Copies of the approved and copyrighted University Research Journal.',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 637,
                  'parameter_item' => 'S.2. The institution has incentives for:',
                  'description' => 'S.2. The institution has incentives for:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
            [
                  'id' => 638,
                  'parameter_item' => 'S.2.1. paper presentations',
                  'description' => 'S.2.1. paper presentations',
                  'document_needed_list' => '-Policy on Incentives of Faculty Researcher
                                  -Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance and patented outputs.
                                  -Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  -Matrix of research works with awards and recognition
                                  -Matrix of research works with patent or copyright
                                  -Copies of patent or copyright certificates
                                  -Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '637',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 639,
                  'parameter_item' => 'S.2.2. journal publication',
                  'description' => 'S.2.2. journal publication',
                  'document_needed_list' => '-Policy on Incentives of Faculty Researcher
                                  -Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance and patented outputs.
                                  -Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  -Matrix of research works with awards and recognition
                                  -Matrix of research works with patent or copyright
                                  -Copies of patent or copyright certificates
                                  -Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '637',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 640,
                  'parameter_item' => 'S.2.3. outstanding research related performance and',
                  'description' => 'S.2.3. outstanding research related performance and',
                  'document_needed_list' => '-Policy on Incentives of Faculty Researcher
                                  -Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance and patented outputs.
                                  -Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  -Matrix of research works with awards and recognition
                                  -Matrix of research works with patent or copyright
                                  -Copies of patent or copyright certificates
                                  -Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '637',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 641,
                  'parameter_item' => 'S.2.4. patented outputs.',
                  'description' => 'S.2.4. patented outputs.',
                  'document_needed_list' => '-Policy on Incentives of Faculty Researcher
                                  -Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance and patented outputs.
                                  -Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  -Matrix of research works with awards and recognition
                                  -Matrix of research works with patent or copyright
                                  -Copies of patent or copyright certificates
                                  -Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '637',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 642,
                  'parameter_item' => 'I.1. The institution provides opportunities for the dissemination of research results in fora, conferences, seminars and other related means.',
                  'description' => 'I.1. The institution provides opportunities for the dissemination of research results in fora, conferences, seminars and other related means.',
                  'document_needed_list' => '-Policy for the dissemination of research results in fora, conferences, seminars, and other related means.
                                  -Notice of  dissemination
                                  -Matrix of faculty researchers who presented in colloquia,fora, conferences, seminars, and other related means.
                                  -Approved request
                                  -Copies of Special Order
                                  -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 643,
                  'parameter_item' => 'I.2. The institution regularly publishes a research journal.',
                  'description' => 'I.2. The institution regularly publishes a research journal.',
                  'document_needed_list' => '-Policy for the publication of research works
                                    -Notice of  dissemination
                                    -List of published research journals
                                    -Copies of the research journals
                                    -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 644,
                  'parameter_item' => 'I.3. Library exchange of research publication, with other HEI\'s and agencies is maintained',
                  'description' => 'I.3. Library exchange of research publication, with other HEI\'s and agencies is maintained',
                  'document_needed_list' => '-List of linkage for Library exchange of research publication
                                    -Copies of MOA/MOU
                                    -Action photos of MOA/MOU signing
                                    -Proofs of library exchange',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 645,
                  'parameter_item' => 'I.4. Research manuscripts/technical reports are well-written, and edited following the institutional format.',
                  'description' => 'I.4. Research manuscripts/technical reports are well-written, and edited following the institutional format.',
                  'document_needed_list' => '-Policy for critiquing, editing and review of research works
                              -Notice of dissemination
                              -Members of the editorial board of research journal
                              -Profile of the editorial board of research journal
                              -Matrix of faculty researchers and research works
                              -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 646,
                  'parameter_item' => 'I.5. The institution supports the researchers in all of the following activities:',
                  'description' => 'I.5. The institution supports the researchers in all of the following activities:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 647,
                  'parameter_item' => 'I.5.1. Instructional Materials Development',
                  'description' => 'I.5.1. Instructional Materials Development',
                  'document_needed_list' => '-Policy on Instructional Materials Development
                            -Notice of dissemination
                            -List of faculty and their approved instructional materials
                            -Copies of approved instructional materials
                            -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '646',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 648,
                  'parameter_item' => 'I.5.2. paper presentations journal publication, classroom Lectures, and other similar activities',
                  'description' => 'I.5.2. paper presentations journal publication, classroom Lectures, and other similar activities',
                  'document_needed_list' => '-Policy on paper presentations, journal publication, classroom lectures, and other similar activities
                              -Notice of dissemination
                              -List of faculty who availed supports for paper presentations, journal publication, classroom lectures, and other similar activities
                              -Copies of SO
                              -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '646',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 649,
                  'parameter_item' => 'I.5.3. editorship/writing in academic, scientific and professional journals',
                  'description' => 'I.5.3. editorship/writing in academic, scientific and professional journals',
                  'document_needed_list' => '-Policy and procedure on editorship/writing in academic, scientific and professional journals
                                    -Notice of dissemination
                                    -Composition of editorial board
                                    -List of research journals
                                    -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '646',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 650,
                  'parameter_item' => 'I.5.4. thesis/dissertation advising and',
                  'description' => 'I.5.4. thesis/dissertation advising and',
                  'document_needed_list' => '-Policy on thesis/dissertation advising
                            -Notice of dissemination
                            -Composition of thesis advisers
                            -List of completed thesis/dissertation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '646',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 651,
                  'parameter_item' => 'I.5.5. patenting of research outputs.',
                  'description' => 'I.5.5. patenting of research outputs.',
                  'document_needed_list' => '-Policy on patenting of research outputs
                              -Notice of dissemination
                              -List of research outputs with patents or with application for patents
                              -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '646',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 652,
                  'parameter_item' => 'I.6. Research results are published preferably in refereed journals.',
                  'description' => 'I.6. Research results are published preferably in refereed journals.',
                  'document_needed_list' => '-Matrix of research works published in journals
                      -Copies of the journals
                      -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 656,
                  'parameter_item' => 'I.7. Research results are disseminated to the clientele.',
                  'description' => 'I.7. Research results are disseminated to the clientele.',
                  'document_needed_list' => '-Proofs of dissemination of research works to target clientele like colloquia, conference, convention, seminars, fora, journals
                                -Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 657,
                  'parameter_item' => 'I.8. The College/Academic Unit generates income from patents, licenses, copyrights, ad other research outputs.',
                  'description' => 'I.8. The College/Academic Unit generates income from patents, licenses, copyrights, ad other research outputs.',
                  'document_needed_list' => '-Policy on income generation from patents, licenses, copyrights, and other research outputs
                          -List of research works that earned income from patents, licenses, copyrights, and other research outputs',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 658,
                  'parameter_item' => 'O.1. Research outputs are published in refereed journals.',
                  'description' => 'O.1. Research outputs are published in refereed journals.',
                  'document_needed_list' => '-Matrix of published research works
                              -Awards and recognition of researchers and research works
                              -Faculty evaluation ratings
                              -PASUC promotion
                              -OPCR/IPCR with ratings
                              -PBB ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 659,
                  'parameter_item' => 'O.2. Research outputs are utilized.',
                  'description' => 'O.2. Research outputs are utilized.',
                  'document_needed_list' => '-	Matrix of published research works
                              -	Awards and recognition of researchers and research works
                              -	Faculty evaluation ratings
                              -	PASUC promotion
                              -	OPCR/IPCR with ratings
                              -	PBB ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 660,
                  'parameter_item' => 'O.3. Patented and copyrighted research outputs are commercialized.',
                  'description' => 'O.3. Patented and copyrighted research outputs are commercialized.',
                  'document_needed_list' => '-	Matrix of published research works
                        -	Awards and recognition of researchers and research works
                        -	Faculty evaluation ratings
                        -	PASUC promotion
                        -	OPCR/IPCR with ratings
                        -	PBB ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 593 AND id <= 660');
        }
}
