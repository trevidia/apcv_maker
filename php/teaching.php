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

                <div>Please choose<br />
                    <br />
 
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
                <br />
                <div> Work Experience <br />
                    <br />
                    <input style="width:550px; height:200px;" />
                </div>
                <br />
                <div>Date optional<br />
                    <select style="width:100px; height:30px;">
                        <option> Day</option>
                        <option> 01 </option>
                        <option> 02 </option>
                        <option> 03 </option>
                        <option> 04 </option>
                        <option> 05 </option>
                        <option> 06 </option>
                        <option> 07 </option>
                        <option> 08 </option>
                        <option> 09 </option>
                        <option> 10 </option>
                        <option> 11 </option>
                        <option> 12 </option>
                        <option> 13 </option>
                        <option> 14 </option>
                        <option> 15 </option>
                        <option> 16 </option>
                        <option> 17 </option>
                        <option> 18 </option>
                        <option> 19</option>
                        <option> 20 </option>
                        <option> 21 </option>
                        <option> 22 </option>
                        <option> 23 </option>
                        <option> 24 </option>
                        <option> 25 </option>
                        <option> 26 </option>
                        <option> 27 </option>
                        <option> 28 </option>
                        <option> 29 </option>
                        <option> 30 </option>
                        <option> 31 </option>
                    </select>
                    <select style="width:100px; height:30px;">
                        <option> Month </option>
                        <option> January </option>
                        <option> Feburary </option>
                        <option> March </option>
                        <option> April </option>
                        <option> May </option>
                        <option> June </option>
                        <option> July </option>
                        <option> August </option>
                        <option> September </option>
                        <option> October </option>
                        <option> November </option>
                        <option> December </option>
                    </select>
                    <select style="width:100px; height:30px;">
                        <option> Year </option>
                        <option> 2021 </option>
                        <option> 2020 </option>
                        <option> 2019 </option>
                        <option> 2018 </option>
                        <option> 2017 </option>
                        <option> 2016 </option>
                        <option> 2015 </option>
                        <option> 2014 </option>
                        <option> 2013 </option>
                        <option> 2012 </option>
                        <option> 2011 </option>
                        <option> 2010 </option>
                        <option> 2009 </option>
                        <option> 2008 </option>
                        <option> 2007 </option>
                        <option> 2006 </option>
                        <option> 2005 </option>
                        <option> 2004 </option>
                        <option> 2003 </option>
                        <option> 2002 </option>
                        <option> 2001 </option>
                        <option> 2000 </option>
                    </select>
                </div>
                <br />
                <button style="width:150px; height:30px; padding-right: 5px">
                    <h3>+ ADD MORE</h3>
                </button>
                <button style="width:150px; height:30px; padding-left: 5px;">
                    <h3>SAVE</h3>
                </button>
            </div>
        </div>
    </div>
    <script rel="script" src="../js/drawer.js"></script>
</body>

</html>