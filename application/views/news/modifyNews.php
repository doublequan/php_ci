<div style="text-align:left; border:3px solid #ccc;  ">
	<!-- <h2><?php echo $title; ?></h2> -->



<?php 
	echo validation_errors();
	$hidden = array('news_id' => $news_id['id']);
	echo form_open('news/modifyNews', '', $hidden); ?>
	<p>
	<label style="font-weight:bold; font-size:20px;">标题：</label>
	<?php echo form_input(array('name'      => 'title',
								'id'        => 'title',
								'value'     => $news_id['title'],
								'maxlength' => '40',
								'size'      => '50',
								'style'     => 'width:50%')
                          );
	?>
	</p>
	<p >
	<div style="display:inline;"><label style="font-weight:bold; font-size:20px;">内容：</label></div>
	<div style="display:inline;">
	<?php echo form_textarea(array( 'name'      => 'text',
									'id'        => 'text',
									'value'     => $news_id['text'],
									'rows'      => '20',
									'cols'      => '5',
									'style'     => 'width:80%')
                          );
	?>
	</div>
	</p>

	<div style="text-align:center">
		<input  type="submit" name="submit" value="Submit">
	</div>
</form>

</div>