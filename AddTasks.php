<?php
require ('header.php');
?>

<div class="container">
    <form action="" method="post" class="col-3">
        <div class="my-2">
            <label>Title task</label></br>
            <input class="input_field" type="text" id="nameTitle" name="nameTitle" placeholder="Title task" required>
        </div>
        <div class="my-2">
            <label>Description</label></br>
            <textarea class="input_field"  name="description" id="description" required></textarea>
        </div>
        <div class="my-2">
            <select class="form-select" id="categoryId" aria-label="Select a category">
                <option selected>Select a category</option>
                <option value="0">Home</option>
                <option value="1">Family</option>
                <option value="2">Other</option>
            </select>
        </div>
    </form>
    <div class="col-3">
        <button id="add_form" class="btn btn-primary">Add task</button>
    </div>
</div>
<?php
require ('footer.php');
?>