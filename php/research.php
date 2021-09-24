<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/research_style.css"
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "components/drawer.php";
    echo drawer($domain, "research")
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
        <section class="main_form_research">
            <section class="nav_research_container">
                <section class="research_completed_box">
                    <div class="research_circular_selector active" id="research_completed">

                    </div>
                    <p>
                        Research Completed
                    </p>
                </section>
                <section class="research_completed_box">
                    <div class="research_circular_selector" id="research_progress">

                    </div>
                    <p>
                        Research in Progress
                    </p>
                </section>
                <section class="research_completed_box">
                    <div class="research_circular_selector" id="project_dissertation">

                    </div>
                    <p>
                        project dissertation and thesis
                    </p>
                </section>
            </section>
            <form method="post" action="edit_information/academic_qualification.php">
                <section>
                    <h1>
                        Details About Completed Work
                    </h1>
                    <label>
                        Research Title:
                        <input type="text" value="submit">
                        <div>
                            <input type="button" value="more">
                            <input type="button" value="save">
                        </div>
                    </label>
                </section>
            </form>
        </section>


    </div>

</div>
<script rel="script" src="../js/drawer.js"></script>
</body>
</html>