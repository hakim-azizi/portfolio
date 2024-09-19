<?php echo"<?xml"; ?> version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
$page = scandir('../');
$lenght_array = count($page);
$number_page=0;
$array_page=[];
for($i=0;$i<$lenght_array;$i++){
	if(strstr($page[$i],'.php')){
		$show_page=str_replace(['project.php','.php'],['project','.html'],$page[$i]);
		$number_page++; ?>
	<url>
		<loc>https://url-du-site.com/<?php echo $show_page; ?></loc>
		<lastmod><?php echo date("Y-m-d"); ?></lastmod>
	</url>
<?php
	}
}
$project = scandir('../photo');
$lenght_array = count($project);
$number_project=0;
$array_project=[];
for($i=0;$i<$lenght_array;$i++){
	if(strstr($project[$i],'.jpg')){
		$show_project=str_replace('.jpg','.html',$project[$i]);
		$number_project++;
		?>
	<url>
		<loc>https://www.example.com/<?php echo $show_page; ?></loc>
		<lastmod><?php echo date("Y-m-d"); ?></lastmod>
	</url>
<?php
	}
}
?>
</urlset>