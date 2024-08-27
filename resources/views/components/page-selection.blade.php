<style>
    .accordion-wrapper {
        padding-bottom: 2rem;
    }

    .ctr-accordion {
        width: 100%;
        height: 500px;
        display: flex;
        flex-direction: row;
        align-items: center;
        align-content: space-around;
        gap: 20px;
        overflow: hidden;
    }

    .tab {
        position: relative;
        width: 20%;
        height: inherit;
        padding: 20px;
        cursor: pointer;
        transition: width .35s ease-in-out;
        border-radius: 25px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: start;
    }

    .tab::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('images/banniere_accueil.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1;
        transition: filter .35s ease-in-out;
        border-radius: 25px;
    }

    .tab:hover {
        width: 80%;
    }

    .tab:hover::before {
        filter: blur(8px);
        -webkit-filter: blur(8px);
    }

    .tab_title {
        position: absolute;
        bottom: -50px;
        left: 0;
        transform: rotate(-90deg);
        transform-origin: 0% 0%;
        z-index: 2;
        /* Ensures text is above the background */
    }

    .tab_title span {
        color: white;
        font-size: 3rem;
    }

    .service-title {
        color: #B54A29;
        text-align: center;
        padding: 2rem;
        font-size: 2rem;
        font-weight: bold;
        text-transform: uppercase;
    }
</style>

<div class="container mx-auto">
    <h1 class="service-title">Nos Services</h1>
    <div class="accordion-wrapper">
        <div class="ctr-accordion">
            <a href="/cross" class="tab">
                <div class="tab_title">
                    <span class="span_title">Crosse</span>
                </div>
            </a>
            <div class="tab">
                <div class="tab_title">
                    <span class="span_title">Fusils</span>
                </div>
            </div>
            <div class="tab">
                <div class="tab_title">
                    <span class="span_title">Réglages</span>
                </div>
            </div>
            <div class="tab">
                <div class="tab_title">
                    <span class="span_title">Accessoires</span>
                </div>
            </div>
            <div class="tab">
                <div class="tab_title">
                    <span>Réparation</span>
                </div>
            </div>
        </div>
    </div>
</div>
