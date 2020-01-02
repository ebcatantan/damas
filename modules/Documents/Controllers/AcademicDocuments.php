<?php
namespace Modules\Documents\Controllers;

use Modules\Documents\Models\AcademicDocumentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\UserDetailsModel;
use Modules\Documents\Models\DocumentTypesModel;
use Modules\SystemSettings\Models\AreasModel;
use Modules\SystemSettings\Models\DepartmentsModel;
use Modules\SystemSettings\Models\ProgramsModel;
use App\Controllers\BaseController;

class AcademicDocuments extends BaseController
{
	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);

		$user_details_model = new UserDetailsModel();
		$user_credentials = $user_details_model->where('user_id', $_SESSION['uid'])->find();

		if(!isset($_SESSION['user_details']))
		{
			$_SESSION['user_details'] = [
				'user_id' => $user_credentials[0]['user_id'],
				'area_id' => $user_credentials[0]['area_id'],
				'academic_program_id' => $user_credentials[0]['academic_program_id'],
			];
		}

	  // print_r($_SESSION['user_details']['academic_program_id']); die();
	}

    public function index($offset = 0)
    {
			// print_r($_SESSION['user_details']); die();
    	$this->hasPermissionRedirect('list-academic-document');

    	$model = new AcademicDocumentsModel();

     	$data['all_items'] = $model->getAcademicDocumentWithCondition(['status'=> 'a']);
     	$data['offset'] = $offset;

      $data['academic_documents'] = $model->getAcademicDocumentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

			// print_r($data['academic_documents']); die();

      $data['function_title'] = "Academic Document List";
      $data['viewName'] = 'Modules\Documents\Views\academic_documents\index';
      echo view('App\Views\theme\index', $data);
    }

    public function show_academic_document($id)
	 {

		$this->hasPermissionRedirect('show-academic-document');
		$data['permissions'] = $this->permissions;
		// $user_model = new UsersModel();
		// $data['users'] = $user_model->findAll();

		$model = new AcademicDocumentsModel();

		$data['document'] = $model->getAcademicDocuemntById($id);
		$data['function_title'] = "Academic Document Details";
    $data['viewName'] = 'Modules\Documents\Views\academic_documents\documentDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function upload_academic_program_file()
    {
    	$this->hasPermissionRedirect('upload-academic-program-file');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_types = new DocumentTypesModel();
			$data['document_types'] = $model_document_types->where('status', 'a')->findAll();

			$model_departments = new DepartmentsModel();
			$data['departments'] = $model_departments->where('status', 'a')->findAll();

			$model_area = new AreasModel();
			$data['areas'] = $model_area->where('status', 'a')->findAll();

			$model_programs = new ProgramsModel();
			$data['academic_programs'] = $model_programs->where('status', 'a')->findAll();

			// die("here");
    	helper(['form', 'url']);
    	$model = new AcademicDocumentsModel();

    	if(!empty($_POST))
    	{
				print_r($_FILES);
				print_r($_POST); die();
	    	if (!$this->validate('document_type'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Document Type";
		        $data['viewName'] = 'Modules\Dcuments\Views\document_type\frmDocumentType';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDocumentType($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('document-types'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('document-types'));
		        }
		    }
    	}
    	else
    	{
					// die("here");
	    	  $data['function_title'] = "Upload Academic Program Document";
	        $data['viewName'] = 'Modules\Documents\Views\academic_documents\frmDocumentUpload';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    // public function edit_document_type($id)
    // {
    // 	$this->hasPermissionRedirect('edit-document-type');
    // 	helper(['form', 'url']);
    // 	$model = new DocumentTypesModel();
    // 	$data['rec'] = $model->find($id);
		//
    // 	$data['permissions'] = $this->permissions;
		//
    // 	if(!empty($_POST))
    // 	{
	  //   	if (!$this->validate('document_type'))
		//     {
		//     	$data['errors'] = \Config\Services::validation()->getErrors();
		//         $data['function_title'] = "Modify Document Type";
		//         $data['viewName'] = 'Modules\Documents\Views\document_type\frmDocumentType';
		//         echo view('App\Views\theme\index', $data);
		//     }
		//     else
		//     {
		//     	if($model->editDocumentType($_POST, $id))
		//         {
		//         	$_SESSION['success'] = 'You have updated a record';
		// 					$this->session->markAsFlashdata('success');
		//         	return redirect()->to(base_url('document-types'));
		//         }
		//         else
		//         {
		//         	$_SESSION['error'] = 'You an errot in updating a record';
		// 			$this->session->markAsFlashdata('error');
		//         	return redirect()->to( base_url('document-types'));
		//         }
		//     }
    // 	}
    // 	else
    // 	{
	  //   	$data['function_title'] = "Modify Area";
	  //       $data['viewName'] = 'Modules\Documents\Views\document_types\frmDocumentType';
	  //       echo view('App\Views\theme\index', $data);
    // 	}
    // }
		//
    // public function delete_document_type($id)
    // {
    // 	$this->hasPermissionRedirect('delete-document-type');
		//
    // 	$model = new DocumentTypesModel();
    // 	$model->deleteDocumentType($id);
    // }
}
