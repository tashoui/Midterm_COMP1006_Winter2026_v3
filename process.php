<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request');
}

$title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS));
$author  = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_SPECIAL_CHARS));
$rating  = trim(filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_SPECIAL_CHARS));
$review_text  = trim(filter_input(INPUT_POST, 'review_text', FILTER_SANITIZE_SPECIAL_CHARS));


if ($title === null || $title === '') {
    $errors[] = "Title is required.";
}

if ($author === null || $author === '') {
    $errors[] = "Author is required.";
}

if ($Rating === null || $Rating === '') {
    $errors[] = "Rating is required.";
}
?>