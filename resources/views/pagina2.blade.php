<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Arte</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://img1.wallspic.com/crops/1/7/2/6/7/176271/176271-el_espacio_tridimensional-morado-triangulo-violeta-material_propiedad-3840x2160.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #fff; /* Cambiar el color del texto a blanco */
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        /* Estilos para el encabezado */
        header {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        /* Estilos para la barra de navegación */
        nav {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
        }
        /* Estilos para el contenido principal */
        .container {
            padding: 20px;
            text-align: center;
        }
        .post-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            justify-items: center;
        }
        .post-card {
            background-color: rgba(34, 34, 34, 0.8);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
            display: inline-block;
            width: 250px;
            vertical-align: top;
        }
        .post-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .post-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .post-card h2 {
            margin: 10px 0;
            font-size: 1.5rem;
        }
        .post-card p {
            margin: 5px 0;
            font-size: 1rem;
        }
        .post-card button {
            background-color: #00ccff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .post-card button:hover {
            background-color: #00b3e6;
        }
        /* Estilos para el pie de página */
        footer {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Blog de Arte</h1>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Galería</a>
        <a href="#">Artistas</a>
        <a href="#">Contacto</a>
    </nav>
    <div class="container">
        <div class="post-box">
            <div class="post">
                <h3>El Placer de Leer Obras Literarias</h3>
                <p>Sumergirse en la literatura es un pasatiempo que nos transporta a mundos imaginarios, nos permite explorar diferentes culturas y nos enriquece con nuevas perspectivas y conocimientos. Ya sea que estemos disfrutando de una novela clásica o sumergiéndonos en la poesía contemporánea, la lectura de obras literarias es una experiencia que despierta nuestra imaginación y alimenta nuestra alma.</p>
                
            </div>
        </div>
        <div class="post-grid">
            <div class="post-card">
                <img src="https://e.rpp-noticias.io/xlarge/2020/07/01/400240_964320.png" alt="La Última Cena">
                <h2>La Última Cena</h2>
                <p>Artista: Leonardo da Vinci</p>
                <p>Técnica: Sfumato</p>
                <button>Ver más</button>
            </div>
            <div class="post-card">
                <img src="https://img.freepik.com/fotos-premium/iconico-grito-obra-maestra-edvard-munch-como-fondo-pantalla-su-iphone_983420-139536.jpg" alt="El Grito">
                <h2>El Grito</h2>
                <p>Artista: Edvard Munch</p>
                <p>Técnica: Fresco</p>
                <button>Ver más</button>
            </div>
            <div class="post-card">
                <img src="https://i.pinimg.com/736x/c1/97/4e/c1974efd1c3cf48579446cc15574a7ef.jpg" alt="Guernica">
                <h2>Guernica</h2>
                <p>Artista: Pablo Picasso</p>
                <p>Técnica: Estilo cubista</p>
                <button>Ver más</button>
            </div>
            <!-- Puedes agregar más entradas aquí -->
        </div>
    </div>
    <footer>
        <p>Blog de Arte &copy; 2024</p>
    </footer>
</body>
</html>
