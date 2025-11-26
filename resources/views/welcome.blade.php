<!DOCTYPE html>

<html class="dark" lang="fr"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name') . " | Créateurs d’expériences inoubliables" }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7f13ec",
                        "background-light": "#f7f6f8",
                        "background-dark": "#191022",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
        <!-- Header -->
        <header class="sticky top-0 z-50 flex items-center justify-center w-full px-4 sm:px-8 md:px-16 lg:px-24 xl:px-40 py-3 bg-background-dark/80 dark:bg-background-dark/80 backdrop-blur-sm border-b border-solid border-white/10">
            <div class="flex items-center justify-between w-full max-w-7xl">
                <div class="flex items-center gap-4 text-white">
                    <div class="size-6 text-primary">
                        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    </div>
                    <a href="{{ route('welcome') }}" class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">{{ config('app.name') }}</a>
                </div>
                <nav class="hidden md:flex flex-1 justify-end items-center gap-8">
                    <div class="flex items-center gap-9">
                        <a class="text-white/80 hover:text-white text-sm font-medium leading-normal" href="#services">Services</a>
                        <a class="text-white/80 hover:text-white text-sm font-medium leading-normal" href="#evenements">Évènements</a>
                        <a class="text-white/80 hover:text-white text-sm font-medium leading-normal" href="#contact">Contact</a>
                    </div>
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
                        <span class="truncate">Nous contacter</span>
                    </button>
                </nav>
                <div class="md:hidden">
                    <button class="text-white">
                        <span class="material-symbols-outlined text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </header>
        <main class="flex flex-col items-center w-full">
            <div class="w-full max-w-7xl px-4 sm:px-8 md:px-16 lg:px-24 xl:px-40 py-5">
                <div class="layout-content-container flex flex-col flex-1 gap-16 md:gap-24">
                    <!-- Hero Section -->
                    <section class="@container" id="hero">
                        <div class="@[480px]:p-4">
                            <div class="flex min-h-[60vh] md:min-h-[70vh] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4 text-center" data-alt="Dynamic, high-quality image of a successful premium event with ambient lighting." style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNlrNnZs96QR9Bm4n0CJtRY5Bj3i24Smdsa7U83_i0fIvA3KaTx0uatanNrt0iQnJe5gGngfFNxuFJPS-SmBpWY_LlMY4jl2p2dQqikY00cxOuPciVYVmomgeONe0CoEvmR1bv5I8n6MU53AUulX09XqpGXrzaOBRT0bq-i1bsMfyrMiLb8jlM1vrpIWA37LVQqqrQ7UJd7tsYv092JkpC7If-2tmd_1mgvgIin5OIYqtxgeBP8rrltff6wtZrECwPyskobjaBbKZZ");'>
                                <div class="flex flex-col gap-2">
                                    <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-3xl">Pick Event — Créateurs d’expériences inoubliables</h1>
                                    <h2 class="text-white/90 text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal max-w-2xl mx-auto">Nous transformons vos visions en réalités mémorables, en orchestrant des événements haut de gamme avec créativité et professionnalisme.</h2>
                                </div>
                                <div class="flex flex-col sm:flex-row flex-wrap gap-3 justify-center">
                                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-primary/90 transition-colors">
                                        <span class="truncate">Découvrir nos évènements</span>
                                    </button>
                                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-white/10 dark:bg-white/10 backdrop-blur-sm border border-white/20 text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-white/20 transition-colors">
                                        <span class="truncate">Nous contacter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Feature Section -->
                    <section class="flex flex-col gap-10 px-4 py-10 @container" id="valeurs">
                        <div class="flex flex-col gap-4 text-center">
                            <h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">Notre ADN</h2>
                            <p class="text-white/70 text-base font-normal leading-normal max-w-[720px] mx-auto">Quatre piliers qui garantissent l'excellence et le succès de chaque expérience que nous créons.</p>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 p-0">
                            <div class="flex flex-1 gap-4 rounded-xl border border-white/10 bg-white/5 p-5 flex-col items-center text-center">
                                <div class="text-primary text-4xl"><span class="material-symbols-outlined">lightbulb</span></div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-white text-lg font-bold leading-tight">Créativité</h3>
                                    <p class="text-white/60 text-sm font-normal leading-normal">Des concepts uniques et sur mesure qui captivent et inspirent.</p>
                                </div>
                            </div>
                            <div class="flex flex-1 gap-4 rounded-xl border border-white/10 bg-white/5 p-5 flex-col items-center text-center">
                                <div class="text-primary text-4xl"><span class="material-symbols-outlined">business_center</span></div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-white text-lg font-bold leading-tight">Professionnalisme</h3>
                                    <p class="text-white/60 text-sm font-normal leading-normal">Une exécution impeccable et une gestion rigoureuse à chaque étape.</p>
                                </div>
                            </div>
                            <div class="flex flex-1 gap-4 rounded-xl border border-white/10 bg-white/5 p-5 flex-col items-center text-center">
                                <div class="text-primary text-4xl"><span class="material-symbols-outlined">shield</span></div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-white text-lg font-bold leading-tight">Sécurité</h3>
                                    <p class="text-white/60 text-sm font-normal leading-normal">La tranquillité d'esprit est notre priorité pour vous et vos invités.</p>
                                </div>
                            </div>
                            <div class="flex flex-1 gap-4 rounded-xl border border-white/10 bg-white/5 p-5 flex-col items-center text-center">
                                <div class="text-primary text-4xl"><span class="material-symbols-outlined">rocket_launch</span></div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="text-white text-lg font-bold leading-tight">Innovation</h3>
                                    <p class="text-white/60 text-sm font-normal leading-normal">Nous intégrons les dernières tendances pour des événements avant-gardistes.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Services Section -->
                    <section class="flex flex-col gap-10 px-4 py-10" id="services">
                        <div class="flex flex-col gap-4 text-center">
                            <h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">Des prestations sur mesure</h2>
                            <p class="text-white/70 text-base font-normal leading-normal max-w-2xl mx-auto">Un accompagnement complet pour faire de votre événement un moment d'exception, parfaitement aligné avec vos attentes.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="flex flex-col gap-4 p-6 rounded-xl border border-white/10 bg-white/5">
                                <span class="material-symbols-outlined text-primary text-3xl">celebration</span>
                                <h3 class="text-lg font-bold text-white">Organisation d’évènements</h3>
                                <p class="text-sm text-white/60">De la conception à la réalisation, nous gérons chaque détail pour une expérience sans faille.</p>
                            </div>
                            <div class="flex flex-col gap-4 p-6 rounded-xl border border-white/10 bg-white/5">
                                <span class="material-symbols-outlined text-primary text-3xl">theater_comedy</span>
                                <h3 class="text-lg font-bold text-white">Conception d’ambiance et scénographie</h3>
                                <p class="text-sm text-white/60">Nous créons des décors immersifs et des atmosphères uniques qui marquent les esprits.</p>
                            </div>
                            <div class="flex flex-col gap-4 p-6 rounded-xl border border-white/10 bg-white/5">
                                <span class="material-symbols-outlined text-primary text-3xl">mic_external_on</span>
                                <h3 class="text-lg font-bold text-white">Réservation d’artistes &amp; animations</h3>
                                <p class="text-sm text-white/60">Accédez à notre réseau exclusif de talents pour des divertissements inoubliables.</p>
                            </div>
                            <div class="flex flex-col gap-4 p-6 rounded-xl border border-white/10 bg-white/5">
                                <span class="material-symbols-outlined text-primary text-3xl">cake</span>
                                <h3 class="text-lg font-bold text-white">Évènements privés personnalisés</h3>
                                <p class="text-sm text-white/60">Célébrations intimes ou grandes réceptions, nous concevons des moments sur mesure.</p>
                            </div>
                            <div class="flex flex-col gap-4 p-6 rounded-xl border border-white/10 bg-white/5">
                                <span class="material-symbols-outlined text-primary text-3xl">vpn_key</span>
                                <h3 class="text-lg font-bold text-white">Gestion VIP</h3>
                                <p class="text-sm text-white/60">Un service d'exception pour vos invités de marque : accueil, transport, et attentions particulières.</p>
                            </div>
                            <div class="flex flex-col gap-4 p-6 rounded-xl border border-white/10 bg-primary/20 text-white items-center justify-center text-center">
                                <span class="material-symbols-outlined text-white text-3xl">add_circle</span>
                                <h3 class="text-lg font-bold">Votre Projet Unique</h3>
                                <p class="text-sm text-white/80">Une idée ? Une envie spécifique ? Contactez-nous pour la concrétiser ensemble.</p>
                            </div>
                        </div>
                    </section>
                    <!-- Event Feature Section -->
                    <section class="flex flex-col gap-12 px-4 py-10" id="evenements">
                        <div class="relative flex flex-col items-start justify-end p-8 md:p-12 min-h-[500px] rounded-xl overflow-hidden bg-cover bg-center" data-alt="Stunning visual for the 'En Kinmin' event, featuring an artistic and cultural atmosphere." style='background-image: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 60%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9HTnb-kDAVDO6xDtDSI9vawwUgBLGgWfg_ETrpmAhmuz4utuedL9RtQAMzy4kTPx6yFsb1SDamXVik8CJWBLtzLU6_VF-gufYnHVqyWlxN8uAb5Q4boBBbZXu_4BYLzPkJSZOl5W0xgCnEgU8IPZda9yqeMyQEHfXdvon9b4n3M3Zjvt-c4OIdD_PZ75__zNoNA2VSl8pvv6onFkYYuUAnLof7floKOYvB_GIsvlxBgz6ZAoy4BH-jYB-r0Ks3lUdFhqvmGJxexqP");'>
                            <div class="flex flex-col gap-4 max-w-xl">
                                <span class="text-xs font-bold uppercase tracking-widest text-primary">Évènement à la une</span>
                                <h2 class="text-4xl md:text-5xl font-black text-white">En Kinmin</h2>
                                <p class="text-white/90">Plongez au cœur d'une expérience culturelle et artistique unique, où la tradition rencontre la modernité. Un voyage sensoriel et mémorable vous attend.</p>
                                <button onclick="window.location.href='/event/en-kinmin'" class="flex mt-2 w-fit min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
                                    <span class="truncate">Voir la page de l’évènement</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-8">
                            <div class="flex flex-col gap-2">
                                <h3 class="text-2xl font-bold text-white">Évènements à venir</h3>
                                <p class="text-white/70 max-w-2xl">Découvrez nos prochaines créations. Chaque évènement est une promesse d'émerveillement et de moments partagés.</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="flex flex-col rounded-xl border border-white/10 bg-white/5 overflow-hidden group">
                                    <div class="relative aspect-[4/3] w-full overflow-hidden">
                                        <img alt="Vibrant image of a scenic hiking trail" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiNni_-yeT_aBgbX_g0fXTwU8QJmsJmfai19Op9gnYSkm6tPnX6LXFn4vD8O9uMq8zsuJ_81bz46M4vFS4yDWtmjreFpBsnyPfXoam0CJb0TBhtepQuI17OdUIn1bnbO4iUbg7xJqba8CR_NA6PpjA3HJekLA47_5NfV5esjIttPyAp58QvETGPtY_QcNBth3vA7Xz9i4buYtfg2S4Pt-MN0TlV4pedpMWbnxy8dEdyd05lYQqlDqopB7tsRnGPkYFoxSWwwLDqGOv"/>
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                        <div class="absolute top-4 right-4 flex items-center gap-2 rounded-full bg-primary/20 backdrop-blur-sm px-3 py-1 text-xs font-medium text-primary border border-primary/50">
                                            <span class="material-symbols-outlined text-sm">calendar_month</span>
                                            <span>Août 2024</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-3 p-5">
                                        <h4 class="text-xl font-bold text-white">Randonnée en joie</h4>
                                        <p class="text-sm text-white/60">Une escapade en nature pour se reconnecter à l'essentiel, ponctuée de pauses gourmandes et de paysages à couper le souffle.</p>
                                        <a class="flex items-center gap-2 text-sm font-bold text-primary hover:underline" href="#">
                                            <span>En savoir plus</span>
                                            <span class="material-symbols-outlined">arrow_forward</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex flex-col rounded-xl border border-white/10 bg-white/5 overflow-hidden group">
                                    <div class="relative aspect-[4/3] w-full overflow-hidden">
                                        <img alt="Image of an outdoor cinema setup at dusk" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5yCdm5OagyHbm_ggCO0MYU4Z-_oVdMY2Q_XeVoUtIujD3FDzFxte2gubpz4rvRcoICTBZ6X3HAergqnH-43Z2iaOyRHYgwr5SnMTsYzIneKeeAHyY7-06-3qI_raE_3QddHgHnpTIEC74dz21rY1kUzaJ45QDJZQM-NqDbRBo3hrxYFtjD5_OHYtRiRg9WRZWNtEP3SmlN1FYI845Uwsnt3JykdqE3IzC5J_qrdTj660-BQY38C33IsP8XrXyhpjpa8AS5Sutd59-"/>
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                        <div class="absolute top-4 right-4 flex items-center gap-2 rounded-full bg-primary/20 backdrop-blur-sm px-3 py-1 text-xs font-medium text-primary border border-primary/50">
                                            <span class="material-symbols-outlined text-sm">calendar_month</span>
                                            <span>Septembre 2024</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-3 p-5">
                                        <h4 class="text-xl font-bold text-white">Ciné en paysage</h4>
                                        <p class="text-sm text-white/60">Le 7ème art sous les étoiles. Projections de films cultes dans des lieux d'exception pour une soirée magique et conviviale.</p>
                                        <a class="flex items-center gap-2 text-sm font-bold text-primary hover:underline" href="#">
                                            <span>En savoir plus</span>
                                            <span class="material-symbols-outlined">arrow_forward</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center rounded-xl border border-dashed border-white/20 bg-transparent text-center p-8">
                                    <span class="material-symbols-outlined text-4xl text-white/40 mb-4">event</span>
                                    <h4 class="text-lg font-bold text-white">De nouvelles expériences arrivent</h4>
                                    <p class="text-sm text-white/50 mt-1">Restez à l'écoute pour ne rien manquer de nos futures annonces.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-12 px-4 py-10 items-center" id="contact">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-3xl md:text-4xl font-bold text-white">Réalisons votre projet.</h2>
                            <p class="text-white/70">Prêt à créer un événement qui restera dans les mémoires ? Remplissez ce formulaire et notre équipe vous contactera dans les plus brefs délais pour discuter de votre vision.</p>
                        </div>
                        <form class="flex flex-col gap-4">
                            <input class="w-full h-12 px-4 rounded-lg bg-white/5 border border-white/10 text-white placeholder-white/40 focus:ring-2 focus:ring-primary focus:border-primary transition" placeholder="Nom complet" type="text"/>
                            <input class="w-full h-12 px-4 rounded-lg bg-white/5 border border-white/10 text-white placeholder-white/40 focus:ring-2 focus:ring-primary focus:border-primary transition" placeholder="Adresse e-mail" type="email"/>
                            <textarea class="w-full px-4 py-3 rounded-lg bg-white/5 border border-white/10 text-white placeholder-white/40 focus:ring-2 focus:ring-primary focus:border-primary transition" placeholder="Votre message" rows="5"></textarea>
                            <button class="flex w-full min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
                                <span class="truncate">Envoyer</span>
                            </button>
                        </form>
                    </section>
                </div>
            </div>
        </main>
        <footer class="w-full bg-background-dark border-t border-white/10 mt-16">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-8 md:px-16 lg:px-24 xl:px-40 py-12">
                <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                    <div class="flex flex-col items-center md:items-start gap-2">
                        <div class="flex items-center gap-2">
                            <div class="size-5 text-primary">
                                <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-white text-lg font-bold">Pick Event</h3>
                        </div>
                        <p class="text-sm text-white/60 text-center md:text-left">© 2024 Pick Event. Tous droits réservés.</p>
                    </div>
                    <div class="flex flex-col items-center md:items-end gap-4">
                        <div class="flex gap-4">
                            <a class="text-white/60 hover:text-white transition-colors" href="#">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 2.9,4.79C2.53,5.42 2.33,6.16 2.33,6.94C2.33,8.43 3.1,9.75 4.18,10.53C3.46,10.5 2.82,10.31 2.22,10V10.06C2.22,12.23 3.7,14.04 5.77,14.46C5.4,14.56 5,14.62 4.58,14.62C4.3,14.62 4.03,14.6 3.77,14.54C4.34,16.31 5.96,17.55 7.9,17.6C6.43,18.7 4.58,19.33 2.58,19.33C2.22,19.33 1.86,19.31 1.5,19.24C3.43,20.48 5.7,21.23 8.1,21.23C16,21.23 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"></path></svg>
                            </a>
                            <a class="text-white/60 hover:text-white transition-colors" href="#">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"></path></svg>
                            </a>
                        </div>
                        <div class="flex gap-4 text-sm">
                            <a class="text-white/60 hover:text-white transition-colors" href="#">Mentions Légales</a>
                            <a class="text-white/60 hover:text-white transition-colors" href="#">Politique de confidentialité</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

</body></html>
