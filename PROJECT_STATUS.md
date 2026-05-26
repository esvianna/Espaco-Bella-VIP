# Status Atual do Projeto: Espaço Bella VIP

## 📍 Onde Paramos
- Migramos a arquitetura da Home do WordPress (`front-page.php`) de Padrões de Bloco (Gutenberg) para uma estrutura 100% controlada pelo Customizer (Opção B), tornando a atualização de todo o conteúdo simples e à prova de falhas para usuários leigos.
- Criamos novos arquivos em `template-parts/home-*.php` para cada seção e registramos todos os campos no Customizer em um painel unificado "Página Inicial Bella VIP".
- Reestruturamos o ambiente de build: os arquivos de desenvolvimento (`node_modules/`, `package.json`, `package-lock.json` e `src/`) foram movidos para a pasta pai `/wp-theme/`, deixando a pasta do tema `./wp-theme/bella-vip-theme/` 100% limpa com arquivos estritamente de produção.
- Limpamos arquivos obsoletos do diretório do tema (`acf-export.json` e a pasta `patterns/`) e geramos um arquivo `.zip` de produção otimizado (~726 KB, redução de 89% em relação ao zip anterior).
- Finalizamos o desenvolvimento do protótipo de alta fidelidade em React + Vite + Tailwind CSS v4.

## ✅ O Que Já Foi Feito
- [x] Setup inicial (React, Vite, Tailwind v4).
- [x] Configuração da paleta de cores premium (Nude, Rosé, Terracota, Branco Quente).
- [x] Implementação dos componentes baseados no design system.
- [x] Ajuste e correção de importação de ícones (`lucide-react`).
- [x] Configuração de responsividade.
- [x] **NOVO**: Mapeamento e controle completo da Home pelo WordPress Customizer (seções Hero, Serviços, Gloss Express, Sobre, Galeria, Depoimentos, Localização).
- [x] **NOVO**: Criação da base estrutural do Tema WordPress (arquitetura MVC e SOLID) na pasta `wp-theme/bella-vip-theme/`.
- [x] **NOVO**: Refatoração do tema para os rigorosos padrões do **WordPress.org**, removendo a dependência do ACF e implementando integração com Customizer.
- [x] Compilar o CSS (`npm run build` no tema) para gerar o build do Tailwind contemplando os novos template parts.

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
