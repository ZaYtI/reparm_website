<style>
    .glass-area {
        width: 100%;
        background: rgba(243, 243, 243, 0.15);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(0px);
        -webkit-backdrop-filter: blur(0px);
        color: white;
    }

    .form-contact {
        min-width: 40%;
        color: white
    }
</style>
<div class="form-contact">
    <div class="">
        <h2 class="text-4xl section-title">Nous
            contacter
        </h2>
        <form action="#" class="space-y-8">
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>
            <div class="sm:col-span-2">
                <x-input-label for="message" :value="__('Votre message')" />
                <textarea id="message" rows="6" class="block glass-area rounded-md shadow-sm"
                    placeholder="Entrer votre message"></textarea>
            </div>
            <x-primary-button>
                {{ __('Envoyer') }}
            </x-primary-button>
        </form>
    </div>
</div>
