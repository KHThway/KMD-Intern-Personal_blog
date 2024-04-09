<footer class="container-fluid bg-yellow-400">

    <div class="container">
        <div class="row p-5">
            <div class="col-lg-4 col-md-12">
                <div class="h2 text-center text-indigo-900" id="head-line-font">
                    Myy_Blog
                </div>
                <p class="text-xl text-gray-700 px-5 py-3">
                    This is my Blog for cooking recepies. And Myy_Bog is my little corner of the internet!
                </p>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card bg-yellow-400 border-0">

                    <div class="card-body px-5">
                        <ul>
                            <li class="my-2">
                                <a href="{{ route('userpanel.home') }}"
                                    class="btn text-gray-700 hover:text-gray-900">Home</a>
                            </li>
                            <li class="my-2">
                                <a href="{{ route('userpanel.index') }}"
                                    class="btn text-gray-700 hover:text-gray-900">Recepies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card bg-yellow-400 border-0">
                    <div class="h4 text-center text-indigo-900" id="head-line-font">
                        Get In Touch With
                    </div>
                    <div class="card-body text-center">
                        <a href="" class="btn btn-lg text-gray-700 hover:text-gray-900">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="" class="btn btn-lg text-gray-700 hover:text-gray-900">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="" class="btn btn-lg text-gray-700 hover:text-gray-900">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="" class="btn btn-lg text-gray-700 hover:text-gray-900">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="" class="btn btn-lg text-gray-700 hover:text-gray-900">
                            <i class="bi bi-twitter-x"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="container-fluid bg-white">
    <div class="text-center">
        <p>&copy 2024 created by KH.</p>
    </div>
</div>




{{-- bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

{{-- AOS Animation --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
{{-- AOS Init --}}
<script>
    AOS.init();
</script>
</body>

</html>
