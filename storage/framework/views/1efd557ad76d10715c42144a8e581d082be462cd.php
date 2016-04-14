<!DOCTYPE html>
<html>
<head>
    <title>Pagina de prueba</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <?php echo e(Form::open(array('url' => '/login', 'id' => 'formulario', 'method' => 'post'))); ?>

            
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                <?php foreach($errors->all() as $error): ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        <?php echo e(Form::close()); ?>

    </div>
</body>
</html>
