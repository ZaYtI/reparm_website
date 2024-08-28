<style>
    .contact-us-ctr {
        display: flex;
        justify-content: space-around;
        padding-top: 4rem;
    }

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
    }

    .contact-us-ctr .section-title {
        color: #B54A29;
        text-transform: uppercase;
        font-weight: bold;
        text-align: center;
    }
</style>

<div class="contact-us-wrapper">
    <div class="container mx-auto contact-us-ctr">
        <div class="information">
            <h2 class="text-4xl section-title">
                Nos horaires
            </h2>
            <div class="horaires-wrapper">
                <ul class="mt-3 text-white bold m-auto">
                    <li class="py-2">Lundi : 8h00 12h00 - 14h 18h</li>
                    <li class="py-2">Mardi : 8h00 12h00 - 14h 18h</li>
                    <li class="py-2">Mercredi : 8h00 12h00 - 14h 18h</li>
                    <li class="py-2">Jeudi : 8h00 12h00 - 14h 18h</li>
                    <li class="py-2">Vendredi : 8h00 12h00 - 14h 18h</li>
                    <li class="py-2">Samedi : 8h00 12h00 - 14h 18h</li>
                    <li class="py-2">Dimanche : 8h00 12h00 - 14h 18h</li>
                </ul>
            </div>
        </div>
        <x-form-contact />
    </div>
</div>
