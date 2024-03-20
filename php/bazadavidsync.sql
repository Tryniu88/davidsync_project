-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 20, 2024 at 02:39 PM
-- Wersja serwera: 8.2.0
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazadavidsync`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicydavidsync`
--

CREATE TABLE `pracownicydavidsync` (
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `upr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pracownicydavidsync`
--

INSERT INTO `pracownicydavidsync` (`login`, `password`, `upr`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('dawid', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicydavidsync`
--
ALTER TABLE `pracownicydavidsync`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
