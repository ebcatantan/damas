<?php
namespace Modules\Accreditation\Models;

use CodeIgniter\Model;

class ParameterItemsModel extends \CodeIgniter\Model
{
    protected $table = 'parameter_items';

    protected $allowedFields = ['parameter_item', 'description', 'document_needed_list', 'tagged_documents', 'parameter_section_id', 'accreditation_template_id', 'template_parameter_id', 'parent_parameter_item_id', 'status', 'created_at','updated_at', 'deleted_at'];

  public function getParameterItemsWithAccreditationTemplateId($accreditation_template_id)
	{
    return $this->where(['accreditation_template_id'=>$accreditation_template_id, 'status'=>'a'])->findAll();
	}

  public function getParameterItems($conditions = [])
	{
    $conditions['status'] = 'a';
    // print_r($conditions);
    foreach($conditions as $key => $val)
    {
      $this->where($key, $val);
    }
    return $this->findAll();
	}



	// public function getAccreditataionTemplateWithFunction($args = [])
	// {
	// 	$db = \Config\Database::connect();
  //
	// 	$str = "SELECT a.*, b.accreditation_level, c.program_name, c.description, d.area_code, d.area_name FROM accreditation_templates a ";
  //   $str .= "LEFT JOIN accreditation_levels b ON a.accreditation_level_id = b.id ";
  //   $str .= "LEFT JOIN academic_programs c ON a.academic_program_id = c.id ";
  //   $str .= "LEFT JOIN areas d ON a.area_id = d.id ";
  //   $str .=" WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
  // 	$query = $db->query($str);
	//   return $query->getResultArray();
	// }

    public function addParameterItem($val_array = [])
  	{
  		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
  		$val_array['status'] = 'a';

      return $this->save($val_array);
  	}

    public function updateDocumentsTagged($tagged_document = [], $id)
  	{
      $data['tagged_documents'] = '['.implode(',',$tagged_document).']';
  		$data['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
      // return $data;
  		return $this->update($id, $data);
  	}
  //
  //   public function deleteArea($id)
	// {
	// 	$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	// 	$val_array['status'] = 'd';
	// 	return $this->update($id, $val_array);
	// }
}
