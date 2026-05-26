# Status Atual do Projeto: Espaço Bella VIP

## 📍 Onde Paramos
- Corrigimos a renderização da Home do WordPress (`front-page.php`) para carregar todas as seções (Block Patterns) em ordem quando o editor de blocos estiver vazio.
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
- [x] **NOVO**: Criação da base estrutural do Tema WordPress (arquitetura MVC e SOLID) na pasta `wp-theme/bella-vip-theme/`.
- [x] **NOVO**: Refatoração do tema para os rigorosos padrões do **WordPress.org**, removendo a dependência do ACF e implementando integração com Customizer.
- [x] **NOVO**: Conversão de 100% dos `template-parts` em **Padrões de Bloco (Block Patterns)** do Gutenberg, mantendo total integração com as classes do Tailwind v4.
- [x] Compilar o CSS (`npm run build` no tema) para gerar o build do Tailwind contemplando a nova pasta `patterns/`.

## ⏳ O Que Está Pendente
- Substituição das imagens de placeholder do Unsplash por fotos reais do espaço.
- Inclusão do widget real do Google Maps no componente de Localização via Bloco HTML.

## 👣 Próximos Passos Lógicos
1. Entrar no painel do WordPress.
2. Personalizar Cores e WhatsApp pelo **Aparência > Personalizar**.
3. Editar a página inicial usando os **Padrões de Bloco** inseridos e substituir textos modelo pelos reais.

## ⚠️ Riscos ou Decisões Pendentes
- **Risco de Performance:** Imagens futuras de alta resolução podem causar lentidão se não otimizadas em WebP antes do upload no WordPress.
- **Decisão Pendente:** Vai usar um plugin de galeria no WP ou widget nativo do Elementor?
- **Decisão Pendente:** Como será o rastreamento do clique no WhatsApp (Pixel/Tag Manager)?
