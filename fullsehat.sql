-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 06:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullsehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `olahraga`
--

CREATE TABLE `olahraga` (
  `idOlahraga` int(11) NOT NULL,
  `namaOlahraga` varchar(30) NOT NULL,
  `instruktor` varchar(30) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `caloriBurn` varchar(30) NOT NULL,
  `kesulitan` enum('Beginner','Intermediete','Hard','') NOT NULL,
  `equipment` varchar(100) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `embedYoutube` varchar(50) NOT NULL,
  `definisi` text NOT NULL,
  `manfaat` text NOT NULL,
  `cara` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `olahraga`
--

INSERT INTO `olahraga` (`idOlahraga`, `namaOlahraga`, `instruktor`, `durasi`, `caloriBurn`, `kesulitan`, `equipment`, `youtube`, `embedYoutube`, `definisi`, `manfaat`, `cara`, `gambar`) VALUES
(1, 'Lari', 'Mbak Ayu', '30 minutes', '280-520', 'Beginner', 'No Equipment', 'https://www.youtube.com/watch?v=5umbf4ps0GQ', 'https://www.youtube.com/embed/5umbf4ps0GQ', 'Olahraga Lari atau berlari adalah metode makhluk hidup untuk bergerak yang memungkinkan manusia dan binatang bergerak dengan cepat menggunakan kaki. Lari adalah cara yang lebih cepat untuk bergerak dibandingkan dengan berjalan. Lari adalah salah satu cabang olahraga tertua di dunia. Sebelum menjadi sebuah cabang olahraga, lari sudah dikenal oleh peradaban-peradaban manusia kuno. ', 'Olahraga lari akan melatih jantung agar lebih kuat dan mengurangi risiko penyakit jantung. Hal tersebut ditandakan dari detak jantung yang berdegup lebih kencang dari biasanya ketika berlari. Jika sudah terbiasa, degupan jantung itu akan kembali normal dan tidak terlalu kencang lagi. Hal ini menandakan bahwa jantung sudah terbiasa dan sirkulasi darah menjadi lebih lancar, sehingga jantung akan jadi lebih sehat dan dapat terhindar dari ancaman penyakit. ', 'Meski terlihat sepele, faktanya masih banyak orang yang belum tahu cara lari yang benar. Padahal, ini merupakan hal yang penting untuk diperhatikan. Dengan menerapkan cara berlari yang benar, Anda bisa menjalani olahraga ini dengan lancar dan terhindar dari cedera.', 'pic/foto/Lari.jpeg'),
(2, 'Push Up', 'Mbak Sri', '15 minutes', '100-171', 'Hard', 'Mat', 'https://youtu.be/MgcZ3VQZLnc', 'https://www.youtube.com/embed/Q7cPaJZoOng?start=4', 'Push Up adalah jenis senam kekuatan yang berfungsi untuk menguatkan otot biseps maupun triseps. Posisi awal tidur tengkurap dengan tangan di sisi kanan kiri badan. Kemudian, badan didorong ke atas dengan kekuatan tangan. Posisi kaki dan badan tetap lurus atau tegap. Setelah itu, badan diturunkan dengan tetap menjaga kondisi badan dan kaki tetap lurus. Badan turun tanpa menyentuh lantai atau tanah. Naik lagi dan dilakukan secara berulang. ', 'Manfaat dari Push Up sendiri adalah dapat memperkuat otot lengan dan juga otot perut. Manfaat lain yang didapatkan dari push up adalah dapat membakar kalori yang cukup besar.', '\r\n\r\nMelakukan gerakan push up dengan benar sangatlah penting demi menghindari kerusakan atau cedera pada otot-otot tubuh. Oleh karena itu, berikut adalah Cara melakukan push up wanita:\r\n\r\n- Telungkup di atas matras dengan pergelangan tangan sejajar di bawah bahu.\r\n- Gerakkan lutut ke belakang sehingga tubuh (dari bahu hingga lutut) berada dalam satu garis lurus. Tahan posisi ini.\r\n- Kontraksikan otot perut dan angkat kaki serta tulang kering dari lantai.\r\n- Tekuk siku secara perlahan saat menurunkan dada ke lantai. Dekatkan dada beberapa sentimeter dari lantai, lalu dorong dengan telapak tangan agar lengan lurus dan kembali ke posisi awal.\r\n\r\n', 'pic/foto/push-up.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `olahraga`
--
ALTER TABLE `olahraga`
  ADD PRIMARY KEY (`idOlahraga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `olahraga`
--
ALTER TABLE `olahraga`
  MODIFY `idOlahraga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
