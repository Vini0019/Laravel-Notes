<h1 align="center">📝 Laravel Notes</h1>

<p align="center">
  Um app simples de anotações feito com <strong>Laravel</strong>, <strong>PHP</strong>, <strong>Blade</strong>, <strong>Bootstrap</strong> e <strong>MySQL</strong>.
</p>

---

## ✨ Sobre o Projeto

<div align="justify">

O <strong>Laravel Notes</strong> é uma aplicação web simples para criação, edição e organização de anotações pessoais. Seu foco é ser leve, intuitivo e funcional, permitindo que o usuário gerencie suas notas de forma rápida, segura e eficiente.

</div>

---

## Visual do projeto

### 🔐 Tela de Login

<p align="center">
  <img src="https://i.imgur.com/05F7mxi.png" alt="Tela de Login" width="700">
</p>

---

### 🏠 Tela Inicial / Dashboard

<p align="center">
  <img src="https://i.imgur.com/4dEIoB5.png" alt="Dashboard" width="700">
</p>

---

### ✍️ Criar Nova Nota

<p align="center">
  <img src="https://i.imgur.com/D27dFIv.png" alt="Nova Nota" width="700">
</p>

---

### 🛠️ Editar Nota

<p align="center">
  <img src="https://i.imgur.com/aVMQPJZ.png" alt="Editar Nota" width="700">
</p>

---

### ❌ Confirmar Exclusão

<p align="center">
  <img src="https://i.imgur.com/4qSy125.png" alt="Confirmar Exclusão" width="700">
</p>

---

## 🧠 Backend

### 🔐 Autenticação

<div align="justify">

A aplicação utiliza o sistema de autenticação nativo do Laravel, com suporte a `login` e `logout`. Um middleware `auth` protege as rotas privadas, garantindo que apenas usuários autenticados possam acessar, criar, editar ou excluir notas.

</div>

---

### 📦 Models e Eloquent ORM

<div align="justify">

As interações com o banco de dados são feitas por meio do **Eloquent ORM**, o que permite trabalhar com tabelas como se fossem objetos PHP. O modelo `Note` representa as notas do usuário, enquanto o modelo `User` lida com a autenticação e associação com as notas.

- Cada nota pertence a um único usuário (relação `hasMany` / `belongsTo`)
- As operações de `create`, `update` e `delete` são feitas de forma simples e segura com Eloquent

</div>

---

### 📂 Controllers

<div align="justify">

O `NoteController` centraliza toda a lógica das notas. Ele contém os métodos para:

- `index()` – Listar todas as notas do usuário autenticado  
- `create()` e `store()` – Exibir o formulário de nova nota e salvá-la  
- `edit()` e `update()` – Exibir o formulário de edição e atualizar a nota  
- `destroy()` – Excluir uma nota após confirmação

</div>

---

### 🌐 Rotas

<div align="justify">

As rotas estão organizadas no arquivo `web.php` e protegidas por middleware `auth`. Algumas das principais rotas são:

- `/` → Redireciona para o dashboard do usuário  
- `/notes` → Lista todas as notas  
- `/notes/create` → Formulário para criar uma nova nota  
- `/notes/{id}/edit` → Formulário para editar uma nota existente  
- `/notes/{id}` → Exclusão de uma nota com método `DELETE`

</div>

---

### 💾 Banco de Dados

<div align="justify">

O projeto utiliza **MySQL** como banco de dados relacional. As principais tabelas envolvidas são:

- `users`: armazena dados dos usuários (nome, email, senha)  
- `notes`: contém as anotações criadas, vinculadas ao usuário via `user_id`

As migrations do Laravel foram usadas para criar e versionar a estrutura do banco de forma segura e rastreável.

</div>

---

## 🚀 Funcionalidades

<ul>
  <li>✅ Login seguro de usuário</li>
  <li>📝 Criação de novas notas</li>
  <li>🔁 Edição rápida e prática</li>
  <li>🗑️ Exclusão com confirmação</li>
  <li>📄 Visualização clara e objetiva</li>
  <li>📱 Layout responsivo com Bootstrap</li>
</ul>

---

## 🧑‍💻 Tecnologias Utilizadas

<div align="center">

| Backend  | Frontend  | Banco de Dados |
|----------|-----------|----------------|
| PHP      | HTML5     | MySQL          |
| Laravel  | CSS3      |                |
| Blade    | Bootstrap |                |
|          | JavaScript|                |

</div>

---

<p align="center">
  Feito com 💙 usando Laravel
</p>
