# Documentação do Sistema de Login e Gestão de Senhas

## Introdução

Este sistema implementa funcionalidades de login e alteração de senha, com uma interface amigável e medidas de segurança como o uso de prepared statements e validação de senha. O sistema é composto por uma aplicação web em PHP, com HTML e CSS para o front-end, e utiliza um banco de dados MySQL para armazenar as informações dos usuários.

## Funcionalidades Principais

1. **Login**:
    - Permite que o usuário acesse sua conta inserindo email e senha.
    - Validação com prepared statements para evitar injeção SQL.
    - Redireciona o usuário para a página inicial após login bem-sucedido.
2. **Alteração de Senha**:
    - Usuários podem redefinir suas senhas com base em seu email.
    - Validação de força da senha (mais de 6 caracteres, 1 letra maiúscula, 1 número e 1 caractere especial).
    - Inclui opção de visualizar a senha enquanto ela é digitada.
3. **Front-End**:
    - Interface responsiva e amigável.
    - Elementos como botões de "mostrar/ocultar senha" estão embutidos nos campos de senha.
4. **Segurança**:
    - Uso de prepared statements para consultas no banco de dados.
    - Redirecionamento seguro após operações sensíveis.

## Banco de Dados

**Nome do banco:** `login`

### Estrutura das Tabelas

### Tabela `usuario`

CREATE TABLE usuario (
 idUsuario INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL,
senha VARCHAR(255) NOT NULL
);

## Melhorias Futuras

- Implementação de autenticação de dois fatores (2FA).
- Integração com APIs de terceiros para login social (Google, Facebook).
- Criptografia de senha utilizando Argon2.
- Mensagens de erro mais detalhadas para o usuário.

## Conclusão

Este sistema oferece funcionalidades básicas de login e gestão de senhas com segurança e usabilidade em mente. Seguindo boas práticas e mantendo o sistema atualizado, ele pode ser ampliado para atender a novos requisitos.