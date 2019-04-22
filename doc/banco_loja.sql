/* Pedro Vitor S. Guimarães */
/* Mysql 5.7 */

/* criando banco de dados */
CREATE DATABASE  IF NOT EXISTS `banco_loja`; 
USE `banco_loja`;

/* excluindo tabela produtos se existir */
DROP TABLE IF EXISTS `tb_produtos`;

/* criando tabela produtos */
CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` varchar(260) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

/* inserindo dados iniciais */
INSERT INTO `tb_produtos` VALUES(null,'As Aventuras de Sherlock Holmes',9.90,'Essa luxuosa edição de bolso de As aventuras de Sherlock Holmes traz preço reduzido e 50 ilustrações originais de Sidney Paget. A versão impressa apresenta ainda capa dura e acabamento de luxo.','livro01.jpg');

INSERT INTO `tb_produtos` VALUES(null,'20 Mil Léguas Submarinas',9.90,'Obra mais famosa de Jules Verne e um clássico da literatura mundial Essa edição traz o texto integral da obra em tradução primorosa de André Telles e cerca de 30 ilustrações originais. A versão impressa apresenta ainda capa dura e acabamento de luxo.','livro02.jpg');

INSERT INTO `tb_produtos` VALUES(null,'O Corcunda de Notre Dame',9,'Um clássico do romantismo francês que vai muito além da história de um amor impossível. Na Paris do século XV, a cigana Esmeralda dança em frente à catedral de Notre Dame. Diante da sua beleza, curvam-se o poeta Pierre Gringoire, o arquidiácono Claude Frollo.','livro03.jpg');