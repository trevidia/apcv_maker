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
           <form action="" id="form-container">
            <div style>
            <div>
                <h1>Education info</h1>
            </div>
            <br>
            <div>
    
                <label for="institution" style="padding: 20px">Institution</label>
<br>
                <select name="institution" id="institution-label" style="box-sizing:border-box;">
                    <option value="text">University of Ibadan</option>
                </select>
        
    
            </div>
            <div class="education" style="width: max-content; padding: 20px; border-radius: 5px">
                <label for="year">From:</label>
                <select name="year" id="" required style="border-radius: 5px">
                        <option value="text">2005</option>
                        <option value="text">2006</option>
                        <option value="text">2007</option>
                        <option value="text">2008</option>
                        <option value="text">2009</option>
                        <option value="text">2010</option>
                        <option value="text">2011</option>
                        <option value="text">2012</option>
                        <option value="text">2013</option>
                        <option value="text">2014</option>
                        <option value="text">2015</option>
                        <option value="text">2016</option>
                        <option value="text">2017</option>
                        <option value="text">2018</option>
                        <option value="text">2019</option>
                        <option value="text">2020</option>
                        <option value="text">2021</option>
                        <option value="text">2022</option>
                        <option value="text">2023</option>                    
                        <option value="text">2024</option>                    
                        <option value="text">2025</option>                    
                        <option value="text">2026</option>                    
                        <option value="text">2027</option>
                        <option value="text">2028</option>
                        <option value="text">2029</option>                    
                        <option value="text">2030</option>
                    </select>
                    <label for="year">To</label>
                    <select name="year" id="" required style=" border-radius: 5px">
                        <option value="text">2005</option>
                        <option value="text">2006</option>
                        <option value="text">2007</option>
                        <option value="text">2008</option>
                        <option value="text">2009</option>
                        <option value="text">2010</option>
                        <option value="text">2011</option>
                        <option value="text">2012</option>
                        <option value="text">2013</option>
                        <option value="text">2014</option>
                        <option value="text">2015</option>
                        <option value="text">2016</option>
                        <option value="text">2017</option>
                        <option value="text">2018</option>
                        <option value="text">2019</option>
                        <option value="text">2020</option>
                        <option value="text">2021</option>
                        <option value="text">2022</option>
                        <option value="text">2023</option>                    
                        <option value="text">2024</option>                    
                        <option value="text">2025</option>                    
                        <option value="text">2026</option>                    
                        <option value="text">2027</option>
                        <option value="text">2028</option>
                        <option value="text">2029</option>                    
                        <option value="text">2030</option>
                    </select>
                </div>
            
            
                <BUtton class="btn" style="background: black; color:white; width: 40%; padding: 10px; border-radius: 5px" >SAVE CHANGES</BUtton>
            </div>
        </form>
    </div>

</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>