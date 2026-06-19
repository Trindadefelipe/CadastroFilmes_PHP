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
- **Bootstrap 5** (interface)
- Padrão **MVC**

---

## 🗂️ Estrutura do projeto

```
CadastroFilmes_PHP/
├── config/
│   └── Database.php            # Conexão PDO (classe reutilizável)
├── controllers/
│   ├── CadastroController.php  # Create
│   └── ListagemController.php  # Read
├── models/
│   └── Filmes.php              # Entidade + SQL (INSERT, SELECT, ...)
├── views/
│   ├── form.php                # Formulário de cadastro (Bootstrap)
│   └── mensagem.php            # Tela de sucesso/erro
├── database.sql                # Script de criação do banco e da tabela
├── index.php                   # Roteador (lê ?acao= e chama o controller)
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
- **Model (`Filmes`)** — fala com o banco via PDO (INSERT / SELECT / ...).
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

| URL                       | Ação            | Status |
|---------------------------|-----------------|--------|
| `index.php`               | Exibe o formulário de cadastro | ✅ |
| `index.php?acao=cadastrar`| Salva um novo filme (**Create**) | ✅ |
| `index.php?acao=listar`   | Lista os filmes (**Read**)       | 🚧 em desenvolvimento |
| `index.php?acao=editar`   | Edita um filme (**Update**)      | 🚧 planejado |
| `index.php?acao=excluir`  | Exclui um filme (**Delete**)     | 🚧 planejado |

> O andamento detalhado das etapas está em [`plano.md`](plano.md).

---

## ✅ Status do CRUD

- [x] **Create** — cadastro de filmes funcionando
- [ ] **Read** — listagem
- [ ] **Update** — edição
- [ ] **Delete** — exclusão

---

## 👤 Autor

**Felipe Trindade** — atividade extraclasse (PHP / MVC).
