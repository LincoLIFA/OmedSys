<?php $__env->startSection('card'); ?>

  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Modificación de Especialista
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
                                      <form action="<?php echo e(route('ActualizarE',$especialistas->id)); ?>" method="post">
                                          <?php echo e(csrf_field()); ?>

                                           <?php echo method_field('PUT'); ?>
						                <div class="form-group">
                                            <label for="inputRUT">RUT</label>
                                            <input type="text" class="form-control" name="rut_med" value="<?php echo e($especialistas->rut_med); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRUT">Identificacion</label>
                                            <input type="text" class="form-control"  name="medidentificacion"value="<?php echo e($especialistas->medidentificacion); ?>" pattern="[A-Za-z0-9.-_ ]+" required>
                                        </div>                        
						                <div class="form-row">
                                            <div class="col">
                                                <label for="inputName">Nombres: </label>
                                                <input type="text" class="form-control"  value="<?php echo e($especialistas->mednombres); ?>" name="mednombres" minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: ]+" required >
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">Apellidos: </label>
                                                <input type="text" class="form-control" name="medapellidos" value="<?php echo e($especialistas->medapellidos); ?>"  minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: ]+" required>
                                            </div>
                                        </div>
						                <div class="form-row">
                                            <div class="col">
                                                <label for="inputEmail">E-mail</label>
                                                <input  class="form-control" type="email" value="<?php echo e($especialistas->medcorreo); ?>" name="medcorreo" placeholder="alguien@algo.cl" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">N°de celular</label>
                                                <input type="text" class="form-control" name="medtelefono" value="<?php echo e($especialistas->medtelefono); ?>" placeholder="Numero de celular"  minlength="9" maxlength="9"pattern="[A-Za-z0-9.-_,;: ]+" required>
                                                <small id="telefonoHelp" class="form-text text-muted">Nota: solo debes    ingresar los 9 digitos de tu numero de celular</small>
                                            </div>
                                        </div>
						                <div class="form-group">
                                            <label for="cbx_ESP">Especialidad</label>
                                            <select class="form-control" name="especialidad">
                                                <option value="Seleccione especialidad">Seleccione especialidad</option>
                                                <?php $__currentLoopData = $result2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($mostrar->espNombre); ?>"><?php echo e($mostrar->espNombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						                    </select>
                                        </div>
						                <input type="submit" class="btn btn-danger btn-block" name="enviar" value="Actualizar registro de especialista">
						
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     
                
                                        
                                
                           

              
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u232615251/domains/geekn.cf/public_html/resources/views/especialistas/update.blade.php ENDPATH**/ ?>