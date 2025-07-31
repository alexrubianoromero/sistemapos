<?php
$ruta = dirname(dirname(dirname(__FILE__)));
// die($ruta); 
require_once($ruta.'/grupos/views/gruposView.php');

class dashboardView{
    protected $vistaGrupos;

    public function __construct()
    {
        $this->vistaGrupos = new gruposView();
        // echo 'dashboard view';

    }



    public function pantallaInicial3()
    {
        ?>
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Tres Columnas con la Misma Altura</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
                <style>
                    /* Reseteo básico y asegurando que html/body tomen todo el alto */
                    body, html {
                        margin: 0;
                        padding: 0;
                        height: 100%;
                    }

                    /* Contenedor principal que gestiona las filas verticalmente */
                    #div_principal_dashboard {
                        height: 100%;
                        display: flex;
                        flex-direction: column; /* Apila las filas en columna */
                        border: 1px solid black; /* Borde para visualizar el contenedor principal */
                    }

                    /* Clase general para bordes de visualización */
                    .conBorde {
                        border: 1px solid black;
                    }

                    /* Estilo para la barra superior (10% del alto del viewport) */
                    .filaArriba {
                        height: 5vh; /* 10% del alto del viewport */
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #f8f9fa; /* Color suave para distinguirlo */
                    }

                    /* Estilo común para las columnas de contenido para centrar texto y facilitar visualización */
                    .columna-contenido {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 1.5em;
                        height: 100%; /* Las columnas ocupan el 100% de la altura de su fila contenedora */
                    }

                    /* Estilo específico para la columna izquierda (columna1) */
                    .columna1 {
                        background-color: lightblue;
                        border: 2px solid blue;
                        padding:5px;
                    }

                    /* Estilo específico para la columna central (antes columna-derecha) */
                    .columna-central { /* Cambiado de nombre a columna-central para mayor claridad */
                        background-color: lightgreen;
                        border: 2px solid green;
                    }
                    
                    /* Nuevo estilo específico para la columna derecha */
                    .columna-tercera {
                        background-color: lightcoral;
                        border: 2px solid darkred;
                    }
                    
                    /* Estilo para el pie de página (el 10% restante del alto del viewport) */
                    .filaAbajo {
                        height: 15vh; /* 10% del alto del viewport */
                        background-color: #e9ecef;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                </style>    
            </head>
            <body class="container">
                <div id="div_principal_dashboard">
                    <div id="div_barra_superior" class="row filaArriba conBorde">
                        <div class="col-12">
                            Sistema Pos V1
                        </div>
                    </div>

                    <div class="row" style="flex-grow: 1; height: calc(100vh - 20vh); "> 
                        <div class="col-lg-1 columna-contenido columna1">
                            <h3>Produtos</h3>
                            
                        </div>
                        
                        <div class="col-lg-7 columna-contenido columna-central" id="columncentral">
                            Contenido de la Columna Central
                        </div>

                        <div class="col-lg-4 columna-contenido columna-tercera">
                            Contenido de la Columna Derecha
                        </div>
                    </div>

                    <div class="row filaAbajo conBorde">
                        <div class="col-12">
                            <?php   $this->botonesAbajo2();   ?>
                        </div>
                    </div>
                </div>
            </body>
            </html>
            <script src="../dashboard/js/dashboard.js"></script>
        <?php
    }

 

    public function botonesAbajo2()
    {
        ?>
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Botones estilo ETPOS</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f0f0f0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        min-height: 100vh;
                        margin: 0;
                        padding: 20px;
                    }

                    .button-container {
                        display: flex;
                        gap: 15px; /* Espacio entre los botones */
                        background-color: #a0a0a0; /* Color de fondo del contenedor de los botones (como el de la barra inferior) */
                        padding: 10px;
                        border-radius: 8px;
                        box-shadow: inset 0 2px 5px rgba(0,0,0,0.3), /* Sombra interior para "hundir" un poco el contenedor */
                                    0 4px 8px rgba(0,0,0,0.2); /* Sombra exterior */
                    }

                    .etpos-button {
                        /* Estilos base del botón */
                        width: 100px; /* Ancho fijo para cada botón */
                        height: 70px; /* Alto fijo para cada botón */
                        border: none;
                        border-radius: 8px; /* Bordes redondeados */
                        cursor: pointer;
                        outline: none; /* Elimina el contorno al hacer clic */
                        font-size: 0.85em; /* Tamaño de la fuente */
                        color: #333; /* Color del texto */
                        text-align: center;
                        text-shadow: 1px 1px 0 rgba(255,255,255,0.7); /* Sombra clara para el texto */
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        gap: 5px; /* Espacio entre el icono y el texto */
                        user-select: none; /* Evita selección de texto al arrastrar */

                        /* Estilos para el efecto 3D / biselado - ESTO ES LO CLAVE */
                        background: linear-gradient(to bottom, #d06060, #a84a4a); /* Gradiente de arriba a abajo */
                        box-shadow: 
                            inset 0 1px 0 rgba(255,255,255,0.3), /* Sombra interior superior (brillo) */
                            inset 0 -1px 0 rgba(0,0,0,0.2),    /* Sombra interior inferior */
                            0 2px 3px rgba(0,0,0,0.3),         /* Sombra exterior para profundidad */
                            0 0 5px rgba(255,255,255,0.1) inset; /* Un pequeño brillo general interior */
                        
                        transition: all 0.08s ease-out; /* Transición suave para los efectos */
                    }

                    /* Estilos al pasar el ratón (hover) */
                    .etpos-button:hover {
                        background: linear-gradient(to bottom, #d56a6a, #b05050); /* Ligero cambio de gradiente */
                        box-shadow: 
                            inset 0 1px 0 rgba(255,255,255,0.4), 
                            inset 0 -1px 0 rgba(0,0,0,0.3),    
                            0 3px 5px rgba(0,0,0,0.4),         
                            0 0 8px rgba(255,255,255,0.15) inset;
                    }

                    /* Estilos al hacer clic (active) - Efecto "hundido" */
                    .etpos-button:active {
                        background: linear-gradient(to top, #d06060, #a84a4a); /* Gradiente inverso */
                        box-shadow: 
                            inset 0 2px 5px rgba(0,0,0,0.4), /* Sombra interior más fuerte */
                            inset 0 -1px 0 rgba(255,255,255,0.2), /* Brillo interior inferior */
                            0 1px 2px rgba(0,0,0,0.2);         /* Sombra exterior más suave */
                        transform: translateY(1px); /* Ligero desplazamiento hacia abajo */
                    }

                    /* Estilo para los iconos (simulado con texto grande por ahora) */
                    .etpos-button .icon {
                        font-size: 2em; /* Tamaño del icono */
                        /* En un proyecto real, usarías imágenes (<img>) o librerías de iconos (Font Awesome, etc.) aquí */
                        line-height: 1; /* Asegura que el icono no añada espacio extra */
                    }

                    /* Colores de ejemplo para los iconos, en un proyecto real serían imágenes */
                    .icon-system { color: #8a2be2; } /* Un violeta */
                    .icon-ficheros { color: #f0f0f0; } /* Blanco casi gris */
                    .icon-list { color: #ffeb3b; } /* Amarillo */
                    .icon-caja { color: #4CAF50; } /* Verde */
                    .icon-opciones { color: #FF9800; } /* Naranja */

                </style>
            </head>
            <body>

                <div class="button-container">
                    <button class="etpos-button">
                        <span class="icon icon-system">⚙️</span>
                        Sistema
                    </button>
                    <button class="etpos-button">
                        <span class="icon icon-ficheros">📄</span>
                        Ficheros
                    </button>
                    <button class="etpos-button">
                        <span class="icon icon-list">📋</span>
                        List
                    </button>
                    <button class="etpos-button">
                        <span class="icon icon-caja">💰</span>
                        Caja
                    </button>
                    <button class="etpos-button" onclick="menuOpciones();">
                        <span class="icon icon-opciones">🔧</span>
                        Opciones
                    </button>
                </div>

            </body>
            </html>
        <?php
    }

}
?>