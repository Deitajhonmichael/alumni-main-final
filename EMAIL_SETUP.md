# Email Verification Setup Instructions

## Current Configuration
The verification system is now configured to send codes to: **leahbatal40@gmail.com**

## Option 1: Using PHP mail() Function (Current Setup)

### Prerequisites
PHP's built-in `mail()` function requires SMTP configuration in your php.ini file.

### Step 1: Configure php.ini for Gmail SMTP

1. Open your php.ini file (usually located at: `C:\xampp\php\php.ini`)
2. Find the `[mail function]` section
3. Add or modify these settings:

```ini
[mail function]
; For Win32 only.
SMTP = smtp.gmail.com
smtp_port = 587
; For Win32 only.
sendmail_from = leahbatal40@gmail.com

; Auth settings
auth_username = leahbatal40@gmail.com
auth_password = your-app-password
```

### Step 2: Enable 2-Factor Authentication on Gmail
1. Go to https://myaccount.google.com/security
2. Enable 2-Step Verification if not already enabled
3. Go to "App passwords" section
4. Create a new app password:
   - Select "Mail" and "Windows Computer"
   - Click "Generate"
   - Copy the 16-character password (e.g., `abcd efgh ijkl mnop`)

### Step 3: Update config.php with App Password
1. Open `config.php`
2. Replace `your-app-password` with your actual Gmail App Password:
```php
define('SMTP_PASSWORD', 'abcd efgh ijkl mnop'); // Replace with your actual app password
```

### Step 4: Restart Apache
1. Open XAMPP Control Panel
2. Stop Apache
3. Start Apache again

### Step 5: Test Email Sending
1. Go to `login.php`
2. Login with your credentials
3. Check your Gmail inbox for the verification code
4. If not received, check spam folder

## Option 2: Using PHPMailer (Recommended for Production)

If PHP mail() doesn't work well, use PHPMailer for better reliability.

### Step 1: Install Composer
Download and install Composer from https://getcomposer.org/

### Step 2: Install PHPMailer
Open command prompt in your project directory and run:
```bash
composer require phpmailer/phpmailer
```

### Step 3: Update config.php
Replace the `sendVerificationEmail` function with this PHPMailer version:

```php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendVerificationEmail($toEmail, $code) {
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = SMTP_PORT;
        
        // Recipients
        $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
        $mail->addAddress($toEmail);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Your Verification Code - ' . SITE_NAME;
        $mail->Body    = "
            <html>
            <head>
            <title>Verification Code</title>
            </head>
            <body>
            <h2>Email Verification</h2>
            <p>Your verification code is: <strong style='font-size: 24px; color: #667eea;'>$code</strong></p>
            <p>This code will expire in 10 minutes.</p>
            <p>If you didn't request this code, please ignore this email.</p>
            <hr>
            <p style='color: #666; font-size: 12px;'>This is an automated email from " . SITE_NAME . "</p>
            </body>
            </html>
        ";
        
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Email failed: " . $mail->ErrorInfo);
        return false;
    }
}
```

## Troubleshooting

### Email Not Sending
1. **Check php.ini SMTP settings** - Ensure they match Gmail's requirements
2. **Verify App Password** - Make sure you're using an App Password, not your regular password
3. **Check firewall/antivirus** - May be blocking SMTP connections
4. **Enable less secure apps** - If using regular password (not recommended)

### Gmail Blocking Emails
1. Gmail may block emails from localhost
2. Check Gmail spam folder
3. Add sending email to Gmail contacts
4. Use PHPMailer (Option 2) for better deliverability

### XAMPP Specific Issues
1. Ensure sendmail.exe is configured in php.ini
2. Check that port 587 is not blocked by firewall
3. Try using port 465 with SSL instead of 587 with TLS

## Testing the Email System

### Quick Test Script
Create `test_email.php` to test email sending:

```php
<?php
require_once 'config.php';

$testEmail = 'leahbatal40@gmail.com';
$testCode = '123456';

if (sendVerificationEmail($testEmail, $testCode)) {
    echo "Email sent successfully! Check your inbox.";
} else {
    echo "Failed to send email. Check error logs.";
}
?>
```

Run this script: `php test_email.php`

## Security Notes

1. **Never commit your App Password to version control**
2. **Use environment variables for passwords in production**
3. **Regularly rotate your App Passwords**
4. **Monitor Gmail for unauthorized access**

## Current Status

✅ Email configuration added to config.php
✅ Email sending function created
✅ verify.php modified to send codes via email
✅ Code display removed from verification page
⚠️  Requires SMTP configuration in php.ini or PHPMailer setup

## Next Steps

1. Choose Option 1 (PHP mail) or Option 2 (PHPMailer)
2. Follow the setup instructions above
3. Test email sending with the test script
4. Test the complete verification flow
