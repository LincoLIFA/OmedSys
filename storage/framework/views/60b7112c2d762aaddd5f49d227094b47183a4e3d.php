<?php $__env->startSection('card'); ?>

  <!-- Start Content-->
                   
                        
                        <!-- start page title -->
                       
                        <!-- end page title --> 

                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="<?php echo e(route ('AgregarC')); ?>" method="POST">
                                               <?php echo method_field('POST'); ?> 
                                                <?php echo csrf_field(); ?>
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class="form-control" name="citfecha" placeholder="Fecha" value=""required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="inputTime">Hora</label>
                                                  <input type="time" name="cithora" value="" max="20:30" min="08:00" step="60" class="form-control" placeholder="Hora" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger una Hora</small>
                                                </div>
                                              </div>
                                              
                    						
                    						<div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Paciente</label>
                                                    <div class="col-sm-10">
                                                      <select name="citPaciente"  class="custom-select mr-sm-1" required>
                    							        <option value="Seleccione un paciente">Seleccione un paciente</option>
                    							        <?php $__currentLoopData = $result2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    							        <option value="Seleccione un profesional">Seleccione un profesional</option>
                    							        <?php $__currentLoopData = $result3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    							        <option value="Seleccione una especialidad">Seleccione una especialidad</option>
                    							         <?php $__currentLoopData = $result4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                <label for="exampleInputEmail1">Observaciones sobre la Cita o el Paciente </label>
                                               <textarea class="form-control" placeholder="Observación" value="Observaciones"name="citObservaciones">Observación</textarea>
                    						    
                                            </div>
                                            <input type="submit" name="enviar" class="btn btn-danger btn-block" value="Ingresar registro de reserva">
                                            
                                            
                                            
                    					</form>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                             

                        
                        
                    </div> <!-- container -->
                    
                     <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap display" id="citas">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th class="all">N° Cita</th>
                                                        <th>Fecha</th>
                                                        <th>Hora</th>
                                                        <th>Paciente</th>
                                                        <th>Especialista</th>
                                                        <th>Especialidad</th>
                                                        <th>Estado</th>
                                                        <th>Met. Confirm.</th>
                                                        <th>Acción</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <a href=""><?php echo e($item2->id); ?></a>
                                                        </td>
                                                        <td>
                                                           <?php echo e($item2->citfecha); ?>

                                                        </td>
                                                        <td>
                                                          <?php echo e($item2->cithora); ?>

                                                        </td>
                                                        <td>
                                                            <a href="<?php echo e(route('PerfilPC', $item2->citPaciente)); ?>" class="text-success"><?php echo e($item2->citPaciente); ?> </a>
                                                           
                                                        </td>
                                                        <td>
                                                            <?php echo e($item2->citMedico); ?>

                                                        </td>
                    
                                                        <td>
                                                           <?php echo e($item2->citEsp); ?>

                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success"><?php echo e($item2->citEstado); ?></span>
                                                        </td>
                                                        <td>
                                                           <?php echo e($item2->confirmacion); ?>

                                                        </td>
                    
                                                        <td>
                                                             <div class="row">
                                                            <a href="<?php echo e(route('UpdateC', $item2->id)); ?>" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                                            <form method="post" action="<?php echo e(route('DeleteC', $item2->id)); ?>">
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
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->        
                        
                    </div> <!-- container -->
                           

              
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u232615251/domains/geekn.cf/public_html/resources/views/citas/agregarcitas.blade.php ENDPATH**/ ?>