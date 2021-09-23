DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_user` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome_de_usuario` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_de_nascimento` int(8) NOT NULL,
  `CPF` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (id_user),
  UNIQUE KEY (email)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE DATABASE IF NOT EXISTS `BancoDeDados` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `DBcadUsuario`;