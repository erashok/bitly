@extends('layouts.app')

@section('content')

    <div class="container py-4 py-lg-0">
        <div class="row min-vh-100">
          <div class="col-lg-7 align-items-center d-flex flex-column py-5">
              <div class="row py-5 my-auto text-center text-lg-start">
                <div class="col-12 mx-auto">
                  <h1 class="text-15 d-inline-block fw-700 mb-2">Surli: In Short. Readable. Branded.</h1>
                </div>
                <div class="col-md-10 col-lg-10 col-xl-10 mx-auto me-lg-auto ms-lg-0">
                  <p class="text-5 text-muted mb-3">Use our URL shortener, QR Codes, and landing pages to engage your audience and connect them to the right information. </p>
                    <div class="subscribe-form">
                            <form action="{{ route('shorten') }}" method="POST" id="shorten-form">
                                @csrf
                                <div class="input-group">
                                    <input type="url" name="original_url" id="original_url" class="form-control border-2" required placeholder="https://example.com/my-long-url" autocomplete="off">
                                    <button id="subscribe-form-submit" name="subscribe-form-submit" class="btn btn-primary px-4 shadow-none" type="submit">
                                        <span class="d-none d-sm-block">Get your link for free</span>
                                        <span class="text-4 d-block d-sm-none"><i class="fas fa-arrow-right"></i></span>
                                    </button>
                                    
                                </div>
                            </form>
                    </div>
                </div>
              </div>
          </div>
          <div class="col-lg-5 my-auto py-lg-5">
            <div class="row mx-0 py-4 mb-4 mb-lg-0">
              <div class="col-12 mx-auto">
               <img src="{{ asset('frontend/images/Untitled-1w34.svg') }}" class="img-responsive" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="d-flex gap-3 list-style-none">
                    <li><a href="">About Trimuly</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Cookie Policy</a></li>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Help Center</a></li>
                </ul>
            </div>
        </div>
      </div>
      <!-- Bootstrap Modal -->
    <div class="modal fade" id="shortUrlModal" tabindex="-1" aria-labelledby="shortUrlModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-600 text-7 mx-auto" id="shortUrlModalLabel">Your link is ready! 🎉</h5>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="copy-text mb-3">
                                    <input type="text" id="short-url" class="text" readonly />
                                    <button id="copy-btn"><i class="fa fa-clone"></i></button>
                                </div>
                                <div class="social-icon mb-3 pb-3">
                                    <a href="#">
                                        <div class="bg-ico" id="facebook"><i class="fab fa-facebook social  facebook fa-2x"></i></div>
                                    </a>
                                    <a href="#">
                                        <div class="bg-ico" id="pinterest"><i class="fab fa-pinterest social  pinterest fa-2x"></i></div>
                                    </a>
                                    <a href="#">
                                        <div class="bg-ico" id="twitter"><i class="fab fa-twitter social  twitter fa-2x"></i></div>
                                    </a>
                                    <a href="#">
                                        <div class="bg-ico" id="instagram"><i class="fab fa-instagram social  instagram fa-2x"></i></div>
                                    </a>
                                    <a href="#">
                                        <div class="bg-ico" id="tumblr"><i class="fab fa-tumblr social  tumblr fa-2x"></i></div>
                                    </a>
                                    <a href="#">
                                        <div class="bg-ico" id="whatsapp"><i class="fab fa-whatsapp social  whatsapp fa-2x"></i></div>
                                    </a>
                                    <a href="#">
                                        <div class="bg-ico" id="youtube"><i class="fab fa-youtube social  youtube fa-2x"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <div id="qr-code" class="display-none"></div>
                        </div>
                    </div>
            </div>
        </div>
</div>

@endsection
