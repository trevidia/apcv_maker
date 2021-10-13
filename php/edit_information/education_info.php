<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">
</head>

<body>
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "../components/drawer.php";
        echo drawer($domain, "edit");
        ?>
        <?php
        /* TODO form container for the apcv site
     *  write all your code inside the div with id of form-container
     */
        ?>
        <div id="form-container">
            <?php
            include_once "../../php/components/edit_info_nav.php";
            echo edit_info_nav('education');
            /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
            ?>

            <div>
                <h1> Education Info</h1>
                <div id="info-1">
                    <div id="education">
                        University of Ibadan
                    </div>
                    <p>
                        1/10/1990 - 1/10/1994
                    </p>
                    <div>
                        <a href="education_info_edit.php">
                            <img src="../../static/edit_icon.svg" alt="edit" style="cursor: pointer;" class="editbtn">
                        </a>
                        <img src="../../static/delete_icon.svg" alt="delete" style="cursor: pointer;" class="delete">
                    </div>

                </div>
                <div id="info-2">
                    <div id="education">
                        University of Lagos
                    </div>
                    <p>
                        1/10/1995 - 1/10/2000
                    </p>
                    <div>
                        <a href="education_info_edit.php">
                            <img src="../../static/edit_icon.svg" alt="edit" style="cursor: pointer;" class="editbtn">
                        </a>

                        <img src="../../static/delete_icon.svg" alt="delete" style="cursor: pointer;" class="delete">
                    </div>

                </div>
                <div id="info-3">
                    <div id="education">
                        University of Lagos
                    </div>
                    <p>
                        1/10/1995 - 1/10/2000
                    </p>
                    <div>
                        <a href="education_info_edit.php">
                            <img src="../../static/edit_icon.svg" alt="edit" style="cursor: pointer;" class="editbtn">
                        </a>
                        <img src="../../static/delete_icon.svg" alt="delete" style="cursor: pointer;" class="delete">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>

</html>