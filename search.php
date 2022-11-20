<?php include"header.php" ?>

<div class="bg-search sp-height">
    <div class="uk-position-absolute" style="left: 10%; top: 20%;">
        <div class="uk-card uk-card-body uk-card-default">
            <form action="results.php" method="get">
                <h2 class="uk-text-center">Search</h2>
                <div class="uk-flex uk-width-1-1">
                    <input type="text" class="uk-input" placeholder="Search..." required name="query">
                    <button class="uk-button uk-button-secondary uk-margin-small-left" type="submit">Find</button>
                </div>
            </form>
        </div>
    </div>
</div>|


<?php include"footer.php" ?>