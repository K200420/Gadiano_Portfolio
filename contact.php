<?php

require_once __DIR__ . "/includes/db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php#contact");
    exit;
}


$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");


if (
    empty($name) ||
    empty($email) ||
    empty($subject) ||
    empty($message)
) {
    die("Please complete all fields.");
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}


$stmt = $conn->prepare(
    "INSERT INTO contact_messages
    (name, email, subject, message)
    VALUES (?, ?, ?, ?)"
);


$stmt->bind_param(
    "ssss",
    $name,
    $email,
    $subject,
    $message
);


if ($stmt->execute()) {

    header("Location: index.php?success=1#contact");
    exit;

} else {

    echo "Error sending message.";

}


$stmt->close();
$conn->close();

?>