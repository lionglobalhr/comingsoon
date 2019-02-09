@extends('layouts.app')

@section('content')
    <section class="page thanks">
        <div class="container">
            <div class="red-title text-center">FORM SENT</div>
            <div class="thanks-title pt-104 text-center d-grid">
                <span>Thank you.</span>
                <span>Your details and resume has been sent.</span>
                <span>Our Team will be in touch with you.</span>
            </div>
        </div>
        <a href="{{ url('/') }}" class="btn bg-red">CONTINUE</a>
    </section>
@endsection