<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiqhFEMy2vsw61WjJjrt4ZFItf_xeN885PjA&s">
    <meta property="og:title" content="Agenda Du Ministère De La Culture, Arts & Patrimoine De La RDC">
    <meta property="og:description" content="L'Agenda du Ministère de la Culture, des Arts et du Patrimoine de la République Démocratique du Congo est la plateforme officielle dédiée à la promotion et à la valorisation des événements culturels et artistiques à travers le pays.">
    <meta property="og:image" content="https://mintblueconsulting.co.uk/wp-content/uploads/2023/05/Shutterstock_1352991923-Agenda-scaled.jpg">
    <meta property="og:url" content="https://www.capcongo.online/agenda">
    <meta property="og:type" content="website">

    <title>Agenda Du ministère</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #333;
        }

        .filters-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .search-container {
            width: 100%;
            flex: 1 1 100%;
            min-width: 300px;
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .selectors-container {
            display: flex;
            gap: 20px;
            width: 100%;
        }

        .filter-container {
            flex: 1;
            min-width: 0;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px 12px 40px;
            font-size: 1rem;
            border: 2px solid #333;
            border-radius: 4px;
            background-color: white;
        }

        .search-input:focus {
            outline: none;
            border-color: #e4c06e;
        }

        select {
            width: 100%;
            padding: 12px 20px;
            font-size: 1rem;
            border: 2px solid #333;
            border-radius: 4px;
            background-color: white;
            cursor: pointer;
        }

        select:focus {
            outline: none;
            border-color: #e4c06e;
        }

        .month-title {
            font-size: 1.5rem;
            margin: 20px 0;
            color: #333;
            text-transform: capitalize;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .event-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
        }

        .event-card:hover {
            transform: translateY(-5px);
        }

        .event-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .event-info {
            padding: 15px;
        }

        .event-date {
            background: #000;
            color: #e4c06e;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .event-category {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .event-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .event-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .event-lieu {
            color: #000;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .no-results {
            text-align: center;
            grid-column: 1 / -1;
            padding: 40px;
            color: #666;
            font-size: 1.2rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
                margin-bottom: 20px;
            }

            .filters-container {
                gap: 15px;
            }

            .search-container {
                min-width: 100%;
            }

            .selectors-container {
                flex-direction: column;
                gap: 10px;
            }

            select {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <h1>Agenda</h1>

    <div class="filters-container">
        <div class="search-container">
            <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text"
                   id="searchInput"
                   class="search-input"
                   placeholder="Rechercher un événement..."
                   oninput="filterEvents()">
        </div>

        <div class="selectors-container">
            <div class="filter-container">
                <select id="monthSelect" onchange="filterEvents()">
                    <option value="tous">Tous les mois</option>
                    <option value="janvier">Janvier</option>
                    <option selected value="fevrier">Février</option>
                    <option value="mars">Mars</option>
                    <option value="avril">Avril</option>
                    <option value="mai">Mai</option>
                    <option value="juin">Juin</option>
                    <option value="juillet">Juillet</option>
                    <option value="aout">Août</option>
                    <option value="septembre">Septembre</option>
                    <option value="octobre">Octobre</option>
                    <option value="novembre">Novembre</option>
                    <option value="decembre">Décembre</option>
                </select>
            </div>

            <div class="filter-container">
                <select id="categorySelect" onchange="filterEvents()">
                    <option value="">Toutes les catégories</option>
                    <option value="Fête">Fête</option>
                    <option value="Férié">Férié</option>
                    <option value="Journée nationale">Journée nationale</option>
                    <option value="Journée internationale">Journée internationale</option>
                    <option value="Journée mondiale">Journée mondiale</option>
                    <option value="Festival">Festival</option>
                    <option value="Semaine">Semaine</option>
                    <option value="Événement">Événement</option>
                    <option value="Journée européenne">Journée européenne</option>
                </select>
            </div>

            <div class="filter-container">
                <select id="countrySelect" onchange="filterEvents()">
                    <option value="">Tous les pays</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Afrique du Sud">Afrique du Sud</option>
                    <option value="Albanie">Albanie</option>
                    <option value="Algérie">Algérie</option>
                    <option value="Allemagne">Allemagne</option>
                    <option value="Andorre">Andorre</option>
                    <option value="Angola">Angola</option>
                    <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                    <option value="Arabie Saoudite">Arabie Saoudite</option>
                    <option value="Argentine">Argentine</option>
                    <option value="Arménie">Arménie</option>
                    <option value="Australie">Australie</option>
                    <option value="Autriche">Autriche</option>
                    <option value="Azerbaïdjan">Azerbaïdjan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahreïn">Bahreïn</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbade">Barbade</option>
                    <option value="Belgique">Belgique</option>
                    <option value="Belize">Belize</option>
                    <option value="Bénin">Bénin</option>
                    <option value="Bhoutan">Bhoutan</option>
                    <option value="Biélorussie">Biélorussie</option>
                    <option value="Birmanie">Birmanie</option>
                    <option value="Bolivie">Bolivie</option>
                    <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brésil">Brésil</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgarie">Bulgarie</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodge">Cambodge</option>
                    <option value="Cameroun">Cameroun</option>
                    <option value="Canada">Canada</option>
                    <option value="Cap-Vert">Cap-Vert</option>
                    <option value="Chili">Chili</option>
                    <option value="Chine">Chine</option>
                    <option value="Chypre">Chypre</option>
                    <option value="Colombie">Colombie</option>
                    <option value="Comores">Comores</option>
                    <option value="Congo">Congo</option>
                    <option value="Corée du Nord">Corée du Nord</option>
                    <option value="Corée du Sud">Corée du Sud</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                    <option value="Croatie">Croatie</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Danemark">Danemark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominique">Dominique</option>
                    <option value="Égypte">Égypte</option>
                    <option value="Émirats arabes unis">Émirats arabes unis</option>
                    <option value="Équateur">Équateur</option>
                    <option value="Érythrée">Érythrée</option>
                    <option value="Espagne">Espagne</option>
                    <option value="Estonie">Estonie</option>
                    <option value="Eswatini">Eswatini</option>
                    <option value="États-Unis">États-Unis</option>
                    <option value="Éthiopie">Éthiopie</option>
                    <option value="Fidji">Fidji</option>
                    <option value="Finlande">Finlande</option>
                    <option value="France">France</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambie">Gambie</option>
                    <option value="Géorgie">Géorgie</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Grèce">Grèce</option>
                    <option value="Grenade">Grenade</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinée">Guinée</option>
                    <option value="Guinée équatoriale">Guinée équatoriale</option>
                    <option value="Guinée-Bissau">Guinée-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haïti">Haïti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hongrie">Hongrie</option>
                    <option value="Îles Marshall">Îles Marshall</option>
                    <option value="Îles Salomon">Îles Salomon</option>
                    <option value="Inde">Inde</option>
                    <option value="Indonésie">Indonésie</option>
                    <option value="Irak">Irak</option>
                    <option value="Iran">Iran</option>
                    <option value="Irlande">Irlande</option>
                    <option value="Islande">Islande</option>
                    <option value="Israël">Israël</option>
                    <option value="Italie">Italie</option>
                    <option value="Jamaïque">Jamaïque</option>
                    <option value="Japon">Japon</option>
                    <option value="Jordanie">Jordanie</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kirghizistan">Kirghizistan</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Koweït">Koweït</option>
                    <option value="Laos">Laos</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Lettonie">Lettonie</option>
                    <option value="Liban">Liban</option>
                    <option value="Libéria">Libéria</option>
                    <option value="Libye">Libye</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituanie">Lituanie</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macédoine du Nord">Macédoine du Nord</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaisie">Malaisie</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malte">Malte</option>
                    <option value="Maroc">Maroc</option>
                    <option value="Maurice">Maurice</option>
                    <option value="Mauritanie">Mauritanie</option>
                    <option value="Mexique">Mexique</option>
                    <option value="Micronésie">Micronésie</option>
                    <option value="Moldavie">Moldavie</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolie">Mongolie</option>
                    <option value="Monténégro">Monténégro</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Namibie">Namibie</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Népal">Népal</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Norvège">Norvège</option>
                    <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                    <option value="Oman">Oman</option>
                    <option value="Ouganda">Ouganda</option>
                    <option value="Ouzbékistan">Ouzbékistan</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palaos">Palaos</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Pays-Bas">Pays-Bas</option>
                    <option value="Pérou">Pérou</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pologne">Pologne</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Qatar">Qatar</option>
                    <option value="République centrafricaine">République centrafricaine</option>
                    <option value="République démocratique du Congo">République démocratique du Congo</option>
                    <option value="République dominicaine">République dominicaine</option>
                    <option value="République tchèque">République tchèque</option>
                    <option value="Roumanie">Roumanie</option>
                    <option value="Royaume-Uni">Royaume-Uni</option>
                    <option value="Russie">Russie</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint-Kitts-et-Nevis">Saint-Kitts-et-Nevis</option>
                    <option value="Saint-Marin">Saint-Marin</option>
                    <option value="Saint-Vincent-et-les-Grenadines">Saint-Vincent-et-les-Grenadines</option>
                    <option value="Sainte-Lucie">Sainte-Lucie</option>
                    <option value="Salvador">Salvador</option>
                    <option value="Samoa">Samoa</option>
                    <option value="São Tomé-et-Principe">São Tomé-et-Principe</option>
                    <option value="Sénégal">Sénégal</option>
                    <option value="Serbie">Serbie</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapour">Singapour</option>
                    <option value="Slovaquie">Slovaquie</option>
                    <option value="Slovénie">Slovénie</option>
                    <option value="Somalie">Somalie</option>
                    <option value="Soudan">Soudan</option>
                    <option value="Soudan du Sud">Soudan du Sud</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Suède">Suède</option>
                    <option value="Suisse">Suisse</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Syrie">Syrie</option>
                    <option value="Tadjikistan">Tadjikistan</option>
                    <option value="Tanzanie">Tanzanie</option>
                    <option value="Tchad">Tchad</option>
                    <option value="Thaïlande">Thaïlande</option>
                    <option value="Timor oriental">Timor oriental</option>
                    <option value="Togo">Togo</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                    <option value="Tunisie">Tunisie</option>
                    <option value="Turkménistan">Turkménistan</option>
                    <option value="Turquie">Turquie</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican">Vatican</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Yémen">Yémen</option>
                    <option value="Zambie">Zambie</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
        </div>
    </div>

    <div class="month-title" id="currentMonth"></div>
    <div class="events-grid" id="eventsContainer"></div>

    <script>
        const monthSelect = document.getElementById("monthSelect");
        const monthNames = [
            "janvier", "fevrier", "mars", "avril", "mai", "juin",
            "juillet", "aout", "septembre", "octobre", "novembre", "decembre"
        ];

        const currentMonthIndex = new Date().getMonth(); // Récupère l'index du mois actuel (0 pour janvier, 1 pour février, ...)
        const currentMonth = monthNames[currentMonthIndex]; // Trouve le nom du mois correspondant

        monthSelect.value = currentMonth; // Sélectionne le mois dans la liste déroulante

        var eventsData = @json($eventsData);

        function createEventCard(event) {
            return `
                <div class="event-card">
                    <img src="${event.image}" alt="${event.title}" class="event-image">
                    <div class="event-info">
                        <div class="event-date">${event.date}</div>
                        <div class="event-category">${event.category}</div>
                        <h3 class="event-title">${event.title}</h3>
                        <div class="event-description">${event.description}</div>
                        <div class="event-lieu">${event.lieu}</div>
                    </div>
                </div>
            `;
        }

        function filterEvents() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const selectedMonth = document.getElementById('monthSelect').value;
            const selectedCategory = document.getElementById('categorySelect').value;
            const selectedCountry = document.getElementById('countrySelect').value;
            const container = document.getElementById('eventsContainer');
            const monthTitle = document.getElementById('currentMonth');

            let allEvents = [];

            if (selectedMonth === 'tous') {
                monthTitle.textContent = 'Tous les événements';
                allEvents = Object.values(eventsData).flat();
            } else {
                monthTitle.textContent = selectedMonth.charAt(0).toUpperCase() + selectedMonth.slice(1) + ' 2025';
                allEvents = eventsData[selectedMonth] || [];
            }

            const filteredEvents = allEvents.filter(event => {
                const matchesSearch = event.title.toLowerCase().includes(searchTerm) ||
                                    event.description.toLowerCase().includes(searchTerm) ||
                                    event.lieu.toLowerCase().includes(searchTerm);
                const matchesCategory = !selectedCategory || event.category === selectedCategory;
                const matchesCountry = !selectedCountry || event.pays === selectedCountry || (selectedCountry === "" && event.pays);

                return matchesSearch && matchesCategory && matchesCountry;
            });

            if (filteredEvents.length === 0) {
                container.innerHTML = '<div class="no-results">Aucun événement trouvé</div>';
            } else {
                container.innerHTML = filteredEvents.map(event => createEventCard(event)).join('');

                document.querySelectorAll('.event-card').forEach((card, index) => {
                    card.style.animationDelay = `${index * 0.1}s`;
                });
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            filterEvents();
        });
    </script>
</body>
</html>
