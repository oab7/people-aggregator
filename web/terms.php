<?
$login_required = FALSE;
include_once("web/includes/page.php");

$page = new PageRenderer(NULL, PAGE_TERMS, sprintf(__("Terms and Conditions - %s"), PA::$network_info->name), "container_three_column.tpl", "header.tpl", PUB, HOMEPAGE, PA::$network_info);

uihelper_get_network_style();
echo $page->render();

?>