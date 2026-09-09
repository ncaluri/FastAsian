<!DOCTYPE html>

<html lang="nl"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "inverse-on-surface": "#eef2eb", "surface-bright": "#f6fbf4", "surface-variant": "#dfe4dd", "tertiary-container": "#964247", "surface-container-highest": "#dfe4dd", "on-secondary-fixed": "#321200", "inverse-surface": "#2d322d", "on-tertiary-fixed-variant": "#7a2d33", "surface-container-high": "#e5e9e3", "on-surface": "#181d19", "primary-container": "#006b3f", "on-error": "#ffffff", "secondary-fixed": "#ffdbc9", "surface-container-lowest": "#ffffff", "primary-fixed-dim": "#81d9a2", "error": "#ba1a1a", "primary": "#00502e", "secondary": "#9a4600", "background": "#f6fbf4", "on-tertiary-container": "#ffc9c9", "on-error-container": "#93000a", "on-primary-fixed": "#002110", "outline-variant": "#bec9bf", "on-primary-container": "#91e9b1", "on-secondary-fixed-variant": "#753400", "surface-tint": "#046d40", "on-tertiary-fixed": "#40010b", "on-surface-variant": "#3f4941", "on-primary-fixed-variant": "#00522f", "tertiary-fixed": "#ffdada", "outline": "#6f7a71", "secondary-container": "#fd7c1a", "on-primary": "#ffffff", "tertiary-fixed-dim": "#ffb3b4", "surface-dim": "#d7dbd5", "on-secondary": "#ffffff", "on-secondary-container": "#5d2800", "on-background": "#181d19", "on-tertiary": "#ffffff", "surface-container": "#ebefe9", "primary-fixed": "#9df5bd", "secondary-fixed-dim": "#ffb68c", "inverse-primary": "#81d9a2", "surface-container-low": "#f1f5ee", "error-container": "#ffdad6", "tertiary": "#782b31", "surface": "#f6fbf4", "scalda": { "green": "#1a7746", "green_light": "#288856", "orange": "#f28e2b", "bg": "#f8fafc" } }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "sidebar-width": "260px", "stack-sm": "4px", "stack-lg": "24px", "container-max-width": "1440px", "stack-md": "12px", "gutter": "24px", "margin-mobile": "16px", "base": "8px" }, "fontFamily": { "headline-lg-mobile": ["Geist"], "headline-md": ["Geist"], "display": ["Geist"], "body-lg": ["Geist"], "label-lg": ["Geist"], "label-sm": ["Geist"], "body-md": ["Geist"], "headline-lg": ["Geist"] }, "fontSize": { "headline-lg-mobile": ["20px", { "lineHeight": "28px", "fontWeight": "600" }], "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "600" }], "display": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }], "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }], "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "500" }], "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }], "headline-lg": ["24px", { "lineHeight": "32px", "fontWeight": "600" }] } } } };</script></head><body class="bg-surface font-body-md text-on-surface min-h-screen"><aside aria-label="Sidebar Navigation" class="fixed left-0 top-0 h-full w-sidebar-width bg-scalda-green flex flex-col text-white z-50 shadow-lg">
<!-- Logo Area -->
<div class="h-16 flex items-center px-6 bg-white w-full shadow-sm mb-6 shrink-0">
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
<a aria-current="page" class="flex items-center gap-3 px-4 py-2.5 rounded bg-scalda-orange text-white font-medium shadow-sm transition-colors" href="kalender.php">
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
</aside><div class="pl-sidebar-width"><header class="fixed top-0 left-sidebar-width right-0 h-16 bg-surface/80 backdrop-blur-xl z-40 shadow-[0_1px_8px_rgba(0,0,0,0.04)] flex items-center justify-end px-gutter gap-stack-md"><button class="flex items-center justify-center p-stack-sm rounded-lg hover:bg-surface-container-high text-on-surface-variant transition-colors" type="button"><span class="material-symbols-outlined">search</span></button><button class="flex items-center justify-center p-stack-sm rounded-lg hover:bg-surface-container-high text-on-surface-variant transition-colors" type="button"><span class="material-symbols-outlined">notifications</span></button><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></header><main class="w-full pt-16 px-gutter bg-surface min-h-screen"><div class="flex flex-col w-full">
<!-- Page Header & Action Bar -->
<header class="flex flex-col md:flex-row md:items-center md:justify-between gap-stack-md mb-stack-lg pb-stack-md">
<div>
<h1 class="font-display text-display text-on-surface tracking-tight">Aanwezigheid Kalender</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Overzicht van aanwezige en afwezige studenten per dag</p>
</div>
<!-- Navigation & Quick Filters -->
<div class="flex flex-wrap items-center gap-stack-md">
<!-- Month Navigator -->
<div class="inline-flex items-center bg-surface-container-lowest rounded-xl shadow-sm px-2 py-1 gap-1">
<button aria-label="Vorige maand" class="p-2 rounded-lg hover:bg-surface-container transition-colors text-on-surface flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-[20px]">chevron_left</span>
</button>
<span class="font-headline-md text-headline-md px-3 text-on-surface select-none">November 2023</span>
<button aria-label="Volgende maand" class="p-2 rounded-lg hover:bg-surface-container transition-colors text-on-surface flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-[20px]">chevron_right</span>
</button>
</div>
<button class="px-4 py-2 rounded-xl bg-surface-container-high hover:bg-surface-variant font-label-lg text-label-lg text-on-surface transition-colors shadow-sm" type="button">
        Vandaag
      </button>
<!-- Class Selector -->
<div class="relative">
<select aria-label="Filter op klas" class="appearance-none bg-surface-container-lowest font-label-lg text-label-lg text-on-surface px-4 py-2.5 pr-10 rounded-xl shadow-sm focus:outline-none focus:bg-surface-container-low cursor-pointer">
<option value="all">Alle klassen</option>
<option value="4h">Klas 4H</option>
<option value="5v">Klas 5V</option>
<option value="3m">Klas 3M</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[20px]">expand_more</span>
</div>
<!-- Export Button -->
<button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-secondary-container text-on-secondary-container hover:opacity-90 font-label-lg text-label-lg shadow-sm transition-opacity" type="button">
<span class="material-symbols-outlined text-[18px]">file_download</span>
<span>Rapportage</span>
</button>
</div>
</header>
<!-- Summary KPI Section -->
<section aria-label="Aanwezigheid samenvatting" class="grid grid-cols-1 md:grid-cols-3 gap-stack-md mb-stack-lg">
<!-- Card 1: Rate -->
<div class="bg-surface-container-lowest rounded-xl p-5 shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider">Gemiddeld Aanwezig</span>
<div class="w-8 h-8 rounded-full bg-primary-fixed/40 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">query_stats</span>
</div>
</div>
<div class="mt-3 flex items-baseline gap-3">
<span class="font-display text-display text-primary font-bold">92.4%</span>
<span class="inline-flex items-center font-label-sm text-label-sm text-primary-container font-semibold bg-primary-fixed/30 px-2 py-0.5 rounded-full">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
          +2.1%
        </span>
</div>
<span class="font-label-sm text-label-sm text-outline mt-1">t.o.v. vorige kalendermaand</span>
</div>
<!-- Card 2: Total Present -->
<div class="bg-surface-container-lowest rounded-xl p-5 shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider">Totaal Aanwezig</span>
<div class="w-8 h-8 rounded-full bg-primary-fixed/40 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">check_circle</span>
</div>
</div>
<div class="mt-3 flex items-baseline gap-2">
<span class="font-display text-display text-on-surface font-bold">4.120</span>
<span class="font-body-md text-body-md text-on-surface-variant">registraties</span>
</div>
<div class="w-full bg-surface-container-high rounded-full h-1.5 mt-3 overflow-hidden">
<div class="bg-primary-container h-full rounded-full" style="width: 92.4%"></div>
</div>
</div>
<!-- Card 3: Total Absent -->
<div class="bg-surface-container-lowest rounded-xl p-5 shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider">Totaal Afwezig</span>
<div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[18px]">cancel</span>
</div>
</div>
<div class="mt-3 flex items-baseline gap-2">
<span class="font-display text-display text-secondary font-bold">142</span>
<span class="font-body-md text-body-md text-on-surface-variant">afwezigheden</span>
</div>
<span class="font-label-sm text-label-sm text-outline mt-1">Waarvan 118 met geldige ziekmelding</span>
</div>
</section>
<!-- Calendar Main Grid (School Days: Mon - Fri) -->
<section aria-label="Maandoverzicht kalender" class="bg-surface-container-lowest rounded-xl p-6 shadow-sm mb-stack-lg">
<!-- Day Header -->
<div class="grid grid-cols-5 gap-3 mb-3">
<div class="text-center font-label-lg text-label-lg font-semibold text-on-surface-variant py-2">Maandag</div>
<div class="text-center font-label-lg text-label-lg font-semibold text-on-surface-variant py-2">Dinsdag</div>
<div class="text-center font-label-lg text-label-lg font-semibold text-on-surface-variant py-2">Woensdag</div>
<div class="text-center font-label-lg text-label-lg font-semibold text-on-surface-variant py-2">Donderdag</div>
<div class="text-center font-label-lg text-label-lg font-semibold text-on-surface-variant py-2">Vrijdag</div>
</div>
<!-- Calendar Grid (5 Columns x 5 Weeks) -->
<div class="grid grid-cols-5 gap-3">
<!-- Week 1: Oct 30 - Nov 03 -->
<div class="h-28 rounded-xl p-3 bg-surface-container-low/40 opacity-40 flex flex-col justify-between">
<span class="font-label-sm text-label-sm font-medium text-outline">30 okt</span>
<div class="flex flex-col gap-1 text-[11px] font-medium">
<span class="text-outline">Afgelopen periode</span>
</div>
</div>
<div class="h-28 rounded-xl p-3 bg-surface-container-low/40 opacity-40 flex flex-col justify-between">
<span class="font-label-sm text-label-sm font-medium text-outline">31 okt</span>
<div class="flex flex-col gap-1 text-[11px] font-medium">
<span class="text-outline">Afgelopen periode</span>
</div>
</div>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">1</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 29 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 1 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">2</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 30 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-outline font-medium bg-surface-container-high px-2 py-0.5 rounded-lg w-fit">
            0 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">3</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 27 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 3 Afwezig
          </span>
</div>
</button>
<!-- Week 2: Nov 06 - Nov 10 -->
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">6</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 28 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 2 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">7</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 29 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 1 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">8</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 26 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 4 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">9</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 30 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-outline font-medium bg-surface-container-high px-2 py-0.5 rounded-lg w-fit">
            0 Afwezig
          </span>
</div>
</button>
<!-- Studiedag -->
<div class="h-28 rounded-xl p-3 bg-surface-container-high/60 flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-surface-variant font-semibold">10</span>
<span class="material-symbols-outlined text-[16px] text-on-surface-variant">event_busy</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-lg font-semibold text-on-surface">Studiedag</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Geen lessen</span>
</div>
</div>
<!-- Week 3: Nov 13 - Nov 17 -->
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">13</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 29 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 1 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">14</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 30 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-outline font-medium bg-surface-container-high px-2 py-0.5 rounded-lg w-fit">
            0 Afwezig
          </span>
</div>
</button>
<!-- SELECTED DAY: 15 NOVEMBER -->
<button class="h-28 rounded-xl p-3 bg-surface-container-lowest text-left flex flex-col justify-between shadow-md relative bg-gradient-to-b from-primary-fixed/15 to-transparent" type="button">
<div class="flex items-center justify-between w-full">
<span class="font-headline-md text-headline-md text-primary font-bold">15</span>
<span class="font-label-sm text-label-sm text-primary bg-primary-fixed/60 font-semibold px-2 py-0.5 rounded-full">Geselecteerd</span>
</div>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-semibold bg-primary-fixed/50 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 28 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-semibold bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 2 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">16</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 27 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 3 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">17</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 29 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 1 Afwezig
          </span>
</div>
</button>
<!-- Week 4: Nov 20 - Nov 24 -->
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">20</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 28 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 2 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">21</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 29 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 1 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">22</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 30 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-outline font-medium bg-surface-container-high px-2 py-0.5 rounded-lg w-fit">
            0 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">23</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 28 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 2 Afwezig
          </span>
</div>
</button>
<!-- Vrije Dag / Vakantie -->
<div class="h-28 rounded-xl p-3 bg-surface-container-high/60 flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-surface-variant font-semibold">24</span>
<span class="material-symbols-outlined text-[16px] text-on-surface-variant">deck</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-lg font-semibold text-on-surface">Vrij rooster</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Docentendag</span>
</div>
</div>
<!-- Week 5: Nov 27 - Dec 01 -->
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">27</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 29 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 1 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">28</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 27 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 3 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">29</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 30 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-outline font-medium bg-surface-container-high px-2 py-0.5 rounded-lg w-fit">
            0 Afwezig
          </span>
</div>
</button>
<button class="h-28 rounded-xl p-3 bg-surface-container-low hover:bg-surface-container text-left flex flex-col justify-between transition-colors group" type="button">
<span class="font-headline-md text-headline-md text-on-surface font-semibold">30</span>
<div class="flex flex-col gap-1.5">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-medium bg-primary-fixed/40 px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">check</span> 28 Aanwezig
          </span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-medium bg-secondary-fixed px-2 py-0.5 rounded-lg w-fit">
<span class="material-symbols-outlined text-[14px]">close</span> 2 Afwezig
          </span>
</div>
</button>
<div class="h-28 rounded-xl p-3 bg-surface-container-low/40 opacity-40 flex flex-col justify-between">
<span class="font-label-sm text-label-sm font-medium text-outline">1 dec</span>
<div class="flex flex-col gap-1 text-[11px] font-medium">
<span class="text-outline">Volgende periode</span>
</div>
</div>
</div>
</section>
<!-- Compact Day Detail Panel for Selected Date -->
<section aria-label="Dagdetails" class="bg-surface-container-lowest rounded-xl p-6 shadow-sm mb-stack-lg">
<div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 gap-2">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[24px]">event_available</span>
</div>
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Woensdag 15 November</h2>
<p class="font-body-md text-body-md text-on-surface-variant">28 Aanwezig • 2 Afwezig geregistreerd</p>
</div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container px-3 py-1.5 rounded-full self-start sm:self-auto">
        Laatste check-in: 08:42 uur
      </span>
</div>
<!-- Quick Absence List -->
<div class="mt-4">
<div class="flex items-center justify-between mb-3">
<span class="font-label-lg text-label-lg text-on-surface font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
          Wie was er afwezig? (2 studenten)
        </span>
<span class="font-label-sm text-label-sm text-outline">Direct inzicht voor docenten</span>
</div>
<div class="flex flex-col gap-2.5">
<!-- Student 1 -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between bg-surface-container-low hover:bg-surface-container p-3.5 rounded-xl transition-colors gap-3">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-surface-container-high flex items-center justify-center font-label-lg text-label-lg font-semibold text-on-surface">
              SJ
            </div>
<div>
<div class="flex items-center gap-2">
<span class="font-label-lg text-label-lg font-semibold text-on-surface">Sophie Jansen</span>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant font-medium">Klas 5V</span>
</div>
<span class="font-label-sm text-label-sm text-outline">Studentnr: 104829</span>
</div>
</div>
<div class="flex items-center gap-3 sm:self-center">
<span class="inline-flex items-center gap-1.5 font-label-sm text-label-sm font-semibold text-secondary bg-secondary-fixed px-3 py-1 rounded-full">
<span class="material-symbols-outlined text-[14px]">sick</span>
              Ziek gemeld (08:15)
            </span>
<button aria-label="Notitie toevoegen voor Sophie Jansen" class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">edit_note</span>
</button>
</div>
</div>
<!-- Student 2 -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between bg-surface-container-low hover:bg-surface-container p-3.5 rounded-xl transition-colors gap-3">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-surface-container-high flex items-center justify-center font-label-lg text-label-lg font-semibold text-on-surface">
              NJ
            </div>
<div>
<div class="flex items-center gap-2">
<span class="font-label-lg text-label-lg font-semibold text-on-surface">Noah Jones</span>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant font-medium">Klas 4K</span>
</div>
<span class="font-label-sm text-label-sm text-outline">Studentnr: 105193</span>
</div>
</div>
<div class="flex items-center gap-3 sm:self-center">
<span class="inline-flex items-center gap-1.5 font-label-sm text-label-sm font-semibold text-error bg-error-container/60 px-3 py-1 rounded-full">
<span class="material-symbols-outlined text-[14px]">warning</span>
              Onbekend verzuim
            </span>
<button aria-label="Notitie toevoegen voor Noah Jones" class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">edit_note</span>
</button>
</div>
</div>
</div>
</div>
</section>
</div></main></div></body></html>
