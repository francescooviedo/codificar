
# Desafio Técnico PHP - Cidadão de Olho


Projeto criado em PHP Laravel Sail e Mysql com o objetivo de colher dados de uma API, armazena los em um banco de dados e mostra los de forma ordenada através de duas rotas.


## Instalação

Instale my-project com npm

```bash
  ./vendor/bin/sail up -d
  
```
    
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
