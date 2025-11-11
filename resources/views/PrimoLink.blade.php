<x-layout>
  <!--INZIO BANNER -->
    <div class="row m-0 img-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-center justify-content-center primoLinkFoto ">
            <h1 class="grande-scritta">PODCAST</h1>
        </div>
    </div>
  <!--FINE BANNER -->

    <div class="PodcastName bgPodcast container-fluid">
        <div class= "row justify-content-around text-center">
            <h1 class = "h2G my-3 mx-2" >I nostri Podcast</h1>
        </div>
     </div>    
    <div class="bg-cont">
    <div class="sezione-card container-fluid bg-cont align-items-center">

        <div class="row justify-content-center align-items-center">

            <div class="col-12 col-md-3">
                <div class="text-center mx-auto d-block contenitore-img justify-content-center">
                    <img class="cerchio img-fluid rounded-circle" src="{{asset('img/cinema.jpg')}}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <h5 class="card-title my-4 coloretesto">
                            <a href="https://www.youtube.com/@bsmt_basement" class="text-decoration-none text-reset">
                            Pop and Cast
                            </a>
                        </h5>

                        <p class="card-text scrittacard">Scopri tutto quello che sta succedendo nella cultura pop di oggi con tanti ospiti del cinema. Entriamo dietro le quinte del Cast di alcuni programmi cult del momento.</p>
                        <div class="iconcine">
                            <i class="fa-brands fa-instagram mx-3"></i>
                            <i class="fa-brands fa-linkedin mx-3"></i>
                            <i class="fa-brands fa-facebook-f mx-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="text-center mx-auto d-block contenitore-img justify-content-center">
                    <img class="cerchio img-fluid rounded-circle" src="{{asset('img/Filosofia.jpg')}}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title my-4 coloretesto">
                            <a href="https://www.youtube.com/@Symposium.Podcast" class="text-decoration-none text-reset">
                            The Real Deal
                            </a>
                        </h5>
                        <p class="card-text scrittacard">Con uno sguardo attento alle ultime tendenze, traduce il linguaggio tecnico in storie coinvolgenti per un pubblico di tutti i livelli.</p>
                        <div class="iconcine">
                            <i class="fa-brands fa-instagram mx-3"></i>
                            <i class="fa-brands fa-linkedin mx-3"></i>
                            <i class="fa-brands fa-facebook-f mx-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 
<!--FOOTER -->
  <x-footer />
</x-layout>
