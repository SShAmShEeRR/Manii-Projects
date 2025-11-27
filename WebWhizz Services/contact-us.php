<?php
// Initialize variables
$msg = "";
$msgClass = "";

// Check for Submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get Form Data
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $countryCode = htmlspecialchars($_POST['country_code']);
    $message = htmlspecialchars($_POST['message']);

    // Check Required Fields
    if (!empty($email) && !empty($firstName) && !empty($lastName) && !empty($phone) && !empty($message)) {
        // Passed
        // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Failed
            $msg = "Please use a valid email address";
            $msgClass = "bg-red-100 text-red-700 border-red-400";
        } else {
            // Passed
            // Recipient Email
            $toEmail = "webwhizzservices@gmail.com";
            $subject = "Contact Request From " . $firstName . " " . $lastName;
            $body = "<h2>Contact Request</h2>
                    <h4>Name</h4><p>" . $firstName . " " . $lastName . "</p>
                    <h4>Email</h4><p>" . $email . "</p>
                    <h4>Phone</h4><p>" . $countryCode . " " . $phone . "</p>
                    <h4>Message</h4><p>" . $message . "</p>";

            // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            // Additional Headers
            $headers .= "From: " . $firstName . "<" . $email . ">" . "\r\n";

            // Send Email (Note: This requires a configured mail server on XAMPP)
            if (mail($toEmail, $subject, $body, $headers)) {
                $msg = "Your email has been sent!";
                $msgClass = "bg-lime-100 text-lime-800 border-lime-brand";
            } else {
                $msg = "Your email was not sent. Please check your server config.";
                $msgClass = "bg-red-100 text-red-700 border-red-400";
            }
        }
    } else {
        // Failed
        $msg = "Please fill in all fields";
        $msgClass = "bg-red-100 text-red-700 border-red-400";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Skyline Digital Agency</title>
    
    <!-- Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        lime: {
                            400: '#a3e635',
                            500: '#84cc16',
                            brand: '#bef264', // The specific lime green
                        },
                        dark: {
                            card: '#1c1c1c',
                            bg: '#121212',
                            surface: '#2A2A2A'
                        }
                    },
                    borderRadius: {
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-900 antialiased selection:bg-lime-brand selection:text-black">

    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <!-- CONTACT HERO -->
    <section class="pt-16 pb-10 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block border border-gray-300 rounded-full px-4 py-1.5 text-xs font-bold uppercase tracking-wider mb-6 text-gray-500">
                Get In Touch
            </span>
            <h1 class="text-5xl md:text-7xl font-bold leading-[1.1] mb-6">
                Let's Start a <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-400">Conversation.</span>
            </h1>
            <p class="text-gray-500 text-lg leading-relaxed">
                Have a project in mind? We'd love to hear about it. Fill out the form below and we'll get back to you within 24 hours.
            </p>
        </div>
    </section>

    <!-- CONTACT CONTENT -->
    <section class="py-10 px-4 md:px-8 max-w-7xl mx-auto mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Contact Info -->
            <div class="lg:col-span-4 space-y-8">
                <!-- Info Card -->
                <div class="bg-dark-card text-white p-8 rounded-3xl">
                    <h3 class="text-2xl font-bold mb-6">Contact Info</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-lime-brand/20 flex items-center justify-center shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5 text-lime-brand"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wider mb-1">Office</p>
                                <p class="text-sm font-medium leading-relaxed">123 Willow Street, Rivertown,<br>Greenfield County, Oakville, USA</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-lime-brand/20 flex items-center justify-center shrink-0">
                                <i data-lucide="mail" class="w-5 h-5 text-lime-brand"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wider mb-1">Email</p>
                                <p class="text-sm font-medium">webwhizzservices@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-lime-brand/20 flex items-center justify-center shrink-0">
                                <i data-lucide="phone" class="w-5 h-5 text-lime-brand"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wider mb-1">Phone</p>
                                <p class="text-sm font-medium">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>

                    <!-- Socials -->
                    <div class="mt-10 pt-8 border-t border-white/10">
                        <p class="text-xs text-gray-400 uppercase tracking-wider mb-4">Follow Us</p>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-lime-brand hover:text-black transition-all flex items-center justify-center">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-lime-brand hover:text-black transition-all flex items-center justify-center">
                                <i data-lucide="instagram" class="w-4 h-4"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-lime-brand hover:text-black transition-all flex items-center justify-center">
                                <i data-lucide="twitter" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- FAQ Mini -->
                <div class="bg-gray-50 p-8 rounded-3xl">
                    <h4 class="font-bold mb-2">Need Support?</h4>
                    <p class="text-sm text-gray-500 mb-4">For technical issues, please email our support team directly.</p>
                    <a href="mailto:support@skyline.com" class="text-sm font-bold text-black hover:text-lime-600 underline decoration-lime-brand underline-offset-4">support@skyline.com</a>
                </div>
            </div>

            <!-- Right Column: The Form -->
            <div class="lg:col-span-8">
                <div class="bg-white border border-gray-100 shadow-xl shadow-gray-100/50 p-8 md:p-12 rounded-4xl">
                    
                    <?php if($msg != ''): ?>
                        <div class="<?php echo $msgClass; ?> border px-4 py-3 rounded-xl relative mb-6 text-sm font-bold">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- First Name -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">First Name *</label>
                                <input type="text" name="first_name" placeholder="John" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-lime-brand focus:ring-1 focus:ring-lime-brand transition-colors" required value="<?php echo isset($_POST['first_name']) ? $firstName : ''; ?>">
                            </div>
                            
                            <!-- Last Name -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Last Name *</label>
                                <input type="text" name="last_name" placeholder="Doe" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-lime-brand focus:ring-1 focus:ring-lime-brand transition-colors" required value="<?php echo isset($_POST['last_name']) ? $lastName : ''; ?>">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Email -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Email Address *</label>
                                <input type="email" name="email" id="emailInput" placeholder="john@example.com" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-lime-brand focus:ring-1 focus:ring-lime-brand transition-colors" required value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                                <p id="emailError" class="text-red-500 text-xs mt-1 hidden">Invalid email format</p>
                            </div>
                            
                            <!-- Phone -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Phone Number *</label>
                                <div class="flex">
                                    <select name="country_code" class="bg-gray-50 border border-gray-200 rounded-l-xl px-3 py-3 text-sm focus:outline-none border-r-0 text-gray-500">
                                        <option value="+1">+1 (USA)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <option value="+91">+91 (IND)</option>
                                        <option value="+61">+61 (AUS)</option>
                                        <option value="+92">+92 (PAK)</option>
                                        <option value="+971">+971 (UAE)</option>
                                        <!-- Add more as needed -->
                                    </select>
                                    <input type="tel" name="phone" id="phoneInput" placeholder="123 456 7890" class="w-full bg-gray-50 border border-gray-200 rounded-r-xl px-4 py-3 focus:outline-none focus:border-lime-brand focus:ring-1 focus:ring-lime-brand transition-colors" required value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
                                </div>
                                <p id="phoneError" class="text-red-500 text-xs mt-1 hidden">Number length must be between 7-15 digits</p>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="mb-8">
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Message *</label>
                            <textarea name="message" rows="5" placeholder="Tell us about your project..." class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-lime-brand focus:ring-1 focus:ring-lime-brand transition-colors" required><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" name="submit" class="w-full bg-lime-brand hover:bg-lime-400 text-black font-bold py-4 rounded-xl transition-all transform hover:scale-[1.01] shadow-lg shadow-lime-brand/20 flex items-center justify-center gap-2">
                            Send Message <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

    <script>
        lucide.createIcons();

        function validateForm() {
            let isValid = true;
            
            // Email Validation
            const email = document.getElementById('emailInput').value;
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!emailRegex.test(email)) {
                emailError.classList.remove('hidden');
                isValid = false;
            } else {
                emailError.classList.add('hidden');
            }

            // Phone Validation (Simple Length Check)
            const phone = document.getElementById('phoneInput').value.replace(/\D/g,''); // Remove non-digits
            const phoneError = document.getElementById('phoneError');
            
            if (phone.length < 7 || phone.length > 15) {
                phoneError.classList.remove('hidden');
                isValid = false;
            } else {
                phoneError.classList.add('hidden');
            }

            return isValid;
        }
    </script>
</body>
</html>