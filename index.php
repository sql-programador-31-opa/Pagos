<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-sm">
    <div class="container-sm">
        <h1>Planes de pagos mensuales</h1>
    </div>
    <form action="calcular.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Digite la tasa</label>
    <input type="number" class="form-control" name="tasa" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Digite el plazo</label>
    <input type="number" class="form-control" name="plazo"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Digite el Monto a prestar o a depositar</label>
    <input type="number" class="form-control" name="monto"  step="any"  required>
  </div>
  <div class="mb-3">
  <select class="form-select" name="plan" aria-label="Default select example" required>
  <option value="1">Ahorros</option>
  <option value="2">Credito</option>
  </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>