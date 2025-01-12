@extends('layouts.app')

@section('content')

    <div class="container py-5 pb-lg-8"> 
        <div class="row">
          <div class="col-lg-12 d-flex flex-column py-5">
            <h5 class="mb-3 fw-600">Privacy Policy for Trimuly.com</h5>
            <p>At Trimuly.com, we are committed to protecting your privacy. This privacy policy outlines how we collect, use, and safeguard your personal information when you visit or interact with our site. By using our website, you agree to the practices described in this policy.</p>

            <h5 class="mb-3 fw-600">Information We Collect</h5>
            <p>We collect various types of personal information when you use our site:</p>
            <ul>
                <li><strong>Personal Information:</strong> When you sign up for services, subscribe to our newsletter, or contact us, we may collect information such as your name, email address, and any other information you choose to provide.</li>
                <li><strong>Usage Data:</strong> We automatically collect information about your interaction with our site, such as your IP address, browser type, operating system, device details, and browsing behavior. This helps us analyze trends and improve the overall user experience.</li>
            </ul>
            
            <h5 class="mb-3 fw-600">How We Use Your Information</h5>
            <p>The personal information we collect is used to:</p>

            <ul>
                <li>Provide and improve our services.</li>
                <li>Customize your experience on the site and offer personalized content.</li>
                <li>Respond to your inquiries and provide customer support.</li>
                <li>Send relevant updates and promotional communications, unless you opt out.</li>
            </ul>

            <h5 class="mb-3 fw-600">Information Sharing and Disclosure</h5>
            <p>We respect your privacy and do not sell or rent your personal information to third parties. However, we may share your data with trusted third parties if necessary to:</p>

            <ul>
                <li>Provide our services (e.g., payment processors, email delivery services).</li>
                <li>Comply with legal obligations or to protect the rights, property, or safety of Trimuly.com, our users, or others.</li>
            
            </ul>

            <h5 class="mb-3 fw-600">Data Security</h5>
            <p>We use reasonable security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, please be aware that no method of transmission over the internet is 100% secure, and we cannot guarantee complete security.</p>

            <h5 class="mb-3 fw-600">Your Rights and Choices</h5>
            <p></p>
            <ul>
                <li><strong>Marketing Communications:</strong> You can opt out of receiving marketing emails from us at any time by following the unsubscribe instructions in our emails or by contacting us directly.</li>
                <li><strong>Access and Control:</strong> You have the right to access, correct, or delete your personal information by contacting us.</li>
                
            </ul>

            <h5 class="mb-3 fw-600">Cookies and Tracking Technologies</h5>
            <p>We use cookies to enhance your experience and provide personalized content. Cookies are small text files stored on your device that help us recognize you and remember your preferences.

                We may also use third-party advertising services that may use cookies or similar technologies to deliver personalized ads based on your browsing behavior. You can manage cookie preferences through your browser settings, but note that disabling cookies may affect some features of our site.</p>
           
            <h5 class="mb-3 fw-600">Changes to This Privacy Policy</h5>
            <p>Trimuly.com reserves the right to update or modify this privacy policy at any time. Any changes will be posted on this page with an updated revision date. By continuing to use our site, you consent to any changes made to this policy.</p>

            <h5 class="mb-3 fw-600">Contact Us</h5>
            <p>If you have any questions or concerns about our privacy policy or need further information, please contact us through the contact form on Trimuly.com.</p>

          </div>
        </div>
        <footer class="container">
            <p class="text-center">Copyrigh © <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> <a href="{{ url('/') }}" class="text-decoration-none">Trimuly</a>. All Rights Reserved.</p>
          </footer>
      </div>

@endsection