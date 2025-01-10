<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur LSPD MDT - RebornV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .welcome-container {
            text-align: center;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .welcome-container h1 {
            margin-bottom: 1rem;
            color: #2c3e50;
        }
        .welcome-container p {
            margin-bottom: 2rem;
            color: #7f8c8d;
        }
        .welcome-buttons a {
            margin: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Bienvenue sur le LSPD MDT de RebornV 🚓</h1>
        <p>Connectez-vous pour accéder à vos outils ou inscrivez-vous si vous êtes nouveau.</p>
        <div class="welcome-buttons">
            <a href="{{ route('login') }}" class="btn btn-primary">Se Connecter</a>
            <a href="{{ route('register') }}" class="btn btn-success">S'inscrire</a>
        </div>
    </div>
</body>
</html>
