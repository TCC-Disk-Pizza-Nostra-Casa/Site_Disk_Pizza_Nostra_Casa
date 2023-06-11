<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">

    <script>
        function openMenu(){
            document.getElementById("response_nav").style.display = "flex";
        }
        function closeMenu(){
            document.getElementById("response_nav").style.display = "none";
        }
    </script>
</head>

<body>
    <div id="navContainer">
        <nav id="nav">
            <ul>
                <li class="after"><a href="/">Pizzas</a></li>
                <li class="after"><a href="/bebidas">Bebidas</a></li>
                <li class="after"><a href="/contato">Contato</a></li>
                <li><a href="/contato#onde">Onde estamos</a></li>
            </ul>
        </nav>

        <button onclick="openMenu()">
            <figure class="figure_icon">
                <img id="img_icon" src="/img/menu_icon.svg">
            </figure>
        </button>

        <figure class="figure_logo_menu">
            <img id="logo_menu" src="img/logo.png">
        </figure> 
    </div>

    <nav id="response_nav" class="response_nav">
        <button class="btnClose" onclick="closeMenu()">X</button>
        <ul>
            <li><a href="/">Pizzas</a></li>
            <li><a href="/bebidas">Bebidas</a></li>
            <li><a href="/contato">Contato</a></li>
            <li><a href="/contato#onde">Onde estamos</a></li>
        </ul>
    </nav>
</body>
</html>