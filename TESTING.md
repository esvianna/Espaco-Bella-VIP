# Testes e Validação

Orientações para validação de layout, responsividade e interatividade.

## Testes Manuais Mínimos
Como este é um projeto visual focado em interface, os testes prioritários são visuais e interativos:

1. **Responsividade (Mobile First):**
   - Abrir o DevTools (F12) e testar a visualização do protótipo (iPhone SE, iPhone 12 Pro, iPad Air).
   - Verificar se as margens estão adequadas.
   - Verificar se as imagens mantêm um bom aspecto (sem esticar).
   - Confirmar se o menu mobile abre e fecha corretamente.

2. **Links e CTAs:**
   - Clicar em todos os botões "Agendar pelo WhatsApp" e "Conhecer Serviços" para garantir que levam ao destino correto e possuem animação visual (hover state) clara.
   - O botão flutuante do WhatsApp só deve aparecer após um `scroll` mínimo da página e não deve sobrepor conteúdo essencial sem chance de ser ocultado no fluxo.

3. **Carregamento e Performance:**
   - Garantir que o Lighthouse de performance aponte boas métricas (o excesso de imagens não otimizadas é o maior ofensor em sites de beleza).

## Testes Futuros (Pós-WordPress)
- Formulários de contato: Testes de envio vazio e caracteres inválidos.
- Links permanentes de âncora: Testar navegação fluida ao rolar a tela.
