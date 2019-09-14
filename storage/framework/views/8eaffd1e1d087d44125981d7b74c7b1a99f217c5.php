<?php $__env->startSection('card'); ?>
<section id="main">
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
     <!-- Bootstrap CSS -->
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<div class="row justify-content-end"> 
    <div class="col-2" >  
  <div class="alert alert-link" role="alert">  </div>
 <a class="alert-link" data-toggle="modal" href="#mimodal"> +Agregar convenio </a>
</div>
</div>
<div class= "modal fade" id= "mimodal"> 
<div class="modal-dialog">
<div class="modal-content"> 
  <div class="modal-header">
    <h5 class="modal-title">Convenios</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre convenio</label>
    <input type="email" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Seleccione %</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>10%</option>
      <option>15%</option>
      <option>20%</option>
      <option>25%</option>
      <option>30%</option>
    </select>
  </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary">Agregar</button>
  </div>
    </div>
      </div>
        </div>   

<br>
 <div class="table-responsive-sm">
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre convenio</th>
      <th scope="col">%</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Jumbo</td>
      <td>30%</td>
      <tr> 
      <td> Sodexo</td>
      <td>15%</td>
    </tr>
    </tr>
  </tbody>
</table>
</div> 

<?php $__env->stopSection(); ?> 

 
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u232615251/domains/geekn.cf/public_html/resources/views/Prueba5.blade.php ENDPATH**/ ?>