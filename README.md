### pasta /base contém o modelo SQL e as bases para o teste

Obs: Tenha certeza de ter o banco de dados configurado na máquina, para isso, abra o caminho:
```
src/configs/database.php
```
e altere o trecho a seguir de acordo com a porta do seu banco de dados, seu usuario e senha:
```
private static $host = "nome_do_host";
private static $dbName = "alphacode";
private static $username = "seu_usuario";
private static $password = "sua_senha";
private static $port = numero_da_porta;
```

## Para testes rode o comando PHP para iniciar o projeto na máquina local

```
php -S localhost:3030
```

O comando criará um link para o projeto no endereço:
```
http://localhost:3030/
```

## Testes de requisições
para testes de requisições http via postman/insomnia, utilize os seguintes exemplos:

### Create - Criar novo contato
```
http://localhost:3030/create
Método: POST

```
corpo da requisição
```
{
	"nome": "Test",
	"email": "test@test.com",
	"telefone": "(12)2345-7890",
	"dataNascimento": "01/01/2000",
	"profissao": "dev",
	"celular": "(09)8765-4321",
	"receberWhatsapp": 1,
	"receberSms": 0,
	"receberEmail": 1
}
```

### Read - Visualizar contatos existentes
```
http://localhost:3030/getAll
Método: GET

```


### Mostrar modal com formulário de edição de contato
```
http://localhost:3030/showUpdateForm?contact=[id_do_contato]
Método: GET

```

### Update - Atualizar contato
```
http://localhost:3030/update?contact=[id_do_contato]
Método: POST

```
corpo da requisição
```
{
	"nome": "segundoTeste",
	"email": "test2@test.com",
	"telefone": "(12)91027990",
	"dataNascimento": "01/01/2000",
	"profissao": "dev",
	"celular": "(12)12121212",
	"receberWhatsapp": 1,
	"receberSms": 1,
	"receberEmail": 1
}
```

### Delete - Apagar contato
```
http://localhost:3030/delete?contact=[id_do_contato]
Método: GET

```


