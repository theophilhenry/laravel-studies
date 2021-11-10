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
    <h1>Product Table</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ dd($data) }} --}}
            <tr>
                <td>ID</td>
                <td>{{ $data->id }}</td>
            </tr>
                
            <tr>
                <td>Name</td>
                <td>{{ $data->product_name }}</td>
            </tr>
                
            <tr>
                <td>Price</td>
                <td>{{ $data->product_selling_price }}</td>
            </tr>
                
            <tr>
                <td>Stock</td>
                <td>{{ $data->product_stock }}</td>
            </tr>

            <tr>
                <td>Category</td>
                <td>{{ $data->category->category_name }}</td>
            </tr>
        </tbody>
    </table>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
