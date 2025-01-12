@extends('layouts.app')

@section('content')

    <div class="container py-5 pb-lg-8"> 
        <div class="row">
          <div class="col-lg-12 d-flex flex-column py-5">
            <h5 class="mb-3 fw-600">Simple and Fast URL Shortener</h5>
            <p>Trimuly makes shortening long links quick and easy! Whether it’s from Instagram, Facebook, YouTube, Twitter, LinkedIn, WhatsApp, TikTok, blogs, or other sites—just paste the long URL and click the Shorten URL button. You’ll receive a shortened URL in seconds, ready to be shared across websites, chat apps, and emails.</p>

            <h5 class="mb-3 fw-600">Shorten, Share, and Track</h5>
            <p>With Trimuly, you can:</p>

            <ul>
                <li><strong>Shorten links</strong> for easy sharing on social media, blogs, ads, forums, emails, and more.</li>
                <li><strong>Track your link performance:</strong> Monitor the number of clicks on your shortened URL, making it perfect for business and project insights.</li>
                
            </ul>

            <h5 class="mb-3 fw-600">Why Choose Trimuly?</h5>

            <ul>
                <li><strong>Fast & Easy: </strong> Simply paste your long URL and get a shortened link instantly.</li>
                <li><strong>Flexible: </strong> No matter the length, ShortURL will shorten any link.</li>
                <li><strong>Secure: </strong> Enjoy fast and safe service with HTTPS protocol and data encryption.</li>
                <li><strong>Statistics: </strong> Keep track of how many clicks your shortened URL receives with our built-in click counter.</li>
                <li><strong>Reliable: </strong> We remove links that spread spam, viruses, or malware to keep you safe.</li>
                <li><strong>Compatible: </strong> Our service works seamlessly on smartphones, tablets, and desktops.</li>
            </ul>
            <p>ShortURL makes it simple to shorten, share, and track your links securely and efficiently. <a class="text-decoration-none" href="{{ url('/') }}">Try it now!</a>

            </p>
          </div>
        </div>

        {{-- <div class="row">
            <h5 class="mb-3 fw-600">Why Choose Trimuly?</h5>
            <div class="col-lg-4">
              <div class="featured-box text-center">
                <div class="featured-box-icon text-primary"> <i class="far fa-thumbs-up"></i></div>
                <h5 class="fw-600">Fast & Easy</h5>
                <p class="text-3">Simply paste your long URL and get a shortened link instantly.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="featured-box text-center">
                <div class="featured-box-icon text-primary"> <i class="far fa-paper-plane"></i></div>
                <h4 class="fw-600">Flexible</h4>
                <p class="text-3">No matter the length, ShortURL will shorten any link.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="featured-box text-center">
                <div class="featured-box-icon text-primary"> <i class="far fa-eye"></i></div>
                <h4 class="fw-600">Secure</h4>
                <p class="text-3">Enjoy fast and safe service with HTTPS protocol and data encryption.</p>
              </div>
            </div>

            <div class="col-lg-4">
                <div class="featured-box text-center">
                  <div class="featured-box-icon text-primary"> <i class="far fa-eye"></i></div>
                  <h4 class="fw-600">Statistics</h4>
                  <p class="text-3">Keep track of how many clicks your shortened URL receives with our built-in click counter.</p>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="featured-box text-center">
                  <div class="featured-box-icon text-primary"> <i class="far fa-eye"></i></div>
                  <h4 class="fw-600">Reliable</h4>
                  <p class="text-3">We remove links that spread spam, viruses, or malware to keep you safe.</p>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="featured-box text-center">
                  <div class="featured-box-icon text-primary"> <i class="far fa-eye"></i></div>
                  <h4 class="fw-600">Compatible</h4>
                  <p class="text-3">Our service works seamlessly on smartphones, tablets, and desktops.</p>
                </div>
              </div>
          </div> --}}

          <footer class="container">
            <p class="text-center">Copyrigh © <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> <a href="{{ url('/') }}" class="text-decoration-none">Trimuly</a>. All Rights Reserved.</p>
          </footer>
      </div>

@endsection
