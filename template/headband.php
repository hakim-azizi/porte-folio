<section>
	<aside class="headband">
		<figure>
<?php
$four_projects_data=mysqli_query($connectionbd,'SELECT * FROM project ORDER BY RAND() LIMIT 4');
while($four_projects=mysqli_fetch_assoc($four_projects_data)){ 
	?>
			<a href='../projects/<?php echo str_replace('.jpg','.html',$four_projects['screen']); ?>'><img src='../photo/<?php echo $four_projects['screen']; ?>' alt='<?php echo $four_projects['alt']; ?>'></a>
<?php
}
?>
		</figure>
	</aside>
</section>