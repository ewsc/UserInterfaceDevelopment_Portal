<?php include"header.php" ?>

<div class="bg-search sp-height uk-background-cover">
    <div class="uk-container">
        <div class="uk-margin-large-top">
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
    </div>
</div>


<?php include"footer.php" ?>