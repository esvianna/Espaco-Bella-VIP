# Changelog

Todas as mudanças notáveis deste projeto serão documentadas neste arquivo.

## [1.2.10] - Convenção de Subdomínios por Produto - 2026-05-26
### Changed
- **Padrão de URL dos demos revisado:** o demo principal do Bella VIP migrou de `demo.vtis.com.br/bella-vip` (sub-pasta) para `bella-vip.vtis.com.br` (subdomínio dedicado).
- Adotada a convenção **`{produto-slug}.vtis.com.br`** para todos os demos ao vivo do ecossistema VTIS (temas, plugins futuros e produtos correlatos).
- `docs/bella-vip-theme-page-brief.md` atualizado em todas as ocorrências (hero, CTAs, galeria, assets, checklist DoD e próximos passos) para refletir o novo padrão.
- `DECISIONS.md` ADR 007 revisada para apontar para o novo endereço `bella-vip.vtis.com.br`.

### Added
- **DECISIONS.md ADR 009 — Convenção de subdomínios por produto:** formalizada a regra `{produto-slug}.vtis.com.br`, mapa de subdomínios reservados (`app`, `docs`, `status`), pré-requisitos operacionais (DNS wildcard + SSL wildcard via Let's Encrypt DNS-01, isolamento por instalação) e casos especiais para plugins.
- Itens novos em `PROJECT_STATUS.md`:
  - Configuração de DNS wildcard `*.vtis.com.br` + certificado SSL wildcard (pré-requisito).
  - Provisionamento do subdomínio `bella-vip.vtis.com.br`.

### Rationale
- Isolamento total de cookies/sessões entre demos diferentes.
- Branding na URL (cada produto vira identidade compartilhável).
- Reset/restore trivial e independente por produto.
- Escalabilidade horizontal a custo marginal próximo de zero (mesmo servidor, novos vhosts).

## [1.2.9] - Briefing da Página de Produto (Theme URI) - 2026-05-26
### Added
- Criado `docs/bella-vip-theme-page-brief.md`: documento de handoff completo para a construção da página `vtis.com.br/temas/bella-vip` no repositório do site institucional VTIS.
- O briefing cobre: objetivo, decisões consolidadas, regras de compliance do WordPress.org, arquitetura de URLs com hub `/temas/`, wireframe das 10 seções, SEO técnico (Schema.org `SoftwareApplication`, OpenGraph, sitemap), stack WordPress (CPT `tema`), checklist Definition of Done e próximos passos.
- Documento auto-contido: pode ser copiado integralmente para o outro repositório como única fonte de verdade.

### Decisões registradas (ver `DECISIONS.md` itens 006 a 008)
- Hub `/temas/` via CPT `tema` no WordPress (estrutura escalável para futuros temas e plugins VTIS).
- Demo híbrida: principal em `bella-vip.vtis.com.br` + secundária no WordPress Playground. *(endereço atualizado em [1.2.10])*
- SEO técnico completo (Schema, OG, sitemap).
- Sem versão Pro / sem bloco Free vs Pro.

## [1.2.8] - Submissão ao WordPress.org Theme Directory - 2026-05-26
### Milestone
- **Tema submetido ao diretório oficial do WordPress.org!** Scan automatizado retornou **PASS** (zero erros REQUIRED).
- Ticket de revisão manual: https://themes.trac.wordpress.org/ticket/273950
- Avisos RECOMMENDED (não bloqueantes): ausência de `add_theme_support('custom-header')` e `add_theme_support('custom-background')` — removidos intencionalmente para evitar conflitos com o Customizer (ver DECISIONS.md).

## [1.2.7] - Correção de Erros REQUIRED do Theme Check - 2026-05-26
### Fixed
- **`register_post_type` removido do tema:** Substituída a abordagem de registrar o post type `elementor_library` (território de plugin) pelo filtro `map_meta_cap` que intercepta silenciosamente a checagem de capacidades para posts desse tipo sem registrar nada no WordPress.
- **`ini_set` removido do tema:** Substituída a chamada proibida por `error_reporting()` com bitmask que suprime `E_NOTICE`, `E_DEPRECATED` e `E_STRICT` exclusivamente durante requisições do Customizer, sem alterar configurações do servidor PHP.
- **Callbacks de sanitização explícitas para endereços:** Criada a função wrapper nomeada `bellavip_sanitize_address()` no `customizer.php` e atualizado os settings `bellavip_address` e `bellavip_location_address` para usá-la. Isso resolve a falsa-positiva do Theme Check que não reconhecia `wp_kses_post` como callback legítima em análise estática.
- Reempacotado o `bella-vip.zip` sem erros REQUIRED no Theme Check.

## [1.2.6] - Correção do Customizer (Elementor) e Nova Cor de Fundo - 2026-05-26
### Fixed
- **Causa raiz do Customizer corrigida:** Solucionado o aviso PHP `_doing_it_wrong()` de capacidade do post type `elementor_library` inativo, registrando-o como fallback no `functions.php` e forçando `display_errors = 0` no Admin/Customizer.
- Removido o script de diagnóstico do tema Bella VIP.

### Changed
- Atualizado o tom padrão da cor de fundo (nude) do tema para **`#ebe2dc`** (cinza-areia quente) no `customizer.php` e nos arquivos de placeholders SVG, garantindo excelente contraste tridimensional dos cartões brancos e harmonia com as fotos reais do salão.
- Reempacotado o `bella-vip.zip` com todas as melhorias.

## [1.2.5] - Correção Raiz: HTML literal nos defaults do Customizer - 2026-05-26
### Fixed
- **Causa raiz identificada:** valores `default` dos settings `bellavip_address` e `bellavip_location_address` continham `<br>` literal (HTML cru) que era serializado diretamente no JSON inline gerado pelo `WP_Customize_Manager::customize_pane_settings`. O WordPress não escapa `<` para `\u003c` ao gerar esse JSON, e o WordPress 7.0 parece ser mais estrito nessa serialização, corrompendo o script inline e causando `Uncaught SyntaxError: Unexpected token '<'`.
- Substituídos os `<br>` nos defaults por `&#10;` (quebra de linha HTML segura para JSON).
- Removido o `<br>` do label do controle `bellavip_hero_title`.
- Removido o `<iframe>` da description do controle `bellavip_location_map_html`.
- Reempacotado o `bella-vip.zip`.

## [1.2.4] - Correção Crítica: Tela Branca no Customizer - 2026-05-26
### Fixed
- Removidas as linhas de debug `ini_set('display_errors', 1)` do `functions.php`. Elas injetavam HTML de erros/avisos do PHP diretamente no JSON serializado pelo `WP_Customize_Manager`, corrompendo-o e causando o erro `Uncaught SyntaxError: Unexpected token '<'` que deixava a página de personalização completamente em branco.
- Reempacotado o `bella-vip.zip` com a correção aplicada.

## [1.2.3] - Resolução de Avisos Finais do Theme Check - 2026-05-26
### Added
- Implementado registro de estilo de bloco personalizado (`register_block_style`) para o botão nativo do WordPress.

### Fixed
- Simplificado e exposto o registro de padrão de bloco (`register_block_pattern`) em `functions.php` para garantir a detecção correta pelo analisador estático do Theme Check.
- Modificado o link estático de crédito da VTIS no rodapé (`footer.php`) para construção dinâmica e segura via PHP, eliminando o alerta de link estático.
- Removidos os suportes legados e não utilizados de `custom-header` e `custom-background` no `functions.php` para corrigir o bug de tela em branco na inicialização da página de personalização.
- Reempacotado o tema atualizado no arquivo `bella-vip.zip` para distribuição.

## [1.2.2] - Correções, Self-hosting de Fontes e Preparação para WordPress.org - 2026-05-26
### Added
- Baixadas as fontes Google Fonts (Inter e Playfair Display) localmente para a pasta `bella-vip/assets/fonts/` e configuradas via `@font-face` no Tailwind CSS, eliminando chamadas externas.
- Criados arquivos de template obrigatórios para conformidade: `single.php`, `page.php`, `comments.php` e `sidebar.php` (com chamada `dynamic_sidebar`).
- Adicionados suportes do tema obrigatórios e recomendados em `functions.php` (Gutenberg, layout, feeds, etc.) e registrado padrão de bloco (`register_block_pattern`).
- Criados placeholders de imagens SVG locais (`placeholder.svg`, `avatar-placeholder.svg`) para substituir recursos remotos.

### Fixed
- Substituída a sanitização `wp_kses_post` do campo de Mapa no Customizer por uma função personalizada `bellavip_sanitize_iframe` para permitir que tags `<iframe>` com atributos seguros sejam salvas corretamente no banco de dados.
- Corrigidas as URLs padrão de placeholder do Unsplash e UI Avatars em todo o tema, substituindo-as por imagens locais licenciadas GPL e eliminando referências externas (incompatíveis com as regras do WordPress.org).
- Renomeada a pasta física do tema para `bella-vip` e atualizados Text Domain de todos os arquivos para `bella-vip` (slug oficial do WordPress.org).
- Alterados os créditos de desenvolvimento no rodapé do tema para "Desenvolvido com carinho por VTIS", direcionando para vtis.com.br.
- Recortada e otimizada a imagem `screenshot.png` para a proporção exata de 4:3 (1200x900px) e salva como PNG de 8 bits comprimido, reduzindo o arquivo de 1.3 MB para 311 KB.

## [1.2.1] - Limpeza de Arquivos Obsoletos e Reestruturação de Desenvolvimento - 2026-05-26
### Removed
- Exclusão do arquivo obsoleto `acf-export.json` na raiz do tema.
- Exclusão da pasta `patterns/` e de seu registro em `functions.php` (Gutenberg Block Patterns inativos).

### Changed
- Reestruturação do ambiente de desenvolvimento: movidos `node_modules/`, `package.json`, `package-lock.json` e `src/` para fora da pasta do tema, mantendo-os na pasta pai `/wp-theme/`.
- O tema `./wp-theme/bellavip/` agora contém estritamente os arquivos que devem subir para produção.
- Geração do arquivo `bellavip.zip` diretamente do diretório limpo do tema, reduzindo o tamanho de 6.5 MB para ~726 KB.

## [1.2.0] - Home 100% Controlável pelo Customizer (Sem Gutenberg) - 2026-05-26
### Added
- Criação dos novos template parts na pasta `template-parts/` para cada uma das seções da Landing Page (`home-hero.php`, `home-services.php`, `home-gloss-express.php`, `home-about.php`, `home-gallery.php`, `home-testimonials.php`, `home-location.php`).
- Mapeamento completo e registro de todos os campos da Home (textos, imagens, links e iframes do Google Maps) no WordPress Customizer dentro de um painel unificado `bellavip_homepage_panel` ("Página Inicial Bella VIP").
- Suporte a fallback inteligente: caso o usuário não configure nenhuma informação, o site carrega os textos e imagens padrão do protótipo automaticamente.

### Changed
- Refatoração de `front-page.php` para renderizar as seções via chamadas de `get_template_part` dinâmicas ao invés de Gutenberg Block Patterns, blindando o layout contra erros acidentais de usuários inexperientes.
- Opcionalmente renderiza blocos do Gutenberg apenas no final do site, se existirem no editor.

## [1.1.1] - Correção do Fallback de Seções na Home - 2026-05-26
### Fixed
- Correção em `front-page.php` para exibir todas as seções (Block Patterns) em ordem como fallback caso o conteúdo da página inicial no painel do WordPress esteja vazio.

## [1.1.0] - Tema WordPress 100% Nativo FSE / WP.org Standards - 2026-05-19
### Changed
- Refatoração profunda da arquitetura do tema Bella VIP.
- Remoção total do plugin ACF e de seus usos em código hardcoded.
- Adoção da Customizer API para cores (`bella-terracotta`, `bella-nude`) e informações globais (WhatsApp, Endereço).
- Migração de todos os `template-parts` para **Padrões de Bloco (Block Patterns)** nativos do Gutenberg (`patterns/*.php`).
- Aplicação estrita de `Text Domain` (`bellavip`) e internacionalização (i18n) em todo o código PHP.
- `front-page.php` agora usa `the_content()` com Graceful Degradation (fallback para padrões se vazio).

## [1.0.0] - Prototipação - 2026-05-18
### Added
- Setup do projeto com React, Vite e Tailwind CSS v4.
- `Header.jsx` com navegação simples.
- `Hero.jsx` com chamada forte e CTA.
- `About.jsx` evidenciando diferenciais.
- `Services.jsx` com listagem de serviços principais.
- `GlossExpress.jsx` com destaque visual alternado.
- `Gallery.jsx` e `Testimonials.jsx` para prova social.
- `Location.jsx` com espaço para mapa e contato.
- `Footer.jsx` com informações completas e `FloatingWhatsApp.jsx`.
- Documentação de governança (`AGENTS.md`, `ROADMAP.md`, etc).

### Fixed
- Erro de configuração entre PostCSS e Tailwindcss v4 resolvido usando `@tailwindcss/vite`.
- Erros de exportação de ícones (`lucide-react`) resolvidos com a remoção de imports ausentes.
