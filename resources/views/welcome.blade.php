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

    .glass-input[type=text] {
        background: rgba(243, 243, 243, 0.15);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(0px);
        -webkit-backdrop-filter: blur(0px);
    }
</style>


<x-app-layout>
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
    <x-page-selection />
</x-app-layout>
