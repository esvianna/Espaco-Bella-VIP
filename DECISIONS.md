# Registro de Decisões Técnicas (ADR)

Este documento registra as principais decisões arquiteturais e técnicas tomadas durante o projeto.

## 001. Escolha da Stack do Protótipo
**Data:** 2026-05-18
**Contexto:** Era necessário apresentar rapidamente uma proposta visual interativa e de alta fidelidade antes de construir a versão final no WordPress.
**Decisão:** Usar React com Vite e Tailwind CSS.
**Consequência:** Permite iterações de design rápidas e componentes modulares. O layout resultante ditará os parâmetros do Elementor depois.

## 002. Versão do Tailwind
**Data:** 2026-05-18
**Contexto:** Falha inicial com a configuração do Tailwind.
**Decisão:** Utilizar a versão 4.0 (mais recente), adotando o pacote `@tailwindcss/vite` e removendo dependência do PostCSS direto. As cores foram configuradas via CSS Variables nativas no `index.css`.
**Consequência:** Simplificação do setup de build, mas obriga o uso das diretrizes de variáveis da v4 (ex: `var(--color-bella-nude)` para estilização global se necessário, embora classes utilitárias funcionem perfeitamente).

## 003. Abordagem de Ícones
**Data:** 2026-05-18
**Contexto:** Bugs de quebra de renderização relacionados à biblioteca `lucide-react` com ícones específicos não exportados.
**Decisão:** Remoção temporária de ícones de redes sociais para evitar bloqueio e adoção de ícones base (ou texto).
**Consequência:** O código fica mais estável. Para o WP/Elementor, serão usados os ícones em SVG nativos do builder.

## 004. Hospedagem Local de Google Fonts (Self-hosting)
**Data:** 2026-05-26
**Contexto:** O diretório de temas oficial do WordPress.org proíbe estritamente o carregamento remoto de qualquer recurso externo por motivos de privacidade/GDPR, o que impedia a inclusão do tema se as fontes fossem carregadas da API do Google Fonts.
**Decisão:** Baixar os arquivos `.woff2` das fontes Inter e Playfair Display, adicioná-los localmente à pasta de ativos (`assets/fonts/`), declará-los via `@font-face` no Tailwind CSS e remover o enfileiramento remoto em `functions.php`.
**Consequência:** O tema agora atende integralmente às exigências de conformidade do WordPress.org e regulamentos como GDPR/LGPD, além de carregar mais rápido, reduzindo a latência da conexão externa com os servidores do Google.

## 005. Blindagem de Avisos PHP no Customizer
**Data:** 2026-05-26
**Contexto:** O WordPress exibia avisos do tipo `_doing_it_wrong()` devido a itens de menu antigos que tentavam verificar o tipo de post `elementor_library` (agora inativo). Estes avisos PHP e tags HTML eram injetados no JSON inline do Customizer, quebrando a sintaxe JavaScript e travando a tela com `SyntaxError: Unexpected token '<'`.
**Decisão:**
1. Desativar a exibição de erros do PHP na tela (`display_errors = 0`) para requisições do Admin/Customizer para blindar a integridade do JSON gerado.
2. Registrar temporariamente no hook `init` o post type fallback `elementor_library` para que as rotinas internas do WordPress não gerem o aviso de post type não cadastrado.
**Consequência:** O Customizer funciona sem interrupções e com robustez, mesmo se outros plugins inativos ou mal configurados gerarem avisos ou notices em PHP 8.2+.


