<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="md:container md:mx-auto rounded-lg mt-5 bg-white p-5">
        <form action="{{ route('posts.store') }}" class="row g-3 mx-2" method="POST" enctype='multipart/form-data'>
            @csrf

            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                <label for="title">Title</label>
                <x-text-input type="text" name="title" id="title" class="form-control mt-2"
                    placeholder="Enter Title ... " value="{{ old('title') }}" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                <label for="sub_title">Sub Title</label>
                <x-text-input type="text" name="sub_title" id="sub_title" class="form-control mt-2"
                    placeholder="Enter Sub Title ..." value="{{ old('sub_title') }}" />
                <x-input-error class="mt-2" :messages="$errors->get('sub_title')" />
            </div>

            <div class="col-sm-12 col-md-12 form-group mt-2 p-2">
                <label for="content">Content</label>
                <textarea name="content" class="form-control mt-2" id="content" rows="4">{{ old('content') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('content')" />
            </div>

            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                <label for="image1">Photo</label>
                <x-text-input type="file" name="image1" id="image1" class="form-control p-2 mt-2" />
                <x-input-error class="mt-2" :messages="$errors->get('image1')" />
            </div>

            <div class="col-sm-12 col-md-6 form-group mt-2 p-2 d-flex justify-content-center">

            </div>

            <label for="image2">More Images (<span class="text-secondary">Optional</span>)</label>

            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">

                <x-text-input type="file" name="image2" id="image2" class="form-control p-2 mt-2" />
                <x-input-error class="mt-2" :messages="$errors->get('image2')" />
            </div>

            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">
                <x-text-input type="file" name="image3" id="image3" class="form-control p-2 mt-2" />
                <x-input-error class="mt-2" :messages="$errors->get('image3')" />
            </div>

            <div class="col-sm-12 col-md-3 form-group mt-2 p-2">
                <x-text-input type="file" name="image4" id="image4" class="form-control p-2 mt-2" />
                <x-input-error class="mt-2" :messages="$errors->get('image4')" />
            </div>

            <div class="col-sm-12 col-md-3 form-group mt-2 p-2 d-flex justify-content-center">
                <x-text-input type="file" name="image5" id="image5" class="form-control p-2 mt-2" />
                <x-input-error class="mt-2" :messages="$errors->get('image5')" />
            </div>

            <div class="col-sm-12 col-md-4">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control px-3 py-2 rounded-1 mt-2">
                    <option value="" disabled>Select Category</option>
                    <option value="Main Dish">Main Dish</option>
                    <option value="Dessert">Dessert</option>
                    <option value="Bread">Bread</option>
                    <option value="Side Dish">Side Dish</option>
                    <option value="Salad">Salad</option>
                    <option value="Soup">Soups</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Appetizer">Appetizers</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="cuisine">Cuisine</label>
                <select name="cuisine" id="cuisine" class="form-control px-3 py-2 rounded-1 mt-2">
                    <option value="" disabled>Select Cuisine</option>
                    <option value="Lebanes">Lebanese</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Spanish">Spanish </option>
                    <option value="Greek">Greek</option>
                    <option value="Italian">Italian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Indian">Indian</option>
                    <option value="Mexican">Mexican</option>
                    <option value="American">American</option>
                    <option value="Thai">Thai</option>
                    <option value="Chinese">Chinese</option>
                    <option value="French">French</option>
                </select>
            </div>

            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                <label for="recipes">Recipes</label>
                <textarea name="recipes" class="form-control mt-2" id="recipes" rows="4">{{ old('recipes') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('recipes')" />
            </div>

            <div class="col-sm-12 col-md-6 form-group mt-2 p-2">
                <input type="text" name="date" class="form-control mt-2" value="<?php echo date('y-m-d'); ?>" hidden>
                <x-input-error class="mt-2" :messages="$errors->get('date')" />
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="btn border-2 border-yellow-400 hover:bg-yellow-400 text-black rounded-lg">Submit</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary ms-3">Back</a>
            </div>

        </form>
    </div>

</x-app-layout>
