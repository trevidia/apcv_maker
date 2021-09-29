<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/research_style.css"
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "../components/drawer.php";
    echo drawer($domain, ["research", "inProgress"])
    ?>
    <?php
    /* TODO form container for the apcv site
     *  write all your code inside the div with id of form-container
     */
    ?>
    <div id="form-container">
        <?php
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <form method="post" action="">
            <section class="research_completed_form">
                <h1>
                    Brief Details about the Research Work in Progress
                </h1>
                <div>
                    <p>
                        <label for="research_title">
                            Research Title:
                        </label>
                    </p>
                    <input type="text" name="research_title" id="research_title" placeholder="submit">
                </div>
                <div>
                    <p>
                        <label for="details">
                            Details about research work done:
                        </label>
                    </p>
                    <textarea name="details" id="details"></textarea>
                </div>

                <div class="button_bar">
                    <input type="button" value="More" class="black_button">
                    <input type="submit" value="Save" class="black_button">
                </div>
            </section>
        </form>


    </div>

</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>