<div class="portlet">
    <div class="portlet-title">
        <b>Tampilan Transaksi dari:{{ $data->$id }} - {{$data->transaction_date}}</b>
    </div>
    <div class="portlet-body">
        <div class="row">
            @foreach ($dataProduk as $dp)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxuczeiaHRecDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI"/>
                    <div class="caption">
                        <p align="center"><b>{{ $dp->generic_name }}</b></p>
                        <br>
                        <p>Kategori: {{ $dp->category->name }}</p>
                        <p>Harga: {{ number_format($dp->price,2) }}</p>
                        <p>Jumlah Beli: <b>{{ $dp->pivot->quantity }} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>