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
