<?php 
require('header.php');
if(!$_SESSION['user']){
    header('Location: /SignIn.php');
    exit;
}
include './getData.php';
?>
<h1>Dashboard, <?php echo $_SESSION['user']['username'] ;?></h1>
<div class="todo-list container">
    <?php  foreach($categories as $category) { 
       $arrayCategory[$category['id']] = $category['Title'];
    };?>
    <?php foreach($result as $row) { ?>
        <div class="my-2 p-3 bg-light d-flex rounded justify-content-between" id="<?php echo $row["id"]; ?>">
            <div class="d-flex">
                <div>
                    <span>
                        <input type="checkbox">
                    </span>
                </div>
                <div>
                    <div>
                        <span class="px-3">
                            <?php echo $row["Title"]; ?>
                        </span>
                    </div>
                    <div>
                        <small class="px-3">
                            <?php echo $row["Description"]; ?>
                        </small>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-success"><?php echo $arrayCategory[$row["Category_id"]]; ?></button>
                <button type="button" class="btn btn-secondary" onclick="deleteTask(this)" data-id="<?php echo $row["id"]; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                    </svg>
                </button>
            </div>
        </div>
    <?php } ?>

    <div class="px-0">
        <a href="AddTasks.php" class="btn btn-primary">Add tasks</a>
    </div>
</div>
<?php
require('footer.php');
?>