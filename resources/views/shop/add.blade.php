<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <form action="{{ route('product.add') }}" method="post" enctype="multipart/form-data" class="flex flex-col">
        @csrf
        <input type="text" value="{{ old('name') }}" name="name" placeholder="Name">
        <x-input-error :messages="$errors->get('name')" class="mt-2 input-error" />

        <input type="file" name="thumbnail" class="@error('thumbnail') is-invalid @enderror" accept="image/*" />
        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2 input-error" />

        <input type="number" name="price" value="{{ old('price') }}" placeholder="Price">
        <x-input-error :messages="$errors->get('price')" class="mt-2 input-error" />

        <input type="text" name="measurement" value="{{ old('measurement') }}" placeholder="Measurement">
        <x-input-error :messages="$errors->get('measurement')" class="mt-2 input-error" />

        <textarea name="desc" placeholder="Description">{{ old('desc') }}</textarea>
        <x-input-error :messages="$errors->get('desc')" class="mt-2 input-error" />


        <input type="file" name="variant[]" class="@error('variant.*') is-invalid @enderror" multiple accept="image/*"
            placeholder="Variant" />


        <input type="submit" value="Add">


    </form>
</body>

</html>
