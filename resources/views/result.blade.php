@extends('layouts.app')

@section('head')
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url($url->short_url) }}">
    <meta property="og:title" content="Check out this shortened URL">
    <meta property="og:description" content="This is a shortened URL for easy sharing. Click to visit it!">
    <meta property="og:image" content="{{ asset('path/to/your-image.jpg') }}"> <!-- Optional, provide a preview image -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Check out this shortened URL">
    <meta name="twitter:description" content="This is a shortened URL for easy sharing. Click to visit it!">
    <meta name="twitter:image" content="{{ asset('path/to/your-image.jpg') }}"> <!-- Optional, provide a preview image -->
    <link rel="icon" href="{{ asset('favicon.ico') }}"> <!-- Favicon for the site -->
@endsection

@section('content')
    <h1 class="text-2xl font-bold mb-4">Shortened URL</h1>
    <div class="bg-white p-6 rounded shadow-md">
        <p class="mb-2">Short URL:</p>
        <div class="flex items-center">
            <input type="text" id="short-url" value="{{ url($url->short_url) }}" class="border rounded p-2 w-full mr-2" readonly>
            <button id="copy-btn" class="bg-blue-500 text-white px-4 py-2 rounded">Copy</button>
        </div>

        <p class="mt-4">QR Code:</p>
        <div id="qr-code-container" class="mt-4">
            {!! $qrCode !!}
        </div>

        <button id="download-btn" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Download QR Code</button>

        <p class="mt-4">Share on Social Media:</p>
        <div class="flex space-x-4 mt-2">
            <a href="https://twitter.com/intent/tweet?text=Check+out+this+shortened+URL:+{{ url($url->short_url) }}"
               target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded">Twitter</a>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url($url->short_url) }}"
               target="_blank" class="bg-blue-700 text-white px-4 py-2 rounded">Facebook</a>
            <a href="https://www.linkedin.com/shareArticle?url={{ url($url->short_url) }}"
               target="_blank" class="bg-blue-900 text-white px-4 py-2 rounded">LinkedIn</a>
            <a href="https://wa.me/?text=Check+out+this+shortened+URL:+{{ url($url->short_url) }}"
               target="_blank" class="bg-green-500 text-white px-4 py-2 rounded">WhatsApp</a>
        </div>

        <a href="{{ route('home') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4 inline-block">Back</a>
    </div>
@endsection

@section('scripts')

    <script>
        // Copy URL to Clipboard
        document.getElementById('copy-btn').addEventListener('click', function () {
            const shortUrl = document.getElementById('short-url');
            shortUrl.select();
            document.execCommand('copy'); // Fallback for older browsers
            alert('URL copied to clipboard!');
        });

        // Download QR Code as PNG
        document.getElementById('download-btn').addEventListener('click', function () {
            const qrCodeSvg = document.querySelector('#qr-code-container svg');

            if (!qrCodeSvg) {
                alert('QR Code not found!');
                return;
            }

            // Serialize the SVG to a string
            const svgData = new XMLSerializer().serializeToString(qrCodeSvg);

            // Create a canvas element to convert the SVG to an image
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            const img = new Image();

            img.onload = function () {
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);

                // Convert canvas to PNG and trigger download
                const pngFile = canvas.toDataURL('image/png');
                const downloadLink = document.createElement('a');
                downloadLink.href = pngFile;
                downloadLink.download = 'qr-code.png';
                downloadLink.click();
            };

            // Set the source of the image to the SVG data
            img.src = 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(svgData);
        });
    </script>
@endsection
