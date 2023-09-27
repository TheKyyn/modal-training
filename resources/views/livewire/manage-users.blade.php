<form>

    @foreach ($users as $user)
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $user->name }}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">l{{ $user->email }}</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                <button class="text-indigo-600 hover:text-indigo-900" wire:click="confirmDelete({{ $user->id }})">Supprimer</button>
            </div>
        </li>
    </ul>
        @endforeach


        <x-confirmation-modal wire:model="showDeleteUserModal">
            <x-slot name="title">
                Supprimer {{ $user ? $user->name : 'Utilisateur Inconnu' }}
            </x-slot>
            <x-slot name="body">
                Si vous confirmez, votre compte sera supprimé définitivement.
            </x-slot>
            <x-slot name="footer">
                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showDeleteUserModal', false)">Annuler</x-button>
            </x-slot>
        </x-confirmation-modal>

</form>
