<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evénements') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="card">
    <div class="card-header">
        <h1>Liste des événements ({{$taille}}) </h1>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Catégorie</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Lieu</th>
                    <th>Image</th>
                    <th>Mois</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $event->date_event }}</td>
                    <td>{{ $event->category }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->lieu }}</td>
                    <td>
                        <img src="{{ $event->image }}" alt="{{ $event->title }}" width="100">
                    </td>
                    <td>{{ $event->mois }}</td>
                    
                </tr>
                <span hidden>{{ $id+=1 }}</span>
                @endforeach
            </tbody>
        </table>
        {{ $events->links('pagination::bootstrap-4') }}
    </div>
</div>
</x-app-layout>
<script>
    function confirmDelete() {
        return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');
    }
</script>
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
        icon: "error",
        title: "suppression Ok 👌"
        });
    </script>
@endif
