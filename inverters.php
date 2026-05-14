<?php include 'header.php'; ?>

<main class="flex-grow p-4 md:p-8">
    <div class="max-w-[1200px] mx-auto mt-6 mb-16">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
                <h1 class="text-4xl font-black text-blue-900 uppercase">Smart Inverters</h1>
                <p class="text-gray-500 font-medium mt-1">Advanced On-Grid & Hybrid Solutions</p>
            </div>
            <a href="index.php" class="flex items-center text-blue-600 font-bold hover:text-blue-800 transition bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-100">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Home
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            
            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="h-80 bg-white relative overflow-hidden flex items-center justify-center p-6 border-b border-gray-100">
                    <img src="ongrid.jpg" alt="On-Grid Inverter" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="bg-blue-100 text-blue-600 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest">Grid-Tied</span>
                        <h2 class="text-2xl font-black text-blue-900 mt-4 mb-4">On-Grid (String) Inverters</h2>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Perfect for residential use where you want to reduce electricity bills by feeding excess power back to the grid. Designed for high efficiency and seamless integration.
                        </p>
                    </div>
                    
                    <div class="bg-blue-50 p-5 rounded-2xl border border-blue-100">
                        <h4 class="text-blue-900 font-black text-xs uppercase mb-3">Key Features:</h4>
                        <ul class="text-xs text-gray-700 space-y-2">
                            <li class="flex items-center"><span class="text-blue-500 mr-2">✔</span> High Efficiency > 98%</li>
                            <li class="flex items-center"><span class="text-blue-500 mr-2">✔</span> Smart Wi-Fi Monitoring App</li>
                            <li class="flex items-center"><span class="text-blue-500 mr-2">✔</span> Compact & Lightweight Design</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="h-80 bg-white relative overflow-hidden flex items-center justify-center p-6 border-b border-gray-100">
                    <img src="offgrid.webp" alt="Hybrid/Off-Grid Inverter" class="w-full h-full object-contain hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between">
                    <div>
                        <span class="bg-yellow-100 text-yellow-700 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest">Battery Backup</span>
                        <h2 class="text-2xl font-black text-blue-900 mt-4 mb-4">Hybrid / Off-Grid Inverters</h2>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Ideal for locations with frequent power cuts. These intelligent inverters manage solar power, grid power, and battery backup seamlessly to ensure 24/7 electricity.
                        </p>
                    </div>
                    
                    <div class="bg-yellow-50 p-5 rounded-2xl border border-yellow-100">
                        <h4 class="text-yellow-800 font-black text-xs uppercase mb-3">Key Features:</h4>
                        <ul class="text-xs text-gray-700 space-y-2">
                            <li class="flex items-center"><span class="text-yellow-600 mr-2">✔</span> Integrated Battery Management</li>
                            <li class="flex items-center"><span class="text-yellow-600 mr-2">✔</span> Works during Power Outages</li>
                            <li class="flex items-center"><span class="text-yellow-600 mr-2">✔</span> Advanced Load Control</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php include 'footer.php'; ?>