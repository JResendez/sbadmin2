<template>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Pefil</h1>
    </div>



    <div class="row">

      <div class="col-lg-6">



        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Usuario</h6>
          </div>
          <div class="card-body">
            CORREO@gmail.com
          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Balance</h6>

          </div>
          <!-- Card Body -->
          <div class="card-body">
              FECHA :
          </div>
        </div>
        
      </div>
      <div class="col-lg-12">
          <!-- Collapsable Card Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">DETALLES</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaccion</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Depositos</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Retirar</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Enviar Dinero</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-lg-12">
          <!-- Collapsable Card Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">OPERACIONES</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardExample">
                <div class="card-body">

                    <a href="#" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Agregar / Sustraer Saldo</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Eviar Email</span>
                    </a>
                </div>
              </div>
            </div>
      </div>
      
      <div class="col-lg-12">
          <!-- Collapsable Card Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">ACTUALIZAR PERFIL</h6>
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
                      Editar Perfil
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