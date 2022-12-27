<?php
// include_once 'includes/database.class.php';
// include_once 'includes/user.class.php';
// print_r($_SERVER);

function load_template($name)
{
    //  include __DIR__."/../_templates/$name.php"; one way but little confusion
    include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/htdocs/taxservice/_templates/$name.php";
}
?>