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

## 006. Estrutura `/temas/` como hub no site VTIS (CPT `tema`)
**Data:** 2026-05-26
**Contexto:** A submissão ao WordPress.org exige que o campo `Theme URI` aponte para uma página dedicada ao tema. Como a VTIS pretende lançar outros temas e plugins, uma página avulsa em `vtis.com.br/bella-vip` cria dívida técnica imediata; uma estrutura escalável precisa existir desde o primeiro tema.
**Decisão:** Criar um **Custom Post Type `tema`** no WordPress do site institucional (`vtis.com.br`) com rewrite slug `temas`, gerando URLs no padrão `vtis.com.br/temas/{slug}/` e arquivo de listagem `vtis.com.br/temas/`. Reservar também o slug `/plugins/` para o futuro CPT equivalente.
**Consequência:** A página do Bella VIP serve como pioneira de uma arquitetura reutilizável; o esforço de implementação dos templates `single-tema.php` e `archive-tema.php` se amortiza nos próximos lançamentos.

## 007. Demo híbrida — subdomínio próprio + WordPress Playground
**Data:** 2026-05-26
**Revisado em:** 2026-05-26 (substituído `demo.vtis.com.br/bella-vip` por `bella-vip.vtis.com.br` — ver ADR 009)
**Contexto:** A regra do WordPress.org exige um demo público acessível durante a revisão manual, e o tema precisa transmitir o resultado visual final (fotos reais, depoimentos, identidade visual completa) logo no primeiro clique. O WordPress Playground (já referenciado no ticket) carrega o tema "vazio" e não cumpre esse papel, mas é excelente como playground técnico zero-instalação.
**Decisão:** Operar **dois demos em paralelo**:
1. **Principal:** `bella-vip.vtis.com.br` — instalação WordPress real, com dados reais (fotos, depoimentos, WhatsApp da VTIS). Será o CTA primário da página de produto.
2. **Secundário:** WordPress Playground (link já no ticket) — CTA "Testar sem instalar", focado em usuários técnicos.
**Consequência:** Cobertura completa entre conversão (Principal) e exploração técnica (Playground), além de redundância caso um dos dois fique indisponível durante a revisão manual.

## 008. Página de produto Bella VIP — sem versão Pro / sem bloco "Free vs Pro"
**Data:** 2026-05-26
**Contexto:** Definição de escopo para a página `vtis.com.br/temas/bella-vip`. Algumas páginas de tema do mercado contêm um bloco comparativo "Free vs Pro" que prepara o usuário para um upsell pago.
**Decisão:** O Bella VIP é GPL gratuito e **não terá** versão Pro no horizonte próximo. A página de produto **não conterá** bloco "Free vs Pro" nem qualquer CTA de upsell. SEO técnico completo (Schema.org `SoftwareApplication`, OpenGraph, sitemap) será implementado para maximizar descobrimento orgânico.
**Consequência:** Página mais limpa, alinhada às diretrizes de "no upsell agressivo" do WordPress.org, e menor risco de fricção na revisão manual do ticket #273950.

## 009. Convenção de subdomínios por produto (`{produto-slug}.vtis.com.br`)
**Data:** 2026-05-26
**Contexto:** A ADR 007 original definiu o demo do Bella VIP em `demo.vtis.com.br/bella-vip` (sub-pasta sob um subdomínio único). Ao planejar a escalabilidade para futuros temas e plugins da VTIS, identificamos quatro limitações dessa abordagem:
1. **Cookies/sessão compartilhados:** logar como admin em um demo vaza a sessão para os demais sob o mesmo subdomínio.
2. **Risco de conflito de plugins** entre demos co-hospedados na mesma instalação WordPress (ou de regras de rewrite quando em sub-pastas separadas).
3. **Branding fraco na URL:** `demo.vtis.com.br/bella-vip` não comunica o produto; já `bella-vip.vtis.com.br` vira identidade compartilhável.
4. **Reset/restore acoplado:** corrigir ou recriar um demo bagunçado afeta a estrutura compartilhada.

**Decisão:** Adotar a convenção **`{produto-slug}.vtis.com.br`** para todos os demos ao vivo do ecossistema VTIS. O mesmo `slug` é usado em quatro lugares: (a) WordPress.org, (b) CPT `tema`/`plugin` do site institucional, (c) URL da página de produto em `vtis.com.br/temas/{slug}/` ou `/plugins/{slug}/`, (d) subdomínio do demo.

Mapa de subdomínios reservados:
- `{tema-slug}.vtis.com.br` — demos de temas WordPress (ex: `bella-vip.vtis.com.br`).
- `{plugin-slug}.vtis.com.br` — demos de plugins WordPress (futuros).
- `app.vtis.com.br` — SaaS interno (futuro).
- `docs.vtis.com.br` — documentação (futuro).
- `status.vtis.com.br` — status page (futuro).

Pré-requisitos operacionais:
- **DNS wildcard** `*.vtis.com.br` apontando para o servidor de demos (registro `A` ou `CNAME`).
- **Certificado SSL wildcard** `*.vtis.com.br` emitido via Let's Encrypt usando desafio **DNS-01** (HTTP-01 não cobre wildcards).
- **Isolamento por instalação:** cada subdomínio = 1 vhost + 1 banco de dados + 1 instalação WordPress independente (não usar Multisite, exceto para casos justificados).
- **Automação (futuro):** script `provision-demo.sh {slug}` para criar vhost, banco, instalar WP, ativar tema/plugin e importar dump de demo.

**Casos especiais:**
- Plugins que dependem de tema base rodam dentro do demo do tema (ex: plugin que estende o Bella VIP rodaria em `bella-vip.vtis.com.br` já pré-instalado).
- Plugins independentes ganham seu próprio subdomínio com tema padrão (ex: Twenty Twenty-Five).

**Consequência:** Estrutura escalável a custo marginal próximo de zero (mesmo servidor, apenas novos vhosts), com isolamento técnico forte, branding consistente e operação repetível. A ADR 007 foi revisada para refletir o novo endereço do demo principal do Bella VIP.

