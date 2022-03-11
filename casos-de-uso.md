# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Efetuar login;
 - [CDU 02](#CDU-02): Cadastrar aluno;
 - [CDU 03](#CDU-03): Fazer posts;
 - [CDU 04](#CDU-04): Curtir posts;
 - [CDU 05](#CDU-05): Comentar posts;
 - [CDU 06](#CDU-06): Salvar posts;
 - [CDU 07](#CDU-07):
 - [CDU 08](#CDU-08):
 - [CDU 09](#CDU-09):
 - [CDU 10](#CDU-10):
 - [CDU 11](#CDU-11):
 - [CDU 12](#CDU-12):
 - [CDU 13](#CDU-13):
 - [CDU 14](#CDU-14):


## Lista dos Atores

 - Usuários; 
 - Administradores;

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

 
 ### CDU 01 Efetuar login  

 **Fluxo Principal**

1. O sistema exibirá um formulário com os campos login e senha.
2. O usuário deve inserir o login e a senha  e clicar no botão de "ENTRA". 
3. O sistema valida login e senha do usuário.
4. O sistema encaminha o usuário para a página inicial.

**Fluxo Alternativo A**

1. O sistema exibirá um formulário com os campos login e senha.
2. O usuário deve inserir o login e a senha e clicar no botão de "ENTRA".
3. O sistema informa que a senha está incorreta.
4. O usuário corrigir a senha e clica no botão "ENTRA".
5. O sistema encaminha o usuário para a página inicil.


**Fluxo Alternativo B**

1. O sistma exibirá um formulário com os campos login e senha.
2. O usuário deve inserir o login e a senha  e clicar no botão  "ENTRA".
3. O sistema informa que o login  está incorreto.
4. O usuário digita corretamente o login e clica no botão "ENTRA". 
5. O sistema encaminha o usuário para a página inicial.

**Fluxo Alternativo c**
1. O sistema exibirá um formulário com os campos login e senha.
2. O usuário deve insere login e sua senha e clica no botão “ENTRA”.
3. O sistema informa que o login e a senha não coincidem.
4. O usuário digita corretamente as informações de login e senha e clica no botão “ENTRA”.
5. O sistema encaminha o usuário para sua tela inicial.


### CDU 02  cadastro de usuário 

**Fluxo Principal**

1. O sistema apresentara um formulário com os campos do usuário a ser inserido
2. O usuário insere nome, nickname e senha.
3. O usuário clica no botão “Inserir”.
4. O sistema armazena o usuário e informa que a operação foi realizada.
5. O sistema retorna ao início do caso de uso para inclusão de novo usuário. 


**Fluxo Alternativo A**
1. O sistema apresentara um formulário com os campos do usuário a ser inserido.
2. O usuário insere nome,  nickname e senha.
3. O usuário clica no botão “Inserir”.
4. O sistema informa que o endereço de nickname  está incorreto.
5. O usuário digita o nickname corretamente e clica no botão “ENTRA”.
6. O sistema armazena o usuário e informa que a operação foi realizada.
7. O sistema retorna ao início do caso de uso para inclusão de novo usuário. 


**Fluxo alternativo B**
1. O sistema apresentara um formulário com os campos do usuário a ser inserido.
2. O usuário insere nome, nickname e senha.
3. O usuário clica no botão “Inserir”.
4. O sistema informa que já existe um usuário com o nickname fornecido e retorna ao Fluxo Principal.

**Fluxo alternativo C**
1. O sistema apresenta uma solicitação de criação de conta com as respectivas informações.
2. O usuário clica no botão “Criar esta conta”.
3. O sistema exibe um formulário com os campos do uruário a ser inserido com nome, nickname e senha preenchido.
4. O usuário clica no botão “Inserir”.
5. O sistema armazena o aluno e informa ao usuário que a operação foi realizada. 


### CDU 03 fazer posts 

**Fluxo Principal**
1. O sistema apresenta um poster ao usuário.
2. O usuário clica no botão de compartilhar.
3. O poster é compartilhado na rede i-luno.
4. O sistema encaminha o de volta a usuário para a timeline. 

**Fluxo alternativo A**
1. O sistema apresenta um poster ao usuário.
2. O usuário clica no botão errado.
3. O sistema avisa ao usuário que opção estava errada.
4. O usuário clica no botão correto. 
5. O pots é compartilhado na rede i-luno.
6. O sistema encaminha o de volta a usuário para a timeline.

**Fluxo alternativo B**
1. O sistema apresenta uma timeline para ao usuário.
2. O usuário escolhe compartilhar um posts clica no botão de compartilhar. 
3. O sistema avisa ao usuário que ouve uma erro com a conexão.
4. O usuário se reconcta a uma rede de internet.
5. O usuário clica no botão de compartilhar.
6. O poster é compartilhado na rede i-luno.
7. O sistema encaminha o de volta a usuário para a timeline.

**Fluxo alternativo C**
1. O sistema apresenta uma timeline para ao usuário.
2. O usuário escolhe compartilhar um posts clica no botão de compartilhar.
3. O usuário clica no botão de compartilhar.
4. O usuário deseja excluir a publicação.
5. O usuário clica no botão excluir.
6. O compartilhamento é excluído da rede .
7. O sistema encaminha o de volta a usuário para a timeline.

### CDU 04 Curtir postagens


**Fluxo Principal**
1. A rede i-luno apresenta diversos postes para seus usuários.
2. O usuário escolhe a postagem  que mais lhe interessa. 
3. Clica no botão curti.
4. Após o click no botão curtir a publicação esta curtida. 



**Fluxo alternativo A**
1. A rede i-luno apresenta diversos postes para seus usuários.
2. O usuário curte uma publicaçao sem querer.
3. O usuário pode volta na publicaçao clicar no botão de curti.
4. E o deslike naquela publicação ocorrera.
5. O sistema encaminha o de volta a usuário para a timeline.


### CDU 05 postar comentários 
 
**Fluxo Principal**
1. Na parte inferios de cada postagem estará o botão de fazer comentários. 
2. O usuário após clicar no botão insere um comentário. 
3. O usuário clica em publicar e o sistema avisa a validação do comentário.  
4. O sistema encaminha o de volta a usuário para a timeline. 


**Fluxo alternativo A**
1. Na parte inferios de cada postagem estará o botão de fazer comentários. 
2. O usuário após clicar no botão insere um comentário.
3. O usuário clica em publicar e o do comentário é publicado.
4. O usuário clica em editar comentario.
5. O comentário é editado e publicado novamente. 
6. O sistema encaminha o de volta a usuário para a timeline. 


**Fluxo alternativo B**
1. Na parte inferios de cada postagem estará o botão de fazer comentários.
2. O usuário após clicar no botão insere um comentário.
3. O usuário clica em publicar e o comentário é publicado.
4. O usuário clica em excluir  comentario.
5. O  comentário é excluído. 
6. O sistema encaminha o de volta a usuário para a timeline.


**Fluxo alternativo C**
1. Na parte inferior de cada postagem estará o botão de fazer comentários. 
2. O usuário após clicar no botão insere um comentário. 
3. O usuário clica em publicar e o sistema avisa que houve uma problema na conexão.
4. O usuário se reconecta a rede.
5. após clicar no botão e insere um comentário. 
5. O  comentário é excluído.
6. O sistema encaminha o de volta a usuário para a timeline 

### CDU 06 Salvar posts 


 **Fluxo Principal**
1. Na parte inferios de cada postagem estará o botão de salvar posts.
2. Após o usuário clicar no botão salvar.  
3. O poster é salvo . 
4. O sistema encaminha o de volta a usuário para a timeline. 

**Fluxo alternativo A**
1. Na parte inferios de cada postagem estará o botão de salvar posts.
2. Após o usuário clicar no botão salvar.
3  Ocorre uma problema com a conexão ao salvar o posts.
4. O usuario se reconecta a rede. 
5. O usuário clica no botão de salvar.  
6. O poster é salvo.   
7. O sistema encaminha o de volta a usuário para a timeline. 

### CDU 07 BUSCA DE Usuário
**Fluxo Principal**

1. O sistema vai apresenta uma barra com opção de pesquisar .
2. O usuário digita o nome de um perfil que deseja procurar. 
3. O usuário clica no botão "pesquisa".
4. O sistema vai exibir o perfil que foi pesquisado 
  
**Fluxo alternativo A 

1. O sistema vai apresenta uma barra com opção de pesquisar .
2. O usuário digita o nome de um perfil que deseja procurar. (caso o usuário não exista) 
3. O usuário clica no botão "pesquisa".
4. O sistema vai exibir a seguinte mensagem "Nenhum resultado encontrado".

### CDU 08 LISTA DE USUÁRIO



**Fluxo Principal**
1. O sistema vai apresenta um formulario com a lista de usuários.
2. O administrador escolher um perfil para exclui. 
3. O administrador clica no botão "exclui".
4. O sistema vai exibir a sequinte mensagem " tem certeza que deseja excluir  o usuário"
5. O administrador clica no botão "ok".  
6. O sistema exibirá que "o usurio foi  excluído com sucesso". 



**Fluxo Alternativo A**
1. O sistema vai apresenta um formulario com a lista de usuários.
2. O administrador escolher um perfil para exclui. 
3. O administrador clica no botão "exclui".
4. O sistema vai exibir a sequinte mensagem " Não foi possível excluir o usuário".
5. O sistema encaminhara o administrador para a pagina inicial.

### CDU 09 CONTROLE DE USUÁRIO


**Fluxo Principal**

1. A rede i-luno disponibiliza uma pagina de controle aos administradores.
2. Onde o administrador tem acesso a todo os usuários da rede.
3. Os administadores podem excluir e editar informações da rede.
4. Os administradores podem conceder privilégios de adms aos usuários.


### CDU 010 EDIÇÃO


**Fluxo Principal**

1. A rede i-luno disponibiliza uma pagina de controle aos administradores.
2. Onde o administrador tem acesso a todo os usuários da rede.
3. Um usuário deseja mudar sua username mas só o adm pode fazer isso.
4. O administrador concede privilegios de amds ao usuário.
5. O usuário edita seu username.
6. O sistema envia a seguinte mensagem" Dados atualizado com sucesso" 


**Fluxo alternativo A**

1. O sistema vai apresenta uma pagina de controle aos administradores.
2. Onde o administrador tem acesso a todo os usuários da rede.
3. Um usuário deseja exclui só o adm pode fazer isso.
4. O administrador concede privilegios de amds ao usuário.
5. O usuário exclui seu perfil.
6. O sistema envia a seguinte mensagem" Dados atualizado com sucesso" 


**Fluxo alternativo B**
1. A rede i-luno disponibiliza uma pagina de controle aos administradores.
2. Onde o administrador tem acesso a todo os usuários da rede.
3. Um usuário deseja mudar sua senha mas só o adm pode fazer isso.
4. O administrador concede privilegios de amds ao usuário.
5. O usuário edita sua senha.
6. O sistema envia a seguinte mensagem" Dados atualizado com sucesso"

### CDU 011 criação de postagem

**Fluxo Principal**
1. O sistema vai apresentar ao  usuário o botão de publicação.
2. O usuário vai clicar no botão de publicação.
3. O sistema vai apresentar uma página para o usuário criar sua publicação.
4. O usuário vai ter opção de escrever uma publicação ou postar uma foto.
5. O sistema apresentará ao Usuário o botão de publicar e a postagem do usuário estará criada.



**Fluxo Alternativo A**

1. O sistema vai apresentar ao  usuário o botão de publicação.
2. O usuário vai clicar no botão de publicação.
3. O sistema vai apresentar uma página para o usuário criar sua publicação.
4. O usuário vai ter opção de escrever uma publicação ou postar uma foto.
5. O sistema apresentará ao usuário o botão de publicar.
6. O usuário clica no botão de publicar o sistema avisa ao usuário que ocorreu um erro ao tentar publicar a postagem. 
7. O usuário tenta fazer a publicação novamente.
6. O usuário clica no botão de publicar 
 o sistema avisa ao Usuário que "a postagem foi publicada com sucesso".


### CDU 012 edição de post

**Fluxo Principal**
1. O sistema vai apresentar ao  usuário o botão de editar.
2. O usuário vai clicar no botão de edição.
3. O sistema vai apresentar uma página para o usuário editar  sua publicação.
4. O usuário vai editar a publicação.
5. O sistema apresentará ao usuário o botão de editar.
6. O usuário clica no botão de editar
 e postagem do usuário será editada.


### CDU 013 exclusão de post

**Fluxo Principal**
1. O sistema vai apresentar ao  usuário o botão de excluir.
2. O usuário vai clicar no botão de excluir.
3. O sistema vai apresentar uma mensagem ao usuário "deseja excluir essa publicação?".
4. O usuário vai clicar no botão de excluir.
5. A publicação é excluída timeline do usuário.

### CDU 014 Timeline

**Fluxo Principal**
1. O sistema vai apresentar ao  usuário uma timeline.
2. Onde fica todas as publicações do usuário .
3. Funções de edição, exclusão e criação de postagens.
4. Na timeline os usuários podem interagir.
5. Curtindo e comentando os posts um dos outros.









