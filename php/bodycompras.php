<?php
echo '<p style="color:white;">Estás en compras ' . $nomTipo . '</p>';
$nomTipo = $_REQUEST['tipo'];
$parrafo = 0;
$type = "";
switch ($nomTipo) {
    case 'Tarjeta1':
        $colorL = "2, 0, 36";
        $parrafo = "Estamos en un vacio constante donde cabamoz hasta llegar lo mas profundo de la nada <br> Estamos en la tarjeta 1";
        $type = "Tarjeta 1";
        break;
    case 'Tarjeta2':
        $colorL = "0, 0, 255";
        $parrafo = "aña dominara el mundo <br> Estamos en la tarjeta 2 ";
        $type = "Tarjeta 2";
        break;
    case 'Tarjeta3':
        $colorL = "255, 255, 0";
        $parrafo = " pero que sea desertica oh si <br> Estamos en la tarjeta 3";
        $type = "Tarjeta 3";
        break;
    case 'compras':
        $colorL = "0, 255, 0";
        $compras = "Estas en el area de Compras";


        break;
    default:
        $colorL = "0, 0, 0";
        $parrafo = "Otro tipo de tarjeta";
        break;
}

?>


<body style="background-color: rgb(1, 0, 54);font-family: 'Comic Sans MS', cursive;">

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p style="font-size: 2.3em; color: rgb(<?php echo $colorL ?>);">Pagina en reconstrucción</p>
                <p style="font-size: 1.5rem; color: whitesmoke;">Por ahora solo tenemos esto</p>
                <p style="color: whitesmoke;"><?php echo $parrafo ?></p>
            </div>
        </div>
    </div>




    <!--  infor de la tarjeta -->

    <?php
    $id = "1";
    $titulo = $type;
    $desP = ' ojojala en este mundo tan extenso llegue el dia que sea millonaria';
    $url = '../img/cocc3.jpg';
    ?>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <!-- Tarjeta 1 -->
            <div class="col-3 mx-4">
                <div class="card" style="width: 18rem; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="<?php echo $url; ?>" class="img-fluid card-img" alt="Tarjeta1" style="border-radius: 20px 20px 0 0;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;"><?php echo $titulo; ?></h5>
                        <p class="card-text" style="font-size: 1.1rem;"><?php echo $desP; ?></p>
                        <a href="php/compras.php?tipo=<?php echo $nomTipo; ?>" class="btn btn-outline-info" style="border-radius: 20px; padding: 10px 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                            </svg> Info
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
