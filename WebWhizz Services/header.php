<!-- Header / Navigation -->
<nav class="flex items-center justify-between px-4 md:px-8 py-6 max-w-7xl mx-auto bg-white relative z-50">
    <!-- Logo -->
    <div class="flex items-center gap-2">
        <!-- Icon: Lime square with white dot -->
        <div class="w-8 h-8 bg-lime-brand rounded-lg flex items-center justify-center rotate-3">
             <div class="w-3 h-3 bg-white rounded-full"></div>
        </div>
        <span class="text-xl font-bold tracking-tight font-sans text-black">WebWhizz</span>
    </div>

    <!-- Center Menu (Hidden on mobile) -->
    <div class="hidden md:flex items-center gap-10 font-medium text-sm">
         <!-- Active Link (Home) -->
         <a href="index.php" class="relative text-black font-semibold after:content-[''] after:absolute after:-bottom-2 after:left-1/2 after:-translate-x-1/2 after:w-1/2 after:h-1 after:bg-lime-brand after:rounded-full">
            Home
         </a>

         <!-- Services Dropdown Container -->
         <div class="relative group">
            <a href="#" class="flex items-center gap-1 text-gray-500 hover:text-black transition-colors py-2">
                Services
                <!-- Down Arrow Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:rotate-180 transition-transform duration-200"><path d="m6 9 6 6 6-6"/></svg>
            </a>

            <!-- Invisible Bridge (Prevents menu from closing when moving mouse) -->
            <div class="absolute -bottom-4 left-0 w-full h-4 bg-transparent"></div>

            <!-- Dropdown Menu -->
            <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-72 bg-white rounded-2xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform group-hover:translate-y-0 translate-y-2 overflow-hidden">
                <div class="py-2">
                    <a href="graphic-designing.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        Graphic Design
                    </a>
                    <a href="web-and-mobile-design.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        Web and Mobile Design
                    </a>
                    <a href="e-commerce-design.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        E-commerce Design
                    </a>
                    <a href="social-media-account-setup-and-optimization.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        Social Media Account Setup & Optimization
                    </a>
                    <a href="content-creation-and-curation.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        Content Creation & Curation
                    </a>
                    <a href="social-media-management.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        Social Media Management
                    </a>
                    <a href="mobile-app-development.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        Mobile App Development
                    </a>
                    <a href="community-management.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium border-b border-gray-50">
                        Community Management
                    </a>
                    <a href="influencer-marketing.php" class="block px-6 py-3 text-gray-600 hover:bg-lime-50 hover:text-black transition-colors text-xs font-medium">
                        Influencer Marketing
                    </a>
                </div>
            </div>
         </div>

         <a href="portfolio.php" class="text-gray-500 hover:text-black transition-colors">Portfolio</a>
         <a href="#" class="text-gray-500 hover:text-black transition-colors">About Us</a>
    </div>

    <!-- CTA Button -->
    <a href="contact-us.php" class="border border-gray-300 px-6 py-2.5 rounded-full text-xs font-bold hover:bg-black hover:text-white transition-colors">
        Contact Us
    </a>
</nav>