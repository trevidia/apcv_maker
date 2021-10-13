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
        echo drawer($domain, ["publications", 'chapterBooksAccepted']);
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
            <div class="">
                <h2>Chapter in Books Already Accepted for Publication</h2>
                <h6>Please kindly fill in your Publications.</h6><br />
                <button id="new_popup">
                    + Add New Publisher
                </button><br />
                <br />
                <form action="">
                    <div class=""> Book's Title: <br />
                        <br />
                        <input type="text" />
                    </div><br />
                    <div> Chapter's Title: <br />
                        <br />
                        <input type="text" /><br />
                    </div>
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
                    <br />
                    <br />
                    <div> Percentage Contribution: <br />
                        <p>Please input contribution in percentage e.g 20, 50</p><br />
                        <input type="text" placeholder="20">
                    </div>
                    <br />
                    <div>
                        Authors: <br />
                        <div class="form-outline mb-4">
                            <input type="text">
                        </div>
                    </div><br />
                    <div> Publishers:<br />
                        <br />
                        <select class="select">
                            <option value="1"> Wadell, Lagos, Nigeria.</option>
                            <option value="2"></option>
                            <option value="3"></option>
                            <option value="4"></option>
                        </select>
                    </div><br />
                    <div>
                        Year of Publication: <br />
                        <br />
                        <select class="select" style="width:100px; height:30px;">
                            <option value="1"> Year </option>
                            <option value="2"> 2021 </option>
                            <option value="3"> 2020 </option>
                            <option value="4"> 2019 </option>
                            <option value="6"> 2018 </option>
                            <option value="7"> 2017 </option>
                            <option value="8"> 2016 </option>
                            <option value="9"> 2015 </option>
                            <option value="10"> 2014 </option>
                            <option value="11"> 2013 </option>
                            <option value="12"> 2012 </option>
                            <option value="13"> 2011 </option>
                            <option value="14"> 2010 </option>
                            <option value="15"> 2009 </option>
                            <option value="16"> 2008 </option>
                            <option value="17"> 2007 </option>
                            <option value="18"> 2006 </option>
                            <option value="19"> 2005 </option>
                            <option value="20"> 2004 </option>
                            <option value="21"> 2003 </option>
                            <option value="22"> 2002 </option>
                            <option value="23"> 2001 </option>
                            <option value="24"> 2000 </option>
                        </select>
                    </div><br />
                    <div>
                        New Publication after last promotion or Consideration:
                        <br />
                        <select class="select" style="width:100px; height:30px;">
                            <option value="1"> Year </option>
                            <option value="2"> 2021 </option>
                            <option value="3"> 2020 </option>
                            <option value="4"> 2019 </option>
                            <option value="6"> 2018 </option>
                            <option value="7"> 2017 </option>
                            <option value="8"> 2016 </option>
                            <option value="9"> 2015 </option>
                            <option value="10"> 2014 </option>
                            <option value="11"> 2013 </option>
                            <option value="12"> 2012 </option>
                            <option value="13"> 2011 </option>
                            <option value="14"> 2010 </option>
                            <option value="15"> 2009 </option>
                            <option value="16"> 2008 </option>
                            <option value="17"> 2007 </option>
                            <option value="18"> 2006 </option>
                            <option value="19"> 2005 </option>
                            <option value="20"> 2004 </option>
                            <option value="21"> 2003 </option>
                            <option value="22"> 2002 </option>
                            <option value="23"> 2001 </option>
                            <option value="24"> 2000 </option>
                        </select>
                    </div><br />
                    <div>
                    <button >
                        Save & Continue
                    </button>
                    <div class="sized_box"></div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

    <script rel="script" src="../../js/drawer.js"></script>
    <script rel="script" src="../../js/pop_up.js"></script>
    <script rel="script" src="../../js/upload_box.js"></script>
</body>

</html>