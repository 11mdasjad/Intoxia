<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry Received</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #0c1017; color: #f1f5f9; margin: 0; padding: 24px; }
        .card { max-width: 600px; margin: 0 auto; background: #161e2e; border: 1px solid #2d3748; border-radius: 12px; padding: 32px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); }
        .badge { display: inline-block; background: #2563eb; color: #ffffff; padding: 4px 12px; border-radius: 9999px; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; }
        h1 { font-size: 22px; color: #ffffff; margin-top: 16px; margin-bottom: 24px; font-weight: 700; }
        .row { display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #242e42; }
        .label { color: #94a3b8; font-size: 14px; }
        .value { color: #ffffff; font-size: 14px; font-weight: 600; text-align: right; }
        .message-box { background: #0c1017; border: 1px solid #242e42; border-radius: 8px; padding: 16px; margin-top: 20px; font-size: 14px; line-height: 1.6; color: #cbd5e1; white-space: pre-wrap; }
        .btn { display: inline-block; background: #2563eb; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; margin-top: 24px; }
        .footer { text-align: center; color: #64748b; font-size: 12px; margin-top: 24px; }
    </style>
</head>
<body>
    <div class="card">
        <span class="badge">New Lead</span>
        <h1>New Project Enquiry Received</h1>
        
        <div class="row">
            <span class="label">Name:</span>
            <span class="value">{{ $enquiry->name }}</span>
        </div>
        <div class="row">
            <span class="label">Email:</span>
            <span class="value"><a href="mailto:{{ $enquiry->email }}" style="color:#60a5fa;">{{ $enquiry->email }}</a></span>
        </div>
        <div class="row">
            <span class="label">Phone:</span>
            <span class="value">{{ $enquiry->phone ?? 'Not provided' }}</span>
        </div>
        <div class="row">
            <span class="label">Company:</span>
            <span class="value">{{ $enquiry->company ?? 'Individual / Startup' }}</span>
        </div>
        <div class="row">
            <span class="label">Service Required:</span>
            <span class="value">{{ $enquiry->service }}</span>
        </div>
        <div class="row">
            <span class="label">Budget Estimate:</span>
            <span class="value">{{ $enquiry->budget ?? 'Flexible / Undecided' }}</span>
        </div>
        <div class="row">
            <span class="label">Target Timeline:</span>
            <span class="value">{{ $enquiry->timeline ?? 'Flexible' }}</span>
        </div>

        <div style="margin-top: 20px;">
            <span class="label">Message / Project Scope:</span>
            <div class="message-box">{{ $enquiry->message }}</div>
        </div>

        <div style="text-align: center;">
            <a href="{{ config('app.url') }}/admin/enquiries/{{ $enquiry->id }}" class="btn">View in Intoxia Admin CRM</a>
        </div>
    </div>
    <div class="footer">
        Intoxia Technologies Lead Notification System &bull; New Delhi, India
    </div>
</body>
</html>
