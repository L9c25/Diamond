    // function selectOption(option, event) {
    //     document.getElementById('selectedOption').innerText = option;
    //     hideOptions();
    //     event.stopPropagation(); // Evita a propagação do evento de clique para a div principal
    // }

    // function toggleOptions(event) {
    //     var dropdownContent = document.getElementById('options');
    //     if (dropdownContent.style.display === 'block') {
    //         hideOptions();
    //     } else {
    //         showOptions();
    //     }
    //     event.stopPropagation(); // Evita a propagação do evento de clique para a div principal
    // }

    // function showOptions() {
    //     var dropdownContent = document.getElementById('options');
    //     dropdownContent.style.display = 'block';
    //     document.addEventListener('click', hideOptionsOutside); // Adiciona um listener de clique para fechar as opções se clicar fora
    // }

    // function hideOptions() {
    //     var dropdownContent = document.getElementById('options');
    //     dropdownContent.style.display = 'none';
    //     document.removeEventListener('click', hideOptionsOutside); // Remove o listener de clique quando as opções são fechadas
    // }

    // function hideOptionsOutside(event) {
    //     var dropdownContent = document.getElementById('options');
    //     if (!dropdownContent.contains(event.target)) { // Verifica se o clique foi fora das opções
    //         hideOptions();
    //     }
    // }

    // // func do formulario
    // function submitForm() {
    //     var selectedOption = document.getElementById('selectedOption').innerText;
    //     console.log("Opção selecionada:", selectedOption);
    //     // Aqui você pode fazer o que quiser com o dado selecionado, como enviá-lo para um servidor ou processá-lo localmente
    // }

    function selectOption(option, spanId) {
        document.getElementById(spanId).innerText = option;
    }

    function toggleOptions(event, optionsId, selectedOptionId) {
        event.stopPropagation(); // Evita a propagação do evento de clique para a div principal
        var dropdownContent = document.getElementById(optionsId);
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        hideOtherOptions(optionsId); // Oculta outros dropdowns abertos
    }

    function hideOtherOptions(currentOptionsId) {
        var dropdowns = document.getElementsByClassName('dropdown-content');
        for (var i = 0; i < dropdowns.length; i++) {
            var dropdown = dropdowns[i];
            if (dropdown.id !== currentOptionsId) {
                dropdown.style.display = 'none';
            }
        }
    }

    // Fecha os dropdowns quando clicar fora deles
    document.addEventListener('click', function (event) {
        var dropdowns = document.getElementsByClassName('dropdown-content');
        for (var i = 0; i < dropdowns.length; i++) {
            var dropdown = dropdowns[i];
            if (!dropdown.contains(event.target)) {
                dropdown.style.display = 'none';
            }
        }
    });