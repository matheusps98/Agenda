# Agenda de Contatos

Este é um sistema simples de agenda de contatos desenvolvido em PHP e MySQL.

## Tecnologias Utilizadas
- PHP
- MySQL
- Bootstrap
- CSS

## Estrutura do Projeto
```
agenda/
│── config/
│   ├── connection.php  # Conexão com o banco de dados
│   ├── process.php     # Processamento de dados
│   ├── url.php         # Configuração de URL base
│
│── sql/
│   ├── agenda.sql      # Script para criar a base de dados
│
│── css/
│   ├── styles.css      # Estilos personalizados
│
│── img/
│   ├── logo.svg        # Logo do sistema
│
│── create.php          # Página para adicionar contatos
│── edit.php            # Página para editar contatos
│── show.php            # Página para exibir um contato
│── index.php           # Página inicial
```

## Como Instalar e Executar
1. Clone este repositório:
   ```sh
   git clone https://github.com/seu-usuario/agenda.git
   ```
2. Importe o banco de dados `agenda.sql` para seu MySQL.
3. Configure o arquivo `config/connection.php` com suas credenciais do banco de dados.
4. Inicie um servidor local, como o XAMPP ou outro que suporte PHP e MySQL.
5. Acesse o sistema via navegador: `http://localhost/agenda`

## Funcionalidades
- Criar contatos
- Editar contatos
- Excluir contatos
- Visualizar detalhes de um contato

## Contribuição
Sinta-se à vontade para contribuir com melhorias! Basta criar um fork, fazer as modificações e abrir um pull request.

## Licença
Este projeto está sob a licença MIT.

