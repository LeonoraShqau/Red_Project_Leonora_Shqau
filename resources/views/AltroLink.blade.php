<x-layout>
  <!--INZIO BANNER -->
    <div class="row m-0 img-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-center justify-content-center altroLinkFoto ">
            <h1 class="grande-scritta">I NOSTRI NUMERI</h1>
        </div>
    </div>
  <!--FINE BANNER -->

<!--INZIO STATISTICHE -->

<div class="container-FLUID py-5 text-center bg-panna">
  <h2 class="fw-bold mb-4 h2G">I numeri di The Post</h2>
  <p class="text-muted mb-5 scrittacard">Trasparenza, impatto e crescita del nostro giornalismo.</p>

  <div class="row gy-5 py-5">
    <div class="col-6 col-md-3" data-counter>
      <div class="display-5 fw-bold counter scrittacard" data-target="2500">0</div>
      <div class="text-muted small mt-2 scrittacard">Articoli pubblicati</div>
    </div>
    <div class="col-6 col-md-3" data-counter>
      <div class="display-5 fw-bold counter scrittacard" data-target="54">0</div>
      <div class="text-muted small mt-2 scrittacard">Giornalisti coinvolti</div>
    </div>
    <div class="col-6 col-md-3" data-counter>
      <div class="display-5 fw-bold counter scrittacard" data-target="168895">0</div>
      <div class="text-muted small mt-2 scrittacard">Lettori mensili</div>
    </div>
    <div class="col-6 col-md-3" data-counter>
      <div class="display-5 fw-bold counter scrittacard" data-target="5219">0</div>
      <div class="text-muted small mt-2 scrittacard">Iscritti newsletter</div>
    </div>
  </div>
</div>


<!--FINE STATISTICHE -->
@vite(['resources/js/numeri.js'])


  <x-footer/>
</x-layout>