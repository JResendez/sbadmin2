<template>


    <!-- Begin Page Content -->
      <div class="container-fluid">

        
                <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Solicitudes Retiro
           </h1>
        
        


        

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Solicitudes Retiro</h6>
                    </div>
                        <div class="card-body">
                        
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>

                            <th>Retirar ID</th>
                            <th>Nombre de miembro</th>
                            <th>Cantidad de retirada</th>
                            <th>Método</th>
                            <th>Cantidad en el método</th>
                            <th>Estado</th>
                            <th>Acción</th>


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>

                                   <th>Retirar ID</th>
                            <th>Nombre de miembro</th>
                            <th>Cantidad de retirada</th>
                            <th>Método</th>
                            <th>Cantidad en el método</th>
                            <th>Estado</th>
                            <th>Acción</th>



                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            
                            <td>2</td>
                            <td>admin admin</td>
                            <td>100</td>
                            <td>paypal</td>
                            <td>.0203</td>

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
                                <a href="UsuarioUpdate.html" class="btn btn-primary">
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