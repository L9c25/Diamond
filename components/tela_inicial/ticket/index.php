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
                    <div onclick="selectOption('Terra - superficie', 'selectedOption1')">Terra - superficie</div>
                    <div onclick="selectOption('Marte - Superficie', 'selectedOption1')">Marte - Superficie</div>
                    <div onclick="selectOption('Lua - Superficie', 'selectedOption1')">Lua - Superficie</div>
                </div>

                <div class="L_config-span-2" id="selectedOption1">
                    <span class="L_span-option-loc">Terra - Superficie</span>
                </div>
            </div>


            <!-- [segunda opção] Tipo de casa -->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options2', 'selectedOption2')">
                <div>
                    <span class="L_config-span-1">TIPO</span>
                </div>

                <div class="dropdown-content" id="options2">
                    <div onclick="selectOption('Módulo - sup', 'selectedOption2')">Módulo - sup</div>
                    <div onclick="selectOption('Moradia - casa', 'selectedOption2')">Moradia - casa</div>
                    <div onclick="selectOption('estação - orbit', 'selectedOption2')">estação - orbit</div>
                </div>

                <div class="L_config-span-2" id="selectedOption2">
                    <span class="L_span-option-loc">Módulo - sup</span>
                </div>
            </div>



            <!-- [terceira opção] tamanho -->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options3', 'selectedOption3')">
                <div>
                    <span class="L_config-span-1">SIZE</span>
                </div>

                <div class="dropdown-content" id="options3">
                    <div onclick="selectOption('100m²/150m²', 'selectedOption3')">100m²/150m²</div>
                    <div onclick="selectOption('150m²/450m²', 'selectedOption3')">150m²/450m²</div>
                    <div onclick="selectOption('450m²/650m²', 'selectedOption3')">450m²/650m²</div>
                </div>

                <div class="L_config-span-2" id="selectedOption3">
                    <span class="L_span-option-loc">100m²/150m²</span>
                </div>
            </div>


            <!-- [quarta opção] contrato-->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options4', 'selectedOption4')">
                <div>
                    <span class="L_config-span-1">CONTRATO</span>
                </div>

                <div class="dropdown-content" id="options4">
                    <div onclick="selectOption('Compra', 'selectedOption4')">Compra</div>
                    <div onclick="selectOption('Aluguel', 'selectedOption4')">Aluguel</div>
                </div>

                <div class="L_config-span-2" id="selectedOption4">
                    <span class="L_span-option-loc">Compra</span>
                </div>
            </div>

            <!-- [quinta div] Botão de pesquisa -->
            <div style="cursor:pointer" class="L_pesquisar-1 L_none" onclick="location.href='./imoveis.php'">
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
                    <div onclick="selectOption('Terra - superficie', 'selectedOption5')">Terra - Superficie</div>
                    <div onclick="selectOption('Marte - Superficie', 'selectedOption5')">Marte - Superficie</div>
                    <div onclick="selectOption('Lua - Superficie', 'selectedOption5')">Lua - Superficie</div>
                </div>

                <div class="L_config-span-2" id="selectedOption5">
                    <span class="L_span-option-loc">Terra - Superficie</span>
                </div>
            </div>


            <!-- [segunda opção] tipo de casa-->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options6', 'selectedOption6')">
                <div>
                    <span class="L_config-span-1">TIPO</span>
                </div>
                <div class="dropdown-content" id="options6">
                    <div onclick="selectOption('Módulo - sup', 'selectedOption6')">Módulo - sup</div>
                    <div onclick="selectOption('Moradia - casa', 'selectedOption6')">Moradia - casa</div>
                    <div onclick="selectOption('estação - orbit', 'selectedOption6')">estação - orbit</div>
                </div>

                <div class="L_config-span-2" id="selectedOption6">
                    <span>Módulo - sup </span>
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
                    <div onclick="selectOption('100m²/150m²', 'selectedOption7')">100m²/150m²</div>
                    <div onclick="selectOption('150m²/450m²', 'selectedOption7')">150m²/450m²</div>
                    <div onclick="selectOption('450m²/650m²', 'selectedOption7')">450m²/650m²</div>
                </div>

                <div class="L_config-span-2" id="selectedOption7">
                    <span class="L_span-option-loc">100m²/150m²</span>
                </div>
            </div>


            <!-- [segunda opção] tipo de contrato - -->
            <div class="dropdown L_config-box-options" onclick="toggleOptions(event, 'options8', 'selectedOption8')">
                <div>
                    <span class="L_config-span-1">CONTRATO</span>
                </div>
                <div class="dropdown-content" id="options8">
                    <div onclick="selectOption('Compra', 'selectedOption8')">Compra</div>
                    <div onclick="selectOption('Contrato 2', 'selectedOption8')">Aluguel</div>
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
        <div style="cursor:pointer" class="L_pesquisar-2 L_configs-univeral-p" onclick="location.href='./imoveis.php'">
            <div class="L_pesquisar">
                <div class="L_btn-pesquisar">
                    <SPAN>PESQUISAR</SPAN>
                </div>
            </div>
        </div>
    </div>
    
    </div>
</form> 



<!-- scripts  -->
<!-- configs filtro -->
<script src="components\tela_inicial\ticket\js\configs-filtro.js"></script>