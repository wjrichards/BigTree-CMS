<?
	header("Content-type: text/javascript");
	
	$id = mysql_real_escape_string($_GET["id"]);
	
	// Grab View Data
	$view = BigTreeAutoModule::getView($_GET["view"]);
	$table = $view["table"];
	$module = $admin->getModule(BigTreeAutoModule::getModuleForView($_GET["view"]));
	$perm = $admin->getAccessLevel($module,$item,$table);
	$item = sqlfetch(sqlquery("SELECT * FROM `$table` WHERE id = '$id'"));

	if ($item["featured"]) {
		if ($perm != "p") {
			echo 'BigTree.growl("'.$module["name"].'","You don\'t have permission to perform this action.");';
		} else {
			echo 'BigTree.growl("'.$module["name"].'","Item is now unfeatured.");';
			sqlquery("UPDATE `$table` SET featured = '' WHERE id = '$id'");
		}
	} else {
		if ($perm != "p") {
			echo 'BigTree.growl("'.$module["name"].'","You don\'t have permission to perform this action.");';
		} else {
			echo 'BigTree.growl("'.$module["name"].'","Item is now featured.");';
			sqlquery("UPDATE `$table` SET featured = 'on' WHERE id = '$id'");
		}
	}
	
	BigTreeAutoModule::recacheItem($id,$table);
?>