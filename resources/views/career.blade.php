@extends('layout.main')
@section('content')
    <div class="header-title ken-burn-center white" data-parallax="scroll" data-position="top" data-natural-height="650"
        data-natural-width="1920" data-image-src="{{ asset('assets/images/bg-2.jpg') }}">
        <div class="container" style="margin-top: 0px; opacity: 1;">
            <div class="title-base" style="margin-top: 113.5px;">
                <hr class="anima">
                <h1>Carrer</h1>
                <p>Home / Carrer</p>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Why Join Us?</h2>
                        <p>Career</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                    <a class="" href="images/image-1.jpg" data-lightbox-anima="fade-left">
                        <img src="{{ asset('assets/images/about.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 mt-3">
                    <p>
                        Alko Plus is one of the leading Personal Protective Equipment (PPE) manufacturing enterprise and is
                        rated among the finest Indian companies providing high quality PPE.
                    </p>
                    <p>
                        Headquartered in Bahadurgarh (Haryana), Alko Plus takes great pride in its ability to deliver a
                        magnificent product range with an all-round assurance of safety to its user. It is our endeavour in
                        Alko Plus to provide the finest and the best solution in the field of personal protection to our
                        valued customers. Our product range includes Safety Helmets, Safety Harnesses, Safety Nets, Safety
                        Shoes and PVC Gumboots.
                    </p>
                    <hr class="space s" />
                    <div class="anima">
                        <a href="{{route('contact-us')}}" class="btn btn-lg btn-border hidden-xs">Consult Us</a>
                    </div>
                </div>

            </div>
            <hr class="space s">
            <div class="row vertical-row">
               
                <div class="col-md-7">
                    <div class="title-base text-left">
                          <hr />
                        <h2>Submission form</h2>
                        <p>Career interest submission form</p>
                    </div>
                    <p>
                       Alko Plus is one of the leading Personal Protective Equipment (PPE) manufacturing enterprise and is rated among the finest Indian companies providing high quality PPE.
                    </p>
                    <hr class="space s">
                    <div class="row vertical-row">
                        <div class="col-md-9">
                            <form action="#" class="form-box form-ajax" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Name" type="text" class="form-control form-value"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input id="email" name="email" placeholder="Email" type="email" class="form-control form-value"
                                    required>
                            </div>
                        </div>
                           <hr class="space s" />
                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Contact No" type="text" class="form-control form-value"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Applied for the Post of" type="text" class="form-control form-value"
                                    required>
                            </div>
                        </div>
                           <hr class="space s" />
                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Current Designation" type="text" class="form-control form-value"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Total Experience" type="text" class="form-control form-value"
                                    required>
                            </div>
                        </div>
                           <hr class="space s" />
                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Current Org Name" type="text" class="form-control form-value"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Expected Salery ( CTC )" type="text" class="form-control form-value"
                                    required>
                            </div>
                        </div>
                           <hr class="space s" />
                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Highest Qualification" type="text" class="form-control form-value"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="" type="file" class="form-control form-value"
                                    required>
                            </div>
                        </div>
                        <hr class="space s" />
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="space s" />
                                <button class="anima-button btn-border btn-sm btn" type="submit"><i
                                        class="fa fa-mail-reply-all"></i>Apply now</button>
                            </div>
                        </div>
                        
                    </form>
                        </div>
                    </div>
                </div>
                 <div class="col-md-5">
                    <img src="{{ asset('assets/images/career.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection