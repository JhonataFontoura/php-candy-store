# 🍬 Candy Store - PHP Project
## 🎬 Demonstração

![Demo](/img/apresentacao_1.gif)

Projeto desenvolvido com o objetivo de praticar conceitos fundamentais de PHP, organização de código e estruturação de páginas dinâmicas com HTML e CSS.

---

## 🚀 Sobre o Projeto

O **PHP Candy Store** é uma aplicação simples que simula uma loja de doces, exibindo informações como:

- Produtos
- Informações nutricionais
- Preços e promoções
- Ofertas do dia
- Produtos mais vendidos

O foco principal do projeto é aplicar boas práticas de desenvolvimento com PHP puro (sem frameworks).

---

## 🧠 Principais Aprendizados

Durante o desenvolvimento, foram trabalhados:

- Separação de lógica e apresentação
- Manipulação de arrays associativos
- Uso de loops (`foreach`)
- Condicionais no PHP
- Estruturação de dados para exibição
- Organização de arquivos (includes e requires)

---

## 🛠️ Melhorias Implementadas

### 📌 1. Separação de Lógica e Visualização
- Criação do arquivo `data.php` para concentrar toda a lógica
- Uso de `require` para importar dados
- View (`index.php`) focada apenas na exibição

---

### 📌 2. Refatoração de Texto Dinâmico
- Implementação de `quantityText` para evitar lógica no HTML
- Correção de pluralização (Quantity / Quantities)

---

### 📌 3. Transformação de Dados em Tabelas
Substituição de conteúdos em `<p>` por tabelas:

- ✔ Pricing
- ✔ Best Sellers
- ✔ Offers
- ✔ Nutrition Information

➡️ Melhorando:
- Legibilidade
- Organização
- Padrão visual

---

### 📌 4. Estruturação de Layout com Flexbox
- Aplicação de `display: flex` no `body`
- Uso de `main { flex: 1 }`
- Footer ajustado para não sobrepor conteúdo

---

### 📌 5. Correção de Problemas de CSS
- Remoção de CSS duplicado
- Correção do uso de `position: fixed`
- Ajuste de contraste no header e footer
- Melhoria na leitura e usabilidade

---

### 📌 6. Organização de Componentes
- Separação de:
  - `header.php`
  - `footer.php`
- Reutilização de layout

---

### 📌 7. Padronização de Idioma
- Conversão de todo o sistema para inglês:
  - Labels
  - Tabelas
  - Textos

---

### 📌 8. Debug e Ambiente
- Identificação de problemas de cache entre navegadores (Opera vs Chrome)
- Uso de versionamento em CSS (`?v=1`) para evitar cache

---

## 📊 Estrutura do Projeto

📁 project
┣ 📁 css
┃ ┗ styles.css
┣ 📁 includes
┃ ┣ header.php
┃ ┗ footer.php
┣ 📁 require
┃ ┗ data.php
┣ index.php


---

## 🎯 Objetivo

Este projeto tem como objetivo reforçar conceitos fundamentais de desenvolvimento web com PHP, preparando a base para projetos mais complexos no futuro.

---

## 💡 Próximos Passos

## 📚 Aprendizados em PHP

- [ ] Funções Predefinidas
- [ ] Datas e horas
- [ ] Tratamento de Erros
- [ ] Manipulação de Arquivos
- [ ] Cookies e Sessões
- [ ] Trabalhando com dados (GET/POST)

---

## 🚀 Evolução do Projeto

- [ ] Adicionar responsividade (mobile)
- [ ] Criar páginas adicionais (produtos, detalhes)
- [ ] Implementar formulários
- [ ] Integração com banco de dados
- [ ] Criar sistema de login
---

## 👨‍💻 Autor

**Jhonata Fontoura**

---

## 📌 Observação

Este projeto foi desenvolvido para fins de estudo e prática.
