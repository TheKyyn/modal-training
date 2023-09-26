<form>

    <p>
        <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="$set('showModal', true)">Oui, Supprimer</x-button>
    </p>


    @if ($showModal)
        <x-confirmation-modal>
            <x-slot name="title">
                Êtes-vous sûr ?
            </x-slot>

            <x-slot name="body">
                Si vous confirmez, votre compte sera supprimé définitivement.
            </x-slot>

            <x-slot name="footer">
                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showModal', false) ">Annuler</x-button>
                <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="handle">Confirmer</x-button>
            </x-slot>
        </x-confirmation-modal>
    @endif
</form>
