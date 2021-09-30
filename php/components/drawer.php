<?php


// todo make sure to change this value when running this on your server
$domain = "http://localhost/apcv_maker/php/";
/*
 * This is a function that returns the drawer and checks if
 * the current file is the active file by supplying the $navButton
 * parameter to the function
 */
function drawer($domainDirectory, $navButton)
{
    $imgDirectory = "http://localhost/apcv_maker/static/img";
    $pubDrawerValue = null;
    if (gettype($navButton) == "array") {
        $pubDrawerValue = $navButton[1];
        $navButton = $navButton[0];
    }
    require_once 'publication_nav.php';
    $pubDrawer = pub_drawer($pubDrawerValue);
    require_once 'research_nav.php';
    $researchNav = research_nav($pubDrawerValue);
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
    $professionalTab = "non_active";
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
        case "professional":
            $professionalTab = "active";
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
    <!-- Todo change the src to the correct domain once done with development -->
    <img style='width: 100px; padding-top: 20px; margin-bottom: 36px' src='$imgDirectory/College_logo_new.png' alt='college_logo'>
   
    <ul>
   
    <li class=\"nav_box $personalTab\">
        <a class=" . $personalTab . " href=" . $domainDirectory . "personal_info.php> Personal Information
        </a>
    </li>
    <li class=\"nav_box $educationTab\">
    <a class=" . $educationTab . " href=" . $domainDirectory . "education.php>
        Education
        </a>
    </li>
    <li class=\"nav_box $academicTab\">
    <a class=" . $academicTab . " href=" . $domainDirectory . "academic_qualification.php>
        Academic Qualifications
    </a>
    </li>
    <li class=\"nav_box $professionalTab\">
    <a class=" . $professionalTab . " href=" . $domainDirectory . "professional_qualification.php>
        Professional Qualifications
    </a>
    </li>
    <li class=\"nav_box $scholarshipTab\">
    <a class=" . $scholarshipTab . " href=" . $domainDirectory . "scholarships.php>
        Scholarships and Prizes
    </a>
    </li>
    <li class=\"nav_box $honorsTab\">
    <a class=" . $honorsTab . " href=" . $domainDirectory . "honors.php>
        Honors Distinctions and membership
        </a>
    </li>
    <li class=\"nav_box $teachingTab\">
    <a class=" . $teachingTab . " href=" . $domainDirectory . "teaching.php>
        Teaching / Work Experience
        </a>
    </li>
    <li class=\"nav_box $publicationsTab \"  id='publication_nav'>
    <a class=" . $publicationsTab . " href=" . $domainDirectory . "publications/articles_accepted_publication.php>
         Publications
         </a>
          $pubDrawer
    </li>
   
    <li class=\"nav_box research_nav $researchTab\" id='research_nav'>
    <a class=" . $researchTab . " href=" . $domainDirectory . "research/research_completed.php>
        Research
        </a>
         $researchNav
    </li>
    <li class=\"nav_box $editTab\">
    <a class=" . $editTab . " href=" . $domainDirectory . "edit_information/basic_info.php>
        Edit information
        </a>
    </li>
    <li class=\"nav_box $printTab\">
    <a class=" . $printTab . " href=" . $domainDirectory . "print_preview.php>
        Print preview
        </a>
    </li>
    <li class=\"nav_box\">
    <a class=" . $logoutTab . " href=" . $domainDirectory . "logout.php>
        Logout 
        </a>   
    </li>
</nav>
</div>
    ";
}


