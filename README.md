
# Desafio Técnico PHP - Cidadão de Olho


Projeto criado em PHP, Laravel, Sail e Mysql com o objetivo de colher dados de uma API, armazená-los em um banco de dados e mostrá-los de forma ordenada através de duas rotas.


## Instalação

### Faça o clone do projeto:

```sh
git clone git@github.com:francescooviedo/codificar.git
```

### Abra a pasta do projeto:

```sh
cd codificar
```

Dentro da pasta copie o arquivo ".env.example" para ".env":
```sh
cp .env.example .env
```

### No terminal rodar os seguintes comandos para instalar o `PHP` e `composer` caso os não tenha instalados:
```sh
sudo apt install php
sudo apt install composer
composer update && npm install
```

### Inicialize a aplicação, migre e popule o banco com os seguintes comandos:

```sh
./vendor/bin/sail up
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
```
## Comandos Artisan

Para coletar os dados necessários foram utilizados três comandos de console, cada
um responsável por coletar dados de endpoints diferentes.

#### Comando `app:import-deputies`:

 Comando responsável por buscar e inserir no banco de dados os ids e os nomes de todos os  deputados em mandato no ano de 2019.

#### Comando `app:import-spendings`:
Comando responsável por buscar e inserir no banco de dados, em cada mês, todas as verbas indenizatórias dos deputados encontrados com o comando acima.

#### Comando `app:import-media`:
Comando responsável por buscar e inserir no banco de dados as redes socias dos deputados em exercício

#### Migrations e Seeds:
Por uma questão de comodidade todos os dados da api estão replicados nos arquivos de seed e são criados no banco com o último comando da [seção de instalação](#Instalação).
## Documentação da API

#### Retorna todas as redes sociais em ordem decrescente de do número de deputados que usa a rede

```http
  GET /redes
```
Você pode usar esse comando para consultar:
```sh
curl http://localhost:8000/redes
```
Exemplo de resposta:
```bash
{
    "message":"All Social Medias (ordered from most to least used):",
    "data":[
        {"Name":"Facebook","count":74}, 
        {"Name":"Instagram","count":73},
        {"Name":"Twitter","count":44},
        {"Name":"Youtube","count":24}
        ...
    ]
}
```
#### Retorna os 5 deputados que mais pediram verba indenizatória por mês em 2019

```http
  GET /verbas/{month}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `month`      | `number` | **Obrigatório**. O "month" (entre 1 e 12) |

Você pode usar esse comando para consultar:
```sh
curl http://localhost:8000/verbas/2
```
Exemplo de resposta:
```bash
[
{"month":2,"nome":"Leandro Genaro","value":30939},
{"month":2,"nome":"F\u00e1bio Avelar","value":29032},
{"month":2,"nome":"S\u00e1vio Souza Cruz","value":29025},
...
]
```
