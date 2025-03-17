Consulta Signos

Este projeto é uma aplicação web interativa que identifica o signo do zodíaco de um usuário com base na data de nascimento fornecida. É desenvolvido utilizando PHP para processamento, XML para armazenamento de dados e Bootstrap para uma interface elegante e responsiva.

Funcionalidades
- Formulário para entrada da data de nascimento do usuário.
- Verificação do signo correspondente com base em intervalos definidos em um arquivo XML.
- Exibição estilizada do signo e sua descrição.

Tecnologias Utilizadas
- **PHP:** Para processar a lógica e manipular os dados.
- **XML:** Para armazenar as informações dos signos, como datas e descrições.
- **HTML & Bootstrap:** Para criar uma interface moderna e responsiva.
- **CSS Personalizado:** Para estilizar a aplicação.
- **XAMPP:** Para execução local do servidor web (Apache) e suporte ao PHP.

Estrutura do Projeto
- `index.php`: Página inicial com o formulário de entrada.
- `show_zodiac_sign.php`: Processa os dados do formulário, consulta os intervalos no XML e exibe o resultado.
- `signos.xml`: Contém informações sobre os signos e os intervalos de datas.
- `style.css`: Estilização personalizada para melhorar a apresentação.
- `header.php`: Cabeçalho compartilhado entre os arquivos para centralizar estilos e scripts.

Como Executar o Projeto
1. Instale o XAMPP e inicie o servidor Apache.
2. Coloque os arquivos do projeto na pasta `htdocs` dentro do diretório do XAMPP.
3. No navegador, acesse `http://localhost/Projects/layouts/`.
4. Insira a data de nascimento e veja o signo correspondente!
