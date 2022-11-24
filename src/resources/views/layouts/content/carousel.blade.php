@section('carousel')
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
            <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="float-start text-wrap">ISTORIJA TĘSIASI</h1>
                <p>&nbsp;</p>
                <h5 style='font-weight:bold'>PASTIKITE ATNAUJINTĄ 3 SERIJOS BMW</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="float-start text-wrap">NAUJASIS BMW X1.</h1>
                <p>&nbsp;</p>
                <h5 style='font-weight:bold'>NUOTYKIŲ IEŠKOTOJO CHARAKTERIS</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="images/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="float-start text-wrap">ATNAUJINTAS BMW X7</h1>
                <p>&nbsp;</p>
                <h5 style='font-weight:bold'>SUKURTAS VIRŠYTI LŪKĘSČIUS</h5>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="images/carousel4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="float-start text-wrap">BMW ONLINE STORE</h1>
                <p>&nbsp;</p>
                <h5 style='font-weight:bold'>IŠSKIRTINIAI BMW AUTOMOBILIŲ PASIŪLYMAI</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection