<?php $__env->startSection('card'); ?>
<script type="text/javascript">
    $(document).ready( function () {
    $('#especialistas').DataTable();
} );
</script>

  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Planilla de Especialistas
                                    </div>
                                    <h4 class="page-title">Gestion de Especialistas</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100  dt-responsive nowrap" id="especialistas">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="all">N° Pro</th>
                                                        <th>RUT</th>
							                            <th>Identificacion</th>
							                            <th>Nombre</th>
							                            <th>Apellidos</th>
							                            <th>Especialidad</th>
							                            <th>telefono</th>
							                            <th>Correo</th>
							                            <th>Acción</th> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <a href=""><?php echo e($item->id); ?></a>
                                                        </td>
                                                        <td>
                                                           <?php echo e($item->rut_med); ?>

                                                        </td>
                                                        <td>
                                                          
                                                          <a href="<?php echo e(route('PerfilE', $item->id)); ?>" class="text-success"><?php echo e($item->medidentificacion); ?> </a>
                                                        </td>
                                                        <td>
                                                           <?php echo e($item->mednombres); ?>

                                                        </td>
                                                        <td>
                                                            <?php echo e($item->medapellidos); ?>

                                                        </td>
                                                        <td>
                                                           <?php echo e($item->medespecialidad); ?>

                                                          
                                                        </td>
                                                        <td>
                                                           <?php echo e($item->medtelefono); ?>

                                                        </td>
                                                        <td>
                                                           <?php echo e($item->medcorreo); ?>

                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                            <a href="<?php echo e(route('UpdateE', $item->id)); ?>" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                                            <form method="post" action="<?php echo e(route('DeleteE', $item->id)); ?>">
                                                                    <?php echo method_field('DELETE'); ?> 
                                                                    <?php echo csrf_field(); ?>
                                                              <button  class="btn btn-primary" type="submit"><i class="far fa-trash-alt"></i></button>
                                                            </form>
                                                            </div>
                                                            
                                                        </td>
                                                       
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     
                
                                        
                                
                           

              
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u232615251/domains/geekn.cf/public_html/resources/views/especialistas/registro.blade.php ENDPATH**/ ?>