-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2020 lúc 10:53 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website-mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `compare`
--

CREATE TABLE `compare` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `compare`
--

INSERT INTO `compare` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(4, 1, 1, 'Ip 11 ProMax', '40000', '95efa9fd1b.jfif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(6, 'Văn Tuyến', 'vantuyen3398@gmail.com', 'vantuyen', '4297f44b13955235245b2497399d7a93', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(2, 'Apple'),
(3, 'Samsung'),
(4, 'OPPO'),
(6, 'Dell'),
(7, 'Canon'),
(8, 'LG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(44, 2, 'd2e1dkdv1hv83ck052qnhme5oj', 'Dell Inspirin 8700', '20000', 1, 'c54b611829.jpg'),
(45, 2, 'd2e1dkdv1hv83ck052qnhme5oj', 'Dell Inspirin 8700', '20000', 1, 'c54b611829.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(2, 'Máy ảnh'),
(3, 'Tủ lạnh, Máy giặt'),
(7, 'Đồng hồ thông minh'),
(8, 'Tivi'),
(9, 'Tablet'),
(10, 'Laptop'),
(11, 'Điện thoại'),
(21, 'Máy ảnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(1, 'Văn Tuyến', '476/1 Điện Biên Phủ', 'Đà Nẵng', 'AF', '433', 123123, 'admin@gmail.com', '4297f44b13955235245b2497399d7a93'),
(2, 'Hoàng', '476/1 Điện Biên Phủ', 'Đà Nẵng', 'AF', '1000', 2131231, 'admin1@gmail.com', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `customerId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customerId`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(31, 1, 'Ip 11 ProMax', 1, 1, '40000', '95efa9fd1b.jfif', 0, '2020-12-06 02:38:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `price`, `image`, `type`) VALUES
(1, 'Ip 11 ProMax', 11, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', '40000', '95efa9fd1b.jfif', 0),
(2, 'Dell Inspirin 8700', 10, 6, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', '20000', 'c54b611829.jpg', 0),
(4, 'Samsung Galaxy Watch', 7, 3, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', '10000', 'dc0d0dabb3.jfif', 0),
(5, 'Oppo A9 (2020)', 11, 7, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', '9900', 'e09e31923d.jfif', 0),
(7, 'IP 12 ', 11, 2, '<p>ip 12 promax 512G m&agrave;u xanh dương</p>', '45000000', 'f7631e4368.jfif', 0),
(8, 'IP 12 Promax', 11, 2, '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>', '50000000', 'ece88fdd17.jfif', 0),
(9, 'Canon EOS 4000D', 21, 7, '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>', '25000000', 'a35a6e9dbd.jfif', 0),
(10, 'Sony Alpha', 21, 7, '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>\r\n<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/p&gt;</p>', '15000000', '145d876211.jfif', 1),
(11, 'Tivi Sony Smart 4K 55X-7000G', 8, 7, '<p>Tivi Sony Smart 4K 55X-7000G</p>\r\n<p>Tivi Sony Smart 4K 55X-7000G</p>\r\n<p>Tivi Sony Smart 4K 55X-7000G</p>\r\n<p>Tivi Sony Smart 4K 55X-7000G</p>', '15000000', 'c5f70d3720.jfif', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
