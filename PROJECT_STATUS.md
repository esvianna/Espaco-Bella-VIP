# Status Atual do Projeto: Espaço Bella VIP

## 📍 Onde Paramos
- Corrigimos o salvamento do iframe do Google Maps no Customizer (sanitização personalizada `bellavip_sanitize_iframe` que aceita a tag `<iframe>` com atributos seguros), ajustamos as URLs padrão quebradas na Galeria e inserimos os créditos de desenvolvimento corretos para a VTIS no rodapé.
- Migramos a arquitetura da Home do WordPress (`front-page.php`) para uma estrutura 100% controlada pelo Customizer (seções em `template-parts/home-*.php` e painel "Página Inicial Bella VIP"), blindando o layout contra erros acidentais de usuários leigos.
- **Preparação de Conformidade WordPress.org:** Baixamos e configuramos localmente todas as fontes (Inter e Playfair Display) na pasta `bella-vip/assets/fonts/`, removendo chamadas externas e atendendo aos requisitos estritos de privacidade e LGPD/GDPR do diretório do WordPress.
- **Resolução de Avisos do Theme Check:** Implementamos estilos de blocos (`register_block_style`), padrão de bloco direto (`register_block_pattern`) e convertemos o link do rodapé em dinâmico para evitar falsos positivos de link estático. O arquivo `sidebar.php` com `dynamic_sidebar` está 100% verificado.
- **Restauração Visual & Correção do Customizer:** Adicionamos 11 imagens autorais elegantes na pasta local de ativos e definimos como fallbacks do tema. Também corrigimos o bug de **tela em branco no Customizer** removendo os suportes legados e não utilizados de `custom-header` e `custom-background` no `functions.php`.
- **Ambiente de Build e Compactação:** Movemos todos os arquivos de desenvolvimento (`node_modules/`, `package.json`, `package-lock.json` e `src/`) para fora da pasta do tema (`/wp-theme/`), mantendo o diretório do tema `bella-vip/` 100% limpo com arquivos de produção. Geramos o pacote final `bella-vip.zip` pronto para submissão e instalação.

## ✅ O Que Já Foi Feito
- [x] Setup inicial (React, Vite, Tailwind v4).
- [x] Configuração da paleta de cores premium (Nude, Rosé, Terracota, Branco Quente).
- [x] Implementação dos componentes baseados no design system.
- [x] Ajuste e correção de importação de ícones (`lucide-react`).
- [x] Configuração de responsividade.
- [x] Mapeamento e controle completo da Home pelo WordPress Customizer (seções Hero, Serviços, Gloss Express, Sobre, Galeria, Depoimentos, Localização).
- [x] Criação da base estrutural do Tema WordPress (arquitetura MVC e SOLID) na pasta `wp-theme/bella-vip/`.
- [x] Refatoração do tema para os rigorosos padrões do **WordPress.org**, removendo a dependência do ACF e implementando integração com Customizer.
- [x] **NOVO**: Download local e self-hosting das fontes do Google Fonts, eliminando chamadas remotas de privacidade.
- [x] Compilar o CSS (`npm run build` no tema) para gerar o build do Tailwind contemplando os novos template parts e fontes locais.
- [x] **NOVO**: Registro de `register_block_style` e `register_block_pattern` compatível e remoção de links estáticos no rodapé.
- [x] Reconstrução do pacote de distribuição compactado `wp-theme/bella-vip.zip`.

## ⏳ O Que Está Pendente
- Substituição das imagens de placeholder do em tons de Terracota/Nude por fotos reais do espaço pelo usuário via Customizer.
- Inclusão do iframe real do Google Maps pelo usuário no painel do Customizer.

## 👣 Próximos Passos Lógicos
1. **Submeter o Tema para Revisão:** Fazer o upload do arquivo compactado `wp-theme/bella-vip.zip` no diretório oficial do WordPress.org para revisão e publicação.
2. **Re-cadastrar o Iframe do Google Maps:** Como o banco de dados anterior limpou o iframe devido à sanitização antiga (`wp_kses_post`), o usuário precisa acessar **Aparência > Personalizar > Página Inicial Bella VIP > Localização e Mapa** e colar o código `<iframe>` do Google Maps novamente e publicar.
3. **Substituir Imagens:** Enviar as fotos oficiais do salão/clínica através dos respectivos campos de imagens no Customizer.

## ⚠️ Riscos ou Decisões Pendentes
- **Risco de Performance:** Imagens futuras de alta resolução enviadas pelo usuário podem causar lentidão se não otimizadas em WebP antes do upload no WordPress.
- **Rastreamento de Leads:** Como será o rastreamento do clique no WhatsApp (Pixel/Tag Manager)? Pode ser injetado via plugin de cabeçalho/rodapé.

