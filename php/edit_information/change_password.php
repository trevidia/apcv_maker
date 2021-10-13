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
        echo edit_info_nav('changePass');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <form>
            <h1> Change Password</h1>
            <div>
                <p>
                    <label for="current_password">
                        Current Password:
                    </label>
                </p>
                <input type="password" name="currentPassword" id="current_password">
            </div>
            <div>
                <p>
                    <label for="new_password">
                        New Password:
                    </label>
                </p>
                <input type="password" name="newPassword" id="new_password">
            </div>
            <div>
                <p>
                    <label for="confirm_password">
                        Confirm Password:
                    </label>
                </p>
                <input type="password" name="confirmPassword" id="confirm_password">
            </div>
            <input type="submit" name="submit" value="Submit" class="black_button">
        </form>

    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>