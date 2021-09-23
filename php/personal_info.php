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
    echo drawer($domain, "personal")
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

           <!-- The Personal Information contents  -->
           <div class="Personal_Info" style="padding-bottom: 18px;">
            <h1>Personal Information</h1>
           </div>
           <div class="row">
                <div class="column" style="float: left; padding-right: 136px;">
                    <div class="label">
                        <div style="padding-bottom: 16px;">Name:</div><br/>
                        <div style="padding-bottom: 16px;">GSM Number:</div><br/>
                        <div style="padding-bottom: 16px;">Date of Birth:</div><br/>
                        <div style="padding-bottom: 16px;">Faculty:</div><br/>
                        <div style="padding-bottom: 16px;">Department:</div><br/>
                        <div style="padding-bottom: 16px;">First Academic Appointment:</div><br/>
                        <div style="padding-bottom: 16px;">Date of First Academic<br/>Appointment:</div><br/>
                        <div style="padding-bottom: 16px;">Present Appointment:</div><br/>
                        <div style="padding-bottom: 16px;">Date of Present Academic<br/>Appointment:</div><br/>
                        <div style="padding-bottom: 16px;">Date of Last Promotion:</div><br/>
                        <div style="padding-bottom: 16px;">Date of Last Considered:</div><br/>
                    </div>            
                </div>
                <div class="column" style="float: left; padding-right: 136px;">
                    <div class="label">
                        <div style="padding-bottom: 16px;">Adeniran Opeyemi Adetoun</div><br/>
                        <div style="padding-bottom: 16px;">09032797132</div><br/>
                        <div style="padding-bottom: 16px;">24/10/1985</div><br/>
                        <div style="padding-bottom: 16px;">Clinical Sciences</div><br/>
                        <div style="padding-bottom: 16px;">Nursing</div><br/>
                        <div style="padding-bottom: 16px;">Lecturer II</div><br/>
                        <div style="padding-bottom: 16px;">01/06/2018</div><br/>
                        <div style="padding-bottom: 16px;">Lecturer I</div><br/>
                        <div style="padding-bottom: 16px;">01/06/2018</div><br/>
                        <div style="padding-bottom: 16px;">01/06/2018</div><br/>
                        <div style="padding-bottom: 16px;">01/06/2018</div><br/>
                    </div>            
                </div>

            </div>
            <!-- <div class="button" style="height: 25; width: 95; padding-top: 600px; float: left;"><input type="submit" class="edit" name="edit" value="Edit Info"></div>    -->
            <div style="padding-top: 600px; padding-left: 100px;"><button style="padding-top: 5px; padding-bottom: 5px; padding-left: 60px; padding-right: 60px;" name="submit" class="action_btn submit" type="submit" value="Edit Info" onclick="myFunction()">Edit Info</button></div>
        </div>
        <div><img >Edit Passport</div>
    </div>
</div>
</body>
</html>