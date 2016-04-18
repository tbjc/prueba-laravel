<!DOCTYPE html>
<html>
<head>
	<title>Pagina de prueba</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Administracion</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{!! Auth::user()->name !!} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Configuracion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/salir">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-3">
		{{ Form::open(array('url' => '/createuser', 'id' => 'formulario2', 'method' => 'post')) }}
		  <div class="form-group">
		    <label for="insertName">Nombre</label>
		    <input type="text" class="form-control input-sm" id="insertName" placeholder="Nombre" name="name">
		  </div>
		  <div class="form-group">
		    <label for="insertEmail">Email</label>
		    <input type="email" class="form-control input-sm" id="insertEmail" placeholder="Email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="insertPassword">Password</label>
		    <input type="password" class="form-control input-sm" id="insertPassword" placeholder="Password" name="password">
		  </div>
		  <button type="submit" class="btn btn-default input-sm">Guardar</button>
		{{ Form::close() }}
		</div>
		<div class="col-md-9">
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $user)
					<tr>
						<td>{{ $user->id}}</td>
						<td>{{ $user->name}}</td>
						<td>{{ $user->email}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $usuarios->render() !!}
		</div>
	</div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>