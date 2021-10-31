# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Efetuar login;
 - [CDU 02](#CDU-02): Cadastrar aluno;
 - [CDU 03](#CDU-03): Fazer posts;
 - [CDU 04](#CDU-04): Curtir posts;
 - [CDU 05](#CDU-05): Comentar posts;
 - [CDU 06](#CDU-06): Salvar posts;



## Lista dos Atores

 - Usuários; 
 - Administradores;

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01

Quisque id neque a erat imperdiet dictum et ut mauris.

**Fluxo Principal**

1.O sistma exibirá um formulário com os campos login e senha.
2.O usuário deve inserir o login e a senha  e clicar no botão de "ENTRA". 
3.O sistema valida login e senha do usuário.
4.O sistema encaminha o usuário para a página inicial.

**Fluxo Alternativo A**

1.O sistma exibirá um formulário com os campos login e senha.
2.O usuário deve inserir o login e a senha  e clicar no botão de "ENTRA".
3.O sistema informa que a senha está incorreta.
4. O usuário corrigi a senha e clica no botão "ETRA".
5.O sistema encaminha o usuário para a página inicil.


**Fluxo Alternativo B**

1.O sistma exibirá um formulário com os campos login e senha.
2.O usuário deve inserir o login e a senha  e clicar no botão  "ENTRA".
3.O sistema informa que o login  está incorreto.
4.O usuário corrigi o login e clica no botão "ENTRA". 
5.O sistema encaminha o usuário para a página inicial.

**Fluxo Alternativo c**
1.O sistema exibirá um formulário com os campos login e senha.
2.O usuário deve insere login e sua senha e clica no botão “ENTRA”.
3.O sistema informa que o login e a senha não coincidem.
4.O usuário corrige as informações de login e senha e clica no botão “ENTRA”.
5.O sistema encaminha o usuário para sua tela inicial.




### CDU 02

Morbi fringilla dolor at mattis vestibulum.

**Fluxo Principal**

1.O sistema apresentara um formulário com os campos do usuário a ser inserido
2.O usuário insere nome, nickname e senha.
3.O usuário clica no botão “Inserir”.
4.O sistema armazena o usuário e informa que a operação foi realizada.
5.O sistema retorna ao início do caso de uso para inclusão de novo usuário. 



**Fluxo Alternativo A**
1.O sistema apresentara um formulário com os campos do usuário a ser inserido
2.O usuário insere nome,  nickname e senha.
3.O usuário clica no botão “Inserir”.
4.O sistema informa que o endereço de email está incorreto.
5.O usuário corrige o nickname   e clica no botão “ENTRA”.
6.O sistema armazena o usuário e informa que a operação foi realizada.
7.O sistema retorna ao início do caso de uso para inclusão de novo usuário. 

**Fluxo alternativo B**
1.O sistema apresentara um formulário com os campos do usuário a ser inserido
2.O usuário insere nome, nickname e senha.
3.O usuário clica no botão “Inserir”.
4.O sistema informa que já existe um usuário com o nickname fornecido e retorna
ao Fluxo Principal.

**Fluxo alternativo C**
1.O sistema apresenta uma solicitação de criação de conta com as respectivas
informações
2. O usuário clica no botão “Criar esta conta”
3. O sistema exibe um formulário com os campos do uruário a ser inserido,
com nome, nickname e senha preenchido
4.O usuário clica no botão “Inserir”
5.O sistema armazena o aluno e informa ao usuário que a operação foi realizada 




### CDU 03

Fazer posts.

**Fluxo Principal**
1.O sistema mostra um poster ao usuário.
2.O usuário clica no botão de compartilhar.
3.O poster é compartilhado na rede i-luno.
4.O sistema encaminha o de volta a usuário para a timeline. 

**Fluxo alternativo A**
1.O sistema apresenta um poster ao usuário.
2.O usuário clica no botão errado.
3.O sistema avisa ao usuário que opção estava errada.
4.O usuário clica no botão correto 
5.O pots é compartilhado na rede i-luno.
6.O sistema encaminha o de volta a usuário para a timeline.

**Fluxo alternativo B**
1.O sistema apresenta uma timeline para ao usuário.
2.O usuário escolhe compartilhar um posts clica no botão de compartilhar. 
3.O sistema avisa ao usuário que ouve uma erro com a conexão.
4.O usuário se reconcta a uma rede de internet.
5.O usuário clica no botão de compartilhar.
6.O poster é compartilhado na rede i-luno.
7.O sistema encaminha o de volta a usuário para a timeline.

**Fluxo alternativo C**
1.O sistema apresenta uma timeline para ao usuário.
2.O usuário escolhe compartilhar um posts clica no botão de compartilhar.
3.O usuário clica no botão de compartilhar.
4.O usuário deseja excluir a publicação.
5.O usuário clica no botão excluir.
6.O compartilhamento é excluido da rede .
7.O sistema encaminha o de volta a usuário para a timeline.

### CDU 04

Curtir postagens
Fluxo Principal
1. a rede i-luno apresenta diversos postes para seus usuários
2. O usuário escolhe o poster que mais lhe interessa 
3. clica no botão curti 
4. após o click no botão curtir a publicação esta curtida 



**Fluxo alternativo A**
1.A rede i-luno apresenta diversos postes para seus usuários.
2.O usuário curte uma publicaçao sem querer.
3.O usuário pode volta na publicaçao clicar no botão de curti.
4.E deslike daquele publicaçao ocorrera.
5.O sistema encaminha o de volta a usuário para a timeline.


### CDU 05

Postagem de comentários

Fluxo Principal
1. Na parte inferios de cada postagem estará o botão de fazer comentários 
2. O usuário após clicar no botão insere um comentário 
3. O usuário clica em publicar e o sistema avisa a validação do comentário  
4. O sistema encaminha o de volta a usuário para a timeline 



**Fluxo alternativo A**
1. Na parte inferios de cada postagem estará o botão de fazer comentários 
2. O usuário após clicar no botão insere um comentário 
3. O usuário clica em publicar e o do comentário é publicado
4. O usuário clica em editar comentario
5. O  comentário é editado e publicado novamente 
6. O sistema encaminha o de volta a usuário para a timeline 




**Fluxo alternativo B**
1. Na parte inferios de cada postagem estará o botão de fazer comentários 
2. O usuário após clicar no botão insere um comentário 
3. O usuário clica em publicar e o do comentário é publicado
4. O usuário clica em excluido  comentario
5. O  comentário é ecluido 
6. O sistema encaminha o de volta a usuário para a timeline 




**Fluxo alternativo C**
1. Na parte inferios de cada postagem estará o botão de fazer comentários 
2. O usuário após clicar no botão insere um comentário 
3. O usuário clica em publicar e o sistema avisa que ouve uma problema na conecçao
4. O usuário se reconecta a rede 
5. após clicar no botão e insere um comentário 
5. O  comentário é ecluido 
6. O sistema encaminha o de volta a usuário para a timeline 

### CDU 06


 Salvar posts 

Fluxo Principal
1. Na parte inferios de cada postagem estará o botão de salvar posts
2. Após o usuário clicar no botão salvar  
3. O poster é salvo   
4. O sistema encaminha o de volta a usuário para a timeline 

**Fluxo alternativo A**
1. Na parte inferios de cada postagem estará o botão de salvar posts
2. Após o usuário clicar no botão salvar 
3  Ocorre uma problema com a coneçao ao salvar o posts
4. O usuario se reconecta a rede 
5. O usuário clica no botão de salvar  
6. O poster é salvo   
7. O sistema encaminha o de volta a usuário para a timeline 












