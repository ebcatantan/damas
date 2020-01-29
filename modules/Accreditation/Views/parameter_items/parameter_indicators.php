<div class="col-12">
  <h3 id="title"><?= strtoupper($parameterName['parameter_code']) ?><br><?= ucwords($parameterName['title']) ?></h3>
  <table id="indicators-table" class="table">
    <thead class="thead-dark table-bordered">
      <tr class="text-center">
        <th scope="col">Indicators</th>
        <th scope="col">Document Needed</th>
        <th scope="col">Attached Documents</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($parameter_items_views)): ?>
        <?php foreach ($parameter_items_views as $indicators): ?>
          <tr class="text-center">
            <td scope="col"><?= ucwords($indicators['parameter_item']) ?></td>
            <td scope="col"><?= ucwords($indicators['document_needed_list'])?></td>
            <td scope="col">
              <!-- <button id="document_tagging" data-parameterItem="<?= $indicators['id'] ?>" data-toggle="modal" data-target="#documentListForTagging" class="btn btn-info btn-sm"> -->
              <?php if (empty($indicators['tagged_documents'])): ?>
                [No Tagged Documents]
              <?php else: ?>
                <?php getdocuments($indicators['tagged_documents'], $documents) ?>
              <?php endif; ?>
              <br>
              <button onClick= "getAllDocuments(<?=$indicators['id']?>,<?= $indicators['accreditation_template_id'] ?>)" class="btn btn-info btn-sm">
                <i class="fas fa-tags"></i> Tag Document(s)
              </button>
            </td>
            <td scope="col">Action</td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>
