<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Product</title>
</head>

<body>
    <h1>Product dengan Kategory {{ $category_name }}</h1>
    <p>Data ditemukan berjumlah {{ count($listOfProducts )}} dari {{ $getTotalData }}</p>
    <h1>Product Table</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Production Price</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ dd($data) }} --}}
            @foreach ($listOfProducts as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_selling_price }}</td>
                    <td>{{ $product->product_production_price }}</td>
                    <td>{{ $product->category->category_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
