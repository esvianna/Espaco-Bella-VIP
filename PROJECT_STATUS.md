# Status Atual do Projeto: Espaço Bella VIP

## 📍 Onde Paramos
- Corrigimos o salvamento do iframe do Google Maps no Customizer (sanitização personalizada `bellavip_sanitize_iframe` que aceita a tag `<iframe>` com atributos seguros), ajustamos as URLs padrão quebradas na Galeria e inserimos os créditos de desenvolvimento corretos para a VTIS no rodapé.
- Migramos a arquitetura da Home do WordPress (`front-page.php`) para uma estrutura 100% controlada pelo Customizer (seções em `template-parts/home-*.php` e painel "Página Inicial Bella VIP"), blindando o layout contra erros acidentais de usuários leigos.
- **Preparação de Conformidade WordPress.org:** Baixamos e configuramos localmente todas as fontes (Inter e Playfair Display) na pasta `bellavip/assets/fonts/`, removendo chamadas externas e atendendo aos requisitos estritos de privacidade e LGPD/GDPR do diretório do WordPress.
- **Ambiente de Build e Compactação:** Movemos todos os arquivos de desenvolvimento (`node_modules/`, `package.json`, `package-lock.json` e `src/`) para fora da pasta do tema (`/wp-theme/`), mantendo o diretório do tema `bellavip/` 100% limpo com arquivos de produção. Geramos o pacote final `bellavip.zip` pronto para submissão e instalação.

## ✅ O Que Já Foi Feito
- [x] Setup inicial (React, Vite, Tailwind v4).
- [x] Configuração da paleta de cores premium (Nude, Rosé, Terracota, Branco Quente).
- [x] Implementação dos componentes baseados no design system.
- [x] Ajuste e correção de importação de ícones (`lucide-react`).
- [x] Configuração de responsividade.
- [x] Mapeamento e controle completo da Home pelo WordPress Customizer (seções Hero, Serviços, Gloss Express, Sobre, Galeria, Depoimentos, Localização).
- [x] Criação da base estrutural do Tema WordPress (arquitetura MVC e SOLID) na pasta `wp-theme/bellavip/`.
- [x] Refatoração do tema para os rigorosos padrões do **WordPress.org**, removendo a dependência do ACF e implementando integração com Customizer.
- [x] **NOVO**: Download local e self-hosting das fontes do Google Fonts, eliminando chamadas remotas de privacidade.
- [x] Compilar o CSS (`npm run build` no tema) para gerar o build do Tailwind contemplando os novos template parts e fontes locais.
- [x] Reconstrução do pacote de distribuição compactado `wp-theme/bellavip.zip`.

## ⏳ O Que Está Pendente
- Substituição das imagens de placeholder do Unsplash por fotos reais do espaço pelo usuário via Customizer.
- Inclusão do iframe real do Google Maps pelo usuário no painel do Customizer.

## 👣 Próximos Passos Lógicos
1. **Re-cadastrar o Iframe do Google Maps:** Como o banco de dados anterior limpou o iframe devido à sanitização antiga (`wp_kses_post`), o usuário precisa acessar **Aparência > Personalizar > Página Inicial Bella VIP > Localização e Mapa** e colar o código `<iframe>` do Google Maps novamente e publicar.
2. **Submeter o Tema para Revisão:** Fazer o upload do arquivo compactado `wp-theme/bellavip.zip` no diretório oficial do WordPress.org para revisão e publicação.
3. **Substituir Imagens:** Enviar as fotos oficiais do salão/clínica através dos respectivos campos de imagens no Customizer.

## ⚠️ Riscos ou Decisões Pendentes
- **Risco de Performance:** Imagens futuras de alta resolução enviadas pelo usuário podem causar lentidão se não otimizadas em WebP antes do upload no WordPress.
- **Rastreamento de Leads:** Como será o rastreamento do clique no WhatsApp (Pixel/Tag Manager)? Pode ser injetado via plugin de cabeçalho/rodapé.
