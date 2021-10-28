<?php

function pub_nav($editActive)
{
    // todo change domain when development is over
    $domain = "http://localhost/apcv_maker/php/pub";
    $articleacc = "non-active";
    $articleapp = "non-active";
    $bookPub = "non-active";
    $bookAccept = "non-active";
    $chapBookAccept = "non-active";
    $chapBookPub = "non-active";
    $revised = "non-active";
    $editorialWork = "non-active";
    $confPro = "non-active";
    $confAt = "non-active";
    $monographs = "non-active";
    $techReport = "non-active";
    $bestPub = "non-active";
    $patents = "non-active";
    $research = "non-active";
    switch ($editActive) {
        case "basic":
            $articleacc = "active";
            break;
        case "appointment":
            $articleapp = "active";
            break;
        case "education":
            $bookPub = "active";
            break;
        case "academic":
            $bookAccept = "active";
            break;
        case "professional":
            $chapBookAccept = "active";
            break;
        case "awards":
            $chapBookPub = "active";
            break;
        case "research":
            $revised = "active";
            break;
        case "publications":
            $editorialWork = "active";
            break;
        case "conferences":
            $confPro = "active";
            break;
        case "bestPub":
            $confAt = "active";
            break;
        case "changePass":
            $monographs = "active";
            break;
        case "changePass":
            $techReport = "active";
            break;
        case "research":
            $bestPub = "active";
            break;
        case "publications":
            $patents = "active";
            break;
        case "conferences":
            $research = "active";
            break;
    }
    return "
    <div id='edit_nav_container'>
    <ul>
    <li class='edit $articleacc' id='nav_basic_info'>
    <a href='$domain/articles_accepted_publication.php'>
    Articles already accpeted for publications
</a>
</li>
<li class='edit $articleapp' id='nav_appointment_info'>
<a href='$domain/articles_appeared_journal.php'>
Articles that have already appeared in learned Journals
</a>
</li>
<li class='edit $bookPub' id='nav_education_info'>
<a href='$domain/books_published.php'>
Books already Published
</a>
</li>
<li class='edit $bookAccept' id='nav_academic_qualification'>
<a href='$domain/books_accepted_publication.php'>
Books already accepted for publication
</a>
</li>
<li class='edit $chapBookAccept' id='nav_professional_qualification'>
<a href='$domain/chapters_books_accepted_publication.php'>
Chapters in Books already accepted for publication
</a>
</li>
<li class='edit $chapBookPub' id='nav_awards_received'>
<a href='$domain/chapter_books_published.php'>
Chapters in Books already Published
</a>
</li>
<li class='edit $revised' id='nav_research'>
<a href='$domain/revised_chapters_books.php'>
Revised Chapters in Books
</a>
</li>
<li class='edit $editorialWork' id='nav_publications'>
<a href='$domain/editorial_work.php'>
Editorial Work
</a>
</li>
<li class='edit $confPro' id='nav_conference'>
<a href='$domain/articles_appeared_refereed_conference.php'>
Articles that have already appeared in Refereed Conference Proceedings
</a>
</li>
<li class='edit $confAt' id='nav_best_publications'>
<a href='$domain/conference_attended.php'>
Conference Attended
</a>
</li>
<li class='edit $monographs' id='nav_change_passwords'>
<a href='$domain/monographs.php'>
Monographs
</a>
</li>
<li class='edit $techReport' id='nav_change_passwords'>
<a href='$domain/technical_reports.php'>
Technical Reports
</a>
</li>
<li class='edit $bestPub' id='nav_change_passwords'>
<a href='$domain/ten_best_publications.php'>
Ten Best Publications
</a>
</li>
<li class='edit $patents' id='nav_change_passwords'>
<a href='$domain/patents.php'>
Patents
</a>
</li>
<li class='edit $research' id='nav_change_passwords'>
<a href='$domain/research_focus.php'>
Research Focus
</a>
</li>

</ul>
    </div> 
    ";
}
