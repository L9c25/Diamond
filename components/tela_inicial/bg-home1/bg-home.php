<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import icones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper -->
    <link rel="stylesheet" href="/assets/Swiper/swiper-bundle.min.css">
    <!-- CSS by me -->
    <link rel="stylesheet" href="components\tela_inicial\ticket\index.css">
    <link rel="stylesheet" href="assets/css/cssLucas.css">
    <link rel="stylesheet" href="assets/css/cssLucas2.css">
    <link rel="stylesheet" href="assets/css/bases.css">
    <link rel="stylesheet" href="assets/css/bases-mobile.css">
    <title>Document</title>
    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .L_div {
            position: relative !important;
        }

        .L_bg-image-home {
            margin-top: 12px;
            width: 90vw;
            height: 95vh;
            /* overflow: hidden; */
            border: 5px solid white !important;
            z-index: -1;
        }

        .L_image-bg {

            width: 100%;
            height: 100%;

            object-position: center;
            object-fit: cover;
            z-index: -1;

        }

        @media (max-height:671px) {
            .L_bg-image-home {
                height: 607px;
                margin-top: 10px;
            }
        }

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


<div class='L_div'>
    <div class="L_bg-image-home">
        <img class='L_image-bg' src="components\tela_inicial\bg-home1\imgs\background-home.png" alt="ss">
    </div>
</div>
