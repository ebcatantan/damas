<?php
namespace Modules\Accreditation\Controllers;

use Modules\Accreditation\Models\AccreditationTemplatesModel;
use Modules\Accreditation\Models\AccreditationLevelsModel;
use Modules\Accreditation\Models\ParameterItemsModel;
use Modules\SystemSettings\Models\AreasModel;
use Modules\SystemSettings\Models\ProgramsModel;
use Modules\UserManagement\Models\PermissionsModel;
// use Modules\UserManagement\Models\UsersModel;
use App\Controllers\BaseController;

class AccreditationTemplates extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-accreditation-template');
    	$model = new AccreditationTemplatesModel();
    	 //kailangan ito para sa pagination
       	$data['all_items'] = $model->getAccreditationTemplateWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['ats'] = $model->getAccreditataionTemplateWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Accrediation Templates";
        $data['viewName'] = 'Modules\Accreditation\Views\accreditation_templates\index';
        echo view('App\Views\theme\index', $data);
    }

		public function add_accreditation_template()
    {
    	$this->hasPermissionRedirect('add-accreditation-template');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$accre_level_model = new AccreditationLevelsModel;
			$data['accreditation_levels'] = $accre_level_model->where(['status'=>'a'])->findAll();


			$area_model = new AreasModel;
			$data['areas'] = $area_model->where(['status'=>'a'])->findAll();

			$program_model = new ProgramsModel;
			$data['academic_programs'] = $program_model->where(['status'=>'a'])->findAll();
			// print_r($data['academic_programs']); die();


    	helper(['form', 'url']);
    	$model = new AccreditationTemplatesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('accreditation_templates'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Create New Accreditation Template";
		        $data['viewName'] = 'Modules\Accreditation\Views\accreditation_templates\frmAccreditationTemplate';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addAccreditationTemplate($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('accreditation-templates'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('accreditation-templates'));
		        }
		    }
    	}
    	else
    	{
				$data['function_title'] = "Create New Accreditation Template";
				$data['viewName'] = 'Modules\Accreditation\Views\accreditation_templates\frmAccreditationTemplate';
				echo view('App\Views\theme\index', $data);
    	}
    }

    public function show_accreditation_template($id)
	 {

		$this->hasPermissionRedirect('show-accreditation-template');
		$data['permissions'] = $this->permissions;

		$parameter_item_model = new ParameterItemsModel();
		$model = new AccreditationTemplatesModel();
		$data['parameter_items'] = $parameter_item_model->getParameterItemsWithCondition(['accreditation_template_id'=>$id]);
		// print_r($data['parameter_items']); die();
		$data['accreditation_template'] = $model->getAccreditataionTemplateById($id);
		// print_r($data['accreditation_template']); die();
		$data['function_title'] = "Accreditation Template Details";
    $data['viewName'] = 'Modules\Accreditation\Views\accreditation_templates\accreditationTemplateDetails';
    echo view('App\Views\theme\index', $data);
	}



    public function edit_accreditation_template($id)
    {
    	$this->hasPermissionRedirect('edit-accreditation-template');
			$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$accre_level_model = new AccreditationLevelsModel;
			$data['accreditation_levels'] = $accre_level_model->where(['status'=>'a'])->findAll();

			$area_model = new AreasModel;
			$data['areas'] = $area_model->where(['status'=>'a'])->findAll();

			$program_model = new ProgramsModel;
			$data['academic_programs'] = $program_model->where(['status'=>'a'])->findAll();

    	helper(['form', 'url']);
    	$model = new AccreditationTemplatesModel();
			$data['rec'] = $model->find($id);
			// die("here");

			if(!empty($_POST))
    	{
	    	if (!$this->validate('accreditation_templates'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Modify Accreditation Template Details";
		        $data['viewName'] = 'Modules\Accreditation\Views\accreditation_templates\frmAccreditationTemplate';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->editAccreditationTemplate($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have modified a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('accreditation-templates'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in modifying a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('accreditation-templates'));
		        }
		    }
    	}
    	else
    	{
				$data['function_title'] = "Modify Accreditation Template Details";
				$data['viewName'] = 'Modules\Accreditation\Views\accreditation_templates\frmAccreditationTemplate';
				echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_accreditation_template($id)
    {
    	$this->hasPermissionRedirect('delete-accreditation-template');

    	$model = new AccreditationTemplatesModel();
    	$model->deleteAccreditationTemplate($id);
    }

}
