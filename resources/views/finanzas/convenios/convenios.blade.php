@extends('index')
@section('card')



<script type="text/javascript">
    $(document).ready( function () {
    $('#convenios').DataTable();
} );
</script>

<!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Registro de Convenios </h4>
        </div>

<!-- fin de caebcera de sección -->
<!-- Tabla de citas  -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="{{route('Agregar-convenios')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Ingresar nuevo convenio</a>
                                            </div>
                                           
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap display" id="">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th class="all">N° Convenio</th>
                                                        <th>Fecha</th>
                                                        <th>Empresa</th>
                                                        <th>% convenio</th>
                                                        <th>Acción</th>
                                                        
                                                    </tr>
                                                </thead>
                                               
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->        
                        
                    </div> <!-- container -->


                    <div id="row-callback-datatable_wrapper convenios" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="row-callback-datatable_length"><label>Show <select name="row-callback-datatable_length" aria-controls="row-callback-datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="row-callback-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="row-callback-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="row-callback-datatable" class="table dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="row-callback-datatable_info" style="width: 895px;">
                                            <thead>
                                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="row-callback-datatable" rowspan="1" colspan="1" style="width: 129.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="row-callback-datatable" rowspan="1" colspan="1" style="width: 198.8px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="row-callback-datatable" rowspan="1" colspan="1" style="width: 92.8px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="row-callback-datatable" rowspan="1" colspan="1" style="width: 38.8px; display: none;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="row-callback-datatable" rowspan="1" colspan="1" style="width: 85.8px; display: none;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="row-callback-datatable" rowspan="1" colspan="1" style="width: 77.8px; display: none;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                            </thead>
                                            <tbody>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            <tr role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1">Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td style="display: none;">33</td>
                                                    <td style="display: none;">2008/11/28</td>
                                                    <td class="text-danger" style="display: none;">$162,700</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td style="display: none;">47</td>
                                                    <td style="display: none;">2009/10/09</td>
                                                    <td class="text-danger" style="display: none;">$1,200,000</td>
                                                </tr><tr role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1">Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td style="display: none;">66</td>
                                                    <td style="display: none;">2009/01/12</td>
                                                    <td style="display: none;">$86,000</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1" tabindex="0">Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td style="display: none;">41</td>
                                                    <td style="display: none;">2012/10/13</td>
                                                    <td style="display: none;">$132,000</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1" tabindex="0">Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td style="display: none;">28</td>
                                                    <td style="display: none;">2011/06/07</td>
                                                    <td class="text-danger" style="display: none;">$206,850</td>
                                                </tr><tr role="row" class="even">
                                                    <td tabindex="0" class="sorting_1">Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td style="display: none;">61</td>
                                                    <td style="display: none;">2012/12/02</td>
                                                    <td class="text-danger" style="display: none;">$372,000</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1" tabindex="0">Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td style="display: none;">38</td>
                                                    <td style="display: none;">2011/05/03</td>
                                                    <td class="text-danger" style="display: none;">$163,500</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1" tabindex="0">Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td style="display: none;">21</td>
                                                    <td style="display: none;">2011/12/12</td>
                                                    <td style="display: none;">$106,450</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1" tabindex="0">Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td style="display: none;">46</td>
                                                    <td style="display: none;">2011/12/06</td>
                                                    <td style="display: none;">$145,600</td>
                                                </tr><tr role="row" class="even">
                                                    <td tabindex="0" class="sorting_1">Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td style="display: none;">22</td>
                                                    <td style="display: none;">2012/03/29</td>
                                                    <td class="text-danger" style="display: none;">$433,060</td>
                                                </tr></tbody>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="row-callback-datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="row-callback-datatable_paginate"><ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="row-callback-datatable_previous"><a href="#" aria-controls="row-callback-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="row-callback-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row-callback-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row-callback-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row-callback-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row-callback-datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row-callback-datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="row-callback-datatable_next"><a href="#" aria-controls="row-callback-datatable" data-dt-idx="7" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>







<!-- Fin de tabla de citas -->
              
@endsection