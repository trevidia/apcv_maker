<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">
</head>

<body>
    <div id="pop_up_container">
        <div id="popUp" style="height: 390px">
            <form>
                <img src="../../static/close_icon.svg" alt="close" id="close_pop_up">
                <h1>New Publisher</h1>

                <div>
                    <p>
                        <label for="publisher">
                            Publisher's Name:
                        </label>
                    </p>
                    <input type="text" name="publisher" id="publisher">
                </div>
                <div>
                    <p>
                        <label for="publisher">
                            Publisher's City:
                        </label>
                    </p>
                    <input type="text" name="publishersCity" id="publishersCity">
                </div>
                <div>
                    <p>
                        <label for="dropdown_pop">
                            Country:
                        </label>
                    </p>
                    <select id="dropdown_pop" name="country">
                        <option value="Nigeria" selected disabled hidden> Nigeria</option>
                        <option value="japan"> Japan</option>
                    </select>
                </div>
                <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
            </form>
        </div>
    </div>
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "../components/drawer.php";
        echo drawer($domain, ["publications", 'booksPublished']);
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
            <div class="form">
                <!--Content for books already published-->
                <h1>Book Already Published</h1>
                <h6>Please kindly fill in your Publications</h6><br />
                <!-- <button style="color: white; font-size: 100%; background-color: black; width: 294; height: 37; padding-right: 15px ">+ Add New Publisher</button><br/> -->
                <div>
                    <input type="submit" name="submit" class="black_button" id="new_popup" value="+ Add New Publisher"><br />
                </div><br />
                <p>Book's Title:</p><br />

                <div>

                    <input type="text" name="submit" value=" "><br />
                </div><br />

                <div class="upload_box" id="uploader" style="margin-bottom: 9px;">
                    <p>
                        <label for="upload_button">
                            Drop Acceptance letter here to start uploading
                        </label>
                    </p>
                    <input type="file" value="SELECT FILE" id="select_file" class="black_button" hidden>
                    <input type="button" value="SELECT FILE" name="select_file" id="upload_button" class="black_button">
                </div>
                <div id="filename">
                </div>
                <p style="font-size: 150%;">Percentage Contribute:</p><br />
                <p style="font-size: 90%;">Please input contribution in percentage e.g 20, 50</p><br />
                <div>
                    <input type="text" name="submit" placeholder="20">
                </div><br />
                <div>
                    <p>Authors:</p><br />
                    <input type="text" name="submit" value=" ">
                </div><br />
                <p>Publishers:</p>
                <br />
                <select>

                    <option value="Wadell, Lagos, Nigeria" selected>Wadell, Lagos, Nigeria<optiion>
                    <option>
                        </optiion>
                    <option>
                        </optiion>
                    <option>
                        </optiion>
                </select><br />
                <br />
                <div>
                    <p>Pages:</p><br />
                    <input type="text" name="Pages" value=" ">
                    <br />
                    <p>ISBN:</p><br />
                    <input type="text" name="ISBN" value=" "><br />
                </div><br />
                <p>Year of Publication:</p>
                <select style="width: 153px; height: 32px;">

                    <option value="Year" underlined, selected>Year<optiion>
                    <option>
                        </optiion>
                    <option>
                        </optiion>
                    <option>
                        </optiion>
                </select>
                <br />
                <br />

                <div>
                    <input type="submit" name="submit" class="black_button" value=" Save and Continue"><br />
                    <div class="sized_box"></div>
                </div>


            </div>
        </div>
    </div>
    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/pop_up.js"></script>
    <script rel="script" src="../../js/upload_box.js"></script>
</body>

</html>