<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        ::placeholder {
            color: #d8a4b1;
        }
    </style>
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
        echo drawer($domain, ["publications", 'revisedChapters']);
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
                <div>
                    <h1 style="font-size: 25px; font-weight: 700; line-height: 29.3px;">Revised Books Published</h1>
                </div>
                <h5 style="padding-bottom: 20px; font-weight: 700; font-size: 12px; line-height: 27.72px;">Please kindly fill in your Publications</h5>
                <div style="float: left; padding-right: 35.89px;">
                    <input type="button" name="submit" value="+  Add New Publisher" id="new_popup" class="black_button">
                </div>



                <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 60px; padding-bottom: 10px;">
                    <p>Book's Title:</p>
                </div>
                <div><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>

                <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 15px; padding-bottom: 10px;">
                    <p>Chapter's Title:</p>
                </div>
                <div style=" padding-bottom: 15px;"><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>


                <div class="upload_box" id="uploader">
                        <p>
                            <label for="upload_button">
                                Drop Chapters Published here to start uploading
                            </label>
                        </p>
                        <input type="file" value="SELECT FILE" id="select_file" class="black_button" hidden>
                        <input type="button" value="SELECT FILE" name="select_file" id="upload_button" class="black_button">
                    </div>
                    <div id="filename">
                    </div>

                <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 25px;">
                    <p>Percentage Contribution:</p>
                    <p style="font-size: 13px; font-weight: 400; line-height: 30px">Please input contribution in percentage e.g 20, 50.</p>
                    <div><input type="text" name="" placeholder="20%" style="width: 522px; height: 32px; border-radius: 5px; padding-left: 19px; font-size: 20px; border: 1px solid black;"></div>
                </div>
                <div style="padding-top: 11px; padding-bottom: 15px; font-weight: 400; font-size: 15px; line-height: 17.58px;">
                    Authors:
                </div>
                <div><textarea class="select" style="border: 1px solid black; width: 517px; height: 116px; border-radius: 5px; outline: none;"></textarea></div>
                <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;">
                    <p style="padding-bottom: 15px;">Publishers:</p>
                    <div style="padding-bottom: 27px; padding-top: 15px;">
                        <select style="height: 39px; width: 517px; font-size: 15px; font-weight: 400;">
                            <option><span>Wadell, Lagos, Nigeria</span></option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;">
                        <p style="padding-bottom: 15px;">Pages:</p>
                        <div><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>
                    </div>
                    <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;">
                        <p style="padding-bottom: 15px;">ISBN:</p>
                        <div><input type="text" name="" placeholder="" style="width: 522px; height: 32px; border-radius: 5px; border: 1px solid black;"></div>
                    </div>
                    <div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-top: 20px;">
                        <p style="padding-bottom: 15px;">Year of Publication:</p>
                        <div>
                            <select style="width: 155.06px; height: 32px; border: 1px solid black; border-radius: 5px; font-weight: 400; font-size: 20px; padding-left: 10px;">
                                <option>Year</option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>

                    <div style="padding-top: 55px; padding-left: 34px;">
                        <input type="submit" name="submit" value="Save & Continue" class="black_button">
                        <div class="sized_box"></div>
                    </div>
                </div>


            </div>
            <script rel="script" src="../../js/drawer.js"></script>
            <script rel="script" src="../../js/pop_up.js"></script>
            <script rel="script" src="../../js/upload_box.js"></script>
</body>

</html>