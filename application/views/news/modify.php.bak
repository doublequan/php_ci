<div style="text-align:left; border:1px solid #ccc;-moz-border-radius:20px; -webkit-border-radius:20px;     border-radius:20px;  ">
	<!-- <h2><?php echo $title; ?></h2> -->
	国内新闻

	<?php foreach ($news as $news_item): ?>
		<p>
		<div style="font-weight:bold; "><?php echo $news_item['title']; ?></div>
		<div class="main">
			<?php echo $news_item['text']; ?>
		</div>
		<a href="<?php echo site_url('news/modify/'.$news_item['id']); ?>">Edit 编辑</a>
		</p>
	<?php endforeach; ?>
</div>