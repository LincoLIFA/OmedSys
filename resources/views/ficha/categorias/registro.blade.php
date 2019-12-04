@extends('ficha.index')
@section('card')

    <!-- Start Content-->               
<div class="container-fluid">                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Lista de Categorias</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->
</div>   
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Crear nueva Categorìa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nombre-categoria" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" name="nombre-cat" class="form-control" id="nombre-cat" placeholder="Nombre de categorìa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="area-categoria" class="col-sm-2 col-form-label">Àrea clinica</label>
                    <div class="col-sm-10">
                      <input type="text" name="area-cat" class="form-control" id="area-cat" placeholder="Nombre de àrea">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="especialista-categoria" class="col-sm-2 col-form-label">Especialista</label>
                    <div class="col-sm-10">
                      <input type="text" name="especialista-cat" class="form-control" id="especialista-cat" placeholder="Nombre de especialista">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="plan-categoria" class="col-sm-2 col-form-label">Plan de Tratamiento</label>
                    <div class="col-sm-10">
                      <input type="text" name="plan-cat" class="form-control" id="plan-cat" placeholder="Nombre de plan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fecha-categoria" class="col-sm-2 col-form-label">Fecha de creaciòn</label>
                    <div class="col-sm-10">
                      <input type="date" name="feha-cat" class="form-control" id="fecha-cat" >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Ingresar</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
           <div class="col-md-4">
            <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                     <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                     <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                     <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registro de Categorias Vigentes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <a href="{{url('Citas/aggcitas')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Crear nueva cita</a>
                                </div>              
                            </div>
                            <table id="example2" class="table Tablas table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="all">N°</th>
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                        <th>Area</th>
                                        <th>Especialista</th>
                                        <th>Plan de T.</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            
                            </table>
                        </div>
                         <!-- /.card-body -->
                    </div>
                     <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
@endsection