<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;

// Sanity checks
$LAUNCH = LTIX::requireData();
if ( ! $USER->instructor ) die("Instructor only");

$OUTPUT->header();
$OUTPUT->bodyStart();
$OUTPUT->topNav();
$OUTPUT->flashMessages();
$OUTPUT->welcomeUserCourse();

echo("<p>Debug dump of session data.</p>\n");
$OUTPUT->togglePre("Session data",$OUTPUT->safe_var_dump($_SESSION));

?>
<a href="index.php">Exit</a>
<?php

$OUTPUT->footer();


