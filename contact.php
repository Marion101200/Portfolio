<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Mon Portfolio</title>
</head>
    <body>
    <?php
include 'header.php';
?>
<style>
    section.contact {
            background-color: #fff;
            padding: 40px;
            margin: 20px auto;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        section.contact h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input, textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #f39c12;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }
    </style>

<section class="contact">
    <h2>Contactez-moi</h2>
    <form action="votre_script_php_ou_email.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required placeholder="Votre nom">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Votre email">

        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" required placeholder="Le sujet de votre message">

        <label for="message">Message</label>
        <textarea id="message" name="message" required placeholder="Votre message"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>
    </body>
</html>
<?php
include 'footer.php';
?>