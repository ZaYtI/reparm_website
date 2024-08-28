@props(['reverse' => false, 'title', 'text' => ''])

@php
    $containerClasses =
        $reverse ?? false
            ? 'container mx-auto element_container my-3 flex-row-reverse'
            : 'container mx-auto element_container my-3 flex-row';
    $imageClasses = $reverse ?? true ? 'direction-reverse' : 'direction-row';
    $textClasses =
        $reverse ?? false
            ? 'ps-5 element_text_container d-flex flex-column justify-content-center mt-3 mt-md-0'
            : 'ps-5 element_text_container d-flex flex-column justify-content-center mt-3 mt-md-0 reverse';

@endphp

<style>
    .element_container {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        transition: all 0.2s ease-in-out;
    }

    .element_title {
        position: relative;
        max-width: 75%;
    }

    .element_title::before {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 75%;
        height: 2px;
        background-color: rgba(255, 255, 255, 0.5);
    }

    .element_container .direction {
        flex-direction: row-reverse;
    }

    .side_image_wrapper {
        max-width: 450px;
    }

    .side_image {
        width: 100%;
        height: auto;
    }

    .side_image img {
        width: 100%;
        height: auto;
        transition: all 0.2s ease-in-out;
    }

    .direction-row {
        box-shadow: 5px 5px 5px 1px rgba(0, 0, 0, 0.4);
    }

    .direction-reverse {
        box-shadow: -5px -5px 5px 1px rgba(0, 0, 0, 0.4);
    }

    .element_text_container {
        max-width: 600px;
        color: white;
        position: relative;
        transform-style: preserve-3d;
    }

    .element_text_container::before {
        content: '';
        position: absolute;
        top: 0;
        left: -5px;
        width: 5px;
        height: 100%;
        background-color: #B54A29;
        transform: translateZ(-1px);
    }

    .element_text_container.reverse::before {
        left: auto;
        right: 5px;
        transform: translateZ(-1px);
    }

    @media screen and (max-width: 900px) {
        .element_container {
            display: block;
            padding: 0;
            margin-bottom: 4rem;
        }

        .side_image_wrapper {
            width: 100%;
            margin: auto auto;
        }

        .element_text_container {
            margin-right: auto;
            margin-left: auto;
            margin-top: 1rem;
        }
    }

    @media screen and (max-width: 650px) {
        .side_image_wrapper {
            max-width: 100%;
            width: 100%;
        }
    }
</style>
<div {{ $attributes->merge(['class' => $containerClasses]) }}>
    <div class="side_image_wrapper">
        <div class="side_image">
            <img src="{{ asset('images/banniere_accueil.jpg') }}" alt="banner"
                {{ $attributes->merge(['class' => $imageClasses]) }} />
        </div>
    </div>
    <div {{ $attributes->merge(['class' => $textClasses]) }}>
        <h2 class="mb-4 element_title text-4xl">{{ $title }}</h2>
        <p class="pe-5">{{ $text }}</p>
    </div>
</div>
