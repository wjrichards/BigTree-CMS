<?
	$module = $admin->getModule($_GET["module"]);
?>
<h1><span class="modules"></span>Module Designer</h1>
<? include BigTree::path("admin/modules/developer/modules/_nav.php"); ?>
<div class="form_container">
	<header>
		<h2>Module Complete</h2>
	</header>
	<section>
		<p>Your module is created.  You may access it <a href="<?=ADMIN_ROOT.$module["route"]?>/">by clicking here</a>.</p>
	</section>
</div>