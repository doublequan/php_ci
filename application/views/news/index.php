<div style="text-align:center; border:1px solid #ccc;-moz-border-radius:20px; -webkit-border-radius:20px;     border-radius:20px;  ">
	<!-- <h2><?php echo $title; ?></h2> -->
<div>
	<div>国内新闻</div>
	<a href="<?php echo site_url('news/modify/'); ?>" style="float:right">EDIT</a>
	<?php foreach ($news as $news_item): ?>

		<h3><?php echo $news_item['title']; ?></h3>
		<div class="main">
			<?php echo $news_item['text']; ?>
		</div>
		<p><a href="<?php echo site_url('news/view/'.$news_item['id']); ?>">View article 查看原文</a></p>
	<?php endforeach; ?>
	</div>
</div>