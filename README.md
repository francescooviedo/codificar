
# Desafio Técnico PHP - Cidadão de Olho


Projeto criado em PHP Laravel Sail e Mysql com o objetivo de colher dados de uma API, armazena los em um banco de dados e mostra los de forma ordenada através de duas rotas.


## Instalação

### Faça o clone do projeto:
    git clone git@github.com:francescooviedo/codificar.git

### Abra a pasta do projeto:
    cd codificar

    Dentro da pasta remova o ".example" do arquivo ".env"
### No terminal rodar os seguintes comandos:

   - composer update && npm install
   - ./vendor/bin/sail up
   - ./vendor/bin/sail artisan migrate
   - ./vendor/bin/sail artisan db:seed
  

    
## Comandos Artisan




    Para coletar os dados necessários foram utilizados trés comandos de console cada
    um responsável por coletar dados de endpoints diferentes.

#### Comando app:import-deputies:
    Comando responsável por buscar e inserir no banco de dados os ids e os nomes
    de todos os  deputados [] de 2019.

#### Comando app:import-spendings:
    Comando responsável por buscar e inserir no banco de dados todas as 
    verbas indenizatórias de todos os deputados encontrados com o comando acima por mês
#### Comando app:import-media:
    Comando responsável por buscar e inserir no banco de dados as redes socias dos
    deputados atuais

#### Migrations e Seeds:
    Por uma questão de comodidade todos os dados da api estao também nos arquivos de
    seed.
## Documentação da API

#### Retorna todas as redes sociais em ordem decrescente de uso

```http
  GET /redes
```

#### Retorna os 5 deputados que mais pediram verba indenizatória por mês em 2019

```http
  GET /verbas/{month}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `month`      | `number` | **Obrigatório**. O "month" (entre 1 e 12) |

#### Thunder Client:
    Os endpoints da api foram testados com o thunder Client, extensão do Visual Studio

