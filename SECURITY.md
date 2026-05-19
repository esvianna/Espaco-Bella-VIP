# Segurança do Projeto

Embora este seja um protótipo estático temporário (Front-end), os mesmos princípios serão aplicados na implementação final em WordPress.

## Princípios Adotados
1. **Validação de Entrada e Saída:**
   - No React: Uso seguro do JSX para prevenir ataques de Cross-Site Scripting (XSS) injetados através de possíveis conteúdos de usuário.
   - No WordPress: Sempre usar funções de sanitização (`sanitize_text_field`) ao salvar e de escape (`esc_html`, `esc_url`) ao exibir.

2. **Links Externos Seguros:**
   - Todos os links com `target="_blank"` (como o WhatsApp) devem possuir `rel="noopener noreferrer"` para evitar sequestro da aba de origem (tabnabbing).

3. **Proteção de Dados:**
   - Nenhuma API Key ou token deve ser incluído neste repositório.
   - Variáveis de ambiente serão tratadas via `.env` ou nas configurações do servidor.

## Para a versão em WordPress:
- O painel de administração deve usar proteção extra (WAF, Limitação de Login).
- Todos os formulários (caso venha a ter um formulário de contato ao invés de apenas link do WhatsApp) deverão possuir proteção CSRF/Nonce e validação anti-spam.
