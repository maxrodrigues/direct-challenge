# Instruções para instalação 

Clone o Repositório
```sh
git clone https://github.com/maxrodrigues/direct-challenge
```

Acesse a pasta do projeto
```sh
cd direct-challenge/
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec app php spark migrate
```



Acessar o projeto
[http://localhost:8000](http://localhost:8000)
