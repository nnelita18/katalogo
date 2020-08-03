<div class="container-fluid pt-3 ct_catalogo">
  
  <div class="row">
    <div class="col-lg-3 ct_catalogo__sidebar ct_sidebar">
      <!-- Sidebar -->
      <nav class="ct_sidebar filterbrands">
        <!-- <div class="sidebar-header">
            <h6>Filtrar Equipos</h6>
        </div> -->

        <ul class="nav flex-column list-unstyled components ct_sidebar__filter">
          <!-- <p>Seleccione la marca:</p> -->
          <div class="card mb-3">
            <div class="card-body">
              <ul class="list-unstyled">
                  <!-- <li class="nav-item">
                      <div class="form-check nav-link">
                        <input class="form-check-input" type="checkbox" id="checkbox0" value="todas">
                        <label class="form-check-label" for="checkbox0">Todas</label> 
                      </div>                            
                  </li> -->
                  <li class="nav-item">
                      <div class="form-check nav-link">
                        <input class="form-check-input" type="checkbox" id="checkboxdesmarcar" value="todas">
                        <label class="form-check-label" for="checkboxdesmarcar">Todas</label> 
                      </div>                            
                  </li>
              </ul>
            </div>
          </div>

          <div class="accordion filterbrands__filter">
            <div class="card">
              <h5 class="card-header">Marcas</h5>
              <div class="card-body p-2">
                <ul id="brandfilter" class="list-unstyled lmarcas nicescroll">

                </ul>
                
              </div>
            </div>
            <div class="card mt-4 range-box">
              <div class="card-body">
                <div class="range-info">
                  <div class="price-range-slider"></div>
                </div>
              </div>
            </div>
          </div>

        </ul>
      </nav>    
      <!--/ Sidebar -->        
    </div>

    <div class="col-lg-9 ct_catalogo__content">
      <!-- Catalog Content -->
      
      <div class="products-container">
        <div id="products-response" class="row row-eq-height">
         
            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--position ct_offer__label label-offer--green">
                    <strong class="label-offer--text">REMATE</strong>
                  </div>
                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">NUEVO</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">OFERTA</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">OFERTA</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">OFERTA</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">OFERTA</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">OFERTA</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">DESTACADO</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 cat-equipos__eq">
              <div class="equipomov" data-code="${item['codigo']}">
                <picture class="equipomov__header ct_offer">
                  <div class="label-offer label-offer--green ct_offer__label">
                    <strong class="label-offer--text">DESTACADO</strong>
                  </div>

                  <div class="header-image">
                    <img src="assets/img/home/filtro-equipos/ImagenFrontal.jpg" class="img-fluid equipomov-img">
                  </div>
                  <div class="header-side">
                    <button class="ico--view header-side__icon vproducto" title="VER"></button>
                    <button class="ico--compare compare-product header-side__icon vcomparador" title="COMPARAR"></button>
                  </div>
                </picture>
                <div class="equipomov__body element">
                  <h4 class="element__marca">SAMSUNG</h4>
                  <h3 class="element__modelo">GALAXY A30</h3>  <span class="element__predis anterior">Antes: $5,499.00</span>
                  <span class="element__prepublico">$4,999.00</span>
                </div>
              </div>
            </div>
            
        </div>

        <ul id="pagination-products" class="pagination-sm ct_pagination"></ul>
      </div>
      <!--/ Catalog Content -->
    </div>
  </div>  
</div>

<script src="controllers/catalogo.js"></script>

<script>
  //Note jquery and jqueryUI are included

  function collision($div1, $div2) {
    var x1 = $div1.offset().left;
    var w1 = 40;
    var r1 = x1 + w1;
    var x2 = $div2.offset().left;
    var w2 = 40;
    var r2 = x2 + w2;
      
    if (r1 < x2 || x1 > r2) return false;
    return true;
    
  }
    
// // slider call

$('.price-range-slider').slider({
  range: true,
  min: 0,
  max: 10000,
  values: [ 2000, 6000 ],
  step: 100,
  slide: function(event, ui) {
    
    $('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
    $('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
    $('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );
    
    //
    
    if ( ui.values[0] == ui.values[1] ) {
      $('.price-range-both i').css('display', 'none');
    } else {
      $('.price-range-both i').css('display', 'inline');
    }
        
        //
    
    if (collision($('.price-range-min'), $('.price-range-max')) == true) {
      $('.price-range-min, .price-range-max').css('opacity', '0');  
      $('.price-range-both').css('display', 'block');   
    } else {
      $('.price-range-min, .price-range-max').css('opacity', '1');  
      $('.price-range-both').css('display', 'none');    
    }
    
  }
});

$('.ui-slider-range').append('<span class="price-range-both value"><i>$' + $('#slider').slider('values', 0 ) + ' - </i>' + $('#slider').slider('values', 1 ) + '</span>');

$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">$' + $('#slider').slider('values', 0 ) + '</span>');

$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">$' + $('#slider').slider('values', 1 ) + '</span>');



$('.ui-slider-handle:eq(0) .price-range-min').html('$2000');
$('.ui-slider-handle:eq(1) .price-range-max').html('$6000');
</script>