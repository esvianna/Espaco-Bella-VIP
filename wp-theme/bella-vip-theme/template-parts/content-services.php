<?php
/**
 * Template part: Services Section
 *
 * @package Bella_VIP
 */
?>

<section id="servicos" class="py-24 bg-bella-nude/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4">
            Nossos Serviços
        </h2>
        <p class="text-lg text-bella-subtext">
            Soluções completas de beleza e bem-estar, com atendimento exclusivo e foco em resultados reais.
        </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-transparent hover:border-bella-rose/30">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
                    <img 
                    src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                    alt="Gloss Express" 
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                    loading="lazy"
                    />
                    <div class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-sm p-2 rounded-full text-bella-terracotta shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-serif text-bella-text mb-3">Gloss Express</h3>
                    <p class="text-bella-subtext mb-6 line-clamp-3">Ideal para suavizar e disfarçar fios brancos, dar brilho intenso e renovar o visual sem aspecto de coloração pesada.</p>
                    <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" class="text-bella-terracotta font-medium flex items-center hover:text-[#c27a5d] transition-colors">
                    Agendar horário <span class="ml-2">→</span>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-transparent hover:border-bella-rose/30">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
                    <img 
                    src="https://images.unsplash.com/photo-1562322140-8baeececf3df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                    alt="Cabelo" 
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                    loading="lazy"
                    />
                    <div class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-sm p-2 rounded-full text-bella-terracotta shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scissors"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" x2="8.12" y1="4" y2="15.88"/><line x1="14.47" x2="20" y1="14.48" y2="20"/><line x1="8.12" x2="12" y1="8.12" y2="12"/></svg>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-serif text-bella-text mb-3">Cabelo</h3>
                    <p class="text-bella-subtext mb-6 line-clamp-3">Corte, escova, progressiva, tratamentos de hidratação profunda e finalização perfeita para o seu dia a dia.</p>
                    <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" class="text-bella-terracotta font-medium flex items-center hover:text-[#c27a5d] transition-colors">
                    Agendar horário <span class="ml-2">→</span>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-transparent hover:border-bella-rose/30">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
                    <img 
                    src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                    alt="Massagens" 
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                    loading="lazy"
                    />
                    <div class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-sm p-2 rounded-full text-bella-terracotta shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flower-2"><path d="M12 5a3 3 0 1 1 3 3m-3-3a3 3 0 1 0-3 3m3-3v1M9 8a3 3 0 1 0 3 3M9 8h1m5-1a3 3 0 1 1-3 3m3-3h-1m-5 5a3 3 0 1 0 3 3m-3-3v-1m5 1a3 3 0 1 1-3 3m3-3v-1m-3 3v-1"/></svg>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-serif text-bella-text mb-3">Massagens</h3>
                    <p class="text-bella-subtext mb-6 line-clamp-3">Técnicas de relaxamento, bem-estar e alívio de tensões para você se desconectar e recarregar as energias.</p>
                    <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" class="text-bella-terracotta font-medium flex items-center hover:text-[#c27a5d] transition-colors">
                    Agendar horário <span class="ml-2">→</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
