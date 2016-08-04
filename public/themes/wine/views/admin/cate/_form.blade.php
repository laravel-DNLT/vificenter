<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="category" class="col-md-2 control-label">
                Category
            </label>
            <div class="col-md-10">
                <select name="sltParent" class="form-control">
                    <option value="0">Please choose the category</option>
                    <?php cate_parent($parent);?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">
                Title
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="title" autofocus
                       id="title" value="">
            </div>
        </div>
    </div>
</div>