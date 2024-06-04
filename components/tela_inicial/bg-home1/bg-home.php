
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .L_div{
            position: relative !important;
        }
        .L_bg-image-home{
            margin-top: 12px;
            width: 90vw;
            height: 95vh;
            /* overflow: hidden; */
            border: 5px solid white !important;
            z-index: -1;
        }
        
        .L_image-bg{
            
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
    </style>
</head>

<body>
    <div class='L_div' >
    
        <div class="L_bg-image-home">
            <img class='L_image-bg' src="components\tela_inicial\bg-home1\imgs\background-home.png" alt="ss">
        </div>
    
    </div>
</body>

</html>