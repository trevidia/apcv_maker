<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apcv_maker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/edit_info_nav.css">
    <link rel="stylesheet" href="../../css/mobile_style.css">
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
        echo edit_info_nav('appointment');
        /*
        * Todo Make sure to use any style you want for the form labels and input tags
        *  but make sure to save your style in the css directory and make sure not to override
        *  the style.css which is our base style incharge of the fonts and the drawer style
        *  thank you
        */
        ?>
        <div>
            <h1>Appointment Info</h1>
            <br/>
            <form action="">
                <div class="form-outline mb-4">First Academic Appointment:
                    <br/>
                    <br/>
                    <label class="visually-hidden" for="first_academic_appointment"></label>
                    <select class="select" style="width : 500px; height:30px;" id="first_academic_appointment">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                    </select>
                </div>
                <br/>
                <div class="col-12"> Date of First Academic Appointment:
                    <br/>
                    <br/>
                    <label class="visually-hidden" for="date_of_first_academic_appointment"></label>
                    <select class="select" style="width : 150px; height:30px;" id="date_of_first_academic_appointment">
                        <option value="1">Date</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="8">09</option>
                        <option value="1">10</option>
                        <option value="2">11</option>
                        <option value="3">12</option>
                        <option value="4">13</option>
                        <option value="5">14</option>
                        <option value="6">15</option>
                        <option value="7">16</option>
                        <option value="8">17</option>
                        <option value="8">18</option>
                        <option value="1">19</option>
                        <option value="2">20</option>
                        <option value="3">21</option>
                        <option value="4">22</option>
                        <option value="5">23</option>
                        <option value="6">24</option>
                        <option value="7">25</option>
                        <option value="8">26</option>
                        <option value="8">27</option>
                        <option value="3">28</option>
                        <option value="4">29</option>
                        <option value="5">30</option>
                        <option value="6">31</option>
                    </select>
                    <label class="visually-hidden" for="date_of_first_academic_appointment"></label>
                    <select class="select" style="width : 150px; height:30px;" id="date_of_first_academic_appointment">
                        <option value="1">Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="8">September</option>
                        <option value="1">October</option>
                        <option value="2">November</option>
                        <option value="3">December</option>
                    </select>
                    <label class="visually-hidden" for="date_of_first_academic_appointment"></label>
                    <select class="select" style="width : 150px; height:30px;" id="date_of_first_academic_appointment">
                        <option value="1">Year</option>
                        <option value="2">2021</option>
                        <option value="3">2020</option>
                        <option value="4">2019</option>
                        <option value="5">2018</option>
                        <option value="6">2017</option>
                        <option value="7">2016</option>
                        <option value="8">2015</option>
                        <option value="8">2014</option>
                        <option value="1">2013</option>
                        <option value="2">2012</option>
                        <option value="3">2011</option>
                        <option value="2">2010</option>
                        <option value="3">2009</option>
                        <option value="4">2008</option>
                        <option value="5">2007</option>
                        <option value="6">2006</option>
                        <option value="7">2005</option>
                        <option value="8">2004</option>
                        <option value="8">2003</option>
                        <option value="1">2002</option>
                        <option value="2">2001</option>
                        <option value="3">2000</option>
                    </select>
                </div>
                <br/>
                <div class="form-outline mb-4">Present Post:
                    <br/>
                    <br/>
                    <label class="visually-hidden" for="present_post"></label>
                    <select class="select" style="width : 500px; height:30px;" id="present_post">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                    </select>
                </div>
                <br/>
                <div class="col-12"> Date of Present Post:
                    <br/>
                    <br/>
                    <label class="visually-hidden" for="date_of_persent_post"></label>
                    <select class="select" style="width : 150px; height:30px;" id="date_of_persent_post">
                        <option value="1">Date</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="8">09</option>
                        <option value="1">10</option>
                        <option value="2">11</option>
                        <option value="3">12</option>
                        <option value="4">13</option>
                        <option value="5">14</option>
                        <option value="6">15</option>
                        <option value="7">16</option>
                        <option value="8">17</option>
                        <option value="8">18</option>
                        <option value="1">19</option>
                        <option value="2">20</option>
                        <option value="3">21</option>
                        <option value="4">22</option>
                        <option value="5">23</option>
                        <option value="6">24</option>
                        <option value="7">25</option>
                        <option value="8">26</option>
                        <option value="8">27</option>
                        <option value="3">28</option>
                        <option value="4">29</option>
                        <option value="5">30</option>
                        <option value="6">31</option>
                    </select>
                    <label class="visually-hidden" for="date_of_present_post"></label>
                    <select class="select" style="width : 150px; height:30px;" id="date_of_persent_post">
                        <option value="1">Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="8">September</option>
                        <option value="1">October</option>
                        <option value="2">November</option>
                        <option value="3">December</option>
                    </select>
                    <label class="visually-hidden" for="date_of_present_post"></label>
                    <select class="select" style="width : 150px; height:30px;" id="date_of_present_post">
                        <option value="1">Year</option>
                        <option value="2">2021</option>
                        <option value="3">2020</option>
                        <option value="4">2019</option>
                        <option value="5">2018</option>
                        <option value="6">2017</option>
                        <option value="7">2016</option>
                        <option value="8">2015</option>
                        <option value="8">2014</option>
                        <option value="1">2013</option>
                        <option value="2">2012</option>
                        <option value="3">2011</option>
                        <option value="2">2010</option>
                        <option value="3">2009</option>
                        <option value="4">2008</option>
                        <option value="5">2007</option>
                        <option value="6">2006</option>
                        <option value="7">2005</option>
                        <option value="8">2004</option>
                        <option value="8">2003</option>
                        <option value="1">2002</option>
                        <option value="2">2001</option>
                        <option value="3">2000</option>
                    </select>
                </div>
                <button>
                    SAVE CHANGES
                </button>
            </form>
            <br/>

        </div>

    </div>
</div>
<script rel="script" src="../../js/drawer.js"></script>
<script rel="script" src="../../js/edit_info_nav_link.js"></script>
</body>
</html>