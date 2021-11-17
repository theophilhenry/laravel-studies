<div class="portlet">
    <div class="portlet-title">
        <b>Tampilan Transaksi dari {{ $transaction->id }} - {{ $transaction->transaction_date }}</b>
    </div>

    <div class="portlet-body">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $product->product_image) }}" alt="">
                        <div class="caption">
                            <p align="center">{{ $product->product_name }}</p>
                            <hr>
                            <p>Kategori : {{ $product->category->category_name }}</p>
                            <p>Price : {{ $product->product_selling_price }}</p>
                            <p>Jumlah Beli : {{ $product->pivot->quantity }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>