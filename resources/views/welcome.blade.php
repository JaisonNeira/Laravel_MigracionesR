<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Naire</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><strong>Naire</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Tablas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Agregar producto</a>
        </li>
      </ul>
    </div>

    <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/">Salir</a>
    </div>
  </div>


  </div>
</nav>

      <div class="container">
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h2>Tabla Aprendices</h2>
              <div>

              <input class="form-control" type="text" placeholder="0" aria-label="Disabled input example" disabled>
              </div>
              
            </div>
            <table class='table table-striped table-hover table-secondary'>
                    <thead>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Edad</th>
                        <th>Id_Ficha</th>
                        <th>Nombre ficha</th>
                    </thead>
                    <tbody>
                    @foreach ($aprendises as $aprendiz) 
                    <tr>
                        <td>{{$aprendiz->id}}</td>
                        <td>{{$aprendiz->nombre}}</td>
                        <td>{{$aprendiz->apellidos}}</td>
                        <td>{{$aprendiz->telefono}}</td>
                        <td>{{$aprendiz->direccion}}</td>
                        <td>{{$aprendiz->correo}}</td>
                        <td>{{$aprendiz->edad}}</td>
                        <td>{{$aprendiz->id_ficha}}</td>
                        <td>{{$aprendiz->ficha->nombre}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
      </div>




      
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>