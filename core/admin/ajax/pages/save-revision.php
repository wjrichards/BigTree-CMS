<?
	if (is_numeric($_POST["id"])) {
		$admin->updatePageRevision($_POST["id"],$_POST["description"]);
	} else {
		$admin->saveCurrentPageRevision(substr($_POST["id"],1),$_POST["description"]);
	}
?>