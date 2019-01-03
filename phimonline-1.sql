-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2019 lúc 07:58 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phimonline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `id_cm` int(11) NOT NULL,
  `tencm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`id_cm`, `tencm`) VALUES
(3, 'Hoáº¡t hÃ¬nh'),
(4, 'HÃ nh Ä‘á»™ng'),
(5, 'Kinh dá»‹'),
(6, 'TÃ¬nh cáº£m');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimbo`
--

CREATE TABLE `phimbo` (
  `id_bo` int(11) NOT NULL,
  `phimbo` varchar(43) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Đang đổ dữ liệu cho bảng `phimbo`
--

INSERT INTO `phimbo` (`id_bo`, `phimbo`) VALUES
(1, 'Phim bo 2014'),
(2, 'Phim bo 2015'),
(3, 'Phim bo 2016'),
(4, 'Phim bo 2017'),
(5, 'Phim bo 2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimcr`
--

CREATE TABLE `phimcr` (
  `id_cr` int(11) NOT NULL,
  `Phimcr` varchar(34) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Đang đổ dữ liệu cho bảng `phimcr`
--

INSERT INTO `phimcr` (`id_cr`, `Phimcr`) VALUES
(1, 'Phim chieu rap 2014'),
(2, 'Phim chieu rap 2015'),
(3, 'Phim chieu rap 2016'),
(4, 'Phim chieu rap 2017'),
(5, 'Phim chieu rap 2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimle`
--

CREATE TABLE `phimle` (
  `id_le` int(11) NOT NULL,
  `phimle` varchar(56) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phimle`
--

INSERT INTO `phimle` (`id_le`, `phimle`) VALUES
(1, 'Phim le 2014'),
(2, 'Phim le 2015'),
(3, 'Phim le 2016'),
(4, 'Phim le 2017'),
(5, 'Phim le 2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimmoi`
--

CREATE TABLE `phimmoi` (
  `id_Pmoi` int(11) NOT NULL,
  `phimmoi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phimmoi`
--

INSERT INTO `phimmoi` (`id_Pmoi`, `phimmoi`) VALUES
(1, 'Phim moi 2014'),
(2, 'Phim moi 2015'),
(3, 'Phim moi 2016'),
(4, 'Phim moi 2017'),
(5, 'Phim moi 2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlphim`
--

CREATE TABLE `qlphim` (
  `id_p` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `theloai` varchar(255) NOT NULL,
  `gioithieu` text NOT NULL,
  `dienvien` varchar(255) NOT NULL,
  `quocgia` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlphim`
--

INSERT INTO `qlphim` (`id_p`, `ten`, `theloai`, `gioithieu`, `dienvien`, `quocgia`, `link`) VALUES
(2, '  cate1', 'cate2', 'cate3', 'ce4', 'cate5', 'xxx.com'),
(3, 'anhhieu', 'anhhieu', 'anhhieu', 'anhhieu', 'anhhieu', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `id` int(11) NOT NULL,
  `tenqg` varchar(56) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`id`, `tenqg`) VALUES
(1, 'Thai Lan'),
(2, 'Viet Nam'),
(3, 'Trung Quoc'),
(4, 'Hong Kong'),
(5, 'Nga'),
(6, 'Nhat Ban'),
(7, 'My');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lever` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `lever`) VALUES
(4, 'anhhieu123', 'c4ca4238a0b923820dcc509a6f75849b', 'nguyenvan12n92@gmail.com', 1),
(5, 'anhhieu1234', 'c4ca4238a0b923820dcc509a6f75849b', 'nguyenvan12n92@gmail.com', 1),
(6, 'admin', '202cb962ac59075b964b07152d234b70', 'admin123@gmail.com', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`id_cm`);

--
-- Chỉ mục cho bảng `phimbo`
--
ALTER TABLE `phimbo`
  ADD PRIMARY KEY (`id_bo`);

--
-- Chỉ mục cho bảng `phimcr`
--
ALTER TABLE `phimcr`
  ADD PRIMARY KEY (`id_cr`);

--
-- Chỉ mục cho bảng `phimle`
--
ALTER TABLE `phimle`
  ADD PRIMARY KEY (`id_le`);

--
-- Chỉ mục cho bảng `phimmoi`
--
ALTER TABLE `phimmoi`
  ADD PRIMARY KEY (`id_Pmoi`);

--
-- Chỉ mục cho bảng `qlphim`
--
ALTER TABLE `qlphim`
  ADD PRIMARY KEY (`id_p`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phimbo`
--
ALTER TABLE `phimbo`
  MODIFY `id_bo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phimcr`
--
ALTER TABLE `phimcr`
  MODIFY `id_cr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phimle`
--
ALTER TABLE `phimle`
  MODIFY `id_le` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phimmoi`
--
ALTER TABLE `phimmoi`
  MODIFY `id_Pmoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `qlphim`
--
ALTER TABLE `qlphim`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
