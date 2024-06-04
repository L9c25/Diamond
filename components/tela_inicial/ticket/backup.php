<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="components\tela_inicial\ticket\index.css">
    <style>
        #local-pesquisa {
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .dropdown:focus {
            outline: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            left: 0;
            background-color: #f9f9f9;
            min-width: 126px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 999;
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

        #selectedOption {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #333;
        }

        a {
            outline: none;
        }
    </style>
</head>

<body>

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
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'local-span')">
                    <div>
                        <span class="L_config-span-1">Localização</span>
                    </div>

                    <div class="dropdown-content" id="options1">
                        <div onclick="selectOption('Terra - órbita', event, 'local-span')">Terra - órbita</div>
                        <div onclick="selectOption('Marte - Superficie', event, 'local-span')">Marte - Superficie</div>
                        <div onclick="selectOption('Lua - Superficie', event, 'local-span')">Lua - Superficie</div>
                    </div>

                    
                    <div class="L_config-span-2" id="local-span">
                        <span class="L_span-option-loc" id="selectedOption1">Terra - órbita</span>
                    </div>
                </div>


                <!-- [segunda opção] Tipo de casa -->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'tipo-span')">
                    <div>
                        <span class="L_config-span-1">TIPO</span>
                    </div>

                    <div class="dropdown-content" id="options2">
                        <div onclick="selectOption('Módulo - AutS', event, 'tipo-span')">Módulo - AutS</div>
                        <div onclick="selectOption('Tipo 2', event, 'tipo-span')">Tipo 2</div>
                        <div onclick="selectOption('Tipo 3', event, 'tipo-span')">Tipo 3</div>
                    </div>

                    
                    <div class="L_config-span-2" id="tipo-span">
                        <span class="L_span-option-loc" id="selectedOption2">Módulo - AutS</span>
                    </div>
                </div>



                <!-- [terceira opção] tamanho -->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'tamanho-span')">
                    <div>
                        <span class="L_config-span-1">SIZE</span>
                    </div>

                    <div class="dropdown-content" id="options3">
                        <div onclick="selectOption('Espaçoso/150m²', event, 'tamanho-span')">Espaçoso/150m²</div>
                        <div onclick="selectOption('Tamanho 2', event, 'tamanho-span')">Tamanho 2</div>
                        <div onclick="selectOption('Tamanho 3', event, 'tamanho-span')">Tamanho 3</div>
                    </div>

                    
                    <div class="L_config-span-2" id="tamanho-span">
                        <span class="L_span-option-loc" id="selectedOption3">Espaçoso/150m²</span>
                    </div>
                </div>


                <!-- [quarta opção] contrato-->
                <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'contrato-span')">
                    <div>
                        <span class="L_config-span-1">CONTRATO</span>
                    </div>

                    <div class="dropdown-content" id="options4">
                        <div onclick="selectOption('Compra', event, 'contrato-span')">Compra</div>
                        <div onclick="selectOption('Contrato 2', event, 'contrato-span')">Contrato 2</div>
                        <div onclick="selectOption('Contrato 3', event, 'contrato-span')">Contrato 3</div>
                    </div>

                    
                    <div class="L_config-span-2" id="contrato-span">
                        <span class="L_span-option-loc" id="selectedOption4">Compra</span>
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
    </form>

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
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'local-span-m')">
                <div>
                    <span class="L_config-span-1">Localização</span>
                </div>
                <div class="L_config-span-2" id="local-span-m">
                    <span class="L_span-option-loc">Terra - órbita</span>
                </div>
            </div>


            <!-- [segunda opção] tipo de casa-->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'tipo-span-m')">
                <div>
                    <span class="L_config-span-1">TIPO</span>
                </div>
                <div class="L_config-span-2" id="tipo-span-m">
                    <span>Módulo - AutS </span>
                </div>
            </div>
        </div>


        <!-- [Ticket 2] essa div é o segundo ticket cortado, a parte 2 -->
        <div class="L_ticket-2 L_configs-univeral-p">

            <!-- [div texto] texto rotacionado -->
            <div class="L_filtro-pesquisa">
                <span class="L_span-rotacionado">Filtro</span>
            </div>


            <!-- [primeira opção] tamanho - size -->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'tamanho-span-m')">
                <div>
                    <span class="L_config-span-1">SIZE</span>
                </div>
                <div class="L_config-span-2" id="tamanho-span-m">
                    <span>Espaçoso/150m²</span>
                </div>
            </div>


            <!-- [segunda opção] tipo de contrato - -->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'contrato-span-m')">
                <div>
                    <span class="L_config-span-1">CONTRATO</span>
                </div>
                <div class="L_config-span-2" id="contrato-span-m">
                    <span>Compra</span>
                </div>
            </div>
        </div>


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
</body>


<!-- scripts  -->
<!-- configs filtro -->
<script>
    function selectOption(option, event, spanId) {
        document.getElementById('selectedOption'+spanId.slice(-1)).innerText = option;
        hideOptions(spanId);
        event.stopPropagation(); // Evita a propagação do evento de clique para a div principal
    }

    function toggleOptions(event, spanId) {
        var dropdownContent = document.getElementById('options' + spanId.slice(-1));
        if (dropdownContent.style.display === 'block') {
            hideOptions(spanId);
        } else {
            showOptions(spanId);
        }
        event.stopPropagation(); // Evita a propagação do evento de clique para a div principal
    }

    function showOptions(spanId) {
        var dropdownContent = document.getElementById('options' + spanId.slice(-1));
        dropdownContent.style.display = 'block';
        document.addEventListener('click', function (event) {
            hideOptionsOutside(event, spanId);
        }); // Adiciona um listener de clique para fechar as opções se clicar fora
    }

    function hideOptions(spanId) {
        var dropdownContent = document.getElementById('options' + spanId.slice(-1));
        dropdownContent.style.display = 'none';
        document.removeEventListener('click', function (event) {
            hideOptionsOutside(event, spanId);
        }); // Remove o listener de clique quando as opções são fechadas
    }

    function hideOptionsOutside(event, spanId) {
        var dropdownContent = document.getElementById('options' + spanId.slice(-1));
        if (!dropdownContent.contains(event.target)) { // Verifica se o clique foi fora das opções
            hideOptions(spanId);
        }
    }
</script>

</html>
