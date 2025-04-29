<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - BusVoyage</title>
    <style>
        body {
            background: url('https://www.gjtravel.is/wp-content/uploads/GJ-buses/Setra-69-seater/Interior-Setra-bus-69-seater-1.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #0077cc, #00c6ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .registration-form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
        }

        .registration-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #0077cc;
        }

        .registration-form label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        .registration-form input,
        .registration-form select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            outline: none;
            transition: border 0.3s ease;
        }

        .registration-form input:focus,
        .registration-form select:focus {
            border-color: #0077cc;
        }

        .registration-form button {
            width: 100%;
            padding: 12px;
            background: #0077cc;
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .registration-form button:hover {
            background: #005fa3;
        }

        .registration-form p {
            text-align: center;
            margin-top: 15px;
            color: #555;
        }

        .registration-form p a {
            color: #0077cc;
            text-decoration: none;
        }

        .registration-form p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="registration-form">
        <h2>Créer une réservation</h2>
        <form action="#" method="POST">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Votre nom complet" required>

            <label for="email">Adresse Email</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>

            <label for="date">Date de voyage</label>
            <input type="date" name="date" id="date" required>

            <label for="depart">Ville de départ</label>
            <select name="depart" id="depart" required>
                <option value="">Sélectionnez une ville</option>
                <option value="Dschang">Dschang</option>
                <option value="Bafoussam">Bafoussam</option>
                <option value="Yaoundé">Yaoundé</option>
                <option value="Douala">Douala</option>
            </select>

            <label for="destination">Ville de destination</label>
            <select name="destination" id="destination" required>
                <option value="">Sélectionnez une ville</option>
                <option value="Yaoundé">Yaoundé</option>
                <option value="Douala">Douala</option>
                <option value="Bafoussam">Bafoussam</option>
                <option value="Dschang">Dschang</option>
            </select>

            <!-- Ajout du champ pour la classe -->
            <label for="class">Classe de voyage</label>
            <select name="class" id="class" required>
                <option value="">Choisissez une classe</option>
                <option value="vip">VIP</option>
                <option value="classique">Classique</option>
            </select>

            <!-- Ajout du champ pour le nombre de places -->
            <label for="places">Nombre de places</label>
            <input type="number" id="places" name="places" min="1" max="10" required placeholder="Nombre de places" />

            <a href="{{ route('payement') }}">
                <button type="button">Réserver</button>
            </a>
        </form>
        <a href="{{ route('index') }}">
            <button type="submit">retour</button>
        </a>
    </div>

    <img src="https://www.gjtravel.is/wp-content/uploads/GJ-buses/Setra-69-seater/Interior-Setra-bus-69-seater-1.jpg" alt="Réservez et voyagez en toute sécurité"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
</body>

</html>
