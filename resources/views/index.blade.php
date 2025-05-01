<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusVoyage - Réservation de Billets</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f9f9f9;

        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0077cc;
            padding: 15px 30px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffdd57;
        }

        header {


           background: #f9f9f9 url('https://www.ville-rail-transports.com/wp-content/uploads/2018/06/2018_0330PhHS531DTLagny0035.jpg') no-repeat center center fixed;
            background-size: cover;


            /*  background: url('https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
          */  height: 80vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 70px; /* Décale le header à cause de la navbar fixe */
        }
        header h1 {
            font-size: 3rem;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px 30px;
            border-radius: 10px;
        }

        header p {
            margin-top: 15px;
            font-size: 1.2rem;
            background-color: rgba(0, 0, 0, 0.4);
            padding: 10px 20px;
            border-radius: 10px;
        }

        .search-section {
            background: white;
            padding: 30px;
            width: 90%;
            max-width: 800px;
            margin: -50px auto 40px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 12px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .search-section input, .search-section button {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
        }

        .search-section button {
            background: #0077cc;
            color: white;
            border: none;
            transition: background 0.3s ease;
            cursor: pointer;
        }

        .search-section button:hover {
            background: #005fa3;
        }

        .destinations {
            text-align: center;
            padding: 20px;
        }

        .destinations h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background: white;
            width: 280px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card h3 {
            margin: 15px;
            font-size: 1.3rem;
            color: #333;
        }

        .card p {
            margin: 0 15px 15px;
            color: #555;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #0077cc;
            color: white;
            margin-top: 40px;
        }

    </style>
</head>
<body>

<nav>
    <div class="logo">plaisir et assurance</div>
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="{{route('index') }}">voyage disponible</a></li>
        <li><a href="#"> liste reservation</a></li>
        <li><a href="{{route('index')}}">Connexion</a></li>
    </ul>
</nav>

<header>
    <h1>Bienvenue chez new style voyage</h1>
    <p>Votre partenaire pour des trajets sûrs et confortables</p>
</header>

<div class="search-section">

    <a href="{{ route('register') }}">
        <button type="button">Réservation</button>
    </a>
</div>

<section class="destinations">
    <h2>Nos différents circuits</h2>
    <div class="cards">
        <div class="card">
            <img src="https://media.licdn.com/dms/image/v2/D4E10AQFt99Po5av5pA/image-shrink_800/image-shrink_800/0/1718585057767?e=2147483647&v=beta&t=8WjOlLKZhWWN86Z7xhfObTbOeypHHoWSbDY9AbKU4v8" alt="olembe yaounde">
            <h3>Départ Dschang - Yaoundé</h3>
            <p>À partir de 5000 CFA</p>
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQwPjn5LFBmg5qFSBHFQKhdnmuN1oQnr5kpsSNxoQgiv-n_J1bV-JXxoRrHyhZfU0Iw5A&usqp=CAU" alt="Dakar douala">
            <h3>Départ Dschang - Douala</h3>
            <p>À partir de 4000 CFA</p>
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaD4t92sJkQnyosAbKEa6Gj3HxgsRw6dM7NA&s" alt="byamassi yaounde">
            <h3>Départ Bafoussam - Yaoundé</h3>
            <p>À partir de 4000 CFA</p>
        </div>
    </div>
</section>

<footer>
    &copy; 2025 BusVoyage — Tous droits réservés.
</footer>

</body>
</html>
