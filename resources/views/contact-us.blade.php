@extends('layout.main')
@section('content')
    <div class="header-title ken-burn-center white" data-parallax="scroll" data-position="top" data-natural-height="650"
        data-natural-width="1920" data-image-src="assets/images/bg-2.jpg">
        <div class="container" style="margin-top: 0px; opacity: 1;">
            <div class="title-base" style="margin-top: 113.5px;">
                <hr class="anima">
                <h1>Contact Us</h1>
                <p>Home / Contact Us</p>
            </div>
        </div>
    </div>
    <div class="section-empty section-item">

        <div class="container content">
            <div class="row">
                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.203854852073!2d76.87614577495981!3d28.713453180402418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0ba5cbdd1a27%3A0x45952589b86e366!2sALKO%20PLUS%20TECHNOSAFE%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1767615420726!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-6">
                    <h2>Send a message</h2>
                    <p class="text-color no-margins">We reply ASAP</p>
                    <hr class="space s" />
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" value="{{ old('name') }}" placeholder="Name" type="text"
                                    class="form-control form-value @error('name') is-invalid @enderror">

                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input id="email" name="email" value="{{ old('email') }}" placeholder="Email" type="email"
                                    class="form-control form-value @error('email') is-invalid @enderror">

                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="space s" />

                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="message" name="message"
                                    class="form-control form-value @error('message') is-invalid @enderror"
                                    placeholder="Message">{{ old('message') }}</textarea>

                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <hr class="space s" />
                                <button class="anima-button btn-border btn-sm btn" type="submit">
                                    <i class="fa fa-mail-reply-all"></i> Send message
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-6">
                    <hr class="space visible-xs" />
                    <h2>How to reach us</h2>
                    <p class="text-color no-margins">You can reach by follow the details</p>
                    <hr class="space s" />
                    <div class="row">

                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li>
                                    <i class="fa-li fa fa-home"></i>
                                    Plot No. 69-70, Sector-17, HSIIDC Industrial Estate, Bahadurgarh,
                                    Haryana-124507, India

                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-skype"></i> Alko Plus</li>
                                <li><i class="fa-li fa fa-headphones"></i> 777-000-7376</li>
                                <li><i class="fa-li fa fa-envelope-o"></i> info@alkoplus.com</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="space m" />
                    <div class="btn-group social-group btn-group-icons">
                        <a target="_blank" href="#" data-social="share-facebook" data-toggle="tooltip" data-placement="top"
                            title="Facebook">
                            <i class="fa fa-facebook text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip" data-placement="top"
                            title="Twitter">
                            <i class="fa fa-twitter text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" data-placement="top"
                            title="Google+">
                            <i class="fa fa-google-plus text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-linkedin" data-toggle="tooltip" data-placement="top"
                            title="LinkedIn">
                            <i class="fa fa-linkedin text-s circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection