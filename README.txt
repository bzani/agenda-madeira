====================================================================================================

    MANUAL - APLICATIVO AGENDA TELEFONICA MADEIRA

====================================================================================================

    %%%%%%%%%%%%%%%%%
    Sobre a aplicação
    %%%%%%%%%%%%%%%%%
    
        A Agenda Telefonica Madeira possui funcionalidades de cadastro e manutenção de contatos
        em uma interface amigável e responsiva, em formato de agenda de contatos, além disso, conta 
        com recursos gráficos para aprimorar a análise e gestão de sua base de dados.

        
    %%%%%%%%%%%%%%%%%
    Como Instalar
    %%%%%%%%%%%%%%%%%
    
        Local:
            1. Instalar o XAMPP, para preparar o ambiente (servidor e base de dados)
            2. Iniciar serviços do Apache e MySQL no XAMPP
               obs: se necessário, configurar porta para acesso no navegador ('httpd.conf' do Apache)
            3. Executar no console mySQL (ou phpMyAdmin) o script 'create-db.sql' da pasta \scripts\
            4. Acessar o aplicativo pelo localhost no navegador:
                http://localhost/agenda-madeira
        Online:
            1. Executar o script 'create-db.sql' da pasta \scripts\ no mySQL de seu servidor
            2. Upload da pasta da aplicação \agenda-madeira\ para o diretório raiz do servidor
            3. Abrir no navegador a URL da aplicação
                http://<url>/agenda-madeira
        
        
    %%%%%%%%%%%%%%%%%
    Como Utilizar
    %%%%%%%%%%%%%%%%%
    
        A interface da aplicação Agenda Telefonica Madeira é intuitiva e de fácil utilização.
        Na página inicial, é possível navegar pelos Menus da Agenda.
        Na página de Contatos, temos uma lista de contatos cadastrados e ações de manutenção 
        (edição e exclusão de cadastro).
        Na página Dashboard, contamos com recursos de amparo a análise e gestão de dados (gráficos)
        Na página Sobre, temos uma breve informação sobre o aplicativo.
    
    
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    Especificação Funcional
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    
        Implemente uma agenda telefônica que atenda aos seguintes requisitos técnicos e de negócios:
        - Use PHP puro, jQuery e Bootstrap
        - Use a arquitetura MVC e Rest
        - O site deve ser responsivo
        - A agenda deve possuir telas de cadastro e CRUD de contatos
        - Os campos devem possuir mascara de validação de dados no front e back
        - Crie uma área administrativa com dashboard e gráficos que considerar pertinentes 
          a um administrador do negócio.
        - Considere os seguintes dados: Nome, telefone e e-mail.

        
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    Ferramentas de Desenvolvimento
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    
        - Ambiente XAMPP (Apache, mySQL, PHP7)
        - Editor de texto Sublime Text 3
        - Framework front-end Bootstrap e jQuery
        - Arquitetura MVC
        
        
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    Detalhes do Projeto
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    
        - Estrutura:
            agenda-madeira    => pasta raiz da aplicacao
              \controllers    => implementação das classes Controller do projeto
              \img            => recursos graficos utilizados no projeto
              \js             => scripts proprios utilizados no projeto e plugins
              \models         => implementação das classes Model do projeto
              \vendor         => pasta contendo fontes de terceiros (ex.Bootstrap)
              \views          => implementação das classes View do projeto
              about.php       => pagina contendo informacoes basicas da aplicacao
              global.php      => arquivo contendo definicoes globais do projeto
              index.php       => pagina inicial
        
        - Detalhes da Implementação:
            Foi utilizado conceito de arquitetura MVC para separação das camadas do projeto, para
            atender a boas práticas e otimizar estruturação e qualidade de código. 
            A camada de controle faz a gestão da navegação das páginas, de conteúdo e intermedia o 
            acesso à base de dados, que por sua vez tem sua implementação extendida pelas classes da 
            camada de Modelo.
            Na camada Model, além da gestão de acesso à base, são compreendidos também recursos de 
            validação e persistência dos dados, uma vez já tratados inicialmente no front-end. 
            A camada View compreende as telas (corpo) da aplicação, o cabeçalho e rodapé das página
            (conteúdo fixo e declaração de recursos css/js) e também a classe responsável por renderizar
            e parametrizar os dados de operação da aplicação.
            A página index.php é encarregada de acionar o dispatcher e iniciar a execução da aplicação.
            O arquivo global.php possui todas as definições globais do projeto e padrões, centralizando
            conteúdo textual, dados de configuração do projeto e demais informações.

    
====================================================================================================

    Mais informações, dúvidas ou sugestões, favor entrar em contato:
        Email: ubzani@gmail.com
        Phone: 41 99958-2209
        
    OBRIGADO!!!
    
====================================================================================================
    
