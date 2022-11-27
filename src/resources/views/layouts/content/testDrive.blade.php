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
    <div class="row justify-content-center">
        <div class="col-8">
            <form class="row g-3 needs-validation">
                <div class="col-6">
                    <label for="model" class="form-label"><b>Jus dominantis modelis</b></label>
                    <select class="form-select" id="model" required>
                        <option value="ser1">BMW 1 Serija</option>
                        <option value="ser2">BMW 2 Serija</option>
                        <option value="ser3">BMW 3 Serija</option>
                        <option value="ser4">BMW 4 Serija</option>
                        <option value="ser5">BMW 5 Serija</option>
                        <option value="ser6">BMW 6 Serija</option>
                        <option value="ser7">BMW 7 Serija</option>
                        <option value="ser8">BMW 8 Serija</option>
                        <option value="X1">X1</option>
                        <option value="X2">X2</option>
                        <option value="X3">X3</option>
                        <option value="X4">X4</option>
                        <option value="X5">X5</option>
                        <option value="X6">X6</option>
                        <option value="X7">X7</option>
                        <option value="iX">iX</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="city" class="form-label"><b>Miestas</b></label>
                    <select class="form-select" id="city" required>
                        <option value="ser1">Vilnius</option>
                        <option value="ser2">Kaunas</option>
                        <option value="ser3">Klaipėda</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="name" class="form-label"><b>Vardas ir pavardė</b></label>
                    <input type="text" class="form-control" id="name" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="col-6">
                    <label for="personalCar" class="form-label"><b>Vairuojamas automobilis</b></label>
                    <input type="text" class="form-control" id="personalCar" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="col-6">
                    <label for="phone" class="form-label"><b>Telefono numeris</b></label>
                    <input type="text" class="form-control" id="phone" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="col-6">
                    <label for="email" class="form-label"><b>El. paštas</b></label>
                    <input type="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-outline-dark mt-4 btn-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><b>REGISTRUOTIS VAŽIAVIMUI</b></button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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