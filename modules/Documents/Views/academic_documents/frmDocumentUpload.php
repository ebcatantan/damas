 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">

   </div>
 </div>
 <div class="row">
   <div class="col-md-6 offset-md-3">
     <?php if($_SESSION['user_details']['academic_program_id'] == 0): ?>
        <div class="alert alert-warning" role="alert">
          <big>Academic Program for user <?= strtoupper($_SESSION['uname']) ?> not set. <br>
          Ask the system administrator to set it for you!</big>
        </div>
     <?php endif; ?>
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>academic-documents/<?= isset($rec) ? 'edit-uploadede-file/'.$rec['id'] : 'upload-academic-program-file' ?>" method="post" enctype="multipart/form-data">
      <fieldset <?= $_SESSION['user_details']['academic_program_id'] == 0 ? 'disabled="disabled"': ''?>>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="document_type_code">Document Upload: </label>
            <input style="padding-bottom: 10px" name="document_type_code" type="file" value="<?= isset($rec['document_type_code']) ? $rec['document_type_code'] : set_value('document_type_code') ?>" class="<?= $errors['document_type_code'] ? 'is-invalid':'is-valid' ?>" id="document_type_code" placeholder="Document Type Code">
              <?php if($errors['document_type_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['document_type_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="document_type_id">Document Type</label>
            <select name="document_type_id" class="form-control <?= $errors['document_type_id'] ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['document_type_id'])): ?>
                <option value="<?= $rec['document_type_id'] ?>"><?= name_on_system($rec['document_type_id'], $document_types, 'document_types') ?></option>
              <?php else: ?>
                <option value="">Select Document Type of the File</option>
              <?php endif; ?>

              <?php foreach($document_types as $document_type): ?>
                <option value="<?= $document_type['id'] ?>"><?= strtoupper($document_type['document_type_code'].' - '.$document_type['document_type_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if($errors['document_type_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['document_type_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Document Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Document Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
            <?php if($errors['description']): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="department_id">File Department</label>
            <select name="department_id" class="form-control <?= $errors['department_id'] ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['department_id'])): ?>
                <option value="<?= $rec['department_id'] ?>"><?= name_on_system($rec['department_id'], $departments, 'departments') ?></option>
              <?php else: ?>
                <option value="">Select Department of File</option>
              <?php endif; ?>

              <?php foreach($departments as $department): ?>
                <option value="<?= $department['id'] ?>"><?= strtoupper($department['department_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if($errors['department_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['department_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="area_id">File Area</label>
            <select name="area_id" class="form-control <?= $errors['area_id'] ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['area_id'])): ?>
                <option value="<?= $rec['area_id'] ?>"><?= name_on_system($rec['area_id'], $areas, 'areas') ?></option>
              <?php else: ?>
                <option value="">Select Area of File</option>
              <?php endif; ?>

              <?php foreach($areas as $area): ?>
                <option value="<?= $area['id'] ?>"><?= strtoupper($area['area_code'].' - '.$area['area_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if($errors['area_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['area_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="academic_program_id">File Academic Program</label>
            <select name="academic_program_id" class="form-control <?= $errors['academic_program_id'] ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['academic_program_id'])): ?>
                <option value="<?= $rec['academic_program_id'] ?>"><?= name_on_system($rec['academic_program_id'], $academic_programs, 'academic_programs') ?></option>
              <?php else: ?>
                <option value="">Select Area of File</option>
              <?php endif; ?>

              <?php foreach($areas as $area): ?>
                <option value="<?= $area['id'] ?>"><?= strtoupper($area['area_code'].' - '.$area['area_name']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if($errors['academic_program_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['academic_program_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div> -->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Upload</button>
        </div>
      </div>
      </fieldset>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
