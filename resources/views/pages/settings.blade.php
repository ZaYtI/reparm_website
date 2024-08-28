<x-app-layout>
    <x-banner />
    <x-top-section-title title="Pose et réglages" decoration />
    <div class="container mx-auto">
        <x-presentation-section title="Arisanat" />
        <x-presentation-section :reverse="true" title="Personnalisation" />
        <x-presentation-section title="Collaboration client" />
    </div>
</x-app-layout>
