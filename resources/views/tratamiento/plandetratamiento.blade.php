@extends('index')
@section('card')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Planes de tratamientos </h1>
      </div>
      <div class="col-sm-6">
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
                <h3 class="card-title">Lista de Planes de Tratamiento</h3>
      
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 220px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar planes de tratamiento">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects buscador">
              <thead>
                  <tr>
                      <th>
                          #ID
                      </th>
                      <th>
                          Nombre del plan
                      </th>
                      <th>
                          Nombre del paciente
                      </th>
                      <th>
                          Fecha
                      </th>
                      <th>
                          Total
                      </th>
                      <th>
                          Procedimientos
                      </th>

                  </tr>
              </thead>
              <tbody>
                    
                  <tr>
                      <td>
                            #
                      </td>
                      <td>
                          <a href="#">
                              AdminLTE v3
                          </a>
                          <br>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>

                      <td>
                          Fernando Jimenez
                      </td>

                      <td>
                         25/12/2019 
                      </td>

                      <td>
                        $27.000
                      </td>
                      <td>
                            <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Ver procedimientos
                                </a>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

@endsection