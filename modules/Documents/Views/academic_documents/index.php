 <!-- <div class="row">
   <div class="col-md-3"></div>
   <div class="col-md-6">
     <div class="row">
       <?php file_upload_link('upload-academic-program-file', $_SESSION['userPermmissions'], 'academic_program_file_upload', 'btn btn-outline-secondary btn-block') ?>
       <?php file_upload_link('upload-area-file', $_SESSION['userPermmissions'], 'area_file_upload', 'btn btn-outline-success btn-block') ?>
       <?php file_upload_link('upload-department-file', $_SESSION['userPermmissions'], 'department_file_upload', 'btn btn-outline-info btn-block') ?>
     </div>
   </div>
 </div>
 <br> -->
 <div class="row">
   <div class="col-md-6 offset-1">
     <div class="input-group">
      <input type="text" name="search_item" class="form-control" placeholder="Search for documents">
      <div class="input-group-append">
        <button class="btn btn-dark" type="button">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
   </div>
   <div class="col-md-4">
     <?php file_upload_link('upload-academic-document', $_SESSION['userPermmissions'], 'academic_document_upload', 'btn btn-info btn-block', 0) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Document Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php if (isset($academic_documents) && count($academic_documents) != 0): ?>
        <?php foreach($academic_documents as $academic_document): ?>
          <tr id="<?php echo $academic_document['id']; ?>">
            <th scope="row"><?= $cnt++ ?></th>
            <td>
              <a href="<?= $academic_document['doc_path'] ?>" target="_blank"><i class="far fa-file-alt"></i> VIEW DOCUMENT</a>
              <?php echo strtoupper($academic_document['doc_name']) ?>
            </td>
            <td><?= ucwords($academic_document['description']) ?></td>
            <td class="text-center">
              <?php
              users_action('academic_documents', $_SESSION['userPermmissions'], $academic_document['id']);
              ?>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('document_types', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>