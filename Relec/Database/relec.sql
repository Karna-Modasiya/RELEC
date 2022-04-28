-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 10:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relec`
--

-- --------------------------------------------------------

--
-- Table structure for table `buylist`
--

CREATE TABLE `buylist` (
  `cid` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bought` tinyint(1) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buylist`
--

INSERT INTO `buylist` (`cid`, `email`, `bought`, `dt`) VALUES
(16, 'abc@gmail.com', 1, '2022-03-11 10:11:48'),
(17, 'abc@gmail.com', 1, '2022-03-11 10:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fid` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(100) NOT NULL,
  `name` varchar(60) NOT NULL,
  `author_email` varchar(50) NOT NULL,
  `author` varchar(60) NOT NULL,
  `video_name` varchar(50) NOT NULL,
  `video_loca` varchar(500) NOT NULL,
  `url` text NOT NULL,
  `img` mediumblob NOT NULL,
  `desc` mediumtext NOT NULL,
  `rating` float NOT NULL,
  `learning` text NOT NULL,
  `price` int(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `mdt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `name`, `author_email`, `author`, `video_name`, `video_loca`, `url`, `img`, `desc`, `rating`, `learning`, `price`, `dt`, `mdt`) VALUES
(16, 'Angular', 'admin@gmail.com', 'Karan Modasiya', '', '', 'https://www.youtube.com/embed/0LhBvp8qpro', 0xffd8ffe000104a46494600010100000100010000ffdb0084000906071212121512101316151517161717181718151a151516161817171817171515181f2a21181a251e181921312125292b2e312e1a1f3338332d37282d2e2b010a0a0a0e0d0e1b10101b2f2520252d2d2f2d2b30302d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2dffc000110800b6011503012200021101031101ffc4001b00010003010101010000000000000000000005060704010302ffc400491000010302030406060704060b0100000001000203041105122106315181132241617191073282a1b1d1233342526272c1145392e1151663a2d2f0253444559394b2b3c2e2f124ffc4001b01010002030101000000000000000000000004050203060107ffc40034110002010301050508020105000000000000010203041121051231418122516171a10613143291b1c1d142f023627292e1f1ffda000c03010002110311003f00dc511100444401111004444011110044440111100445cb555d1c7ebbc03c379f21aa03a9157aa768ff0074ce6ef90f9ae48b682606eecae1c2d6f223f9a02d88a1a97682277ae0b0f98f31f25290ccd70bb1c1c38837407d5111004444011110044440111100444401111004444011110044440111100444401117ca699ac177b834779b203ea8a1aa768236e8c05e7c8799d7dca26ab1b99fb8e51c1bbfcf7a02d15152c60bbdc1be275e43b544d4ed130691b4bbbce83e7f054eaec5a2613d2480bbb8e67731d9cd4156ed61dd13078bb53e43e6b4cee29c38b2c2d7655ddceb4e0f1def45f57c7a64bc5562f33ef77651c1bd51e7bfdeabd598ec31dfaf9ddc19d6d7bcee1e6a975789cb27aef27bb3587f08d17292a1cef9ff0005f53a2b5f65e0b5af3cf8474f57afa22c359b5723b489a1bde75779ee1ef517558c56c0e6b9ce710f60780e05cd703a5c70ddb85b78e2bdc070d754cf1c2dbd9ceb123b00d49f2079d95c7d24e141ec391b630b5a5a07dc0d00b47217f65634fded4529e5e9c0db78acacea53b654e3dbe2dacb4b82d5ebabf44c81a0db86e8278c8fc4cff0bb51e655970dc66197586601dc012d7ff09b15912f438f15946ee71e3a9a2bec2b7a9ac3317f55f47f868df2971e95beb59e3bf43e614ad363d13bd6bb0f7ea3cc7eb6582506d254c3b9e5c3eebbae3ccea391564a0db761d26616fe266a3983a8f7a931ba83e3a14d5f625d53d629497871fa3d4daa390385da411c41b85f459ae178c46fd60985f80395dcdbbfcd582971f95beb80f1fc27cc69ee52134f54554e3283dd92c3ee65a9145536390bb792c3f8b779ee524c7822e0dc711a85e989fb4444011110044440111100444401111004444011110044440156f6a59d68cf1047911f3564507b52cea31dc1d6f31fc9019fe3b8ff0040ec8d6ddd60753a6bdc353ee558adc66797d690dbee8d1be437f325486dab2d2b4f168f739df3500a9ee6acf7dc5bd0fa0ec5b1b656d4eb282de6b56f579fc74c1e124ef2bc44514bd088ba28295d2c8c899a9739ad1e24dae7b86fe4bd3c9494565f04687e8b308cac7d4b86aefa367e504171e6401eca97c787d31f06fc14fe1f46d862642cf558d0d1df61bcf79dea031efae3e03e0af68d3f77051fee4f96dfdd3bab89d57cde9e4b45e8637b43877413b996eaef6fe43bbcb51c946ad0b6e30ecf0895beb47bfbd86d7f2d0f9acf156d6a7b936b91d8ecdbaf88b7537c568fcd7ed6a7abc445a89e7ad3db753341b4f5317dbcede0eeb8f3dfef50a8bd8c9c5e51aead2a7556ed48a6bc75fef4350d9bc68d535c4b3216103475c1b8274e1fcd6958232d033c2fe649fd564fb051da98bbef48e3c835a3e20ad7e89996360e0d68f7056d45b704d9c25fc214ee670a6b093c1d0888b610c2222008888022220088880222200888802222008888028ada565e027839a7df6fd54aae1c61978241f86fe5afe880c8f6de3fab778b7e07f42aaeae5b651de10783c7916b87c953553de2c557d3ec7d13d9e9ef584577392f56ff0027e5111452e82bf7a2dc23348eaa70d19d467e770d4f26e9ed2a147197101a2e4916037924d800b76d9ec3053411c437b5bd63c5e7571f3bf2b297674f7a7bdc91cffb4579ee6dbddc78cf4e8b8fe175649acda0da2153573b01d01bc5df18b34fc337b5dcacfb778afecf48f2d3674b78dbc4661d63c9b7e76589c15a61a86cadec20db88dc47317532b57dca918fd4e7f676caf88b4a951ad5e91f35ab7d745f5354958082d70b820823883bc2c9f17a1304cf8cf63baa78b4ead3e5efbad5a0943da1ed376b8020f1045c2acedee1b998d9da356754fe52743c8ffd4565730de86f2e46ad8b74e8dc7bb970969e4f97e575284888ab4ec4222f46f087a6a1b190114d08e25c7f89e6deeb2d5c059e6cb4166d3378362bf2009fd5688ae29ac452f047ceee67bf5a72ef93fb8444599a0222200888802222008888022220088880222200888802f95433331c38b48f30bea880ca769999a99fc8f91b15435a463d0fd1ccde01ff00ddbfc966cedeaaef976d3f03b9f65e79b69c7ba5f74bf47888bd1a9b28274c5bbd1ae11d2d4f4ae1d58866f190df20e5abb905ada81d8cc2bf67a6635c2cf7da47fe670d01f0161c94ccd9b2bb25b358e5beecd6d2f6ecbabbb6a7eee9a4f8f13e69b62f3e2eee528becaecc7c973eaf5f2328f4938af4b55d183d48464f6ceaf3f06fb2550ab3d6e416932fa37a9792e74d0924924e676a49b93ea7150b89ec0ccc7969963dc3ef7f8540952ad29b938bd4ea695fd850b68518555d9c77f57c3bce9d83c4b346e85c7566a3bda4ea391f88566a885b235cc78bb5c0b48ee22c554b06d969e099b28923394ea2eed5a7470ddc3df65700ac286f6e6ec97fe1c9ed3745dc3a94249a7ae9c9ff0075321c4a91d0c8f8ddbdaf23c4761e62c79ae6576dbfc3746ced1f85dff89f88e6152556d586e49c4ebecae55cd08d4e7cfcd71fdf930bf51b0b9c1a37e600789365f95df80c59aa226ff68d3c83813f058a5978244e5b9172ee4d9b46cec7f4cc037341f7348572556d976de571e0c3ef23e4ad2ae8f9b8444401111004444011110044440111100444401111004444011110146c762fa595bc49fef0bfeab2676f37e256c9b44cb4e4f10d3eeb7e8b21c463cb23dbc1ef1e44855d7ebe57e675decacf5ab0ff006bfb9ceac5b0b83fed154db8bb19d7778348b0e6eb720557805aefa3ac23a1a5e91c2cf9acf3c4307d58f2bbbda51ada9efd45e1aff7a975b6ef3e1ad24d7cd2ecaebc5f45eb82d657b65f2a99db1b1d23cd9ad69713c00172b0dc431d9e491f274920cce2eb07b80009d1a003d82c15957b854b1a672717b33654ef9cb75eea8e35e3abe5f4377557c74fd31f01f05957f4acff00be93fe23946d6623366fac9370fb67e6b446fd3fe3ea5a54f6627159f7abfe2ff66af74590ff00484bfbd7ff0011f9a95d9ac65eca86f48e7647751d98920075b5d4f61b72bad8af1378688d576054841c94d3c2e18e3ea6875d4cd9637c6fdce691e1c08ef0755925540e8dee63f420969f106de4b62547dbdc372b9b3b468747fe61b89f11a7b212ee9e63bddc63b06eb72aba2f84b879afdafc14f537b1b166ab61fbb989f65840f790a115a3d1f4579deefbac23f89cdf9150e8accd2f13a1da13ddb5a8ff00d2fd74fc9b06ca33eb0fe51f12ac2a1765d96889e2f3ee007cd4d2b738108888022220088880222200888802222008888022220088880222202b3b52cfa463b8b6de47f9ac9368996a9907e227cf5fd56c5b54deac6ee048f300fe8b26dae8ad3936d1cd06fd971706de4a15f2ff001a7e2747ecc4f17728f7c5fa3473ecc6166a6a638bb2f77f7346aef769e242dd1ac00000580d00e0163bb19b45151748f7445ef780d043800d68d48d789f805653e9363eca77f393ff0055aed6a52a71d5eac99b72cef6f2ba54e0dc62b4d56adeadf1e9d0eef49b8a7454c2269eb4a6c7f20d4f99ca3cd64ca676a71e756cdd216e468686b5b7bd80d4eb6de493ee50ca2dc55f7936d70e45dec7b27696aa125da7acbcdfe963d4fd28eacf5b90520a3eb3d6e416a87126dc7c9d4f8af415e22da43354d9ac43a7a76389bb9bd4778b7b798b1e6ba715a213c2f88fda1a1e0e1ab4f23659f6cce3dfb297e669731c0680d8870dc75eebfb95846dc45fba7f9b7e6ac69d7838253671f75b2ee6172e5423959ca6b1a73c71e4ca2cb19692d70b1048238106c42b97a3a8beb9ff00947c49f8855cc7eb639a63244d734380b875b78d09163da00f7ab9ec2d396536670233bcb85c5aedcad008eed0a8d6f1ff002f916fb5aacbe07325872dd4d78e537f6353c01b6819df73e6e2a4572e1adb4518fc0df82ea56671a111100444401111004444011110044440111100444401111004444070e2943d3332dec41b83bf5b11af9aa8e2984968cb3303987b6d769e7d87deaf8bf0e6022c45c702bc6b27a9b4f2b898c629b2f6bba0ddf75dbfd977cfcd566785cd25af05a46f0458add2bf006bb588e53f74faa7e4aad8be101dd49e3d7b0f6fb2e0a155b28cb5869e1c8e92c3da4ab4bb170b7977ff002ebc9fa33304560c53669edeb45d76f0fb6397dae5e4a05cd237aae9d3941e248ec6daee8dcc37e8cb2bd579ae28f147d67adc829051f57eb720bca7c4f6e3e5ea7c9788baa830f96676589849edb6e1dee71d02da97220ca4a29c9bc25cce552385e093541fa36f57b5c7460e7da7b85d5b707d8e8d9674e73bb80f5078f6bbdc3b95e30dc1647816018cec24585bf0b7fc852e9da37acca0bbdbb08e634165f7be1d3bfd1152c1f652186ce7fd2c9c48ea83f859fa9b9576a1c05efd64ea3787da3cbb39a9ca1c3238bd51777de3a9e5c392ee53a31515847355abd4ad2dfa8f2cfcb45858762fd222c8d411110044440111100444401111004444011110044440111100444401111005f29a16bc657004702bea880aed7ecf76c27d927e07e6aa78b6091c8489585af1da059dcf88f15a72e7aaa46482cf683f11e07b16328a92c3593652ad5294d4e9c9a6b9a30ac4f00922b9033338b45ec3bc767c157e4a77be40d635c5c40b068b9f77677add310c05edd6339c70fb43e6a1e8b0bbbdc22880713d6b34375fc47e6a1caca3bd98bd0e861ed2d4f75bb56199726b45d57eb8f72295836c5836754badfd9b4f5bda78f80f3579c2706240641186b076db2b47ccfbd58683006b7594e63c07aa3e6a69ad00586814a8528c3e54525d5ed6b979a8f4eee4ba1194182c71d8bbaeee2770f00a55116c2284444011110044440111100444401111004444011110044440111100445e13c501ce6b23e94439c74858640cbf5b2021a5d6e1720735d2b09abc626159fd61049a46d57ec81b6d0d18191d28b6a41792e03ef2dcd8f04020dc117046a08e2101fb45816c5ed45550d4cf5350e7c9412d6cb4f212e2ee824690e64963b9b67d8db7807b4341d6b6f27ff45d63e377fb34a5ae69fc0482d70f8a02c68b369b6a9d438052d481d24cf8206461d739a57b46aeed75802eb76dadda9867a38926609715aeab9a7700e7359318e18c9ded635bc375c58770406928ab5b33b24ca17bdd15454c8c7b40e8e594c8c6106f9997dc4aaffa169defa6ac3239ce22be700b897100321b017ecee4068abcb2a4fa6499ccc22a5cc739ae1d16ad25a47d2b3b4282f49752f6e1f86163dcd2ea8a50e21c4170319b875b78406a888880e5756462510970e90b1d2067da2c696b5ceb7005cd1cd752c2b13c6263587681849a586a9b461a373a905db2483ef02f7123bcf72dc2290380734dc1008237107504203ea8b14f479b291e22dab96a67aa0e6564b1b724ee6b43406b869e2e2a428e9e4c371ba5a3a5aa9e68678dee96196432f461ad796b85fd5b96defe3c501ada2af6ddb88a1988241ea6a0d8faeded0a0f19c4658f0fa26452746e9990b1d2136cad3136e73fd937235e17f15aa75545b4d705926d0b2956846517f349c7cb093ce4bea2a8b76161b75e7a973bb5d9c0b9e36cbf35358161869a331f48f906624179bb802000dbf016f7aca32967558ea6bab4e84639a75379f76ee3ae72fd704a2222cc8c1111004444011110044440111100444401527d2b632f828ba183fd62adeda68403637934711c2cd245fb0b9aaecaad88eca99f1282be596eca78dcd8a0c9a091d7cd297df536234b7d96a02b98d6135b1d17f4552d0327a610362e99d50d88b9e45dd2065b7e737f1baeef43d8cbe6a234b3e95146f34f2349d72b6fd19f0b02dbf6e42afcaa741b2260c526c4229b2b278c3658325c39e2d6903f36874dd6ed77140563d16e1515550e234f3b7347262152d70f622d41ec23782a0e6c4e5c3a92bf05ae7120534eea299dba48b238f444fde1d83b88dd96fa56c3ecc1c3e39d865e97a6a992a2f93265e903064de6f6cbbf4dfb97cb6fb6361c4e9fa279c9234de3940b961edb8b8ccd2378bfc1019f6d7b1c367b0b9c0bb607524af03ee8616fc5c16c74752c958d96270731ed0e6b81b8735c2e083e0a330bd9f8e3a18e866b4cc642d85d76d83c06e5272dcdafe2aad07a3caaa5bb70cc4e6a68892444f8db50c65cdc8607eed7fc9404a609b4b34d8ad750b9b188a9d913984077484bd8d71ce4bac45dc7700a13d07bc082ba33ebb71098b9bda016c605f9b1de4a6b63f6364a39e7aba8ab754d4540635ee31b626d99a0b35b7d6c00e4b9717f47ee354facc3eae4a29e4faccad124521e2e8dda13ff00ddf7407e3d37ca1b83d45cface89a3bcf4ac361c813c9437a54616d061608b11554a08e04466ea5a1f4792cf2c72e2d5f256889d9d91746d861cc3717b1b7cdeee074b832fe903651d8943144c9fa074733660fc9d26ad0e0065b8e37e480b52a5fa54c71f4d42e8e1b9a8a970a6840f5b3cba123859b7b1e25ab97faa98d7fbf0ff00c945f35d30ec64cfaaa3aaadabfda0d246f0d6f42199e6793794d9d6161940007d806e8088c5309ad86886154940c9e9c5388cca6a1b11748e04c8f0c209f5c975f4d6ebb3d0e62ef928dd4751a54513cc0f693ae417e8cf858168fc8b40552a6d9031629262314d95b3459258725c3dc2d67e6cd60746fd93f6b8a0291b01455136198a47472986735d3746f06c438088db30d5b7b65b8e2a4fd0b3e95ec98ba37371163ba3aa74ae324ced747073892186d62076b75be84dab61b654e1d1cec32f4bd3543e7be4c9973868cbeb1bdb2efd37ee5c3896c393894789524ffb3c806599b933b676e808700e1bc697d750d3f650127b7c7ffc337b1ff71abe30e0d15661f4d1cbbba184b5cdd1cd774405da4f712bcc67665f5525e6a97f4176910b5a00d06b99d7d6e6fd9dba291c630b7cb1362826753969043997dcd0406e847577792d0e2dca526b4c631de5946b42146953854c4b79c9cb0fb39497765b58d709af3213fa952347d1d7d4348166f58d8701a11a782fbec0e292cd1c8c9dd9df148599fef0ef3da6e0ebc2cbe4767310232bb127653a1b45675bb9c1d7bf7dd4d6cfe0b1d244228ee752e2e3eb39c7793e405bb9634e0f7d34b0b5cebff6ff0006db9b88ca84a152719c9b5bad4718efcb718f15a635f425d111492a022220088880222200888802222008888022220088880222200888802222008888022220088880222200888802222008888022220088880222203fffd9, '<p>This tutorial is specially designed to help you learn AngularJS as quickly and efficiently as possible.</p>\r\n<p>First, you will learn the basics of AngularJS: directives, expressions, filters, modules, and controllers.</p>\r\n<p>Then you will learn everything else you need to know about AngularJS:</p>\r\n<p>Events, DOM, Forms, Input, Validation, Http, and more.</p>', 5, '<ul class=\"list\">\r\n<li>\r\n<p>AngularJS is a efficient framework that can create Rich Internet Applications (RIA).</p>\r\n</li>\r\n<li>\r\n<p>AngularJS provides developers an options to write client side applications using JavaScript in a clean Model View Controller (MVC) way.</p>\r\n</li>\r\n<li>\r\n<p>Applications written in AngularJS are cross-browser compliant. AngularJS automatically handles JavaScript code suitable for each browser.</p>\r\n</li>\r\n<li>\r\n<p>AngularJS is open source, completely free, and used by thousands of developers around the world. It is licensed under the Apache license version 2.0.</p>\r\n</li>\r\n</ul>\r\n<h3>Prerequisites</h3>\r\n<p>You should have a basic understanding of JavaScript and any text editor. As we are going to develop web-based applications using AngularJS, it will be good if you have an understanding of other web technologies such as HTML, CSS, AJAX, etc.</p>', 20, '2022-03-10 23:29:36', NULL),
(17, 'Node js', 'admin@gmail.com', 'Karan Modasiya', '', '', 'https://www.youtube.com/embed/BLl32FvcdVM', 0xffd8ffe000104a46494600010100000100010000ffdb0084000a07081212121212141018101215181a18121411121a1212121218151a191a1819161d202e251c1e382319182838262d303f4337361a243b463b353f2e344331010c0c0c100f101f12121f3724242b31363d313d3d34343d3d3d363d3134363731363d31353631313434343434343434343434343434343f343434343434343434ffc00011080093015803012200021101031101ffc4001c0001000203010101000000000000000000000608040507030201ffc4004010000201030105050407050900030000000102000304112105061231610722415171133235812362727391b2b314344283b14352637492a1b4c1f0242533ffc4001801010101010100000000000000000000000002030104ffc400221101010002020201050100000000000000000102110321313212042241527151ffda000c03010002110311003f00e3311101111011110111101111011110111101111011110111101111011110111103a46eef664d7fb369ddd1b8e0aec5fe8ea2e291556640030d41eee738f1f9c84edad89736550d2b8a2d45fc38877580f1561a30ea0cb05d8efc1adbed55fd77929da9b2e85d5334abd15ad4cf3571900f983cc1ea20542892ced1f77a96cfbe6a144b1a4516a206d4a86c8c67c46473913808888088880888808888088880888808888088880888808888088880888808888088880888808888088880888808888088881653b1df835b7daabfaef27120fd8efc1adbed55fd77938815e3b70f8a0fb8a7f99e73a9d17b70f8a0fb8a7f99e73a808888088880888808888088880888808888088880888808888088923dd8dcebdda2d8a1488a59c357a995a2be7defe23d172604724f7747b32bcbee1a9541b3b63af1d45fa471f529f3f99c0d74cceabba3d9ad95870d461fb55c0d7da5551c28dfe1d3e43d4e4f5127503886f37634f4d38ec6b357206b46b955a8df65c00a4f4207ace557967528bb53ab4da95453864752aca7a832e24d1ef0eec5a5fa705c510e40ee545eed54fb2e351e9c8f940a9f13a2ef7f6577769c556df3796e35ee2fd3a0fac83de1d57f0139d91881f913e80cf292cd87b955ab61eb668533ae08fa561d14f2f9fe1272cf1c26f2ba4e594c66ea316b6af5582221763c95464c98d8ee0bb532d5aafb3723ba8803f09fac73afa0fc64db66ecba36c9c34a984fef37366fb4dcccca6e53cd97d45b7ed619735beae3bb5f6157b63df4ca78545d50fa9f03d0cd509db2b5307208055b982320f4224576c6e653a997a04527fee1ff00f36f4f15fe9e935c39a5f2bc3965eab9e44cbbfb0ab41ca55a651bc323461e6a7911d44c49b36226c7636c5b9bda8295bd16ace79f08eea8f3663a28ea4cecfba3d9150a1c356f585cd41a8a2b916ea7eb67573f80e86072edd5dcabdda2d9a34f868e70d5ea65690f3c1e6c7a0f9e24af6ff63b7346987b6ae2ed80efd329ec9c9f129de20fa120faceeb4a9aa285550aa0615400aaa072000e427ac08676536b5296c9b74a94da9386abc49514a30cd67232a464499c440af1db87c507dc53fccf39d4e8bdb87c507dc53fccf39d404f7b5b6a955d69d3a6d51d8e1529a96763e4146a64eb747b2fbcbde1ab5b3676e7072ebf4d507d54f01d4fae0cedbbb7ba967b39386de8856230f55fbd55fed37974181d2072addbec6ead44e3bcac6dc91dda5482bba9f3763a0f419f5122dbdbd9edeececbb2fed16e3957a409551f5d79a7a9d3acb393e1803a119079e60536896137bfb29b5bbe2ab6d8b3ae724aaaff00f1dcf541ee9eabf819c5778376eeb67bf05c512993dc71dea75079ab8d0fa73f3020696222022220222202222022220222202222025baddea4a9696aaaa11451a780a3007717c254596f761feeb6df734ff22c0cf98d79794e8a354ab51695351967760aaa3a93326561ed1b6cdc5ced0b94ab559a9d1aae94a9e48a68a8c546179716399e660585d89bc9677c18db5cad62bef2ae55975c64a300d8eb8c4dcca776777528bad4a551a95453956462aca7a112d3ee5df54b9d9f695eab71d4a94c176c01c4dc89c0d33a40decac9dac5154db176140504d36214607135142c7d4924fce59b9597b5af8cde7f2bfe3d38185b8e80dc96c02550b2e46785b8946475c13f8cea94df8941f39cbb70466e6a7dd37e649d1ed9f0784f23cbd6783eaf1dddff008f1f3fb3304f86e53d279bf29860ce31eacf3469e95661b54e1ccd9dad4efa5456b674c03c386c91aab710c60f8684fe33994e87bc9936d589e640cffac4e793d7c3eaf4705de37fab49d9ed9d3a5b32cb811538e8d3772a002cec80b313e272649e683717e17b3ffcb52fc826fe6addf0ec00249c01a924e001e64cc1d9bb66dae78fd85c53afc070fecdc3f09eb8f0eb384f6afbcf7752fae2ccd62b6d4982ad24eeabf701cbe356393c8e9a0d241b67dfd6b7a8b568d56a350726a6c55bd34e63a1e702e0448bf679b5eb5eeceb7b9ac43557e30ecabc21b86a320381a038519c49440af1db87c507dc53fccf30fb1fb74a9b5a88750e151d9430c80eaba1c798999db87c507dc53fccf31fb16f8bd3fbba9f92058f88916ed176ad6b3d9b717141b82aaf005620370f154542403a670c606c76c6f0d9d99417172940b9c2876ef1eb81a81d7909b3a5555d432b075232aca432907c411a112bc6c9d80972a2e6eaa3dc54ac3889663919d325b3963a7a749b4dccb8b9d9fb56d6ca9dcb35ad7d5a93eaa010fc87256cae72319f1933296e933396ea3bc48e6fed04a9b32fc32870b6f51d4119e17442cac3c88201ccdd5e5dd3a28d52ad45a54d46599d82aa8ea4ce3bbffdaa53ad4ab59d9a71a5456a752bbe5414618229af3d46464fe1294e3d111011110111101111011110111101111012deec3fdd6dbee69fe9aca852deec2fdd2d7ee69fe9ac0cf953f7dbe257ff00e62afea34b47b4b69d0b6a66ad7aab4698e6ced819f21e67a09553792f52e2f2eaba6782ad6a8e99183c2ce48c8f0d206ae5a5ece3e1361f743fa9956a58fecab6fdb57b0b6b65aa3f68a29c2f498f0be84f7947f10c60e47ce04f6566ed6be3379fcaff008f4e5999597b5af8cde7f2ff00e3d3818fd9f7ef2ff74df9924d2f6af7b841f74e73f5a407742fd685766660bc485549e418b29193e1c8c99e73ae739f1e799e4e697e4f1f3ef690da57f6881bc7930f261cff00f759e8fca69b665c703e0fbafa1e87c0cdd3f29e69355962c6ab35f71e3361566bae3c668ee4d3ef0eb6958fd51f9d67393279bc9788b6f510b0e270005fe2f781ce3c0686408cf5f0cfb5eae0f55addc5f85ecfff002d4bf209bf913ece769d1afb36d169d4576a54a9d3aaa0f791d54290cbcc72d3ce4b26ad9c03b54dcebd5bbb8be5a5edadea10c4d2cbb5301154f1af30343a8c8ea240b63ec7b8bca8295bd16ad50f820d1479b31d1475265bc9896761468f10a549288662cc29a2a71b1e6cd81a9eb034db87b16a585850b5aa54d44e32dc049505ea33e013cf1c5892489f2481a9d2057aedc3e283ee29fe6798fd8b7c5e9fddd4fc93e3b5eda546e769b351a8b55529a53664395e352c480791e6351d662f65db5a8da6d3a556bb8a74caba176f754b2e0127c067c6059c91edf8d88f7f615ed69b2a3bf0952f9e1ca545700e3519e1c67c333794aa2ba86560cac32aca432907c411cc4f5815c9ef2f364e2daf2d080a08a4c0e15c03e0e3bac35f0d47889a05de8aeb794af555054a27e8d482502eba1d727de3ae65a0da1b3e8dc536a55a92d6a679aba861d0ebc8f59c877bbb1e65e2abb3db887336f55bbc3a2543cfd1bf13393192ed33192ee39cef1ef4dded07e3b8ac5803dca6bdda54fecaf9f53af59a39917b67528bb53ab4da95453865752ac3d4198f3aa22220222202222022220222202222022220276bbeed72850b4a14ad299ad5c524566aaa529d26080104736391c869d6714881b4db9b7aeafaa7b5b8acd55b5e10745407c15468a3d26ae22027ad1acc8cac8ec8ea72acac5594f982350679440eadba3daf56a58a57ca6e69f21590015947d65d038fc0fac866ff006d5a579b4ae6e6892d4aa14e0254a921692213c2751aa991c881fb367b376cd5a1800f1a78a36a3e5e53573f672c966ab964b355d0766ed8a55f001e17f146d0fc8f8c96d95c7b4a633ef2e8dff46711071241b337aee2802070d4d300d4c923cb5075f9cc32e0fd5e7cb835778ba46d0ba4a485ea38441e2c7193e40789e824136cef633e5280e05fef9f7cfa0fe1ff00dca477686d0ab70c5eab976ebc80f203901e93df65ec7af72714d32be2eddd41eadff42563c58e3dd5e3c78e3de4c0a8e589249627992724fa99fb5283a804a9507912a403e9e726e96163b3c06acdedabf30b8c907a2721ead3e296f7d1ae5a9dc500291f74fbfc23a8ff00b12fe57f115f3b7c4e913d9bb46b5b545ab42b351a8bc991b071e47cc743a4ebfb9fdafa3f0d2da0a29b721714d4f01fb68355f51a74120bb477495d7dada38a887508581ff4b78fa1fc644abd17462aca558730c3047ca54b2f854ca5f0b7f6b734eaa2d4a7516a230cabd360c8c3cc30d0cc8954776f7aef3673f15bd62aa4e5a93f7e8bfda4f3ea307ac956f0f6bb7d734c53a28b6408c3b5372f518fd5720700f4d7acea9d6b7af7e6cb67022abfb4af8eed0a443543e45bc10753f2cce1dbdbda1deed1e242ff00b3db9fec6912030faedcdbd39749127a85896625989249272493a9249e6679c044440936eb6fa5eecd61ec6af152ce5a854cb526f3c0e6a7a8c7ce76fdd1ed26caff00869b37ecb7274f6555870b1ff0df937a1c1e92b5440b99312fefe95ba355ad5568d35f799d82a8f99f1e92bb6ee769bb46c90d2e25baa78c20b90ce699f0c302188faa4fa624776f6f0dd5f3fb4b8acd54ff000a9384407c15068b026bda7efcda6d00b4685b87e06045dbaf0bf0f8aa2e38829f1cf9729cd2220222202222022220222202222022220222202222022220222202222022220222204c363ec0a09456eae9c04238953380478671ab138e427ced4dee38f676aa28d31a060a0363ea8e4a3fdfd2646f09ff00eaed3f97fa6d217224df759e337dd7d3b96259896275258e493d49e73e7126dbcfb2699ad674a9535a5ed0b2b1450ba657538e7804cc8bfb9b2d9e5690b6f6953872490a4e093a96604e743a08f9f8d43e7d4d443b67ed3ad6edc549caf98e6adeabc8c95d1db3697ea29dca0a55392be7033d1f9afa1d27a596d2b1bd6145ad423b6784f0aea719c065c1064576d6cffd9ae1a964b2820a93cca9c11f3f0f94e756f7d573ab7b9aacadb1b00dbdc252e3e24a87bad8d40e2c104798ff007c89fb75b3698a48ea082ca594e788e94f8f0dae3967c06be044db7682c43db9070406208d30430d448cd6da7518153c233a310b82c079f97cb12a5b64aac6db2560188894b22220222202222022220222202222022220222202222022220222202222022220222202222022220204408135de0f85da7f2ff4da43164cf787e1769fcbfd3690b1271f08e3f17fb53ddf37a8956c9e982cebc4ca0296248e03c87313f1f78aceae16ead8a38d0864e3e1f43a309edbd57bfb3d7b1ab8e209c79039952141f9e099e77fb3acaf9bdb25d0a6ec0710cae4e0606549041c0c7ca6735a9b6735f19b7c5bd9ecab860b49cd2a87dde16643c5f578b4cc8eedfd9af6d70119cd4070cae73c45738c1cf88c1921b5ddfb4b675ab56f15b80860b955048d4640249d7c04d0ef2ed55baae1973c0a02a93a12339271e1a9952f7d785637bebb8db7689ef5bfd96feab219267da27bd6ff0065bfaac864ac3d62b8fd611112964444044440444404444044440444404444044440444404444044440444404444044440444404444044440966c5de441496dae6987a4070ab70f16078065f1c798d6671dd4b5aacb528dc7d093960086d3c4039c8f9c83449b8fe65d22e3dee5d255bf3b412ad4a688c1fd906e265395e2623ba0f8e3847e322b257b12becfa94fd856a22939fed0b13c4d8e61ff87d394cf5ddbb3b626ad7afc74c6a80f741f1d71ab1e8272593a72598cd231b2b6357ba3f469ddfe276eea2fcfc4f412534ecec76700d55bdbdc730b80707a2f21ea66bf6aef6923d9db2fb1a6340700363ea81a28ff7f4916772c49249275249c927a98d5be7a3572f3d46c76eed86bba81d942aa8c22839e119cf3f13355112e4d2e4d4d422221d22220222202222022220222202222022220222202222022220222202222022220222202222022220222202222027ec440fc8888088880888808888088880888808888088880888808888088881ffd9, '<p>Node.js is an open-source and cross-platform JavaScript runtime environment. It is a popular tool for almost any kind of project!</p>\r\n<p>Node.js runs the V8 JavaScript engine, the core of Google Chrome, outside of the browser. This allows Node.js to be very performant.</p>\r\n<p>A Node.js app runs in a single process, without creating a new thread for every request. Node.js provides a set of asynchronous I/O primitives in its standard library that prevent JavaScript code from blocking and generally, libraries in Node.js are written using non-blocking paradigms, making blocking behavior the exception rather than the norm.</p>', 5, '<p>As a beginner, it s hard to get to a point where you are confident enough in your programming abilities.</p>\r\n<p>While learning to code, you might also be confused at where does JavaScript end, and where Node.js begins, and vice versa.</p>', 30, '2022-03-11 00:05:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `phone`, `type`, `pass`, `dt`) VALUES
('Karan Modasiya', 'abc@gmail.com', '8469756025', 'Student', '$2y$10$1LkE4V.jBGEQpo67ToN1Ou0CmVbCyP6KvnDzwVCKb8jhvUvleo2aK', '2022-03-10 19:28:31'),
('Karan Modasiya', 'admin@gmail.com', '8469756025', 'Professor', '$2y$10$.f7uMIMY3pGQq.dJRuOtCOYYZZ8/jvr9YW7K8cd7qcLrN6Qp271CW', '2022-03-08 23:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `email` varchar(50) NOT NULL,
  `cid` int(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buylist`
--
ALTER TABLE `buylist`
  ADD PRIMARY KEY (`email`,`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`email`,`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;