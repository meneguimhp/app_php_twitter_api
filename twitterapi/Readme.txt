######################################################################################
#																					 #
# O ambiente foi criado em cima do serviço BeanStalk da AWS com PHP e Mysql;		 #
#																					 #
# Para instalação do ambiente é necessário o seguinte:								 #
#							 														 #
######################################################################################

1- Criação de ambiente Beanstalk do tipo PHP;

2- Necessário a utilização de um Mysql, no caso deste projeto foi usado o RDS Mysql;

3- Definir as variáveis de conexão no Beanstalk com o Mysql criado;

	$servername_mysql
	$username_mysql
	$password_mysql
	$database_mysql


4- Definir as variáveis da conta twitter

	$consumer_key_twitter 
	$consumer_secret_twitter 
	$access_token_twitter
	$access_token_secret_twitter


5- Criação da tabela abaixo no Mysql:

	-- twitter.tweets definition
	CREATE TABLE `tweets` (
	  `cod` int(11) NOT NULL AUTO_INCREMENT,
	  `tag` varchar(100) DEFAULT NULL,
	  `tweet` varchar(300) DEFAULT NULL,
	  PRIMARY KEY (`cod`)
	) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;



6- Realizar Upload e Deploy do pacote twitter.zip


OBS.: Mais detalhes da arquitetura, e prints do projeto estão no arquivo Entrega_Case_Itau.docx

O link do Beanstalk que criei é o: http://twitter-env.eba-agzsmbmt.us-east-1.elasticbeanstalk.com/