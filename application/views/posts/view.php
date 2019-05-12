<h2><?php echo $post['title'];?></h2>
<small>Posted On: <?php echo $post['created_at']?></small>
<div class="post-body">
<?php echo $post['body'];?>
</div>

<hr>
<?php echo form_open('/posts/delete/'.$post['Id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
</form>

<a class="btn btn-secondary" href="<?php echo base_url(); ?>
posts/edit/<?php echo $post['slug']; ?>">
Edit
</a>