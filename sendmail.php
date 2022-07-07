<?php
include("inc/constant.php");
header("Content-Type: application/json");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['form_phone']) &&
        isset($_POST['form_name']) &&
        isset($_POST['form_email'])  &&
        isset($_POST['form_subject'])  &&
        isset($_POST['form_message'])
    ) {
        $customerName = htmlspecialchars($_POST['form_name']);
        $customerPhone = htmlspecialchars($_POST['form_phone']);
        $customerEmail = htmlspecialchars($_POST['form_email']);
        $customerSubject = htmlspecialchars($_POST['form_subject']);
        $customerMessage = htmlspecialchars($_POST['form_message']);
        $date = date("Y-m-d H:i:s");
        if (trim($customerName) == '' || trim($customerPhone) == '' || trim($customerEmail) == '' || trim($customerSubject) == '' || trim($customerMessage) == '') {
            echo json_encode(array("status" => "false", "message" => "Please fill all the fields"));
        } else {
            $html = '<!DOCTYPE html>
                <html>
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <title>New Property Intrest</title>
                </head>
                <body class="">
                    <div style="font-family: sans-serif;font-size: 14px;display: block;margin: 0 auto;max-width: 580px;padding: 10px;width: 100%;">
                        <h2 style="font-size:23px;font-weight:bold">Hi Mohammed,</h2>
                        <h4 style="font-size:18px;font-weight:bold">New Contact Form Submitted from the webpage</h4>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 20%;">Customer Name</td>
                                <td>:</td>
                                <td style="width: 80%;">' . $customerName . '</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;">Customer Phone</td>
                                <td>:</td>
                                <td style="width: 80%;">' . $customerPhone . '</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;">Customer Email</td>
                                <td>:</td>
                                <td style="width: 80%;">' . $customerEmail . '</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;">Customer Subject</td>
                                <td>:</td>
                                <td style="width: 80%;">' . $customerSubject . '</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;">Message</td>
                                <td>:</td>
                                <td style="width: 80%;">' . $customerMessage . '</td>
                            </tr>
                        </table>';
            $html .= '<h3>Quick Actions</h3>
                        <a style="display: inline-block;color: #ffffff;background-color: #3498db;border: solid 1px #3498db;border-radius: 5px;box-sizing: border-box;cursor: pointer;text-decoration: none;font-size: 14px;font-weight: bold;margin: 5px;padding: 10px;text-transform: capitalize;border-color: #3498db;" target="_blank" href="tel:' . $customerPhone . '">Call Now</a>
                        <a style="display: inline-block;color: #ffffff;background-color: #3498db;border: solid 1px #3498db;border-radius: 5px;box-sizing: border-box;cursor: pointer;text-decoration: none;font-size: 14px;font-weight: bold;margin: 5px;padding: 10px;text-transform: capitalize;border-color: #3498db;" target="_blank" href="mailto:' . $customerEmail . '">Email Now</a>
                    </div>
                </body>
                </html>';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'From: 	Mohammed <contact@tameemnihar.com> ' . "\r\n";
            mail("enquiry@tameemnihar.com", "New Contact Message Received", $html, $headers);

            echo json_encode(array("status" => "true", "message" => "Your message has been sent successfully"));
        }
    } else {
        echo json_encode(array("status" => "false", "message" => "Please fill all the fields"));
    }
} else {
    echo json_encode(array("status" => "false", "message" => "GET request not allowed"));
}
