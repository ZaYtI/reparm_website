<style>
    .description-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .who-are-section {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .who-are-section .logo {
        max-width: 50%;
        padding-left: 5rem;
        padding-right: 5rem;
    }

    .who-are-section .text {
        color: white;
        font-size: 20px;
        max-width: 40%;
    }
</style>

<x-top-section-title title="Qui sommes nous" :decoration="true" />
<div class="container mx-auto who-are-section">
    <div class="description-container">
        <div class="logo">
            <img src="{{ asset('images/logo_blanc.png') }}" alt="logo">
        </div>
        <div class="text px-3">
            Je suis Sébastien armurier diplômé de l'école de Liège en 1996. J'ai effectué ensuite un diplôme
            supplémentaire
            de monteur à bois pour la fabrication de crosse de fusil et carabines. J'ai travaillé auparavant dans
            différentes enseignes pour forger une expérience solide tel que la prestigieuse société Lebeau Courally. Je
            suis
            collectionneur d'armes de chasse et de tir et passionné de fines mécaniques artisanales. C’est avec cette
            passion que j’ai créer Souchez Reparm.
        </div>
    </div>
</div>
