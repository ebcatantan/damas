<?php
namespace Modules\Documents\Models;

use CodeIgniter\Model;

class AcademicDocumentsModel extends \CodeIgniter\Model
{

    protected $table = 'academic_documents';

    protected $allowedFields = ['title', 'document_name', 'document_type_id', 'description', 'area_id', 'department_id', 'academic_program_id', 'uploader_id', 'status', 'created_at','updated_at', 'deleted_at'];

  public function getAcademicDocumentWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getAcademicDocumentWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str  = "SELECT a.*, b.document_type_code, b.document_type_name, c.area_code, c.area_name, d.department_name, e.program_name, f.lastname, f.firstname FROM academic_documents a ";
    $str .= "LEFT JOIN document_types b ON a.document_type_id = b.id ";
    $str .= "LEFT JOIN areas c ON a.area_id = c.id ";
    $str .= "LEFT JOIN departments d ON a.department_id = d.id ";
    $str .= "LEFT JOIN academic_programs e ON a.academic_program_id = e.id ";
    $str .= "LEFT JOIN users f ON a.uploader_id = f.id ";
    $str .=" WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];

    // die($str);
		$query = $db->query($str);
	  return $query->getResultArray();
	}

	public function getAcademicDocuemntById($id)
	{
		$db = \Config\Database::connect();

		$str  = "SELECT a.*, b.document_type_code, b.document_type_name, c.area_code, c.area_name, d.department_name, e.program_name, f.lastname, f.firstname FROM academic_documents a ";
    $str .= "LEFT JOIN document_types b ON a.document_type_id = b.id ";
    $str .= "LEFT JOIN areas c ON a.area_id = c.id ";
    $str .= "LEFT JOIN departments d ON a.department_id = d.id ";
    $str .= "LEFT JOIN academic_programs e ON a.academic_program_id = e.id ";
    $str .= "LEFT JOIN users f ON a.uploader_id = f.id ";
    $str .=" WHERE a.id = ".$id;

    // die($str);
		$query = $db->query($str);
	  return $query->getResultArray();
	}

	// public function getAcademicDocumentWithFunction($args = [])
	// {
	// 	$db = \Config\Database::connect();
  //
	// 	$str = "SELECT * FROM document_types WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
	// 	$query = $db->query($str);
	//   return $query->getResultArray();
	// }

    public function getDepartments()
  	{
  	    return $this->findAll();
  	}

    public function addDocumentType($val_array = [])
  	{
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  	    return $this->save($val_array);
  	}

    public function editDocumentType($val_array = [], $id)
  	{
  		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';
  		return $this->update($id, $val_array);
  	}

    public function deleteDocumentType($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
