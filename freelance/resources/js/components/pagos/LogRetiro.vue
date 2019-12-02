<template>


    <!-- Begin Page Content -->
      <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Log Retiro
           </h1>
        
        

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Logs</h6>
                    </div>
                        <div class="card-body">
                        
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>

                            <th>Id. De Wd</th>
                            <th>Usuario	Cantidad</th>
                            <th>Cantidad</th>
                            <th>Cargar</th>
                            <th>Método</th>
                            <th>Detalles</th>
                            <th>Solicitado en</th>

					


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id. De Wd</th>
                            <th>Usuario</th>
                            <th>Cantidad</th>
                            <th>Cargar</th>
                            <th>Método</th>
                            <th>Detalles</th>
                            <th>Solicitado en</th>
                            
					


                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            
                            <td>21231</td>
                            <td>catalin</td>
                            <td>31</td>
                            <td>10.532</td>
                            <td>paypal</td>
                             <td>
                                <a href="#" class="btn btn-primary pull-right" 
                                   data-toggle="modal" data-target="#create">
                                    Ver Detalle
                                 </a>   
                            </td>
                            <td>1:09 pm del jueves 28 de noviembre de 2019</td>
                            

                          
                           
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>





        <!--MODAL-->

        <div class="modal fade" id="create">
            <div class="modal-dialog">
                <div class="modal-content">







                            


          <!-- Begin Page Content -->
          <div class="container-fluid">




            <div class="row">


              <div class="col-lg-12">
                <!-- Collapsable Card Example -->
                <div class="card  mb-4">
                  <!-- Card Header - Accordion -->
                  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Vista de Retiro</h6>
                  </a>
                  <!-- Card Content - Collapse -->
                  <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">

                      <form class="user">
                   



















    <div class="card shadow mb-4">
                
                        <div class="card-body">
                        
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>

                            <th>Detalles</th>
                           
					


                        </tr>
                        </thead>
                      
                        <tbody>
                        <tr>
                            
                            <td>ejemplo de detalle </td>
                      

                          
                           
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>











































                      </form>

                      
                    </div>
                  </div>

                </div>

              </div>

            </div>

          </div>
          <!-- /.container-fluid -->

                </div>
            </div>
        </div>

        
        <!--FIN_MODAL-->



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