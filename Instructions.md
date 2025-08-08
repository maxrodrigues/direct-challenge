# Instruções para instalação 

Clone o Repositório
```sh
git clone https://github.com/maxrodrigues/api_liberfly
```

Acesse a pasta do projeto
```sh
cd api_liberfly/
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec app bash
```

Instalar as dependências do projeto
```sh
composer install
```

Acessar o projeto
[http://localhost:8000](http://localhost:8000)
