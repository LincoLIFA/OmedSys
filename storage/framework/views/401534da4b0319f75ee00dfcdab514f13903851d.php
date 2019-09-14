<?php $__env->startSection('card'); ?>




 <!-- Start Content-->
                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="<?php echo e(route('ActualizarC',$cita->id)); ?>" method="POST">
                                            <?php echo method_field('PUT'); ?>
                                            <?php echo csrf_field(); ?>
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class="form-control" name="citfecha" placeholder="Fecha" value="<?php echo e($cita->citfecha); ?>"required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="inputTime">Hora</label>
                                                  <input type="time" name="cithora" value="<?php echo e($cita->cithora); ?>" max="20:30" min="08:00" step="60" class="form-control" placeholder="Hora" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger una Hora</small>
                                                </div>
                                              </div>
                                              
                    						
                    						<div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Paciente</label>
                                                    <div class="col-sm-10">
                                                      <select name="citPaciente"  class="custom-select mr-sm-1" required>
                    							        <option value="<?php echo e($cita->citPaciente); ?>"><?php echo e($cita->citPaciente); ?></option>
                    							        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    							        <option value="<?php echo e($mostrar->pacnombre); ?>"><?php echo e($mostrar->
                    							        pacnombre); ?></option>
                    							        
                    							        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    							        
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Profesional</label>
                                                    <div class="col-sm-10">
                                                      <select name="citMedico"  class="custom-select mr-sm-1" required>
                    							        <option value="<?php echo e($cita->citMedico); ?>"><?php echo e($cita->citMedico); ?></option>
                    							        <?php $__currentLoopData = $result2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    							        <option value="<?php echo e($mostrar->medidentificacion); ?>"><?php echo e($mostrar->medidentificacion); ?></option>
                    							        
                    							        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Especialidad</label>
                                                    <div class="col-sm-10">
                                                      <select name="citEsp"  class="custom-select mr-sm-1" required>
                    							        <option value="<?php echo e($cita->citEsp); ?>"><?php echo e($cita->citEsp); ?></option>
                    							         <?php $__currentLoopData = $result3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    							        <option value="<?php echo e($mostrar->espNombre); ?>"><?php echo e($mostrar->espNombre); ?></option>
                    							        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Metodo Confirmacion</label>
                                                    <div class="col-sm-10">
                                                      <select name="confirmacion"  class="custom-select mr-sm-1" required>
                    							        <option value="Whatsapp">Whatsapp</option>
                    							        <option value="Telefono">Telefono</option>
                    							        <option value="E-mail">E-mail</option>
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Estado de Cita </label required>
                                               <select name="citEstado" class="custom-select mr-sm-1">
                                            	<option value="Nulo">Seleccione Estado de la cita</option>
                                            	<option value="No-confirmado">No confirmado</option>
                                            	<option value="Confirmado">Confirmado</option>  
                                            	<option value="Pendiente">Pendiente</option>
                                            	<option value="Atendido">Atendido</option>  
                                            </select>   
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Observaciones sobre la Cita o el Paciente </label required>
                                               <textarea class="form-control" placeholder="Observación" name="citObservaciones">Observación</textarea>
                    						    
                                            </div>
                                            <input type="submit" name="enviar" class="btn btn-danger btn-block" value="Actualizar registro de reserva">
                                            
                                            
                                            
                    					</form>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                             

                       
                        <!-- end row -->        
                        
                    </div> <!-- container -->
             
                   
                        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u232615251/domains/geekn.cf/public_html/resources/views/citas/actualizarcitas.blade.php ENDPATH**/ ?>