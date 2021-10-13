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
            echo edit_info_nav('awards');
            /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
            ?>
            <div class="form-container">
                <div>
                    <h1>Award Received</h1></br>
                    </br>
                    <h2>Scholarships, Fellowships and Prizes</h2>
                    <h5>With respect to Undergraduate and Postgraduate work</h5>
                    <ul class="info_list">
                        <li>
                            <div class="form_info">
                                <div>
                                    <p>Best Graduating Student 2005</p>
                                    <p>University of Ibadan </p>
                                </div>
                                <a href="awards_received_edit.php">
                                    <div class="edit_button">
                                        <img src="../../static/edit_icon.svg" alt="edit icon">
                                        <p>Edit</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>

                            <div class="form_info">
                                <div>
                                    <p>Best Graduating Student 2005</p>
                                    <p>University of Ibadan </p>
                                </div>
                                <a href="honors_edit.php">
                                    <div class="edit_button">
                                        <img src="../../static/edit_icon.svg" alt="edit icon">
                                        <p>Edit</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <h2>Honours Distinctions and Membership</h2>
                    <h5>of Learned Society</h5></br>

                    <ul class="info_list">
                        <li>
                            <div class="form_info">
                                <div>
                                    <p>Best Graduating Student 2005</p>
                                </div>
                                <a href="honors_edit.php">
                                    <div class="edit_button">
                                        <img src="../../static/edit_icon.svg" alt="edit icon">
                                        <p>Edit</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>

                            <div class="form_info">
                                <div>
                                    <p>Best Graduating Student 2005</p>
                                </div>
                                <a href="awards_received_edit.php">
                                    <div class="edit_button">
                                        <img src="../../static/edit_icon.svg" alt="edit icon">
                                        <p>Edit</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <script rel="script" src="../../js/drawer.js"></script>
        <script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>

</html>