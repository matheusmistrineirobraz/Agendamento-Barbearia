# Agendamento – Barbearia
## Problemas a serem resolvidos

- Visibilidade e gerenciamento de clientes;
- Gerenciamento de horários disponíveis;
- Gerenciamento de funcionários;
- Gerenciamento de pagamentos;
- Gerenciamento de serviços;
- Controle do histórico de acessos de clientes e funcionários;
- Gerenciamento de planos de cortes.

## Usuários do Sistema

- Administrador;
- Cliente;
- Funcionário;
- Método de Pagamento.

## RF – Requisitos Funcionais

- RF01 – Cadastro de Clientes: O sistema deve permitir o cadastro de novos clientes, armazenando as informações necessárias para sua identificação e utilização dos serviços.

- RF02 – Exclusão de Clientes: O sistema deve permitir a exclusão de clientes cadastrados, respeitando as permissões de acesso de cada usuário.

- RF03 – Edição de Clientes: O sistema deve permitir a alteração dos dados cadastrais dos clientes.

- RF04 – Consulta de Clientes: O sistema deve permitir a consulta dos clientes cadastrados e suas respectivas informações.

- RF05 – Cadastro de Funcionários: O sistema deve permitir o cadastro de funcionários, incluindo suas respectivas funções.

- RF06 – Exclusão de Funcionários: O sistema deve permitir a exclusão de funcionários cadastrados, respeitando as permissões do administrador.

- RF07 – Edição de Funcionários: O sistema deve permitir a alteração dos dados dos funcionários cadastrados.

- RF08 – Consulta de Funcionários: O sistema deve permitir a consulta dos funcionários cadastrados e suas respectivas informações.

- RF09 – Cadastro de Horários: O sistema deve permitir o cadastro dos horários disponíveis para agendamento.

- RF10 – Edição de Horários: O sistema deve permitir a alteração dos horários cadastrados.

- RF11 – Exclusão de Horários: O sistema deve permitir a exclusão de horários cadastrados que não estejam mais disponíveis.

- RF12 – Consulta de Horários: O sistema deve permitir a consulta dos horários disponíveis para realização dos serviços.

- RF13 – Cadastro de Serviços: O sistema deve permitir o cadastro dos serviços oferecidos pela barbearia, incluindo suas respectivas informações.

- RF14 – Edição de Serviços: O sistema deve permitir a alteração das informações dos serviços cadastrados.

- RF15 – Exclusão de Serviços: O sistema deve permitir a exclusão de serviços que não sejam mais oferecidos pela barbearia.

- RF16 – Consulta de Serviços: O sistema deve permitir que os usuários consultem os serviços disponíveis.

- RF17 – Agendamento de Serviços: O sistema deve permitir que clientes realizem agendamentos de serviços de acordo com os horários disponíveis.

- RF18 – Gerenciamento de Agendamentos: O sistema deve permitir a consulta, alteração e cancelamento de agendamentos, de acordo com as permissões de cada usuário.

- RF19 – Cadastro de Planos: O sistema deve permitir o cadastro dos planos de cortes oferecidos pela barbearia.

- RF20 – Edição de Planos: O sistema deve permitir a alteração das informações dos planos cadastrados.

- RF21 – Exclusão de Planos: O sistema deve permitir a exclusão de planos que não estejam mais disponíveis.

- RF22 – Consulta de Planos: O sistema deve permitir a consulta dos planos de cortes disponíveis.

- RF23 – Gerenciamento de Pagamentos: O sistema deve permitir o registro e gerenciamento dos pagamentos relacionados aos serviços e planos contratados.

- RF24 – Métodos de Pagamento: O sistema deve permitir o cadastro e a utilização dos métodos de pagamento disponíveis.

- RF25 – Histórico de Acessos: O sistema deve registrar o histórico de acessos realizados por clientes, funcionários e 
administradores.

## RNF – Requisitos Não Funcionais
- RNF01 – Segurança: O sistema deve exigir autenticação para acesso às funcionalidades restritas e impedir que usuários acessem informações que não possuem permissão para visualizar.

- RNF02 – Controle de Acesso: O sistema deve possuir diferentes níveis de acesso para Administrador, Cliente e Funcionário, permitindo que cada perfil tenha acesso somente às funcionalidades correspondentes às suas permissões.

- RNF03 – Proteção de Dados: Os dados pessoais dos clientes, funcionários, pagamentos e históricos devem ser armazenados de forma segura, evitando acesso, alteração ou exclusão não autorizada.

- RNF04 – Segurança das Senhas: As senhas dos usuários devem ser armazenadas utilizando métodos seguros de hash, não podendo ser armazenadas em texto puro.

- RNF05 – Desempenho: As operações principais do sistema, como cadastro, consulta, edição e agendamento, devem apresentar resposta em tempo adequado, preferencialmente em até 3 segundos em condições normais de utilização.

- RNF06 – Disponibilidade: O sistema deve permanecer disponível durante o horário de funcionamento da empresa, mantendo o mínimo possível de interrupções.

- RNF07 – Responsividade: O sistema deve funcionar adequadamente em computadores, tablets e smartphones, adaptando sua interface aos diferentes tamanhos de tela.

- RNF08 – Compatibilidade: O sistema deve funcionar adequadamente nos principais navegadores atuais, incluindo Google Chrome, Microsoft Edge, Mozilla Firefox e Safari.

- RNF09 – Integridade dos Dados: O sistema deve garantir que informações como clientes, horários, serviços, pagamentos, planos e agendamentos sejam armazenadas de forma consistente, evitando duplicidades e informações incorretas.

- RNF10 – Backup: Os dados do sistema devem possuir cópias de segurança periódicas, possibilitando a recuperação das informações em caso de falhas ou perda de dados.
