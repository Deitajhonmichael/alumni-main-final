# Admin Verification System Documentation

## Overview
Admin-specific verification pages that provide enhanced security for administrative access. These pages use the same email verification system but with admin-specific styling and security features.

## Admin Verification Pages

### 1. admin/verify.php
**Purpose:** Admin verification page after login
**Flow:**
- Admin logs in → redirected here
- Code sent to admin email (leahbatal40@gmail.com)
- Admin enters code → redirected to admin dashboard
- Includes resend functionality

**Features:**
- Admin badge for visual identification
- Blue color scheme (vs purple for regular users)
- Security notice about secure networks
- Auto-focus on code input
- Number-only validation
- Resend code button
- Link to dedicated resend page
- Logout option
- Role-based redirect protection

**Access:** After successful admin login, before admin dashboard access

**Security Features:**
- Redirects non-admin users to regular verification
- Requires admin role in session
- Security notice warning about network security
- Enhanced logging for admin verification attempts

---

### 2. admin/resend_verification.php
**Purpose:** Dedicated page for resending admin verification codes
**Flow:**
- Admin can request new verification code
- Code sent to admin email
- Admin can return to verification page

**Features:**
- Admin badge for visual identification
- Shows current admin email address
- One-click resend button
- Clear success/error messages
- Link back to admin verification page
- Logout option
- Role-based protection

**Access:** From admin/verify.php or directly if code not received

**Security Features:**
- Redirects non-admin users to regular resend page
- Requires admin role in session
- Enhanced logging for admin resend requests

---

## Integration Points

### Admin Login Flow
```
login.php → admin/verify.php → admin/dashboard.php
```

### Admin Resend Flow
```
admin/verify.php → admin/resend_verification.php → admin/verify.php
```

### Role-Based Routing
The login system automatically routes users based on role:
- **Admin users** → admin/verify.php
- **Regular users** → verify.php
- **Staff users** → verify.php (if needed, can be customized)

## Modified Files

### login.php
Updated to include role-based verification routing:
```php
if ($user['role'] === 'admin') {
    flashMessage('success', 'Welcome back, ' . $user['username'] . '! Please verify your admin email.');
    redirect('admin/verify.php');
} else {
    flashMessage('success', 'Welcome back, ' . $user['username'] . '! Please verify your email.');
    redirect('verify.php');
}
```

## Design Differences

### Color Scheme
- **Admin Pages:** Blue gradient (#1e3c72 to #2a5298)
- **Regular Pages:** Purple gradient (#667eea to #764ba2)

### Icons
- **Admin Pages:** Shield, user-shield icons
- **Regular Pages:** Envelope, graduation cap icons

### Badges
- **Admin Pages:** "ADMIN ACCESS" badge
- **Regular Pages:** No badge

### Security Notices
- **Admin Pages:** Security warning about network safety
- **Regular Pages:** No security notice

## Security Features

### Role-Based Access Control
1. **Admin Verification:** Only accessible to admin role
2. **Non-Admin Redirect:** Non-admins redirected to regular verification
3. **Session Validation:** Checks admin role before access
4. **Enhanced Logging:** All admin verification attempts logged

### Enhanced Security
1. **Network Warning:** Reminds admins to use secure networks
2. **Admin Badge:** Visual confirmation of admin access
3. **Separate Flow:** Prevents confusion between user/admin flows
4. **Code Expiration:** 10-minute expiration for all codes
5. **One-time Use:** Each code can only be used once

## Database Usage

### verification_codes Table
Same table used for both admin and regular verification:
- Stores 6-digit verification codes
- Links to user_id
- 10-minute expiration
- One-time use
- No distinction between admin/regular codes

### activity_log Table
Enhanced logging for admin actions:
- Admin login attempts
- Admin verification completions
- Admin resend requests
- All include user_id and timestamps

## Email Configuration

All admin verification emails use the same configuration as regular emails:
- **From:** leahbatal40@gmail.com
- **To:** User's email address
- **Subject:** "Your Verification Code - Alumni Management System"
- **Content:** 6-digit code with expiration notice

## Testing Checklist

### Admin Verification Flow
- [ ] Test admin login redirects to admin/verify.php
- [ ] Test code sent to admin email
- [ ] Test correct code redirects to admin dashboard
- [ ] Test incorrect code shows error
- [ ] Test resend functionality
- [ ] Test non-admin user redirected to regular verification

### Security Testing
- [ ] Test non-admin cannot access admin/verify.php
- [ ] Test non-admin cannot access admin/resend_verification.php
- [ ] Test session timeout handling
- [ ] Test logout clears verification
- [ ] Test direct URL access protection

### Email Testing
- [ ] Test email delivery to leahbatal40@gmail.com
- [ ] Test email content displays correctly
- [ ] Test code expiration after 10 minutes
- [ ] Test one-time code usage

## User Experience

### Admin Verification Page
1. **Clear Identification:** Admin badge and blue theme
2. **Security Focus:** Network security warning
3. **Easy Navigation:** Resend and logout options
4. **Auto-focus:** Code input auto-focuses
5. **Input Validation:** Number-only input

### Admin Resend Page
1. **Simple Interface:** One-click resend
2. **Email Display:** Shows current admin email
3. **Clear Feedback:** Success/error messages
4. **Easy Navigation:** Back to verification

## Error Handling

Common errors handled:
- Invalid/expired codes
- Email sending failures
- Non-admin access attempts
- Session timeouts
- Database errors
- Network issues

## Future Enhancements

Possible additions:
- 2FA with authenticator app
- Hardware key support
- IP-based restrictions
- Time-based access windows
- Multiple admin verification methods
- Admin verification audit log
- Emergency override codes

## Files Created

1. `admin/verify.php` - Admin verification page
2. `admin/resend_verification.php` - Admin resend verification page

## Files Modified

1. `login.php` - Added role-based verification routing

## Related Documentation

- `VERIFICATION_PAGES.md` - General verification pages documentation
- `EMAIL_SETUP.md` - Email configuration instructions
- `VERIFICATION_README.md` - Overall verification system documentation

## Support

For issues with email delivery, see `EMAIL_SETUP.md` for SMTP configuration instructions.

For general verification issues, see `VERIFICATION_README.md` for troubleshooting.

## Security Best Practices

1. **Always use secure networks** when accessing admin verification
2. **Keep admin email secure** with 2FA enabled
3. **Monitor activity logs** for unauthorized access attempts
4. **Regularly rotate admin passwords**
5. **Use app passwords** for email authentication
6. **Never share verification codes** with others
7. **Report suspicious activity** immediately

## Compliance Notes

- All admin verification attempts are logged
- Email addresses are stored securely
- Verification codes are not stored in plain text
- Session data is encrypted
- Access attempts are monitored
