# 🎬 Cadastro de Filmes — CRUD em PHP com MVC

Aplicação web em **PHP orientado a objetos**, com conexão ao banco via **PDO** e
organização no padrão **MVC** (Model–View–Controller). Desenvolvida como atividade
extraclasse da disciplina.

A entidade principal é **Filme**, com os campos: `nome`, `tema`, `duracao` e
`classificacao` (além da chave primária `id`).

---

## 📦 Tecnologias

- **PHP 8** (orientação a objetos, tipagem)
- **MySQL / MariaDB** (acesso via **PDO**)
- **Bootstrap 5** (interface, servido localmente em `public/css/`)
- Padrão **MVC**

---

## 🗂️ Estrutura do projeto

```
CadastroFilmes_PHP/
├── config/
│   └── Database.php              # Conexão PDO (classe reutilizável)
├── controllers/
│   ├── CadastroController.php    # Create
│   ├── ListagemController.php    # Read
│   ├── EdicaoController.php      # Update (buscar + atualizar)
│   └── ExclusaoController.php    # Delete
├── models/
│   └── Filmes.php                # Entidade + SQL (INSERT, SELECT, UPDATE, DELETE)
├── views/
│   ├── form.php                  # Formulário de cadastro
│   ├── listar.php                # Tabela com todos os filmes + ações
│   ├── editar.php                # Formulário de edição (pré-preenchido)
│   └── mensagem.php              # Tela de sucesso/erro
├── public/
│   └── css/
│       └── bootstrap.min.css     # Bootstrap local
├── database.sql                  # Script de criação do banco e da tabela
├── index.php                     # Roteador (lê ?acao= e chama o controller)
└── README.md
```

### Como o MVC se conecta

```
Navegador  ──>  index.php  ──>  Controller  ──>  Model  ──>  Banco (PDO)
   (HTML)        (rota)         (regras)        (SQL)         (MySQL)
     ^                                                          |
     └──────────────  View (HTML + Bootstrap)  <───────────────┘
```

- **index.php** — lê `?acao=` e decide qual controller chamar (roteamento).
- **Controller** — recebe os dados do formulário, valida e chama o Model.
- **Model (`Filmes`)** — fala com o banco via PDO (INSERT / SELECT / UPDATE / DELETE).
- **View** — monta o HTML exibido ao usuário.
- **Database** — isola a conexão PDO em um único lugar, reaproveitada por todos.

---

## 🛢️ Banco de dados

Script completo em [`database.sql`](database.sql):

```sql
CREATE DATABASE IF NOT EXISTS cadastro_filmes;
USE cadastro_filmes;

CREATE TABLE IF NOT EXISTS filmes (
  id            INT AUTO_INCREMENT PRIMARY KEY,
  nome          VARCHAR(120) NOT NULL,
  tema          VARCHAR(80)  NOT NULL,
  duracao       INT          NOT NULL,
  classificacao VARCHAR(20)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

---

## ▶️ Como executar

1. **Clonar o repositório**
   ```bash
   git clone https://github.com/<usuario>/CadastroFilmes_PHP.git
   cd CadastroFilmes_PHP
   ```

2. **Criar o banco de dados** — importe o `database.sql` no MySQL:
   ```bash
   mysql -u root -p < database.sql
   ```
   (ou rode o script pelo phpMyAdmin / Workbench)

3. **Conferir a conexão** em [`config/Database.php`](config/Database.php) —
   ajuste `usuario`, `senha`, `host` e `porta` se necessário
   (padrão: `root` / sem senha / `localhost:3306`).

4. **Subir o servidor PHP** na raiz do projeto:
   ```bash
   php -S localhost:8000
   ```

5. **Acessar** no navegador: <http://localhost:8000>

---

## 🔗 Rotas

| URL                        | Ação                                    |
|----------------------------|-----------------------------------------|
| `index.php`                | Exibe o formulário de cadastro          |
| `index.php?acao=cadastrar` | Salva um novo filme (**Create**)        |
| `index.php?acao=listar`    | Lista os filmes (**Read**)              |
| `index.php?acao=editar&id=X`   | Abre o formulário de edição do filme X |
| `index.php?acao=atualizar` | Salva as alterações (**Update**)        |
| `index.php?acao=excluir&id=X`  | Exclui o filme X (**Delete**)       |

---

## ✅ Funcionalidades

- [x] **Create** — cadastro de filmes
- [x] **Read** — listagem em tabela
- [x] **Update** — edição com formulário pré-preenchido
- [x] **Delete** — exclusão com confirmação
- [x] Mensagens de sucesso/erro em todas as operações
- [x] Navegação entre as páginas

---

## 👤 Autor

**Felipe Trindade** — atividade extraclasse (PHP / MVC).
