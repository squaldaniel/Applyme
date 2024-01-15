## Applyme :heavy_check_mark: - BETA
Aplicação desenvolvida para ajudar na busca de empregos, cadastrando recrutadores e deixando uma página publica para acesso ao seu perfil.
> [!WARNING]
> Necessita php. 8.1.26 e Node 9.6.4
> Esta é uma aplicação beta, bugs e inconsistências podem ser encontradas. Use por sua conta e risco.


### Para instalar esta aplicação siga os passos: 
```
git clone https://github.com/squaldaniel/Applyme.git
cd applyme (ou pasta que você criou)
composer install && npm install
```
Depois, rode as migrations do banco de dados com o comando:
```
php artisan migrate
```
Após rodar as migrações, não esqueça de gerar a nova chave para o projeto com o comando
```
php artisan key:generate
```

faça uma cópia do arquivo .env.example para .env e pode rodar sua aplicação com
```
php artisan serve
npm run dev
```

Para conhecer o autor, acesse: [Instagram](https://www.instagram.com/danielshoganmkt/).

Informações profissionais: [linkedin](https://www.linkedin.com/in/danielshogans/).

Funções já prontas:

* Cadastro de Recrutadores,
* Template de página de perfil

> [!TIP]
> Faça um fork deste repositório e personalise o template de acordo com seu interesse.



