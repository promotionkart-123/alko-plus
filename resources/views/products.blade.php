@extends('layout.main')

@section('content')

<style>
.cards-section {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 10px;
}

.nav-pills .nav-link {
    margin: 0 6px;
    padding: 8px 22px;
    border-radius: 30px;
    color: #444;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
    font-weight: 500;
}

.nav-pills .nav-link.active,
.nav-pills .nav-link:hover {
    background-color: #FF0000;
    border-color: #FF0000;
    color: #fff;
}

.product-item {
    flex: 0 0 48%;
    box-sizing: border-box;
    margin-bottom: 30px;
}

.product-card {
    display: flex;
    background-color: #ffffff;
    border-radius: 14px;
    padding: 20px;
    border: 1px solid #eee;
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.product-card img {
    flex: 0 0 40%;
    height: 120px;
    object-fit: cover;
    border-radius: 10px;
    margin-right: 15px;
}

.product-card .card-body {
    flex: 1;
}

.product-card h5 {
    font-weight: 600;
    margin-bottom: 6px;
    font-size: 18px;
}

.product-card p {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.product-card .btn {
    border-radius: 20px;
    padding: 6px 18px;
    font-size: 13px;
    border: 1px solid #FF0000;
    color: #FF0000;
    background: transparent;
}

.product-card .btn:hover {
    background-color: #FF0000;
    color: #fff;
}

@media (max-width: 767px) {
    .product-item {
        flex: 0 0 100%;
    }

    .product-card {
        flex-direction: column;
        align-items: start;
    }

    .product-card img {
        width: 100%;
        height: 160px;
        margin-bottom: 10px;
    }

    .nav-pills {
        flex-wrap: wrap;
        gap: 8px;
    }
}
</style>

<div class="header-title ken-burn-center white"
     data-parallax="scroll"
     data-image-src="assets/images/bg-2.jpg">
    <div class="container">
        <div class="title-base">
            <hr class="anima">
            <h1>Products</h1>
            <p><a href="{{ route('home') }}">Home</a> / Products</p>
        </div>
    </div>
</div>

<div class="section-empty section-item">
    <div class="container content">

        {{-- Category Filters --}}
        <ul class="nav nav-pills justify-content-center mb-5" id="productFilter">
            <li class="nav-item">
                <a class="nav-link active" data-filter="all" href="#">All</a>
            </li>
            @foreach($categories as $cat)
                <li class="nav-item">
                    <a class="nav-link" data-filter="cat{{ $cat->id }}" href="#">{{ $cat->name }}</a>
                </li>
            @endforeach
        </ul>

        {{-- Products Grid --}}
        <div class="cards-section">
            @foreach($subcategories as $sub)
                <div class="product-item cat{{ $sub->category_id }}">
                    <div class="product-card">
                        <img src="{{ asset($sub->banner_img ?? 'assets/images/gallery/default.jpg') }}"
                             alt="{{ $sub->name }}">
                        <div class="card-body">
                            <h5>{{ $sub->name }}</h5>
                            <p>{{ $sub->description ?? '-' }}</p>
                            <a href="{{ route('show.products', $sub->category_id) }}" class="btn btn-sm">View more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
document.querySelectorAll('#productFilter .nav-link').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        // Highlight active category
        document.querySelectorAll('#productFilter .nav-link').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.dataset.filter;

        // Show/hide products based on category
        document.querySelectorAll('.product-item').forEach(item => {
            if(filter === 'all' || item.classList.contains(filter)) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
</script>

@endsection
