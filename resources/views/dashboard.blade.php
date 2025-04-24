<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h1 style="font-size: 30px"><b>FORMULAIRE POUR L' AGENDA CULTUREL ANNUEL 2025 - 2026 DE LA REPUBLIQUE DEMOCRATIQUE DU CONGO</b>  </h1>
                    </div>
                    <div class="card-header bg-info text-white text-justify">
                        <h4 style="font-size: 20px;text-align:justify">Les événements culturels jouent un rôle central dans la valorisation de notre patrimoine et la promotion de nos créateurs. Dans le cadre de son engagement pour l'innovation, le Ministère de la Culture, Arts et Patrimoine lance ce formulaire destiné à recenser et à mettre en lumière les événements qui célèbrent et diffusent la culture congolaise, tant sur le plan national qu’international.

                            Ce projet ambitieux vise à centraliser les informations clés sur les événements culturels qui mettent en avant les contenus culturels de la RDC, facilitant ainsi leur promotion, leur visibilité et leur accessibilité à un public élargi.

                            Chaque événement répertorié sera intégré dans le site officiel du Ministère, renforçant ainsi son rayonnement culturel à l'échelle nationale et internationale. Les événements enregistrés au moins deux mois à l'avance seront mis en avant  et bénéficieront d'une visibilité  via la promotion sur les  différents canaux de communication

                            Cette initiative s’inscrit dans la vision du Président de la République, Félix Antoine Tshisekedi Tshilombo, soutenue par la Première Ministre Judith Suminwa Tuluka, en faveur de la diversification de l'économie. Une vision qui guide l’engagement de Son Excellence Madame la Ministre Yolande Elebe Ma Ndembo dans la mise en place de la réglementation des spectacles, visant à garantir la sécurité des participants, à protéger les valeurs culturelles et à prévenir tout risque lors des événements, afin de renforcer et dynamiser l'économie de la culture.

                            Cette démarche concrétise la 6e action identifiée dans le Programme d'Action du Gouvernement (PAG) pour le secteur de la culture : la création d’un portail numérique regroupant un calendrier annuel des événements afin d'assurer une meilleure visibilité du contenu culturel congolais. Elle vise ainsi à promouvoir les industries culturelles et créatives (ICC), tout en renforçant le soft power de la RDC.</h4>
                    </div>
                    <div class="card-body">
                        <form  method="POST" action="{{ route('enregistrement') }}" enctype="multipart/form-data" >
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nom de l'Événement</label>
                                <input type="text" class="form-control" name="nom_evenement" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Organisateur</label>
                                <input type="text" class="form-control" name="organisateur" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Présentation</label>
                                <textarea class="form-control" name="presentation" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cible Principale</label>
                                <select class="form-select" name="cible_principale">
                                    <option value="Jeunes">Jeunes</option>
                                    <option value="Elève">Elève</option>
                                    <option value="Famille">Famille</option>
                                    <option value="Grand public">Grand public</option>
                                    <option value="Artistes et professionnels de la culture">Artistes et professionnels de la culture</option>
                                    <option value="Autres">Autres</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Domaine Artistique</label>
                                <select class="form-select" name="domaine_artistique">
                                    <option value="Musique">Musique</option>
                                    <option value="Théâtre">Théâtre</option>
                                    <option value="Peinture">Peinture</option>
                                    <option value="Danse">Danse</option>
                                    <option value="Arts visuels">Arts visuels</option>
                                    <option value="Cinéma">Cinéma</option>
                                    <option value="Littérature">Littérature</option>
                                    <option value="Design">Design</option>
                                    <option value="Danse">Danse</option>
                                    <option value="Mode">Mode</option>
                                    <option value="Jeux vidéos">Jeux vidéos</option>
                                    <option value="Multimédias">Multimédias</option>
                                    <option value="Autres">Autres</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Lieu</label>
                                <input type="text" class="form-control" name="lieu">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Date de l'Événement</label>
                                <input type="date" class="form-control" name="date_evenement">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">A déjà eu lieu ?</label>
                                <select class="form-select" name="deja_lieu">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nombre d'Éditions</label>
                                <input type="number" class="form-control" name="nombre_editions" min="0">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mesures Sécuritaires</label>
                                <textarea class="form-control" name="mesures_securitaires" rows="2"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Fréquence</label>
                                <select class="form-select" name="frequence">
                                    <option value="Annuelle">Annuelle</option>
                                    <option value="Semestrielle">Semestrielle</option>
                                    <option value="Trimestrielle">Trimestrielle</option>
                                    <option value="Occasionnel">Occasionnel</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Type de Lieu</label>
                                <select class="form-select" name="type_lieu">
                                    <option value="Salle">Salle</option>
                                    <option value="Extérieur">Extérieur</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Capacité d'Accueil</label>
                                <input type="number" class="form-control" name="capacite_accueil" min="0">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Accès PMR (Personnes à Mobilité Réduite)</label>
                                <select class="form-select" name="acces_pmr">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Billetterie</label>
                                <select class="form-select" name="billetterie">
                                    <option value="Gratuite">Gratuite</option>
                                    <option value="Payante">Payante</option>
                                    <option value="Invitation">Invitation</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Lien Visuel</label>
                                <input type="url" class="form-control" name="lien_visuel">
                            </div>



                            <div class="mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" name="telephone">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" value="{{ request('email') }}" style="opacity: 0">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image:</label>
                                <input type="file" id="image" name="image" class="form-control" onchange="previewImage(event)" required>
                                <br>
                                <img id="image_preview" src="" alt="Prévisualisation de l'image" style="max-width: 100%; height: auto; display: none;">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Créer l'Événement</button>
                            <script>
                                function previewImage(event) {
                                    var reader = new FileReader();
                                    reader.onload = function(){
                                        var output = document.getElementById('image_preview');
                                        output.src = reader.result;
                                        output.style.display = 'block';
                                    }
                                    reader.readAsDataURL(event.target.files[0]);
                                }
                           </script>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</x-app-layout>
@if (session('ok'))
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "success",
        title: "Enregistrement Ok 👌"
        });
    </script>
@endif

