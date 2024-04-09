@include('userpanel.layouts.header')

<main>
    <div class="container">
        <div class="card-header h2 bg-white text-center fw-bold text-indigo-900 border-bottom my-5" id="head-line-font">

            Recepies

        </div>
        <div class="row my-3 d-flex justify-content-center">
            <a class="btn rounded-lg bg-yellow-400 p-2 hover:text-dark hover:border-yellow-400 w-64 mx-5 my-2"
                data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                Cuisine
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cuisine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Lebanese" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Lebanese</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Turkey" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Turkey</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Spanish" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Spanish</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Greek" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Greek</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Italian" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Italian</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Japanese" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Japanese</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Indian" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Indian</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Mexican" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Mexican</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="American" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">American</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Thai" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Thai</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="Chinese" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Chinese</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="cuisine" value="French" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">French</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <a class="btn rounded-lg bg-yellow-400 p-2 hover:text-dark hover:border-yellow-400 w-64 mx-5 my-2"
                data-bs-toggle="offcanvas" href="#offcanCategory" role="button" aria-controls="offcanvasExample">
                Categories
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanCategory"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">Categories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Main Dish" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Main
                                    Dish</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Dessert" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Dessert</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Bread" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Bread</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Side Dish" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Side
                                    Dish</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Salad" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Salad</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Soups" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Soups</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Breakfast" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Breakfast</button>
                            </form>
                        </li>
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('userpanel.index') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="categories" value="Appetizers" hidden>
                                <button class="btn rounded-lg hover:border-yellow-900 underline p-2 my-3"
                                    type="submit">Appetizers</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-12 p-2 my-2">
                    <div class="card rounded-lg border-yellow-400 w-96 lg:h-96 md:h-fit">
                        <div class="card-body flex justify-between">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    @if ($post->image1)
                                        <img src="{{ asset('storage/images/' . $post->image1) }}" alt="..."
                                            class="img-fluid w-full">
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-12 p-2">
                                    <ul class="text-end">
                                        <li class="h3 my-1">{{ $post->title }}</li>
                                        <li class="text-secondary my-1">{{ $post->date }}</li>
                                        <li class="text-secondary my-1">{{ $post->cuisine }}</li>
                                        <li class="text-secondary my-1">{{ $post->category }}</li>
                                        <li class="text-secondary my-1">{{ $post->created_at->diffForHumans() }}</li>
                                        <li class="my-2">
                                            <a href="{{ route('userpanel.show', $post->id) }}"
                                                class="btn btn-secondary">See
                                                More</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="my-3">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>

    </div>
</main>

@include('userpanel.layouts.footer')
