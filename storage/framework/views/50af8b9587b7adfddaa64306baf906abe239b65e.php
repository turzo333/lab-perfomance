<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<h1>Add Student</h1>

	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="<?php echo e(route('logout.index')); ?>">logout</a>

<br><br>

<form method="post" enctype="multipart/form-data" >
	<?php echo e(csrf_field()); ?>

	<table border="0">
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>category</td>
			<td>
				<select name="category" id="">
					  <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($cate->id); ?>"><?php echo e($cate->cname); ?></option>

					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>sort</td>
			<td><input type="text" name="sort" value=""></td>
		</tr>
		<tr>
			<td>des</td>
			<td><textarea type="text" name="des" value=""></textarea></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($err); ?> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>