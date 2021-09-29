<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
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
        echo edit_info_nav('bestPub');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <div style="width: 616px" class="best_pub_container">
            <h1>
                Ten Best Publications that Reflect the Totality of my contribution to society
            </h1>
            <ol>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 1
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>

                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 2
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 3
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 4
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 5
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 6
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 7
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 8
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 9
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="card_container">
                    <div class="best_pub_card">
                        <div class="best_pub_card_title">
                            Publication 10
                        </div>
                        <div class="best_pub_card_actions">
                            <div class="black_button action">
                                <img src="../../static/edit_icon.svg" alt="edit">
                                <span>Edit</span>
                            </div>
                            <div class="black_button action">
                                <img src="../../static/delete_icon.svg" alt="delete">
                                <span>Delete</span>
                            </div>
                        </div>

                    </div>
                </li>
            </ol>
        </div>

    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>