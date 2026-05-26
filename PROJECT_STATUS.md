# Status Atual do Projeto: Espaço Bella VIP

## 📍 Onde Paramos
- **Correção Definitiva do Customizer:** Identificamos e corrigimos o erro que deixava a página de personalização em branco. O problema era causado por um aviso do WordPress (`_doing_it_wrong()`) ao tentar ler as capacidades do tipo de post `elementor_library` (antigos itens de menu) que não estava registrado.
- Criamos um fallback de registro no `functions.php` e desativamos a exibição de erros do PHP na tela (`display_errors = 0`) para blindar o Customizer.
- Reempacotamos o tema no arquivo final de produção `bella-vip.zip` livre de scripts de diagnóstico.

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

