# LogiFácil - Gerenciador Logístico

Projeto prático da disciplina Fundamentos de Programação para Internet.

## Funcionalidades
- Cadastro, edição e exclusão de produtos.
- Cadastro, edição e exclusão de endereços.
- Cadastro, edição e exclusão de transportadores.
- Geração de fretes relacionando origem, destino, transportador e vários produtos (1:N).
- Inclusão dinâmica de produtos no frete com JavaScript.
- Relatório de fretes por dia com download em CSV.
- Interface responsiva com Bootstrap.
- Persistência local em arquivos JSON para facilitar a execução no XAMPP.

## Tecnologias
PHP, HTML5, CSS3, JavaScript, Bootstrap 5, Git/GitHub e XAMPP.

## Como executar no XAMPP
1. Instale e abra o XAMPP.
2. Inicie o módulo Apache.
3. Copie a pasta `gerenciador_logistico` para `C:\xampp\htdocs\`.
4. No navegador, acesse `http://localhost/gerenciador_logistico/`.
5. Cadastre primeiro produtos, dois endereços e um transportador; depois gere um frete.

## Estrutura
- `index.php`: painel inicial.
- `products.php`: produtos.
- `addresses.php`: endereços.
- `carriers.php`: transportadores.
- `freights.php`: geração e listagem de fretes.
- `report.php`: relatório por data e exportação CSV.
- `data/`: dados persistidos em JSON.
- `assets/`: estilos.

## Observação
O Bootstrap é carregado por CDN, portanto é recomendável manter conexão com a internet durante a demonstração para preservar o visual completo.
