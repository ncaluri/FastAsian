<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Scalda - Instellingen</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Material Symbols for Icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<!-- Custom stylesheet -->
<link rel="stylesheet" href="../stylesheet/stylesheet.css">
<script>
    // NOTE: this config must stay inline — it's JS config read by the
    // Tailwind CDN script above, not CSS, so it can't live in stylesheet.css
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
<a class="flex items-center gap-3 px-4 py-2.5 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors font-medium" href="index.php">
<span class="material-symbols-outlined">calendar_today</span>
        Vandaag Inchecken
      </a>
<a class="flex items-center gap-3 px-4 py-2.5 rounded text-white/80 hover:bg-scalda-green_light hover:text-white transition-colors font-medium" href="studenten.php">
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
<a aria-current="page" class="flex items-center gap-3 px-3 py-2 rounded bg-scalda-orange text-white font-medium shadow-sm transition-colors text-sm" href="instelling.php">
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
<button class="px-4 py-2 bg-scalda-green hover:bg-scalda-green_light text-white text-sm font-medium rounded shadow-sm transition-colors flex items-center gap-1.5">
<span class="material-symbols-outlined sm">save</span>
<span>Opslaan</span>
</button>
</header>
<!-- END: Top Header -->
<!-- BEGIN: Scrollable Content -->
<div class="flex-1 overflow-auto p-8">
<!-- Page Title -->
<div class="flex items-center gap-2 mb-1">
<h1 class="text-3xl font-semibold text-slate-800 tracking-tight">Systeem Instellingen</h1>
<span class="px-2 py-0.5 rounded-full text-xs font-semibold bg-status-ontime-bg text-status-ontime-text border border-green-200">Actief</span>
</div>
<p class="text-sm text-slate-500 mb-8">Beheer scan-parameters, meldingen, schooltijden en hardwarekoppeling.</p>

<div class="max-w-6xl w-full space-y-6">

<!-- Sectie 1: Incheck- & Scanner Configuratie -->
<div class="bg-white border border-slate-200 rounded-lg shadow-sm p-6">
<div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-scalda-bg text-scalda-green flex items-center justify-center">
<span class="material-symbols-outlined">sensors</span>
</div>
<div>
<h2 class="text-base font-bold text-slate-900">NFC Scanner &amp; Inchecklogica</h2>
<p class="text-xs text-slate-500">Hardware-verbinding en geautomatiseerde registratieregels.</p>
</div>
</div>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-status-ontime-bg text-status-ontime-text border border-green-200">
<span class="w-2 h-2 rounded-full bg-green-500"></span>
            Scanner Verbonden (USB-02)
          </span>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Starttijd & Te Laat Drempel -->
<div class="space-y-2">
<label class="block text-xs font-semibold uppercase tracking-wider text-slate-600">Starttijd Eerste Lesuur (Te Laat grens)</label>
<div class="flex items-center gap-3">
<input class="px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 font-medium focus:ring-2 focus:ring-scalda-green focus:outline-none w-36" type="time" value="08:30">
<span class="text-xs text-slate-500">Scans ná deze tijd krijgen automatisch de status <span class="font-semibold text-status-late-text bg-status-late-bg px-1.5 py-0.5 rounded">Te Laat</span></span>
</div>
</div>

<!-- Marge / Tolerantie -->
<div class="space-y-2">
<label class="block text-xs font-semibold uppercase tracking-wider text-slate-600">Coulance Marge</label>
<select class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 font-medium focus:ring-2 focus:ring-scalda-green focus:outline-none bg-white">
<option value="0">0 minuten (exact op tijd)</option>
<option selected="" value="5">5 minuten speling (tot 08:35)</option>
<option value="10">10 minuten speling (tot 08:40)</option>
</select>
</div>

<!-- Toggle: Geluidssignaal -->
<div class="flex items-start justify-between p-3.5 bg-scalda-bg rounded-lg border border-slate-100">
<div>
<p class="text-sm font-semibold text-slate-800">Geluidssignaal bij scan</p>
<p class="text-xs text-slate-500 mt-0.5">Kort akoestisch piepsignaal ter bevestiging voor de student.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer mt-1">
<input checked="" class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-scalda-green"></div>
</label>
</div>

<!-- Toggle: Dubbele scan detectie -->
<div class="flex items-start justify-between p-3.5 bg-scalda-bg rounded-lg border border-slate-100">
<div>
<p class="text-sm font-semibold text-slate-800">Dubbele scan blokkade</p>
<p class="text-xs text-slate-500 mt-0.5">Voorkom herhaaldelijke scans binnen 15 minuten voor dezelfde pas.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer mt-1">
<input checked="" class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-scalda-green"></div>
</label>
</div>
</div>
</div>

<!-- Sectie 2: Locatie & Terminal Configuratie -->
<div class="bg-white border border-slate-200 rounded-lg shadow-sm p-6">
<div class="flex items-center gap-3 border-b border-slate-100 pb-4 mb-5">
<div class="w-10 h-10 rounded-lg bg-orange-100 text-scalda-orange flex items-center justify-center">
<span class="material-symbols-outlined">meeting_room</span>
</div>
<div>
<h2 class="text-base font-bold text-slate-900">Locatie &amp; Incheckzuil</h2>
<p class="text-xs text-slate-500">Wijs deze terminal toe aan een specifieke locatie of onderwijslokaal.</p>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div>
<label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Campus / Vestiging</label>
<select class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 font-medium focus:ring-2 focus:ring-scalda-green focus:outline-none bg-white">
<option selected="">Scalda Vlissingen (Edisonweg)</option>
<option>Scalda Middelburg (Ravensteijnweg)</option>
<option>Scalda Terneuzen (Zeldenrustlaan)</option>
<option>Scalda Goes (Brouwersgang)</option>
</select>
</div>

<div>
<label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Zone / Ruimte</label>
<select class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 font-medium focus:ring-2 focus:ring-scalda-green focus:outline-none bg-white">
<option selected="">Hoofdingang (Hal A)</option>
<option>Ingang ICT-Vleugel (Hal C)</option>
<option>Lokaal A.102 (Theorielokaal)</option>
<option>Werkplaats Techniek</option>
</select>
</div>

<div>
<label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Terminal ID &amp; Modus</label>
<input class="w-full px-3.5 py-2 bg-scalda-bg border border-slate-200 rounded-lg text-sm text-slate-600 font-medium cursor-not-allowed" readonly="" type="text" value="TERM-VLI-01 (Incheck-only)">
</div>
</div>
</div>

<!-- Sectie 3: Notificaties & Verzuim Rapportages -->
<div class="bg-white border border-slate-200 rounded-lg shadow-sm p-6">
<div class="flex items-center gap-3 border-b border-slate-100 pb-4 mb-5">
<div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
<span class="material-symbols-outlined">notifications_active</span>
</div>
<div>
<h2 class="text-base font-bold text-slate-900">Meldingen &amp; Verzuimcoördinatie</h2>
<p class="text-xs text-slate-500">Stel in wanneer mentoren en studentbegeleiders automatisch bericht ontvangen.</p>
</div>
</div>

<div class="space-y-4">
<div class="flex items-center justify-between p-3.5 bg-scalda-bg rounded-lg border border-slate-100">
<div>
<p class="text-sm font-semibold text-slate-800">Automatische melding bij chronisch te laat</p>
<p class="text-xs text-slate-500 mt-0.5">Verstuur direct een signaal naar de mentor wanneer een leerling 3x in één week te laat is.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-scalda-green"></div>
</label>
</div>

<div class="flex items-center justify-between p-3.5 bg-scalda-bg rounded-lg border border-slate-100">
<div>
<p class="text-sm font-semibold text-slate-800">Dagelijkse aanwezigheidsrapportage per e-mail</p>
<p class="text-xs text-slate-500 mt-0.5">Ontvang iedere lesdag om 16:30 uur een overzicht van niet-ingecheckte studenten.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox">
<div class="w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-scalda-green"></div>
</label>
</div>
</div>
</div>

<!-- Sectie 4: Account & Beveiliging -->
<div class="bg-white border border-slate-200 rounded-lg shadow-sm p-6">
<div class="flex items-center gap-3 border-b border-slate-100 pb-4 mb-5">
<div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center">
<span class="material-symbols-outlined">manage_accounts</span>
</div>
<div>
<h2 class="text-base font-bold text-slate-900">Ingelogde Docent &amp; Rechten</h2>
<p class="text-xs text-slate-500">Gegevens van het actieve Scalda-medewerkersaccount.</p>
</div>
</div>

<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-4 rounded-lg bg-scalda-bg border border-slate-100">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-full bg-scalda-green text-white flex items-center justify-center font-bold text-base shadow-sm">
              MV
            </div>
<div>
<p class="text-sm font-bold text-slate-900">Mark de Vries</p>
<p class="text-xs text-slate-600 font-mono">m.devries@scalda.nl • Docent ICT &amp; Software Development</p>
<span class="inline-block mt-1 text-[11px] font-semibold bg-status-ontime-bg text-status-ontime-text px-2 py-0.5 rounded">Beheerdersrechten verleend</span>
</div>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 bg-white border border-slate-300 hover:bg-slate-50 rounded-lg text-xs font-semibold text-slate-700 transition-colors shadow-sm">
              Wachtwoord Wijzigen
            </button>
<button class="px-3 py-1.5 bg-white border border-slate-300 hover:bg-slate-50 rounded-lg text-xs font-semibold text-slate-700 transition-colors shadow-sm">
              2FA Beheren
            </button>
</div>
</div>
</div>

<!-- Footer Actiebalk -->
<div class="flex items-center justify-between pt-4 pb-8 border-t border-slate-200">
<button class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 rounded-lg transition-colors">
          Standaardwaarden herstellen
        </button>
<div class="flex items-center gap-3">
<button class="px-4 py-2 border border-slate-300 bg-white hover:bg-slate-50 text-slate-700 text-sm font-medium rounded-lg transition-colors">
            Annuleren
          </button>
<button class="px-5 py-2 bg-scalda-green hover:bg-scalda-green_light text-white text-sm font-semibold rounded-lg shadow-sm transition-colors flex items-center gap-1.5">
<span class="material-symbols-outlined text-base">check</span>
<span>Instellingen Opslaan</span>
</button>
</div>
</div>

</div>
</div>
<!-- END: Scrollable Content -->
</main>
<!-- END: Main Content Area -->
</body>
</html>