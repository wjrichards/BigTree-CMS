<?
	$admin->updateCallout($_POST["id"],$_POST["name"],$_POST["description"],$_POST["level"],$_POST["resources"],$_POST["display_field"],$_POST["display_default"]);

	$admin->growl("Developer","Updated Callout");
	header("Location: ".$developer_root."callouts/view/");
	die();
?>