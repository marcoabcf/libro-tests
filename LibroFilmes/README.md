# LibroFilmes

LibroFilmes é uma aplicação web que apresenta um catálogo de filmes populares, permitindo visualizar detalhes de cada filme.

## Tecnologias Utilizadas
- Angular 18
- Angular Material
- TypeScript
- SCSS
- The Movie Database (TMDb) API

## Requisitos
- Node.js 18+
- Angular CLI 18+
- Conta na API do TMDb para obter uma chave de acesso

## Instalação e Execução
1. **Instale as dependências:**
   ```sh
   yarn install
   ```

3. **Inicie o servidor de desenvolvimento:**
   ```sh
   yarn start
   ```

5. **Acesse no navegador:**
   ```
   http://localhost:4200
   ```

## Estrutura do Projeto
```
/src
  ├── app
  │   ├── shared  # Services, Models ou Componentes que sejam compartilhados
  │   ├── features        # Páginas principais (Listagem e Detalhes)
  │   ├── app.component.ts  # Componente principal
  │   ├── app.routes.ts     # Configuração das rotas
  ├── enviroments
```

## Funcionalidades
- 📌 Listagem de filmes populares
- 🔍 Detalhamento de um filme
- 📱 Responsividade para dispositivos móveis
- 🎨 Interface moderna

