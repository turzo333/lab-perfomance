<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>

        <style>
        .uk-container>:last-child {
    /* margin-bottom: 0; */
    margin: auto;
    display: table;
    box-shadow: 0 0 14px #e1e1e1;
    padding: 6%;
    margin-top: 50px;
    margin-bottom: 50px;
}
        </style>
</head>
<body>

	<div class="uk-container">

	<div class="uk-card uk-card-body">

	<h1>Register</h1>



	<form method="post" >
		<!-- @csrf  -->

		<!-- <?php echo e(csrf_field()); ?> -->

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

		<div class="uk-margin">

<input type="text" name="name" placeholder="name" class="uk-input uk-form-width-medium">

</div>

<div class="uk-margin">

<input type="text" name="phone" placeholder="phone" class="uk-input uk-form-width-medium">

</div>
    <div class="uk-margin">

				<input type="text" name="username" placeholder="Username" class="uk-input uk-form-width-medium">

</div>


			    <div class="uk-margin">

				<input type="password" name="password" placeholder="Password" class="uk-input uk-form-width-medium">
			</div>



					<input type="submit" name="submit" value="Submit" class="uk-button uk-button-primary">

	</form>

	<div>
		<?php echo e(session('msg')); ?>

	</div>
	</div>
</div>
</body>
</html>