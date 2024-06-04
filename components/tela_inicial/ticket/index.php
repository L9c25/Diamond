<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="components\tela_inicial\ticket\index.css">
    <style>
        .L_config-span-2 {
            margin-top: 20px;
        }

        .dropdown {
            position: relative;
            display: block;
            cursor: pointer;
            z-index: inherit;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            left: 0;
            background-color: #f9f9f9;
            min-width: 126px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1000;
        }

        .dropdown-content div {
            color: black;
            text-decoration: none;
            display: block;
            padding: 5px 0;
        }

        .dropdown-content div:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>



    <!-- tickets  -->
    <form id="L_ticket-desktop" action="pesquisar.php" method="post">

        <div class="L_container-home1">

            <!-- primeiro ticket - horizontal  em row - completo -->

            <div class="L_barra-pesquisa L_configs-univeral-p L_none">

                <!-- text rotacionado "filtro" -->
                <div class="L_filtro-pesquisa">
                    <span class="L_span-rotacionado">Filtro</span>
                </div>


                <!-- [OPÇÕES DO FILTRO DESKTOP] - 1 -  -->
                <!-- [primeira opção]  localização-->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options1', 'selectedOption1')">
                    <div>
                        <span class="L_config-span-1">Localização</span>
                    </div>

                    <div class="dropdown-content" id="options1">
                        <div onclick="selectOption('Terra - órbita', 'selectedOption1')">Terra - órbita</div>
                        <div onclick="selectOption('Marte - Superficie', 'selectedOption1')">Marte - Superficie</div>
                        <div onclick="selectOption('Lua - Superficie', 'selectedOption1')">Lua - Superficie</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption1">
                        <span class="L_span-option-loc">Terra - órbita</span>
                    </div>
                </div>


                <!-- [segunda opção] Tipo de casa -->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options2', 'selectedOption2')">
                    <div>
                        <span class="L_config-span-1">TIPO</span>
                    </div>

                    <div class="dropdown-content" id="options2">
                        <div onclick="selectOption('Módulo - AutS', 'selectedOption2')">Módulo - AutS</div>
                        <div onclick="selectOption('Tipo 2', 'selectedOption2')">Tipo 2</div>
                        <div onclick="selectOption('Tipo 3', 'selectedOption2')">Tipo 3</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption2">
                        <span class="L_span-option-loc">Módulo - AutS</span>
                    </div>
                </div>



                <!-- [terceira opção] tamanho -->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options3', 'selectedOption3')">
                    <div>
                        <span class="L_config-span-1">SIZE</span>
                    </div>

                    <div class="dropdown-content" id="options3">
                        <div onclick="selectOption('Espaçoso/150m²', 'selectedOption3')">Espaçoso/150m²</div>
                        <div onclick="selectOption('Tamanho 2', 'selectedOption3')">Tamanho 2</div>
                        <div onclick="selectOption('Tamanho 3', 'selectedOption3')">Tamanho 3</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption3">
                        <span class="L_span-option-loc">Espaçoso/150m²</span>
                    </div>
                </div>


                <!-- [quarta opção] contrato-->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options4', 'selectedOption4')">
                    <div>
                        <span class="L_config-span-1">CONTRATO</span>
                    </div>

                    <div class="dropdown-content" id="options4">
                        <div onclick="selectOption('Compra', 'selectedOption4')">Compra</div>
                        <div onclick="selectOption('Contrato 2', 'selectedOption4')">Contrato 2</div>
                        <div onclick="selectOption('Contrato 3', 'selectedOption4')">Contrato 3</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption4">
                        <span class="L_span-option-loc">Compra</span>
                    </div>
                </div>

                <!-- [quinta div] Botão de pesquisa -->
                <div class="L_pesquisar-1 L_none">
                    <div class="L_pesquisar">
                        <div class="L_btn-pesquisar">
                            <SPAN>PESQUISAR</SPAN>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- {SEGUNDO TICKET }  ESSE IRÁ APARECER EM DIMENSÕES MENORES QUE 1026PX DE WIDTH-->
        <!-- barra-m é a div container -->
        <div class="L_barra-m">


            <!-- [Ticket 1] essa div é o primeiro ticket cortado, a parte 1 -->
            <div class="L_ticket-1  L_configs-univeral-p">

                <!-- [div texto] texto rotacionado -->
                <div class="L_filtro-pesquisa">
                    <span class="L_span-rotacionado">Filtro</span>
                </div>


                <!-- [primeira opção] localização -->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options5', 'selectedOption5')">
                    <div>
                        <span class="L_config-span-1">Localização</span>
                    </div>

                    <div class="dropdown-content" id="options5">
                        <div onclick="selectOption('Terra - órbita', 'selectedOption5')">Terra - órbita</div>
                        <div onclick="selectOption('Marte - Superficie', 'selectedOption5')">Marte - Superficie</div>
                        <div onclick="selectOption('Lua - Superficie', 'selectedOption5')">Lua - Superficie</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption5">
                        <span class="L_span-option-loc">Terra - órbita</span>
                    </div>
                </div>


                <!-- [segunda opção] tipo de casa-->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options6', 'selectedOption6')">
                    <div>
                        <span class="L_config-span-1">TIPO</span>
                    </div>
                    <div class="dropdown-content" id="options6">
                        <div onclick="selectOption('Módulo - AutS', 'selectedOption6')">Módulo - AutS</div>
                        <div onclick="selectOption('Tipo 2', 'selectedOption6')">Tipo 2</div>
                        <div onclick="selectOption('Tipo 3', 'selectedOption6')">Tipo 3</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption6">
                        <span>Módulo - AutS </span>
                    </div>
                </div>
            </div>


        <!-- [TICKET 2 !!] -->

        <!-- [Ticket 2] essa div é o segundo ticket cortado, a parte 2 -->


            <div class="L_ticket-2 L_configs-univeral-p">

                <!-- [div texto] texto rotacionado -->
                <div class="L_filtro-pesquisa">
                    <span class="L_span-rotacionado">Filtro</span>
                </div>


                <!-- [primeira opção] tamanho - size -->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options7', 'selectedOption7')">
                    <div>
                        <span class="L_config-span-1">SIZE</span>
                    </div>

                    <div class="dropdown-content" id="options7">
                        <div onclick="selectOption('Espaçoso/150m²', 'selectedOption7')">Espaçoso/150m²</div>
                        <div onclick="selectOption('Tamanho 2', 'selectedOption7')">Tamanho 2</div>
                        <div onclick="selectOption('Tamanho 3', 'selectedOption7')">Tamanho 3</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption7">
                        <span class="L_span-option-loc">Espaçoso/150m²</span>
                    </div>
                </div>


                <!-- [segunda opção] tipo de contrato - -->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options8', 'selectedOption8')">
                    <div>
                        <span class="L_config-span-1">CONTRATO</span>
                    </div>
                    <div class="dropdown-content" id="options8">
                        <div onclick="selectOption('Compra', 'selectedOption8')">Compra</div>
                        <div onclick="selectOption('Contrato 2', 'selectedOption8')">Contrato 2</div>
                        <div onclick="selectOption('Contrato 3', 'selectedOption8')">Contrato 3</div>
                    </div>
                    <div class="L_config-span-2" id="selectedOption8">
                        <span class="L_span-option-loc">Compra</span>
                    </div>
                </div>
            </div>

            <!-- <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options8', 'selectedOption8')">
                    <div>
                        <span class="L_config-span-1">CONTRATO</span>
                    </div>

                    <div class="dropdown-content" id="options8">
                        <div onclick="selectOption('Compra', 'selectedOption8')">Compra</div>
                        <div onclick="selectOption('Contrato 2', 'selectedOption8')">Contrato 2</div>
                        <div onclick="selectOption('Contrato 3', 'selectedOption8')">Contrato 3</div>
                    </div>

                    <div class="L_config-span-2" id="selectedOption8">
                        <span class="L_span-option-loc">Compra</span>
                    </div>
                </div> -->



            <!-- [DIV Botão 2 ] segundo tipo de botão de pesquisa para dimensões menores < 1026px width-->
            <div class="L_pesquisar-2 L_configs-univeral-p">
                <div class="L_pesquisar">
                    <div class="L_btn-pesquisar">
                        <SPAN>PESQUISAR</SPAN>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- scripts  -->
        <!-- configs filtro -->
        <script src="components\tela_inicial\ticket\js\configs-filtro.js"></script>

</html>