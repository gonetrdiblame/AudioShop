<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tailwind Vite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="absolute top-0 left-0 w-full z-10 bg-transparent text-black">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <a href="#" class="text-black text-lg font-bold">Home</a>
        <div class="space-x-4">
            <a href="#" class="text-black">New Products</a>
            <a href="#" class="text-black">Gallery</a>
            <a href="/login" class="text-black">Login</a>
            <a href="/register" class="text-black">Register</a>
        </div>
    </div>
</nav>
    
<!-- Hero Section -->
<section class="relative text-left px-10">
    <img src="/images/hero.jpg" alt="Hero Image" class="w-full object-cover">
    <div class="absolute inset-0 flex items-center justify-end pr-16">
        <h1 class="text-6xl font-bold text-black text-right">PUT THE<br>WORLD ON<br>MUTE</h1>
    </div>
</section>

<!-- New Products Section -->
<section class="container mx-auto py-16 text-center">
    <h2 class="text-3xl font-bold mb-10">NEW PRODUCTS</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
        <!-- Product Card -->
<div class="bg-white shadow-md p-8 rounded-lg w-96 flex flex-col items-center">
    <img src="/images/path-to-image.jpg" alt="Product Image" class="w-full max-h-60 object-contain mb-4 rounded-md">
    <h3 class="text-xl font-semibold">Beats Solo</h3>
    <p class="text-gray-600 text-lg">$255.00</p>
    <div class="flex justify-center space-x-3 mt-3">
        <span class="w-6 h-6 bg-red-500 rounded-full"></span>
        <span class="w-6 h-6 bg-blue-500 rounded-full"></span>
        <span class="w-6 h-6 bg-green-500 rounded-full"></span>
    </div>
</div>
<!-- Repeat for other products -->
<div class="bg-white shadow-md p-8 rounded-lg w-96 flex flex-col items-center">
    <img src="/images/path-to-image1.jpg" alt="Product Image" class="w-full max-h-60 object-contain mb-4 rounded-md">
    <h3 class="text-xl font-semibold">Beats Solo</h3>
    <p class="text-gray-600 text-lg">$255.00</p>
    <div class="flex justify-center space-x-3 mt-3">
        <span class="w-6 h-6 bg-red-500 rounded-full"></span>
        <span class="w-6 h-6 bg-blue-500 rounded-full"></span>
        <span class="w-6 h-6 bg-green-500 rounded-full"></span>
    </div>
</div>
<div class="bg-white shadow-md p-8 rounded-lg w-96 flex flex-col items-center">
    <img src="/images/path-to-image2.jpg" alt="Product Image" class="w-full max-h-60 object-contain mb-4 rounded-md">
    <h3 class="text-xl font-semibold">Beats Solo</h3>
    <p class="text-gray-600 text-lg">$255.00</p>
    <div class="flex justify-center space-x-3 mt-3">
        <span class="w-6 h-6 bg-red-500 rounded-full"></span>
        <span class="w-6 h-6 bg-blue-500 rounded-full"></span>
        <span class="w-6 h-6 bg-green-500 rounded-full"></span>
    </div>
</div>
</div>
</section>
<x-app-layout>
@if(isset($services) && $services->count())
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($services as $service)
    <div class="bg-white shadow-lg rounded-lg p-6">
        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="w-full h-48 object-cover rounded-md">
        <h3 class="text-lg font-semibold mt-4">{{ $service->title }}</h3>
        <p class="text-gray-600">{{ Str::limit($service->description, 100) }}</p>
        <span class="inline-block px-3 py-1 mt-2 text-sm font-semibold {{ $service->status == 'activ' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
            {{ ucfirst($service->status) }}
        </span>
    </div>
    @endforeach
</div>
@else
    <p class="text-gray-500">Нет доступных сервисов.</p>
@endif

</x-app-layout>

    
<!-- Gallery Section -->
<section class="container mx-auto py-16 text-center">
  <h2 class="text-3xl font-bold mb-10">GALLERY</h2>
  <div class="relative w-full flex justify-center">
    <div class="relative w-[60%] flex items-center justify-center overflow-hidden">
      <div id="gallery" class="relative w-full h-72 flex items-center justify-center">
        <img src="/images/gallery.png" class="gallery-img left-blur" alt="Gallery Image 1">
        <img src="/images/gallery1.png" class="gallery-img left" alt="Gallery Image 2">
        <img src="/images/gallery2.png" class="gallery-img center" alt="Gallery Image 3">
        <img src="/images/gallery3.png" class="gallery-img right" alt="Gallery Image 4">
        <img src="/images/gallery4.png" class="gallery-img right-blur" alt="Gallery Image 5">
      </div>
      <button id="prevSlide" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-3xl cursor-pointer">&#9664;</button>
      <button id="nextSlide" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-3xl cursor-pointer">&#9654;</button>
    </div>
  </div>
  <div class="flex justify-center space-x-2 mt-4">
    <span class="dot w-3 h-3 bg-gray-400 rounded-full"></span>
    <span class="dot w-3 h-3 bg-gray-400 rounded-full"></span>
    <span class="dot w-3 h-3 bg-gray-600 rounded-full"></span>
    <span class="dot w-3 h-3 bg-gray-400 rounded-full"></span>
    <span class="dot w-3 h-3 bg-gray-400 rounded-full"></span>
  </div>
</section>

<footer class="bg-gray-800 text-white text-center py-4 mt-10">
  <p>Zaharov Serghei - Email: zaharov.serghei@elev.cihcahul.md</p>
</footer>

<style>
  .gallery-img {
    position: absolute;
    width: 60%;
    transition: all 0.5s ease-in-out;
  }

  .center {
    width: 80%;
    z-index: 10;
    opacity: 1;
    transform: scale(1);
  }

  .left {
    left: -10%;
    opacity: 0.6;
    transform: scale(0.8);
  }

  .right {
    right: -10%;
    opacity: 0.6;
    transform: scale(0.8);
  }

  .left-blur, .right-blur {
    filter: blur(5px);
    opacity: 0.4;
  }

  .left-blur {
    left: -20%;
  }

  .right-blur {
    right: -20%;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 2;
    const images = document.querySelectorAll(".gallery-img");
    const dots = document.querySelectorAll(".dot");
    const prevButton = document.getElementById("prevSlide");
    const nextButton = document.getElementById("nextSlide");

    function updateGallery() {
      images.forEach((img, index) => {
        img.classList.remove("center", "left", "right", "left-blur", "right-blur");
        if (index === currentIndex) {
          img.classList.add("center");
        } else if (index === currentIndex - 1) {
          img.classList.add("left");
        } else if (index === currentIndex + 1) {
          img.classList.add("right");
        } else if (index === currentIndex - 2 || (currentIndex === 1 && index === images.length - 1)) {
          img.classList.add("left-blur");
        } else if (index === currentIndex + 2 || (currentIndex === images.length - 2 && index === 0)) {
          img.classList.add("right-blur");
        }
      });

      dots.forEach((dot, index) => {
        dot.classList.toggle("bg-gray-600", index === currentIndex);
        dot.classList.toggle("bg-gray-400", index !== currentIndex);
      });
    }

    prevButton.addEventListener("click", () => {
      currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
      updateGallery();
    });

    nextButton.addEventListener("click", () => {
      currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
      updateGallery();
    });

    updateGallery();
  });
</script>
</body>
</html>
