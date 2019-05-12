<h2><?= $title?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name = "title" placeholder="Enter title">
    </div>
    
    <div class="form-group">
      <label for="exampleTextarea">Body</label>
      <textarea name="body" class="form-control" rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>