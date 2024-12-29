function togglePassword(inputId) {
    const passwordInput = document.getElementById(inputId);
    const toggleButton = passwordInput.nextElementSibling;

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        passwordInput.type = "password";
        toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
    }
}

function gerarSenha() {
    const tamanho = 12; // Tamanho da senha
    const caracteres = "abcdefghijklmnopqrstuvwxyz"; // Letras minúsculas
    const maiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // Letras maiúsculas
    const numeros = "0123456789"; // Números
    const especiais = "!@#$%^&*()_+[]{}|;:,.<>?"; // Caracteres especiais

    let senha = "";

    // Garantindo ao menos um caractere de cada tipo
    senha += caracteres[Math.floor(Math.random() * caracteres.length)];
    senha += maiusculas[Math.floor(Math.random() * maiusculas.length)];
    senha += numeros[Math.floor(Math.random() * numeros.length)];
    senha += especiais[Math.floor(Math.random() * especiais.length)];

    // Preenchendo o restante da senha com caracteres aleatórios
    const todosCaracteres = caracteres + maiusculas + numeros + especiais;
    for (let i = senha.length; i < tamanho; i++) {
        senha += todosCaracteres[Math.floor(Math.random() * todosCaracteres.length)];
    }

    // Embaralhando os caracteres da senha para maior segurança
    senha = senha.split("").sort(() => 0.5 - Math.random()).join("");

    return senha;
}

// Exemplo de uso
const senhaGerada = gerarSenha();
console.log("Senha Gerada:", senhaGerada);

