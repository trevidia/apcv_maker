<?php
function pub_drawer($value)
{
    $articlesAcceptedPub = 'non_active';
    $articlesAppearedJournal = 'non_active';
    $articlesRefereedConf = 'non_active';
    $booksAcceptedPub = 'non_active';
    $booksPublished = 'non_active';
    $chapterBooksPublished = 'non_active';
    $chapterBooksAccepted = 'non_active';
    $conferenceAttended = 'non_active';
    $editorialWork = 'non_active';
    $monographs = 'non_active';
    $patents = 'non_active';
    $researchFocus = 'non_active';
    $revisedChapters = 'non_active';
    $technicalReports = 'non_active';
    $bestPubs = 'non_active';
    switch ($value) {
        case "articlesAcceptedPub":
            $articlesAcceptedPub = "active";
            break;
        case "articlesAppearedJournal":
            $articlesAppearedJournal = "active";
            break;
        case "articlesRefereedConf":
            $articlesRefereedConf = "active";
            break;
        case "booksAcceptedPub":
            $booksAcceptedPub = "active";
            break;
        case "booksPublished":
            $booksPublished = "active";
            break;
        case "chapterBooksPublished":
            $chapterBooksPublished = "active";
            break;
        case "chapterBooksAccepted":
            $chapterBooksAccepted = "active";
            break;
        case "conferenceAttended":
            $conferenceAttended = "active";
            break;
        case "editorialWork":
            $editorialWork = "active";
            break;
        case "monographs":
            $monographs = "active";
            break;
        case "patents":
            $patents = "active";
            break;
        case "researchFocus":
            $researchFocus = "active";
            break;
        case "technicalReports":
            $technicalReports = "active";
            break;
        case "revisedChapters":
            $revisedChapters = "active";
            break;
        case "bestPub":
            $bestPubs = "active";
            break;
    }
    return "
<ul id='pub_drawer'>

    <li>
        <a class='nav_box $articlesAcceptedPub' href=\"articles_accepted_publication.php\">
            Articles already accepted for publications
        </a>
    </li>
    <li>
        <a class='nav_box $articlesAppearedJournal' href=\"articles_appeared_journal.php\">
            Articles that have already appeared in Learned Journals
        </a>
    </li>
    <li>
        <a class='nav_box $booksPublished' href=\"books_published.php\">
            Books already Published
        </a>
    </li>
    <li>
        <a class='nav_box $booksAcceptedPub' href=\"books_accepted_publication.php\">
            Books already accepted for publication
        </a>
    </li>
    <li>
        <a class='nav_box $chapterBooksAccepted' href=\"chapters_books_accepted_publication.php\">
            Chapters in Books already accepted for publication
        </a>
    </li>
    <li>
        <a class='nav_box $chapterBooksPublished' href=\"chapter_books_published.php\">
            Chapters in Books already Published
        </a>
    </li>
    <li>
        <a class='nav_box $revisedChapters' href=\"revised_chapters_books.php\">
            Revised Chapters in Books
        </a>
    </li>
    <li>
        <a class='nav_box $editorialWork' href=\"editorial_work.php\">
            Editorial Work
        </a>
    </li>
    <li>
        <a class='nav_box $articlesRefereedConf' href=\"articles_appeared_refereed_conference.php\">
            Articles that have already appeared in Refereed Conference Proceedings
        </a>
    </li>
    <li>
        <a class='nav_box $conferenceAttended' href=\"conference_attended.php\">
            Conference Attended
        </a>
    </li>
    <li>
        <a class='nav_box $monographs' href=\"monographs.php\">
            Monographs
        </a>
    </li>
    <li>
        <a class='nav_box $technicalReports' href=\"technical_reports.php\">
            Technical Reports
        </a>
    </li>
    <li>
        <a class='nav_box $bestPubs' href=\"ten_best_publications.php\">
            Ten Best Publications
        </a>
    </li>
    <li>
        <a class='nav_box $patents' href=\"patents.php\">
            Patents
        </a>
    </li>
    <li>
        <a class='nav_box $researchFocus' href=\"research_focus.php\">
            Research Focus
        </a>
    </li>
</ul>";
}
