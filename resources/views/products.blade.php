@extends('layout.main')
@section('content')
 <div class="header-title ken-burn-center white" data-parallax="scroll" data-position="top" data-natural-height="650" data-natural-width="1920" data-image-src="assets/images/bg-2.jpg">
        <div class="container" style="margin-top: 0px; opacity: 1;">
            <div class="title-base" style="margin-top: 113.5px;">
                <hr class="anima">
                <h1>Products</h1>
                <p>Home / Products</p>
            </div>
        </div>
    </div>
    <div class="section-bg-color section-item">
        <div class="container content">
            <div class="maso-list maso-30 list-sm-6">
                <div class="navbar navbar-inner">
                    <div class="navbar-toggle"><i class="fa fa-bars"></i><span>MENU</span><i class="fa fa-angle-down"></i>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav over inner ms-minimal maso-filters">
                            <li class="active"><a data-filter="maso-item">All</a></li>
                            <li><a data-filter="cat1">Head Protection</a></li>
                            <li><a data-filter="cat2">Fall Protection</a></li>
                            <li><a data-filter="cat3">Foot Protection</a></li>
                        </ul>
                    </div>
                </div>
                <div class="maso-box row">
                    <div data-sort="2" class="maso-item col-md-6 cat1 cat3">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-1.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Safety Helmets</h3>
                                    <hr class="anima">
                                    <p>
                                       ALKO PLUS range of Safety Helmets offers the combination of exceptiona...
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="4" class="maso-item col-md-6 cat2 cat3">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-2.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Yellow Business design</h3>
                                    <hr class="anima">
                                    <p>
                                        Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin
                                        odio suspendisse, nostra. Cumque facilis assumenda
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-6 cat1 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-3.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Sport studio</h3>
                                    <hr class="anima">
                                    <p>
                                        Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin
                                        odio suspendisse, nostra. Cumque facilis assumenda
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="3" class="maso-item col-md-6 cat1 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-4.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Photo editing</h3>
                                    <hr class="anima">
                                    <p>
                                        Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin
                                        odio suspendisse, nostra. Cumque facilis assumenda
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="5" class="maso-item col-md-6 cat2 cat1">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-5.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Ad Words Campaign</h3>
                                    <hr class="anima">
                                    <p>
                                        Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin
                                        odio suspendisse, nostra. Cumque facilis assumenda
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="6" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-6.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Seo project</h3>
                                    <hr class="anima">
                                    <p>
                                        Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin
                                        odio suspendisse, nostra. Cumque facilis assumenda
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="7" class="maso-item col-md-6 cat1 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-7.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>New York Conference</h3>
                                    <hr class="anima">
                                    <p>
                                        Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin
                                        odio suspendisse, nostra. Cumque facilis assumenda
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="8" class="maso-item col-md-6 cat2 cat3 cat4 cat5">
                        <div class="advs-box advs-box-side boxed-inverse" data-anima="fade-left" data-trigger="hover">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="{{ asset('assets/images/gallery/image-8.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Tech festival</h3>
                                    <hr class="anima">
                                    <p>
                                        Magnam excepturi parturient ante magnis, ullamcorper commodo excepturi sollicitudin
                                        odio suspendisse, nostra. Cumque facilis assumenda
                                    </p>
                                    <a class="btn-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection