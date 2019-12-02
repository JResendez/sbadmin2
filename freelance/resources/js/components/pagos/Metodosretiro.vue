<template>


    <!-- Begin Page Content -->
      <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Metodos de Retiros
                <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
                    Nuevo metodo
                </a>                
            </h1>
        



        <!--MODAL-->

        <div class="modal fade" id="create">
            <div class="modal-dialog">
                <div class="modal-content">


              <div class="col-lg-12">
                <!-- Collapsable Card Example -->
                <div class="card  mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">AGREGAR METODO</h6>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">

                      <form class="user">
                        <div class="form-group row">
                          <div class="col-sm-12 mb-4 ">
                            <input type="text" class="form-control form-control-user" id="nombreMetodo" placeholder="Nombre Metodo">
                          </div>
                          <div class="col-sm-12 mb-4">
                            <input type="text" class="form-control form-control-user" id="logoMetodo" placeholder="Logo Metodo">
                          </div>
                          <div class="col-sm-12 mb-4">
                            <input type="number" class="form-control form-control-user" id="montoMinimo" placeholder="Monto Minimo">
                          </div>
                          <div class="col-sm-12 mb-4">
                            <input type="number" class="form-control form-control-user" id="montoMaximo" placeholder="Monto Maximo">
                          </div>
                          <div class="col-sm-12 mb-4">
                            <input type="number" class="form-control form-control-user" id="cargoFijo" placeholder="Cargo Fijo">
                          </div>
                          <div class="col-sm-12 mb-4">
                            <input type="number" class="form-control form-control-user" id="porcentajeCarga" placeholder="Porcentaje de carga">
                          </div>
                          <div class="col-sm-12 mb-4">
                            <input type="number" class="form-control form-control-user" id="tarija" placeholder="Tarifa">
                          </div>
                          <div class="col-sm-12 mb-4">
                            <input type="number" class="form-control form-control-user" id="diasProcesamiento" placeholder="Dias de procesamiento">
                          </div>
                          




                          <div class="modal-footer">
                          <input type="submit" class="btn btn-primary" value="Guardar">
                  
                          <input type="submit" class="btn btn-primary" data-dismiss="modal" value="Cerrar">
                      </div>
                        </div>

                      
                      </form>

                      
                    </div>
                  </div>
                </div>
              </div>                
                </div>
            </div>
        </div>

        
        <!--FIN_MODAL-->
        

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Metodos</h6>
                    </div>
                        <div class="card-body">
                         
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>

                            <th>Nombre Del Metodo</th>
                            <th>Logo Del Metodo</th>
                            <th>Cantidad Minima</th>
                            <th>Cantidad Maxima</th>
                            <th>Cargo Fijo</th>
                            <th>Porcentaje de Carga</th>
                            <th>Tarifa</th>
                            <th>Día de procesamiento</th>
                            <th>Status</th>
                            <th>Acción</th>


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>

                            <th>Nombre Del Metodo</th>
                            <th>Logo Del Metodo</th>
                            <th>Cantidad Minima</th>
                            <th>Cantidad Maxima</th>
                            <th>Cargo Fijo</th>
                            <th>Porcentaje de Carga</th>
                            <th>Tarifa</th>
                            <th>Día de procesamiento</th>
                            <th>Status</th>
                            <th>Acción</th>


                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            
                            <td>Nombre del Metodo</td>
                            <td>Logo</td>
                            <td>10</td>
                            <td>10000</td>
                            <td>5 USD</td>
                            <td>0.5%</td>
                            <td>83</td>
                            <td>7-5 dias</td>

                            <td>
                                <div class="col-lg-12 ">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                        activo
                                        </div>
                                    </div>
                                </div>
                            

                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Editar</span>
                                </a>
                            </td>
                        </tr>




































        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

      </div>
      <!-- /.container-fluid -->




</template>

<script>
  export default {
    mounted() {
      console.log('dashboard mounted.')
    }
  }
</script>