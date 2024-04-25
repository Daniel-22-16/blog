<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videojuegos Store</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://www.bhmpics.com/downloads/awesome-black-and-red-wallpapers-/42.6300004.jpg');
            background-size: cover; /* Cubrir el área completa */
            background-repeat: no-repeat; /* No repetir la imagen */
            background-position: center; /* Centrar la imagen */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #666;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        section {
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .product {
            background-color: #4CAF50;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 300px;
            text-align: center;
            animation: changeColor 5s infinite alternate;
        }
        .product img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .product h2 {
            margin-top: 0;
            color: #fff;
        }
        .product p {
            color: #fff;
            font-weight: bold;
            margin: 10px 0;
        }
        .post-box {
            background-color: #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px auto; /* Margen automático para centrar */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            animation: changeBorderColor 5s infinite alternate;
            max-width: 800px; /* Ancho máximo del cuadro */
        }
        .post h3 {
            margin-top: 0;
            text-align: center;
        }
        .post p {
            margin-bottom: 15px;
            text-align: justify;
        }
        @keyframes changeColor {
            0% { background-color: #4CAF50; }
            25% { background-color: #2196F3; }
            50% { background-color: #f44336; }
            75% { background-color: #FF9800; }
            100% { background-color: #4CAF50; }
        }
        @keyframes changeBorderColor {
            0% { border-color: #4CAF50; }
            25% { border-color: #2196F3; }
            50% { border-color: #f44336; }
            75% { border-color: #FF9800; }
            100% { border-color: #4CAF50; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Videojuegos Store</h1>
    </header>
    
    <div class="post-box">
        <div class="post">
            <h3>Explorando el Mundo de Dota 2: Estrategia, Competencia y Diversión</h3>
            <p>Sumérgete en el emocionante mundo de Dota 2, donde la estrategia, la competencia y la diversión se unen en una experiencia única de juego...</p>
            <p>En Dota 2, los jugadores se enfrentan en equipos para controlar poderosos héroes y luchar por la supremacía en el campo de batalla. Cada partida es una aventura épica llena de giros y vueltas, donde la habilidad y la coordinación son clave para alcanzar la victoria.</p>
            <p>Además de la emoción de la competencia, Dota 2 también ofrece una rica comunidad de jugadores de todo el mundo, donde se pueden hacer amigos, compartir estrategias y participar en eventos emocionantes.</p>
            <p>La comunidad de Dota 2 es conocida por su pasión y dedicación al juego, lo que crea un ambiente vibrante y acogedor para todos los jugadores.</p>
        </div>
    </div>
    
    <section>
        <div class="product">
            <img src="https://elcomercio.pe/resizer/QrtCqC24s2duI7MeCg4TOAT-ueo=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/7JNEJLD6VFHZJO45MVT2JVUBTI.jpg" alt="Dota 2" width="200" height="200">
            <h2>Dota 2</h2>
            <p>Desarrollador: Valve Corporation</p>
            <p>Lanzamiento: 9 de julio de 2013</p>
            <p>Plataformas: Microsoft Windows, macOS, Linux</p>
        </div>
        <div class="product">
            <img src="https://t2.tudocdn.net/622409?w=824&h=494" alt="Mobile Legends" width="200" height="200">
            <h2>Mobile Legends</h2>
            <p>Desarrollador: Moonton</p>
            <p>Lanzamiento: 14 de julio de 2016</p>
            <p>Plataformas: Android, iOS</p>
        </div>
        <div class="product">
            <img src="https://cdn.akamai.steamstatic.com/steam/apps/1928420/header.jpg?t=1710147691" alt="Farlight 84" width="200" height="200">
            <h2>Farlight 84</h2>
            <p>Desarrollador: Farlight Games</p>
            <p>Lanzamiento: 25 de febrero de 2022</p>
            <p>Plataformas: Microsoft Windows</p>
        </div>
    </section>

    <footer>
        <p>Videojuegos Store &copy; 2024</p>
    </footer>
</body>
</html>
