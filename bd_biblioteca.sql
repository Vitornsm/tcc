-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Nov-2020 às 13:18
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(70) NOT NULL,
  `SENHA` varchar(70) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `IMG_ADM` varchar(100) NOT NULL,
  `NOME_ADM` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `SENHA` (`SENHA`),
  UNIQUE KEY `EMAIL` (`EMAIL`),
  UNIQUE KEY `IMG_ADM` (`IMG_ADM`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`ID`, `USUARIO`, `SENHA`, `EMAIL`, `IMG_ADM`, `NOME_ADM`) VALUES
(3, 'laurindo123', 'bcec378dc9b7b470ff2bbe527518ad37', 'laurindoguimaraestec@gmail.com', '21232f297a57a5a743894a0e4a801fc3.jpeg', 'Laurindo'),
(6, 'gustavonsm', 'cd1588101203f13f872131b33cb1a3cf', 'gustavo.nogueira1010@gmail.com', '6e11873b9d9d94a44058bef5747735ce', 'Gustavo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `TITULO` varchar(200) NOT NULL,
  `TEXTO` mediumtext NOT NULL,
  `AUTOR` varchar(200) NOT NULL,
  `IMG_NOTICIA` varchar(200) NOT NULL,
  `HORA_NOTICIA` datetime NOT NULL,
  `FONTE_IMG` varchar(200) NOT NULL,
  `NUMERO` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NUMERO`),
  UNIQUE KEY `IMG_NOTICIA` (`IMG_NOTICIA`),
  UNIQUE KEY `TITULO` (`TITULO`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`TITULO`, `TEXTO`, `AUTOR`, `IMG_NOTICIA`, `HORA_NOTICIA`, `FONTE_IMG`, `NUMERO`) VALUES
('Candidatos com Covid poderão remarcar data do Enem 2020, diz Inep', 'Os candidatos ao Exame Nacional do Ensino Médio (Enem) 2020 que tiverem o diagnóstico confirmado de Covid-19 poderão remarcar a data da prova, de acordo com o Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira (Inep).\r\nAlém disso, o Inep também prevê 50% de ocupação das salas para evitar a propagação do coronavírus, e salas especiais para os grupos de risco.\r\nO uso de máscara será obrigatório, desde o início até o fim da aplicação do exame. Caso se recuse, o candidato poderá ser eliminado. O Inep informa que irá disponibilizar álcool em gel nos locais de provas.\r\nPrevisto originalmente para novembro, o exame foi adiado devido à pandemia, e vai ocorrer em 17 e 24 de janeiro (prova impressa) e 31 de janeiro e 7 de fevereiro (prova digital).\r\nCom a aceleração do número de casos, há uma preocupação de que a pandemia não terá diminuído quando o Enem for realizado, pouco mais de duas semanas após as festas de fim de ano.', 'Criado por G1', '8e2a1ca5ccbfbadac41c40b26d80c696.jpg', '2020-11-26 20:03:17', 'Salas de aplicação do Enem serão organizadas para evitar aglomeração, diz Inep — Foto: João Paulo Barbosa', 14),
('Feira de Robótica', 'Alunos de 151 equipes do Sesi-SP disputarão a Etapa Regional da Olimpíada Brasileira de Robótica. A segunda bateria de competições será realizada dia 14 de junho, na Escola Sesi de Avaré, e terá a participação de uma equipe do Sesi de Santa Cruz do Rio Pardo.\r\nAs últimas provas da etapa serão realizadas em agosto. Então, as 60 melhores equipes de escolas públicas e particulares seguirão para a final da Etapa Estadual, em São Bernardo do Campo, no mês de setembro.', 'Serjo', 'f13c07dc3e91325101e49b3ee7dbc437.jpg', '2020-11-24 20:49:14', 'Sesi', 10),
('Redes de ensino ainda não sabem se terão permissão para aulas remotas em 2021', 'A pouco mais de um mês do fim do ano, as redes de ensino públicas e privadas, da educação básica e do ensino superior, ainda não sabem se terão permissão para as aulas remotas em 2021.\r\n\r\nO Ministério da Educação (MEC) ainda não homologou a permissão de estender o ensino on-line até dezembro de 2021, conforme havia sido aprovado por unanimidade em outubro pelo Conselho Nacional de Educação (CNE).\r\n\r\nO conselho é responsável por assessorar o MEC nas políticas educacionais do país e conta, inclusive, com membros do ministério.\r\n\r\nA resolução foi feita para regulamentar a Lei 14.040, sancionada pelo presidente Jair Bolsonaro em 18 de agosto, que desobriga as escolas de cumprirem os 200 dias letivos. O texto da lei prevê que o CNE formule as diretrizes nacionais para implementá-la.', 'Por Elida Oliveira, G1', '0a45455f39c5d2459c115e9a6b372f1f.jpg', '2020-11-28 18:18:31', 'Ano letivo em 2021: a pouco mais de um mês do fim do ano, MEC ainda não homologou a permissão de estender as aulas remotas até o fim do ano que vem. — Foto: UFJF/Divulgação', 19),
('Cursos de Informatica', 'Aprenda a explorar os diversos recursos da tecnologia e mantenha-se atualizado com o dinâmico mundo da informática. Com os cursos a distância do Senac, você aumenta suas chances no mercado de trabalho.', 'Senac', 'c15861a3340fc88a384390764ce4cbb5.jfif', '2020-11-24 11:52:24', 'Senac . SP', 9),
('UFJF abre inscrições para cursos de graduação a distância', 'A Universidade Federal de Juiz de Fora (UFJF) abriu, nesta sexta-feira (27), o período de inscrições para o Processo de Seleção Complementar dos Cursos de Graduação a Distância.\r\n\r\nSão 164 vagas disponíveis são para os cursos de Pedagogia e Computação. Os interessados têm até a próxima quarta-feira (2) para fazer a inscrição on-line.\r\n\r\nDe acordo com instituição, 90% do total de vagas disponíveis são destinadas aos candidatos que usarem a pontuação do Exame Nacional do Ensino Médio (Enem), considerando as cinco das edições mais recentes do exame.\r\n\r\nO resto das vagas é destinado àqueles que não têm formação em nível superior na área em que atuam. No caso do curso de Pedagogia é necessário ser professor da rede pública de ensino.\r\n\r\nSegundo a UFJF, os polos de apoio presencial da Universidade Aberta do Brasil (UAB) estão distribuídos nas cidades de Bicas, Durandé, Itamonte, Monte Sião e Confins. No momento da inscrição é necessário optar por dois polos, em ordem de preferência. O número de vagas e os cursos variam em relação à cada polo.\r\n\r\nA taxa de inscrição do processo custa R$ 120. O pagamento deve ser feito até as 20h de quarta-feira (2). É possível pedir a isenção do pagamento, somente no momento da inscrição, até este domingo (29).\r\n\r\nSegundo a UFJF, o resultado final do processo de seleção será divulgado no dia 8 de dezembro, a partir das 15h, no site da Coordenação Geral de Processos Seletivos (Copese). Clique aqui para conferir o edital completo. Para mais informações, o contato deve ser feito pelos números (32) 2102-3738 ou (32) 2102-3755.', 'Por G1 Zona da Mata', '639e67f3757a1702ede7b04cd18cf4c9.jpg', '2020-11-28 18:22:37', 'UFJF abre inscrições para cursos de graduação a distância — Foto: UFJF/Divulgação', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_jornais`
--

DROP TABLE IF EXISTS `tb_jornais`;
CREATE TABLE IF NOT EXISTS `tb_jornais` (
  `NUM_JORNAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_JORNAL` varchar(30) NOT NULL,
  `ASSUNTO_JORNAL` varchar(30) NOT NULL,
  `DATA_JORNAL` date DEFAULT NULL,
  `SUBPASTA_JORNAL` varchar(100) NOT NULL,
  `IMG_JORNAL` varchar(40) DEFAULT NULL,
  UNIQUE KEY `NUM_JORNAL` (`NUM_JORNAL`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_jornais`
--

INSERT INTO `tb_jornais` (`NUM_JORNAL`, `NOME_JORNAL`, `ASSUNTO_JORNAL`, `DATA_JORNAL`, `SUBPASTA_JORNAL`, `IMG_JORNAL`) VALUES
(11, 'AB - ABORTO', 'ABORTO: ANENCEFALIA', '2012-12-04', 'AB-50 AB-51 AB-52 AB-53', 'dde807e80b550757fec6a37e74d219aa.png'),
(17, 'AL - ALIMENTO', 'CHOCOLATE: SAÚDE', '2011-08-03', 'AL-68', 'ac8fe8758cfe339c82aff52af307549a.png'),
(15, 'AL - ALIMENTO', 'CAFÉ: ALIMENTO', '2014-11-17', 'AL-46 AL-57 AL-72 AL-74', '07f6f278106eaf5ebd2cbc6a7a99810f.png'),
(16, 'AL - ALIMENTO', 'SALGANTE: SAL SEM SÓDIO', '2014-11-21', 'AL-75', 'decd89b366c7a4c77a1f645b7a2f38fa.png'),
(12, 'AB - ABORTO', 'ABORTO: CÓDIGO PENAL', '2013-12-04', 'AB-01 AB-05 AB-09 AB-44 AB-54', '6ef4899740dfd187f63605a855c986a6.png'),
(14, 'AB - ABORTO', 'ABORTO: ESTIMATIVAS', '1994-05-31', 'AB-3 AB-7 AB-20 AB-22 AB-27', '93aea0e5ba52ea70bb17a927830f26ce.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livros`
--

DROP TABLE IF EXISTS `tb_livros`;
CREATE TABLE IF NOT EXISTS `tb_livros` (
  `NUM_LIVRO` int(6) NOT NULL AUTO_INCREMENT,
  `COD_LIVRO` varchar(30) NOT NULL,
  `NOME_LIVRO` varchar(50) NOT NULL,
  `GEN_LIVRO` varchar(30) NOT NULL,
  `COD_AUTOR_LIVRO` varchar(30) NOT NULL,
  `NOME_AUTOR_LIVRO` varchar(30) NOT NULL,
  `EDITORA_LIVRO` varchar(30) DEFAULT NULL,
  `LOCAL_LIVRO` varchar(25) DEFAULT NULL,
  `ANO_LIVRO` int(4) DEFAULT NULL,
  `IMG_LIVRO` varchar(40) NOT NULL,
  UNIQUE KEY `NUM_LIVRO` (`NUM_LIVRO`),
  UNIQUE KEY `COD_LIVRO` (`COD_LIVRO`),
  UNIQUE KEY `COD_AUTOR_LIVRO` (`COD_AUTOR_LIVRO`),
  KEY `GEN_LIVRO` (`GEN_LIVRO`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_livros`
--

INSERT INTO `tb_livros` (`NUM_LIVRO`, `COD_LIVRO`, `NOME_LIVRO`, `GEN_LIVRO`, `COD_AUTOR_LIVRO`, `NOME_AUTOR_LIVRO`, `EDITORA_LIVRO`, `LOCAL_LIVRO`, `ANO_LIVRO`, `IMG_LIVRO`) VALUES
(48, 'SAFD5', 'A Invenção de Hugo Cabret', 'Aventura', 'SS5A', 'Brian Selznick', 'Sm Edições', 'São Paulo', 2007, 'f74d208cf2e9ad43f5abe5412475d9f3.jpg'),
(57, 'FXDFFS', 'Mau Começo', 'Aventura', 'HNBGCVN', 'Lemony Snicket', 'HarperCollins', 'Rio de janeiro', 1999, 'bd78e5031d02afd5ad79fc09d9de0edc.jpg'),
(58, 'AFSJ3', 'Os Homens Que Não Amavam As Mulheres', 'Aventura', 'SSFD2', 'Stieg Larsson', 'Millenium', '', 2011, '9b728afa55ba97ca8dbca17cbf976c8b.jpg'),
(59, 'JHNU6', 'O Enigma do Oito', 'Aventura', 'OKLO8', 'Katherine Neville', 'Rocco Usado', 'São Paulo', 2011, 'f7b06b32667085098e9e8fd71d5e9b32.jpg'),
(60, 'YJKK4', 'O Artífice', 'Aventura', 'KJHN6', ' Richard Sennett', 'UniABC', 'São Paulo', 2014, 'c95dd3487bde058140c39a28155be32f.jpg'),
(61, 'MJKM0', 'Mundo Novo', 'Aventura', 'JLMN2', 'Chris Weitz', 'Seguinte', 'São Paulo', 2014, '9e8c3c28509a118653c6b94394ff0d1c.jpg'),
(63, 'LKNL6', 'A Culpa É das Estrelas', 'Romance', 'LOCF6', 'John Green', 'Edições ASA', 'Lisboa', 2012, '63d6787830104b4b980696fc1a6bdcb9.jpg'),
(64, 'UJGH2', 'Dom Casmurro', 'Romance', 'DJKO6', 'Machado de Assis', 'Livraria Garnier', 'Rio de Janeiro', 2011, 'aae8c5d4340b64b13e332045dbf30e2c.jpg'),
(65, 'FKUJ5', 'Drácula', 'TERROR', 'KGKH3', 'Bram Stoker', 'Robinson', 'Inglaterra', 1897, 'fa9b18b5e5d05c3259f5ea4201483a44.jpg'),
(66, 'BLFD2', 'Frankenstein', 'TERROR', 'NBM1G', 'Mary Shelley', 'Lackington', 'Indonésia', 1823, '2a9b041ccdf6c40ff7bc89e061bf8883.jpg'),
(67, 'GLLB2', 'It - A Coisa', 'TERROR', 'FJVF3', 'Stephen King', 'Viking Press', 'Nova Iorque', 1986, 'f3af35449030792485f86dc9fa300de8.jpg'),
(68, 'GHFC3', 'BIRD BOX', 'Suspense', 'DSSF6', 'Josh Malerman', 'Intrínseca', 'São Paulo', 2018, '0b6c7a2ba3b78843a7e8444a120882a5.jpg'),
(69, 'KKJH5', 'A paciente silenciosa', 'Suspense', 'TETF5', 'Alex Michaelides', 'MacMillan', 'São Paulo', 2019, '3593e52ebb40e50eac2e76aaf0f2feb3.jpg'),
(70, 'UILK6', 'Em Águas Sombrias', 'Suspense', 'BVBH2', 'Paula Hawkins', 'Riverhead Books', 'Nova Iorque', 1977, '28bbd586b59d9d095df53bc26f49ce59.jpg'),
(71, 'LKVG4', 'A Seleção', 'Romance', 'JTGJ5', 'Kiera Cass', 'HarperCollins', 'Rio de Janeiro', 2012, 'afa07d363ead225a2a006d76f46552bf.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_midias`
--

DROP TABLE IF EXISTS `tb_midias`;
CREATE TABLE IF NOT EXISTS `tb_midias` (
  `NUM_MIDIA` int(11) NOT NULL AUTO_INCREMENT,
  `COD_MIDIA` varchar(30) NOT NULL,
  `NOME_MIDIA` varchar(30) NOT NULL,
  `DURACAO_MIDIA` time DEFAULT NULL,
  `EMPRESA_MIDIA` varchar(30) NOT NULL,
  `IMG_MIDIAS` varchar(40) DEFAULT NULL,
  UNIQUE KEY `NUM_MIDIA` (`NUM_MIDIA`),
  UNIQUE KEY `COD_MIDIA` (`COD_MIDIA`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_midias`
--

INSERT INTO `tb_midias` (`NUM_MIDIA`, `COD_MIDIA`, `NOME_MIDIA`, `DURACAO_MIDIA`, `EMPRESA_MIDIA`, `IMG_MIDIAS`) VALUES
(11, '243', '10 ANOS COM MAFALDA-QUINO', '00:00:00', 'MARTINS FONTES', '4c28bcb97fdbda136f3a1af3ca3a56a6.jpg'),
(12, '167', '2012-FILME', '02:37:00', 'VIDEOLAR NTSC', 'cd2f5676204d3b0e2db019bffae4288f.jpg'),
(13, '166', 'A CASA DOS ESPÍRITOS', '02:25:00', 'NBO', '454a57b1f5962358c3fa982de1e68be7.jpg'),
(14, '215', 'A CASA DOS ESPÍRITOS', '02:30:00', 'FOLHA S.PAULO', '65da5f3a4efb39b17815cebe3cf7b4f9.jpg'),
(15, '156', 'A CASA DOS ESPÍRITOS', '02:25:00', 'NBO', '73ee8f620dbf5c420082861de58a19a7.jpg'),
(16, '2205', 'A CASA DOS ESPÍRITOS', '02:30:00', 'FOLHA S.PAULO', 'cd407229357f547a752bfe036a21d28b.jpg'),
(17, '1668', 'A GRANDE AVENTURA DE COUSTEAU1', '01:00:00', 'ALTAYA', '3c3fd417311d7ac694b86e3f45e0f386.jpg'),
(18, '179', 'AUDIO LIVRO-FERNANDO PESSOA', '04:46:00', 'FRENTE EDITORA', '0efdd315eb450b2d0f32c21e6d02752a.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_revistas`
--

DROP TABLE IF EXISTS `tb_revistas`;
CREATE TABLE IF NOT EXISTS `tb_revistas` (
  `NUM_REVISTA` int(11) NOT NULL AUTO_INCREMENT,
  `COD_REVISTA` varchar(30) NOT NULL,
  `NOME_REVISTA` varchar(30) NOT NULL,
  `EDITORA_REVISTA` varchar(30) DEFAULT NULL,
  `IMG_REVISTA` varchar(40) DEFAULT NULL,
  UNIQUE KEY `NUM_REVISTA` (`NUM_REVISTA`),
  UNIQUE KEY `COD_REVISTA` (`COD_REVISTA`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_revistas`
--

INSERT INTO `tb_revistas` (`NUM_REVISTA`, `COD_REVISTA`, `NOME_REVISTA`, `EDITORA_REVISTA`, `IMG_REVISTA`) VALUES
(9, 'ED(53)VII', 'ABENDI', 'ARCTEST', '0ea3e5e26bdfed73f78874c382c1a4b3.png'),
(10, 'V(23)AVO', 'ACCESS-VISUAL CASIC-OFFICE', 'CANADIAN POST', 'e7734466795ee815aa0a08caf979be27.png'),
(11, '(2013/2014)AEX', 'ANUÁRIO EXAME', 'ED.ABRIL', '761b448ad4de1a4eaba288cb2c9bc396.png'),
(12, '(113)CC', 'CADERNOS DA CIDADANIA', 'IMPRENSA OFICIA', '87d6a0580221044e8f17e937d7a1879c.png'),
(13, '(27)CE', 'CARTA ESCOLA', 'CONFIANÇA', '9642f053fd4745382f00d8cd7652be0f.png'),
(14, '8(48)', 'CIENCIA HOEJE', 'SBPC', '0beacfed3d10196993b50fc127fc686d.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
