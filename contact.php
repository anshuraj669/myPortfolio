<?php
/**
 * Contact form handler.
 * Logs submissions to messages.log and attempts mail() delivery.
 * Redirects back to index with a flash flag.
 */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$ok = true;
if ($name === '' || $email === '' || $subject === '' || $message === '') $ok = false;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $ok = false;
if (strlen($message) > 5000) $ok = false;

if ($ok) {
    $line = sprintf(
        "[%s] %s <%s> | %s\n%s\n---\n",
        date('Y-m-d H:i:s'),
        str_replace(["\n", "\r"], ' ', $name),
        str_replace(["\n", "\r"], ' ', $email),
        str_replace(["\n", "\r"], ' ', $subject),
        $message
    );
    @file_put_contents(__DIR__ . '/messages.log', $line, FILE_APPEND | LOCK_EX);

    $to      = '07ankitmathur@gmail.com';
    $hdr     = "From: Portfolio <no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ">\r\n";
    $hdr    .= "Reply-To: " . $email . "\r\n";
    $hdr    .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body    = "From: $name <$email>\n\n$message";
    @mail($to, "[Portfolio] $subject", $body, $hdr);
}

header('Location: index.php?sent=' . ($ok ? '1' : '0') . '#contact');
exit;
