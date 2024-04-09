@include('userpanel.layouts.header')

<main class="overflow-hidden">
    <div class="container my-3 p-2">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="card border-0">
                    <div class="card-header h2 bg-white text-center fw-bold text-indigo-900" id="head-line-font">

                        Simple recipes made for real, actual, everyday life.

                    </div>
                    @if (count($posts) >= 1)
                        @foreach ($posts as $post)
                            <div class="card-body">
                                <div class="container">
                                    <div class="h5">
                                        {{ $post->title }}
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div>
                                                @if ($post->image1)
                                                    <img src="{{ asset('storage/images/' . $post->image1) }}"
                                                        alt="" class="img-thumbnail">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="my-2">
                                                <p class="text-secondary indent-8">
                                                    {{ $post->content }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="{{ route('userpanel.show', $post->id) }}"
                                            class="btn bg-yellow-400 hover:border-yellow-400 hover:text-yellow-500 btn">Continue
                                            Reading <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                    <div class="border-1 border-dashed my-2">
                                    </div>
                                    <div class="px-3" style="word-spacing: 30px">
                                        <span class="text-secondary">{{ $post->date }} | {{ $post->cuisine }} |
                                            {{ $post->category }}</span>
                                        <div class="flex float-end text-secondary" style="word-spacing: 5px;">
                                            {{ $post->created_at->diffForHumans() }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="h4">
                            There is no Post yet.
                        </div>
                    @endif


                </div>
                <div class="w-full d-flex justify-content-center p-2 my-3">
                    <a href="{{ route('userpanel.index') }}"
                        class="btn rounded-lg bg-yellow-400 w-full hover:border-yellow-400">View All
                        Recipes</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="row container-fluid">

                    <div class="col-lg-12 w-72">

                        <div class="flex">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXPodEp1Zyixlyx1Rrq6JJlPm0hgg1pFeLNrxgt2bkYw&s"
                                alt="" class="img-thumbnail border-0 rounded-full bg-dark my-2">
                        </div>
                        <div class="containerp py-2">
                            <div class="h5">
                                Hi!
                                I am Kyaw Hsu Thway. This is my Blog for cooking recepies. And Pinch of Yum is my
                                little
                                corner of the internet!
                            </div>

                            <p class="text-secondary">
                                I'm the voice, author, and creator behind Pinch of Yum. What started as a casual
                                hobby
                                over 14 years ago in 2010 while I was working as a fourth grade teacher has now
                                grown
                                into a full-blown business (!!) that reaches millions of people with fun recipes
                                each
                                month, with content that has been featured on The Kitchn, CNN, Refinery29, Brit +
                                Co,
                                POPSUGAR, Huffington Post, The Everymom, PureWow, and more.

                                I live in Saint Paul, MN with my husband Bjork and our dog Sage. My favorite things
                                in
                                life are a big plate of pad Thai, sunny days, and going to the dog park.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 card border-0 my-4">
                        <div class="card-header h4 bg-white ">
                            Recent Posts
                        </div>

                        <div class="card-body">
                            @foreach ($recents as $recent)
                                <div class="card w-72 border-0">
                                    <div class="card-header bg-white">
                                        <a href="">{{ $recent->title }}</a>
                                    </div>
                                    @if ($recent->image1)
                                        <img src="{{ asset('storage/images/' . $recent->image1) }}" alt=""
                                            class="img-fluid my-1">
                                    @endif
                                </div>
                                <div class="card-footer flex justify-between bg-white border-bottom">
                                    <span class="text-secondary text-sm">{{ $recent->cuisine }}</span>
                                    <span class="text-secondary text-sm">|</span>
                                    <span class="text-secondary text-sm">{{ $recent->category }}</span>
                                    <a href="{{ route('userpanel.show', $recent->id) }}"
                                        class="btn bg-yellow-400 hover:border-yellow-400 hover:text-yellow-500 btn-sm"><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                        </div>
                        <div class="border-1 border-dashed my-2"></div>
                        @endforeach
                    </div>


                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="container my-3 p-2">
        <div class="row">
            <div class="col-lg-12 p-2">
                <div class="container-fluid">
                    <div class="h2 text-center my-5 text-indigo-900" id="head-line-font">Categories</div>
                    <div class="h5 text-center my-5 underline" id="head-line-font">Popular Categories</div>
                    <div class="row container">
                        <div class="col-lg-2 col-md-12 border-1 p-2 rounded-3 my-3 mx-auto">
                            <form action="{{ route('userpanel.home') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="category" value="Main Dish" hidden>
                                <button>
                                    <img src="{{ asset('storage/logos/maindish.jpg') }}" alt=""
                                        class="img-fluid w-full h-min">
                                    <p class="text-center py-4 text-4xl text-indigo-700" id="head-line-font">Main Dish
                                    </p>
                                </button>
                            </form>


                        </div>
                        <div class="col-lg-2 col-md-12 border-1 p-2 rounded-3 my-3 mx-auto">
                            <form action="{{ route('userpanel.home') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="category" value="Salad" hidden>
                                <button>
                                    <img src="{{ asset('storage/logos/salad.jpg') }}" alt=""
                                        class="img-fluid w-full">
                                    <p class="text-center py-4 text-4xl text-indigo-700" id="head-line-font">Salad</p>
                                </button>
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-12 border-1 p-2 rounded-3 my-3 mx-auto">
                            <form action="{{ route('userpanel.home') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="category" value="Dessert" hidden>
                                <button>
                                    <img src="{{ asset('storage/logos/dessert.jpg') }}" alt=""
                                        class="img-fluid w-full">
                                    <p class="text-center py-4 text-4xl text-indigo-700" id="head-line-font">Dessert
                                    </p>
                                </button>
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-12 border-1 p-2 rounded-3 my-3 mx-auto">
                            <form action="{{ route('userpanel.home') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="category" value="Breakfast" hidden>
                                <button>
                                    <img src="{{ asset('storage/logos/breakfast.jpg') }}" alt=""
                                        class="img-fluid w-full">
                                    <p class="text-center py-4 text-4xl text-indigo-700" id="head-line-font">Breakfast
                                    </p>
                                </button>
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-12 border-1 p-2 rounded-3 my-3 mx-auto">
                            <form action="{{ route('userpanel.home') }}" method="POST">
                                @csrf
                                @method('GET')
                                <input type="text" name="category" value="Bread" hidden>
                                <button>
                                    <img src="{{ asset('storage/logos/bread.jpg') }}" alt=""
                                        class="img-fluid w-full">

                                    <p class="text-center py-4 text-4xl text-indigo-700" id="head-line-font">Bread</p>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-3 p-2">
        <div class="row bg-gray-600 h-fit">
            <div class="col-lg-6 d-flex justify-content-center">
                <img src="{{ asset('storage/logos/newsletter.webp') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="row">
                    <div class="col-lg-12 my-3">
                        <div class="h4 text-yellow-400 text-center" id="head-line-font">
                            Get it now!
                        </div>
                        <div class="h3 text-white text-center">
                            NewsLetter
                        </div>
                        <p class="w-3/6 text-lg mx-auto my-2 text-white">
                            The eBook includes our most popular 25 recipes in a beautiful, easy to download format.
                            Enter your email and we'll send it right over!
                        </p>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <input type="text" class="rounded-lg me-3" placeholder="Enter Your Email Address...">
                        <button class="btn bg-yellow-400 hover:border-yellow-400 hover:text-yellow-400">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

@include('userpanel.layouts.footer')
