# Ambiente PHP com Apache e MySQL usando Docker

Este repositório contém um ambiente Docker configurado para desenvolvimento PHP, utilizando Apache como servidor web e MySQL como banco de dados. Com este ambiente, você pode rapidamente configurar um ambiente de desenvolvimento local para projetos PHP.

## Pré-requisitos

Antes de começar, certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.

- Docker: [Instalação do Docker](https://docs.docker.com/get-docker/)
- Docker Compose: [Instalação do Docker Compose](https://docs.docker.com/compose/install/)

## Como usar

1. Clone este repositório em seu ambiente local:

    ```bash
    git clone https://github.com/Coimbra777/Ambiente-PHP.git
    ```

2. Navegue até o diretório clonado:

    ```bash
    cd php
    ```

3. Inicie os contêineres Docker:

    ```bash
    docker-compose up -d
    ```

Isso irá iniciar os contêineres PHP, Apache e MySQL em segundo plano.

4. Acesse seu aplicativo PHP:

    Abra seu navegador e visite [http://localhost](http://localhost) para acessar seu aplicativo PHP.

5. Acesso ao MySQL:

    - **Host**: localhost
    - **Porta**: 3306
    - **Usuário**: root
    - **Senha**: root

## Estrutura do diretório

- **php/**: Arquivos PHP do seu aplicativo.
- **docker-compose.yml**: Arquivo de configuração do Docker Compose.

## Personalização

- **Configuração do Apache**: Você pode adicionar ou modificar as configurações do Apache no arquivo `php/apache-config.conf`.
- **Extensões PHP**: Adicione as extensões PHP necessárias no arquivo `php/Dockerfile`.
- **Configuração do MySQL**: Personalize as configurações do MySQL no arquivo `docker-compose.yml`.

## Contribuindo

Sinta-se à vontade para contribuir com melhorias ou correções para este ambiente Docker. Basta abrir uma issue ou enviar um pull request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

