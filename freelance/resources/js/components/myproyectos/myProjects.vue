<template>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Mis Proyectos</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Proyectos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Compañía</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha termino</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titulo</th>
                                <th>Compañía</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha termino</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td><a href="#">Sample Project</a></td>
                                <td>Sample Company</td>
                                <td>10-10-10</td>
                                <td>10-10-10</td>
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
            console.log('misProyectos mounted.')
        }
    }
</script>
