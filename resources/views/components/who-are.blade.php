<style>
    .description-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .who-are-title {
        position: relative;
        color: #B54A29;
        text-align: center;
        padding: 2rem;
        font-size: 2rem;
        font-weight: bold;
        text-transform: uppercase;
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

    .who-are-title::after {
        position: absolute;
        content: "";
        width: 38%;
        height: 3px;
        background: #B54A29;
        left: 0;
        bottom: 50%;
    }

    .who-are-title::before {
        position: absolute;
        content: "";
        width: 38%;
        height: 3px;
        background: #B54A29;
        right: 0;
        bottom: 50%;
    }
</style>

<h1 class="who-are-title">Qui sommes nous</h1>
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
