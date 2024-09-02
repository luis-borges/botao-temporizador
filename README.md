# Custom Button Redirect - Botão Temporizador

**Custom Button Redirect** é um módulo personalizado para o tema Divi no WordPress, que permite a criação de botões personalizáveis com temporizador de redirecionamento. O botão pode ser configurado para incluir texto, URL, cor de fundo, imagem e um tempo específico de redirecionamento.

## Recursos

- **Texto Personalizável**: Adicione o texto que deseja exibir no botão.
- **Redirecionamento Temporizado**: Defina um tempo em segundos após o qual o usuário será redirecionado automaticamente para a URL especificada.
- **Imagem Personalizável**: Inclua uma imagem ao lado do texto do botão.
- **Cor de Fundo**: Customize a cor de fundo do botão com uma cor sólida ou gradiente.
- **Layouts Personalizáveis**: Escolha entre diferentes layouts disponíveis.

## Instalação

### 1. Download do Plugin

Clone este repositório ou baixe o arquivo ZIP.
```bash
git clone https://github.com/usuario/custom-button-redirect.git
```
### 2. Upload no WordPress
Acesse o painel do WordPress, vá até Plugins > Adicionar Novo e faça o upload do arquivo ZIP. Alternativamente, você pode fazer o upload dos arquivos do plugin para o diretório wp-content/plugins/ via FTP.

### 3. Ativação
No painel do WordPress, vá até Plugins e ative o Custom Button Redirect Estratégia.

## Como Usar
### 1. Adicionar o Módulo
No editor Divi, adicione uma nova seção ou linha e escolha o módulo Botão Temporizador Estratégia.

### 2. Configuração do Botão
Texto do Botão: Insira o texto que deseja exibir no botão.
URL do Botão: Defina a URL para onde o usuário será redirecionado.
Cor de Fundo: Escolha a cor de fundo do botão.
Imagem do Botão: Faça upload de uma imagem para exibir ao lado do texto do botão.
Tempo de Redirecionamento: Defina o tempo em segundos antes do redirecionamento.

### 3. Publicação
Configure o módulo conforme desejado e publique a página para que o botão esteja ativo.

## Estrutura do Código
Classe Principal: Custom_Button_Redirect_Module
Define o módulo, campos e funcionalidades principais.
Método init: Configura as propriedades básicas do módulo.
Método get_fields: Define os campos personalizados para o módulo.
Método render: Gera o HTML do botão com base nos parâmetros fornecidos.
Contribuição
Sinta-se à vontade para abrir um pull request ou enviar issues para melhorias ou correções.

Licença
Este projeto está licenciado sob a MIT License.
