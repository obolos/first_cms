<?php ?>

<form action="" method="post">
    <div class="form-group">
      <label for="cat-title">Update Item</label>
      <input id="cat-title" type="text" name="cat_title" class="form-control" value="<?php if(isset($text)) echo $text; ?>">
    </div>
        <div class="form-group">
            <input type="submit" value="Update Category" name="update" class="btn btn-primary">
        </div>


</form>
