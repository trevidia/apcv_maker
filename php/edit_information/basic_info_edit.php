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
        echo edit_info_nav();
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
    <div class="form-container">

<div class="basic" style="padding-bottom: 15px;">
    <h1>Basic info</h1>
</div>


<!-- First Name input-->
<div style="padding-bottom: 11px; font-weight: 400; font-size: 15px;">First Name:</div>
<div style="padding-bottom: 27px;"><input type="text" style="height: 32px; width: 522px;"></div>


<!-- Surname input-->
 <div style="padding-bottom: 11px; font-weight: 400; font-size: 15px;">Surname:</div>
<div style="padding-bottom: 27px;"><input type="text" style="height: 32px; width: 522px;"></div>


<!-- Initials input-->
 <div style="padding-bottom: 11px; font-weight: 400; font-size: 15px;">Initials:</div>
<div style="padding-bottom: 27px;"><input type="text" style="height: 32px; width: 522px;"></div>


<!-- Departments input-->
<div style="padding-bottom: 11px; font-weight: 400; font-size: 15px;">
    Departments:
</div>
<div style="padding-bottom: 27px;"><select style="height: 32px; width: 522px;">
    <option>select</option>
    <option>...</option>
    <option>...</option>
    <option>...</option>
    <option>...</option>
</select></div>


<!-- Faculty input-->
<div style="padding-bottom: 11px; font-weight: 400; font-size: 15px;">
    Faculty:
</div>
<div style="padding-bottom: 27px;"><select style="height: 32px; width: 522px;">
    <option>select</option>
    <option>...</option>
    <option>...</option>
    <option>...</option>
    <option>...</option>
</select></div>


<!-- Othernames input-->
 <div style="padding-bottom: 11px; font-weight: 400; font-size: 15px;">Othernames Name:</div>
<div style="padding-bottom: 27px;"><input type="text" style="height: 32px; width: 522px;"></div>


<!-- Gsm Number input-->
 <div style="padding-bottom: 11px; font-weight: 400; font-size: 15px;">Gsm Number:</div>
<div><input type="text" style="height: 32px; width: 522px;"></div><br/>


<div style="padding-top: 3px;">
<input type="submit" name="submit" value="SAVE CHANGES" style="font-weight: 400; font-size: 25px; line-height: 29.3px; color: #f8f9fa; background: #1f1f1f; border-radius: 5px; height: 38px; width: 431px; border: none;"></div>

</div>


    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>