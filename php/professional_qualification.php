<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "components/drawer.php";
    echo drawer($domain, "professional");
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
        <div class="container">
        <h1>Professional Qualifications</h1>
        <div style="padding-top: 20px;">
        <input type="submit" name="submit" class="black_button" value="+ Add New Qualification"><br/>
        </div>
        <div style="padding-top: 40px;">
                    <p>
                        <label for="journals">
                            Qualifications:
                        </label>
                    </p>
                    <select id="journals" name="journals">
                        <option value="1" selected>Select...</option>
                        <option value="2"> meat</option>
                    </select>
                    <br/>
         </div>    
            <div style="display: flex; align-items: baseline; "><input type="checkbox" style="width: 9px; display: inline-block;"> Awarding Institution: </div> 
            <select id="journals" name="journals">
                        <option value="1" selected>University of Ibadan</option>
                        <option value="2"> meat</option>
                    </select>

                    <div style="display: flex; align-items: baseline; "><input type="checkbox" style="width: 9px;"> Awarding Bodies: </div> 
            <select id="journals" name="journals">
                        <option value="1" selected>FRCOG</option>
                        <option value="2"> meat</option>
                    </select>       

            <div style="padding-top: 20px;">
                    <p>
                        <label for="date_accepted">
                            Granting date: 
                        </label>
                    </p>
                    <div id="date_accepted" class="date_accepted">
                        <select name="day" class="day">
                            <option value="1">
                                1
                            </option>
                        </select>
                        <select name="month" class="month">
                            <option value="january">
                                January
                            </option>
                        </select>

                        <select name="year" class="year">
                            <option value="2021">
                                2021
                            </option>
                            <option value="2020">
                                2020
                            </option>
                        </select>
                    </div>
                </div>
     <div style="padding-top: 20px;">       
    <input type="submit" name="SAVE" style="font-size: 130%;" value="SAVE" class="black_button">
    
    <input type="submit" name="+ Add Qualifications" style="font-size: 130%;" value="+ Add Qualifications" class="black_button">
    </div>
        </div>

    </div>
</div>
<script rel="script" src="../js/drawer.js"></script>
</body>
</html>