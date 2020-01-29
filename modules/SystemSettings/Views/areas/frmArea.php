 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">

   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>areas/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="area_code">Area Code</label>
            <input name="area_code" type="text" value="<?= isset($rec['area_code']) ? $rec['area_code'] : set_value('area_code') ?>" class="form-control <?= isset($errors['area_code']) ? 'is-invalid':'is-valid' ?>" id="area_code" placeholder="Area Code">
              <?php if(isset($errors['area_code'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['area_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="area_name">Area Name</label>
            <input name="area_name" type="text" value="<?= isset($rec['area_name']) ? $rec['area_name'] : set_value('area_name') ?>" class="form-control <?= isset($errors['area_name']) ? 'is-invalid':'is-valid' ?>" id="area_name" placeholder="Area Name">
              <?php if(isset($errors['area_name'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['area_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Area Description</label>
            <textarea name="description" type="text" class="form-control <?= isset($errors['description']) ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Role Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
            <?php if(isset($errors['description'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="area_head_id">Area Head</label>
            <select name="area_head_id" class="form-control <?= isset($errors['dept_head_id']) ? 'is-invalid':'is-valid' ?>">
              <?php if(isset($rec['area_head_id'])): ?>
                <option value="<?= $rec['area_head_id'] ?>"><?= ucwords(name_on_system($rec['area_head_id'], $users, 'users')) ?></option>
              <?php else: ?>
                <option value="">Select Area Head</option>
              <?php endif; ?>

              <?php foreach($users as $user): ?>
                <option value="<?= $user['id'] ?>"><?= ucwords($user['firstname'].' '.$user['lastname']) ?></option>
              <?php endforeach; ?>
            </select>
             <?php if(isset($errors['area_head_id'])): ?>
                <div class="invalid-feedback">
                  <?= $errors['area_head_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
