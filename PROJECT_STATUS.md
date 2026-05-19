# Status Atual do Projeto: Espaço Bella VIP

## 📍 Onde Paramos
- Finalizamos o desenvolvimento do protótipo de alta fidelidade em React + Vite + Tailwind CSS v4.
- A página inicial (Landing Page) está totalmente estruturada com todos os componentes: Header, Hero, Sobre, Serviços, Gloss Express, Galeria, Depoimentos, Localização e Footer.
- Resolvemos o bug de compilação CSS relacionado à migração do Tailwind v4.
- Resolvemos o erro de renderização do `lucide-react` removendo ícones faltantes (Facebook/Instagram import).

## ✅ O Que Já Foi Feito
- [x] Setup inicial (React, Vite, Tailwind v4).
- [x] Configuração da paleta de cores premium (Nude, Rosé, Terracota, Branco Quente).
- [x] Implementação dos componentes baseados no design system.
- [x] Ajuste e correção de importação de ícones (`lucide-react`).
- [x] Configuração de responsividade.
- [x] **NOVO**: Criação da base estrutural do Tema WordPress (arquitetura MVC e SOLID) na pasta `wp-theme/bella-vip-theme/`, traduzindo os componentes React para PHP (`template-parts`).

## ⏳ O Que Está Pendente
- Substituição das imagens de placeholder do Unsplash por fotos reais do espaço.
- Atualização do link real do WhatsApp (atualmente `5541999999999`).
- Substituição de textos de depoimentos fictícios por casos reais.
- Inclusão do widget real do Google Maps no componente de Localização.
- Tornar o conteúdo do Tema Dinâmico utilizando ACF (Advanced Custom Fields) ou blocos nativos.

## 👣 Próximos Passos Lógicos
1. Validar a estética final do protótipo e do tema com o cliente.
2. Instalar o tema no servidor WordPress destino.
3. Configurar ACF (Advanced Custom Fields) para tornar as seções editáveis pelo painel.

## ⚠️ Riscos ou Decisões Pendentes
- **Risco de Performance:** Imagens futuras de alta resolução podem causar lentidão se não otimizadas em WebP antes do upload no WordPress.
- **Decisão Pendente:** Vai usar um plugin de galeria no WP ou widget nativo do Elementor?
- **Decisão Pendente:** Como será o rastreamento do clique no WhatsApp (Pixel/Tag Manager)?
