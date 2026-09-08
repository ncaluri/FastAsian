<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Scalda - Vandaag Inchecken</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Material Symbols for Icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            scalda: {
              green: '#1a7746', // Dark green sidebar/headers
              green_light: '#288856', // Hover state
              orange: '#f28e2b', // Active state/accents
              bg: '#f8fafc',    // Main background
              table_header: '#1e834b'
            },
            status: {
              ontime: { text: '#22c55e', bg: '#dcfce7' },
              late: { text: '#ef4444', bg: '#fee2e2' },
              work: { text: '#f97316', bg: '#ffedd5' }
            }
          }
        }
      }
    }
  </script>
<style data-purpose="custom-utilities">
    /* Utility to align material symbols properly */
    .material-symbols-outlined {
      vertical-align: middle;
      font-size: 1.25rem; /* 20px */
    }
    .material-symbols-outlined.sm {
      font-size: 1rem;
    }
  </style>
</head>
<body class="bg-scalda-bg font-sans text-slate-800 antialiased h-screen flex overflow-hidden">
<!-- BEGIN: Sidebar -->
<aside aria-label="Sidebar Navigation" class="w-64 bg-scalda-green flex flex-col h-full text-white shrink-0 shadow-lg z-10">
<!-- Logo Area -->
<div class="h-16 flex items-center px-6 bg-white w-full shadow-sm mb-6">
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-full bg-gradient-to-br from-yellow-400 to-green-600 relative overflow-hidden flex-shrink-0">
<div class="absolute inset-0 bg-black/10 mix-blend-overlay"></div>
</div>
<span class="text-xl font-semibold text-slate-800 tracking-tight">Scalda</span>
</div>
</div>
<!-- Main Navigation -->
<nav class="flex-1 px-3 py-2 space-y-1">
<a aria-current="page" class="flex items-center gap-3 px-4 py-2.5 rounded bg-scalda-orange text-white font-medium shadow-sm transition-colors" href="#">
<span class="material-symbols-outlined">calendar_today</span>
        Vandaag Inchecken
      </a>
<a class="flex items-center gap-3 px-4 py-2.5 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors font-medium" href="#">
<span class="material-symbols-outlined">badge</span>
        Studenten &amp; Pasjes
      </a>
</nav>
<!-- Bottom Actions -->
<div class="p-4 border-t border-white/10 space-y-2">
<a class="flex items-center gap-3 px-3 py-2 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors text-sm font-medium" href="#">
<span class="material-symbols-outlined">settings</span>
        Instellingen
      </a>
<a class="flex items-center gap-3 px-3 py-2 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors text-sm font-medium" href="#">
<span class="material-symbols-outlined">logout</span>
        Uit Loggen
      </a>
</div>
</aside>
<!-- END: Sidebar -->
<!-- BEGIN: Main Content Area -->
<main class="flex-1 flex flex-col h-full overflow-hidden bg-white">
<!-- BEGIN: Top Header -->
<header class="h-16 border-b border-slate-200 flex items-center justify-between px-8 bg-white shrink-0">
<div class="flex items-center gap-4 text-sm text-slate-500">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined sm">calendar_today</span>
<span>24 Okt 2023</span>
</div>
<div class="flex items-center gap-1.5 font-medium text-slate-700">
<span class="material-symbols-outlined sm text-slate-400">schedule</span>
<span>08:46:30</span>
</div>
<div class="flex items-center gap-1.5 ml-2">
<span class="material-symbols-outlined sm">location_on</span>
<span>Hoofdingang</span>
</div>
</div>
<div>
<!-- Potential right side header actions -->
</div>
</header>
<!-- END: Top Header -->
<!-- BEGIN: Scrollable Content -->
<div class="flex-1 overflow-auto p-8">
<!-- Page Title -->
<h1 class="text-3xl font-semibold text-slate-800 mb-8 tracking-tight">Vandaag Inchecken</h1>
<!-- BEGIN: Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
<!-- Attendance Card -->
<div class="bg-white border border-slate-200 rounded-lg p-5 shadow-sm flex items-center justify-between">
<div>
<h3 class="text-sm font-medium text-slate-500 mb-1">Totale Aanwezigheid</h3>
<div class="text-3xl font-bold text-slate-800">85%</div>
</div>
<div class="relative w-14 h-14">
<!-- Simple donut chart representation using conic-gradient -->
<div class="w-full h-full rounded-full" style="background: conic-gradient(#f28e2b 85%, #f1f5f9 0);"></div>
<div class="absolute inset-2 bg-white rounded-full flex items-center justify-center">
<span class="text-xs font-semibold text-slate-700">85%</span>
</div>
</div>
</div>
<!-- On Time Card -->
<div class="bg-white border border-slate-200 rounded-lg p-5 shadow-sm flex items-center justify-between relative overflow-hidden">
<div class="relative z-10">
<h3 class="text-sm font-medium text-slate-500 mb-1">Op Tijd</h3>
<div class="flex items-end gap-3">
<span class="text-3xl font-bold text-slate-800">342</span>
<span class="text-sm font-medium text-green-600 flex items-center mb-1">
<span class="material-symbols-outlined" style="font-size: 16px;">arrow_upward</span>
                12% vs gisteren
              </span>
</div>
</div>
<div class="w-10 h-10 rounded-full bg-scalda-orange text-white flex items-center justify-center relative z-10 shrink-0 shadow-sm">
<span class="material-symbols-outlined">check_circle</span>
</div>
</div>
<!-- Late Card -->
<div class="bg-white border border-slate-200 rounded-lg p-5 shadow-sm flex items-center justify-between">
<div>
<h3 class="text-sm font-medium text-slate-500 mb-1">Te Laat</h3>
<div class="flex items-end gap-3">
<span class="text-3xl font-bold text-slate-800">45</span>
<span class="text-sm font-medium text-red-500 flex items-center mb-1">
<span class="material-symbols-outlined" style="font-size: 16px;">arrow_downward</span>
                -5% vs gisteren
              </span>
</div>
</div>
<div class="w-10 h-10 rounded-full bg-orange-100 text-scalda-orange flex items-center justify-center shrink-0">
<span class="material-symbols-outlined">info</span>
</div>
</div>
</div>
<!-- END: Stats Cards -->
<!-- BEGIN: Table Section -->
<div class="bg-white border border-slate-200 rounded-lg shadow-sm overflow-hidden flex flex-col">
<!-- Filter Bar -->
<div class="p-4 border-b border-slate-200 bg-white flex flex-wrap gap-4 items-center justify-between">
<div class="flex items-center gap-3">
<select class="form-select border-slate-300 rounded-md text-sm shadow-sm focus:border-scalda-green focus:ring focus:ring-scalda-green/20 py-2 pl-3 pr-10 text-slate-700 bg-slate-50">
<option>Alle Klassen</option>
<option>4H</option>
<option>5V</option>
</select>
<select class="form-select border-slate-300 rounded-md text-sm shadow-sm focus:border-scalda-green focus:ring focus:ring-scalda-green/20 py-2 pl-3 pr-10 text-slate-700 bg-slate-50">
<option>Alle Statussen</option>
<option>Op Tijd</option>
<option>Te Laat</option>
</select>
</div>
<div class="relative max-w-sm w-full md:w-64">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-slate-400 sm">search</span>
</div>
<input class="form-input block w-full pl-9 pr-3 py-2 border border-slate-300 rounded-md text-sm placeholder-slate-400 focus:outline-none focus:border-scalda-green focus:ring-1 focus:ring-scalda-green shadow-sm" placeholder="Zoek student..." type="text">
</div>
</div>
<!-- Table -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse min-w-[800px]">
<thead>
<tr class="bg-scalda-table_header text-white text-sm font-medium tracking-wide">
<th class="py-3 px-6 w-1/4">Student</th>
<th class="py-3 px-6">Student ID</th>
<th class="py-3 px-6">Klas</th>
<th class="py-3 px-6">Scan Tijd</th>
<th class="py-3 px-6">Status</th>
<th class="py-3 px-6 text-right">Actie</th>
</tr>
</thead>
<tbody class="text-sm text-slate-600 divide-y divide-slate-200 bg-white">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 transition-colors group">
<td class="py-3 px-6 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-green-100 text-green-700 flex items-center justify-center font-semibold text-xs shrink-0">JD</div>
<span class="font-medium text-slate-800">Jan De Vries</span>
</div>
</td>
<td class="py-3 px-6">ST-64520</td>
<td class="py-3 px-6">4H</td>
<td class="py-3 px-6 font-medium">08:15</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-status-ontime-bg text-status-ontime-text border border-green-200">
<span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span> Op Tijd
                  </span>
</td>
<td class="py-3 px-6 text-right">
<button class="text-slate-400 hover:text-scalda-green transition-colors opacity-0 group-hover:opacity-100 p-1">
<span class="material-symbols-outlined sm">more_vert</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50 transition-colors group">
<td class="py-3 px-6 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-red-100 text-red-700 flex items-center justify-center font-semibold text-xs shrink-0">SJ</div>
<span class="font-medium text-slate-800">Sophie Jansen</span>
</div>
</td>
<td class="py-3 px-6">ST-53347</td>
<td class="py-3 px-6">5V</td>
<td class="py-3 px-6 font-medium text-slate-900">08:42</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-status-late-bg text-status-late-text border border-red-200">
<span class="w-1.5 h-1.5 rounded-full bg-red-500 mr-1.5"></span> Te Laat
                  </span>
</td>
<td class="py-3 px-6 text-right">
<button class="text-slate-400 hover:text-scalda-green transition-colors opacity-0 group-hover:opacity-100 p-1">
<span class="material-symbols-outlined sm">more_vert</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50 transition-colors group">
<td class="py-3 px-6 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-orange-100 text-orange-700 flex items-center justify-center font-semibold text-xs shrink-0">MB</div>
<span class="font-medium text-slate-800">Mohammed Bakker</span>
</div>
</td>
<td class="py-3 px-6">ST-55422</td>
<td class="py-3 px-6">2M</td>
<td class="py-3 px-6 font-medium">08:30</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-status-work-bg text-status-work-text border border-orange-200">
<span class="w-1.5 h-1.5 rounded-full bg-orange-500 mr-1.5"></span> Mat Werk
                  </span>
</td>
<td class="py-3 px-6 text-right">
<button class="text-slate-400 hover:text-scalda-green transition-colors opacity-0 group-hover:opacity-100 p-1">
<span class="material-symbols-outlined sm">more_vert</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50 transition-colors group">
<td class="py-3 px-6 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-green-100 text-green-700 flex items-center justify-center font-semibold text-xs shrink-0">LP</div>
<span class="font-medium text-slate-800">Lisa Peters</span>
</div>
</td>
<td class="py-3 px-6">ST-55421</td>
<td class="py-3 px-6">4H</td>
<td class="py-3 px-6 font-medium">08:20</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-status-ontime-bg text-status-ontime-text border border-green-200">
<span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span> Op Tijd
                  </span>
</td>
<td class="py-3 px-6 text-right">
<button class="text-slate-400 hover:text-scalda-green transition-colors opacity-0 group-hover:opacity-100 p-1">
<span class="material-symbols-outlined sm">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination / Footer -->
<div class="px-6 py-4 border-t border-slate-200 bg-white flex items-center justify-between text-sm text-slate-500">
<div>
            Tonen 1-4 van 224 studenten
          </div>
<div class="flex gap-2">
<button class="p-1 rounded bg-slate-100 text-slate-400 hover:bg-slate-200 transition-colors cursor-not-allowed" disabled="">
<span class="material-symbols-outlined sm">chevron_left</span>
</button>
<button class="p-1 rounded bg-scalda-orange text-white hover:bg-orange-600 transition-colors shadow-sm">
<span class="material-symbols-outlined sm">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- END: Table Section -->
</div>
<!-- END: Scrollable Content -->
</main>
<!-- END: Main Content Area -->
</body></html>