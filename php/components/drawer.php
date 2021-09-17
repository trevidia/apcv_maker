<?php

// make sure to change this value when running this on your server
$domain = "http://localhost/apcv_maker/php/";
/*
 * This is a function that returns the drawer and checks if
 * the current file is the active file by supplying the $navButton
 * parameter to the function
 */
function drawer($domainDirectory, $navButton)
{
    $personalTab = "non_active";
    $educationTab = "non_active";
    $academicTab = "non_active";
    $scholarshipTab = "non_active";
    $honorsTab = "non_active";
    $teachingTab = "non_active";
    $publicationsTab = "non_active";
    $researchTab = "non_active";
    $editTab = "non_active";
    $printTab = "non_active";
    $logoutTab = "non_active";
    switch ($navButton) {
        case "personal":
            $personalTab = "active";
            break;
        case "education":
            $educationTab = "active";
            break;
        case "academic":
            $academicTab = "active";
            break;
        case "scholarships":
            $scholarshipTab = "active";
            break;
        case "honors":
            $honorsTab = "active";
            break;
        case "teaching":
            $teachingTab = "active";
            break;
        case "publications":
            $publicationsTab = "active";
            break;
        case "research":
            $researchTab = "active";
            break;
        case "edit":
            $editTab = "active";
            break;
        case "print":
            $printTab = "active";
            break;
    }
    return "
    <!-- Drawer for the site -->
    <div class='nav_container'>
    <nav>
    <div class=\"nav_box\">
        <a class=" . $personalTab . " href=" . $domainDirectory . "personal_info.php> Personal Information
        </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $educationTab . " href=" . $domainDirectory . "education.php>
        Education
        </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $academicTab . " href=" . $domainDirectory . "academic_qualification.php>
        Academic Qualifications
    </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $scholarshipTab . " href=" . $domainDirectory . "scholarships.php>
        Scholarships and Prizes
    </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $honorsTab . " href=" . $domainDirectory . "honors.php>
        Honors Distinctions and membership
        </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $teachingTab . " href=" . $domainDirectory . "teaching.php>
        Teaching / Work Experience
        </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $publicationsTab . " href=" . $domainDirectory . "publications.php>
         Publications
         </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $researchTab . " href=" . $domainDirectory . "research.php>
        Research
        </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $editTab . " href=" . $domainDirectory . "edit_info.php>
        Edit information
        </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $printTab . " href=" . $domainDirectory . "print_preview.php>
        Print preview
        </a>
    </div>
    <div class=\"nav_box\">
    <a class=" . $logoutTab . " href=" . $domainDirectory . "logout.php>
        Logout 
        </a>   
    </div>
</nav>
</div>
    ";
}


