@extends('layouts.app')

@section('content')

    <div class="container py-5 pb-lg-8"> 
        <div class="row">
          <div class="col-lg-12 d-flex flex-column py-5">
            <h5 class="mb-3 fw-600">Quick Help</h5>
            <p>Welcome to Trimuly.com! We're here to ensure you have a seamless experience. Below, you'll find answers to the most common questions and tips to navigate our platform efficiently.</p>

            <h5 class="mb-3 fw-600">Getting Started</h5>
            <p>Browse services, manage your preferences, or dive into the latest updates with ease.</p>

            <h5 class="mb-3 fw-600">Frequently Asked Questions</h5>
            <p><strong>Can I access Trimuly on mobile?</strong></p>
            <p>Absolutely! Our platform is optimized for both desktop and mobile devices.</p>

            <p><strong>Who do I contact for support?</strong></p>
            <p>Email us at <a href="mailto:support@trimuly.com">support@trimuly.com</a></p>


          </div>
        </div>

          <footer class="container">
            <p class="text-center">Copyrigh © <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> <a href="{{ url('/') }}" class="text-decoration-none">Trimuly</a>. All Rights Reserved.</p>
          </footer>
      </div>

@endsection
