<?php include 'header.php'; ?>

<main class="flex-grow p-4 md:p-8">
    <div class="max-w-[1200px] mx-auto mt-6 mb-16">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
                <h1 class="text-4xl font-black text-blue-900 uppercase">Solar Panels</h1>
                <p class="text-gray-500 font-medium mt-1">Premium High-Efficiency Modules from Industry Leaders</p>
            </div>
            <a href="index.php" class="flex items-center text-blue-600 font-bold hover:text-blue-800 transition bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-100">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Home
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="h-64 bg-gray-200 relative overflow-hidden">
                    <img src="adanipanel.jpg" alt="Adani Solar" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/600x400?text=Adani+Solar+Panel'">
                    <div class="absolute top-4 right-4 bg-yellow-400 text-blue-900 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest shadow-md">Top Seller</div>
                </div>
                <div class="p-8 flex-grow">
                    <h2 class="text-2xl font-black text-blue-900 mb-4 uppercase tracking-tight">Adani Solar</h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Adani is India's largest integrated solar cell and module manufacturer. They offer cutting-edge technology for maximum power generation.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="bg-blue-50 p-4 rounded-2xl">
                            <h4 class="text-blue-900 font-black text-xs uppercase mb-2">Technical Details:</h4>
                            <ul class="text-xs text-gray-600 space-y-2">
                                <li class="flex items-center"><span class="text-blue-500 mr-2">●</span> <strong>Technology:</strong> Next-Gen Topcon (N-Type) & Mono PERC</li>
                                <li class="flex items-center"><span class="text-blue-500 mr-2">●</span> <strong>Wattage Range:</strong> 450Wp to 625Wp+</li>
                                <li class="flex items-center"><span class="text-blue-500 mr-2">●</span> <strong>Efficiency:</strong> High module efficiency up to 22.5%</li>
                                <li class="flex items-center"><span class="text-blue-500 mr-2">●</span> <strong>Bifacial:</strong> Dual glass modules for back-side power</li>
                            </ul>
                        </div>
                        <p class="text-xs font-bold text-gray-400 italic">Best for large industrial & residential projects.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="h-64 bg-gray-200 relative overflow-hidden">
                    <img src="wareepanel.jpg" alt="Waaree Solar" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/600x400?text=Waaree+Solar+Panel'">
                    <div class="absolute top-4 right-4 bg-blue-900 text-white text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest shadow-md">Tier 1</div>
                </div>
                <div class="p-8 flex-grow">
                    <h2 class="text-2xl font-black text-blue-900 mb-4 uppercase tracking-tight">Waaree Solar</h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Waaree Energies is a global leader in solar energy. Known for high-quality PV modules that deliver reliable performance for 25+ years.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="bg-yellow-50 p-4 rounded-2xl border border-yellow-100">
                            <h4 class="text-yellow-700 font-black text-xs uppercase mb-2">Technical Details:</h4>
                            <ul class="text-xs text-gray-600 space-y-2">
                                <li class="flex items-center"><span class="text-yellow-600 mr-2">●</span> <strong>Technology:</strong> Mono PERC Elite Series</li>
                                <li class="flex items-center"><span class="text-yellow-600 mr-2">●</span> <strong>Wattage Range:</strong> 335Wp to 600Wp+</li>
                                <li class="flex items-center"><span class="text-yellow-600 mr-2">●</span> <strong>Series:</strong> Arka & Bi-28 (Bifacial) Series</li>
                                <li class="flex items-center"><span class="text-yellow-600 mr-2">●</span> <strong>Reliability:</strong> Excellent PID resistance & low degradation</li>
                            </ul>
                        </div>
                        <p class="text-xs font-bold text-gray-400 italic">Trusted by millions of Indian households.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="h-64 bg-gray-200 relative overflow-hidden">
                    <img src="otherpanel.jpg" alt="Other Brands" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/600x400?text=Other+Premium+Brands'">
                </div>
                <div class="p-8 flex-grow">
                    <h2 class="text-2xl font-black text-blue-900 mb-4 uppercase tracking-tight">Other Brands</h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        We also deal in various premium brands like Vikram Solar, Goldie Solar, and RenewSys as per your budget.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100">
                            <h4 class="text-gray-700 font-black text-xs uppercase mb-2">Technical Details:</h4>
                            <p class="text-xs text-gray-500 italic mb-3"></p>
                            <ul class="text-xs text-gray-600 space-y-2">
                                <li class="flex items-center"><span class="text-gray-400 mr-2">●</span> <strong>Brand:</strong> Other Brand</li>
                                <li class="flex items-center"><span class="text-gray-400 mr-2">●</span> <strong>Tech:</strong> Mono / Poly / Topcon</li>
                                <li class="flex items-center"><span class="text-gray-400 mr-2">●</span> <strong>Wattage:</strong>450Wp to 570Wp+</li>
                                <li class="flex items-center"><span class="text-gray-400 mr-2"></span> <strong></strong></li>
                            </ul>
                        </div>
                        <p class="text-xs font-bold text-gray-400 italic">Customized solutions for every budget.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php include 'footer.php'; ?>