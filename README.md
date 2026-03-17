🍬 Candy Store - PHP Project (Atualizações)

Este projeto foi aprimorado para organização de código, boas práticas e inclusão de API.

As mudanças refletem melhorias na estrutura do projeto, no código PHP e na forma como os dados da loja são apresentados.

🚀 Principais Melhorias
1️⃣ Código Limpo e Organizado

Padronização de variáveis e arrays (camelCase)

Uso de echo curto (<?= ?>) no HTML

Remoção de código redundante e comentários desnecessários

Blocos de código separados por seções claras (produtos, ofertas, nutrição)

2️⃣ Estrutura de Dados Atualizada

Arrays associativos e multidimensionais reorganizados

Atualização de valores nutricionais diretamente no array

Adição de novos elementos (ex.: fiber)

Arrays indexados (bestSellers) percorridos com foreach

3️⃣ API em PHP

Nova API (api.php) que retorna os dados da loja em JSON

Inclui:

Nome da loja (store)

Produtos mais vendidos (bestSellers)

Ofertas disponíveis (offers) com estoque

Status de disponibilidade de cada item

Exemplo de resposta JSON:
{
  "status": "success",
  "store": "Candy Store",
  "totalOffers": 3,
  "bestSellers": [
    "Chocolate",
    "Mints",
    "Fudge",
    "Bubble gum",
    "Toffee",
    "Jelly beans"
  ],
  "offers": [
    { "name": "Ana Maria", "flavor": "strawberry", "stock": 110 },
    { "name": "Ana Maria", "flavor": "chocolate",  "stock": 70 },
    { "name": "Fudge",     "flavor": "with banana","stock": 80 }
  ]
}
4️⃣ Estrutura de Projeto Organizada
Estudo do Livro/
 ├── index.php        # Página principal
 ├── api.php          # API que retorna dados em JSON
 ├── data.php         # Dados e variáveis da loja
 ├── css/
 │    └── styles.css  # Arquivo de estilização
 └── README.md
5️⃣ Boas Práticas Aplicadas

Código modular e legível

Preparado para futuras funções e melhorias

Padronização de nomes e tipagem de dados

Uso de JSON_PRETTY_PRINT e JSON_UNESCAPED_UNICODE na API

Tratamento básico de erros (ex.: se nenhuma oferta estiver disponível)

👨‍💻 Autor

Jhonata Nunes
Estudante de Ciência da Computação

📌 Objetivo das Atualizações

Tornar o código mais limpo e organizado

Incluir API funcional para consumo de dados

Aplicar boas práticas de desenvolvimento

Facilitar futuras evoluções do projeto