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
    echo drawer($domain, ["research", "completed"])
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
        <!-- <form method="post" action=""> -->
            <section class="research_completed_form">
                <h1>
                    Details About Completed Work
                </h1>
                <div id="forms">
                    <div class="form-1">
                        <div>
                            <p>
                                <label for="research_title">
                                    Research Title:
                                </label>
                            </p>
                            <input type="text" name="research_title" id="research_title" placeholder="submit">
                        </div>
                    </div>
                </div>

                <div class="button_bar">
                    <input type="button" value="+ Add More" class="black_button">
                    <input type="submit" value="Save" class="black_button">
                </div>
            </section>
        <!-- </form> -->


    </div>

</div>
<script rel="script" src="../../js/add_more.js"></script>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>