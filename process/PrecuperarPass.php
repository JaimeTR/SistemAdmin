
<div class="container py-4">
    <div class="row text-center mt-3">
        <h1 class="display-6"> Recuperar password de | <span class="text-success">Usuario</span> </h1>
    </div>
    <div class="row text-center mt-4 justify-content-center">
        <div class="row mt-3">
            <div class="col container">
                <img src="img/logo_iscjlchavezg.png" alt="logo" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center px-2 py-2">
        <div class="col-sm-10 col-md-10 col-lg-5">
            <form action="" method="post" class="needs-validation" novalidate>
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-success" id="basic-addon1">
                            <svg class="bi text-white" width="15" height="15" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                            </svg>
                        </span>
                        <input type="text" class="form-control border-success" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" required />
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-success" id="basic-addon1">
                            <svg class="bi text-white" width="15" height="15" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                            </svg>
                        </span>
                        <input type="email" class="form-control border-success" placeholder="Email" aria-label="Usuario" aria-describedby="basic-addon1" required />
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid gap-2 mt-2">
                        <input type="submit" name="BtnRecPass" value="Recuperar" class="btn btn-sm btn-outline-success rounded-pill">
                    </div>
                </div>
                <div class="row mt-4 align-items-end">
                    <div class="form-check form-switch ">
                        <input type="checkbox" id="darkSwitch" class="form-check-input">
                        <label for="darkSwitch" class="form-check-label">
                            <svg class="bi" width="22" height="22" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low" />
                            </svg>
                        </label> |
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars" />
                        </svg>
                    </div>
                </div>
            </form>
            <div class="row py-2 mt-2">
                
            </div>
            <div class="row mt-3">
                <div class="col-ms-10 col-md-10 col-lg-10 bg-light rounded-pill text-center py-2" style="width:550px;">
                    <a href="index.php" class="link-success link-offset-2 link-underline-opacity-25 text-decoration-none link-underline-opacity-100-hover">
                        <svg class="bi" width="25" height="25" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#reply-fill" />
                        </svg> Regresar
                    </a>&nbsp;&nbsp; | &nbsp;&nbsp;
                    <a href="#" class="link-success link-offset-2 link-underline-opacity-25 text-decoration-none link-underline-opacity-100-hover" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAyudaRPass" aria-controls="offcanvasAyudaRPass">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#question-circle" />
                        </svg> Ayuda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- inicia offvanvas para ayuda -->
<div class="offcanvas offcanvas-end bg-success" tabindex="-1" id="offcanvasAyudaRPass" aria-labelledby="offcanvasAyudaRPassLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ...
    </div>
</div>