<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/main.css">
    <link rel="stylesheet" href="./resources/css/responsive.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body onload="obtenerTamaño();" onresize="obtenerTamaño();">

    <!-- barra de navegacion -->

    <!-- <?php
    include('navBar.php');
    ?> -->

    <div class="pink"></div>

    <div class="container">

        <header>
            <h1>Cotiza tu sitio aquí​</h1>
            <h2>La inversión aproximada para el desarrollo de tu sitio web es:</h2>
            <h4 id="total">$ _________</h4>
        </header>

        <!-- linea indicadora de la completacion del formulario -->

        <div id="barra_space">

            <!-- linea fila 1 -->
            <div class="barra" id="barra1">
                <div class="step-row">
                    <div id="progress1"></div>
                </div>
                <div class="step-img" id="img-progress1">
                    <div class="circulo" id="step1-form1">
                        <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon1-form1" d="M5.16667 20.4444H3.77778C3.04106 20.4444 2.33453 20.1518 1.81359 19.6308C1.29266 19.1099 1 18.4034 1 17.6667V3.77778C1 3.04106 1.29266 2.33453 1.81359 1.81359C2.33453 1.29266 3.04106 1 3.77778 1H26C26.7367 1 27.4432 1.29266 27.9642 1.81359C28.4851 2.33453 28.7778 3.04106 28.7778 3.77778V17.6667C28.7778 18.4034 28.4851 19.1099 27.9642 19.6308C27.4432 20.1518 26.7367 20.4444 26 20.4444H24.6111" stroke="#F130D5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon1-form1" d="M14.8889 17.6667L21.8333 26H7.94446L14.8889 17.6667Z" stroke="#F130D5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="circulo" id="step2-form1">
                        <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon2-form1" d="M17.25 12.25V7.25M23.5 1H1V21H7.25V26L12.25 21H18.5L23.5 16V1ZM11 12.25V7.25V12.25Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="circulo" id="step3-form1">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon3-form1" d="M13.5 1L1 7.25L13.5 13.5L26 7.25L13.5 1Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon3-form1" d="M1 19.75L13.5 26L26 19.75" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon3-form1" d="M1 13.5L13.5 19.75L26 13.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="circulo" id="step4-form1">
                        <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon4-form1" d="M4.75 1L1 6V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H21C21.663 26 22.2989 25.7366 22.7678 25.2678C23.2366 24.7989 23.5 24.163 23.5 23.5V6L19.75 1H4.75Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon4-form1" d="M1 6H23.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon4-form1" d="M17.25 11C17.25 12.3261 16.7232 13.5979 15.7855 14.5355C14.8479 15.4732 13.5761 16 12.25 16C10.9239 16 9.65215 15.4732 8.71447 14.5355C7.77678 13.5979 7.25 12.3261 7.25 11" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <div class="circulo" id="step5-form1">
                        <svg width="18" height="27" viewBox="0 0 18 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon5-form1" d="M8.95455 16.9091C13.3477 16.9091 16.9091 13.3477 16.9091 8.95455C16.9091 4.56137 13.3477 1 8.95455 1C4.56137 1 1 4.56137 1 8.95455C1 13.3477 4.56137 16.9091 8.95455 16.9091Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon5-form1" d="M4.64774 15.6477L3.27274 26L8.95455 22.5909L14.6364 26L13.2614 15.6364" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
            </div>

            <!-- linea fila 2 -->
            <div class="barra" id="barra2">
                <div class="step-row">
                    <div id="progress2"></div>
                </div>
                <div class="step-img" id="img-progress2">
                    <div class="circulo" id="step1-form2">
                        <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon1-form2" d="M5.16667 20.4444H3.77778C3.04106 20.4444 2.33453 20.1518 1.81359 19.6308C1.29266 19.1099 1 18.4034 1 17.6667V3.77778C1 3.04106 1.29266 2.33453 1.81359 1.81359C2.33453 1.29266 3.04106 1 3.77778 1H26C26.7367 1 27.4432 1.29266 27.9642 1.81359C28.4851 2.33453 28.7778 3.04106 28.7778 3.77778V17.6667C28.7778 18.4034 28.4851 19.1099 27.9642 19.6308C27.4432 20.1518 26.7367 20.4444 26 20.4444H24.6111" stroke="#F130D5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon1-form2" class="icon1" d="M14.8889 17.6667L21.8333 26H7.94446L14.8889 17.6667Z" stroke="#F130D5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="circulo" id="step2-form2">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon2-form2" d="M23.5 13.5V26H3.5V13.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon2-form2" d="M26 7.25H1V13.5H26V7.25Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon2-form2" d="M13.5 26V7.25" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon2-form2" d="M13.5 7.25H7.875C7.0462 7.25 6.25134 6.92076 5.66529 6.33471C5.07924 5.74866 4.75 4.9538 4.75 4.125C4.75 3.2962 5.07924 2.50134 5.66529 1.91529C6.25134 1.32924 7.0462 1 7.875 1C12.25 1 13.5 7.25 13.5 7.25Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon2-form2" d="M13.5 7.25H19.125C19.9538 7.25 20.7487 6.92076 21.3347 6.33471C21.9208 5.74866 22.25 4.9538 22.25 4.125C22.25 3.2962 21.9208 2.50134 21.3347 1.91529C20.7487 1.32924 19.9538 1 19.125 1C14.75 1 13.5 7.25 13.5 7.25Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="circulo" id="step3-form2">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon3-form2" d="M13.5 1L1 7.25L13.5 13.5L26 7.25L13.5 1Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon3-form2" d="M1 19.75L13.5 26L26 19.75" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon3-form2" d="M1 13.5L13.5 19.75L26 13.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="circulo" id="step4-form2">
                        <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon4-form2" d="M10.5238 26C11.1813 26 11.7143 25.467 11.7143 24.8095C11.7143 24.152 11.1813 23.619 10.5238 23.619C9.86633 23.619 9.33333 24.152 9.33333 24.8095C9.33333 25.467 9.86633 26 10.5238 26Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon4-form2" d="M23.619 26C24.2765 26 24.8095 25.467 24.8095 24.8095C24.8095 24.152 24.2765 23.619 23.619 23.619C22.9616 23.619 22.4286 24.152 22.4286 24.8095C22.4286 25.467 22.9616 26 23.619 26Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon4-form2" d="M1 1H5.7619L8.95238 16.9405C9.06124 17.4886 9.35941 17.9809 9.7947 18.3313C10.23 18.6817 10.7746 18.8678 11.3333 18.8571H22.9048C23.4635 18.8678 24.0081 18.6817 24.4434 18.3313C24.8787 17.9809 25.1769 17.4886 25.2857 16.9405L27.1905 6.95238H6.95238" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="circulo" id="step5-form2">
                        <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon5-form2" d="M21.8333 1H1V19.0556H21.8333V1Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon5-form2" d="M21.8333 7.94444H27.3889L31.5556 12.1111V19.0556H21.8333V7.94444Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon5-form2" d="M7.24999 26C9.16765 26 10.7222 24.4454 10.7222 22.5278C10.7222 20.6101 9.16765 19.0556 7.24999 19.0556C5.33234 19.0556 3.77777 20.6101 3.77777 22.5278C3.77777 24.4454 5.33234 26 7.24999 26Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon5-form2" d="M25.3056 26C27.2232 26 28.7778 24.4454 28.7778 22.5278C28.7778 20.6101 27.2232 19.0556 25.3056 19.0556C23.3879 19.0556 21.8333 20.6101 21.8333 22.5278C21.8333 24.4454 23.3879 26 25.3056 26Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="circulo" id="step6-form2">
                        <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon6-form2" d="M4.75 1L1 6V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H21C21.663 26 22.2989 25.7366 22.7678 25.2678C23.2366 24.7989 23.5 24.163 23.5 23.5V6L19.75 1H4.75Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon6-form2" d="M1 6H23.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon6-form2" d="M17.25 11C17.25 12.3261 16.7232 13.5979 15.7855 14.5355C14.8479 15.4732 13.5761 16 12.25 16C10.9239 16 9.65215 15.4732 8.71447 14.5355C7.77678 13.5979 7.25 12.3261 7.25 11" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="circulo" id="step7-form2">
                        <svg width="18" height="27" viewBox="0 0 18 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="escala">
                            <path class="icon7-form2" d="M8.95455 16.9091C13.3477 16.9091 16.9091 13.3477 16.9091 8.95455C16.9091 4.56137 13.3477 1 8.95455 1C4.56137 1 1 4.56137 1 8.95455C1 13.3477 4.56137 16.9091 8.95455 16.9091Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path class="icon7-form2" d="M4.64774 15.6477L3.27274 26L8.95455 22.5909L14.6364 26L13.2614 15.6364" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>
            </div>

        </div>

        <!-- primera secsion del formulario -->
        <form action="" id="form1">
            <h3>1. ¿Para qué necesitas tu sitio?</h3>
            <div class="quest1">

                <input type="radio" name="pregunta1" id="op1" class="btn-reset" value="difundir" form="form-query">
                <label for="op1" class="op1 change">
                    <div class="circulito">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dimensiones" width="68" height="62" viewBox="0 0 68 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60 14.8889H8.44444C4.88528 14.8889 2 17.7742 2 21.3333V53.5555C2 57.1147 4.88528 60 8.44444 60H60C63.5592 60 66.4444 57.1147 66.4444 53.5555V21.3333C66.4444 17.7742 63.5592 14.8889 60 14.8889Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M47.1111 60V8.44444C47.1111 6.73527 46.4321 5.0961 45.2236 3.88753C44.015 2.67897 42.3758 2 40.6667 2H27.7778C26.0686 2 24.4294 2.67897 23.2209 3.88753C22.0123 5.0961 21.3333 6.73527 21.3333 8.44444V60" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h4>Difundir info de mi empresa, productos y servicios </h4>
                </label>

                <input type="radio" name="pregunta1" id="op2" class="btn-reset" value="vender en linea" form="form-query">
                <label for="op2" class="op2 change">
                    <div class="circulito">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dimensiones_2" width="56" height="62" viewBox="0 0 56 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 2L2 13.6V54.2C2 55.7383 2.61107 57.2135 3.69878 58.3012C4.78649 59.3889 6.26174 60 7.8 60H48.4C49.9383 60 51.4135 59.3889 52.5012 58.3012C53.5889 57.2135 54.2 55.7383 54.2 54.2V13.6L45.5 2H10.7Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 13.6H54.2" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M39.7 25.2C39.7 28.2765 38.4779 31.227 36.3024 33.4024C34.127 35.5778 31.1765 36.8 28.1 36.8C25.0235 36.8 22.073 35.5778 19.8976 33.4024C17.7221 31.227 16.5 28.2765 16.5 25.2" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h4>Vender en línea</h4>
                </label>

            </div>
            <div class="btn-box">
                <button type="button" id="back" class="btn-anterior"></button>
                <button type="button" hidden id="next1" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- linea #1 -->

        <!-- pagina 2. linea 1-->
        <form action="" id="form2-linea1">
            <h3>2. ¿Qué tipo de página quieres tener?</h3>
            <div class="quest2-form1">

                <input type="radio" name="pregunta2" id="op1-p2" class="pregunta2-l1 reset" data-valor="200000" value="Landing page" form="form-query">
                <label for="op1-p2" class="op1-p2">
                    <div class="circulito2-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-1" width="51" height="62" viewBox="0 0 51 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.625 2H7.91667C6.34747 2 4.84254 2.61458 3.73295 3.70854C2.62336 4.80251 2 6.28624 2 7.83333V54.5C2 56.0471 2.62336 57.5308 3.73295 58.6248C4.84254 59.7188 6.34747 60.3333 7.91667 60.3333H43.4167C44.9859 60.3333 46.4908 59.7188 47.6004 58.6248C48.71 57.5308 49.3333 56.0471 49.3333 54.5V22.4167L28.625 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M28.625 2V22.4167H49.3333" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Landing page</h4>
                </label>

                <input type="radio" name="pregunta2" id="op2-p2" class="pregunta2-l1 reset" data-valor="300000" value="One page con servicios" form="form-query">
                <label for="op2-p2" class="op2-p2">
                    <div class="circulito2-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-2" width="68" height="62" viewBox="0 0 68 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60 2H8.44444C4.88528 2 2 4.88528 2 8.44444V40.6667C2 44.2258 4.88528 47.1111 8.44444 47.1111H60C63.5592 47.1111 66.4444 44.2258 66.4444 40.6667V8.44444C66.4444 4.88528 63.5592 2 60 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.3334 60H47.1112" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M34.2222 47.1111V60" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h4>One page (servicios)</h4>
                </label>

                <input type="radio" name="pregunta2" id="op3-p2" class="pregunta2-l1 reset" data-valor="400000" value="Sitio web con internas" form="form-query">
                <label for="op3-p2" class="op3-p2">
                    <div class="circulito2-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-3" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.1111 2H7.88889C4.63655 2 2 4.63655 2 7.88889V49.1111C2 52.3635 4.63655 55 7.88889 55H49.1111C52.3635 55 55 52.3635 55 49.1111V7.88889C55 4.63655 52.3635 2 49.1111 2Z" stroke="#AAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 19.6666H55" stroke="#AAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.6666 55V19.6666" stroke="#AAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Sitio web (Internas)</h4>
                </label>


            </div>
            <div class="btn-box">
                <button type="button" id="back1-linea1" class="btn-anterior">Anterior</button>
                <button hidden type="button" id="next2-linea1" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 3. linea 1-->
        <form action="" id="form3-linea1">
            <h3>3. ¿Qué características o secciones te gustaría incluír?</h3>
            <div class="quest3-form1">

                <div class="fila1">

                    <input type="checkbox" name="checkbox_form1" id="checkbox_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Nosotros" form="form-query">
                    <label class="checkbox_form1 check" for="checkbox_form1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="27.78" height="25" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 6.55554H3.77778C2.24365 6.55554 1 7.7992 1 9.33332V23.2222C1 24.7563 2.24365 26 3.77778 26H26C27.5341 26 28.7778 24.7563 28.7778 23.2222V9.33332C28.7778 7.7992 27.5341 6.55554 26 6.55554Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.4446 26V3.77778C20.4446 3.04107 20.1519 2.33453 19.631 1.81359C19.1101 1.29266 18.4035 1 17.6668 1H12.1113C11.3746 1 10.668 1.29266 10.1471 1.81359C9.62615 2.33453 9.3335 3.04107 9.3335 3.77778V26" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Nosotros</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form1" id="checkbox2_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Mis productos" form="form-query">
                    <label class="checkbox2_form1 check" for="checkbox2_form1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="22.5" height="25" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.75 1L1 6V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H21C21.663 26 22.2989 25.7366 22.7678 25.2678C23.2366 24.7989 23.5 24.163 23.5 23.5V6L19.75 1H4.75Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6H23.5" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.25 11C17.25 12.3261 16.7232 13.5979 15.7855 14.5355C14.8479 15.4732 13.5761 16 12.25 16C10.9239 16 9.65215 15.4732 8.71447 14.5355C7.77678 13.5979 7.25 12.3261 7.25 11" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Mis productos</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form1" id="checkbox3_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Mis servicios" form="form-query">
                    <label class="checkbox3_form1 check" for="checkbox3_form1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="30.56" height="25" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2222 26V23.2222C23.2222 21.7488 22.6369 20.3357 21.595 19.2938C20.5532 18.2519 19.1401 17.6666 17.6667 17.6666H6.55555C5.08213 17.6666 3.66905 18.2519 2.62718 19.2938C1.58532 20.3357 1 21.7488 1 23.2222V26" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.111 12.1111C15.1792 12.1111 17.6665 9.6238 17.6665 6.55555C17.6665 3.48731 15.1792 1 12.111 1C9.04273 1 6.55542 3.48731 6.55542 6.55555C6.55542 9.6238 9.04273 12.1111 12.111 12.1111Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M31.5556 25.9999V23.2222C31.5547 21.9912 31.145 20.7955 30.3908 19.8226C29.6367 18.8497 28.5808 18.1549 27.3889 17.8472" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.8335 1.18054C23.0285 1.48652 24.0877 2.18152 24.8441 3.15597C25.6005 4.13043 26.0111 5.32892 26.0111 6.56249C26.0111 7.79605 25.6005 8.99454 24.8441 9.969C24.0877 10.9435 23.0285 11.6385 21.8335 11.9444" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Mis servicios</h4>
                    </label>

                </div>
                <div class="fila2">

                    <input type="checkbox" name="checkbox_form1" id="checkbox4_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Contacto" form="form-query">
                    <label class="checkbox4_form1 check" for="checkbox4_form1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="24.96" height="25" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.4554 5.77826C17.6222 6.0059 18.6945 6.57654 19.5351 7.41713C20.3757 8.25772 20.9463 9.33002 21.174 10.4968L16.4554 5.77826ZM16.4554 1C18.8795 1.2693 21.14 2.35485 22.8657 4.0784C24.5915 5.80196 25.6799 8.06109 25.9522 10.4848L16.4554 1ZM24.7576 20.0175V23.6012C24.759 23.9339 24.6909 24.2632 24.5576 24.568C24.4243 24.8728 24.2288 25.1464 23.9837 25.3714C23.7385 25.5963 23.4491 25.7675 23.1339 25.8741C22.8188 25.9807 22.4848 26.0202 22.1535 25.9903C18.4776 25.5909 14.9467 24.3348 11.8444 22.323C8.95813 20.4889 6.51107 18.0419 4.67701 15.1556C2.65817 12.0392 1.4018 8.49111 1.0097 4.79872C0.979844 4.46838 1.0191 4.13545 1.12497 3.82111C1.23084 3.50678 1.401 3.21794 1.62462 2.97297C1.84823 2.728 2.12041 2.53228 2.42381 2.39826C2.72721 2.26425 3.0552 2.19488 3.38688 2.19457H6.97058C7.55031 2.18886 8.11233 2.39415 8.5519 2.77218C8.99146 3.1502 9.27857 3.67517 9.35971 4.24922C9.51096 5.39608 9.79148 6.52215 10.1959 7.60595C10.3566 8.03351 10.3914 8.49818 10.2961 8.94491C10.2009 9.39164 9.97952 9.80169 9.65835 10.1265L8.14125 11.6436C9.84178 14.6342 12.318 17.1104 15.3086 18.811L16.8257 17.2939C17.1505 16.9727 17.5606 16.7514 18.0073 16.6561C18.454 16.5608 18.9187 16.5956 19.3463 16.7563C20.4301 17.1607 21.5561 17.4413 22.703 17.5925C23.2833 17.6744 23.8132 17.9667 24.1921 18.4138C24.5709 18.8609 24.7722 19.4316 24.7576 20.0175Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Contacto</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form1" id="checkbox5_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Blog" form="form-query">
                    <label class="checkbox5_form1 check" for="checkbox5_form1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 1H3.5C2.83696 1 2.20107 1.26339 1.73223 1.73223C1.26339 2.20107 1 2.83696 1 3.5V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H18.5C19.163 26 19.7989 25.7366 20.2678 25.2678C20.7366 24.7989 21 24.163 21 23.5V8.5L13.5 1Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5 1V8.5H21" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 14.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 19.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.5 9.75H7.25H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Blog</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form1" id="checkbox6_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Chat en línea" form="form-query">
                    <label class="checkbox6_form1 check" for="checkbox6_form1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="25" height="25" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 21.8333V13.5C1 10.1848 2.31696 7.00537 4.66116 4.66117C7.00537 2.31696 10.1848 1 13.5 1C16.8152 1 19.9946 2.31696 22.3388 4.66117C24.683 7.00537 26 10.1848 26 13.5V21.8333" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M26 23.2223C26 23.959 25.7073 24.6655 25.1864 25.1865C24.6655 25.7074 23.9589 26.0001 23.2222 26.0001H21.8333C21.0966 26.0001 20.3901 25.7074 19.8691 25.1865C19.3482 24.6655 19.0556 23.959 19.0556 23.2223V19.0556C19.0556 18.3189 19.3482 17.6124 19.8691 17.0914C20.3901 16.5705 21.0966 16.2778 21.8333 16.2778H26V23.2223ZM1 23.2223C1 23.959 1.29266 24.6655 1.81359 25.1865C2.33453 25.7074 3.04107 26.0001 3.77778 26.0001H5.16667C5.90338 26.0001 6.60992 25.7074 7.13085 25.1865C7.65179 24.6655 7.94444 23.959 7.94444 23.2223V19.0556C7.94444 18.3189 7.65179 17.6124 7.13085 17.0914C6.60992 16.5705 5.90338 16.2778 5.16667 16.2778H1V23.2223Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Chat en línea</h4>
                    </label>

                </div>
                <div class="fila3">

                    <input type="checkbox" name="checkbox_form1" id="checkbox7_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Tratamiento de datos personales" form="form-query">
                    <label class="checkbox7_form1 check" for="checkbox7_form1" data-btn="#next3-linea1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 1H3.5C2.83696 1 2.20107 1.26339 1.73223 1.73223C1.26339 2.20107 1 2.83696 1 3.5V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H18.5C19.163 26 19.7989 25.7366 20.2678 25.2678C20.7366 24.7989 21 24.163 21 23.5V8.5L13.5 1Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5 1V8.5H21" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 14.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 19.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.5 9.75H7.25H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Tratamiento de datos personales</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form1" id="checkbox8_form1" class="checkbox ghost reset valores" data-valor="100000" data-btn="#next3-linea1" value="Términos y condiciones" form="form-query">
                    <label class="checkbox8_form1 check" for="checkbox8_form1">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="20" height="25" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17.25C1 17.25 2.25 16 6 16C9.75 16 12.25 18.5 16 18.5C19.75 18.5 21 17.25 21 17.25V2.25C21 2.25 19.75 3.5 16 3.5C12.25 3.5 9.75 1 6 1C2.25 1 1 2.25 1 2.25V17.25Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 26V17.25" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>


                        <h4>Términos y condiciones</h4>
                    </label>

                </div>

            </div>
            <div class="btn-box">
                <button type="button" id="back2-linea1" class="btn-anterior">Anterior</button>
                <button type="button" hidden id="next3-linea1" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 4. linea 1-->
        <form action="" id="form4-linea1">
            <h3>4. ¿Cuántos servicios o productos te gustaría incluir?</h3>
            <div class="quest4-form1">

                <input type="radio" name="pregunta4" id="op1-p4" class="pregunta4-l1 reset reset_cuantos" data-valor="100000" value="1 - 5" form="form-query">
                <label for="op1-p4" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>1 - 5</h4>
                </label>

                <input type="radio" name="pregunta4" id="op2-p4" class="pregunta4-l1 reset reset_cuantos" data-valor="200000" value="5 - 10" form="form-query">
                <label for="op2-p4" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>5 - 10</h4>
                </label>

                <input type="radio" name="pregunta4" id="op3-p4" class="pregunta4-l1 reset reset_cuantos" data-valor="400000" value="10 - 20" form="form-query">
                <label for="op3-p4" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>10 - 20</h4>
                </label>

                <input type="radio" name="pregunta4" id="op4-p4" class="pregunta4-l1 reset" data-valor="400000" value="20" form="form-query">
                <label for="op4-p4" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Más de 20</h4>
                    <input type="number" id="cuantos" placeholder="¿Cuántos?" class="number" min="20" max="1000" name="mas20" form="form-query">
                </label>

            </div>
            <div class="btn-box">
                <button type="button" id="back3-linea1" class="btn-anterior">Anterior</button>
                <button hidden type="button" id="next4-linea1" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 5. linea 1-->
        <form action="" id="form5-linea1">
            <h3 class="r_h3">Resumen de tu cotización</h3>
            <div class="resumen">
                <p><strong>Tipo: </strong><span id="tipo">Sitio web con internas</span></p>
                <p><strong>¿Para qué?: </strong><span>Difundir info de mi empresa productos y servicios</span></p>
                <p><strong>Internas: </strong><span id="internas">Nosotros, mis productos, contacto, chat en línea</span></p>
                <p><strong>Cantidad de servicios/productos: </strong><span id="num-products">25</span></p>
            </div>
            <div class="btn-box last_btn_box">
                <button type="button" id="back4-linea1" class="btn-anterior bt1">Anterior</button>
                <button type="button" id="btn-enviarme1" class="btn-enviar bt2">Enviarme este presupuesto a mi correo electrónico</button>
            </div>
        </form>

        <!-- linea #2 -->

        <!-- pagina 2. linea 2 --->
        <form action="" id="form2-linea2">
            <h3>2. ¿Ofreces productos o servicios?</h3>
            <div class="quest2-form2">

                <input type="radio" name="pregunta2-form2" id="op1-p2-form2" class="pregunta2-l2 reset" data-valor="100000" value="Productos" form="form-query">
                <label for="op1-p2-form2" class="p-form2">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-5" width="52.2" height="58" viewBox="0 0 56 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 2L2 13.6V54.2C2 55.7383 2.61107 57.2135 3.69878 58.3012C4.78649 59.3889 6.26174 60 7.8 60H48.4C49.9383 60 51.4135 59.3889 52.5012 58.3012C53.5889 57.2135 54.2 55.7383 54.2 54.2V13.6L45.5 2H10.7Z" stroke="#AAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 13.6H54.2" stroke="#AAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M39.7 25.2C39.7 28.2765 38.4779 31.227 36.3024 33.4024C34.127 35.5779 31.1765 36.8 28.1 36.8C25.0235 36.8 22.073 35.5779 19.8976 33.4024C17.7221 31.227 16.5 28.2765 16.5 25.2" stroke="#AAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Productos</h4>
                </label>

                <input type="radio" name="pregunta2-form2" id="op2-p2-form2" class="pregunta2-l2 reset" data-valor="200000" value="Servicios" form="form-query">
                <label for="op2-p2-form2" class="p-form2">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-6" width="70.85" height="58" viewBox="0 0 75 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M53.5555 60V53.5555C53.5555 50.1372 52.1976 46.8589 49.7805 44.4417C47.3633 42.0246 44.085 40.6667 40.6667 40.6667H14.8889C11.4705 40.6667 8.1922 42.0246 5.77507 44.4417C3.35793 46.8589 2 50.1372 2 53.5555V60" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.7778 27.7778C34.8961 27.7778 40.6667 22.0072 40.6667 14.8889C40.6667 7.77055 34.8961 2 27.7778 2C20.6595 2 14.8889 7.77055 14.8889 14.8889C14.8889 22.0072 20.6595 27.7778 27.7778 27.7778Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M72.8888 60V53.5556C72.8867 50.6998 71.9362 47.9256 70.1866 45.6686C68.4369 43.4116 65.9873 41.7995 63.2222 41.0856" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M50.3334 2.4189C53.1058 3.12876 55.5632 4.74116 57.318 7.0019C59.0728 9.26264 60.0253 12.0431 60.0253 14.905C60.0253 17.7669 59.0728 20.5474 57.318 22.8081C55.5632 25.0689 53.1058 26.6813 50.3334 27.3911" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Servicios</h4>
                </label>


            </div>
            <div class="btn-box">
                <button type="button" id="back1-linea2" class="btn-anterior">Anterior</button>
                <button hidden type="button" id="next2-linea2" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 3. linea 2 --->
        <form action="" id="form3-linea2">
            <h3>3. ¿Qué características o secciones te gustaría incluír?</h3>
            <div class="quest3-form2">

                <div class="fila1">

                    <input type="checkbox" name="checkbox_form2" id="checkbox_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Nosotros" form="form-query">
                    <label class="checkbox_form1 check" for="checkbox_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="27.78" height="25" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 6.55554H3.77778C2.24365 6.55554 1 7.7992 1 9.33332V23.2222C1 24.7563 2.24365 26 3.77778 26H26C27.5341 26 28.7778 24.7563 28.7778 23.2222V9.33332C28.7778 7.7992 27.5341 6.55554 26 6.55554Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20.4446 26V3.77778C20.4446 3.04107 20.1519 2.33453 19.631 1.81359C19.1101 1.29266 18.4035 1 17.6668 1H12.1113C11.3746 1 10.668 1.29266 10.1471 1.81359C9.62615 2.33453 9.3335 3.04107 9.3335 3.77778V26" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Nosotros</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form2" id="checkbox2_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Mis productos" form="form-query">
                    <label class="checkbox2_form1 check" for="checkbox2_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="22.5" height="25" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.75 1L1 6V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H21C21.663 26 22.2989 25.7366 22.7678 25.2678C23.2366 24.7989 23.5 24.163 23.5 23.5V6L19.75 1H4.75Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 6H23.5" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.25 11C17.25 12.3261 16.7232 13.5979 15.7855 14.5355C14.8479 15.4732 13.5761 16 12.25 16C10.9239 16 9.65215 15.4732 8.71447 14.5355C7.77678 13.5979 7.25 12.3261 7.25 11" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Mis productos</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form2" id="checkbox3_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Mis servicios" form="form-query">
                    <label class="checkbox3_form1 check" for="checkbox3_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="30.56" height="25" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2222 26V23.2222C23.2222 21.7488 22.6369 20.3357 21.595 19.2938C20.5532 18.2519 19.1401 17.6666 17.6667 17.6666H6.55555C5.08213 17.6666 3.66905 18.2519 2.62718 19.2938C1.58532 20.3357 1 21.7488 1 23.2222V26" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.111 12.1111C15.1792 12.1111 17.6665 9.6238 17.6665 6.55555C17.6665 3.48731 15.1792 1 12.111 1C9.04273 1 6.55542 3.48731 6.55542 6.55555C6.55542 9.6238 9.04273 12.1111 12.111 12.1111Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M31.5556 25.9999V23.2222C31.5547 21.9912 31.145 20.7955 30.3908 19.8226C29.6367 18.8497 28.5808 18.1549 27.3889 17.8472" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.8335 1.18054C23.0285 1.48652 24.0877 2.18152 24.8441 3.15597C25.6005 4.13043 26.0111 5.32892 26.0111 6.56249C26.0111 7.79605 25.6005 8.99454 24.8441 9.969C24.0877 10.9435 23.0285 11.6385 21.8335 11.9444" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Mis servicios</h4>
                    </label>

                </div>
                <div class="fila2">

                    <input type="checkbox" name="checkbox_form2" id="checkbox4_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Contacto" form="form-query">
                    <label class="checkbox4_form1 check" for="checkbox4_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="24.96" height="25" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.4554 5.77826C17.6222 6.0059 18.6945 6.57654 19.5351 7.41713C20.3757 8.25772 20.9463 9.33002 21.174 10.4968L16.4554 5.77826ZM16.4554 1C18.8795 1.2693 21.14 2.35485 22.8657 4.0784C24.5915 5.80196 25.6799 8.06109 25.9522 10.4848L16.4554 1ZM24.7576 20.0175V23.6012C24.759 23.9339 24.6909 24.2632 24.5576 24.568C24.4243 24.8728 24.2288 25.1464 23.9837 25.3714C23.7385 25.5963 23.4491 25.7675 23.1339 25.8741C22.8188 25.9807 22.4848 26.0202 22.1535 25.9903C18.4776 25.5909 14.9467 24.3348 11.8444 22.323C8.95813 20.4889 6.51107 18.0419 4.67701 15.1556C2.65817 12.0392 1.4018 8.49111 1.0097 4.79872C0.979844 4.46838 1.0191 4.13545 1.12497 3.82111C1.23084 3.50678 1.401 3.21794 1.62462 2.97297C1.84823 2.728 2.12041 2.53228 2.42381 2.39826C2.72721 2.26425 3.0552 2.19488 3.38688 2.19457H6.97058C7.55031 2.18886 8.11233 2.39415 8.5519 2.77218C8.99146 3.1502 9.27857 3.67517 9.35971 4.24922C9.51096 5.39608 9.79148 6.52215 10.1959 7.60595C10.3566 8.03351 10.3914 8.49818 10.2961 8.94491C10.2009 9.39164 9.97952 9.80169 9.65835 10.1265L8.14125 11.6436C9.84178 14.6342 12.318 17.1104 15.3086 18.811L16.8257 17.2939C17.1505 16.9727 17.5606 16.7514 18.0073 16.6561C18.454 16.5608 18.9187 16.5956 19.3463 16.7563C20.4301 17.1607 21.5561 17.4413 22.703 17.5925C23.2833 17.6744 23.8132 17.9667 24.1921 18.4138C24.5709 18.8609 24.7722 19.4316 24.7576 20.0175Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h4>Contacto</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form2" id="checkbox5_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Blog" form="form-query">
                    <label class="checkbox5_form1 check" for="checkbox5_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 1H3.5C2.83696 1 2.20107 1.26339 1.73223 1.73223C1.26339 2.20107 1 2.83696 1 3.5V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H18.5C19.163 26 19.7989 25.7366 20.2678 25.2678C20.7366 24.7989 21 24.163 21 23.5V8.5L13.5 1Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5 1V8.5H21" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 14.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 19.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.5 9.75H7.25H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Blog</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form2" id="checkbox6_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Chat en línea" form="form-query">
                    <label class="checkbox6_form1 check" for="checkbox6_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="25" height="25" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 21.8333V13.5C1 10.1848 2.31696 7.00537 4.66116 4.66117C7.00537 2.31696 10.1848 1 13.5 1C16.8152 1 19.9946 2.31696 22.3388 4.66117C24.683 7.00537 26 10.1848 26 13.5V21.8333" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M26 23.2223C26 23.959 25.7073 24.6655 25.1864 25.1865C24.6655 25.7074 23.9589 26.0001 23.2222 26.0001H21.8333C21.0966 26.0001 20.3901 25.7074 19.8691 25.1865C19.3482 24.6655 19.0556 23.959 19.0556 23.2223V19.0556C19.0556 18.3189 19.3482 17.6124 19.8691 17.0914C20.3901 16.5705 21.0966 16.2778 21.8333 16.2778H26V23.2223ZM1 23.2223C1 23.959 1.29266 24.6655 1.81359 25.1865C2.33453 25.7074 3.04107 26.0001 3.77778 26.0001H5.16667C5.90338 26.0001 6.60992 25.7074 7.13085 25.1865C7.65179 24.6655 7.94444 23.959 7.94444 23.2223V19.0556C7.94444 18.3189 7.65179 17.6124 7.13085 17.0914C6.60992 16.5705 5.90338 16.2778 5.16667 16.2778H1V23.2223Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Chat en línea</h4>
                    </label>

                </div>
                <div class="fila3">

                    <input type="checkbox" name="checkbox_form2" id="checkbox7_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Tratamiento de datos personales" form="form-query">
                    <label class="checkbox7_form1 check" for="checkbox7_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="20" height="25" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 1H3.5C2.83696 1 2.20107 1.26339 1.73223 1.73223C1.26339 2.20107 1 2.83696 1 3.5V23.5C1 24.163 1.26339 24.7989 1.73223 25.2678C2.20107 25.7366 2.83696 26 3.5 26H18.5C19.163 26 19.7989 25.7366 20.2678 25.2678C20.7366 24.7989 21 24.163 21 23.5V8.5L13.5 1Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5 1V8.5H21" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 14.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 19.75H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.5 9.75H7.25H6" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Tratamiento de datos personales</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form2" id="checkbox8_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Términos y condiciones" form="form-query">
                    <label class="checkbox8_form1 check" for="checkbox8_form2" data-btn="#next3-linea2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="20" height="25" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17.25C1 17.25 2.25 16 6 16C9.75 16 12.25 18.5 16 18.5C19.75 18.5 21 17.25 21 17.25V2.25C21 2.25 19.75 3.5 16 3.5C12.25 3.5 9.75 1 6 1C2.25 1 1 2.25 1 2.25V17.25Z" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 26V17.25" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>


                        <h4>Términos y condiciones</h4>
                    </label>

                </div>

                <div class="fila4">

                    <input type="checkbox" name="checkbox_form2" id="checkbox9_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Politicas de envío">
                    <label class="checkbox9_form2 check" for="checkbox9_form2" form="form-query">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="30.56" height="25" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.8333 1H1V19.0556H21.8333V1Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.8333 7.94444H27.3888L31.5555 12.1111V19.0556H21.8333V7.94444Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.25005 26C9.16771 26 10.7223 24.4454 10.7223 22.5278C10.7223 20.6101 9.16771 19.0556 7.25005 19.0556C5.3324 19.0556 3.77783 20.6101 3.77783 22.5278C3.77783 24.4454 5.3324 26 7.25005 26Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M25.3055 26C27.2231 26 28.7777 24.4454 28.7777 22.5278C28.7777 20.6101 27.2231 19.0556 25.3055 19.0556C23.3878 19.0556 21.8333 20.6101 21.8333 22.5278C21.8333 24.4454 23.3878 26 25.3055 26Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Politicas de envío</h4>
                    </label>

                    <input type="checkbox" name="checkbox_form2" id="checkbox10_form2" class="checkbox ghost reset valores2" data-valor="100000" data-btn="#next3-linea2" value="Politicas de devoluciones" form="form-query">
                    <label class="checkbox10_form2 check" for="checkbox10_form2">
                        <div class="circulito-checkbox">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg class="svg" width="22.5" height="25" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.25 12.25V7.25M23.5 1H1V21H7.25V26L12.25 21H18.5L23.5 16V1ZM11 12.25V7.25V12.25Z" stroke="#AAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h4>Politicas de devoluciones</h4>
                    </label>

                </div>

            </div>
            <div class="btn-box">
                <button type="button" id="back2-linea2" class="btn-anterior">Anterior</button>
                <button type="button" hidden id="next3-linea2" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 4. linea 2 --->
        <form action="" id="form4-linea2">
            <h3>4. ¿Te gustaría incluir un carrito de compras?</h3>
            <div class="quest4-form2">

                <input type="radio" name="pregunta4-form2" id="op1-p4-form2" value="si" data-valor="100000" class="pregunta4-l2 reset" form="form-query">
                <label for="op1-p4-form2" class="p-form2">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="60.99" height="58" viewBox="0 0 65 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.4942 2L41.9169 21.0894L62.9884 24.1693L47.7413 39.02L51.3396 60L32.4942 50.0894L13.6488 60L17.2471 39.02L2 24.1693L23.0715 21.0894L32.4942 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Si</h4>
                </label>

                <input type="radio" name="pregunta4-form2" id="op2-p4-form2" value="no" data-valor="0" class="pregunta4-l2 reset" form="form-query">
                <label for="op2-p4-form2" class="p-form2">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="60.99" height="58" viewBox="0 0 65 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.4942 2L41.9169 21.0894L62.9884 24.1693L47.7413 39.02L51.3396 60L32.4942 50.0894L13.6488 60L17.2471 39.02L2 24.1693L23.0715 21.0894L32.4942 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>No</h4>
                </label>

            </div>
            <div class="btn-box">
                <button type="button" id="back3-linea2" class="btn-anterior">Anterior</button>
                <button hidden type="button" id="next4-linea2" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 5. linea 2 --->
        <form action="" id="form5-linea2">
            <h3>5. ¿Requieres integración con plataforma de envíos?</h3>
            <div class="quest4-form2">

                <input type="radio" name="pregunta5-form2" id="op1-p5-form2" value="si" class="pregunta5-l2 reset" data-valor="100000" form="form-query">
                <label for="op1-p5-form2" class="p-form2">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="60.99" height="58" viewBox="0 0 65 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.4942 2L41.9169 21.0894L62.9884 24.1693L47.7413 39.02L51.3396 60L32.4942 50.0894L13.6488 60L17.2471 39.02L2 24.1693L23.0715 21.0894L32.4942 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Si</h4>
                </label>

                <input type="radio" name="pregunta5-form2" id="op2-p5-form2" value="no" class="pregunta5-l2 reset" data-valor="0" form="form-query">
                <label for="op2-p5-form2" class="p-form2">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="60.99" height="58" viewBox="0 0 65 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.4942 2L41.9169 21.0894L62.9884 24.1693L47.7413 39.02L51.3396 60L32.4942 50.0894L13.6488 60L17.2471 39.02L2 24.1693L23.0715 21.0894L32.4942 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>No</h4>
                </label>

            </div>
            <div class="btn-box">
                <button type="button" id="back4-linea2" class="btn-anterior">Anterior</button>
                <button hidden type="button" id="next5-linea2" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 6. linea 2 --->
        <form action="" id="form6-linea2">
            <h3>6. ¿Cuántos servicios o productos te gustaría incluir?</h3>
            <div class="quest4-form1">

                <input type="radio" name="pregunta6" id="op1-p6" class="pregunta6-l2 reset reset_cuantos2" data-valor="100000" value="1 - 5" form="form-query">
                <label for="op1-p6" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>1 - 5</h4>
                </label>

                <input type="radio" name="pregunta6" id="op2-p6" class="pregunta6-l2 reset reset_cuantos2" data-valor="200000" value="5 - 10" form="form-query">
                <label for="op2-p6" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>5 - 10</h4>
                </label>

                <input type="radio" name="pregunta6" id="op3-p6" class="pregunta6-l2 reset reset_cuantos2" data-valor="400000" value="10 - 20" form="form-query">
                <label for="op3-p6" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>10 - 20</h4>
                </label>

                <input type="radio" name="pregunta6" id="op4-p6" class="pregunta6-l2 reset" data-valor="400000" value="20" form="form-query">
                <label for="op4-p6" class="p4">
                    <div class="circulito4-form1">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9091 8.73109V9.50472C17.9081 11.3181 17.3209 13.0825 16.2351 14.5349C15.1494 15.9873 13.6232 17.0498 11.8843 17.5639C10.1454 18.0781 8.28682 18.0163 6.58584 17.3879C4.88485 16.7595 3.43258 15.598 2.44561 14.0768C1.45864 12.5556 0.989858 10.756 1.10917 8.94662C1.22848 7.1372 1.9295 5.41482 3.10768 4.03635C4.28585 2.65789 5.87806 1.6972 7.64683 1.29757C9.4156 0.897944 11.2662 1.08078 12.9225 1.81882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.9091 2.77747L9.50004 11.195L6.97731 8.67224" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <svg class="svg dm-4" width="58" height="58" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31 2L2 16.5L31 31L60 16.5L31 2Z" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 45.5L31 60L60 45.5" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 31L31 45.5L60 31" stroke="#AAAAAA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h4>Más de 20</h4>
                    <input type="number" id="cuantos2" placeholder="¿Cuántos?" class="number" min="20" max="1000" name="mas20_2" form="form-query">
                </label>

            </div>
            <div class="btn-box">
                <button type="button" id="back5-linea2" class="btn-anterior">Anterior</button>
                <button hidden type="button" id="next6-linea2" class="btn-siguiente">Siguiente</button>
            </div>
        </form>

        <!-- pagina 6. linea 2 --->
        <form action="" id="form7-linea2">
            <h3 class="r_h3">Resumen de tu cotización</h3>
            <div class="resumen">
                <p><strong>Tipo: </strong><span id="tipo2">Sitio web con internas</span></p>
                <p><strong>¿Para qué?: </strong><span>Vender en línea</span></p>
                <p><strong>Internas: </strong><span id="internas2">Nosotros, mis productos, contacto, chat en línea</span></p>
                <p><strong>Cantidad de servicios/productos: </strong><span id="num-products2">25</span></p>
            </div>
            <div class="btn-box last_btn_box">
                <button type="button" id="back6-linea2" class="btn-anterior bt1">Anterior</button>
                <button type="button" id="btn-enviarme2" class="btn-enviar bt2">Enviarme este presupuesto a mi correo electrónico</button>
            </div>
        </form>


    </div>

    <!-- FORMULARIO FINAL -->

    <div id="sombra"></div>

    <div id="lastForm" class="lastForm">
        <h1>¡Ya estas muy cerca!</h1>
        <p>Completa tus datos para recibir cotización oficial</p>
        <form method="post" id="form-query">

            <label for="nombre">Nombre y apellidos<span class="color">*</span></label>
            <input class="in" type="text" id="nombre" name="name" placeholder="Escribe tu nombre y apellido" required>

            <label for="correo">¿Cuál es tu correo?<span class="color">*</span></label>
            <input class="in" type="text" id="correo" name="email" placeholder="Escribe tu correo electrónico" required>

            <label for="apellido">¿Cuál es tu teléfono o celular?<span class="color">*</span></label>
            <input class="in" type="text" id="telefono" name="telefono" placeholder="Escribe tu teléfono o celular" required>

            <label for="ciudad">¿Cuál es tu ciudad?<span class="color">*</span></label>
            <input class="in" type="text" id="ciudad" name="ciudad" placeholder="Escoge tu ciudad de residencia" required>

            <input type="checkbox" id="terminos" required>
            <label for="terminos" class="terminos">
                <div class="cubo">
                    <svg width="11" height="9" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7L7 13L17 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p>Al enviar este formulario, acepto que mis datos sean usados por Evendi S.A.S y la marca Nilo App para ponerse en contacto conmigo en el marco de esta promoción y campañas asociadas.</p>
            </label>

            <input type="submit" value="Enviar" name="enviar" class="in">

            <input type="text" name="secciones" id="secciones" style="display: none;">

        </form>
    </div>

    <?php
    include("enviar.php");
    ?>
    <script src="./resources/js/pensamiento.js"></script>
    <script src="./resources/js/main.js"></script>
</body>

</html>