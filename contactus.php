<?php include 'header.php'; ?>

<main class="flex-grow p-4 md:p-8">
    <div class="max-w-[1200px] mx-auto mt-10 mb-16">
        
        <div class="text-center mb-12">
            <h2 class="section-title text-3xl">Contact Us / Query</h2>
            <p class="text-gray-500 font-medium">To install solar panels or for any query, fill out the form below.</p>
        </div>

        <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden flex flex-col md:flex-row border border-gray-100">
            
            <div class="bg-blue-900 w-full md:w-2/5 p-10 text-white flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-blue-800 rounded-full opacity-50"></div>
                
                <div class="relative z-10">
                    <h2 class="text-3xl font-black mb-4 text-yellow-400">Get in Touch</h2>
                    <p class="text-blue-100 mb-10 leading-relaxed">Send us a message, and we'll get back to you as soon as possible.</p>
                    
                    <div class="space-y-8">
                        <a href="tel:+918200379938" class="flex items-center space-x-5 group cursor-pointer">
                            <div class="bg-blue-800 p-3 rounded-xl group-hover:bg-yellow-400 group-hover:text-blue-900 transition-all">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-blue-300 uppercase tracking-widest">Call Us</p>
                                <p class="text-lg font-bold">+91 82003 79938</p>
                            </div>
                        </a>

                        <a href="mailto:hari.hr.solar@gmail.com" class="flex items-center space-x-5 group cursor-pointer">
                            <div class="bg-blue-800 p-3 rounded-xl group-hover:bg-yellow-400 group-hover:text-blue-900 transition-all">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="overflow-hidden">
                                <p class="text-xs font-bold text-blue-300 uppercase tracking-widest">Email Us</p>
                                <p class="text-lg font-bold truncate">hari.hr.solar@gmail.com</p>
                            </div>
                        </a>

                        <div class="flex items-center space-x-5">
                            <div class="bg-blue-800 p-3 rounded-xl text-yellow-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-blue-300 uppercase tracking-widest">Office</p>
                                <p class="text-lg font-bold">Surat, Gujarat</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 relative z-10">
                    <p class="text-sm font-medium text-blue-200 uppercase tracking-tighter italic">"Premium Solar Solutions for Everyone"</p>
                </div>
            </div>

            <div class="w-full md:w-3/5 p-10 bg-white">
                <h3 class="text-2xl font-black text-blue-900 mb-6">Send Your Query</h3>
                
                <form action="submit_query.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-1">
                            <label class="block text-sm font-bold text-gray-700">Full Name *</label>
                            <input type="text" name="full_name" required placeholder="Name" 
                                class="w-full p-4 rounded-xl bg-gray-50 border border-gray-200 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all">
                        </div>
                        
                        <div class="space-y-1">
                            <label class="block text-sm font-bold text-gray-700">Phone Number *</label>
                            <input type="tel" name="phone_number" required placeholder="Mobile Number" 
                                class="w-full p-4 rounded-xl bg-gray-50 border border-gray-200 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all">
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label class="block text-sm font-bold text-gray-700">Requirement (Solar Capacity)</label>
                        <select name="requirement" 
                            class="w-full p-4 rounded-xl bg-gray-50 border border-gray-200 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all appearance-none cursor-pointer">
                            <option value="1KW-3KW">Residential (1 KW to 3 KW)</option>
                            <option value="3KW-10KW">Residential (3 KW to 10 KW)</option>
                            <option value="Commercial">Commercial / Industrial (>10 KW)</option>
                            <option value="Inquiry">General Inquiry / AMC</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label class="block text-sm font-bold text-gray-700">Message / Address</label>
                        <textarea name="message" rows="4" placeholder="Your requirements or address..." 
                            class="w-full p-4 rounded-xl bg-gray-50 border border-gray-200 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" 
                            class="w-full py-4 bg-yellow-400 text-blue-900 font-black rounded-xl hover:bg-yellow-500 hover:shadow-xl transition-all transform active:scale-95 text-lg flex items-center justify-center space-x-2">
                            <span>Submit Query</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </form>
                
                <p class="text-xs text-gray-400 mt-6 text-center italic">*You can also send us a message on WhatsApp once you submit..</p>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>