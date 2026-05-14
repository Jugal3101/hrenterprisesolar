<?php include 'header.php'; ?>

<main class="flex-grow p-4 md:p-8">
    <header class="max-w-[1200px] mx-auto bg-white rounded-[2rem] shadow-2xl overflow-hidden mb-16 border border-gray-100">
        <div class="flex flex-col md:flex-row min-h-[500px]">
            <div class="md:w-1/2 relative bg-blue-900 overflow-hidden">
                <img src="panel.jpg" alt="Solar Installation" class="absolute inset-0 w-full h-full object-cover opacity-80 hover:scale-105 transition-transform duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent"></div>
                <div class="absolute bottom-10 left-10 text-white pr-4">
                    <p class="text-yellow-400 font-bold tracking-widest text-sm mb-2 uppercase">Clean Energy Solutions</p>
                    <h1 class="text-4xl md:text-5xl font-black leading-tight">Empowering India <br>with Solar.</h1>
                </div>
            </div>

            <div class="md:w-1/2 p-10 md:p-16 flex flex-col justify-center">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="h-1 w-10 bg-yellow-400"></div>
                    <span class="text-blue-600 font-bold text-sm uppercase tracking-wider">Welcome to HR Enterprise</span>
                </div>
                <h2 class="text-4xl font-black text-blue-900 mb-6">Sustainable Power for a Brighter Future</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    India's leading Solar EPC solution provider. We deliver top-tier solar solutions for Residential, Commercial, and Industrial needs with elite engineering.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="contactus.php" class="px-8 py-3 bg-blue-900 text-white font-bold rounded-full hover:bg-blue-800 transition shadow-lg transform hover:-translate-y-1">Get Free Quote</a>
                    <a href="aboutus.php" class="px-8 py-3 border-2 border-blue-900 text-blue-900 font-bold rounded-full hover:bg-blue-50 transition">Learn More</a>
                </div>
            </div>
        </div>
    </header>

    <section class="max-w-[1200px] mx-auto mb-16">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="section-title text-3xl font-black text-blue-900 uppercase">Our Products</h2>
                <p class="text-gray-500 font-medium">Explore our premium solar hardware components</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            
            <a href="panels.php" class="box-popup bg-white p-5 rounded-3xl text-center block group shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-full h-48 bg-gray-100 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img src="photos/panel1.jpg" alt="Solar Panels" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="font-bold text-blue-900 group-hover:text-blue-600 text-lg transition">High-Efficiency Panels</h3>
                <p class="text-xs text-gray-500 mt-1">Mono PERC & Bifacial Technology</p>
                <div class="mt-4 text-blue-500 text-xs font-black uppercase tracking-tighter opacity-0 group-hover:opacity-100 transition-opacity">
                    View Details →
                </div>
            </a>

            <a href="inverters.php" class="box-popup bg-white p-5 rounded-3xl text-center block group shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-full h-48 bg-gray-100 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img src="photos/inverter.jpg" alt="Smart Inverters" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="font-bold text-blue-900 group-hover:text-blue-600 text-lg transition">Smart Inverters</h3>
                <p class="text-xs text-gray-500 mt-1">On-Grid & Hybrid Systems</p>
                <div class="mt-4 text-blue-500 text-xs font-black uppercase tracking-tighter opacity-0 group-hover:opacity-100 transition-opacity">
                    View Details →
                </div>
            </a>

            <a href="cables.php" class="box-popup bg-white p-5 rounded-3xl text-center block group shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-full h-48 bg-gray-100 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img src="photos/cable.jpg" alt="DC Cables" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="font-bold text-blue-900 group-hover:text-blue-600 text-lg transition">DC Solar Cables</h3>
                <p class="text-xs text-gray-500 mt-1">Weatherproof & Durable Wires</p>
                <div class="mt-4 text-blue-500 text-xs font-black uppercase tracking-tighter opacity-0 group-hover:opacity-100 transition-opacity">
                    View Details →
                </div>
            </a>

            <a href="structures.php" class="box-popup bg-white p-5 rounded-3xl text-center block group shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="w-full h-48 bg-gray-100 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img src="photos/structure.jpg" alt="Mounting Structure" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h3 class="font-bold text-blue-900 group-hover:text-blue-600 text-lg transition">Mounting Structures</h3>
                <p class="text-xs text-gray-500 mt-1">GI & Aluminum Designs</p>
                <div class="mt-4 text-blue-500 text-xs font-black uppercase tracking-tighter opacity-0 group-hover:opacity-100 transition-opacity">
                    View Details →
                </div>
            </a>

        </div>
    </section>

    <section class="max-w-[1200px] mx-auto mb-16 bg-blue-900 rounded-[2rem] p-10 text-center text-white relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="text-3xl font-black mb-4">Ready to Switch to Solar?</h2>
            <p class="text-blue-200 mb-8 max-w-2xl mx-auto">Contact us today for a site visit and a customized quotation for your home or business.</p>
            <a href="tel:+918200379938" class="inline-flex items-center space-x-3 bg-yellow-400 text-blue-900 px-8 py-4 rounded-full font-black hover:bg-yellow-500 transition shadow-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span>Call +91 82003 79938</span>
            </a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>