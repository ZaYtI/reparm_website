<style>
    .product-ctr {
        display: flex;
    }

    .product-card-ctr {
        padding: 1rem;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 1rem;
        transition: all .5s ease-in-out;
    }

    .product-card {
        max-width: 350px;
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
        align-items: center;
    }

    .label-text {
        margin-left: 0.5rem;
        color: white;
    }
</style>

<x-app-layout>
    <x-banner />
    <x-top-section-title title="Nos Fusils" :decoration="true" />
    <div class="container mx-auto product-ctr">
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
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter
                                au panier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
