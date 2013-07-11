<?php
	$this->load->view("admin/_header");
?>
	<div class="container-fluid">

	
	  <div class="row-fluid">
		<?php
			$this->load->view("admin/_left");
		?>

		<span class="span9">
			<ul class="breadcrumb">
			  <li><a href="/">首页</a> <span class="divider">/</span></li>
			  <li class="active">报名列表</li>
			</ul>
		</span>
	<div class="span9">
<table class="table table-hover">
	<thead>
		<tr>
		<th>id</th>
		<th>名字</th>
		<th>性别</th>
		<th>电话</th>
		<th>课程</th>
		<th>email</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach($users as $user)
		{
			?>
		<tr>
		<td><?php echo $user['id'];?></td>
		<td><?php echo $user['name'];?></td>
		<td><?php if($user['gender'] == 1) echo "男"; else echo "女";?></td>
		<td><?php echo $user['phone'];?></td>
		<td><?php echo $user['typename'];?></td>
		<td><?php echo $user['email'];?></td>
		</tr>

			<?php
		}
	?>

	</tbody>
</table>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

<?php
	$this->load->view("admin/_footer");
?>
