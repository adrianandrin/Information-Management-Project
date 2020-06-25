-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 10:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musika0.1`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistID` varchar(15) NOT NULL,
  `artistName` varchar(30) DEFAULT NULL,
  `artistBio` varchar(500) DEFAULT NULL,
  `artistImg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistID`, `artistName`, `artistBio`, `artistImg`) VALUES
('2020-01', 'Ben&Ben', 'Ben&Ben (formerly known as The Benjamins) is an indie folk/folk pop band in the Philippines. They consist of brothers Paolo and Miguel Guico on acoustic guitars and vocals, Poch Barreto on electric guitar, Jam Villanueva on drums, Agnes Reoma on bass.', 'https://66.media.tumblr.com/df99d83c0336520fc212ff895b6a8da0/63ce52a26dd9c553-cd/s500x750/5230b5d7cedf857a1ec227dca2bf5d4f07ff8f33.jpg'),
('2020-02', 'Blackpink', 'Blackpink is a South Korean girl group formed by YG Entertainment, consisting of members Jisoo, Jennie, Lisa, Rose.', 'https://66.media.tumblr.com/1afd4ffed0366aa98b66c7e33590b5ad/63ce52a26dd9c553-b6/s500x750/69be47c9cc53998f4392fe8149e4e2710f40fd19.jpg'),
('2020-03', 'Twice', 'Twice is a South Korean girl group formed by JYP Entertainment through the 2015 reality show Sixteen. The group is composed of nine members: Nayeon, Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeyoung, and Tzuyu.', 'https://66.media.tumblr.com/dd95b442a4f762bb32f519b1c0d47392/63ce52a26dd9c553-f3/s500x750/1c7c75722390efe425f5dbaf64b733f1fcc27826.jpg'),
('2020-04', 'Billie Eilish', 'Billie Eilish Pirate Baird OConnell is an American singer and songwriter. She first gained media attention in 2016 when she uploaded the song \"Ocean Eyes\" to SoundCloud, and it was subsequently released by Interscope Records subsidiary Darkroom.', 'https://66.media.tumblr.com/4e5243c14868e0992de91f1dd02fe102/63ce52a26dd9c553-9d/s500x750/82a2b3682848f561ddc8fc4e5e69080be1d16c3d.jpg'),
('2020-05', 'Lewis Capaldi', 'Lewis Capaldi is a Scottish singer-songwriter. He was nominated for the Critics Choice Award at the 2019 Brit Awards. In March 2019, his single \"Someone You Loved\" topped the UK Singles Chart where it remained for seven weeks, and in October 2019 it.', 'https://66.media.tumblr.com/40b29903aa54aa731ef913e095913f85/df126f192a4299a2-d0/s500x750/09b6c2e208913cd4e529a44437e9d00933979bae.jpg'),
('2020-06', 'Halsey', 'Ashley Nicolette Frangipane, is an American singer and songwriter. Gaining attention from self-released music on social media platforms, she was signed by Astralwerks in 2014 and released her debut EP, Room 93, later that year.', 'https://66.media.tumblr.com/49595b4b7ea8f5885954398e270db4c9/df126f192a4299a2-2b/s500x750/158ced2ccf2a6c7ec2537903275db452a9933d66.jpg'),
('2020-07', 'Lany', 'LANY is an American indie pop band from Los Angeles, formed in Nashville in 2014. The band consists of Paul Jason Klein from Tulsa, Oklahoma. Charles Leslie \"Les\" Priest, and Jake Clifford Goss from Nashville. The members of LANY studied music in col.', 'https://66.media.tumblr.com/1ea20775fa94a01f572399fee611a67b/df126f192a4299a2-99/s500x750/d948f864e780a2be99ea7e63635e141e07f6d162.jpg'),
('2020-08', 'Lauv', 'Ari Staprans Leff, known professionally as Lauv, is an American singer, songwriter and record producer based in Los Angeles. His debut EP Lost in the Light was released in 2015 and his compilation album I Met You When I Was 18 was released in 2018.', 'https://66.media.tumblr.com/ae88d7fa475ef6ecb5974323416d49d3/df126f192a4299a2-94/s500x750/b703476efe2a52f77f0acab4b145645d00e149b3.jpg'),
('2020-09', 'One Direction', 'One Direction, often shortened to 1D, are an English-Irish pop boy band formed in London, England in 2010. The band is composed of Niall Horan, Liam Payne, Harry Styles and Louis Tomlinson; former member Zayn Malik departed from the group in 2015.', 'https://66.media.tumblr.com/99cf8deecfd93312b062bb6ecff770af/df126f192a4299a2-56/s500x750/52cab7bdf17f2942247c573715e27b9ad2826a97.jpg'),
('2020-10', 'Russ', 'Russell James Vitale, better known by his stage name Russ, is an American rapper, singer, songwriter, author and record producer. He is known for his singles \"What They Want\" and \"Losin Control\", which peaked respectively at number 83 and 63 on the U', 'https://66.media.tumblr.com/1b35a582b5e52513535c6801a7242446/d2ae136ebae99fe6-ba/s500x750/b628cc53ce6b23d5f82c2a67944521c004f53247.jpg'),
('2020-11', 'Taylor Swift', 'Taylor Alison Swift is an American singer-songwriter. She is known for narrative songs about her personal life, which have received widespread media coverage. At age 14, Swift became the youngest artist signed by the Sony/ATV Music publishing house a', 'https://66.media.tumblr.com/ea2ca9655690ebaaa5bf2ba4991fa314/d2ae136ebae99fe6-4f/s500x750/dd79863afe7c95ef695a4a4205fd0ea4d5c9ad57.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customerID` int(11) DEFAULT NULL,
  `songID` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `details` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customerID`, `songID`, `quantity`, `details`) VALUES
(1, 1, 1, 'Now'),
(1, 2, 1, 'Now');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `username`, `pass`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'asdasdas', 'asdas', 'sdasdasda@gmail.com'),
(3, 'adrian', 'adrian', 'war@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genreID` varchar(15) NOT NULL,
  `genre` varchar(15) DEFAULT NULL,
  `genreImg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreID`, `genre`, `genreImg`) VALUES
('001', 'KPop', 'https://66.media.tumblr.com/f6d7f02bbd5eb70c6730755a49e089fb/7c85a74762b02b45-7a/s500x750/3965f268a40d3787da96388a4a80ba8b37490782.jpg'),
('002', 'Pop', 'https://66.media.tumblr.com/a6b14cf216ae583181395b02bbc95ae2/320ccf9238de2af4-39/s400x600/4ac02a5bae28570580dc5037e79dcec22352cec1.jpg'),
('003', 'Rock', 'https://66.media.tumblr.com/fc9bc2f385cde375af770197dd5563f4/60ca249503c0929e-c3/s400x600/03b801a65d73313f220ea9f5a12edbb7ca98eb8e.jpg'),
('004', 'Country', 'https://66.media.tumblr.com/d64659ccd7fbbc0bda4e7a05d40a0dcf/0bdd35170c541f55-b3/s500x750/11212990fed3d6af24138cb86f9e0ed9605b357d.jpg'),
('005', 'Reggae', 'https://66.media.tumblr.com/80478227bde3c0d71e049100595edab5/60ca249503c0929e-f8/s500x750/d662f51a240100c9fd31bada4ad4ebc0f555e7e7.jpg'),
('006', 'Classical', 'https://66.media.tumblr.com/1c5a37e9b82d7b108159d30840d5a126/3bd34bf12428fca8-ba/s500x750/13ae5d9e64ed2cdf82c6062ec6e04fd0dfc86c4c.jpg'),
('007', 'Hiphop/Rap', 'https://66.media.tumblr.com/c1065996ef7443deb9a330645439c7dd/0bdd35170c541f55-8d/s500x750/15e876a82c11f03f4b237ef04742c970459d8ca6.jpg'),
('008', 'Ballad', 'https://66.media.tumblr.com/041a03dff88937a4bdae1bff1f30e925/3bd34bf12428fca8-33/s500x750/8bfa9d761a4dc4b7c4e607e21ec798a368806b23.jpg'),
('009', 'Alternative', 'https://66.media.tumblr.com/183b0570a815c9a6e8a3b08de5dedf5c/3bd34bf12428fca8-ad/s500x750/a3ba3bb7501b24f777a1780e773523cac6095374.jpg'),
('010', 'R&B/Soul', 'https://66.media.tumblr.com/b1d5b5943a7220136fe1e379775fb75b/60ca249503c0929e-40/s500x750/f884a5352559523dbcf4587c4fac362e9b91926c.jpg'),
('011', 'Blues', 'https://66.media.tumblr.com/dfc28ed384a2d1eb1ea247af28722d0e/3bd34bf12428fca8-46/s500x750/11f2251bef2e41d8149c587d5f9f3cc070f2ff55.jpg'),
('012', 'Childrens', 'https://66.media.tumblr.com/6f7e2b76ba51868e3a25c5ea6aea6d42/3bd34bf12428fca8-9f/s500x750/dd5cae142450f49be8c3e01512e91c524dc801fa.jpg'),
('013', 'Dance', 'https://66.media.tumblr.com/7269aaf8e60c9136ab51c78153a68511/0bdd35170c541f55-be/s500x750/05824faf9c2c82c3ff85dac04589ef886004e3e8.jpg'),
('014', 'Electronic', 'https://66.media.tumblr.com/df5565b09cb3568f888560340cead6a2/0bdd35170c541f55-2c/s500x750/adcb52440c3f52337163e58dd50990e806024860.jpg'),
('015', 'Holiday', 'https://66.media.tumblr.com/daf84da4e933b540cd81813b0af4dc6b/0bdd35170c541f55-c4/s500x750/ff530dee4d6b08a66e29379cde549af077ad9cfb.jpg'),
('016', 'Inspirational', 'https://66.media.tumblr.com/feb7e8410bd9a892bb185b64f912807a/7c85a74762b02b45-d3/s500x750/43fd2df07d68802c7ec5a0bbed736cab2112c9df.jpg'),
('017', 'Instrumental', 'https://66.media.tumblr.com/3ecb775df8e3ebb45ec3f8e0c57cb474/7c85a74762b02b45-b7/s400x600/6069d63a6207deb94e7578ef9d7fd4cbfb76b42e.jpg'),
('018', 'Jazz', 'https://66.media.tumblr.com/e2a297bb0ce70925bad6b1399067c2fd/7c85a74762b02b45-66/s500x750/e29be5d46782fff0d2303e117c74e5197ec55fc1.jpg'),
('019', 'JPop', 'https://66.media.tumblr.com/4becc3543a4c4153b3146361c34b2ca2/7c85a74762b02b45-ae/s500x750/de51b6a7c32938cf8b97cff76f619d581404775a.jpg'),
('020', 'Latin', 'https://66.media.tumblr.com/443c52c513b5af0c9feae78442eec879/320ccf9238de2af4-93/s500x750/42f4494c658564a88fd847fac415cbdee7d2a78c.jpg'),
('021', 'New Age', 'https://66.media.tumblr.com/5c0837354a938891205b8e0de2c2a4e1/320ccf9238de2af4-b7/s500x750/fc9f5f1454e407d9e676cb8d0cc0952775f47a7a.jpg'),
('022', 'Opera', 'https://66.media.tumblr.com/6410666ff0738ef01c045cacf680eb38/320ccf9238de2af4-b6/s500x750/dbf5ea4ec6d5d7c0966bbf310b299908edf6ced5.jpg'),
('023', 'Vocal', 'https://66.media.tumblr.com/0059bbb1065edfdf495dc83b666b50d6/60ca249503c0929e-2b/s500x750/e886919ed41d0770482955532b0c4d73705a2317.jpg'),
('024', 'Soundtrack', 'https://66.media.tumblr.com/40f8c029a06748e7c1f689689e05b9f0/60ca249503c0929e-08/s500x750/b6d06a6df7d828d2dcf2bbfa8793122e9321c9e0.jpg'),
('025', 'OPM', 'https://66.media.tumblr.com/0b40f97793302ff2cb883c89f4bede96/320ccf9238de2af4-a5/s500x750/e522da130f56fc17058c8ab7006c4c4e288efe0c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `customerID` int(11) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`customerID`, `fname`, `lname`, `address`, `contact`) VALUES
(2, 'Adrian', 'Andrin', 'Philippines', '0123465687'),
(1, 'admin', 'admin', 'admin', '0123456789'),
(3, 'adrian', 'andrin', 'Philippines', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `songID` int(11) NOT NULL,
  `artistID` varchar(15) DEFAULT NULL,
  `songName` varchar(30) DEFAULT NULL,
  `songPrice` double DEFAULT NULL,
  `songImg` varchar(200) DEFAULT NULL,
  `genreID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`songID`, `artistID`, `songName`, `songPrice`, `songImg`, `genreID`) VALUES
(1, '2020-02', 'DDU-DU-DDU-DU', 100, 'https://66.media.tumblr.com/4f83cdd585e92bb6a32275e08c4ea439/754e0f3be6194a92-cd/s1280x1920/86203677656c59afea9f37a1dd7fede74d3ebbc8.jpg', '001'),
(2, '2020-02', 'Kill This Love', 150, 'https://66.media.tumblr.com/11f1f75eab344b458d2ca07f6af1e223/52b0fbd6d8c1d390-c0/s1280x1920/8213bc28b50a72736ac0d57f705cbac96c31f36e.jpg', '001'),
(3, '2020-03', 'Feel Special', 150, 'https://66.media.tumblr.com/0fee9fd918e7cddc3a9fa5f979f31b92/754e0f3be6194a92-c2/s1280x1920/3f628ad4d3cddd6a97856c18c309817f2e45c092.jpg', '001'),
(4, '2020-01', 'Make It With You', 50, 'https://66.media.tumblr.com/bb688bd76001eef2c4b8b8ff5d6a964e/687a9e2bf2fc7781-1d/s400x600/bc64f78666a9a3713ddc295118ce6e8f01ef7a0e.jpg', '025'),
(5, '2020-01', 'Araw-Araw', 70, 'https://66.media.tumblr.com/52195fa2741f2b98007470cf6c7744b3/754e0f3be6194a92-64/s500x750/dbec48eec100d108022a1d3f92477f4c8418ff72.jpg', '025'),
(6, '2020-01', 'Kathang Isip', 100, 'https://66.media.tumblr.com/bc0a316ec7b3fff7cba048a940013186/52b0fbd6d8c1d390-aa/s640x960/6619041fe462fe66584ad0a2fbb7d02aaf82310b.jpg', '025'),
(7, '2020-04', 'idontwannabeyouanymore', 150, 'https://66.media.tumblr.com/12079c74dd62c8c5ddc33779d1dd44fc/52b0fbd6d8c1d390-95/s1280x1920/761b5d503978d71c0e0a26719755d2853a7b070f.jpg', '009'),
(8, '2020-05', 'Someone You Loved', 250, 'https://66.media.tumblr.com/137383974c39aa6fd822f598e269e186/687a9e2bf2fc7781-c7/s1280x1920/1befc240d49462a212cd780b94d898aecfe5bcbb.jpg', '009'),
(9, '2020-06', 'Finally // Beautiful Stranger', 150, 'https://66.media.tumblr.com/fe3e53add0905ac60291b428dc19e18a/52b0fbd6d8c1d390-ec/s540x810/24406dcc81bfc70fbe30a28d193051d01fce369a.jpg', '009'),
(10, '2020-06', 'Without Me', 180, 'https://66.media.tumblr.com/f3757b815ca73e2d1478c1cba6df3796/687a9e2bf2fc7781-87/s1280x1920/2cc21355b6f46547be1f637ad53ab0489869e5b0.jpg', '002'),
(11, '2020-07', 'ILYSB', 130, 'https://66.media.tumblr.com/5b6d893bfcf228cecb6579c1dc4cf39b/52b0fbd6d8c1d390-d2/s1280x1920/de47e0696d45865e93f1ab30fe9a239434893b0a.jpg', '002'),
(12, '2020-08', 'Changes', 120, 'https://66.media.tumblr.com/bb429ac75f048afaab32b789cd96cef0/754e0f3be6194a92-36/s1280x1920/30c86732de81129edb144f92f900c640a769a274.jpg', '002'),
(13, '2020-09', 'Drag Me Down', 200, 'https://66.media.tumblr.com/c89ba78a5a8fbac835a5a6906bfd1864/754e0f3be6194a92-76/s1280x1920/bb8f3b032ccb3fa14d2f1aa3149fb0f3c78544f6.jpg', '002'),
(14, '2020-10', 'Losin Control', 250, 'https://66.media.tumblr.com/6fde572db96bf894ce88465a35d081c3/687a9e2bf2fc7781-18/s1280x1920/37784322d564a5bf3973bf7d4142de256413ad25.jpg', '007'),
(15, '2020-11', 'Look What You Made Me Do', 170, 'https://66.media.tumblr.com/1d4cf4012544f239e55deb2127055253/687a9e2bf2fc7781-eb/s400x600/bf034b2a33714357b333d1b64ded55432dd53f55.png', '002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `customerID` (`customerID`),
  ADD KEY `songID` (`songID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songID`),
  ADD KEY `artistID` (`artistID`),
  ADD KEY `genreID` (`genreID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `songID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`);

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`genreID`) REFERENCES `genre` (`genreID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
