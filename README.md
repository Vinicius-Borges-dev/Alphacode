pasta /base contém o modelo SQL e as bases para o teste

## Para testes rode o comando PHP para iniciar o projeto na máquina local

```
php -S localhost:3030
```

## Testes de requisições
para testes de requisições http via postman/insomnia, utilize os seguintes exemplos.

### Create
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

### Read
```
http://localhost:3030/getContacts
Método: GET

```


### Update
```
http://localhost:3030/update
Método: POST

```
corpo da requisição
```
{
	"id": 1,
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

### Delete
```
http://localhost:3030/delete
Método: POST

```
corpo da requisição
```
"id": 1
```
