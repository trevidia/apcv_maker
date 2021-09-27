<?php

function edit_info_nav($editActive)
{
    // todo change domain when development is over
    $domain = "http://localhost/apcv_maker/php/edit_information";
    $basicInfo = "non-active";
    $appointment = "non-active";
    $education = "non-active";
    $academic = "non-active";
    $professional = "non-active";
    $awards = "non-active";
    $research = "non-active";
    $publications = "non-active";
    $conferences = "non-active";
    $bestPub = "non-active";
    $changePass = "non-active";
    switch ($editActive) {
        case "basic":
            $basicInfo = "active";
            break;
        case "appointment":
            $appointment = "active";
            break;
        case "education":
            $education = "active";
            break;
        case "academic":
            $academic = "active";
            break;
        case "professional":
            $professional = "active";
            break;
        case "awards":
            $awards = "active";
            break;
        case "research":
            $research = "active";
            break;
        case "publications":
            $publications = "active";
            break;
        case "conferences":
            $conferences = "active";
            break;
        case "bestPub":
            $bestPub = "active";
            break;
        case "changePass":
            $changePass = "active";
            break;
    }
    return "
    <div id='edit_nav_container'>
    <ul>
    <li class='edit $basicInfo' id='nav_basic_info'>
    <a href='$domain/basic_info.php'>
    Basic info
</a>
</li>
<li class='edit $appointment' id='nav_appointment_info'>
<a href='$domain/appointment_info.php'>
Appointment info
</a>
</li>
<li class='edit $education' id='nav_education_info'>
<a href='$domain/education_info.php'>
Education info
</a>
</li>
<li class='edit $academic' id='nav_academic_qualification'>
<a href='$domain/academic_qualification.php'>
Academic Qualifications
</a>
</li>
<li class='edit $professional' id='nav_professional_qualification'>
<a href='$domain/professional_qualification.php'>
Professional Qualifications
</a>
</li>
<li class='edit $awards' id='nav_awards_received'>
<a href='$domain/awards_received.php'>
Awards recieved
</a>
</li>
<li class='edit $research' id='nav_research'>
<a href='$domain/research.php'>
Research
</a>
</li>
<li class='edit $publications' id='nav_publications'>
<a href='$domain/publications.php'>
Publications
</a>
</li>
<li class='edit $conferences' id='nav_conference'>
<a href='$domain/conferences.php'>
Conferences
</a>
</li>
<li class='edit $bestPub' id='nav_best_publications'>
<a href='$domain/best_publication.php'>
Best Publications
</a>
</li>
<li class='edit $changePass' id='nav_change_passwords'>
<a href='$domain/change_password.php'>
Change Passwords
</a>
</li>
</ul>
    </div> 
    ";
}
