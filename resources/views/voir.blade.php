<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Événements à venir</title>
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Balises Open Graph (exemple) -->
  <meta property="og:title" content="Événements à venir" />
  <meta property="og:description" content="Découvrez nos événements validés." />
  <meta property="og:image" content="https://audreytips.com/wp-content/uploads/2021/01/creer-et-promouvoir-votre-evenement-sur-linkedin-en-5-etapes.jpg" />
  <meta property="og:url" content="https://culture.gouv.cd/voir--agenda" />
  <meta property="og:site_name" content="VotreSite" />
  <meta property="og:type" content="website" />

  <!-- Favicon -->
  <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiqhFEMy2vsw61WjJjrt4ZFItf_xeN885PjA&s" type="image/x-icon">
  <style>
    body {
      padding-top: 20px;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container my-4">
    <h2 class="text-center mb-4">Événements à venir</h2>
    <!-- Barre de filtre pour sélectionner le mois -->
    <div class="row mb-3">
      <div class="col-md-4 offset-md-4">
        <select id="monthFilter" class="form-control">
          <option value="all">Tous les mois</option>
          <option value="01">Janvier</option>
          <option value="02">Février</option>
          <option value="03">Mars</option>
          <option value="04">Avril</option>
          <option value="05">Mai</option>
          <option value="06">Juin</option>
          <option value="07">Juillet</option>
          <option value="08">Août</option>
          <option value="09">Septembre</option>
          <option value="10">Octobre</option>
          <option value="11">Novembre</option>
          <option value="12">Décembre</option>
        </select>
      </div>
    </div>

    <!-- Liste des événements validés -->
    <div class="row" id="eventContainer">
      @foreach($evenements as $event)
        @if($event->valider == 'true')
          <!-- On ajoute un attribut data-month calculé depuis la date de l'événement -->
          <div class="col-md-4 mb-4 event-card" data-month="{{ date('m', strtotime($event->date_evenement)) }}">
            <div class="card h-100 shadow-sm">
              <img src="{{ asset($event->image) }}" class="card-img-top" alt="Event Image">
              <div class="card-body">
                <h5 class="card-title">{{ $event->nom_evenement }}</h5>
                <p class="card-text"><strong>Organisateur :</strong> {{ $event->organisateur }}</p>
                <p class="card-text"><strong>Lieu :</strong> {{ $event->lieu }}</p>
                <p class="card-text"><strong>Date :</strong> {{ $event->date_evenement }}</p>
                <p class="card-text">{{ $event->presentation }}</p>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>

  <!-- jQuery et Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Filtrage des événements par mois
    document.getElementById('monthFilter').addEventListener('change', function(){
      var selectedMonth = this.value;
      var eventCards = document.querySelectorAll('.event-card');
      eventCards.forEach(function(card) {
        if (selectedMonth === 'all' || card.getAttribute('data-month') === selectedMonth) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>
