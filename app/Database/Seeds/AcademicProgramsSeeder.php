<?php namespace App\Database\Seeds;

class AcademicProgramsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'academic_programs';

        public function run()
        {
                $data = [
                    [
                        'program_name' => 'bsit',
                        'description' => 'bachelor of science in information technology',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'program_name' => 'bsece',
                        'description' => 'bachelor of science in electronic and communications engineering',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'program_name' => 'bsme',
                        'description' => 'bachelor of science in mechanical engineering',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'program_name' => 'bsa',
                        'description' => 'bachelor of science in accountancy',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'program_name' => 'bsba-mm',
                        'description' => 'bachelor of science in business administration major in marketing management',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                      'program_name' => 'bsba-hr',
                      'description' => 'bachelor of science in business administration major in human resources',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'program_name' => 'bsoa',
                        'description' => 'bachelor of science in office administration major in legal transcription',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'program_name' => 'bsed-math',
                        'description' => 'bachelor of science in education major in mathematics',
                        'program_head_id' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
