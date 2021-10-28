<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile_style.css">
</head>

<body>
    <div id="root">
        <!-- this is the drawer for the apcv maker site -->
        <?php
        include_once "components/drawer.php";
        echo drawer($domain, "teaching") ?>
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
            <div>
                <h1> Teaching and Work Experience</h1><br />
                <br />

                <div id="forms">
                    <div class="form-1">
                        <div>Please choose<br/>
                        <br/>
    
                        <input type="radio" name="meal"/>
                        <label> Undergraduate</label>
                        <input type="radio" name="meal"/>
                        <label> Postgraduate</label>
                        <input type="radio" name="meal"/>
                        <label> Administrative</label>
                        <input type="radio" name="meal"/>
                        <label> Community</label>
                        <input type="radio" name="meal"/>
                        <label> Combined</label>
                    </div>
                    <br/>
                    <div> Work Experience <br />
                    <textarea id="authors" name="authors" required></textarea>
                    </div>
                    <br />
                    
                    <div>
                         <br>
                                <label for="date_accepted">
                                    Date:
                                </label>
                            </div>

                        <div id="date" class="date">
                            <label>
                        <input type="date" name="date">
                            </label>
                        </div>
                    
                    <br/>
                    </div>
                </div>
                <div>
                        <input type="submit" name="save_and_continue" id="add_more" value="+ Add More" class="black_button">
                        <input type="submit" name="save_and_continue" value="Save & Continue" class="black_button">
                </div>
        
            </div>
        </div>
    </div>

<script rel="script" src="../js/add_more.js"></script>
<script rel="script" src="../js/drawer.js"></script>
</body>

</html>