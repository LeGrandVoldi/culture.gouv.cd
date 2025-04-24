<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Agenda Digital</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header class="main-header">
        <div class="logo">Mon Agenda Digital</div>
        <div class="auth-buttons">
            <a href="{{ route('login') }}"><button id="loginBtn" class="auth-btn">Se connecter</button></a>
            <a href="{{ route('register') }}"><button id="registerBtn" class="auth-btn register">S'inscrire</button></a>
        </div>
    </header>
    <div id="cont">
        <div class="container">
            <div class="agenda">
                <div class="agenda-header">
                    <button id="prevMonth">&lt;</button>
                    <h1 id="currentMonth">Avril 2024</h1>
                    <button id="nextMonth">&gt;</button>
                </div>
                <div class="weekdays">
                    <div>Lun</div>
                    <div>Mar</div>
                    <div>Mer</div>
                    <div>Jeu</div>
                    <div>Ven</div>
                    <div>Sam</div>
                    <div>Dim</div>
                </div>
                <div id="calendar" class="calendar-grid"></div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
