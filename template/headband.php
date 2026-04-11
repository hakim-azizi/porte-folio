<section>
	<aside class="headband">
		<figure>
<?php
$four_projects_data=mysqli_query($connectionbd,'SELECT * FROM project ORDER BY RAND() LIMIT 4');
while($four_projects=mysqli_fetch_assoc($four_projects_data)){ 
	?>
			<a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$four_projects['screen']); ?>'>
				<img src='<?php echo $adjust_url; ?>photo/<?php echo $four_projects['screen']; ?>' 
				srcset='<?php echo $adjust_url; ?>photo/<?php echo $four_projects['screen_thumbnail']; ?> 300w'
				alt='<?php echo $four_projects['alt']; ?>'>
			</a>
<?php
}
?>
		</figure>
	</aside>
</section>