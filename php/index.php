<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ESTABLECIMIENTO PUBLICO</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/stilos.css" />
  </head>
  <body>
    <header class="container mt-4">
      <center><h1 class="text">Registros de Docentes </h1></center>
    </header>
    <main class="container">
      <div class="mt-4">
        <form class="w-50 mx-auto formRegistro">
          <div>
            <h5 class="text">Datos personales:</h5>
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label text">Nombre:</label>
            <input
              type="text"
              class="form-control"
              id="nombre"
              placeholder="Nombre"
            />
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label text">Apellido:</label>
            <input
              type="text"
              class="form-control"
              id="apellido"
              placeholder="Apellido"
            />
          </div>
          <div class="mb-3">
            <label for="dni" class="form-label text">DNI:</label>
            <input
              type="number"
              class="form-control"
              id="dni"
              placeholder="DNI"
            />
          </div>
          <div>
            <h5 class="text">Datos academicos:</h5>
          </div>
          <div class="mb-3">
            <label for="curso" class="form-label text">Curso:</label>
            <input
              type="number"
              class="form-control"
              id="curso"
              placeholder="Curso"
            />
          </div>
          <div class="mb-3">
            <label for="carrera" class="form-label text">Carrera:</label>
            <input
              type="text"
              class="form-control"
              id="carrera"
              placeholder="Carrera"
            />
          </div>
          <div class="text-center my-4">
            <button class="btn btn-primary w-50" type="submit">Guardar</button>
          </div>
        </form>
      </div>
      <div>
        <hr />
        <div>
          <h2 class="text text-white">Profesores registrados</h2>
        </div>
        <div>
          <h2 class="sistema text-center text my-3 text-white">No hay Docentes cargados</h2>
        </div>
        <table class="table table-responsive table-striped tablaAlumnos d-none">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">DNI</th>
              <th scope="col">Curso</th>
              <th scope="col">Año</th>
              <th scope="col">Carrera</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/app.js"></script>    
</body>
</html>