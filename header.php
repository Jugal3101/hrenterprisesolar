<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Enterprise | Premium Solar Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #f0f4f8; overflow-x: hidden; }
        
        .box-popup { transition: all 0.5s ease; background: white; border: 1px solid rgba(255, 255, 255, 0.2); }
        .box-popup:hover { transform: translateY(-10px); box-shadow: 0 20px 40px -12px rgba(30, 58, 138, 0.25); border-color: #fbbf24; }
        
        .section-title { position: relative; display: inline-block; padding-bottom: 10px; margin-bottom: 30px; font-weight: 800; color: #1e3a8a; text-transform: uppercase; letter-spacing: 0.1em; }
        .section-title::after { content: ''; position: absolute; left: 0; bottom: 0; width: 40px; height: 4px; background: #fbbf24; border-radius: 10px; transition: 0.4s ease; }
        section:hover .section-title::after { width: 80px; }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-24 items-center">
                <div class="flex items-center space-x-3">
                    <img src="logo.jpg" alt="HR Enterprise Logo" class="h-16 w-auto object-contain">
                    <div class="flex flex-col">
                        <span class="text-2xl font-black text-blue-900 tracking-tight">HR <span class="text-blue-500 font-light">ENTERPRISE</span></span>
                        <span class="text-[10px] text-gray-500 font-bold tracking-widest uppercase">Solar Energy</span>
                    </div>
                </div>
                
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="index.php" class="text-gray-700 hover:text-blue-600 font-bold transition">Home</a>
                    <a href="aboutus.php" class="text-gray-700 hover:text-blue-600 font-bold transition">About Us</a>
                    <a href="contactus.php" class="px-6 py-2.5 bg-yellow-400 text-blue-900 font-black rounded-full hover:bg-yellow-500 hover:shadow-lg transition-all transform hover:-translate-y-1">Contact / Query</a>
                </div>
            </div>
        </div>
    </nav>