@extends('master')

@section('detail_produk')
<div class="container my-5">
    <div class="col-md-8">
    <a href="/" class="btn btn-secondary mb-3">Kembali ke Laptop Si Unyil</a>
                        
        <div class="col-md-7">
            <img src="{{ asset('img/espresso.jpeg')}}" height="100px">  
            <h2 class="text-success">Espresso</h2>
            <h5 class="text-muted">Rp 15.000</h5>
            <h5>Deskripsi Produk:</h5>
            <p>Kopi hitam dengan rasa yang kuat dan aroma yang khas, dibuat dari ekstrak biji kopi pilihan. Disajikan dalam ukuran kecil, eitss, walaupun disajikan dalam ukuran kecil, jangan remehkan powernya, power rangers kah? aku yang pink, wekwekwek.</p>

        <div class="col-md-7">
            <img src="{{ asset('img/americano.jpeg')}}" height="100px">  
            <h2 class="text-success">Americano</h2>
            <h5 class="text-muted">Rp 20.000</h5>
            <h5>Deskripsi Produk:</h5>
            <p>Perpaduan espresso dan air panas dengan rasa kopi yang lebih ringan dan nyaman diminum, asal ga delapan shot aja. Teman terbaik buat nongki atau nugas lama di cafe biar berasa orang paling produktif sedunia, xixixi.</p>

        <div class="col-md-7">
            <img src="{{ asset('img/lattebaru.jpeg')}}"height="100px">  
            <h2 class="text success">Latte</h2>
            <h5 class="text-muted">Rp 25.000</h5>
            <h5>Deskripsi Produk:</h5>
            <p>Minuman yang dibuat dari campuran espresso dan susu yang lembut nan creamy. Cocok buat yang ingin ngopi tapi masih takut diserang rasa pahit kehidupan, eh,, rasa kopi maksudnya</p>

        <a href="/" type="button" class="btn btn-success">Beli Sekarang</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection