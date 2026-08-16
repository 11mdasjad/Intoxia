<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Intoxia Technologies</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #0c1017; color: #f1f5f9; margin: 0; padding: 24px; }
        .card { max-width: 600px; margin: 0 auto; background: #161e2e; border: 1px solid #2d3748; border-radius: 12px; padding: 36px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); }
        .brand { font-size: 20px; font-weight: 800; color: #ffffff; letter-spacing: -0.02em; margin-bottom: 20px; }
        .brand span { color: #3b82f6; }
        h1 { font-size: 24px; color: #ffffff; margin-top: 0; margin-bottom: 16px; font-weight: 700; }
        p { color: #cbd5e1; font-size: 15px; line-height: 1.7; margin-bottom: 18px; }
        .highlight-box { background: #0c1017; border-left: 4px solid #3b82f6; border-radius: 4px; padding: 16px 20px; margin: 24px 0; }
        .highlight-box p { margin: 0; color: #94a3b8; font-size: 14px; }
        .cta-box { text-align: center; margin-top: 32px; padding-top: 24px; border-top: 1px solid #242e42; }
        .btn-wa { display: inline-block; background: #22c55e; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; font-size: 14px; margin-right: 12px; }
        .contact-info { margin-top: 24px; font-size: 13px; color: #64748b; line-height: 1.6; }
    </style>
</head>
<body>
    <div class="card">
        <div class="brand">INTOXIA <span>TECHNOLOGIES</span></div>
        <h1>Hello {{ $enquiry->name }},</h1>
        <p>Thank you for reaching out to Intoxia Technologies. We have received your project enquiry regarding <strong>{{ $enquiry->service }}</strong>.</p>
        
        <p>Our engineering and solutions team is reviewing your requirements. A senior technology consultant will connect with you within <strong>4–8 business hours</strong> to discuss your objectives, architecture recommendations, and next steps.</p>

        <div class="highlight-box">
            <p><strong>Your Enquiry Summary:</strong><br>
            Service: {{ $enquiry->service }}<br>
            Budget: {{ $enquiry->budget ?? 'Flexible' }}<br>
            Timeline: {{ $enquiry->timeline ?? 'Flexible' }}</p>
        </div>

        <p>If your requirement is urgent or you would like to have an immediate technical consultation, you can reach us directly on WhatsApp or by phone.</p>

        <div class="cta-box">
            <a href="https://wa.me/917011639618?text={{ urlencode('Hello Intoxia Technologies, I submitted an enquiry for ' . $enquiry->service) }}" class="btn-wa">Chat on WhatsApp (+91 70116 39618)</a>
        </div>

        <div class="contact-info">
            <strong>Intoxia Technologies</strong><br>
            226 Second Floor, Main Kalindi Kunj Road, Jasola, New Delhi-110025, India<br>
            Phone: +91 70116 39618 &bull; Email: contact@intoxiatechnologies.com &bull; www.intoxiatechnologies.com
        </div>
    </div>
</body>
</html>
