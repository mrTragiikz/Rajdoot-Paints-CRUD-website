<?php
// dealer-submit.php — handles "Become a Dealer" form submissions via SMTP

header('Content-Type: application/json');
require_once __DIR__ . '/includes/mailer.php';

use PHPMailer\PHPMailer\Exception;

function respond(bool $ok, string $message): void {
    echo json_encode(['ok' => $ok, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Invalid request method.');
}

$name     = trim($_POST['name'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$email    = trim($_POST['email'] ?? '');
$shopName = trim($_POST['shop_name'] ?? '');
$province = trim($_POST['province'] ?? '');
$ward     = trim($_POST['ward'] ?? '');
$location = trim($_POST['location'] ?? '');
$details  = trim($_POST['details'] ?? '');

if ($name === '' || $phone === '' || $email === '' || $shopName === '' || $province === '' || $ward === '' || $location === '') {
    http_response_code(422);
    respond(false, 'Please fill in all required fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    respond(false, 'Please provide a valid email address.');
}

$safe = fn(string $v): string => htmlspecialchars($v, ENT_QUOTES, 'UTF-8');

$fields = [
    ['icon' => '&#128100;', 'label' => 'Full Name',    'value' => $name],
    ['icon' => '&#128222;', 'label' => 'Phone Number', 'value' => $phone],
    ['icon' => '&#9993;',   'label' => 'Email',        'value' => $email],
    ['icon' => '&#127978;', 'label' => 'Shop Name',    'value' => $shopName],
    ['icon' => '&#127757;', 'label' => 'Province',     'value' => $province],
    ['icon' => '&#128205;', 'label' => 'Ward Number',  'value' => $ward],
    ['icon' => '&#128711;', 'label' => 'Location',     'value' => $location],
    ['icon' => '&#128221;', 'label' => 'Details',      'value' => $details !== '' ? $details : '—'],
];

function buildFieldBoxes(array $fields, callable $safe): string {
    $html = '';
    $i = 0;
    foreach ($fields as $f) {
        $delay = 0.15 + ($i * 0.08);
        $html .= <<<HTML
        <tr>
            <td style="padding:0 0 12px 0;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" class="field-box" style="background:#faf6ee;border:1px solid #ecdfc8;border-radius:12px;animation-delay:{$delay}s;">
                    <tr>
                        <td style="padding:14px 18px;">
                            <span style="display:block;font-size:11px;font-weight:700;letter-spacing:0.6px;text-transform:uppercase;color:#b9893f;margin-bottom:4px;">
                                <span style="margin-right:6px;">{$f['icon']}</span>{$safe($f['label'])}
                            </span>
                            <span style="display:block;font-size:14.5px;color:#1c2733;font-weight:600;line-height:1.5;word-break:break-word;">{$safe($f['value'])}</span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        HTML;
        $i++;
    }
    return $html;
}

$fieldBoxesHtml = buildFieldBoxes($fields, $safe);

$sharedStyle = <<<CSS
<style>
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(14px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes popIn {
        0%   { opacity: 0; transform: scale(0.85); }
        60%  { opacity: 1; transform: scale(1.04); }
        100% { opacity: 1; transform: scale(1); }
    }
    @keyframes shimmer {
        0%   { background-position: -200px 0; }
        100% { background-position: 200px 0; }
    }
    .field-box {
        animation: fadeSlideUp 0.6s ease both;
    }
    .hero-badge {
        animation: popIn 0.7s cubic-bezier(0.22,1,0.36,1) both;
    }
    .gold-divider {
        background: linear-gradient(90deg, transparent, #c49553, transparent);
        background-size: 200px 100%;
        animation: shimmer 2.5s linear infinite;
    }
</style>
CSS;

$ownerHtml = <<<HTML
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
{$sharedStyle}
</head>
<body style="margin:0;padding:0;background:#f0ece2;font-family:'Segoe UI',Arial,sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f0ece2;padding:32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px;background:#ffffff;border-radius:18px;overflow:hidden;box-shadow:0 12px 40px rgba(10,35,66,0.12);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#0A2342 0%,#16335c 100%);padding:36px 32px 30px;text-align:center;">
                            <div class="hero-badge" style="display:inline-flex;align-items:center;justify-content:center;width:54px;height:54px;background:rgba(196,149,83,0.18);border:1.5px solid #c49553;border-radius:50%;margin-bottom:14px;font-size:24px;line-height:54px;">&#127978;</div>
                            <h1 style="color:#ffffff;font-size:21px;margin:0 0 6px;font-weight:700;">New Dealer Application</h1>
                            <p style="color:#c49553;font-size:12.5px;letter-spacing:1px;text-transform:uppercase;margin:0;font-weight:600;">Rajdoot Paints Nepal &middot; Website Inquiry</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="gold-divider" style="height:3px;"></td>
                    </tr>
                    <tr>
                        <td style="padding:28px 26px 8px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                {$fieldBoxesHtml}
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:4px 26px 28px;">
                            <p style="color:#8a8a8a;font-size:12px;margin:0;text-align:center;">Submitted via the Become a Dealer form on the Rajdoot Paints website.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#faf6ee;padding:18px 26px;text-align:center;border-top:1px solid #ecdfc8;">
                            <p style="color:#a6a6a6;font-size:11px;margin:0;">Website by <strong style="color:#7a5b2e;">Prabin Sharma</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

$dealerHtml = <<<HTML
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
{$sharedStyle}
</head>
<body style="margin:0;padding:0;background:#f0ece2;font-family:'Segoe UI',Arial,sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f0ece2;padding:32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px;background:#ffffff;border-radius:18px;overflow:hidden;box-shadow:0 12px 40px rgba(10,35,66,0.12);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#0A2342 0%,#16335c 100%);padding:40px 32px 32px;text-align:center;">
                            <div class="hero-badge" style="display:inline-flex;align-items:center;justify-content:center;width:60px;height:60px;background:rgba(196,149,83,0.18);border:1.5px solid #c49553;border-radius:50%;margin-bottom:16px;font-size:28px;line-height:60px;">&#10003;</div>
                            <h1 style="color:#ffffff;font-size:23px;margin:0 0 8px;font-weight:700;">Thank You, {$safe($name)}!</h1>
                            <p style="color:#c49553;font-size:12.5px;letter-spacing:1px;text-transform:uppercase;margin:0;font-weight:600;">Application Received</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="gold-divider" style="height:3px;"></td>
                    </tr>
                    <tr>
                        <td style="padding:28px 26px 6px;">
                            <p style="color:#333;font-size:15px;line-height:1.65;margin:0 0 22px;">
                                We've received your dealer application for <strong>{$safe($shopName)}</strong>. Our team will carefully review your details and get in touch with you within <strong>2&ndash;3 business days</strong>.
                            </p>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                {$fieldBoxesHtml}
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 26px 30px;">
                            <p style="color:#333;font-size:13.5px;line-height:1.65;margin:0;text-align:center;">
                                Have an urgent question? Reach us at<br>
                                <a href="mailto:rajdootpaintsnepal@gmail.com" style="color:#4A2063;font-weight:600;text-decoration:none;">rajdootpaintsnepal@gmail.com</a>
                                &nbsp;&bull;&nbsp;
                                <a href="tel:056412290" style="color:#4A2063;font-weight:600;text-decoration:none;">056-412290</a>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#faf6ee;padding:18px 26px;text-align:center;border-top:1px solid #ecdfc8;">
                            <p style="color:#7a7a7a;font-size:12px;margin:0 0 4px;font-weight:600;">&mdash; Team Rajdoot Paints Nepal</p>
                            <p style="color:#a6a6a6;font-size:11px;margin:0;">Website by <strong style="color:#7a5b2e;">Prabin Sharma</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

try {
    $ownerMail = createMailer();
    $ownerMail->addAddress(MAIL_OWNER_ADDRESS);
    $ownerMail->addReplyTo($email, $name);
    $ownerMail->isHTML(true);
    $ownerMail->Subject = "New Dealer Application — {$shopName}";
    $ownerMail->Body    = $ownerHtml;
    $ownerMail->send();

    $replyMail = createMailer();
    $replyMail->addAddress($email, $name);
    $replyMail->isHTML(true);
    $replyMail->Subject = 'Thank you for your dealer application — Rajdoot Paints Nepal';
    $replyMail->Body    = $dealerHtml;
    $replyMail->send();

    respond(true, 'Application submitted successfully.');
} catch (Exception $e) {
    http_response_code(500);
    respond(false, 'Something went wrong while sending your application. Please try again later.');
}
