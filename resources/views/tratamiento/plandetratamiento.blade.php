@extends('finanzas.index')
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
          <h3 class="card-title"></h3>

          <div id="DataTables_Table_0_filter" class="dataTables_filter">
                <label>Busca planes de tratamiento:
                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                </label>
            </div>

        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
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