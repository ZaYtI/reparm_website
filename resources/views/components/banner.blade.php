<style>
    .banner_wrapper {
        position: relative
    }

    .banner_img {
        width: 100%;
        max-height: 50vh;
        object-fit: cover;
    }

    .banner_text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .banner_title {
        font-size: 3.5rem;
        font-weight: bolder;
        padding: 0;
        margin: 0;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .banner_subtitle {
        font-style: italic;
        padding: 0;
        margin: 0;
    }
</style>

<div class="banner_wrapper">
    <img src="{{ asset('images/banniere_accueil.jpg') }}" alt="banner" class="banner_img" />
    <div class="banner_text text-center">
        <h1 class="text-white uppercase banner_title">
            {{ __('souchez reparm') }}
        </h1>
        <h6 class="text-white italic banner_subtitle">
            {{ __('Armurier & artisant crossier') }}
        </h6>
    </div>
</div>
