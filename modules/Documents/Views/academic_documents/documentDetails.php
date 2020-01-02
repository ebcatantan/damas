<div class="row">
  <div class="col-md-2 offset-md-3">
    <?php file_upload_link('upload-academic-program-file', $_SESSION['userPermmissions'], 'academic_program_file_upload', 'btn btn-outline-secondary btn-block') ?>
  </div>
  <div class="col-md-2">
    <?php file_upload_link('upload-area-file', $_SESSION['userPermmissions'], 'area_file_upload', 'btn btn-outline-success btn-block') ?>
  </div>
  <div class="col-md-2">
    <?php file_upload_link('upload-department-file', $_SESSION['userPermmissions'], 'department_file_upload', 'btn btn-outline-info btn-block') ?>
  </div>
</div>
<br>
<div class="row">
   <div class="col-md-6 offset-3">
     <div class="input-group">
      <input type="text" name="search_item" class="form-control" placeholder="Search for documents">
      <div class="input-group-append">
        <button class="btn btn-dark" type="button">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Name</span>
        <span class="field-value">
          <a href="<?= $document['doc_path'] ?>" target="_blank"><i class="far fa-file-alt"></i>OPEN</a>
          <?= strtoupper($document[0]['doc_name']) ?>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucwords($document[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Type</span>
        <span class="field-value"><?= strtoupper($document[0]['document_type_code'].' - '.$document[0]['document_type_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Area</span>
        <span class="field-value"><?= strtoupper($document[0]['area_code'].' - '.$document[0]['area_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Document Department</span>
        <span class="field-value"><?= strtoupper($document[0]['department_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Academic Program</span>
        <span class="field-value"><?= strtoupper($document[0]['program_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Uploader</span>
        <span class="field-value"><?= strtoupper($document[0]['lastname'].', '.$document[0]['firstname']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('document_types','edit-document-type', $permissions, $document_type[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
