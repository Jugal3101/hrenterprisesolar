<?php
// 1. Database Connection
// Server: localhost, User: root, Password: "", Database: hr_solar_db
$conn = new mysqli("localhost", "root", "", "hr_solar_db");

// Connection check karo
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form mathi data leva
    $name = $_POST['full_name'];
    $phone = $_POST['phone_number'];
    $req = $_POST['requirement'];
    $msg = $_POST['message'];
    $current_time = date("Y-m-d H:i:s");

    // 2. Database ma query save karo
    $sql = "INSERT INTO queries (full_name, phone_number, requirement, message) VALUES ('$name', '$phone', '$req', '$msg')";
    
    if ($conn->query($sql) === TRUE) {
        
        // --- 3. NOTEPAD (.txt) FILE GENERATION WITH CUSTOMER NAME ---
        // 'inquiries' namnu folder na hoy to banavi dese
        if (!is_dir('inquiries')) {
            mkdir('inquiries');
        }
        
        // Name mathi space kadhi ne underscore (_) mukva mate
        $safe_name = str_replace(' ', '_', $name);
        
        // Filename: customer_name_timestamp.txt
        $filename = "inquiries/" . $safe_name . "_" . time() . ".txt";
        
        $file_content = "--- NEW SOLAR INQUIRY ---\n";
        $file_content .= "Date: $current_time\n";
        $file_content .= "Name: $name\n";
        $file_content .= "Phone: $phone\n";
        $file_content .= "Requirement: $req\n";
        $file_content .= "Message: $msg\n";
        $file_content .= "-------------------------\n";
        
        file_put_contents($filename, $file_content);
        // -----------------------------------------------------------

        // --- 4. DIRECT WHATSAPP REDIRECT ---
        // Tamaro WhatsApp number: 918200379938
        $wa_text = "Hello HR Enterprise,%0A%0A" . 
                   "*New Solar Inquiry Received*%0A" . 
                   "----------------------------%0A" . 
                   "*Name:* " . $name . "%0A" . 
                   "*Phone:* " . $phone . "%0A" . 
                   "*Requirement:* " . $req . "%0A" . 
                   "*Message:* " . $msg;
        
        $wa_url = "https://wa.me/918200379938?text=" . $wa_text;

        // Batan dabavta j direct redirect thai jashe
        echo "<script>
                window.location.href = '$wa_url';
              </script>";
        exit;
        
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>