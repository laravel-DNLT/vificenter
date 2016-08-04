<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="category" class="col-md-2 control-label">
                Category
            </label>
            <div class="col-md-10">
                <select name="sltParent"  class="form-control">
                    <option value="0">Please choose the category</option>
                    <?php cate_parent($cate,0,"--",old('sltParent'));?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">
                Title
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="title" autofocus
                       id="title">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-md-2 control-label">
                Price
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="price"
                       id="price" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-md-2 control-label">
                Image
            </label>
            <div class="col-md-10">
                <input type="file" class="form-control" name="image"
                       id="image">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-2 control-label">
                Description
            </label>
            <div class="col-md-10">
        <textarea class="form-control" name="descriptions" rows="14"
                  id="descriptions"></textarea>
            </div>
        </div>
    </div>
</div>