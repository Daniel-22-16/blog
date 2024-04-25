<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título de tu página</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url('https://wallpapers.com/images/hd/3440-x-1440-4k-wv1ohuae3alfxsl1.jpg');
            background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita la repetición de la imagen */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        .title-container {
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .articles {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .post {
            background-color: rgba(255, 255, 255, 0.5); /* Blanco con opacidad del 80% */
            border-radius: 10px;
            padding: 10px;
            margin: 20px;
            max-width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: border-color-change 5s infinite alternate;
            overflow: hidden;
        }

        .post:hover {
            transform: translateY(-5px);
        }

        .post img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Estilos de letra */
        h1, h2, h3 {
            font-family: 'Arial Black', sans-serif;
            font-weight: bold;
            font-size: 24px; /* Reduce el tamaño de la fuente */
        }

        p {
            font-family: 'Georgia', serif;
            font-size: 14px; /* Reducir el tamaño de la fuente */
            line-height: 1.6;
            color: #333;
        }

        li {
            font-family: 'Verdana', sans-serif;
            font-size: 14px;
        }

        /* Animación para cambiar el color del borde */
        @keyframes border-color-change {
            0% { border-color: red; }
            25% { border-color: blue; }
            50% { border-color: green; }
            75% { border-color: yellow; }
            100% { border-color: red; }
        }
    </style>
</head>
<body>

    <header>
        <h1>INTRODUCCION A MI BLOG </h1>
    </header>
    
    <section>
        <div class="title-container">
            <h2 class="title">Últimas Publicaciones</h2>
        </div>
        <div class="articles">
            <!-- Ejemplo de artículo -->
            <div class="post">
                <img src="https://img.freepik.com/fotos-premium/artista-visual-trabaja-arte-digital-gafas-ar_175086-4264.jpg" alt="La Emoción de Jugar Videojuegos" width="300" height="250">
                <h3>La Emoción de Jugar Videojuegos</h3>
                <p>Inmersos en mundos virtuales llenos de aventuras, estrategias y emociones, los videojuegos ofrecen una experiencia única que va más allá del simple entretenimiento...</p>
                <li><a href="http://localhost/22/public/pagina1">VER MI  BLOG DE VIDEOJUEGOS</a></li>
            </div>
            <!-- Ejemplo de artículo -->
            <div class="post">
                <img src="https://mymodernmet.com/wp/wp-content/uploads/2020/01/greatest-painters-all-time-thumbnail.jpg" alt="Explorando el Arte de [Nombre del Artista Favorito]" width="400" height="350">
                <h3>Explorando el Arte de [Nombre del Artista Favorito]</h3>
                <p>Sumérgete en el fascinante mundo del arte con [Nombre del Artista Favorito]. Conocido por su estilo distintivo y su habilidad para transmitir emociones a través de sus obras...</p>
                <li><a href="http://localhost/22/public/pagina2">VER MI BLOG DE ARTE</a></li>
            </div>
            <!-- Ejemplo de artículo -->
            <div class="post">
                <img src="https://elements-cover-images-0.imgix.net/db14445a-9c13-4a9a-b8a8-3465d3ef0522?auto=compress%2Cformat&w=900&fit=max&s=8f991dacc7b7924d7d7d76106be26af1" alt="Explorando mi Experiencia Laboral en [Nombre de la Empresa]" width="300" height="200">
                <h3>Explorando mi Experiencia Laboral en [Nombre de la Empresa]</h3>
                <p>Sumergirse en el mundo laboral es una aventura emocionante llena de aprendizaje y crecimiento personal. Durante mi tiempo en [Nombre de la Empresa]...</p>
                <li><a href="http://localhost/22/public/pagina3">VER MI BLOG LABORAL</a></li>
            </div>
            <!-- Ejemplo de artículo -->
            <div class="post">
                <img src="https://lh3.googleusercontent.com/ehQQhYylYD4oMSqRrakTmWs_wjvbqmuyKd1jVallKTrcmmXs0LnO6X8RimTISZnaBnx58tTodrQooG73vVOPXtJUrBeGf0cNNjg87fwfUhpWiGWuEQQOTCuxd68Vyksx-qh_oZQz" alt="Explorando el Mundo de la Música: Pasión, Creatividad y Emoción" width="300" height="200">
                <h3>Explorando el Mundo de la Música: Pasión, Creatividad y Emoción</h3>
                <p>La música es mucho más que sonidos; es una expresión de emociones, una forma de arte que puede transportarnos a lugares lejanos y evocar recuerdos perdidos...</p>
                <li><a href="http://localhost/22/public/pagina4">VER MI BLOG DE MUSICA</a></li>
            </div>
            <!-- Ejemplo de artículo -->
            <div class="post">
                <img src="https://imgmedia.larepublica.pe/1200x630/larepublica/original/2024/04/19/6622d649ed7fed5a801a8725.jpg" alt="Explorando el Mundo de la Gastronomía: Sabores, Tradiciones y Cultura" width="300" height="200">
                <h3>Explorando el Mundo de la Gastronomía: Sabores, Tradiciones y Cultura</h3>
                <p>La gastronomía es mucho más que simplemente alimentarse; es una experiencia sensorial que nos permite explorar y disfrutar de una amplia variedad de sabores...</p>
                <li><a href="http://localhost/22/public/pagina5">VER MI BLOG DE GASTRONIMIA</a></li>
            </div>
        </div>
    </section>

    
    <footer>
        <p>Derechos de autor &copy; 2024 - Título de tu página</p>
    </footer>
</body>
</html>
