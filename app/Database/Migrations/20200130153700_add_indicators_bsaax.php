<?php namespace App\Database\Migrations;

class AddIndicatorsBsaax extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
            [
                  'id' => 1301,
                  'parameter_item' => 'S.1. The institution has an organizational structure approved by the Board of Regents/Trustees (BOR/BOT)',
                  'description' => 'S.1. The institution has an organizational structure approved by the Board of Regents/Trustees (BOR/BOT)',
                  'document_needed_list' => '- Copy of the approved University, College and Department organizational structure
                                             - BOR approval of the University’s organizational structure for the college/branch/department: Local Academic Council Minutes of the Meeting, re: approval of the organizational structure
                                             - Photo of the bulletin boards with the approved organizational structure with approved BOR Resolution Number, if applicable',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1302,
                  'parameter_item' => 'S.2. Every office/unit in the organizational structure has functions approved by the BOT/BOT',
                  'description' => 'S.2. Every office/unit in the organizational structure has functions approved by the BOT/BOT',
                  'document_needed_list' => '- University Code with BOR approval',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1303,
                  'parameter_item' => 'I.1. The institution is subdivided into administrative units in accordance with the organizational structure',
                  'description' => 'I.1. The institution is subdivided into administrative units in accordance with the organizational structure',
                  'document_needed_list' => '- Copy of the approved University, College/Branch and Department organizational structure
                                             - Profile matrix of the Executive Committee, College/Branch and Department officials with supporting documents',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1304,
                  'parameter_item' => 'I.2. The functions, duties and responsibilities of administrative staff in each unit/office are carried out.',
                  'description' => 'I.2. The functions, duties and responsibilities of administrative staff in each unit/office are carried out.',
                  'document_needed_list' => '- Copy of the approved duties and responsibilities of office administrators and administrative staff (University Code/ Administrative Manual)
                                             - Copy of the OPCR and IPCR with ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1305,
                  'parameter_item' => 'I.3. The Board of Regents/Trustees I supportive with the growth and development of the Institution.',
                  'description' => 'I.3. The Board of Regents/Trustees I supportive with the growth and development of the Institution.',
                  'document_needed_list' => '- BOR Resolutions (concerned college/branch)
                                             - Copies of BOR approvals',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1306,
                  'parameter_item' => 'I.4. The Academic and Administrative Councils exercise their powers and perform functions.',
                  'description' => 'I.4. The Academic and Administrative Councils exercise their powers and perform functions.',
                  'document_needed_list' => '- University Code (concerned with Administrative and Academic councils)
                                             - Copy of the approved Minutes of meetings with attendance',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1307,
                  'parameter_item' => 'I.5. The flow of communication among and within units/departments is observed.',
                  'description' => 'I.5. The flow of communication among and within units/departments is observed.',
                  'document_needed_list' => '- Approved Policy on the flow of communication among and within units/departments
                                             - Approved Guidelines for CTS
                                             - Notice of dissemination received by the stakeholders
                                             - Copy of CTS - sample',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1308,
                  'parameter_item' => 'O.1. The functions has a well-designed and functional organizational structure.',
                  'description' => 'O.1. The functions has a well-designed and functional organizational structure.',
                  'document_needed_list' => '- Clients’ Feedback Survey (IDSA)
                                             - OPCR and IPCR with ratings
                                             - PBB ratings with payslip',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '49',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1309,
                  'parameter_item' => 'S.1. The Dean/Academic Unit Head possesses the required educational qualification, experience and other prescribed requirments needed to administer the College/Academic Unit, as follows:',
                  'description' => 'S.1. The Dean/Academic Unit Head possesses the required educational qualification, experience and other prescribed requirments needed to administer the College/Academic Unit, as follows:',
                  'document_needed_list' => ' - Copy of the Program Standards and Guidelines (PSG) downloaded from CHED website (highlight the required qualification for the dean/academic head of the concerned program)
                                              - Portfolio of college dean with copies of CV, TOR, certificates of appointment, employment, completed training, attendance in conferences, conventions, seminars, workshops, colloquia, fora and professional development activities
                                              - Awards and recognitions earned by the Dean and
                                              - Copy of the license, if necessary ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1340,
                  'parameter_item' => 'S.1.1. regitered Professional Accountant in the Philippines woth current PRC Identification Card',
                  'description' => 'S.1.1. regitered Professional Accountant in the Philippines woth current PRC Identification Card',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '881',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1341,
                  'parameter_item' => 'S.1.2. teaching experience of at least five (5) years in the tertiary level, and preferably, two (2) years of administrative experience and',
                  'description' => 'S.1.2. teaching experience of at least five (5) years in the tertiary level, and preferably, two (2) years of administrative experience and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '881',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1342,
                  'parameter_item' => 'S.1.3. masters degree in business, accountancy, business education, educational management, or other related area of studies.',
                  'description' => 'S.1.3. masters degree in business, accountancy, business education, educational management, or other related area of studies.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '881',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1343,
                  'parameter_item' => 'S.2. The Dean/Department Chair is full-time administrator.',
                  'description' => 'S.2. The Dean/Department Chair is full-time administrator.',
                  'document_needed_list' => '- Copy of the PSG downloaded from CHED website
                                             - Portfolio of department chair with copies of the CV, TOR, certificate of appointment, employment, completed training, certificates of attendance in conferences, conventions, seminars, workshops, colloquia, for a and professional development activities
                                              - Awards and recognition earned by the department chairs and
                                              - Copy of the license, if necessary',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1344,
                  'parameter_item' => 'I.1. The Dean is assisted by Department Chair/s or their equivalent with appropriate/relevant educational experience.',
                  'description' => 'I.1. The Dean is assisted by Department Chair/s or their equivalent with appropriate/relevant educational experience.',
                  'document_needed_list' => '- Copy of the approved College/Branch and Department organizational structure
                                             - Copy of the approved functional statement of office the dean/director and office the department chair/academic head
                                             - Memo/letter/notice (samples) with marginal note from the dean/director to the chair/ academic head •
                                             - Proof of receipt of academic head of the said memoranda/letters/notices
                                             - Sample of letters/memoranda/ notices signed by the chairs/ academic heads, noted by the dean/director',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1345,
                  'parameter_item' => 'I.2. The Dean implements a supervisory program.',
                  'description' => 'I.2. The Dean implements a supervisory program.',
                  'document_needed_list' => ' - Copy of the Approved Supervisory Program of the Dean/Directory: Instruction, Research, Extension and Production
                                              - Copy of Dean’s Accomplishment reports (vis-à-vis the Supervisory Plan/Program) ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1346,
                  'parameter_item' => 'I.3. The Dean participates in the recruitment and promotion of faculty and staff.',
                  'description' => 'I.3. The Dean participates in the recruitment and promotion of faculty and staff.',
                  'document_needed_list' => ' - Copy of the approved Policy on the recruitment and promotion of faculty and support staff (University Code/Administrative Manual/Policies and Guidelines)
                                              - Documentation of process/ procedure in the recruitment and promotion of faculty and support staff from application to acceptance:

                                              Recruitment
                                                - Proof of receipt of the application letter
                                                - Memo/notice from the director to concern screening committee with proof of receipt
                                                - Evaluation Form for Applicant filled up by the screening committee
                                                - Endorsement for psychological exam from the dean/director with attachments (result of evaluation with demo teaching) to OVPAA/OVPBC
                                                - Appointment, if accepted (with result of psychological exam)

                                              Promotion
                                                - Memo from the OVPAA/OVPBC regarding submission to PASUC Evaluation
                                                - Memo from the dean/director (PASUC Evaluation) to the faculty members with proof of receipt
                                                - Proof of submission from the faculty members
                                                - List of promotions from PASUC Office
                                                - Memo from the HRD, regarding promotion with proof of submission from faculty members
                                                - Appointment from CS thru HRD',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1347,
                  'parameter_item' => 'I.4. The Dean, the faculty and the aministration work together for the improvement of the College/Academic Unit particularly in:',
                  'description' => 'I.4. The Dean, the faculty and the aministration work together for the improvement of the College/Academic Unit particularly in:',
                  'document_needed_list' => '- Notice of meetings with the faculty and the administration with proof of receipt
                                             - Minutes of the meeting with actual attendance sheet of faculty and the administration
                                             - Action photos of meetings with captions
                                             - Evaluation of the meeting ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1348,
                  'parameter_item' => 'I.4.1. setting standards and targets',
                  'description' => 'I.4.1. setting standards and targets',
                  'document_needed_list' => '- Minutes of the meeting (highlight the asked benchmark)
                                            - Copy of the College Development Plan, program, projects and activities with approval of local academic council/strategic planning committee',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '889',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1349,
                  'parameter_item' => 'I.4.2. planning of prgrams and other related activities',
                  'description' => 'I.4.2. planning of prgrams and other related activities',
                  'document_needed_list' => '- Minutes of the meeting (highlight the asked benchmark)
                                             - Copy of the College Development Plan, program, projects and activities with approval of local academic council/strategic planning committee',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '889',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1350,
                  'parameter_item' => 'I.4.3. implementing, monitoring and evaluation of plans, programs and other related activities',
                  'description' => 'I.4.3. implementing, monitoring and evaluation of plans, programs and other related activities',
                  'document_needed_list' => '- Program of invitation
                                             - Report of proceedings or narrative •
                                             - Actual attendance sheet •
                                             - Action photos of implementation of plans, programs and other related activities, with captions •
                                             - Copy of the College and Department Accomplishment reports (vis-à-vis of the Plan/Program) •
                                             - Evaluation  ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '889',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1351,
                  'parameter_item' => 'I.4.4. establishing linkages, partnerships and networking activities',
                  'description' => 'I.4.4. establishing linkages, partnerships and networking activities',
                  'document_needed_list' => ' - Matrix of linkages, partnerships and networks
                                              - Copies of the approved MOA/MOU
                                              - Action photos of the MOA/MOU signing and implementation of activities (documentation) ',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '889',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1352,
                  'parameter_item' => 'I.4.5. providing opportnities for professional growth and development for the faculty and staff',
                  'description' => 'I.4.5. providing opportnities for professional growth and development for the faculty and staff',
                  'document_needed_list' => '- Copies of approved letters of requests of faculty and staff to pursue higher education, attendance in trainings, seminars, conferences, conventions, colloquia and professional growth and development
                                             - Copy of the Special Orders and compliance report of the faculty members (copies of certificates of attendance and participation, report of proceedings, actions photos with captions and report on reimbursement, if applicable)',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '889',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1353,
                  'parameter_item' => 'I.4.6. preparing policies and guidelines on the internal administration and operation of the College/Acdemic Unit/ and',
                  'description' => 'I.4.6. preparing policies and guidelines on the internal administration and operation of the College/Acdemic Unit/ and',
                  'document_needed_list' => '- Minutes of the meeting (highlight the asked benchmark)
                                             - Copy of the College Development Plan, program, projects and activities with approval of local academic council/strategic planning committee',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '889',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1354,
                  'parameter_item' => 'I.4.7. preparing guidelines on the proper use and maintenance of facilities, equipment, supplis and materials, etc.',
                  'description' => 'I.4.7. preparing guidelines on the proper use and maintenance of facilities, equipment, supplis and materials, etc.',
                  'document_needed_list' => '- Minutes of the meeting (highlight the asked benchmark)
                                             - Copy of the proposed and approved guidelines on the proper use and maintenance of facilities, equipment, supplies and materials, etc.
                                             - Copies of the letters of request to use facilities, equipment, supplies and materials.
                                             - Evaluation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '889',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1355,
                  'parameter_item' => 'I.5. Definite criteria and procedures in the selection and promotion of the most qualified faculty and staff are observed',
                  'description' => 'I.5. Definite criteria and procedures in the selection and promotion of the most qualified faculty and staff are observed',
                  'document_needed_list' => '- Documentation of process/ procedure in the recruitment and promotion of faculty and support staff from application to acceptance:
                                             Recruitment
                                             - Proof of receipt of the
                                             application letter
                                             - Memo/notice from the director to concern screening committee with proof of receipt -
                                             Evaluation Form for Applicant filled up by the screening committee
                                             - Endorsement for psychological exam from the dean/director with attachments (result of evaluation with demo teaching) to OVPAA/OVPBC
                                             - Appointment, if accepted (with
                                             result of psychological exam)
                                             Promotion
                                             - Memo from the OVPAA/OVPBC regarding submission to PASUC
                                             Evaluation
                                             - Memo from the dean/director (PASUC Evaluation) to the faculty members with proof of receipt
                                             - Proof of submission from the faculty members
                                             - List of promotions from PASUC Office
                                             - Memo from the HRD, regarding promotion with proof of submission from faculty members
                                             - Appointment from CS thru HRD',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2',
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '50',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1356,
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
                  'id' => 1357,
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
                  'id' => 1358,
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
                  'id' => 1359,
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
                  'id' => 1360,
                  'parameter_item' => 'S.1.1. admission and retention policies',
                  'description' => 'S.1.1. admission and retention policies',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1361,
                  'parameter_item' => 'S.1.2. regirstration requirments',
                  'description' => 'S.1.2. regirstration requirments',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1362,
                  'parameter_item' => 'S.1.3. school fees',
                  'description' => 'S.1.3. school fees',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1363,
                  'parameter_item' => 'S.1.4. academic load',
                  'description' => 'S.1.4. academic load',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1364,
                  'parameter_item' => 'S.1.5. tranfers',
                  'description' => 'S.1.5. tranfers',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1365,
                  'parameter_item' => 'S.1.6. residence, course work, scholastic and graduation requirments',
                  'description' => 'S.1.6. residence, course work, scholastic and graduation requirments',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1366,
                  'parameter_item' => 'S.1.7. examination and grading system',
                  'description' => 'S.1.7. examination and grading system',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1367,
                  'parameter_item' => 'S.1.8. scholarship/grants/assistanships',
                  'description' => 'S.1.8. scholarship/grants/assistanships',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1368,
                  'parameter_item' => 'S.1.9. shifting and adding/dropping of course/s/subjects/s',
                  'description' => 'S.1.9. shifting and adding/dropping of course/s/subjects/s',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1369,
                  'parameter_item' => 'S.1.10. code of conduct and discipline and',
                  'description' => 'S.1.10. code of conduct and discipline and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1370,
                  'parameter_item' => 'S.1.11. others (please specify) ____________________________________________________________.',
                  'description' => 'S.1.11. others (please specify) ____________________________________________________________.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '51',
                  'parent_parameter_item_id' => '902',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1371,
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
                  'id' => 1372,
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
                  'id' => 1373,
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
                  'id' => 1374,
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
                  'id' => 1375,
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
                  'id' => 1376,
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
                  'id' => 1377,
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
                  'id' => 1378,
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
                  'id' => 1379,
                  'parameter_item' => 'S.3.1. personnel services',
                  'description' => 'S.3.1. personnel services',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '921',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1380,
                  'parameter_item' => 'S.3.2. Maintenance and Other Operating Expenses (MOOE)',
                  'description' => 'S.3.2. Maintenance and Other Operating Expenses (MOOE)',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '921',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1381,
                  'parameter_item' => 'S.3.3. capital outlay and',
                  'description' => 'S.3.3. capital outlay and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '921',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1382,
                  'parameter_item' => 'S.3.4. special projects.',
                  'description' => 'S.3.4. special projects.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '921',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1383,
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
                  'id' => 1384,
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
                  'id' => 1385,
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
                  'id' => 1386,
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
                  'id' => 1387,
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
                  'id' => 1388,
                  'parameter_item' => 'I.5.1. cultural development',
                  'description' => 'I.5.1. cultural development',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1389,
                  'parameter_item' => 'I.5.2. athletic and sports development',
                  'description' => 'I.5.2. athletic and sports development',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1390,
                  'parameter_item' => 'I.5.3. medical and dental services',
                  'description' => 'I.5.3. medical and dental services',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1391,
                  'parameter_item' => 'I.5.4. library',
                  'description' => 'I.5.4. library',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1392,
                  'parameter_item' => 'I.5.5. student body organization',
                  'description' => 'I.5.5. student body organization',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],


              [
                  'id' => 1393,
                  'parameter_item' => 'I.5.6. guidance and counseling',
                  'description' => 'I.5.6. guidance and counseling',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1394,
                  'parameter_item' => 'I.5.7. improvement of laboratories/shops',
                  'description' => 'I.5.7. improvement of laboratories/shops',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1395,
                  'parameter_item' => 'I.5.8. repair and maintenance of facilities and equipment',
                  'description' => 'I.5.8. repair and maintenance of facilities and equipment',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1396,
                  'parameter_item' => 'I.5.9. purchase of new equipment, supplies and materials',
                  'description' => 'I.5.9. purchase of new equipment, supplies and materials',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1397,
                  'parameter_item' => 'I.5.10. replacement of old and unservicable equipment',
                  'description' => 'I.5.10. replacement of old and unservicable equipment',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1398,
                  'parameter_item' => 'I.5.11. construction of new facilities',
                  'description' => 'I.5.11. construction of new facilities',
                'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1399,
                  'parameter_item' => 'I.5.12. improvement/expasion of physical plant',
                  'description' => 'I.5.12. improvement/expasion of physical plant',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1400,
                  'parameter_item' => 'I.5.13. extension and community services',
                  'description' => 'I.5.13. extension and community services',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1401,
                  'parameter_item' => 'I.5.14. disaster and risk reduction and',
                  'description' => 'I.5.14. disaster and risk reduction and',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1402,
                  'parameter_item' => 'I.5.15. auxillary services.',
                  'description' => 'I.5.15. auxillary services.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '52',
                  'parent_parameter_item_id' => '930',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                  'id' => 1403,
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
                  'id' => 1404,
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

              [
                  'id' => 1405,
                  'parameter_item' => 'S.1. The Institution has a approved procurement management system in consonance with Revised IRR of RA 9184 (Government Procurement Reform Act).',
                  'description' => 'S.1. The Institution has a approved procurement management system in consonance with Revised IRR of RA 9184 (Government Procurement Reform Act).',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1'
                  'accreditation_template_id' => '10',
                  'template_parameter_id' => '53',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1406,
                'parameter_item' => 'S.2. The Institution has a system of proper disposal on non-serviceable and condemned equipment, supplies and materials.',
                'description' => 'S.2. The Institution has a system of proper disposal on non-serviceable and condemned equipment, supplies and materials.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1407,
                'parameter_item' => 'S.3. The office has a storeroom for securing equipment, supplies and materials purchased.',
                'description' => 'S.3. The office has a storeroom for securing equipment, supplies and materials purchased.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1408,
                'parameter_item' => 'I.1. The Institution maintains a Supply Management Office (SMO) managed by qualified staff with specific fucntions and responsibilities.',
                'description' => 'I.1. The Institution maintains a Supply Management Office (SMO) managed by qualified staff with specific fucntions and responsibilities.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1409,
                'parameter_item' => 'I.2. The Bids and Awards Committee (BAC) is responsible for the procurement and deliveries of needed equipment, supplies and materials in accordance wth the approved Annual Procurement Plan (APP) and Project Management Plan(PPMP).',
                'description' => 'I.2. The Bids and Awards Committee (BAC) is responsible for the procurement and deliveries of needed equipment, supplies and materials in accordance wth the approved Annual Procurement Plan (APP) and Project Management Plan(PPMP).',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1410,
                'parameter_item' => 'I.3. The BAC performs its taks and responsibilties in accordance with recent procurement policies and official issuances.',
                'description' => 'I.3. The BAC performs its taks and responsibilties in accordance with recent procurement policies and official issuances.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1411,
                'parameter_item' => 'I.4. The SMO prepares, evaluate and submits the annual inventory of serviceable and non-serviceable facilities and equipment.',
                'description' => 'I.4. The SMO prepares, evaluate and submits the annual inventory of serviceable and non-serviceable facilities and equipment.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1412,
                'parameter_item' => 'I.5 .All approved requests for procurement are published in the Philippine governement Electronic Procurement (Phil-GEPS).',
                'description' => 'I.5 .All approved requests for procurement are published in the Philippine governement Electronic Procurement (Phil-GEPS).',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1413,
                'parameter_item' => 'O.1. The Institution has an afficient and effective Supply Management System.',
                'description' => 'O.1. The Institution has an afficient and effective Supply Management System.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '3'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1414,
                'parameter_item' => 'O.2. All procurement transactions are transparent.',
                'description' => 'O.2. All procurement transactions are transparent.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '3'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '53',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1415,
                'parameter_item' => 'S.1. The Institution has a system of records kepping.',
                'description' => 'S.1. The Institution has a system of records kepping.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1416,
                'parameter_item' => 'S.2. The Institution has policies and procedures to ensure the security and confidentiality of records.',
                'description' => 'S.2. The Institution has policies and procedures to ensure the security and confidentiality of records.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1417,
                'parameter_item' => 'S.3. Polocies and procedures on prompt release of records are in place.',
                'description' => 'S.3. Polocies and procedures on prompt release of records are in place.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1418,
                'parameter_item' => 'I.1. The Institution maintains a Records Management Office (RMO) managed by a qualified Records Officer.',
                'description' => 'I.1. The Institution maintains a Records Management Office (RMO) managed by a qualified Records Officer.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1419,
                'parameter_item' => 'I.2. A records system is installed in offices where it allows access to information needed by concerned parties.',
                'description' => 'I.2. A records system is installed in offices where it allows access to information needed by concerned parties.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1420,
                'parameter_item' => 'I.3. The Human Resource Management Office (HRMO) maintains accurate, up-to-date and systematic records of faculty and staff.',
                'description' => 'I.3. The Human Resource Management Office (HRMO) maintains accurate, up-to-date and systematic records of faculty and staff.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],


              [
                'id' => 1421,
                'parameter_item' => 'I.4. The following updated records are made available to concerned parties:',
                'description' => 'I.4. The following updated records are made available to concerned parties:',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1422,
                'parameter_item' => 'I.4.1. minutes of the Board of Regents/Trustees meetings',
                'description' => 'I.4.1. minutes of the Board of Regents/Trustees meetings',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '964',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],


              [
                'id' => 1423,
                'parameter_item' => 'I.4.2. minutes of the faculty meetings, e.g. minutes of the Academic Council meetings',
                'description' => 'I.4.2. minutes of the faculty meetings, e.g. minutes of the Academic Council meetings',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '964',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1424,
                'parameter_item' => 'I.4.3. faculty/non-teaching personnel individual files',
                'description' => 'I.4.3. faculty/non-teaching personnel individual files',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '964',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1425,
                'parameter_item' => 'I.4.4. faculty/non-teaching personnel performance evaluation results and',
                'description' => 'I.4.4. faculty/non-teaching personnel performance evaluation results and',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '964',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1426,
                'parameter_item' => 'I.4.5. other records such as:',
                'description' => 'I.4.5. other records such as:',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '964',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1427,
                'parameter_item' => 'I.4.5.1. student directory',
                'description' => 'I.4.5.1. student directory',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1428,
                'parameter_item' => 'I.4.5.2. alumni directory',
                'description' => 'I.4.5.2. alumni directory',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1429,
                'parameter_item' => 'I.4.5.3. permanent records of students',
                'description' => 'I.4.5.3. permanent records of students',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1430,
                'parameter_item' => 'I.4.5.4. reports of Director/Dean',
                'description' => 'I.4.5.4. reports of Director/Dean',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1431,
                'parameter_item' => 'I.4.5.5. annual reports',
                'description' => 'I.4.5.5. annual reports',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1432,
                'parameter_item' => 'I.4.5.6. accomplishment/progress reports',
                'description' => 'I.4.5.6. accomplishment/progress reports',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1433,
                'parameter_item' => 'I.4.5.7. scholarship records',
                'description' => 'I.4.5.7. scholarship records',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1434,
                'parameter_item' => 'I.4.5.8. statistical data',
                'description' => 'I.4.5.8. statistical data',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1435,
                'parameter_item' => 'I.4.5.9. financial records of students',
                'description' => 'I.4.5.9. financial records of students',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1436,
                'parameter_item' => 'I.4.5.10. inventory of property',
                'description' => 'I.4.5.10. inventory of property',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1437,
                'parameter_item' => 'I.4.5.11. proceedings of administrative investigation (if any) and',
                'description' => 'I.4.5.11. proceedings of administrative investigation (if any) and',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1438,
                'parameter_item' => 'I.4.5.12. others (please specify) ___________________________',
                'description' => 'I.4.5.12. others (please specify) ___________________________',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1439,
                'parameter_item' => 'O.1. The Institution has a commendable Records Management System.',
                'description' => 'O.1. The Institution has a commendable Records Management System.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '3'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '54',
                'parent_parameter_item_id' => '969',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1440,
                'parameter_item' => 'S.1. The Institution has an approved Strategic Development Plan (SDP) available in printed and/or electronic forms',
                'description' => 'S.1. The Institution has an approved Strategic Development Plan (SDP) available in printed and/or electronic forms',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '55',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1441,
                'parameter_item' => 'S.2. There is a system of monitoring the implementation of the SDP.',
                'description' => 'S.2. There is a system of monitoring the implementation of the SDP.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '55',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1442,
                'parameter_item' => 'I.1. The Institution\s Planning Unit plans, monitors and evaluates planned activities/targets',
                'description' => 'I.1. The Institution\s Planning Unit plans, monitors and evaluates planned activities/targets',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '55',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1443,
                'parameter_item' => 'I.2. The planning process is a cooperative and participative endeavor of the adminitration, the faculty, staff and the students',
                'description' => 'I.2. The planning process is a cooperative and participative endeavor of the adminitration, the faculty, staff and the students',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '55',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1444,
                'parameter_item' => 'I.3. The SDP is implemented, monitored, evaluated, reviewed and updated regulary.',
                'description' => 'I.3. The SDP is implemented, monitored, evaluated, reviewed and updated regulary.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '55',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1445,
                'parameter_item' => 'O.1. The SDP is congruent woth the VMGO as well as with the local, regional and national development goals and agenda',
                'description' => 'O.1. The SDP is congruent woth the VMGO as well as with the local, regional and national development goals and agenda',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '3'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '55',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1446,
                'parameter_item' => 'S.1. The Institution has an approved performance evaluation system for administrative personnel which includes the following items:',
                'description' => 'S.1. The Institution has an approved performance evaluation system for administrative personnel which includes the following items:',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1447,
                'parameter_item' => 'S.1.1 competence',
                'description' => 'S.1.1 competence',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '988',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1448,
                'parameter_item' => 'S.1.2. quality of work',
                'description' => 'S.1.2. quality of work',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '988',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1449,
                'parameter_item' => 'S.1.3. work ethic (puctuality, wise of time, etc)',
                'description' => 'S.1.3. work ethic (puctuality, wise of time, etc)',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '988',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1450,
                'parameter_item' => 'S.1.4. creative ability and innovativeness',
                'description' => 'S.1.4. creative ability and innovativeness',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '988',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1451,
                'parameter_item' => 'S.1.5. abilty to handle internal and external pressures and',
                'description' => 'S.1.5. abilty to handle internal and external pressures and',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '988',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1452,
                'parameter_item' => 'S.1.6. interpersonal relations.',
                'description' => 'S.1.6. interpersonal relations.',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '1'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '988',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1453,
                'parameter_item' => 'I.1. The Institution regularly monitors and evaluates the performance of the administrative personnel',
                'description' => 'I.1. The Institution regularly monitors and evaluates the performance of the administrative personnel',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1454,
                'parameter_item' => 'I.2. The results of performance evaluation of the administrative personnel are utilized:',
                'description' => 'I.2. The results of performance evaluation of the administrative personnel are utilized:',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '0',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1455,
                'parameter_item' => 'I.2.1. to improve performance and delivery of service and',
                'description' => 'I.2.1. to improve performance and delivery of service and',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '996',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],

              [
                'id' => 1456,
                'parameter_item' => 'I.2.2. for promotion',
                'description' => 'I.2.2. for promotion',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '2'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
                'parent_parameter_item_id' => '996',
                'status' => 'a',
                'created_at' => date('Y-m-d H:i:s')
              ],
              [
                'id' => 1457,
                'parameter_item' => 'O.1. The administrative personnel/staff have commendable performance',
                'description' => 'O.1. The administrative personnel/staff have commendable performance',
                'document_needed_list' => '',
                'tagged_documents' => '[]',
                'parameter_section_id' => '3'
                'accreditation_template_id' => '10',
                'template_parameter_id' => '56',
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
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 1301 AND id <= 1457');
        }
}
