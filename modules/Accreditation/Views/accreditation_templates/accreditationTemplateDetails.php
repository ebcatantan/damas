<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Name</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['template_code'].' - '.$accreditation_template[0]['template_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($accreditation_template[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Academic Program</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['program_name'].' - '.$accreditation_template[0]['program_description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Accreditation Level</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['accreditation_level']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Area</span>
        <span class="field-value"><?= strtoupper($accreditation_template[0]['area_code'].' - '.$accreditation_template[0]['area_name']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('accreditation_templates','edit-accreditation-template', $permissions, $accreditation_template[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
<hr>
<div class="col-md-3">
 <?php user_add_link('parameter_items', $_SESSION['userPermmissions']) ?>
</div>
<br>
<div class="container" id="parameter_items">
  <div class="row">
    <!-- <table class="table">
      <thead class="thead-dark table-bordered">
        <tr class="text-center">
          <th scope="col">Parameter</th>
          <th scope="col">Document Needed</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    -->
    item here
  </div>
</div>
<?php  echo view('Modules\Accreditation\Views\parameter_items\frmParameterItemModal'); ?>
<?php  //echo view('parammeter_items/frmParameterItemModal'); ?>
