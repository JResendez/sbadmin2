<template>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Agregar</h1>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <!-- Collapsable Card Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">AGREGAR PERFIL</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <form class="user">
                      <div class="form-group row">
                        <div class="col-sm-6 mb-4 ">
                          <input type="text" class="form-control form-control-user" id="Nombre" placeholder="Nombre">
                        </div>
                        <div class="col-sm-6 mb-4">
                          <input type="text" class="form-control form-control-user" id="Apellido" placeholder="Apellido">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <input type="number" class="form-control form-control-user" id="Telefono" placeholder="Telefono">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <input type="date" class="form-control form-control-user" id="FechaNacimiento" placeholder="FechaNacimiento">
                          </div>
                          <div class="col-sm-6 mb-4">
                              <input type="text" class="form-control form-control-user" id="Ciudad" placeholder="Ciudad">
                            </div>

                        <div class="col-sm-6 mb-4">
                            <input type="text" class="form-control form-control-user" id="Pais" placeholder="Pais">
                          </div>

                <!-- Material checked -->
                <div class="col-sm-4 mb-4">
                    <input type="checkbox" id="Status" checked>
                    <label for="Status">Status</label>
                  </div>
                  <div class="col-sm-4 mb-4">
                      <input type="checkbox" id="VerificacionEmail" checked>
                      <label for="VerificacionEmail">Verificacion Email </label>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <input type="checkbox" id="VerificacionSMS" checked>
                        <label for="VerificacionSMS">Verficiacion SMS</label>
                      </div>
                        </div>
                      <a href="login.html" class="btn btn-primary btn-user btn-block">
                        Agregar Perfil
                      </a>
                      </form>
                      </div>
                  </div>
            </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</template>