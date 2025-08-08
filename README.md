# Direct Challenge

Desenvolva um módulo simples para criação, edição e gestão de laudos médicos:

#### Para instalar o projeto, basta seguir as instruções que estão [aqui](https://github.com/maxrodrigues/direct-challenge/blob/main/Instructions.md)

## 📝 Formulário de Laudo
#### Editor de texto (ex: TinyMCE) com suporte a:
- Modelos de frases e laudos reutilizáveis;
- Inserção de imagens no corpo do laudo;
- Reconhecimento de voz (transcrevendo áudio via microfone do navegador Chrome);

#### Campos obrigatórios:
- Nome do paciente
- Data de nascimento
- Nome do exame
- Médico
- Data e hora do laudo 

#### Botões:
- Salvar Rascunho
- Visualizar Preview (PDF)
- Liberar Laudo (PDF)


### 📄 Liberação do Laudo em PDF
- Após a liberação, o laudo não poderá mais ser editado;
- O cabeçalho deve conter as informações do paciente, do exame e da data. O rodapé deve conter as informações do médico e a assinatura;
- Exibir o PDF na tela com opção de download.

### 📋 Tela de Listagem/Gestão de Laudos
- Listar todos os laudos com filtros;
- Ações de CRUD;
- Status dos laudos;


## ⚠️ Objetivos adicionais
- Usar alguma integração com IA
- Uso assíncrono das funcionalidades
- Uso de Docker
- Testes
- Uso de Design Patterns
- Documentação
- Manutenibilidade do Código
- Tratamento de erros
- Cuidado com itens de segurança
- Desacoplar componentes (outras camadas, service, repository)
- PSRs
- Aplicação e conhecimentos de SOLID
- Apresentação de código limpo e organizado
