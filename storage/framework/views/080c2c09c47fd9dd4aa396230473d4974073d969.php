<?php $__env->startSection('card'); ?>

  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Modificación de Especialidades
                                    </div>
                                    <h4 class="page-title">Gestion de Especialidades</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                    <form action="<?php echo e(route('ActualizarA', $especialidades->id)); ?>" method="post">
                                            <?php echo method_field('PUT'); ?> 
                                            <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="inputRUT">Especialidad: </label>
                                            <input type="text" class="form-control" name="espNombre" placeholder="Especialdades:" value="<?php echo e($especialidades->espNombre); ?>" autofocus/>
                                        </div>
                                        <input type="submit" class="btn btn-danger btn-block" value="Editar Especialidad" />
                                  
                                    </form>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     
                
                                        
                                
                           

              
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u232615251/domains/geekn.cf/public_html/resources/views/especialidades/update.blade.php ENDPATH**/ ?>