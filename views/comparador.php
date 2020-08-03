<?php
	$codephone = $_REQUEST['codephone'];
?>
<section class="ct_comparador">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ct_comparador__banner">
                <h4 class="title">Comparador de equipos Microtec</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card ct_card shadow selected">
                            <div class="card-header ct_card__header">
                                <div class="info-marca">
                                    SENWA
                                </div>
                                <div class="info-modelo">
                                    S6000 COLOSSUS Rosa
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="ct_comparador__item equipocomp">
                                    <div class="equipocomp__selmarca">
                                        
                                    </div>

                                    <div class="equipocomp__img">
                                        <img src="cargador/php/descargarFrontal.php?codep=<?= $codephone; ?>" class="equipocomp__img img-fluid cargadorimg">

                                        <i class="fas fa-plus-square addmore"  title="Cambiar mi equipo" data-identificador="11"></i>

                                        <div class="header-side">
                                            <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                            <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                                        </div>
                                    </div>                            

                                    <div class="equipocomp__details ct_caractsdata">
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/precio.svg" class="icon">
                                                <small>Precio</small>
                                            </div>
                                            <div class="item-text">
                                                $3499.00
                                            </div>
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/camera.svg" class="icon">
                                                <small>Cámara Frontal/Trasera</small>
                                            </div>
                                            <div class="item-text">
                                                16 Mpx /16 Mpx
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/pantalla.svg" class="icon">
                                                <small>Pantalla </small>
                                            </div>
                                            <div class="item-text">
                                                5.5 "
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/android.svg" class="icon">
                                                <small>Sistema Operativo</small>
                                            </div>
                                            <div class="item-text">
                                                Android Oreo
                                            </div> 
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/bateria.svg" class="icon">
                                                <small>Bateria</small>
                                            </div>
                                            <div class="item-text">
                                                3000 mAh
                                            </div>
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/processor.svg" class="icon">
                                                <small>Procesador</small>
                                            </div>
                                            <div class="item-text">
                                                OCTA CORE
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/memoria.svg" class="icon">
                                                <small>Memoria</small>
                                            </div>
                                            <div class="item-text">
                                                2 GB RAM /16 GB ROM
                                            </div>                              
                                        </div>
                                        
                                        <div class="ct_caractsdata__item c-adicional">
                                            Caracteristicas adicionales
                                        </div>

                                        <button class="btn btncol--red btnsize--small" data-toggle="modal" data-target="#loquierocom" >Lo quiero <i class="fas fa-heart ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card ct_card shadow">
                            <div class="card-header ct_card__header">
                                <div class="info-marca d-none">
                                    SENWA
                                </div>
                                <div class="info-modelo">
                                    Selecciona el equipo <br> a comparar en <i class="fas fa-plus-square ml-2"></i> 
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="ct_comparador__item equipocomp" id="iden12">
                                    <div class="equipocomp__selmarca">
                                        
                                    </div>

                                    <div class="equipocomp__img">
                                        <img src="assets/img/phone/phones/ph1.svg" class="img-fluid img-dfl">

                                        <i class="fas fa-plus-square addmore" title="Seleccionar Equipo" data-identificador="iden12"></i>

                                        <div class="header-side">
                                            <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                            <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                                        </div>
                                    </div>

                                    <div class="equipocomp__details ct_caractsdata">
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/precio.svg" class="icon">
                                                <small>Precio</small>
                                            </div>
                                            <div class="item-text">
                                                $3499.00
                                            </div>
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/camera.svg" class="icon">
                                                <small>Cámara Frontal/Trasera</small>
                                            </div>
                                            <div class="item-text">
                                                16 Mpx /16 Mpx
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/pantalla.svg" class="icon">
                                                <small>Pantalla </small>
                                            </div>
                                            <div class="item-text">
                                                5.5 "
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/android.svg" class="icon">
                                                <small>Sistema Operativo</small>
                                            </div>
                                            <div class="item-text">
                                                Android Oreo
                                            </div> 
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/bateria.svg" class="icon">
                                                <small>Bateria</small>
                                            </div>
                                            <div class="item-text">
                                                3000 mAh
                                            </div>
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/processor.svg" class="icon">
                                                <small>Procesador</small>
                                            </div>
                                            <div class="item-text">
                                                OCTA CORE
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/memoria.svg" class="icon">
                                                <small>Memoria</small>
                                            </div>
                                            <div class="item-text">
                                                2 GB RAM /16 GB ROM
                                            </div>                              
                                        </div>
                                       
                                        <button class="btn btncol--red btnsize--small mt-5" data-toggle="modal" data-target="#loquierocom" >Lo quiero <i class="fas fa-heart ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card ct_card shadow">
                            <div class="card-header ct_card__header">
                                <div class="info-marca d-none">
                                    Selecciona 
                                </div>
                                <div class="info-modelo">
                                    Selecciona el equipo <br> a comparar en <i class="fas fa-plus-square ml-2"></i> 
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="ct_comparador__item equipocomp" id="iden13">
                                    <div class="equipocomp__selmarca">
                                        
                                    </div>

                                    <div class="equipocomp__img">
                                        <img src="assets/img/phone/phones/ph2.svg" class="img-fluid img-dfl">

                                        <i class="fas fa-plus-square addmore" title="Seleccionar Equipo" data-identificador="iden13"></i>

                                        <div class="header-side">
                                            <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                            <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                                        </div>
                                    </div>
                                    
                                    <div class="equipocomp__details ct_caractsdata">
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/precio.svg" class="icon">
                                                <small>Precio</small>
                                            </div>
                                            <div class="item-text">
                                                $3499.00
                                            </div>
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/camera.svg" class="icon">
                                                <small>Cámara Frontal/Trasera</small>
                                            </div>
                                            <div class="item-text">
                                                16 Mpx /16 Mpx
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/pantalla.svg" class="icon">
                                                <small>Pantalla </small>
                                            </div>
                                            <div class="item-text">
                                                5.5 "
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/android.svg" class="icon">
                                                <small>Sistema Operativo</small>
                                            </div>
                                            <div class="item-text">
                                                Android Oreo
                                            </div> 
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/bateria.svg" class="icon">
                                                <small>Bateria</small>
                                            </div>
                                            <div class="item-text">
                                                3000 mAh
                                            </div>
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/processor.svg" class="icon">
                                                <small>Procesador</small>
                                            </div>
                                            <div class="item-text">
                                                OCTA CORE
                                            </div>                              
                                        </div>
                                        <div class="ct_caractsdata__item">
                                            <div class="item-cars">
                                                <img src="assets/img/phone/details/memoria.svg" class="icon">
                                                <small>Memoria</small>
                                            </div>
                                            <div class="item-text">
                                                2 GB RAM /16 GB ROM
                                            </div>                              
                                        </div>

                                        <button class="btn btncol--red btnsize--small mt-5" data-toggle="modal" data-target="#loquierocom">Lo quiero <i class="fas fa-heart ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
                   
            </div>
            
        </div> 
    </div>    
</section>



<section class="previos bg--gray">
    <div class="container-fluid">
        <div class=" pt-4">

            <div class="row justify-content-center">
              <div class="col-lg-11">
                <h2 class="previos__title">Buscados previamente</h2>
              </div>
              <div class="col-lg-11">
                <div class="carousel slide ct_equipomov__carousel carouselmovil" id="carousel-rels" data-ride="carousel" data-interval="2000" data-pause="hover">
                    <div class="carousel-inner">
                        <div class="carousel-item active carouselmovil__item">
                            <div class="row row-eq-height carousel-h">
                                <div class="col-lg-4">
                                    <div class="equipomov" data-code="TPC7GREY">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side">
                                                <button class="ico--view header-side__icon vproducto"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador"></button>
                                            </div>
                                        </picture>
                                        <div class="equipomov__body element">
                                            <h4 class="element__marca">
                                                SAMSUNG
                                            </h4>
                                            <h3 class="element__modelo">
                                                GALAXY A30
                                            </h3>
                                            
                                            <span class="element__predis">
                                                Precio Distribuidor: $4,499.00
                                            </span>
                                            <span class="element__prepublico">
                                               $4,999.00
                                            </span>
                                        </div>
                                    </div>
                                </div>                               
                            
                                <div class="col-lg-4">
                                    <div class="equipomov" data-code="TPC7GREY">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side">
                                                <button class="ico--view header-side__icon vproducto"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador"></button>
                                            </div>
                                        </picture>
                                        <div class="equipomov__body element">
                                            <h4 class="element__marca">
                                                SAMSUNG
                                            </h4>
                                            <h3 class="element__modelo">
                                                GALAXY A30
                                            </h3>
                                            
                                            <span class="element__predis">
                                                Precio Distribuidor: $4,499.00
                                            </span>
                                            <span class="element__prepublico">
                                               $4,999.00
                                            </span>
                                        </div>
                                    </div>
                                </div>                          
                            
                                <div class="col-lg-4">
                                    <div class="equipomov" data-code="TPC7GREY">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side">
                                                <button class="ico--view header-side__icon vproducto"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador"></button>
                                            </div>
                                        </picture>
                                        <div class="equipomov__body element">
                                            <h4 class="element__marca">
                                                SAMSUNG
                                            </h4>
                                            <h3 class="element__modelo">
                                                GALAXY A30
                                            </h3>
                                            
                                            <span class="element__predis">
                                                Precio Distribuidor: $4,499.00
                                            </span>
                                            <span class="element__prepublico">
                                               $4,999.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                        </div>
                        <div class="carousel-item carouselmovil__item">
                            <div class="row row-eq-height carousel-h">
                                <div class="col-lg-4">
                                    <div class="equipomov" data-code="TPC7GREY">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side">
                                                <button class="ico--view header-side__icon vproducto"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador"></button>
                                            </div>
                                        </picture>
                                        <div class="equipomov__body element">
                                            <h4 class="element__marca">
                                                SAMSUNG
                                            </h4>
                                            <h3 class="element__modelo">
                                                GALAXY A30
                                            </h3>
                                            
                                            <span class="element__predis">
                                                Precio Distribuidor: $4,499.00
                                            </span>
                                            <span class="element__prepublico">
                                               $4,999.00
                                            </span>
                                        </div>
                                    </div>
                                </div>                               
                            
                                <div class="col-lg-4">
                                    <div class="equipomov" data-code="TPC7GREY">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side">
                                                <button class="ico--view header-side__icon vproducto"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador"></button>
                                            </div>
                                        </picture>
                                        <div class="equipomov__body element">
                                            <h4 class="element__marca">
                                                SAMSUNG
                                            </h4>
                                            <h3 class="element__modelo">
                                                GALAXY A30
                                            </h3>
                                            
                                            <span class="element__predis">
                                                Precio Distribuidor: $4,499.00
                                            </span>
                                            <span class="element__prepublico">
                                               $4,999.00
                                            </span>
                                        </div>
                                    </div>
                                </div>                          
                            
                                <div class="col-lg-4">
                                    <div class="equipomov" data-code="TPC7GREY">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side">
                                                <button class="ico--view header-side__icon vproducto"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador"></button>
                                            </div>
                                        </picture>
                                        <div class="equipomov__body element">
                                            <h4 class="element__marca">
                                                SAMSUNG
                                            </h4>
                                            <h3 class="element__modelo">
                                                GALAXY A30
                                            </h3>
                                            
                                            <span class="element__predis">
                                                Precio Distribuidor: $4,499.00
                                            </span>
                                            <span class="element__prepublico">
                                               $4,999.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <a class="carousel-control-prev carousel-icon" href="#carousel-rels" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next carousel-icon" href="#carousel-rels" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>    
              </div>
            </div>
                                           
        </div> 
    </div>
</section>

<!-- MODALES PARA CAMBIAR EL MODELO DE EQUIPO -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modCambioEquipo">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade modchoose-equipo" id="modCambioEquipo" tabindex="-1" role="dialog" aria-labelledby="modCambioEquipoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modCambioEquipoTitle">Selecciona la marca y modelo del equipo quieras comparar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <select class="form-control mb-4" id="selmarcas">
                <option>Selecciona la marca</option>
                <option>Alcatel</option>
                <option>Huawei</option>
                <option>Nokia</option>
                <option>Motorola</option>
                <option>Lanix</option>
            </select>

            <select class="form-control" id="selmodelo">
                <option>Selecciona el modelo</option>
                <option>sunt in culpa qui</option>
                <option>sunt in culpa qui</option>
                <option>sunt in culpa qui</option>
                <option>sunt in culpa qui</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btncol--purple btn-details" data-identi="" data-dismiss="modal">Agregar al comparador</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loquierocom">
  Launch demo modal
</button> -->

<!-- Modal tipo de pago comparador-->
<div class="modal fade" id="loquierocom" tabindex="-1" role="dialog" aria-labelledby="loquierocomTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        <section id="formascompra" class="ct_tipos-pago mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 ct_tipos-pago__box" data-toggle="modal" data-target="#modal-fpagos">
                        <div class="pagosbox">
                            <h5 class="pagosbox__title">TU EQUIPO A CRÉDITO</h5>
                            <span class="pagosbox__description">Tarjeta Amigo Fácil / Facebook</span>    
                        </div>
                    </div>
                    <div class="col-lg-4 ct_tipos-pago__box" data-toggle="modal" data-target="#modal-fapartado">
                        <div class="pagosbox">
                            <h5 class="pagosbox__title">TU EQUIPO EN APARTADO FÁCIL</h5>
                            <span class="pagosbox__description">con pagos diferidos a tus posibilidades</span>    
                        </div>
                    </div>
                    <div class="col-lg-4 ct_tipos-pago__box" data-toggle="modal" data-target="#modal-ffinanciado">
                        <div class="pagosbox">
                            <h5 class="pagosbox__title">EQUIPO GRATIS O FINANCIADO</h5>
                            <span class="pagosbox__description">al contratar tu Plan Tarifario a 24 meses</span>    
                        </div>
                    </div>    
                </div>            
            </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>