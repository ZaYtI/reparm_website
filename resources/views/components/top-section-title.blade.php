@props(['title', 'decoration' => false])

<style>
    .title-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .top-section-title {
        color: #B54A29;
        text-align: center;
        padding: 2rem;
        font-weight: bold;
        text-transform: uppercase;
        white-space: nowrap;
    }

    hr {
        width: 100%;
        border-top: 3px solid #B54A29;
    }
</style>


<div class="title-wrapper">
    <hr @class(['hidden' => !$decoration])>
    <h1 class="top-section-title text-4xl">
        {{ $title }}
    </h1>
    <hr @class(['hidden' => !$decoration])>
</div>
