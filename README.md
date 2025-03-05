# 🎉 Gerenciador de Eventos - Laravel

Sistema completo para **gerenciamento de eventos** desenvolvido com **Laravel**.  
Com este sistema, é possível **criar, visualizar, editar e excluir eventos**, além de contar com **autenticação de usuários, validação de formulários** e uma **interface responsiva e estilizada com Bootstrap**.

---

## 🚀 Funcionalidades Principais

✅ **Cadastro de eventos** com título, data, descrição e mais.  
✅ **Edição e exclusão** de eventos cadastrados.  
✅ **Listagem detalhada** dos eventos disponíveis.  
✅ **Sistema de autenticação** seguro para usuários.  
✅ **Validação de dados** nos formulários de entrada.  
✅ **Interface moderna e responsiva** com Bootstrap.  
✅ **Banco de dados MySQL** para armazenamento confiável.  

---

## 🛠️ Tecnologias Utilizadas

O projeto foi desenvolvido utilizando as seguintes tecnologias:

🔹 **Backend:**  
- Laravel (Framework PHP)  
- MySQL (Banco de dados)  
- PHP 8+  

🔹 **Frontend:**  
- Bootstrap (Estilização e responsividade)  
- JavaScript (Interatividade)  
- HTML/CSS  

🔹 **Outras Ferramentas:**  
- Composer (Gerenciador de dependências do PHP)  
- NPM (Gerenciador de pacotes para o frontend)  

---

## 📥 Como Instalar e Rodar o Projeto

Siga o guia abaixo para configurar o sistema na sua máquina local.

### 🔹 1️⃣ Clone o Repositório  

Abra o terminal e execute:  

```bash
git clone https://github.com/seu-usuario/event-manager-laravel.git
cd event-manager-laravel
```

### 🔹 2️⃣ Instale as Dependências  

Instale os pacotes PHP e as dependências frontend:

```bash
composer install
npm install
```

### 🔹 3️⃣ Configuração do Banco de Dados  

1. Crie um banco de dados no MySQL, por exemplo, **event_manager**.
2. Copie o arquivo de exemplo de configuração:

```bash
cp .env.example .env
```

3. Edite o arquivo **.env** e configure as credenciais do banco:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=event_manager
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 🔹 4️⃣ Gere a Chave da Aplicação  

```bash
php artisan key:generate
```

### 🔹 5️⃣ Execute as Migrations e Seeders  

Crie as tabelas no banco de dados e, opcionalmente, adicione dados iniciais:

```bash
php artisan migrate --seed
```

### 🔹 6️⃣ Inicie o Servidor  

```bash
php artisan serve
```

Agora, acesse no navegador:  
🔗 **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 🔑 Credenciais Padrão (Se houver login)

Caso o projeto tenha autenticação de usuários, utilize as credenciais de teste:

- **Usuário:** `admin@example.com`
- **Senha:** `password`

---

## 📂 Estrutura do Projeto

O projeto segue a estrutura padrão do Laravel:

```
event-manager-laravel/
│── app/               # Lógica do backend (Controllers, Models)
│── bootstrap/         # Configuração inicial do Laravel
│── config/            # Arquivos de configuração
│── database/          # Migrations e Seeds
│── public/            # Arquivos públicos (CSS, JS, imagens)
│── resources/         # Views e assets do frontend
│── routes/            # Definição das rotas da aplicação
│── storage/           # Arquivos temporários, logs, cache
│── tests/             # Testes automatizados
│── .env               # Configuração do ambiente (NÃO SUBIR PARA O GIT)
│── artisan            # CLI do Laravel
│── composer.json      # Dependências do Laravel
│── package.json       # Dependências do frontend (Node.js)
│── README.md          # Documentação do projeto
```

---

## 💡 Dicas Extras

🔹 **Caso a porta `8000` esteja ocupada**, rode o servidor em outra porta:  
```bash
php artisan serve --port=8080
```

🔹 **Se precisar limpar o cache do Laravel**, execute:  
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

🔹 **Erros de permissão no Linux?**  
Caso precise dar permissão às pastas de cache e logs:  
```bash
chmod -R 777 storage bootstrap/cache
```

---

## 🎯 Conclusão

Agora você tem tudo pronto para rodar o **Event Manager - Laravel** 🚀  
Caso tenha dúvidas ou precise de suporte, sinta-se à vontade para perguntar!  

🔥 **Divirta-se explorando e aprimorando o projeto!** 🎉
