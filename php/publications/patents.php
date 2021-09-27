<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        ::placeholder {
            color: #D8A4B1;
        }
    </style>
</head>
<body>
<div id="root">
    <!-- this is the drawer for the apcv maker site -->
    <?php
    include_once "../components/drawer.php";
    echo drawer($domain, ["publications", 'patents']);
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
        <div class="form-container">
            <!-- This is the content in Patent -->
            <h1>Patents</h1> 
            <h5>Please Kindly fill in your Publications.</h5></br>
            
            <div>
            <input type="submit" name="submit"  style="color: white; border: 1px solid black; height: 37px; width: 294px; left: 0px; top: 0px; 
            border-radius: 5px; background: #212529; 
            font-family: Roboto; font-size: 25px; font-style: normal; font-weight: 400; line-height: 29px; letter-spacing: 0em; 
            text-align: left; " value="+ Add New Journal"></div></br>
            
            <div><p>Publication Title:</p></div></br>
            <div> <input type="text" name="Pub_Title" style="height: 32px;
                        width: 522px; left: 0px; top: 0px; border-radius: 5px; border: 1px solid black;" value= " "></div></br>

<div class="select" style="border: 1px solid black; width: 517px; height: 116px; border-radius: 5px; text-align: center;">
<div style="font-size: 15px; font-weight: 400; line-height: 17.58px; padding-bottom: 17px; padding-top: 20px;">Drop Publication here to start uploading</div>
<div class="row upload" style="padding-right: 43px; padding-left: 43px;">
    <form enctype="multipart/form-data" action="" method="post" class="col-md-12">
    <div style="border: none; width: 431px; height: 38px; background: #1f1f1f; border-radius: 5px; text-align: center; font-weight: 400; font-size: 25px; color: #f8f9fa; line-height: 29.3px;">
    <label for="file" class="filebutton"><div style="text-transform: uppercase; padding-top: 5px; line-height: 29.9px;">Select File</div></label>
</div>



  </div>


</form>
</div></br>

        <div style="color: #D8A4B1;"><p>Filename.pdf</p></div></br>

    
    <div><h4>Percentage Contribution</h4></div></br>
       <h5>Please input contribution in percentage e.g 20, 50</h5>

       <div> <input type="number" name="Perentage_Contribution" style="height: 32px;
                        width: 522px; left: 0px; top: 0px; border-radius: 5px; border: 1px solid black; 
color: #D8A4B1;" input placeholder="20%"; value= " "></div></br>

            <h4>Authors:</h4></br>
            <div> <input type="text"  name="Pub_Title" style="width: 517px; height: 116px; left: 0px; top: 0px; border-radius: 5px; border: 1px solid black;" value= " "></div></br>
            <textarea rows = "5" cols = "60" name = "description">
                </textarea><br>
            
                <h4>Country:</h4>
                <form name="form1" id="form1" action="/action_page.php">
                <select name="country" id="country" style= "height: 32px; width: 522px;">
                    <option value="" selected="selected">-Select Country-</option>
                    <option value="Nigeria">Nigeria</option>

                    <option value="South Africa">South Africa</option>
    <option value="Ghana">Ghana</option>
    <option value="">Select country</option>
    <option value="United States of America">United States of America</option>
    <option value="">Select country</option>
</select></form></br>
        
                <h4>Patent's Number:</h4></br>
                <div> <input type="text" name="Patent_Number" style="height: 32px;
width: 522px; left: 0px; top: 0px; border-radius: 5px;" value=" ">
                </div></br>

                <h4>Patent's Date:</h4></br>
                <div> <form name="form1" id="form1" action="/action_page.php">
                <select name="Day" id="day" style= "height: 32px; width: 155.06060791015625px; left: 0px; top: 0px; border-radius: 5px;">
                    <option value="" selected="Day">Day</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select></form>
                </div>

                <div> <form name="form1" id="form1" action="/action_page.php">
                <select name="month" id="month" style= "height: 32px; width: 155.06060791015625px; left: 0px; top: 0px; border-radius: 5px;">
                    <option value="" selected="Month">Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select></form>
                </div></br>






</div>
</div>
</div>
<script type="text/javascript">document.getElementById("file").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};</script>

<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>