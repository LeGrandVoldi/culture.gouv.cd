<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Balises Open Graph -->
  <meta property="og:title" content="Gestion des événements" />
  <meta property="og:description" content="Page d'administration pour gérer et valider les événements." />
  <meta property="og:image" content="https://img.freepik.com/vecteurs-libre/gestionnaire-liste-controle-creant-plan-evenement-developpement-service-gestion-planification-evenements-comment-planifier-evenement-concept-logiciel-planification-illustration-isolee-bleu-corail-rose_335657-1351.jpg" />
  <meta property="og:url" content="https://culture.gouv.cd/admin--ministere" />
  <meta property="og:site_name" content="Gestion Evénements" />
  <meta property="og:type" content="website" />

  <!-- Favicon -->
  <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiqhFEMy2vsw61WjJjrt4ZFItf_xeN885PjA&s" type="image/x-icon">


  <title>Gestion des événements</title>
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 20px;
    }
    .img-thumbnail {
      max-width: 100%;
      height: auto;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container my-4">
    <h2 class="text-center mb-4">Gestion des événements</h2>

    <!-- Onglets de filtrage -->
    <ul class="nav nav-tabs" id="eventTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tous-tab" data-toggle="tab" href="#tous" role="tab" aria-controls="tous" aria-selected="true">Tous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nonValide-tab" data-toggle="tab" href="#nonValide" role="tab" aria-controls="nonValide" aria-selected="false">Non validés</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="valide-tab" data-toggle="tab" href="#valide" role="tab" aria-controls="valide" aria-selected="false">Validés</a>
      </li>
    </ul>

    <div class="tab-content" id="eventTabContent">
      <!-- Tous les événements -->
      <div class="tab-pane fade show active" id="tous" role="tabpanel" aria-labelledby="tous-tab">
        <div class="table-responsive mt-3">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Organisateur</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>Image</th>
                <th>Statut</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($evenements as $event): ?>
              <tr>
                <td><?= $event->nom_evenement ?></td>
                <td><?= $event->organisateur ?></td>
                <td><?= $event->lieu ?></td>
                <td><?= $event->date_evenement ?></td>
                <td>
                  <img src="<?= $event->image ?>" width="100" alt="Event Image" class="img-thumbnail event-img">
                </td>
                <td>
                  <?php if($event->valider == 'true'): ?>
                    <span class="badge badge-success">Validé</span>
                  <?php else: ?>
                    <span class="badge badge-warning">Non validé</span>
                  <?php endif; ?>
                </td>
                <td>
                  <?php if($event->valider == 'false'): ?>
                    <form action="{{ route('valider.event', $event->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment valider cet événement ?');">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-sm btn-success">Valider</button>
                    </form>
                  <?php else: ?>
                    <em>Aucune action</em>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Événements non validés -->
      <div class="tab-pane fade" id="nonValide" role="tabpanel" aria-labelledby="nonValide-tab">
        <div class="table-responsive mt-3">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Organisateur</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>Image</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($evenements as $event): ?>
                <?php if($event->valider == 'false'): ?>
                  <tr>
                    <td><?= $event->nom_evenement ?></td>
                    <td><?= $event->organisateur ?></td>
                    <td><?= $event->lieu ?></td>
                    <td><?= $event->date_evenement ?></td>
                    <td>
                      <img src="<?= $event->image ?>" width="100" alt="Event Image" class="img-thumbnail event-img">
                    </td>
                    <td>
                      <a href="mailto:<?= $event->email ?>"><?= $event->email ?></a>
                    </td>
                    <td>
                      <form action="{{ route('valider.event', $event->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment valider cet événement ?');">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-success">Valider</button>
                      </form>
                    </td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Événements validés -->
      <div class="tab-pane fade" id="valide" role="tabpanel" aria-labelledby="valide-tab">
        <div class="table-responsive mt-3">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th>Nom</th>
                <th>Organisateur</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($evenements as $event): ?>
                <?php if($event->valider == 'true'): ?>
                  <tr>
                    <td><?= $event->nom_evenement ?></td>
                    <td><?= $event->organisateur ?></td>
                    <td><?= $event->lieu ?></td>
                    <td><?= $event->date_evenement ?></td>
                    <td>
                      <img src="<?= $event->image ?>" width="100" alt="Event Image" class="img-thumbnail event-img">
                    </td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal pour afficher l'image en popup -->
  <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imageModalLabel">Image de l'événement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img id="modalImage" src="" class="img-fluid" alt="Event Image">
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery et Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Gestion du clic sur les images pour afficher la popup
    $(document).ready(function(){
      $('.event-img').on('click', function(){
        var src = $(this).attr('src');
        $('#modalImage').attr('src', src);
        $('#imageModal').modal('show');
      });
    });
  </script>
</body>
</html>
