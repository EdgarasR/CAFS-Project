<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <h1 id="drive-header">BANDOMASIS VAŽIAVIMAS</h1>
        </div>
        <div class="col-7 mt-5 text-center fs-5">
            <p>
                Užsiregistravus bandomajam važiavimui vadybininkas išsiaiškins jūsų norus bei lūkesčius, salone pademonstruos pageidaujamą išbandyti automobilį ir parinks tinkamiausią maršrutą. Po bandomojo važiavimo galima aptarti detalią modelio konfigūraciją, įsigijimo finansavimo bei automobilio draudimo klausimus. Jei jūsų pasirinkto BMW modelio bandomajam važiavimui suteikti negalime, susisieksime su jumis ir kartu rasime kompromisą.
            </p>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <form class="row g-3 needs-validation" action="/mail" method="GET" novalidate>
                @csrf
                <div class="col-6">
                    <label for="model" class="form-label"><b>Jus dominantis modelis</b></label>
                    <select class="form-select" id="model" name="model" required>
                        <option value="1 Serija">BMW 1 Serija</option>
                        <option value="2 Serija">BMW 2 Serija</option>
                        <option value="3 Serija">BMW 3 Serija</option>
                        <option value="4 Serija">BMW 4 Serija</option>
                        <option value="5 Serija">BMW 5 Serija</option>
                        <option value="6 Serija">BMW 6 Serija</option>
                        <option value="7 Serija">BMW 7 Serija</option>
                        <option value="8 Serija">BMW 8 Serija</option>
                        <option value="X1">X1</option>
                        <option value="X2">X2</option>
                        <option value="X3">X3</option>
                        <option value="X4">X4</option>
                        <option value="X5">X5</option>
                        <option value="X6">X6</option>
                        <option value="X7">X7</option>
                        <option value="iX">iX</option>
                    </select>
                    <div class="invalid-feedback">
                        Pasirinkite modelį
                    </div>
                </div>
                <div class="col-6">
                    <label for="city" class="form-label"><b>Miestas</b></label>
                    <select class="form-select" id="city" name="city" required>
                        <option value="Vinlius">Vilnius</option>
                        <option value="Kaunas">Kaunas</option>
                        <option value="Klaipėda">Klaipėda</option>
                    </select>
                    <div class="invalid-feedback">
                        Pasirinkite miestą
                    </div>
                </div>
                <div class="col-6">
                    <label for="name" class="form-label"><b>Vardas ir pavardė</b></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">
                        Nurodykite savo vardą ir pavardę
                    </div>
                </div>
                <div class="col-6">
                    <label for="personalCar" class="form-label"><b>Vairuojamas automobilis</b></label>
                    <input type="text" class="form-control" id="personalCar" name="personalCar" required>
                    <div class="invalid-feedback">
                        Nurodykite savo automobilį
                    </div>
                </div>
                <div class="col-6">
                    <label for="phone" class="form-label"><b>Telefono numeris</b></label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                    <div class="invalid-feedback">
                        Nurodykite savo telefono numerį
                    </div>
                </div>
                <div class="col-6">
                    <label for="email" class="form-label"><b>El. paštas</b></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Nurodykite el. pašto adresą
                    </div>
                </div>
                <div class="text-center">
                    <button id="modalBtn" type="submit" class="btn btn-outline-dark mt-4 btn-reg"><b>REGISTRUOTIS VAŽIAVIMUI</b></button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">BANDOMASIS VAŽIAVIMAS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sėkimingai užsiregistravote bandomajam važiavimui!
                        Susisieksime su jumis.
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-outline-dark btn-reg" data-bs-dismiss="modal">Uždaryti</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>