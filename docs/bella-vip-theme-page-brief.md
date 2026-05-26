# Briefing: Página de Produto — Tema Bella VIP

> Documento de handoff para implementação no repositório do **site institucional VTIS** (`vtis.com.br`).
> Este documento é auto-contido: você pode copiá-lo na íntegra para o outro repositório e usá-lo como única fonte de verdade para construir a página `/temas/bella-vip/`.

---

## Metadados

| Campo | Valor |
|---|---|
| Projeto destino | `vtis.com.br` (WordPress) |
| Página a criar | `/temas/bella-vip/` |
| Origem da demanda | Submissão ao WordPress.org — ticket [#273950](https://themes.trac.wordpress.org/ticket/273950) |
| Autor do briefing | VTIS |
| Data | 2026-05-26 |
| Status | Pendente execução |
| Versão do tema (pública) | 1.2.3 |

---

## 1. Objetivo

Criar uma **landing page de produto** para o tema Bella VIP, hospedada em
`vtis.com.br/temas/bella-vip`, conforme exigência do diretório oficial de temas
do WordPress.org (campo `Theme URI` declarado no `style.css` do tema).

A página deve:

- Apresentar o tema visualmente (screenshots + demo ao vivo).
- Direcionar o download para o repositório oficial do WordPress.org.
- Servir como hub de informações técnicas (versão, compatibilidade, FAQ).
- Inaugurar a estrutura `/temas/` que receberá futuros temas e plugins da VTIS.

---

## 2. Decisões consolidadas

| Item | Decisão | Justificativa |
|---|---|---|
| Plataforma | WordPress (mesma instalação do `vtis.com.br`) | Unidade de ecossistema |
| Repositório | Separado do projeto "Espaço Bella VIP" | `vtis.com.br` já existe em outro repo |
| Estrutura de URL | Hub `/temas/` + páginas filhas | Reaproveitar para futuros temas/plugins |
| Versão Pro | **Não existe** — não incluir bloco "Free vs Pro" | Apenas versão GPL gratuita por enquanto |
| Demo principal | `bella-vip.vtis.com.br` (subdomínio dedicado por produto) | Isolamento total, branding na URL, escalável para futuros temas/plugins |
| Demo secundário | WordPress Playground (link já no ticket) | Bônus para usuários técnicos |
| Convenção de subdomínios | `{produto-slug}.vtis.com.br` para todos os demos | Ver `DECISIONS.md` ADR 009 |
| SEO técnico | Sim — Schema.org, OpenGraph, sitemap | Item explicitamente solicitado |
| Idioma | PT-BR | Público brasileiro |
| Identidade visual | Paleta do tema (`#ebe2dc` nude, terracota, branco quente) + fontes Inter + Playfair Display | Coerência com o produto |

---

## 3. Regras obrigatórias do WordPress.org

Atenção: o descumprimento de qualquer item abaixo pode **bloquear o ticket #273950** durante a revisão manual.

- [ ] Página deve ser **única e dedicada** ao tema Bella VIP (não pode ser a homepage genérica da VTIS).
- [ ] Botão "Download" aponta **OBRIGATORIAMENTE** para `https://wordpress.org/themes/bella-vip/` — nunca um `.zip` auto-hospedado.
- [ ] Sem parâmetros `?ref=`, `?aff=` ou tracking de afiliados nos links para o WordPress.org.
- [ ] Sem upsell agressivo (é um tema gratuito GPL).
- [ ] Informações de versão e compatibilidade devem bater com o `style.css` do tema.
- [ ] Demo deve estar **acessível publicamente** durante toda a revisão manual.
- [ ] Licença GPL v2+ declarada visivelmente.

---

## 4. Arquitetura de URLs (hub /temas/ + subdomínios por produto)

Como a VTIS terá futuros temas e plugins, a estrutura precisa ser escalável desde o início. Adotamos **dois eixos**:

- **Páginas institucionais e de produto** ficam em `vtis.com.br/temas/...` e `vtis.com.br/plugins/...`.
- **Demos ao vivo** ficam em **subdomínios dedicados por produto**: `{produto-slug}.vtis.com.br`.

```text
vtis.com.br                       ← site institucional (PRINCIPAL)
├── /temas/                       ← hub de listagem
│   ├── /temas/bella-vip/         ← PÁGINA DE PRODUTO (esta)
│   └── /temas/{futuros}/
├── /plugins/                     ← hub de listagem (futuro)
└── /plugins/{slug}/              ← PÁGINA DE PRODUTO de plugin (futuro)

bella-vip.vtis.com.br             ← DEMO LIVE do tema Bella VIP
{tema-slug}.vtis.com.br           ← DEMO LIVE de cada tema futuro
{plugin-slug}.vtis.com.br         ← DEMO LIVE de cada plugin futuro
app.vtis.com.br                   ← reservar para SaaS interno (futuro)
docs.vtis.com.br                  ← reservar para documentação (futuro)
status.vtis.com.br                ← reservar para status page (futuro)
```

**Regra de ouro:** o slug do produto vira o subdomínio. O mesmo slug é usado no WordPress.org, no CPT `tema`, na página de produto e no demo. Ver `DECISIONS.md` ADR 009.

### Tipo de conteúdo no WordPress

- Criar Custom Post Type `tema` (rewrite slug: `temas`).
- URL resultante: `vtis.com.br/temas/{slug}/`.
- Taxonomia auxiliar: `tema_categoria` (valores iniciais: "Beleza", "Serviços", "E-commerce", "Saúde").
- Campos personalizados (ACF ou metaboxes nativos):
  - Nome do tema
  - Tagline curta
  - Versão pública
  - WordPress mínimo / WordPress testado até / PHP mínimo
  - Screenshot principal
  - Galeria de screenshots (múltiplas)
  - Vídeo do Customizer (URL ou upload)
  - Link WordPress.org
  - Link Demo principal
  - Link Playground
  - Link Trac/SVN (opcional)
  - Features (repeater: ícone + título + descrição)
  - Personas-alvo (repeater: imagem + título + descrição)
  - FAQ (repeater: pergunta + resposta)
  - Changelog (repeater: versão + data + bullets)

---

## 5. Anatomia da página (wireframe)

### 5.1 Hero (above the fold)

**Esquerda (texto):**

- Eyebrow: `Tema WordPress · Disponível no WordPress.org`
- H1: `Bella VIP`
- Subtítulo: `Um tema elegante para salões de beleza, clínicas de estética e spas — com agendamento por WhatsApp e Customizer nativo do WordPress.`
- CTAs:
  - **PRIMÁRIO**: `Ver demonstração ao vivo` → `https://bella-vip.vtis.com.br` (`target="_blank" rel="noopener"`)
  - **SECUNDÁRIO**: `Baixar no WordPress.org` → `https://wordpress.org/themes/bella-vip/` (`target="_blank" rel="noopener"`)
- Linha de social proof: `★ Compatível com WordPress 6.0+ · GPL · Versão 1.2.3`

**Direita (visual):**

- Mockup do tema em notebook + celular.
- Render preferencialmente em alta resolução, com sombra suave e fundo na cor da marca.

### 5.2 Demonstração interativa

- Vídeo curto (**15–30 segundos**) OU GIF do Customizer em ação.
- Mostrar usuário editando "Página Inicial Bella VIP" no painel do WordPress e o preview atualizando ao lado em tempo real.
- Legenda: **"Sem page builder. Sem código. Tudo no Customizer nativo."**
- Dois links abaixo do vídeo:
  - `Abrir demo ao vivo` → `https://bella-vip.vtis.com.br`
  - `Testar no WordPress Playground` → link do Playground (mesmo do ticket)

### 5.3 Features (grid 3×2)

Cards com ícone (lucide ou heroicons), título e 1 linha de descrição:

1. **Customizer nativo** — Edite cada seção da home sem page builder.
2. **WhatsApp integrado** — Botão flutuante e CTAs diretos para agendamento.
3. **Mobile First** — Layout responsivo otimizado para o tráfego do Instagram.
4. **SEO local** — Estrutura semântica para ranquear na sua cidade.
5. **Performance** — CSS compilado, fontes self-hosted, sem dependências externas.
6. **Privacidade (LGPD/GDPR)** — Fontes locais, zero requisições ao Google.

### 5.4 "Para quem é o Bella VIP" (3 personas)

Cards com foto e texto curto:

- **Salões de Beleza** — cabelo, manicure, design de sobrancelhas.
- **Clínicas de Estética** — limpeza de pele, peelings, harmonização.
- **Spas & Day Spas** — massagens, terapias, rituais.

### 5.5 Galeria de seções

Carrossel ou grid com lightbox mostrando as 7 seções do tema:

1. Hero
2. Serviços
3. Gloss Express
4. Sobre
5. Galeria
6. Depoimentos
7. Localização e mapa

### 5.6 Especificações técnicas (tabela)

| Item | Valor |
|---|---|
| Versão atual | 1.2.3 |
| WordPress mínimo | 6.0 |
| WordPress testado até | 6.5 |
| PHP mínimo | 7.4 |
| Licença | GPL v2 ou superior |
| Idiomas | PT-BR (pronto para tradução) |
| Compatibilidade declarada | Gutenberg, WPML*, Polylang*, Yoast SEO |
| Peso do `.zip` | ~720 KB |

*compatibilidade declarada, não testada formalmente.

### 5.7 FAQ (acordeão, 6 perguntas)

1. **Preciso do Elementor ou outro page builder?**
   → Não. Tudo é editado no Customizer nativo do WordPress.
2. **Posso trocar as cores e textos do site?**
   → Sim. Cores, textos, imagens, links e número de WhatsApp são personalizáveis.
3. **Funciona com WooCommerce?**
   → O tema não é otimizado para e-commerce. Para venda de produtos, recomendamos outro tema da VTIS (em breve).
4. **Como recebo agendamentos?**
   → O tema integra WhatsApp diretamente. O cliente clica no botão e abre a conversa com mensagem pré-formatada.
5. **Posso usar em vários sites de clientes?**
   → Sim. A licença GPL permite uso ilimitado.
6. **Onde reporto problemas ou peço suporte?**
   → No fórum oficial em `wordpress.org/support/theme/bella-vip` ou em `suporte@vtis.com.br`.

### 5.8 Changelog resumido

Mostrar as **3 últimas versões** com bullets curtos.
Botão "Ver changelog completo" → link para o repositório SVN do WordPress.org.

### 5.9 CTA final

- Headline: `Comece sua jornada de beleza online em minutos.`
- Subheadline: `Instale grátis, personalize no Customizer e publique hoje.`
- Botões: `Baixar grátis no WordPress.org` + `Ver demo`.

### 5.10 Footer

Reutilizar o footer existente do `vtis.com.br`, adicionando o link `Nossos Temas` → `/temas/` no menu.

---

## 6. SEO técnico (obrigatório)

### 6.1 Meta tags

```html
<title>Bella VIP — Tema WordPress para Salões, Clínicas e Spas | VTIS</title>
<meta name="description" content="Tema WordPress elegante e gratuito para salões de beleza, clínicas de estética e spas. Customizer nativo, agendamento por WhatsApp e SEO otimizado." />
<link rel="canonical" href="https://vtis.com.br/temas/bella-vip/" />
```

### 6.2 OpenGraph + Twitter Card

```html
<meta property="og:type" content="product" />
<meta property="og:title" content="Bella VIP — Tema WordPress" />
<meta property="og:description" content="Tema WordPress elegante para salões de beleza, clínicas de estética e spas." />
<meta property="og:image" content="https://vtis.com.br/wp-content/uploads/og-bella-vip.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://vtis.com.br/temas/bella-vip/" />
<meta property="og:locale" content="pt_BR" />
<meta name="twitter:card" content="summary_large_image" />
```

Gerar `og-bella-vip.jpg` em **1200×630** com mockup do tema, logo VTIS e nome do tema.

### 6.3 Schema.org (JSON-LD)

Usar o tipo `SoftwareApplication`:

```json
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Bella VIP",
  "operatingSystem": "WordPress 6.0+",
  "applicationCategory": "WebApplication",
  "applicationSubCategory": "WordPress Theme",
  "softwareVersion": "1.2.3",
  "author": {
    "@type": "Organization",
    "name": "VTIS",
    "url": "https://vtis.com.br"
  },
  "downloadUrl": "https://wordpress.org/themes/bella-vip/",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "BRL"
  },
  "screenshot": "https://themes.svn.wordpress.org/bella-vip/1.2.3/screenshot.png",
  "description": "Tema WordPress elegante e gratuito para salões de beleza, clínicas de estética e spas. Customizer nativo, agendamento por WhatsApp e SEO otimizado."
}
```

Adicionar também o breadcrumb estruturado (`BreadcrumbList`).

### 6.4 Sitemap e Robots

- Garantir que `/temas/` e `/temas/bella-vip/` apareçam no sitemap (Yoast/RankMath cuidam disso automaticamente para CPTs públicos).
- Verificar `robots.txt` para liberar o crawl de `/temas/`.

### 6.5 Performance

- Lazy load em todas as imagens da galeria (`loading="lazy"`).
- Otimizar imagens em **WebP** (target: cada uma < 100 KB).
- Preload na fonte principal (Inter regular 400) com `<link rel="preload" as="font" crossorigin>`.
- Vídeo do Customizer servido como `.mp4` + `.webm` com poster JPG.
- Target Lighthouse: **90+ em Performance, SEO, Acessibilidade e Best Practices**.

---

## 7. Stack e implementação no WordPress

### 7.1 Decisões de stack

- **CPT vs Page**: usar **CPT `tema`** (mais limpo para o hub futuro de temas/plugins).
- **Campos**: ACF Pro ou Meta Boxes (decidir conforme o stack atual do `vtis.com.br`).
- **Conteúdo**: Gutenberg + blocos reutilizáveis. **Não usar Elementor** para manter consistência com o tema submetido (que evita page builders).
- **CSS**: alinhar com a stack atual do tema institucional VTIS. Se ele já usa Tailwind, manter; senão, usar o CSS nativo do tema institucional.

### 7.2 Estrutura de arquivos sugerida no tema da VTIS

```text
wp-content/themes/vtis/
├── single-tema.php          ← template da página individual
├── archive-tema.php         ← hub /temas/
├── template-parts/
│   └── tema/
│       ├── hero.php
│       ├── demo.php
│       ├── features.php
│       ├── personas.php
│       ├── gallery.php
│       ├── specs.php
│       ├── faq.php
│       ├── changelog.php
│       └── cta-final.php
└── inc/
    └── cpt-tema.php         ← registro do CPT
```

### 7.3 Esqueleto do CPT (referência)

```php
<?php
// inc/cpt-tema.php
add_action( 'init', function () {
    register_post_type( 'tema', array(
        'labels' => array(
            'name'          => __( 'Temas', 'vtis' ),
            'singular_name' => __( 'Tema', 'vtis' ),
            'add_new_item'  => __( 'Adicionar novo tema', 'vtis' ),
            'edit_item'     => __( 'Editar tema', 'vtis' ),
        ),
        'public'       => true,
        'has_archive'  => 'temas',
        'rewrite'      => array( 'slug' => 'temas', 'with_front' => false ),
        'menu_icon'    => 'dashicons-art',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest' => true,
    ) );

    register_taxonomy( 'tema_categoria', 'tema', array(
        'labels' => array(
            'name'          => __( 'Categorias de Temas', 'vtis' ),
            'singular_name' => __( 'Categoria de Tema', 'vtis' ),
        ),
        'public'       => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array( 'slug' => 'temas/categoria' ),
    ) );
} );
```

---

## 8. Conteúdo a preparar (assets)

- [ ] **Mockup do hero** — render do Bella VIP em MacBook + iPhone (Photoshop/Figma).
- [ ] **Vídeo do Customizer** — 15-30s, MP4 + WebM + poster JPG.
- [ ] **OG image** — 1200×630, com mockup + nome + tagline.
- [ ] **Screenshots das 7 seções** — exportar de `bella-vip.vtis.com.br` em 1440×900 ou 1920×1200.
- [ ] **Ícones das features** — escolher set único (lucide ou heroicons), exportar em SVG.
- [ ] **Fotos das 3 personas** — banco de imagens com licença comercial OU fotos reais do salão cliente.
- [ ] **Demo hospedada** — provisionar o subdomínio `bella-vip.vtis.com.br` (vhost + DB + WP install + tema instalado) e popular com dados reais (fotos do salão, depoimentos plausíveis, número WhatsApp da VTIS para demonstração).

---

## 9. Checklist de entrega (Definition of Done)

### Conteúdo

- [ ] Todas as 10 seções implementadas
- [ ] Textos finais aprovados
- [ ] Todos os assets visuais no lugar
- [ ] Vídeo do Customizer gravado e otimizado

### Técnico

- [ ] CPT `tema` registrado
- [ ] Slug `/temas/bella-vip/` funcionando
- [ ] Schema.org `SoftwareApplication` validado em [validator.schema.org](https://validator.schema.org)
- [ ] OpenGraph testado em [opengraph.xyz](https://opengraph.xyz)
- [ ] Lighthouse > 90 em todas as métricas
- [ ] Responsivo (testar 320px, 768px, 1024px, 1440px)
- [ ] Demo `bella-vip.vtis.com.br` no ar e estável
- [ ] Certificado SSL wildcard `*.vtis.com.br` emitido (Let's Encrypt DNS-01) e instalado no servidor
- [ ] Registro DNS `bella-vip.vtis.com.br` resolvendo para o servidor de demos

### Compliance com WordPress.org

- [ ] Botão "Download" aponta para `wordpress.org/themes/bella-vip/`
- [ ] Zero tracking/afiliados nos links
- [ ] Página acessível ao revisor manual do WP.org
- [ ] Versão e compatibilidade batem com o `style.css` do tema

### Pós-publicação

- [ ] Verificar/atualizar `Theme URI` no `style.css` do tema Bella VIP
- [ ] Comentar no ticket [#273950](https://themes.trac.wordpress.org/ticket/273950) informando a URL final
- [ ] Submeter URL ao Google Search Console
- [ ] Compartilhar nas redes sociais da VTIS

---

## 10. Próximos passos

1. Validar este briefing internamente.
2. Configurar wildcard DNS `*.vtis.com.br` e emitir certificado SSL wildcard (Let's Encrypt DNS-01).
3. Provisionar o subdomínio `bella-vip.vtis.com.br` (vhost + DB + WP install + tema Bella VIP instalado e populado com dados reais).
4. Criar o CPT `tema` no tema institucional da VTIS.
5. Implementar templates `single-tema.php` e `archive-tema.php`.
6. Produzir os assets visuais (mockup, vídeo, OG image).
7. Popular o conteúdo do Bella VIP via CPT.
8. Lançar, testar, ajustar e comentar no ticket #273950 com a URL definitiva.

---

## 11. Observações importantes

1. **Inconsistência de versão entre tema e site:** o tema submetido no ticket é a **1.2.3**, mas internamente já estamos na **1.2.8**. A página de produto deve refletir a **versão pública (1.2.3)** até o revisor aprovar e publicarmos uma versão nova.

2. **Playground já está no ticket:** o WordPress.org já vai mostrar esse link na ficha do tema. Logo, na página VTIS o Playground vira só "bônus" — o demo principal continua sendo o próprio (`bella-vip.vtis.com.br`).

3. **Provisionar `bella-vip.vtis.com.br` o quanto antes:** o revisor manual do ticket pode entrar a qualquer momento. Se o link `vtis.com.br/temas/bella-vip` (declarado como Theme URI) der 404 ou apontar para uma página vazia, **isso pode ser motivo de bloqueio** do ticket. Priorize colocar pelo menos uma versão mínima da página no ar para garantir que o ticket não trave por isso.

4. **Wildcard SSL é pré-requisito:** como adotamos `{produto-slug}.vtis.com.br` para todos os demos futuros, é essencial emitir um certificado **wildcard `*.vtis.com.br`** via Let's Encrypt usando o desafio **DNS-01** (HTTP-01 não funciona para wildcards). Esse certificado serve para todos os subdomínios atuais e futuros sem retrabalho.

---

## 12. Links de referência

- Ticket WordPress.org: <https://themes.trac.wordpress.org/ticket/273950>
- Trac Browser do tema: <https://themes.trac.wordpress.org/browser/bella-vip/1.2.3>
- SVN: <https://themes.svn.wordpress.org/bella-vip/1.2.3>
- ZIP: <https://downloads.wordpress.org/theme/bella-vip.1.2.3.zip?nostats=1>
- Diretrizes oficiais do WordPress.org: <https://make.wordpress.org/themes/handbook/review/required/>
- Inspirações de mercado:
  - <https://kadencewp.com/kadence-theme/>
  - <https://wpastra.com/free/>
  - <https://generatepress.com/>
  - <https://creativethemes.com/blocksy/>
  - <https://themeisle.com/themes/neve/>
