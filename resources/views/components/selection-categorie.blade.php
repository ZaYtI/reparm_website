@props(['categories'])

<style>
    .select-categories-wrapper {
        position: relative;
        min-width: 20%;
    }

    .select-categories-wrapper:before {
        content: '';
        position: absolute;
        top: 0;
        right: -5%;
        height: 100%;
        width: 2px;
        background-color: #B54A29;
        margin-right: 15px;
    }

    .checkbox-wrapper {
        padding: 0.5rem;
    }

    .checkbox-label {
        color: white;
        padding: 0.5rem;
    }
</style>

<div class="select-categories-wrapper">
    <ul>
        <li class="checkbox-wrapper">
            <input
                class="rounded white:bg-gray-900 border-gray-300 white:border-gray-700 text-blue-600 shadow-sm white:focus:ring-offset-gray-800"
                type="checkbox" name="all-select" id="all-select">
            <label class="checkbox-label" for="all - select"> Tout selectionner</label>
        </li>
        @foreach ($categories as $categorie)
            <li class="checkbox-wrapper">
                <input
                    class="rounded white:bg-gray-900 border-gray-300 white:border-gray-700 text-blue-600 shadow-sm white:focus:ring-offset-gray-800"
                    type="checkbox" name="{{ $categorie->name }}" id="{{ $categorie->name }}">
                <label class="checkbox-label" :for="{{ $categorie->name }}"> {{ $categorie->name }}</label>
            </li>
        @endforeach
</div>
