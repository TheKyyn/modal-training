<x-layout>
    <p class="mb-6">
        Souhaitez-vous supprimer votre compte ?
    </p>


    <livewire:delete-user />

    <form
        id="delete-user-form"
        method="POST"
        action="/"
        x-data
        @submit.prevent="
                        location.hash = '#user-delete-modal';
                    "
    >
        @csrf

        <p>
            <x-button class="bg-blue-400 hover:bg-blue-500">Oui, Supprimer</x-button>
        </p>
    </form>

<!--    MODAL -->

    <x-confirmation-modal name="user-delete-modal">
        <x-slot name="title">
            Êtes-vous sûr ?
        </x-slot>

        <x-slot name="body">
            Si vous confirmez, votre compte sera supprimé définitivement.
        </x-slot>

        <x-slot name="footer">
            <a href="#" class="bg-gray-400 hover:bg-gray-500 text-xs uppercase py-2 px-4 rounded-md text-white transition-all duration-200 mr-2">Annuler</a>
            <x-button class="bg-blue-400 hover:bg-blue-500" @click="document.querySelector('#delete-user-form').submit()">Confirmer</x-button>
        </x-slot>
    </x-confirmation-modal>
</x-layout>
