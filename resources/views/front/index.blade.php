@extends('layouts.front.app')
@section('content-front')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1557821552-17105176677c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<div class="container mt-4">
    <div class="text-center mb-3 mt-3">
        <h1>Kategori Produk</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1553754507-b3f37c9f11a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Kategori Pertama</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1553754507-b3f37c9f11a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Kategori Kedua</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1553754507-b3f37c9f11a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Kategori Ketiga</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-3 mt-3">
        <h1>Promo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1561069934-eee225952461?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Produk Pertama</h5>
                        </div>
                        <div class="card-body text-right">
                            <p class="card-text" style="text-decoration: line-through;">Rp. 15.000,00</p>
                            <p class="card-text">Rp. 10.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1561069934-eee225952461?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Produk Kedua</h5>
                        </div>
                        <div class="card-body text-right">
                            <p class="card-text" style="text-decoration: line-through;">Rp. 15.000,00</p>
                            <p class="card-text">Rp. 10.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1561069934-eee225952461?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Produk Ketiga</h5>
                        </div>
                        <div class="card-body text-right">
                            <p class="card-text" style="text-decoration: line-through;">Rp. 15.000,00</p>
                            <p class="card-text">Rp. 10.000,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-3 mt-3">
        <h1>Terbaru</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1522780550166-284a0288c8df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Produk Pertama</h5>
                        </div>
                        <div class="card-body text-right">
                            <p class="card-text">Rp. 10.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1522780550166-284a0288c8df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Produk Kedua</h5>
                        </div>
                        <div class="card-body text-right">
                            <p class="card-text">Rp. 10.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1522780550166-284a0288c8df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                        <div class="card-header">
                            <h5 class="card-text">Produk Ketiga</h5>
                        </div>
                        <div class="card-body text-right">
                            <p class="card-text">Rp. 10.000,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="text-center">
        <h5>Terlaris</h5>
    </div>
    <div class="text-justify">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="text-center mb-3">
        <button type="button" class="btn btn-outline-secondary">Baca Selengkapnya</button>
    </div>
</div>
@endsection