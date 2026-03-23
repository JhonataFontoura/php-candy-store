# 🍬 Candy Store - PHP Project
## 🎬 Demonstração

![Demo](/img/apresentacao.gif)

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.x-blue?style=for-the-badge&logo=php">
  <img src="https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow?style=for-the-badge">
  <img src="https://img.shields.io/badge/Nível-Intermediário-green?style=for-the-badge">
</p>

---

## 👨‍💻 Autor

**Jhony Nunes**

---

## 📌 Sobre o Projeto

Este projeto simula uma **loja de doces** desenvolvida em **PHP puro (sem frameworks)**, com foco no aprendizado de lógica de programação e boas práticas.

O sistema permite:
- 📦 Exibir produtos
- 🧪 Mostrar informações nutricionais
- 💰 Calcular preços dinamicamente
- 🔥 Listar produtos mais vendidos
- 🛒 Validar compra com base em estoque e entrega

---

## 🧠 Estrutura do Projeto

```bash
data.php   → dados + lógica
index.php  → apresentação (view)
🔄 Fluxo da Aplicação
data.php processa todos os dados
index.php apenas exibe os dados
O usuário visualiza as informações já prontas
🧩 Lógica Implementada
✔️ Verificação de disponibilidade
$offer['is_available'] = $offer['stock'] >= $ordered;
✔️ Liberação de compra
$offer['can_buy'] = $offer['is_available'] && $deliver;
✔️ Cálculo de preço com desconto
$total = $price * $counter;
$finalPrice = $total * (1 - $discount);
💡 Conceitos Aplicados
Variáveis
Arrays indexados
Arrays associativos
Estruturas de repetição (for, foreach)
Condições lógicas
Operador ternário
Separação de responsabilidade (lógica vs apresentação)
🚀 Nível do Projeto

📊 Intermediário (em evolução)

✔️ Pontos fortes:
Separação entre lógica e apresentação
Código organizado
Uso de regras de negócio
Boa base de PHP
📈 Próximos passos:
Implementar padrão MVC
Utilizar POO (Programação Orientada a Objetos)
Integrar com banco de dados
Evoluir para Laravel
Melhoria do CSS
▶️ Como Executar
Instale o XAMPP (ou similar)
Coloque o projeto em:

C:\xampp\htdocs\

Inicie o Apache
Acesse no navegador:

http://localhost/seu-projeto

🛠️ Tecnologias Utilizadas
PHP
HTML
CSS
🎯 Objetivo

Este projeto foi desenvolvido com o objetivo de:

Praticar lógica de programação
Aprender manipulação de dados em PHP
Evoluir para padrões profissionais
🔥 Conclusão

Este projeto marca a transição de um desenvolvedor iniciante para intermediário, com foco em organização de código e boas práticas.