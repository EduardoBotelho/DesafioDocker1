document.addEventListener('DOMContentLoaded', () => {
    const simulateActionButton = document.getElementById('simulateActionButton');
    const messageDiv = document.getElementById('message');
    const fileContentPre = document.getElementById('fileContent');

    if (simulateActionButton) {
        simulateActionButton.addEventListener('click', () => {
            messageDiv.textContent = 'Simulando ação...';
            simulateActionButton.disabled = true; 

            setTimeout(() => {
                const actions = [
                    "Serviços iniciados com sucesso (simulado)!",
                    "Status atualizado (simulado)!",
                    "Erro ao executar ação (simulado).",
                    "Ação concluída (simulado)."
                ];
                const randomAction = actions[Math.floor(Math.random() * actions.length)];

                messageDiv.textContent = randomAction;
                simulateActionButton.disabled = false; // Reabilita o botão
          }, 2000); // Simula um atraso de 2 segundos
        });
    }
