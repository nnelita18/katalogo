<?php 
$canAddPedido = true;

if (isset($_REQUEST['detalles']) && !empty($_REQUEST['detalles'])) {
  foreach ($_REQUEST['detalles'] as $key=>$value) {
    switch ($value) {
      case 'K':
        $value = '<img src="assets/img/phone/phones/amigo_kitx80.png" class="type-kit mb-1">';
        break;
      case 'B':
        $value = '<span class="mb-1">KitB</span>';
        $colortipo = 'blue';
        break;
      case 'G':
        $value = '<span class="mb-1">Equipo G</span>';
        $colortipo = 'yellow';
        break;
      case 'S':
        $value = '<span class="mb-1"></span>';
        $colortipo = 'yellow';
        break;     
      default:
        # code...
        break;
    }
     $equipo[$key] = $value;
  }
}

if (isset($_REQUEST['ficha']) && !empty($_REQUEST['ficha'])) {
  // Verificar si hay informacion del equipo
  foreach ($_REQUEST['ficha'] as $key=>$value) {
     $eqInfo[$key] = $value;
  }
 
}

if (isset($_REQUEST['estatus']) && !empty($_REQUEST['estatus'])) {
  foreach ($_REQUEST['estatus'] as $key=>$value) {
     $eqStatus[$key] = $value;
  }      
}

$countExistencias = 0;
if ($_REQUEST['stock'] !== NULL) {
  foreach ($_REQUEST['stock'] as $key => $value){
    $countExistencias += $value['existencias'];  
  }
}
if ($countExistencias <= 0) {
  $existenciasTotales  = 'Sin existencias';
}else
if ($countExistencias < 10) {
  $canAddPedido = false;
  $existenciasTotales  = 'Consulte a su Analista de Pedido';
}else 
if($countExistencias > 100){
  $existenciasTotales = 'Más de 100';
}else{
  $existenciasTotales =$countExistencias;
}

if ($_REQUEST['ficha'] !== NULL) {
  // Ficha tecnica de datos
  foreach ($_REQUEST['ficha'] as $keyficha=>$valueficha) {
     $ficha[$keyficha] = $valueficha;
  }
}

?>   

      <div class="container-fluid slide-in-fwd-center">

        <div class="row">
          <div class="col-lg-12">
            <div class="single-phone py-4 px-3">
              <div class="row">

                <div class="col-lg-5">
                  <?php if($equipo['marca'] == '0Telcel'){ ?>
                  <div class="single-pchips text-align-center">
                    <img src="img/chips-cp.png" class="img-chipcp">
                  </div>                  
                  
                  <?php }else{ ?>
                  <div class="single-phone__product" id="zoom_03">

                    <?php 
                      // echo "StatusAgotado".$eqStatus['agotado'];
                      if ( $eqStatus['remate'] == "1" ) {
                        $itemStatusData = '<div class="label-offer label-offer--position"><strong class="label-offer--text">Oferta</strong></div>';
                      }else if ( $eqStatus['agotado'] == "1") {
                        $itemStatusData = '<div class="label-soldout label-soldout--position"><strong class="label-soldout--text">Agotado</strong></div>';
                      }else{
                        $itemStatusData ='';
                      }
                    ?>

                    <?= $itemStatusData; ?>
                    <div class="row">
                      <div id="gallery_01" class="single-phone__gallery gallery col-lg-3">
                        <a href="#" class="active" data-image="cargador/php/descargarFrontal.php?codep=<?= $equipo['codigo']; ?>" data-zoom-image="cargador/php/descargarFrontal.php?codep=<?= $equipo['codigo']; ?>">
                            <img id="img_01" class="gallery__item img-fluid" src="cargador/php/descargarFrontal.php?codep=<?= $equipo['codigo']; ?>"/>
                        </a>

                        <?php
                          $backImage = file_get_contents('https://www.micro-tec.com.mx/pagina/Control_Pedidos/cargador/php/descargarTrasera.php?codep='.$equipo['codigo']);

                          if ($backImage != 2) { ?>
                            <a href="#" data-image="cargador/php/descargarTrasera.php?codep=<?= $equipo['codigo']; ?>" data-zoom-image="cargador/php/descargarTrasera.php?codep=<?= $equipo['codigo']; ?>">
                              <img id="img_01" class="gallery__item img-fluid" src="cargador/php/descargarTrasera.php?codep=<?= $equipo['codigo']; ?>"/>
                            </a> 
                          <?
                          }
                          ?>

                        <?php
                          $page = file_get_contents('https://www.micro-tec.com.mx/pagina/Control_Pedidos/cargador/php/descargarExtra.php?codep='.$equipo['codigo']);
                          if ($page=='1') {
                            # code...
                          }else{ ?>
                          <a href="#" data-image="cargador/php/descargarExtra.php?codep=<?= $equipo['codigo']; ?>" data-zoom-image="cargador/php/descargarExtra.php?codep=<?= $equipo['codigo']; ?>">

                          <img id="img_01" class="gallery__item img-fluid" src="cargador/php/descargarExtra.php?codep=<?= $equipo['codigo']; ?>"/>
                        </a>  
                        <?php
                          }
                        ?>
                      </div> 

                      <div class="col-lg-9">
                        <div class="container-single">
                          <img id="zoomequipo" class="img-model img-fluid " src="cargador/php/descargarFrontal.php?codep=<?= $equipo['codigo']; ?>" data-zoom-image="cargador/php/descargarFrontal.php?codep=<?= $equipo['codigo']; ?>"/>  
                        </div>
                      </div>   
                    </div>
                               

                  </div>
                  <?php } ?>
                </div>
                <div class="col-lg-7">
                  <div class="single-phone__tab phone-data pt-lg-0">

                    <div class="phone-data__info">
                      <h2 class="phone-data__brand text-lg-left name-pad"><?= $equipo['marca']?></h2>
                      <h3 class="phone-data__model text-lg-left name-pad" data-valuemodel="<?= $equipo['codigo']?>"><?= $equipo['modelo']?></h3> 

                      <label for="" class="label-tipo"><?= $equipo['tipo']; ?></label>
                    </div>    

                    <div class="phone-data__info mt-4">
                      <h4 class="phone-data__price price--normal"><?= '$'.'<span id="precio-normal">'.$equipo['precio'] ?></span> <small>( Precio Publico )</small></h4>

                      <h4 class="phone-data__price price--des ml-3"><?= '$'.'<span id="precio-normal">'.$equipo['precio'] ?></span> <small>( Precio lista )</small></h4>
                       
                    </div>
                                                                            

                  <?php if ($_REQUEST['ficha'] !== NULL && !isset($eqInfo['info']) ) { 
                    ?>
                    <h3 class="phone-data__char mt-4">Características</h3>
                    <div class="table-responsive-lg">
                      <table class="table phone-data__details">
                        <tbody>
                          <tr>                            
                            <td class="data-sheet">       
                              <img src="assets/img/phone/details/camera.svg" class="icon">
                              <small>Cámara Frontal/Trasera: </small>
                            </td>
                            <td class="data-sheet">       
                              <img src="assets/img/phone/details/pantalla.svg" class="icon">
                              <small>Pantalla: </small>
                            </td>
                            <td class="data-sheet">
                              <img src="assets/img/phone/details/android.svg" class="icon">
                              <small>Sistema Operativo: </small>
                            </td>                      
                          </tr>
                          <tr>                            
                            <td>
                              
                              <?= $ficha[camara_f] ? $ficha[camara_f]:''; ?>
                              <?= $ficha[camara_p] ? '/'.$ficha[camara_p]:''; ?>
                            </td>
                            <td>
                              
                              <?= $ficha[pantalla] ? $ficha[pantalla]:''; ?>
                            </td>
                            <td>
                              
                              <?= $ficha[so] ? $ficha[so]:''; ?>
                            </td>
                          </tr>
                          <tr>
                            <td scope="row" class="data-sheet">
                              <img src="assets/img/phone/details/bateria.svg" class="icon">
                              <small>Bateria: </small>
                            </td>                         
                            <td class="data-sheet">
                              <img src="assets/img/phone/details/processor.svg" class="icon">
                              <small>Procesador: </small>
                            </td>
                            <td class="data-sheet">
                              <img src="assets/img/phone/details/memoria.svg" class="icon">
                              <small>Memoria: </small>
                            </td>                            
                          </tr>
                          <tr>                            
                            <td>
                              
                              <?= $ficha[bateria] ? $ficha[bateria]:''; ?></td>
                            <td>
                              
                              <?= $ficha[procesador] ? $ficha[procesador]:''; ?>
                            </td>
                            <td>
                              
                              <?= $ficha[ram] ? $ficha[ram].' RAM':''; ?>
                              <?= $ficha[rom] ? '/'.$ficha[rom].' ROM':''; ?>
                            </td>
                          </tr>                          
                        </tbody>
                      </table>
                    </div>
                  <?php } else {?>
                    <!-- <div class="phone-data__fichaimg my-4">
                      <img src="cargador/php/descargar.php?codep=<?= $equipo['codigo']; ?>" alt="" class="img-fluid">  
                    </div>  -->                   
                  <?php }?>

                    <!-- Información extra para lel equipo -->
                    <?php if ($ficha[inf_extra1] || $ficha[inf_extra2]) {?>
                    <div class="phone-data__explain">

                      <?php if ($ficha[inf_extra1]) { ?>
                      <div class="item-explain">
                        <?= $ficha[inf_extra1]; ?>
                      </div>
                      <?php }?>

                      <?php if ($ficha[inf_extra1]) { ?>
                      <div class="item-explain">
                        <?= $ficha[inf_extra2]; ?>
                      </div>
                      <?php }?>

                    </div>
                    <?php }?>
                    <!-- /Información extra para lel equipo -->

                    <div class="table-responsive-lg mt-3 d-none">
                      <table class="table phone-data__description">
                        <tbody>                          
                          <tr>
                            <th scope="row">Existencias disponibles</th>
                            <td class="align-middle p-0">
                              <?= $existenciasTotales; ?>
                            </td>
                          </tr> 
                        </tbody>
                      </table>
                    </div>

                    <div class="input-group mb-3 phone-data__stock d-none">
                      
                      <div class="collapse w100" id="collapseExample">
                        <div class="card card-body">
                          <?php if($_REQUEST['stock'] !== NULL):?>
                            <?php
                            foreach ($_REQUEST['stock'] as $key => $value): ?>
                              <label value="<?= $key; ?>"><?= $value['distribuidor'].'     ( '.$value['existencias'].' )'; ?></label>   
                            <?php endforeach; ?>                      
                          <?php else:?>
                            <label>Sin existencias</label>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>

                    <div class="phone-data__quantity pl-3 d-none">
                      <div class="quantity">
                        <input id="quantity-product" type="number" min="1" max="20" step="1" value="1">
                      </div>  

                      <div class="phone-data__total">
                        <strong class="mr-2">Total:</strong>
                        <h5 id="precio-total" class="phone-data__price"><?= $equipo['precioa']; ?></h5>
                      </div>
                    </div>
                    
                  <!-- <button id="single-order" class="btn btn-lg btn--orange send-single-order" data-canadd="<?= $canAddPedido ? '1':'0';?>">Agregar al Pedido <i class="fas fa-arrow-circle-right ml-1"></i></button> -->
                    <button id="phone-comparar" data-compararid="<?= $equipo['codigo']; ?>" class="btn btncol--red compare btnsize--medium mt-4 vcomparador">Comparar este equipo </button>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="relacionados">

            <div class="row justify-content-center">
              <div class="col-lg-11">
                <h2 class="relacionados__title">Articulos Relacionados</h2>
              </div>
              <div class="col-lg-11">
                <div class="carousel slide ct_equipomov__carousel carouselmovil" id="carousel-rels" data-ride="carousel" data-interval="2000" data-pause="hover">
                    <div class="carousel-inner">
                        <div class="carousel-item active carouselmovil__item">
                            <div class="row row-eq-height carousel-h">
                                <div class="col-lg-4">
                                    <div class="equipomov">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side" data-code="TPC7GREY">
                                                <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
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
                                    <div class="equipomov">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side" data-code="TPC7GREY">
                                                <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
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
                                    <div class="equipomov">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side" data-code="TPC7GREY">
                                                <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
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
                                    <div class="equipomov">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side" data-code="TPC7GREY">
                                                <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
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
                                    <div class="equipomov">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side" data-code="TPC7GREY">
                                                <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
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
                                    <div class="equipomov">
                                        <picture class="equipomov__header">
                                            <div class="header-image">
                                                <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                                            </div>

                                            <div class="header-side" data-code="TPC7GREY">
                                                <button class="ico--view header-side__icon vproducto" title="VER"></button>

                                                <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
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
      
      <script type="text/javascript">
        var listasrc = [
            "//cdn.rawgit.com/igorlino/fancybox-plus/1.3.7/src/jquery.fancybox-plus.js",
            "//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js",
            "//cdn.rawgit.com/jquery/jquery-mousewheel/3.1.12/jquery.mousewheel.js",
            "controllers/single-product.js"];
        
        for (src_data in listasrc) {
          var script = document.createElement("script")
          script.type = "text/javascript";
          //Chrome,Firefox, Opera, Safari 3+
          script.src = listasrc[src_data];
          document.body.appendChild( script );
        } 

      </script>

<!-- 
      <script src="controllers/single-product.js"></script> -->