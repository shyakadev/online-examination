-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2018 at 04:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'emile', '123');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('2fk6ndhvl16ehrg26thcdknve0', 12, 'what is square?', 'is 1 side', 'is 2 side', 'is 4 side cubed', 'is 5 side', 3, 3),
('2fk6ndhvl16ehrg26thcdknve0', 12, 'what is meter', 'instrument used to mesure', 'mathematics', 'math', 'matttt', 1, 2),
('nkjjtve7qmle64cgc9pjhkb0d3', 12, 'what is square?', 'is 1 side', 'is 2 side', 'is 4 side cubed', 'is 5 side', 3, 4),
('nkjjtve7qmle64cgc9pjhkb0d3', 12, 'what is meter', 'instrument used to mesure', 'mathematics', 'math', 'matttt', 1, 3),
('l1l033e8tjes593birdv8kcbt4', 15, 'what is marketing', 'is way of doing market to others', 'jjjjjjj', 'sssssssss', 'ddddd', 0, 3),
('l1l033e8tjes593birdv8kcbt4', 15, 'who is in charge of marketing ', 'manager', 'student', 'lecturer', 'hod', 0, 2),
('71do2khoqgfrg30vo19t2cblq1', 12, 'what is square?', 'is 1 side', 'is 2 side', 'is 4 side cubed', 'is 5 side', 3, 3),
('71do2khoqgfrg30vo19t2cblq1', 12, 'what is meter', 'instrument used to mesure', 'mathematics', 'math', 'matttt', 1, 1),
('ji1a0e8s7tlpjrajl1rmhrf2f0', 15, 'what is marketing', 'is way of doing market to others', 'jjjjjjj', 'sssssssss', 'ddddd', 0, 1),
('ji1a0e8s7tlpjrajl1rmhrf2f0', 15, 'who is in charge of marketing ', 'manager', 'student', 'lecturer', 'hod', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(5) NOT NULL,
  `course_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(6, 'Networking'),
(8, 'calculus'),
(9, 'c++'),
(10, 'math'),
(11, 'Java '),
(12, 'html language'),
(13, 'kkkkkkkk'),
(14, 'french'),
(15, 'marketing'),
(16, 'chemistry'),
(17, 'Accounting'),
(18, 'management'),
(19, 'programming'),
(20, 'Telecommunication'),
(21, 'hci');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(32, 12, 'what is square?', 'is 1 side', 'is 2 side', 'is 4 side cubed', 'is 5 side', 3),
(33, 12, 'what is meter', 'instrument used to mesure', 'mathematics', 'math', 'matttt', 1),
(34, 13, 'what is the definition of java?', 'is a programming language', 'is sub language', 'is a language', 'is a programming sub language', 1),
(35, 14, 'whati.km,sc/.,', 'xcxcz', 'zxcccz', 'cszzcx', 'xzczx', 0),
(36, 15, 'what is marketing', 'is way of doing market to others', 'jjjjjjj', 'sssssssss', 'ddddd', 0),
(37, 15, 'who is in charge of marketing ', 'manager', 'student', 'lecturer', 'hod', 0),
(38, 17, 'what is management', 'is manager', 'is a course', 'is mmmmm', 'ppppppppppppp', 0),
(39, 17, 'who use management', 'DG', 'HR', 'CEO', 'ENG', 0),
(40, 17, 'when did management started???', 'in 1995', 'in 1980', 'in 1862', 'in 1962', 2),
(41, 14, 'what is c shap', 'language', 'mnmn', 'jjhjk', 'bnnmb', 1),
(42, 14, 'what is telecommunication', 'communication', 'kjhjh', 'nmbnb', 'uitui', 0),
(43, 20, 'what is ui?', 'user interaction', 'information tech', 'killing', 'dying', 1),
(44, 20, 'how to make a good ui?', 'thinking ', 'drafting first', 'wireframing', 'designing', 3);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`login`, `test_id`, `test_date`, `score`) VALUES
('gi', 12, '0000-00-00 00:00:00', 0),
('gi', 12, '0000-00-00 00:00:00', 0),
('gi', 19, '0000-00-00 00:00:00', 0),
('gi', 20, '0000-00-00 00:00:00', 2),
('nene', 12, '0000-00-00 00:00:00', 2),
('nene', 20, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(15, 'gi', '0000', 'gylain', 'uok', 'kigali', 788205871, 'gy@gmail.com'),
(16, 'nene', '1111', 'nkuba-ito', 'kagugu', 'kigali', 788202020, 'nene@gamil.com'),
(17, 'matwi', '4444', 'maheru', 'rugando', 'iwanyu', 121212, 'hhh@gmail.com'),
(18, 'david', '456', 'ndavid', 'gikondo', 'kgl', 78888888, 'dav@gmail.com'),
(19, 'fabrice', '55555', 'Dushime', 'Nyamirambo', 'kigali', 785212426, 'dfabrice@gmail.com'),
(20, 'emile', '123', 'emile', 'eeee', 'ee', 544, 'e'),
(21, 'vanessa', '1111', 'Karabo', 'Kanombe', 'Kigali', 785522225, 'vavva@gmail.com'),
(22, 'keza', '4444', 'raissa', 'kano', 'kgl', 78511552, 'hgbjh@gmail.com'),
(23, 'kuku', '111', 'bjhnmb', 'jbjm', 'nbkjmn', 256526552, 'mmnb@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(3) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `username`, `password`, `fname`, `lname`, `gender`, `age`) VALUES
(17, 'mnc', 'rene', 'dushime', '', 'Male', 56),
(20, 'Rhene', '123', 'renezou', 'fabrice', 'Male', 21),
(21, 'Fabrice', '12', 'rene', 'dushime', 'Female', 211),
(22, 'Peter', '55555', 'Niyonshuti', 'peter', 'Male', 35);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(5) NOT NULL,
  `course_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `course_id`, `test_name`, `total_que`) VALUES
(12, 8, 'caclus basic', '2'),
(13, 11, 'JAVA34', '10'),
(14, 9, 'biology', '10'),
(15, 15, 'marketing 1', '2'),
(16, 16, 'chemistry 2', '10'),
(17, 18, 'management1', '3'),
(18, 19, 'c shap', '1'),
(19, 20, 'Tele1', '1'),
(20, 21, 'ui', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
