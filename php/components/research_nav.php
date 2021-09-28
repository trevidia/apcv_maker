<?php


function research_nav($nav)
{
    $completed = "non_active";
    $inProgress = "non_active";
    $project = "non_active";
    switch ($nav) {
        case "completed":
            $completed = "active";
            break;
        case "inProgress":
            $inProgress = "active";
            break;
        case "project":
            $project = "active";
            break;
    }
    return "<ul id=\"research_drawer\">
    <li class='nav_box $completed'>
        <a href=\"research_completed.php\">
            Research Completed
        </a>
    </li>
    <li class='nav_box $inProgress'>
        <a href=\"research_progress.php\">
            Research in Progress
        </a>
    </li>
    <li class='nav_box $project'>
        <a href=\"project_dissertation_thesis.php\">
            Project, Dissertation and Thesis
        </a>
    </li>
</ul>
    ";
}