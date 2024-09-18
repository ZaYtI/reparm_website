<style>
    .product-ctr {
        display: flex;
    }

    .product-card-ctr {
        width: 100%;
        display: flex;
        align-items: flex-start;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 0.5rem;
        transition: all .5s ease-in-out;
    }

    .product-card {
        max-width: 300px;
        width: 100%;
        border-radius: 0.5rem;
        overflow: hidden;
        background: rgba(15, 10, 10, 0.31);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(15, 10, 10, 0.3);
    }

    .label {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .red {
        background-color: red;
    }

    .green {
        background-color: green;
    }

    .has-stock {
        display: flex;
        align-items: flex-start;
    }

    .label-text {
        margin-left: 0.5rem;
        color: white;
    }

    .btn-basket {
        background-color: #B54A29;
        padding: 0.2rem;
        border-radius: 0.5rem;
    }

    .add-basket-icons {
        fill: white;
        max-width: 30px;
    }
</style>

<x-app-layout>
    <x-banner />
    <x-top-section-title title="Nos Fusils" :decoration="true" />
    <div class="container mx-auto product-ctr">
        <div class="categories-wrapper">
            <x-selection-categorie :categories="$categories" />
        </div>
        <div class="product-card-ctr">
            @foreach ($products as $product)
                <div class=" product-card">
                    <a href="#">
                        <img src="{{ asset('images/banniere_accueil.jpg') }}" alt="">
                    </a>
                    <div class="px-5 pb-5 py-2">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $product->name }}</h5>
                        </a>
                        <div class="has-stock">
                            <div class="label green"></div>
                            <div class="label-text">
                                En stock
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ $product->price }}€</span>
                            <button class="btn-basket">
                                <img src="{{ asset('images/basket-icons.svg') }}" alt="add-basket-icons"
                                    class="add-basket-icons">
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
