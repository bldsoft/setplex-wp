<?php
add_action('wp_ajax_send_salesforce_form_email', 'send_salesforce_form_email');
add_action('wp_ajax_nopriv_send_salesforce_form_email', 'send_salesforce_form_email');

function send_salesforce_form_email() {
    // Проверка, что все необходимые данные есть
    if (!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email'])) {
        wp_send_json_error(['message' => 'Data error']);
        return;
    }

    // Получаем данные формы
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $job_title = sanitize_text_field($_POST['title']);
    $country = sanitize_text_field($_POST['00NPl000001Yr2w']);
    $inquiry = sanitize_textarea_field($_POST['00NPl000001Yr31']);
    $form_name = sanitize_text_field($_POST['00NPl000001m7ps']);
    
    // Параметры письма
    $to = 'h.dubik@setplex.com'; // Твой email
    $subject = 'New application from the ' . $form_name . ' on the website';
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Site <no-reply@setplex.com>',
        'Reply-To: ' . $email
    ];
    $body = "
        <h2>New application on the Book a Demo ($form_name)</h2>
        <p><strong>Full Name:</strong> $first_name $last_name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Company:</strong> $company</p>
        <p><strong>Job Title:</strong> $job_title</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>Country:</strong> $country</p>
        <p><strong>Message:</strong><br> $inquiry</p>
    ";

    // Отправляем email
    $mail_sent = wp_mail($to, $subject, $body, $headers);

    if ($mail_sent) {
        wp_send_json_success(['message' => 'Email sent successfully']);
    } else {
        wp_send_json_error(['message' => 'Error sending email']);
    }
}

?>
