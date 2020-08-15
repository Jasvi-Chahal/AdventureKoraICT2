<div class="sidebar clear">
<div class="samesidebar clear">
	<h2>Adventures Trip Types</h2>
		<ul>
<?php
	$query = "SELECT * FROM triptype"; //selecting database
	$category  = $db->select($query);
	if ($category) {
		while ($result = $category->fetch_assoc()) {
?>
	<li><img src="images/icon-arrow.png" alt="*" height="10px" width="10px"/> <a href="posts.php?cat_id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
<?php } } else {
			echo "<li><b>Sorry! NO triptype to show!</b></li>";
		} ?></ul>
</div>