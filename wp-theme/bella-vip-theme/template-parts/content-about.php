<?php
/**
 * Template part: About Section
 *
 * @package Bella_VIP
 */

$about_title = get_field('about_title') ?: 'Um espaço pensado para cuidar de você';
$about_desc = get_field('about_description') ?: 'No Espaço Bella VIP, cada atendimento é feito com atenção, carinho e cuidado aos detalhes. Oferecemos serviços de cabelo, Gloss Express, massagens e cuidados de beleza para mulheres que desejam se sentir bem, bonitas e confiantes.';
$about_img_1 = get_field('about_image_1') ?: 'https://images.unsplash.com/photo-1522337660859-02fbefca4702?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80';
$about_img_2 = get_field('about_image_2') ?: 'https://images.unsplash.com/photo-1600948836101-f9ffda59d250?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80';
?>

<section id="sobre" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
        
        <!-- Image Grid -->
        <div class="grid grid-cols-2 gap-4">
            <img 
            src="<?php echo esc_url($about_img_1); ?>" 
            alt="Detalhe de produtos e ambiente" 
            class="w-full h-64 object-cover rounded-2xl rounded-tr-[4rem]"
            loading="lazy"
            />
            <img 
            src="<?php echo esc_url($about_img_2); ?>" 
            alt="Cliente relaxando" 
            class="w-full h-64 object-cover rounded-2xl rounded-bl-[4rem] mt-8"
            loading="lazy"
            />
        </div>

        <!-- Content -->
        <div>
            <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-6">
            <?php echo esc_html($about_title); ?>
            </h2>
            <div class="text-lg text-bella-subtext mb-8 leading-relaxed">
            <?php echo wp_kses_post($about_desc); ?>
            </div>
            
            <div class="space-y-6">
                <!-- Como os diferenciais são padrão da marca, deixaremos estáticos no código para manter o uso dos ícones lucide nativos. Caso precise dinamizar, usaríamos um repetidor do ACF -->
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                    <div class="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>
                    </div>
                    </div>
                    <div class="ml-4">
                    <h3 class="text-lg font-medium text-bella-text">Profissionais Especializadas</h3>
                    <p class="mt-1 text-bella-subtext">Equipe treinada para entender e realçar a sua beleza natural.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                    <div class="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coffee"><path d="M10 2v2"/><path d="M14 2v2"/><path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1"/><path d="M6 2v2"/></svg>
                    </div>
                    </div>
                    <div class="ml-4">
                    <h3 class="text-lg font-medium text-bella-text">Ambiente Acolhedor</h3>
                    <p class="mt-1 text-bella-subtext">Um momento só seu. Tome um café, relaxe e esqueça a pressa do dia a dia.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                    <div class="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                    </div>
                    </div>
                    <div class="ml-4">
                    <h3 class="text-lg font-medium text-bella-text">Produtos Premium</h3>
                    <p class="mt-1 text-bella-subtext">Trabalhamos apenas com marcas renomadas para garantir a saúde dos seus fios e pele.</p>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </div>
</section>
