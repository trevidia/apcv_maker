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
        // padding: 20px; margin: 10px 10px 0px 0px
        */
        ?>

<form action="form-container" style="width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    line-height: 40px">
        <div><h1>Apointment Info</h1></div>
        <div class="first-academic">
        <label for="present_post">First Academic Appointmnent:</label> 
        <br>
        <!-- please do well to ask for further options first academic appointment. -->
            <select name="first_academic_appointment" id="" required style=" border-radius: 5px; width:60%">
                <option value="text">Lecturer II</option>
                <option value="text">Lecturer I</option>
            </select>
        
        <div>
            <label for="date">Date of First Academic Appointmnent</label>
            <br>
            <select name="date" id="" style="border-radius: 5px">
                <option value="text">01</option>
                <option value="text">02</option>
                <option value="text">03</option>
                <option value="text">04</option>
                <option value="text">05</option>
                <option value="text">06</option>
                <option value="text">07</option>
                <option value="text">08</option>
                <option value="text">08</option>
                <option value="text">09</option>
                <option value="text">10</option>
                <option value="text">11</option>
                <option value="text">12</option>
                <option value="text">13</option>
                <option value="text">14</option>
                <option value="text">15</option>
                <option value="text">16</option>
                <option value="text">17</option>
                <option value="text">18</option>
                <option value="text">19</option>
                <option value="text">20</option>
                <option value="text">21</option>
                <option value="text">22</option>
                <option value="text">23</option>
                <option value="text">24</option>
                <option value="text">25</option>
                <option value="text">26</option>
                <option value="text">27</option>
                <option value="text">28</option>
                <option value="text">29</option>
                <option value="text">30</option>
                <option value="text">31</option>
            </select>
            <select name="date" id="" style="border-radius: 5px">
                <option value="text">January</option>
                <option value="text">February</option>
                <option value="text">March</option>
                <option value="text">April</option>
                <option value="text">May</option>
                <option value="text">June</option>
                <option value="text">July</option>
                <option value="text">Agust</option>
                <option value="text">September</option>
                <option value="text">October</option>
                <option value="text">November</option>
                <option value="text">December</option>
            </select>
            <select name="date" id="" style="border-radius: 5px"> 
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
            </select>
            <div>
                <label for="present_post">Present Post:</label>
                <br>
                <select name="" id="" required style=" border-radius: 5px; width:60%">
                    <option value="text">Lecturer II</option>
                    <option value="text">Lecturer I</option>
                </select>
                <br>
            <select name="date" id="" style="border-radius: 5px">
                <option value="text">01</option>
                <option value="text">02</option>
                <option value="text">03</option>
                <option value="text">04</option>
                <option value="text">05</option>
                <option value="text">06</option>
                <option value="text">07</option>
                <option value="text">08</option>
                <option value="text">08</option>
                <option value="text">09</option>
                <option value="text">10</option>
                <option value="text">11</option>
                <option value="text">12</option>
                <option value="text">13</option>
                <option value="text">14</option>
                <option value="text">15</option>
                <option value="text">16</option>
                <option value="text">17</option>
                <option value="text">18</option>
                <option value="text">19</option>
                <option value="text">20</option>
                <option value="text">21</option>
                <option value="text">22</option>
                <option value="text">23</option>
                <option value="text">24</option>
                <option value="text">25</option>
                <option value="text">26</option>
                <option value="text">27</option>
                <option value="text">28</option>
                <option value="text">29</option>
                <option value="text">30</option>
                <option value="text">31</option>
            </select>
            <select name="date" id="" style="border-radius: 5px">
                <option value="text">January</option>
                <option value="text">February</option>
                <option value="text">March</option>
                <option value="text">April</option>
                <option value="text">May</option>
                <option value="text">June</option>
                <option value="text">July</option>
                <option value="text">Agust</option>
                <option value="text">September</option>
                <option value="text">October</option>
                <option value="text">November</option>
                <option value="text">December</option>
            </select>
            <select name="date" id="" style="border-radius: 5px"> 
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
            </select>
            </div>
            <div>
            <label for="date_of_last_promotion">Date of Last Promotion</label>
            <br>
            <select name="date" id="" style="border-radius: 5px">
                <option value="text">01</option>
                <option value="text">02</option>
                <option value="text">03</option>
                <option value="text">04</option>
                <option value="text">05</option>
                <option value="text">06</option>
                <option value="text">07</option>
                <option value="text">08</option>
                <option value="text">08</option>
                <option value="text">09</option>
                <option value="text">10</option>
                <option value="text">11</option>
                <option value="text">12</option>
                <option value="text">13</option>
                <option value="text">14</option>
                <option value="text">15</option>
                <option value="text">16</option>
                <option value="text">17</option>
                <option value="text">18</option>
                <option value="text">19</option>
                <option value="text">20</option>
                <option value="text">21</option>
                <option value="text">22</option>
                <option value="text">23</option>
                <option value="text">24</option>
                <option value="text">25</option>
                <option value="text">26</option>
                <option value="text">27</option>
                <option value="text">28</option>
                <option value="text">29</option>
                <option value="text">30</option>
                <option value="text">31</option>
            </select>
            <select name="date" id="" style="border-radius: 5px">
                <option value="text">January</option>
                <option value="text">February</option>
                <option value="text">March</option>
                <option value="text">April</option>
                <option value="text">May</option>
                <option value="text">June</option>
                <option value="text">July</option>
                <option value="text">Agust</option>
                <option value="text">September</option>
                <option value="text">October</option>
                <option value="text">November</option>
                <option value="text">December</option>
            </select>
            <select name="date" id="" style="border-radius: 5px"> 
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
            </select>
            </div>
            <BUtton class="btn" style="background: black; color:white; width: 60%; padding: 3px; border-radius: 5px" >SAVE CHANGES</BUtton>
        

            </button>
    
       
            

        </div>
    </form>
    </div>
 
</div>
<script rel="script" src="../../js/drawer.js"></script>
</body>
</html>