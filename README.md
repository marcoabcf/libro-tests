# Libro Tests

Este repositório contém dois projetos principais: **LibroFilmes** e **LibroLearn**. Ambos são sistemas distintos, mas relacionados, que compartilham o mesmo repositório.

## LibroFilmes

**LibroFilmes** é uma aplicação desenvolvida para gerenciar um catálogo de filmes populares. Utiliza o framework **Angular 18** e **@angular/material** para a criação de uma interface moderna e responsiva.

### Funcionalidades:
- **Listagem de filmes**: Exibe uma lista de filmes populares com o título e capa.
- **Detalhamento de filme**: Permite visualizar informações detalhadas sobre um filme específico, como descrição e dados técnicos.
- **Responsividade**: O design foi otimizado para uma boa experiência em dispositivos móveis.
- **Integração com a API TMDb**: Utiliza a API The Movie Database para obter informações atualizadas sobre filmes.

---

## LibroLearn

**LibroLearn** é uma plataforma de ensino online. O objetivo do sistema é permitir o cadastro e gestão de alunos, cursos e matrículas. A aplicação oferece um painel administrativo onde é possível gerenciar os dados de cursos, alunos e matrículas de forma simples e intuitiva.

### Funcionalidades:
- **CRUD de Cursos**: Permite criar, editar, listar e remover cursos.
- **CRUD de Alunos**: Possibilita o cadastro, edição e remoção de alunos.
- **CRUD de Matrículas**: Gerencia a matrícula de alunos nos cursos oferecidos.
- **Consultas Funcionais**: Permite realizar buscas de alunos por nome e e-mail, além de gerar relatórios de alunos agrupados por faixa etária, separados por curso e sexo.
- **API REST**: A aplicação é construída como uma API REST utilizando o framework **Laravel 11**.

---

## Observações

- O **LibroFilmes** utiliza Angular e pode ser executado em um servidor local, com o uso de **Angular CLI**.
- O **LibroLearn** é uma API RESTful desenvolvida com **Laravel 11** e necessita de um banco de dados PostgreSQL para ser executada.

---

Esse repositório combina esses dois projetos para facilitar o gerenciamento e implementação de funcionalidades para ambos os sistemas. Cada um tem seu próprio conjunto de tecnologias e requisitos de ambiente.

