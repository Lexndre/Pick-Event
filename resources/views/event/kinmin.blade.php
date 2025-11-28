<!DOCTYPE html>
<html lang="fr"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name')  . " | En Kinmin" }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        .font-serif-display {
            font-family: 'Lora', serif;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: "#10B981", // Emerald 500
                            light: "#34D399", // Emerald 400
                            dark: "#059669", // Emerald 600
                        },
                        background: "#FFFFFF",
                        surface: "#F9FAFB", // Gray 50
                        "on-surface": "#1F2937", // Gray 800
                        "on-surface-secondary": "#6B7280", // Gray 500
                        border: "#E5E7EB" // Gray 200
                    },
                    fontFamily: {
                        display: ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem", // increased default
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-background font-display text-on-surface antialiased">
<div class="relative flex min-h-screen w-full flex-col">
    <div class="flex-grow">
        <div class="mx-auto flex max-w-6xl flex-col px-4 sm:px-6 lg:px-8">
            <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border py-4">
                <div class="flex items-center gap-3">
                    <div class="size-8 text-primary">
                        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    </div>
                    <a href="{{ route('welcome') }}" class="text-on-surface text-lg font-bold leading-tight tracking-[-0.015em]">{{ config('app.name') . " | En Kinmin" }}</a>
                </div>
                <div class="flex flex-1 justify-end">
                    <div class="hidden items-center gap-8 sm:flex">
                        <a class="text-sm font-medium text-on-surface-secondary transition-colors hover:text-on-surface" href="#details">Détails</a>
                        <a class="text-sm font-medium text-on-surface-secondary transition-colors hover:text-on-surface" href="#gallery">Galerie</a>
                        <a class="text-sm font-medium text-on-surface-secondary transition-colors hover:text-on-surface" href="#register">Inscription</a>
                    </div>
                </div>
            </header>
            <main class="flex-grow py-16 sm:py-24">
                <section class="flex min-h-[60vh] flex-col items-center justify-center gap-6 rounded-xl bg-cover bg-center bg-no-repeat p-4 text-center sm:gap-8" data-alt="Fête nocturne premium avec des lumières scintillantes" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDFP4U--EFfeIwoXf-nRapuGZbuSylKk_xNr69gv3VypcO55zjURRnnFsxJ9tsNA_fuTQkdIgPR5JwPu65El7plbByoNu4nAbi2ZUwOep0jZoa-LGBwfBSmSRWTEOylUEo0G4b4ExL-Y0tuB2nwaH-PpI_DzM5DKof23iz5IZXaySq4kWvOiPoHdhK--YfAi2kTr7-VPQYSkej4Dm7JZJV6r-I921w6X1CIdbh3X3DAWWJUfDqmMsc2xc4CNq6KniVxljNq5BadquQx");'>
                    <div class="flex flex-col gap-2">
                        <h1 class="font-serif-display text-4xl font-bold leading-tight text-white sm:text-6xl">En Kinmin — La nuit où Abidjan s’enflamme</h1>
                        <h2 class="text-base font-normal leading-normal text-white/90 sm:text-lg">Rendez-vous le 24 décembre à Cocody Angré pour une expérience inoubliable.</h2>
                    </div>
                    <a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-8 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] transition-transform hover:scale-105" href="#register">
                        <span class="truncate">Je m’inscris maintenant</span>
                    </a>
                </section>
                <section class="py-16 sm:py-20" id="description">
                    <div class="mx-auto max-w-3xl text-center">
                        <h2 class="font-serif-display text-3xl font-bold leading-tight tracking-tight text-on-surface sm:text-4xl">Une soirée inoubliable vous attend</h2>
                        <p class="mt-4 text-base font-normal leading-relaxed text-on-surface-secondary">"En Kinmin" est bien plus qu'une simple soirée. C'est une promesse, celle d'une nuit magique où chaque détail est pensé pour votre plaisir. Plongez dans une ambiance unique, laissez-vous surprendre par des artistes de talent et profitez d'une organisation irréprochable pour vivre un moment d'exception en toute sérénité.</p>
                    </div>
                    <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                        <div class="text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary"><span class="material-symbols-outlined">pool</span></div>
                            <h3 class="mt-4 text-lg font-bold text-on-surface">Piscine Party</h3>
                            <p class="mt-1 text-sm text-on-surface-secondary">Plongez dans l'ambiance avec notre espace piscine exclusif.</p>
                        </div>
                        <div class="text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary"><span class="material-symbols-outlined">celebration</span></div>
                            <h3 class="mt-4 text-lg font-bold text-on-surface">Ambiance Unique</h3>
                            <p class="mt-1 text-sm text-on-surface-secondary">Un décor et une atmosphère pensés pour l'émerveillement.</p>
                        </div>
                        <div class="text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary"><span class="material-symbols-outlined">local_bar</span></div>
                            <h3 class="mt-4 text-lg font-bold text-on-surface">Cocktail d'entrée</h3>
                            <p class="mt-1 text-sm text-on-surface-secondary">Un verre de bienvenue offert pour bien commencer la soirée.</p>
                        </div>
                        <div class="text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary"><span class="material-symbols-outlined">shield</span></div>
                            <h3 class="mt-4 text-lg font-bold text-on-surface">Sécurité Garantie</h3>
                            <p class="mt-1 text-sm text-on-surface-secondary">Profitez de la fête l'esprit tranquille grâce à notre dispositif de sécurité.</p>
                        </div>
                    </div>
                </section>
                <section class="bg-surface rounded-xl p-8 sm:p-12" id="details">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                        <div class="flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-4">
                            <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-primary text-white"><span class="material-symbols-outlined">calendar_month</span></div>
                            <div>
                                <h3 class="text-lg font-bold leading-tight text-on-surface">Date &amp; Heure</h3>
                                <p class="mt-1 text-base font-normal leading-normal text-on-surface-secondary">24 Décembre 2025, de 19h à l’aube</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-4">
                            <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-primary text-white"><span class="material-symbols-outlined">location_on</span></div>
                            <div>
                                <h3 class="text-lg font-bold leading-tight text-on-surface">Lieu</h3>
                                <p class="mt-1 text-base font-normal leading-normal text-on-surface-secondary">Cocody Angré, Abidjan</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center text-center sm:flex-row sm:text-left sm:items-start gap-4">
                            <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-primary text-white"><span class="material-symbols-outlined">nightlife</span></div>
                            <div>
                                <h3 class="text-lg font-bold leading-tight text-on-surface">Dress Code</h3>
                                <p class="mt-1 text-base font-normal leading-normal text-on-surface-secondary">Chic &amp; Trendy</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-16 sm:py-24" id="gallery">
                    <div class="text-center">
                        <h2 class="font-serif-display text-3xl font-bold leading-tight tracking-tight text-on-surface sm:text-4xl">Galerie de l'événement</h2>
                        <p class="mx-auto mt-4 max-w-2xl text-base font-normal leading-relaxed text-on-surface-secondary">Un avant-goût de la magie qui vous attend. L'élégance, l'énergie et les sourires de nos soirées en images.</p>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-4 lg:grid-cols-4">
                        <div class="aspect-square overflow-hidden rounded-xl">
                            <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105" data-alt="Guests enjoying cocktails at a stylish event" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9XWXcG9IavKBHOiXlzGq40rH3oDJc0q1cHFckKoXJAt1B78HoNzzDt2dz4SWRg_oeZthLELrCMre20zsCRqpKloquLsmRhcKtfHkum_h0N-bygZRRHv6v_tOSQ3QzZEylOi8Q3VmDkXn_J4CDWm4tpLjqNGKUdn3xcyWxkRMdvk85AJQRlTsYgMCPvRzMrBrxtfSf1W8UmeP04h-eeQjhUbgM92CFgpmaTWEc9UFr_phkGmOynMxAwmltEnomT0ihcXcr9kNbWtsd"/>
                        </div>
                        <div class="aspect-square overflow-hidden rounded-xl">
                            <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105" data-alt="DJ playing music at a crowded party" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXjOu1u5CpTwthnkLsTMkbxGDT1S8spGBDlsEF8TDYE3kp0aY262qI5piwXmL-5-Es9WDO6ZwcdqibnGRoOHS9jpm-PeIv7BPALPcLjx1iEh0O_qXCh8qNgQDZM-d9VBWUNh8UXnrGmb_3LBZ9gyu7n6VWfRaWNMV947v9HRmmzCM6fK1xPXEmATRr7sYF5SLo97SP8EPFwjUyLSSphJ3Suelyv0UevTOyjpVhylzsVphH_b0WOy4pO2Hvo59DU2rZIlTeKcGv--xX"/>
                        </div>
                        <div class="aspect-square overflow-hidden rounded-xl">
                            <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105" data-alt="People dancing and having fun at a party" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9t0g6SGkpKX3ZTg01iVURwvWcFeeHSYdH4phrR9uFuCmf-yJx5go0dbbCTsfYHIiDKuYbOUQlzGyUv2lMPEvBTK1pkfEQcE4jTScF4-oImrBrclCs_9zmOLgfbAtwbXi_8qUjchzw30Xm6Z9FY8G428ekgOcTwVB33H15ktq2k58F2SJOXE6MNUDJ9j_cw_fpZ5KEIfWAL724u6dmvPUcM4sfBvHmwR3I8CgD2hLDjHr2zu5IQ42BSdFdFhw-lPbCoGGQUtkX0kP2"/>
                        </div>
                        <div class="aspect-square overflow-hidden rounded-xl">
                            <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105" data-alt="Beautifully decorated event venue" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8ue3X7DNgH6es-3ozpF_Z5pHA_3jBEQSMFCIszqrYF6Xx0uf-J0uFuR2swlUSThTsqPTHmbn_f6DK3kN_96Kk83SnIMVBJrPJYH6rz8V2z_D6IQpa0afE3gNK3aQ9Juvoq1O1SzxjyOWmj7dT3tIHGXxckDafaSb5g9b_JSxdPEqkK0kShWMZP0Sg1aY4h4J0jE5AI7lObyUsxzNIQssjJmUBjeZiWYN8DjEX2mZL4O_5ax9lrtKtrPRb9S-t4Eij5r44jHgP4vOD"/>
                        </div>
                    </div>
                </section>
                <section class="rounded-xl bg-surface p-6 sm:p-10 lg:p-16" id="register">
                    <div class="mx-auto max-w-xl text-center">
                        <h2 class="font-serif-display text-3xl font-bold leading-tight tracking-tight text-on-surface sm:text-4xl">Réserve ta place !</h2>
                        <p class="mt-3 text-base font-normal leading-relaxed text-on-surface-secondary">Les places sont limitées. Ne manquez pas cette soirée d'exception et inscrivez-vous dès maintenant.</p>
                    </div>
                    <form action="{{ route('signup') }}" METHOD="POST" class="mx-auto mt-10 max-w-xl space-y-6" id="registrationForm">

                        @csrf
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-on-surface" for="full-name">Nom complet</label>
                                <div class="mt-2">
                                    <input autocomplete="name" class="block w-full rounded-lg border-border bg-background py-2.5 px-3.5 text-on-surface shadow-sm ring-1 ring-inset ring-border placeholder:text-on-surface-secondary focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" id="fullname" name="fullname" placeholder="Ex: Jean Dupont" type="text"/>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-on-surface" for="gender">Sexe</label>
                                <div class="mt-2">
                                    <select class="block w-full rounded-lg border-border bg-background py-2.5 px-3.5 text-on-surface shadow-sm ring-1 ring-inset ring-border focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" id="sexe" name="sexe">
                                        <option selected="" value="">Sélectionner...</option>
                                        <option value="Femme">Femme</option>
                                        <option value="Homme">Homme</option>
                                    </select>
                                </div>
                            </div>
                        </div>
{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-on-surface" for="etablissement">Établissement</label>--}}
{{--                            <div class="mt-2">--}}
{{--                                <input class="block w-full rounded-lg border-border bg-background py-2.5 px-3.5 text-on-surface shadow-sm ring-1 ring-inset ring-border placeholder:text-on-surface-secondary focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" id="etablissement" name="etablissement" placeholder="Ex: Lycée Classique d'Abidjan" type="text"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-on-surface" for="email">Adresse email</label>--}}
{{--                            <div class="mt-2">--}}
{{--                                <input autocomplete="email" class="block w-full rounded-lg border-border bg-background py-2.5 px-3.5 text-on-surface shadow-sm ring-1 ring-inset ring-border placeholder:text-on-surface-secondary focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" id="email" name="email" placeholder="vous@exemple.com" type="email"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div>
                            <label class="block text-sm font-medium text-on-surface" for="phone-number">Numéro de téléphone</label>
                            <div class="mt-2">
                                <input autocomplete="tel" class="block w-full rounded-lg border-border bg-background py-2.5 px-3.5 text-on-surface shadow-sm ring-1 ring-inset ring-border placeholder:text-on-surface-secondary focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" id="telephone" name="telephone" placeholder="+225 01 02 03 04 05" type="tel"/>
                            </div>
                        </div>
{{--                        <div>--}}
{{--                            <label class="block text-sm font-medium text-on-surface" for="participants">Nombre de participants</label>--}}
{{--                            <div class="mt-2">--}}
{{--                                <select class="block w-full rounded-lg border-border bg-background py-2.5 px-3.5 text-on-surface shadow-sm ring-1 ring-inset ring-border focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" id="nbre-participants" name="nbre-participants">--}}
{{--                                    <option value="1">1</option>--}}
{{--                                    <option value="2">2</option>--}}
{{--                                    <option value="3">3</option>--}}
{{--                                    <option value="4">4</option>--}}
{{--                                    <option value="5">5</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div>
                            <button class="flex w-full cursor-pointer items-center justify-center rounded-full h-12 px-8 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] transition-transform hover:scale-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" id="submitButton" type="submit">Valider mon inscription</button>
                        </div>
{{--                        <p class="text-center text-sm text-on-surface-secondary">Un e-mail de confirmation vous sera envoyé une fois l'inscription validée.</p>--}}
                    </form>
                </section>
            </main>
            <footer class="border-t border-border py-8">
                <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                    <div class="flex items-center gap-3">
                        <div class="size-6 text-primary">
                            <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-on-surface-secondary">© 2024 En Kinmin. Tous droits réservés.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <a class="text-on-surface-secondary transition-colors hover:text-on-surface" href="#">
                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a class="text-on-surface-secondary transition-colors hover:text-on-surface" href="#">
                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a class="text-on-surface-secondary transition-colors hover:text-on-surface" href="#">
                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.757 3.44 8.707 7.95 9.802.164.302.296.612.41.928a.75.75 0 001.28 0c.114-.316.246-.626.41-.928C18.56 20.707 22 16.757 22 12c0-5.523-4.477-10-10-10zm0 11a3 3 0 100-6 3 3 0 000 6zm-4.75 4.85a.75.75 0 001.06 1.06 4.5 4.5 0 015.38 0 .75.75 0 001.06-1.06 6 6 0 00-7.5 0z" fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50" id="confirmationModal">
        <div class="m-4 w-full max-w-md rounded-xl bg-white p-6 text-center shadow-lg sm:p-8">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-primary/10 text-primary">
                <span class="material-symbols-outlined text-4xl">check_circle</span>
            </div>
            <h3 class="mt-5 text-2xl font-bold text-on-surface">Inscription réussie !</h3>
            <p class="mt-2 text-base text-on-surface-secondary">Merci de vous être inscrit à "En Kinmin". Vous recevrez votre reçu numérique sur WhatsApp</p>
            <button class="mt-8 flex w-full cursor-pointer items-center justify-center rounded-full h-12 px-8 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] transition-transform hover:scale-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" id="closeModalButton">Fermer</button>
        </div>
    </div>
</div>
<script>
    const genderSelect = document.getElementById('sexe');
    const submitButton = document.getElementById('submitButton');
    const registrationForm = document.getElementById('registrationForm');
    const confirmationModal = document.getElementById('confirmationModal');
    const closeModalButton = document.getElementById('closeModalButton');
    // Update button text based on gender selection
    genderSelect.addEventListener('change', () => {
        if (genderSelect.value === 'Homme') {
            submitButton.textContent = 'Procéder au paiement';
        } else {
            submitButton.textContent = 'Valider mon inscription';
        }
    });

    // Show modal on form submission
    registrationForm.addEventListener('submit', async (e) => {
        e.preventDefault(); // Prevent actual form submission
        const formData = new FormData(registrationForm);

        try {
            const response = await  fetch(registrationForm.action, {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            });

            if (response.ok) {
                // Afficher le modal
                confirmationModal.classList.remove('hidden');
                confirmationModal.classList.add('flex');

                // Réinitialiser le formulaire
                registrationForm.reset();
            } else {
                console.log("Erreur serveur");
            }

        } catch (error) {
            console.error("Erreur AJAX :", error);
        }
    });

    // Hide modal when close button is clicked
    closeModalButton.addEventListener('click', () => {
        confirmationModal.classList.add('hidden');
        confirmationModal.classList.remove('flex');
        registrationForm.reset();
    });
    // Hide modal when clicking outside of it
    confirmationModal.addEventListener('click', (e) => {
        if (e.target === confirmationModal) {
            confirmationModal.classList.add('hidden');
            confirmationModal.classList.remove('flex');
        }
    });
</script>
</body></html>
