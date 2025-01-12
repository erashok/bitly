@extends('layouts.app')

@section('content')

    <div class="container py-5 pb-lg-8"> 
        <div class="row">
          <div class="col-lg-12 d-flex flex-column py-5">
            <h5 class="mb-3 fw-600">Terms of Service for Trimuly.com</h5>
            <p>Welcome to Trimuly.com. By using our URL shortening services, including any features, functionality, or services offered, you agree to abide by the following terms and conditions. Please read these terms carefully before using our services.</p>

            <h5 class="mb-3 fw-600">General Use</h5>
            <p>Trimuly.com provides a URL shortening service that allows users to create shortened versions of URLs. By using our service, you acknowledge and agree to comply with these terms, whether as a guest or a registered user.</p>
            
            <h5 class="mb-3 fw-600">Conditions of Use</h5>
            <p>To maintain the integrity of the service, the following conditions apply:</p>

            <ul>
                <li><strong>Inactive URLs:</strong> Short URLs that do not receive at least one click per month may be disabled.</li>
                <li><strong>Reassignment of Inactive URLs:</strong> Disabled URLs may be made available for other users to create new links.</li>
                <li><strong>Prohibited Content:</strong> You may not use our service to shorten URLs that lead to:</li>
                <ul>
                    <li>Copyrighted content, unauthorized streaming, or pirated materials.</li>
                    <li>Malware, phishing, viruses, or any form of malicious content.</li>
                    <li>Abusive, pornographic, violent, or discriminatory content.</li>
                    <li>Content related to drugs, weapons, or illegal substances.</li>
                    <li>Offensive or explicit content that causes discomfort to users.</li>
                    <li>Pages with pop-ups, scripts, or malicious code.</li>
                    <li>Dead or expired URLs, or pages that lead to other redirections.</li>
                </ul>
            </ul>
            <p>Any URLs violating these conditions will be disabled or deleted, and appropriate actions will be taken, including removal without notice.</p>
            <h5 class="mb-3 fw-600">Requesting Changes</h5>
            <p>If you wish to request updates or corrections to a shortened URL you’ve created, please contact us with the long URL and corresponding short URL. Our team will evaluate the request and make changes where applicable.</p>

            <h5 class="mb-3 fw-600">Premium Service</h5>
            <p>Trimuly.com offers a premium service with enhanced features, including:</p>
            <ul>
                <li><strong>Advanced features:</strong> Full dashboard access, detailed link statistics, custom URL options, and QR codes.</li>
                <li><strong>Business Applications:</strong> Ideal for marketing, ad campaigns, business use, email marketing, and traffic redirection.</li>
                <li><strong>Increased Control:</strong> Customizable shortened links with words and numbers, API access, and browser extensions.</li>
            </ul>
            <p>We recommend upgrading to premium for greater control over your shortened links, as the free service may have limitations.</p>
            <h5 class="mb-3 fw-600">Disclaimer</h5>
            <p>While Trimuly.com offers a free URL shortening service, we cannot guarantee uninterrupted, error-free service. The service is provided on an "as-is" basis. We do not accept responsibility for any damages or losses incurred by the use of this site.</p>


            <h5 class="mb-3 fw-600">User Responsibility</h5>
            <p>By using Trimuly.com, you are fully responsible for the actions you take and the content you share through our service. You agree to use your own judgment and exercise caution before making decisions based on information obtained from our site.</p>

            <h5 class="mb-3 fw-600">Errors and Omissions</h5>
            <p>While we strive for accuracy, we cannot guarantee that the information or services provided on the site are error-free. You agree to verify any information before taking action based on it.</p>

            <h5 class="mb-3 fw-600">No Guarantees</h5>
            <p>Trimuly.com does not guarantee specific results from the use of the service. Past performance or success stories are not indicative of future results. We provide tools and resources to help users succeed, but we make no guarantees regarding outcomes.</p>

            <h5 class="mb-3 fw-600">Limitation of Liability</h5>
            <p>By using our services, you agree to hold Trimuly.com harmless from any losses, damages, or consequences resulting from the use of our service. Our liability is limited to the fullest extent permitted by law. We will not be liable for indirect, special, incidental, or consequential damages arising from the use or inability to use the service.

                All services, information, and content are provided "as-is" and without any warranties, express or implied, including but not limited to warranties of merchantability or fitness for a particular purpose.</p>

            <h5 class="mb-3 fw-600">Changes to Terms</h5>
            <p>Trimuly.com reserves the right to modify or update these Terms of Service at any time. The most current version of the terms will always be available on this page. By continuing to use our service after changes are posted, you agree to the updated terms.</p>

            <h5 class="mb-3 fw-600">Contact Us</h5>
            <p>If you have any questions about these terms or need further clarification, please contact us through the contact form on Trimuly.com.</p>

            
          </div>
        </div>
        <footer class="container">
            <p class="text-center">Copyrigh © <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> <a href="{{ url('/') }}" class="text-decoration-none">Trimuly</a>. All Rights Reserved.</p>
          </footer>
      </div>

@endsection