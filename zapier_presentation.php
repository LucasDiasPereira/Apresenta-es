<?php
// Definir o conteúdo dos slides
$slides = [
    [
        'title' => 'Introdução ao Zapier',
        'content' => 'O Zapier é uma plataforma de automação que conecta diferentes aplicativos e serviços, permitindo a criação de fluxos de trabalho automatizados sem necessidade de programação. Com o Zapier, você pode criar "Zaps" para automatizar tarefas repetitivas e conectar uma ampla variedade de ferramentas.'
    ],
    [
        'title' => 'Funcionalidades Principais',
        'content' => '1. **Automação de Tarefas Repetitivas:** Automatize tarefas diárias e economize tempo.\n2. **Conexão entre Aplicativos:** Conecte aplicativos como Gmail, Slack, Trello e mais.\n3. **Criação de Fluxos de Trabalho:** Configure fluxos de trabalho personalizados com múltiplos passos.\n4. **Sem Necessidade de Código:** Criação fácil de automações sem programação.\n5. **Templates e Sugestões:** Use templates pré-configurados para iniciar rapidamente.'
    ],
    [
        'title' => 'Exemplos de Uso',
        'content' => '1. **Sincronização de Dados:** Sincronize contatos entre seu CRM e ferramentas de email marketing.\n2. **Notificações e Alertas:** Receba alertas em Slack quando novos leads são adicionados ao CRM.\n3. **Automação de Tarefas Administrativas:** Crie eventos no Google Calendar a partir de novas tarefas em ferramentas de gerenciamento de projetos.'
    ],
    [
        'title' => 'Como Funciona',
        'content' => '1. **Criação de um Zap:** Escolha um gatilho e configure a ação a ser executada.\n2. **Teste e Ative:** Teste seu Zap e ative-o para automação contínua.\n3. **Interface Intuitiva:** Use a interface gráfica para configurar e gerenciar suas automações.'
    ],
    [
        'title' => 'Comece a Usar',
        'content' => '1. **Visite o Site:** Acesse [Zapier](https://zapier.com/) para começar.\n2. **Crie uma Conta:** Registre-se para uma conta gratuita ou escolha um plano pago.\n3. **Explore Templates:** Utilize templates para facilitar a criação de automações.\n4. **Automatize Seu Trabalho:** Conecte suas ferramentas e deixe o Zapier cuidar das tarefas repetitivas.'
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação sobre Zapier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .presentation {
            width: 80%;
            margin: auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .slide {
            margin-bottom: 20px;
            padding: 20px;
            background: #e0e0e0;
            border-radius: 8px;
        }
        .slide h2 {
            margin-top: 0;
            color: #333;
            font-size: 24px;
        }
        .slide p {
            margin: 0;
            line-height: 1.6;
            font-size: 18px;
        }
        .slide ul {
            margin: 0;
            padding-left: 20px;
        }
        .slide li {
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .presentation {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="presentation">
        <?php foreach ($slides as $slide): ?>
            <div class="slide">
                <h2><?php echo htmlspecialchars($slide['title']); ?></h2>
                <p><?php echo nl2br(htmlspecialchars($slide['content'])); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
