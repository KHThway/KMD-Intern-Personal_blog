@include('userpanel.layouts.header')
<main>
    <div class="container my-3 p-2">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="card border-0">
                    <div class="card-header h2 bg-white fw-bold text-indigo-900" id="head-line-font">
                        {{ $post->title }}

                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div>
                                <img src="{{ asset('storage/images/' . $post->image1) }}" alt=""
                                    class="img-fluid img-thumbnail">
                            </div>
                            <div class="my-2">
                                <p class="h4">
                                    {{ $post->sub_title }}
                                </p>
                            </div>
                            <div class="my-2">
                                <p class="indent-8">
                                    {{ $post->content }}
                                </p>
                            </div>
                            <div class="my-2">
                                @if ($post->image2)
                                    <img src="{{ asset('storage/images/' . $post->image2) }}" alt=""
                                        class="img-thumbnail">
                                @endif
                            </div>
                            <div class="my-2">
                                @if ($post->image3)
                                    <img src="{{ asset('storage/images/' . $post->image3) }}" alt=""
                                        class="img-thumbnail">
                                @endif
                            </div>
                            <div class="my-2">
                                @if ($post->image4)
                                    <img src="{{ asset('storage/images/' . $post->image4) }}" alt=""
                                        class="img-thumbnail">
                                @endif
                            </div>
                            <div class="my-2">
                                @if ($post->image5)
                                    <img src="{{ asset('storage/images/' . $post->image5) }}" alt=""
                                        class="img-thumbnail">
                                @endif
                            </div>
                            <div class="my-2">
                                <div class="h4">
                                    Recepies
                                </div>
                                <p class="px-3">
                                    {{ $post->recipes }}
                                </p>
                            </div>
                            <div class="border-1 border-dashed my-2">
                            </div>
                            <div class="px-3" style="word-spacing: 30px">
                                <span class="text-secondary">{{ $post->date }} | {{ $post->cuisine }} |
                                    {{ $post->category }} </span>
                                <div class="flex float-end text-secondary" style="word-spacing: 2px;">
                                    <i class="bi bi-hourglass me-2"></i>
                                    {{ $post->created_at->diffForHumans() }}
                                </div>
                            </div>


                        </div>
                    </div>
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
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

@include('userpanel.layouts.footer')
