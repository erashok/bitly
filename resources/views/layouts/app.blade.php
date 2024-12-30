<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="trimuly">
    <link rel="icon" href="{{ asset('frontend/images/trimuly-icon.png') }}" type="image/png" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/stylesheet.css') }}" />
</head>
<body class="bg-gray-100">
    <!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 
<div id="main-wrapper"> 

@include('layouts.header')

 @yield('content')
 

@include('layouts.footer')


<!-- Script --> 
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script> 
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery-form/jquery.form.min.js') }}"></script>
<script src="{{ asset('frontend/js/theme.js') }}"></script> 
<script>
    let copyText = document.querySelector(".copy-text");
    copyText.querySelector("button").addEventListener("click", function () {
	let input = copyText.querySelector("input.text");
	input.select();
	document.execCommand("copy");
	copyText.classList.add("active");
	window.getSelection().removeAllRanges();
	setTimeout(function () {
		copyText.classList.remove("active");
	}, 2500);
});

</script>
<script>
    document.getElementById('shorten-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData(form);
        const modal = new bootstrap.Modal(document.getElementById('shortUrlModal'));
        const shortUrlInput = document.getElementById('short-url');
        const qrCodeContainer = document.getElementById('qr-code');

        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                shortUrlInput.value = data.short_url;
                qrCodeContainer.innerHTML = `<img src="data:image/png;base64,${data.qr_code}" alt="QR Code">`;
                modal.show();
            })
            .catch(error => console.error('Error:', error));
    });

    document.getElementById('copy-btn').addEventListener('click', function () {
        const shortUrlInput = document.getElementById('short-url');
        shortUrlInput.select();
        document.execCommand('copy');
        // alert('Short URL copied to clipboard!');
    });
</script>


</div>
</body>
</html>
