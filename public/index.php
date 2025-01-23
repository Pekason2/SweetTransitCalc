<?php /** @noinspection DuplicatedCode */

require "../private/Models/Autoloader.php";

$class = "";
$function = "";
$content = null;
$content2 = null;
$content3 = null;
$result = "";
$true_result = "";

if (isset($_REQUEST['class']) && isset($_REQUEST['function'])) {

    $tmp_class = "STC\\Controller\\" . $_REQUEST['class'] . "Controller";

    $class = new $tmp_class;
    $function = $_REQUEST['function'] . "Action";

    if (isset($_REQUEST['content'])) {
        $content = $_REQUEST['content'];
    }
    if (isset($_REQUEST['content2'])) {
        $content2 = $_REQUEST['content2'];
    }
    if (isset($_REQUEST['content3'])) {
        $content3 = $_REQUEST['content3'];
    }

    $result = $class->$function($content, $content2, $content3);
    print_r($result);
}
