@extends('frontend.main_master')
@section('main')

@section('title')
Contact | RiyadMS Website
@endsection

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-map -->
    <div id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d97000.82656065776!2d34.39340213086262!3d31.483156192969886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1653282218161!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    <!-- contact-map-end -->

    <!-- contact-area -->
    <div class="contact-area">
        <div class="container">

            <form action="{{ route('store.message') }}" class="contact__form" method="post">
                @csrf 

                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Enter your name*" name="name" required>
                        <!--  
                        @error('name')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                        -->
                    </div>
                    <div class="col-md-6">
                        <input type="email" placeholder="Enter your mail*" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Enter your subject*" name="subject" required>
                    </div>
                    <div class="col-md-6">
                        <input type="number" placeholder="Your Phone*" name="phone" required>
                    </div>
                </div>
                <textarea id="message" placeholder="Enter your massage*" name="message" required></textarea>

                <button type="submit" class="btn">send massage</button>

            </form>
        </div>
    </div>
    <!-- contact-area-end -->


    <!-- contact-info-area -->
    <section class="contact-info-area">

        @php 
        $allfooter = App\Models\Footer::find(1);
        @endphp

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png' ) }}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">address line</h4>
                            <span>{{ $allfooter->address }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png') }}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Phone Number</h4>
                            <span>{{ $allfooter->number }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png') }}" alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Mail Address</h4>
                            <span>{{ $allfooter->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-area-end -->

    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

@endsection