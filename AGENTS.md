# Regras de Interação e Contexto para IA (AGENTS)

Este documento dita como Agentes e IAs devem interagir com este projeto.

## 1. Antes de Alterar Código
- **Entenda o Contexto:** Leia o `PROJECT_STATUS.md` e o arquivo afetado. Nunca adivinhe as intenções.
- **Consulte Documentação:** Verifique `DECISIONS.md` para entender por que as coisas foram feitas de determinada maneira (ex: usamos Tailwind v4 de forma direta).
- **Avalie Impacto:** Certifique-se de que alterações visuais não quebram o layout Mobile First.
- **Preserve Funcionalidades:** Não remova chamadas para WhatsApp ou âncoras de navegação sem ordem explícita.
- **Evite Refatorações Grandes:** Este é um protótipo focado em ser levado para WordPress. Não invista esforço excessivo criando abstrações complexas no React se não for requisitado.

## 2. Depois de Alterar Código
- **Atualize o Histórico:** Adicione a mudança no `CHANGELOG.md`.
- **Atualize o Status:** Reflita o progresso no `PROJECT_STATUS.md`.
- **Registre Decisões:** Se uma nova biblioteca ou padrão for introduzido, documente em `DECISIONS.md`.
- **Informe Testes:** Explique como a nova funcionalidade pode ser testada localmente.
- **Próximo Passo Lógico:** Sugira ao usuário o que deve ser feito a seguir.
