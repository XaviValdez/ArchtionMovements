<?php include('../templates/_header.php') ?>
<?php include('../templates/_navbar.php') ?>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="../img/tienda/libreta.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="../img/tienda/libreta.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="../img/tienda/libreta.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                <div class="col-sm-6 pl-4 my-border-bottom">
                    <h3>Libreta AM</h3>
                    <div><hr class="thick-hr"></div>
                    
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas accumsan dignissim.</p>

                    <p class="display-5 mt-0">$ 350.00</p>
                    <br>
                    <h5>Tamaño</h5>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <select class="form-control btn-lg" id="exampleFormControlSelect1">
                                    <option>Chica</option>
                                    <option>Mediana</option>
                                    <option>Grande</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <input class="form-control btn-lg" type="number" value="1" min="0" max="50"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <button type="button" class="btn btn-light btn-lg btn-block mb-3">Añadir a la cesta</button>

                            <button type="button" class="btn btn-dark btn-lg btn-block">Comprar ahora</button>
                        </div>
                    </div>
                    
                    <div class="bottom-hr"><hr class="thick-hr"></div>

                    
                </div>
                
            
            </div>
        
        </div>
        
    </div>
</div>

<?php include('../templates/_loginmodal.php') ?>
<?php include('../templates/_footer.php') ?>

<script src="../js/input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>