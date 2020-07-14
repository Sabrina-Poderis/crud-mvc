-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jul-2020 às 03:27
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(5) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `sobrenome` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sobrenome`, `email`, `telefone`) VALUES
(1, 'Daiana', 'Vadagnin', 'daiana.vadagnin@gmail.com', '(55) 68 6788-9964'),
(2, 'Rogério', 'Modolo', 'rogerio.modolo@gmail.com', '(55) 82 9997-0422'),
(3, 'Ajit', 'Galavotti', 'ajit.galavotti@gmail.com', '(55) 96 5029-3776'),
(4, 'Isaac', 'Fitipaldi', 'isaac.fitipaldi@gmail.com', '(55) 92 5170-4054'),
(5, 'Gioconda', 'Fachini', 'gioconda.fachini@gmail.com', '(55) 71 6902-7386'),
(6, 'Takashi', 'Plotegher', 'takashi.plotegher@gmail.com', '(55) 88 6695-5334'),
(7, 'Adelina', 'Mafra', 'adelina.mafra@gmail.com', '(55) 61 5720-1316'),
(8, 'Phillippe', 'Demartins', 'phillippe.demartins@gmail.com', '(55) 27 2528-3584'),
(9, 'Latiffa', 'Maifredi', 'latiffa.maifredi@gmail.com', '(55) 62 4242-1614'),
(10, 'Reginaldo', 'Entringer', 'reginaldo.entringer@gmail.com', '(55) 98 8157-8026'),
(11, 'Dan', 'Nielsdatter', 'dan.nielsdatter@gmail.com', '(55) 65 7336-3101'),
(12, 'Jeni', 'Andersdatter', 'jeni.andersdatter@gmail.com', '(55) 84 7439-3949'),
(13, 'Valter', 'Bassan', 'valter.bassan@gmail.com', '(55) 31 3015-7304'),
(14, 'Natacha', 'Barnett', 'natacha.barnett@gmail.com', '(55) 41 8280-9006'),
(15, 'Leonor', 'Canata', 'leonor.canata@gmail.com', '(55) 83 9096-9713'),
(16, 'Mel', 'Francisca', 'mel.francisca@gmail.com', '(55) 91 7753-0515'),
(17, 'Jacy', 'Santana', 'jacy.santana@gmail.com', '(55) 81 8427-8828'),
(18, 'Filomena', 'Franceschet', 'filomena.franceschet@gmail.com', '(55) 86 2082-1968'),
(19, 'Clotildes', 'Baptista', 'clotildes.baptista@gmail.com', '(55) 21 4410-9148'),
(20, 'Martha', 'Rangel', 'martha.rangel@gmail.com', '(55) 84 6643-5097'),
(21, 'Djane', 'Pinheiro', 'djane.pinheiro@gmail.com', '(55) 51 6771-8988'),
(22, 'Nílson', 'Miniguiti', 'nilson.miniguiti@gmail.com', '(55) 69 3109-6700'),
(23, 'Alana', 'Andrião', 'alana.andriao@gmail.com', '(55) 95 3310-4747'),
(24, 'Tatiane', 'Passamani', 'tatiane.passamani@gmail.com', '(55) 48 4104-7282'),
(25, 'Aurélio', 'Fidelis', 'aurelio.fidelis@gmail.com', '(55) 79 5565-6673'),
(26, 'Fernão', 'Alencar', 'fernao.alencar@gmail.com', '(55) 11 2841-9107'),
(27, 'Sueli', 'Fazollo', 'sueli.fazollo@gmail.com', '(55) 63 1445-4673'),
(28, 'Yasmina', 'Montanaro', 'yasmina.montanaro@gmail.com', '(55) 88 5375-1840'),
(29, 'Ãsis', 'Appolinario', 'asis.appolinario@gmail.com', '(55) 61 7467-2029'),
(30, 'Abel', 'Masioli', 'abel.masioli@gmail.com', '(55) 27 1849-8981'),
(31, 'Rui', 'Cardosa', 'rui.cardosa@gmail.com', '(55) 62 2841-3447'),
(32, 'Luana', 'Freyre', 'luana.freyre@gmail.com', '(55) 98 5958-5037'),
(33, 'Isabella', 'De Poli', 'isabella.de poli@gmail.com', '(55) 65 2957-9482'),
(34, 'Iracema', 'Braceschi', 'iracema.braceschi@gmail.com', '(55) 84 3856-1389'),
(35, 'Milena', 'Caretta', 'milena.caretta@gmail.com', '(55) 65 3085-7427'),
(36, 'Jennifer', 'Esposito', 'jennifer.esposito@gmail.com', '(55) 84 5767-8515'),
(37, 'Mara', 'Bottega', 'mara.bottega@gmail.com', '(55) 31 8139-9895'),
(38, 'Aracy', 'de Azevedo', 'aracy.de azevedo@gmail.com', '(55) 41 2444-1806'),
(39, 'Thalita', 'Verret', 'thalita.verret@gmail.com', '(55) 83 8042-8249'),
(40, 'Ilsa', 'Herculano', 'ilsa.herculano@gmail.com', '(55) 91 7303-0537'),
(41, 'Fernando', 'Sperotto', 'fernando.sperotto@gmail.com', '(55) 81 7083-9921'),
(42, 'Theo', 'Soares', 'theo.soares@gmail.com', '(55) 86 2761-2795'),
(43, 'Gil', 'Shonio', 'gil.shonio@gmail.com', '(55) 82 2515-6626'),
(44, 'Linette', 'Maroto', 'linette.maroto@gmail.com', '(55) 96 3415-8426'),
(45, 'Nadya', 'Pereyra', 'nadya.pereyra@gmail.com', '(55) 92 4391-8845'),
(46, 'Larisa', 'Fardin', 'larisa.fardin@gmail.com', '(55) 71 9787-5447'),
(47, 'Beatriz', 'Belinato', 'beatriz.belinato@gmail.com', '(55) 88 6889-8727'),
(48, 'Pedro', 'Conte', 'pedro.conte@gmail.com', '(55) 61 5957-6784'),
(49, 'Paco', 'Franchin', 'paco.franchin@gmail.com', '(55) 27 9078-5705'),
(50, 'Carmela', 'Darroz', 'carmela.darroz@gmail.com', '(55) 91 4621-9166');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
