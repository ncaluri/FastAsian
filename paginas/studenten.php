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
              green: '#1a7746',
              green_light: '#288856',
              orange: '#f28e2b',
              bg: '#f8fafc',
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
<!-- Material Symbols for Icons (sidebar) -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-scalda-bg text-gray-800 antialiased h-screen flex overflow-hidden">
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
<a class="flex items-center gap-3 px-4 py-2.5 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors font-medium" href="index.php">
<span class="material-symbols-outlined">calendar_today</span>
        Vandaag Inchecken
      </a>
<a aria-current="page" class="flex items-center gap-3 px-4 py-2.5 rounded bg-scalda-orange text-white font-medium shadow-sm transition-colors" href="studenten.php">
<span class="material-symbols-outlined">badge</span>
        Studenten &amp; Pasjes
      </a>
<a class="flex items-center gap-3 px-4 py-2.5 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors font-medium" href="kalender.php">
<span class="material-symbols-outlined">calendar_month</span>
        Kalender
      </a>
</nav>
<!-- Bottom Actions -->
<div class="p-4 border-t border-white/10 space-y-2">
<a class="flex items-center gap-3 px-3 py-2 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors text-sm font-medium" href="instelling.php">
<span class="material-symbols-outlined">settings</span>
        Instellingen
      </a>
<a class="flex items-center gap-3 px-3 py-2 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors text-sm font-medium" href="uitloggen.php">
<span class="material-symbols-outlined">logout</span>
        Uit Loggen
      </a>
</div>
</aside>
<!-- END: Sidebar -->
<!-- BEGIN: Main Content -->
<main class="flex-1 flex flex-col h-full overflow-hidden bg-gray-50">
<!-- Header -->
<header class="bg-white h-16 flex items-center justify-end px-8 shadow-sm z-0 shrink-0">
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
<form id="student-form" class="flex flex-col gap-4">
<div class="flex flex-col md:flex-row items-end gap-4">
<div class="flex-1 w-full">
<label class="block text-xs font-semibold text-gray-700 mb-1" for="naam">Naam Student</label>
<input class="block w-full rounded-md border-gray-300 shadow-sm focus:border-scalda-green focus:ring-scalda-green sm:text-sm px-4 py-2.5 border" id="naam" placeholder="Volledige naam" type="text" required>
</div>
<div class="w-full md:w-64">
<label class="block text-xs font-semibold text-gray-700 mb-1" for="klas">Klas / Groep</label>
<input class="block w-full rounded-md border-gray-300 shadow-sm focus:border-scalda-green focus:ring-scalda-green sm:text-sm px-4 py-2.5 border" id="klas" placeholder="Bijv: SD1A" type="text" required>
</div>
<div class="flex gap-3 w-full md:w-auto">
<button id="scan-btn" class="inline-flex items-center px-4 py-2.5 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-400 bg-gray-100 cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-scalda-green transition-colors" type="button" disabled>
<i class="fa-solid fa-expand mr-2"></i> Scan NFC
            </button>
<button id="toevoegen-btn" class="inline-flex items-center px-6 py-2.5 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-300 cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-scalda-orange transition-colors" type="submit" disabled>
<i class="fa-solid fa-plus mr-2"></i> Toevoegen
            </button>
</div>
</div>
<div class="flex items-center gap-3">
<input id="student_nummer" class="hidden" type="text" readonly>
<span id="scan-status" class="text-sm text-gray-500">Vul eerst naam en klas in om te kunnen scannen.</span>
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




<script>
(function () {
  const naamInput = document.getElementById('naam');
  const klasInput = document.getElementById('klas');
  const scanBtn = document.getElementById('scan-btn');
  const toevoegenBtn = document.getElementById('toevoegen-btn');
  const nummerInput = document.getElementById('student_nummer');
  const statusEl = document.getElementById('scan-status');
  const form = document.getElementById('student-form');

  function setButtonEnabled(btn, enabled, activeClasses, inactiveClasses) {
    btn.disabled = !enabled;
    btn.className = btn.className
      .replace(inactiveClasses, '')
      .replace(activeClasses, '')
      .trim() + ' ' + (enabled ? activeClasses : inactiveClasses);
  }

  const scanActive = 'text-gray-700 bg-white hover:bg-gray-50';
  const scanInactive = 'text-gray-400 bg-gray-100 cursor-not-allowed';
  const addActive = 'text-white bg-scalda-orange hover:bg-orange-500';
  const addInactive = 'text-white bg-gray-300 cursor-not-allowed';

  function checkNaamKlas() {
    const ready = naamInput.value.trim() !== '' && klasInput.value.trim() !== '';
    setButtonEnabled(scanBtn, ready, scanActive, scanInactive);
    if (ready && !nummerInput.value) {
      statusEl.textContent = 'Klik op "Scan NFC" en houd de studentenpas tegen de scanner.';
    } else if (!ready) {
      statusEl.textContent = 'Vul eerst naam en klas in om te kunnen scannen.';
      nummerInput.value = '';
      setButtonEnabled(toevoegenBtn, false, addActive, addInactive);
    }
  }

  naamInput.addEventListener('input', checkNaamKlas);
  klasInput.addEventListener('input', checkNaamKlas);

  scanBtn.addEventListener('click', function () {
    nummerInput.value = '';
    setButtonEnabled(toevoegenBtn, false, addActive, addInactive);
    statusEl.innerHTML = '<i class="fa-solid fa-satellite-dish mr-1.5 text-scalda-orange"></i> Wacht op scan\u2026 houd de pas tegen de scanner';
    nummerInput.classList.remove('hidden');
    nummerInput.readOnly = false;
    nummerInput.value = '';
    nummerInput.focus();
  });

  nummerInput.addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      const scanned = nummerInput.value.trim();
      if (!scanned) {
        statusEl.textContent = 'Geen geldige scan ontvangen, probeer opnieuw.';
        return;
      }
      nummerInput.readOnly = true;
      statusEl.innerHTML = '<i class="fa-solid fa-circle-check mr-1.5 text-scalda-green"></i> Pas gescand: <span class="font-semibold text-gray-800">' + scanned + '</span>';
      setButtonEnabled(toevoegenBtn, true, addActive, addInactive);
    }
  });

  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    if (!naamInput.value.trim() || !klasInput.value.trim() || !nummerInput.value.trim()) {
      statusEl.textContent = 'Naam, klas en een gescand studentnummer zijn verplicht.';
      return;
    }
    const payload = {
      naam: naamInput.value.trim(),
      klas: klasInput.value.trim(),
      student_nummer: nummerInput.value.trim()
    };
    // TODO: koppel dit aan Supabase, bijvoorbeeld:
    // const { error } = await supabase.from('studenten').insert({
    //   naam: payload.naam,
    //   student_nummer: payload.student_nummer,
    //   klas_id: <opgezocht klas_id op basis van payload.klas>
    // });
    console.log('Nieuwe student klaar om op te slaan:', payload);
    statusEl.innerHTML = '<i class="fa-solid fa-circle-check mr-1.5 text-scalda-green"></i> ' + payload.naam + ' toegevoegd.';
    form.reset();
    nummerInput.value = '';
    nummerInput.classList.add('hidden');
    setButtonEnabled(scanBtn, false, scanActive, scanInactive);
    setButtonEnabled(toevoegenBtn, false, addActive, addInactive);
  });
})();
</script>
</body></html>
