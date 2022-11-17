<?php
    $conn = null;
    include"header.php";
?>

<div class="uk-container">
    <form action="add_new.php" method="post" enctype="multipart/form-data">
        <h2 class="uk-margin-medium-top">Add new article</h2>
        <hr>
        <label>
            <h3>Input name</h3>
            <input type="text" class="uk-input uk-width-1-1" required placeholder="Input name..." name="name" value="" title="Accept numbers and letters only">
        </label>
        <hr>
        <label>
            <h3>Give a short description</h3>
            <textarea type="text" class="uk-input uk-width-1-1 width-full" required rows="3" cols="6" maxlength="500" placeholder="Give a short description..."  name="desc_short" title="Accept numbers and letters only"></textarea>
        </label>
        <hr>
        <label>
            <h3>Give a full description</h3>
            <textarea type="text" class="uk-textarea uk-width-1-1 width-full" required rows="7" cols="6" maxlength="3000" placeholder="Give a full description..."  name="desc_full" title="Accept numbers and letters only"></textarea>
        </label>
        <hr>
        <label>
            <h3>Upload image</h3>
            <input type="file" class="uk-button uk-button-default uk-button-body" accept="image/jpeg"  name="image">
        </label>
        <hr>
        <label>
            <h3>Youtube Link</h3>
            <input type="url" class="uk-input uk-width-1-2" placeholder="Youtube link..."  name="link">
        </label>
        <hr>
        <div class="uk-margin-medium-bottom uk-align-right">
            <button type="submit" class="uk-button uk-button-primary uk-button-body">
                Add!
            </button>
        </div>
    </form>
</div>

<?php include"footer.php" ?>
