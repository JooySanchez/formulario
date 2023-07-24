<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
    <style>

        body {
        background-color: #f8f9fa; /* Color de fondo de la página */
        }

        .bg-entero{
            background-color: white; /* Color de fondo del container */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px; /* Borde redondeado */
           
        }
    </style>
</head>
<body>
    <main>
        <div class="container bg-entero ">
            <section class="row pt-3 ">
                <article class="col-12 text-center">
                    <h1> FORMULARIO PRUEBA</h1>
                </article>
            </section>
                
                    <form id="miFormulario" class="row pt-5 gx-4 px-4 d-flex align-items-center ">
                        <div class="col-12 pb-2">
                        <h2 class="fs-5"><i class="bi bi-search"></i> Ingreso Local</h2>
                        </div>
                        <!-- SECCION 1------------------------------------------------------------ -->
                            <div class="col-12 col-md-4">
                                <label for="departamento" class="form-label">Ingreso Departamento</label>
                                <select  name="departamento" id="cmbdepartamento" class="form-select">
                                    <option value="00">Seleccione</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="provincial" class="form-label">Ingreso Provincial(*)</label>
                                <select  name="provincial" id="cmbprovincia" class="form-select">
                                    <option value="00">--</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="localidad" class="form-label">Localidad(*)</label>
                                <select  name="localidad" id="cmblocal" class="form-select">
                                    <option value="00">--</option>
                                </select>
                            </div>
                        <!-- SECCION 2------------------------------------------------------------ -->
                        <div class="col-12 pb-2 pt-5">
                        <h2 class="fs-5"><i class="bi bi-person-check-fill"></i> Ingreso Monitor</h2>
                        </div>
                        <div class="col-12 col-md-3">
                            <label for="monitor" class="form-label">Monitor(*)</label>
                            <input type="text" name="monitor" id="txtmonitor" class="form-control">
                        </div>
                        <div class="col-12 col-md-2 pt-3">
                            <input type="submit" name="btn_buscar" value="BUSCAR" id="btnbuscar" class="form-control bg-success text-white">
                        </div>  
                        <div class="col-12 col-md-6 offset-md-1">
                             <label for="responsable" class="form-label">Responsable:</label>
                            <input type="text" name="responsable" id="txtresponsable" class="form-control" readonly disabled>
                        </div>
                        <!-- SECCION 3------------------------------------------------------------ -->
                        <div class="col-12 pb-2 pt-5">
                        <h2 class="fs-5"><i class="bi bi-megaphone"></i> Reconocimiento e identificacion-indicadores de seguridad</h2>
                        </div>
                        <div class="col-12 col-md-8 offset-md-2">
                            <label for="seguridad" class="form-label">El Local de Jurisdicción está ubicado en una zona:</label>
                            <input type="text" name="regional" id="txtseguridad" class="form-control">
                        </div>
                        <!-- SECCION 4------------------------------------------------------------ -->
                        <div class="col-12 pb-2 pt-5">
                        <h6>Puntos vulnerabes en el ámbito de ubicación del Local de Jurisdicción:</h6>
                        </div>
                        <div class="col-12 col-md-6 g-col-lg-4 my-3">
                        <input type="checkbox" name="indc2_4" id="indc2_4" class="form-check-input" > &nbsp; 1. ZONA DE ACTIVIDAD DELICUENCIAL
                        </div>
                        <div class="col-12 col-md-6 g-col-lg-4 my-3">
                        <input type="checkbox" name="indc2_4" id="indc2_4" class="form-check-input" > &nbsp; 2. PROSTITUCION
                        </div>
                        <div class="col-12 col-md-6 g-col-lg-4 my-3">
                        <input type="checkbox" name="indc2_4" id="indc2_4" class="form-check-input"> &nbsp; 3. VENTA DE LICOR
                        </div>
                        <div class="col-12 col-md-6 g-col-lg-4 my-3">
                        <input type="checkbox" name="indc2_4" id="indc2_4" class="form-check-input"> &nbsp; 4. COMERCIALIZACION DE DROGA
                        </div>
                        <div class="col-12 col-md-6 g-col-lg-4 my-3">
                        <input type="checkbox" name="indc2_4" id="indc2_4" class="form-check-input"> &nbsp; 5. BARES,DISCOTECAS
                        </div>
                        <div class="col-12 col-md-6 g-col-lg-4 my-3">
                        <input type="checkbox" name="indc2_4" id="indc2_4" class="form-check-input"> &nbsp; 6. NO EXISTE
                        </div>
                         <!-- SECCION 5----------------------------------------------------------- -->
                         <div class="col-12 pb-2 pt-5">
                                <h6>Acciones de Seguridad realizadas por el Coordinador (Informe Técnico)::</h6>
                        </div>
                        
                        <div class="col-12 pt-3">
                        <h6>Acciones de seguridad</h6>
                        <input class="form-control" type="file" id="formFile">
                        <label class="form-label">(**) El documento deben ser tipo PDF y pesar menos de 3MB</label>
                        </div>

                        <div class="col-12 pt-3">
                        <h6>Mapa del delito //IMAGENES</h6>
                        <input class="form-control" type="file" id="formFile">
                        <label class="form-label">(**) Las imágenes debe ser tipo JPG y pesar menos de 3MB </label>
                         </div>
                            

                        <div class="col-12 col-md-8 offset-md-2  pt-3">
                               <input class="form-control bg-success text-white" id="btnguardar" type="submit" value="GUARDAR"></div>
                        </div>
                   
                    </form>
        </div>

     
        
    </main>
        

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/formulario.js')}}"></script>
</body>
</html>






