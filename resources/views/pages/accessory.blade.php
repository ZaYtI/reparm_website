<style>
    .accessory-ctr {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .accessory-ctr p {
        max-width: 30%;
    }
</style>


<x-app-layout>
    <x-banner />
    <x-top-section-title title="Accesoires" :decoration="true" />
    <div class="container mx-auto accessory-ctr">
        <p class="text-3xl text-white">Pour toute commande d’accessoire merci de nous contacter directement.</p>
        <x-form-contact />
    </div>
</x-app-layout>
