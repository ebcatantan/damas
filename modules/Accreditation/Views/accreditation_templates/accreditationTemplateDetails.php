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
    <div class="col-md-12">
      <!-- $data["item_parameters"] -->
      <ul class="nav nav-tabs">
        <?php if(!empty(isset($item_parameters))): ?>
          <?php foreach ($item_parameters as $item_parameter): ?>
            <li class="nav-item">
              <a class="ml-2 btn btn-outline-secondary" onClick= "parameterItems(<?= $item_parameter['template_parameter_id'] ?>, <?= $item_parameter['accreditation_template_id'] ?>)"  href="#"><?= strtoupper($item_parameter['parameter_code']) ?><br><?= ucwords($item_parameter['title']) ?></a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <br>
  <div class="row">
    <table id="indicators-table" class="table">
      <thead class="thead-dark table-bordered">
        <tr class="text-center">
          <th scope="col">Indicators</th>
          <th scope="col">Document Needed</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php if(isset($parameter_items_views)): ?>
        <?php foreach ($parameter_items_views as $indicators): ?>
          <tr class="text-center">
            <td scope="col"><?= ucwords($indicators['parameter_item']) ?></td>
            <td scope="col"><?= ucwords($indicators['document_needed_list'])?></td>
            <td scope="col">Action</td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
      <tbody>
      </tbody>
    </table>

  </div>
</div>
<?php  echo view('Modules\Accreditation\Views\parameter_items\frmParameterItemModal'); ?>
<?php  //echo view('parammeter_items/frmParameterItemModal'); ?>
