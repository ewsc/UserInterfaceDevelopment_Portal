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
            <input type="text" class="uk-input uk-width-1-1" required placeholder="Input name..." name="name" value="">
        </label>
        <hr>
        <label>
            <h3>Give a short description</h3>
            <textarea type="text" class="uk-textarea uk-width-1-1 width-full" required rows="5" cols="6" maxlength="500" placeholder="Give a short description..."  name="desc_short"></textarea>
        </label>
        <hr>
        <label>
            <h3>Give a full description</h3>
            <textarea id="area" type="text" class="uk-textarea uk-width-1-1 width-full" required rows="8" cols="6" maxlength="10000" placeholder="Give a full description..."  name="desc_full"></textarea>
        </label>
        <hr>
        <label>
            <h3>Upload image</h3>
            <input type="file" class="uk-button uk-button-default uk-button-body" accept="image/jpeg"  name="image">
        </label>
        <hr>
        <label>
            <h3>(Timeline) Input years, separated with single space</h3>
            <textarea type="text" class="uk-textarea uk-width-1-1 width-full" rows="5" cols="6" maxlength="500" placeholder="Give a short description..."  name="years"></textarea>
        </label>
        <hr>
        <label>
            <h3>(Timeline) Input actions, happened in that years, separated with single slash ("/")</h3>
            <textarea type="text" class="uk-textarea uk-width-1-1 width-full" rows="5" cols="6" maxlength="500" placeholder="Give a short description..."  name="actions"></textarea>
        </label>
        <hr>
        <label>
            <h3>Youtube Link</h3>
            <input type="text" class="uk-input uk-width-1-2" placeholder="Youtube video ID..."  name="link">
        </label>
        <hr>
        <div class="uk-margin-medium-bottom uk-align-right">
            <button type="submit" class="uk-button uk-button-secondary uk-button-body">
                Add!
            </button>
        </div>
    </form>
</div>


<?php include"footer.php" ?>
