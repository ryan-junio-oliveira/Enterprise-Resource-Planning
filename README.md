# Enterprise Resource Planning

Este repositório é dedicado ao desenvolvimento de um sistema de Planejamento de Recursos Empresariais (ERP), uma aplicação abrangente projetada para auxiliar na gestão e integração de diversos processos e funções dentro de uma organização.
Objetivo

O objetivo principal deste projeto é criar um sistema ERP escalável e modular, capaz de oferecer soluções para diversas áreas de uma empresa, como contabilidade, recursos humanos, cadeia de suprimentos, produção, vendas e muito mais. Nosso foco está na eficiência operacional, automação de processos e centralização de dados para melhorar a tomada de decisões.

**Funcionalidades Principais**

    * Módulos Integrados: Contabilidade, CRM, Gestão de Estoque, Compras, Produção, RH, entre outros.
    * Personalização: Flexibilidade para adaptação às necessidades específicas de cada empresa.
    * Interface Amigável: UX/UI intuitiva para fácil utilização por parte dos usuários.
    * Segurança: Controle de acesso e proteção de dados sensíveis.

**Licença**

Este projeto está licenciado sob a Licença "a definir"

# Estrutura de arquivos

Toda a aplicação se concentra dentro do diretorio App

App

    admin - refere-se a parte administrativa do sistema
    core - possui classes importantes que otimizam ações rotineiras
    login - refere-se a parte de login do sistema
    modules -  refere-se aos módulos do sistema
    panel - refere-se ao painel de visualização dos módulos do sistema
    routes - refere-se as rotas para acesso a (panel, admin, login, modules)
    services - refere-se aos serviços que a aplicação consome
    app.php - entry point da aplicação/carrega a classe de rotas
    home..php - landing page do sistema - rota raiz

Vendor - carrega as bibliotecas necessárias para o funcionamento do sistema
.env - Arquivo de variáveis de ambiente
.env_exemple - este vai para o github
composer.json - configurações do projeto
composer.lock - configurações do projeto
index.php - redireciona para App/app.php
readme.md - este arquivo

# Detalhes importantes

**Sistema e Subsistema**

    * Sistema: refere-se aos diretorios dentro de App
    * Subsistema: refere-se aos diretoriso dentro de App/modules

**Rotas pais e rotas filhas**

    * rotas pais: são rotas do sistema, e permitem acessar login, modules, panel, e admin
    * rotas filhas: são rotas dos subsistemas, isto é, sao rotas dentro do diretorio modules.

**O carregamento de algum arquivo deve sempre partir da raiz (/App)**

    *Exemplo: ./modules/RH/Views/Assets/imagem.png*

    Uma vez que o arquivo de rotas pai é carregado em app.php, todos os arquivos são enxergados na mesma hierarquia de pastas. 

    Caso voçê esteja dentro de um modulo, e quiser acessar um arquivo na mesma hierarquia, nao vai funcionar.

