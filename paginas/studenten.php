<!DOCTYPE html><html lang="en" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Scalda - Studenten &amp; Pasjes</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            scalda: {
              green: '#0e7040',
              orange: '#f08922',
              gray: '#f5f7f9',
              dark: '#333333'
            }
          }
        }
      }
    }
  </script>
<style data-purpose="custom-styles" type="text/tailwindcss">
    @layer utilities {
      .table-row-hover:hover {
        @apply bg-gray-50;
      }
    }
  </style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-[#f0f2f5] text-gray-800 antialiased overflow-x-hidden min-h-screen flex">
<!-- BEGIN: Sidebar -->
<aside class="w-64 bg-scalda-green min-h-screen flex flex-col shadow-xl z-10 flex-shrink-0 text-white font-medium sticky top-0 h-screen">
<div class="p-4 bg-white flex items-center shadow-sm">
<img alt="Scalda Logo" class="h-12 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBiAjjkqwVeJ7mfFLctWlRFR8lYztjxMdQGQRVt_xhUtrPmGivJukOq0azvrSXOAqTV8wV7ZMg6KAbLz_IzOx_hyuq_Pagrjhd1ipE0ml3o6i-KiOV7czPjdGReC-88Ew-seAj1Z_bsrjLbUTVlzFEFaIeCpNJ9uIu4zQ9UPK_0GCNnM-XFMDH2AOhma16CNgPymzJzIvE65eCiBdo1nNpnzXTAMrrHDaniAf8kpAoSmKjwpOfn3XystmUvcGlk3Qzj">
</div>
<div class="px-4 py-6">
<h2 class="text-white text-lg font-bold mb-1">Hoofdingang</h2>
<p class="text-green-200 text-sm font-normal mb-8">Live Dashboard</p>
<nav class="space-y-2">
<a class="flex items-center px-4 py-2.5 text-green-100 hover:bg-green-700/50 rounded-lg transition-colors group" href="#">
<i class="fa-regular fa-calendar-check w-5 h-5 mr-3 text-center text-lg"></i>
<span class="">Vandaag Inchecken</span>
</a>
<a class="flex items-center px-4 py-2.5 bg-scalda-orange text-white rounded-lg shadow-md transition-colors" href="#">
<i class="fa-solid fa-address-card w-5 h-5 mr-3 text-center text-lg"></i>
<span class="">Studenten &amp; Pasjes</span>
</a>
</nav>
</div>
<div class="mt-auto px-4 pb-6 space-y-2">
<a class="flex items-center px-4 py-2 text-green-100 hover:bg-green-700/50 rounded-lg transition-colors text-sm" href="#">
<i class="fa-solid fa-gear w-4 h-4 mr-3 text-center"></i>
<span class="">Instellingen</span>
</a>
<a class="flex items-center px-4 py-2 text-green-100 hover:bg-green-700/50 rounded-lg transition-colors text-sm" href="#">
<i class="fa-solid fa-arrow-right-from-bracket w-4 h-4 mr-3 text-center"></i>
<span class="">Uitloggen</span>
</a>
</div>
</aside>
<!-- END: Sidebar -->
<!-- BEGIN: Main Content -->
<main class="flex-1 flex flex-col min-h-screen overflow-hidden bg-gray-50">
<!-- Header -->
<header class="bg-white h-16 flex items-center justify-end px-8 shadow-sm z-0 flex-shrink-0">
<div class="flex items-center space-x-4 text-gray-500">
<button class="hover:text-gray-700 transition-colors">
<i class="fa-regular fa-clock text-xl"></i>
</button>
<button class="hover:text-gray-700 transition-colors">
<i class="fa-solid fa-location-dot text-xl"></i>
</button>
</div>
</header>
<div class="p-8 overflow-y-auto flex-1">
<!-- Page Title -->
<div class="mb-8">
<h1 class="text-3xl font-bold text-gray-900 mb-1">Studenten &amp; Pasjes</h1>
<p class="text-gray-500 text-sm">Beheer studentengegevens en gekoppelde NFC-kaarten.</p>
</div>
<!-- Add New Student Form -->
<section class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
<h2 class="text-lg font-semibold text-gray-900 mb-4 border-b border-gray-100 pb-3">Nieuwe Student Toevoegen</h2>
<form class="flex flex-col md:flex-row items-end gap-4">
<div class="flex-1 w-full">
<label class="block text-xs font-semibold text-gray-700 mb-1" for="naam">Naam Student</label>
<input class="block w-full rounded-md border-gray-300 shadow-sm focus:border-scalda-green focus:ring-scalda-green sm:text-sm px-4 py-2.5 border" id="naam" placeholder="Volledige naam" type="text">
</div>
<div class="w-full md:w-64">
<label class="block text-xs font-semibold text-gray-700 mb-1" for="klas">Klas / Groep</label>
<input class="block w-full rounded-md border-gray-300 shadow-sm focus:border-scalda-green focus:ring-scalda-green sm:text-sm px-4 py-2.5 border" id="klas" placeholder="Bijv: 3B" type="text">
</div>
<div class="flex gap-3 w-full md:w-auto">
<button class="inline-flex items-center px-4 py-2.5 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-scalda-green transition-colors" type="button">
<i class="fa-solid fa-expand mr-2 text-scalda-orange"></i> Scan NFC
            </button>
<button class="inline-flex items-center px-6 py-2.5 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-scalda-orange hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-scalda-orange transition-colors" type="submit">
<i class="fa-solid fa-plus mr-2"></i> Toevoegen
            </button>
</div>
</form>
</section>
<!-- Student Table Section -->
<section class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
<!-- Table Toolbar -->
<div class="bg-scalda-green p-4 flex justify-between items-center text-white">
<div class="relative w-96">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<i class="fa-solid fa-magnifying-glass text-gray-400"></i>
</div>
<input class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:bg-white focus:ring-0 focus:border-transparent sm:text-sm transition-colors" placeholder="Zoek student of NFC ID..." type="text">
</div>
<button class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded text-green-100 hover:text-white hover:bg-green-700 focus:outline-none transition-colors">
<i class="fa-solid fa-filter mr-2"></i> Filters
          </button>
</div>
<!-- Table -->
<div class="overflow-x-auto">
<table class="min-w-full divide-y divide-gray-200">
<thead class="bg-scalda-green text-white">
<tr>
<th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border-r border-green-700" scope="col">Student Name</th>
<th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border-r border-green-700" scope="col">ID</th>
<th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border-r border-green-700" scope="col">Class</th>
<th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border-r border-green-700" scope="col">Linked NFC ID</th>
<th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wider" scope="col">Actions</th>
</tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200">
<!-- Row 1 -->
<tr class="table-row-hover transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center">
<div class="flex-shrink-0 h-8 w-8 bg-orange-200 rounded-full flex items-center justify-center text-orange-700 font-bold text-xs">
                      LD
                    </div>
<div class="ml-4">
<div class="text-sm font-medium text-gray-900">Lion Davies</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">STU-1042</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">4K</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4414D.12.23</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<button class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-ellipsis-vertical"></i></button>
</td>
</tr>
<!-- Row 2 -->
<tr class="table-row-hover transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center">
<div class="flex-shrink-0 h-8 w-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xs">
                      IK
                    </div>
<div class="ml-4">
<div class="text-sm font-medium text-gray-900">Innika Klaar</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">STU-1044</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">4K</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">BAICO-KK XX</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<button class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-ellipsis-vertical"></i></button>
</td>
</tr>
<!-- Row 3 -->
<tr class="table-row-hover transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center">
<div class="flex-shrink-0 h-8 w-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-600 font-bold text-xs">
                      NJ
                    </div>
<div class="ml-4">
<div class="text-sm font-medium text-gray-900">Noah Jones</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">STU-1044</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">4X</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-red-500 flex items-center gap-2">
<i class="fa-solid fa-triangle-exclamation text-xs"></i> Niet gekoppeld
                </td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<button class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-ellipsis-vertical"></i></button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="bg-white px-4 py-3 border-t border-gray-200 flex items-center justify-between sm:px-6">
<div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
<div>
<p class="text-sm text-gray-500">
                Tonen <span class="font-medium">1-3</span> van <span class="font-medium">124</span> studenten
              </p>
</div>
<div>
<nav aria-label="Pagination" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
<a class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 bg-scalda-orange text-white border-transparent mr-1 rounded" href="#">
<span class="sr-only">Previous</span>
<i class="fa-solid fa-chevron-left w-5 h-5 text-center leading-5"></i>
</a>
<a class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 bg-scalda-orange text-white border-transparent rounded" href="#">
<span class="sr-only">Next</span>
<i class="fa-solid fa-chevron-right w-5 h-5 text-center leading-5"></i>
</a>
</nav>
</div>
</div>
</div>
</section>
</div>
</main>
<!-- END: Main Content -->




</body></html>