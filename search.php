<?php include"header.php" ?>

<div class="uk-container uk-height-1-1">
    <div class="uk-position-absolute uk-position-center">
        <form action="results.php" method="get">
            <h2 class="uk-text-center">Search</h2>
            <div class="uk-flex uk-width-1-1">
                <input type="text" class="uk-input" placeholder="Search..." required name="query">
                <button class="uk-button uk-button-default uk-margin-small-left" type="submit">Find</button>
            </div>
        </form>
    </div>
</div>


<?php include"footer.php" ?>