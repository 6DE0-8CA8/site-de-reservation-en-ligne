<section class="space-y-6 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
    <header>
        <h2 class="text-xl font-semibold text-red-600 dark:text-red-400">
            {{ __('Suppression du compte') }}
        </h2>

        <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
            {{ __('Lorsque votre compte est supprimé, toutes vos données seront définitivement perdues. Avant de continuer, assurez-vous d’avoir sauvegardé les informations importantes.') }}
        </p>
    </header>

    <div>
        <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >
            {{ __('Supprimer le compte') }}
        </x-danger-button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-white dark:bg-gray-900 rounded-lg">
            @csrf
            @method('delete')

            <h2 class="text-lg font-bold text-gray-900 dark:text-gray-100 mb-4">
                {{ __('Confirmer la suppression') }}
            </h2>

            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{ __('Entrez votre mot de passe pour confirmer que vous souhaitez supprimer définitivement votre compte.') }}
            </p>

            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    {{ __('Mot de passe') }}
                </label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white rounded-md shadow-sm focus:ring-red-500 focus:border-red-500"
                    placeholder="{{ __('Mot de passe') }}"
                >
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-sm text-red-600" />
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Annuler') }}
                </x-secondary-button>

                <x-danger-button>
                    {{ __('Supprimer définitivement') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
