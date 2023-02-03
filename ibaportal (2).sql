-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 06:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibaportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_created` date NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(250) NOT NULL,
  `year_id` int(50) NOT NULL,
  `room_name` int(50) NOT NULL,
  `strand` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`, `year_id`, `room_name`, `strand`, `date_created`) VALUES
(1, 'MAPAGKUMBABA', 1, 1, 'Humanities, Education, Social Sciences (HESS)', '2022-10-26'),
(2, 'MAGINHAWA', 1, 1, 'Business, Accountancy, Management (BAM)', '2022-10-26'),
(3, 'MADASALIN', 1, 1, 'Business, Accountancy, Management (BAM)', '2022-10-26'),
(5, 'MARUPOK', 1, 1, 'Business, Accountancy, Management (BAM)', '2022-10-27'),
(6, 'MAPAGMAHAL', 1, 1, 'Business, Accountancy, Management (BAM)', '2022-10-27'),
(7, 'KUNGANUANU', 1, 1, 'Science, Technology, Engineering, Mathematics (STEM)', '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

CREATE TABLE `class_schedule` (
  `id` int(11) NOT NULL,
  `class_id` int(50) NOT NULL,
  `start` text NOT NULL,
  `end` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`id`, `class_id`, `start`, `end`) VALUES
(1, 1, '14:00', '15:00'),
(2, 5, '07:00', '08:00'),
(3, 2, '10:00', '11:00'),
(4, 3, '17:00', '18:00'),
(5, 6, '19:30', '08:30'),
(6, 7, '14:24', '18:11');

-- --------------------------------------------------------

--
-- Table structure for table `early_registration`
--

CREATE TABLE `early_registration` (
  `id` int(11) NOT NULL,
  `student_user_f_uname` varchar(250) NOT NULL,
  `student_user_l_uname` varchar(250) NOT NULL,
  `user_f_fname` varchar(250) NOT NULL,
  `user_l_lname` varchar(250) NOT NULL,
  `user_m_fname` varchar(250) NOT NULL,
  `user_m_lname` varchar(250) NOT NULL,
  `user_address` text NOT NULL,
  `user_zipcode` varchar(250) NOT NULL,
  `user_gender` varchar(250) NOT NULL,
  `user_dob` date NOT NULL,
  `user_strand` varchar(250) NOT NULL,
  `user_phone` varchar(250) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `early_registration`
--

INSERT INTO `early_registration` (`id`, `student_user_f_uname`, `student_user_l_uname`, `user_f_fname`, `user_l_lname`, `user_m_fname`, `user_m_lname`, `user_address`, `user_zipcode`, `user_gender`, `user_dob`, `user_strand`, `user_phone`, `date_create`) VALUES
(1, 'Gerald Mico', 'devcore', 'Gerald Mico', 'devcore', 'Gerald Mico', 'devcore', '10 U206', '1101', 'Male', '1995-11-06', 'BAM', '09166513189', '2022-11-06'),
(2, 'Gerald Mico', 'devcore', 'Gerald Mico', 'devcore', 'Gerald Mico', 'devcore', '10 U206', '1101', 'Female', '2022-11-15', 'HESS', '09166513189', '2022-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `description` text NOT NULL,
  `date_created` date NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forgot_db2`
--

CREATE TABLE `forgot_db2` (
  `id` int(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `expire` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forgot_db2`
--

INSERT INTO `forgot_db2` (`id`, `email`, `code`, `expire`) VALUES
(1, 'daniel.insular.s@bulsu.edu.ph', '89582', '1666184538'),
(2, 'daniel.insular.s@bulsu.edu.ph', '15406', '1666184774'),
(3, 'daniel.insular.s@bulsu.edu.ph', '18040', '1666184954'),
(4, 'insulard@gmail.com', '96590', '1666190311'),
(5, 'insulard@gmail.com', '35569', '1666190374'),
(6, 'insulard@gmail.com', '51757', '1666226633'),
(7, 'admin@gmail.com', '98776', '1666532353'),
(8, 'insulard@gmail.com', '29853', '1666596328');

-- --------------------------------------------------------

--
-- Table structure for table `grade_submission`
--

CREATE TABLE `grade_submission` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `under` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `description`, `under`, `date_created`) VALUES
(1, 'VISION', 'We dream of Filipino who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to building the nation. As a leader-centered public institution. The department of education continuously improves itself to better serves its stakeholders.', 'VISION', '2022-10-26'),
(2, 'MISSION', 'To protect and promote the right of every Filipino to Quality, Equitable culture-based and complete basic education where: Student learn in a child-friendly gender sensitive and motivating environment. Teacher facilitate learning and constantly nature every learner. Administrator and staff as Steward of the institute ensure an enabling and supportive environment for effective learning to happen. Family, community and other stakeholders are actively engaged and share responsibility for developing life-long learners.', 'MISSION', '2022-10-26'),
(3, 'CORE VALUES', 'MAKADIYOS MAKATAO MAKAKALIKASAN MAKABANSA', 'CORE', '2022-10-26'),
(4, 'SCIENCE, TECHNOLOGY, ENGINEERING, AND MATHEMATICS STRAND (STEM)', 'The STEM (Science, Technology, Engineering, and Mathematics) strand is the perfect choice for students that plan to pursue highly technical professions in scientific and mathematic fields such as architecture, engineering, medicine, economics, computer sciences and more. Commonly regarded as the most challenging SHS academic track, this is sure to be an enjoyable journey for students that want to seriously pursue their calling.', 'STRANDS', '2022-10-26'),
(5, 'HUMANITIES AND SOCIAL SCIENCES STRAND (HUMSS)', 'Are you passionate about society? Or maybe you have an interest in the fine arts, design, and communication? The HUMSS (Humanities and Social Sciences) track is a good option for students that want to explore the limits of their creativity and understand the phenomenon of culture, literature, and other aspects of humanity. Students in this track can work illustrious careers in film, mass communication, political science, and literature.', 'STRANDS', '2022-10-26'),
(6, 'ACCOUNTANCY, BUSINESS AND MANAGEMENT STRAND (ABM)', 'They (test) say that it takes a business-minded student to pursue the ABM strand (Accounting, Business, and Management). Maybe you have always dreamed of putting up your own business. Or maybe you have always wanted the admirable title of an accountant? Maybe you dream of living the high life of a well-known manager for a company in a lucrative industry. If any of the three sounded like a dream come true, then maybe a path in ABM is for you!', 'STRANDS', '2022-10-26'),
(7, 'GENERAL ACADEMIC STRAND (GAS)', 'Not everyone knows what they want when they first set into senior high. And thatâ€™s nothing to be ashamed of! The truth of the matter is, it is always better to make the safe choice over the wrong choice. The GAS (General Academic Strand) offers courses that can hone key skills that are applicable to any field that you pursue. Immerse yourself in diverse learning experiences that can shed light on the career path or college course you want in the future!', 'STRANDS', '2022-10-26'),
(8, 'TECHNICAL VOCATIONAL LIVELIHOOD (TVL)', 'Some students are itching to jump into a job as soon as they graduate senior high. The TVL (Technical-Vocational Livelihood) track is the perfect choice for students that want to explore employment opportunities locally and overseas as soon as possible. After finishing any strand under the TVL track, students can apply for national certifications, and automatically get a TESDA National Certificate â€“ a necessary document for making the most of work opportunities as soon as possible.\r\n\r\nOne of TVLâ€™s most useful strands is ICT (Information and Communications Technology). It opens up careers in large corporations by way of analyzing the design, technology, and implementation of complex information management systems that are key to operation.', 'STRANDS', '2022-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `emailAdd` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL,
  `account` varchar(60) NOT NULL,
  `aplicant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `emailAdd`, `password`, `role`, `account`, `aplicant`) VALUES
(1, 'admin@gmail.com', 'admin012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'activate', ''),
(23, 'daniel29', 'insulard@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'student', 'activate', 'enrolled'),
(24, 'registrar', 'registrar012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'registrar', 'activate', ''),
(25, 'tricore012@gmail.com', 'tricore013@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'teacher', 'activate', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_name` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `date_created`) VALUES
(1, 'ROOM 405', '2022-10-27'),
(2, 'ROOM 406', '2022-10-27'),
(3, 'ROOM 404', '2022-10-27'),
(4, 'ROOM 407', '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `emailAdd` varchar(200) DEFAULT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `done` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`emailAdd`, `firstname`, `lastname`, `address`, `username`, `password`, `role`, `title`, `done`) VALUES
('insulard@gmail.com', 'Daniel', 'Insular', 'Balungao Calumpit Bulacan', 'daniel29', 'lkejoajnc29', '', 'student', 'NO'),
('tricore012@gmail.com', 'Gerald Mico', 'devcore', '10 U206', 'tricore012@gmail.com', 'admin', '', 'student', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `strand_question`
--

CREATE TABLE `strand_question` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `subject_interest` varchar(250) NOT NULL,
  `activity` varchar(250) NOT NULL,
  `working` varchar(250) NOT NULL,
  `mantra` varchar(250) NOT NULL,
  `free_time` varchar(250) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `describe` varchar(250) NOT NULL,
  `code` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strand_question`
--

INSERT INTO `strand_question` (`id`, `name`, `subject_interest`, `activity`, `working`, `mantra`, `free_time`, `problem`, `describe`, `code`) VALUES
(1, 'Gerald Mico', 'Mathematics (Business)', 'Composing Music', 'Creative Environment', 'Live with a system, calculate your actions', 'Reading Books', 'Worry about how a certain action affects another person', '0', 753976),
(2, 'Gerald Mico', 'Music, Arts, Physical Education, and Health', 'Composing Music', 'Creative Environment', 'Of course we can fix it', 'Fixing Things and Organizing My Stuff', 'Worry about how a certain action affects another person', '0', 872751),
(3, 'Gerald Mico', 'Music, Arts, Physical Education, and Health', 'Composing Music', 'An Environment With a Mix of Everything', 'Live with a system, calculate your actions', 'Fixing Things and Organizing My Stuff', 'Worry about how a certain action affects another person', '0', 874002),
(4, 'Gerald Mico', 'Mathematics (Business)', 'Reading about Philosophy', 'An Environment With a Mix of Everything', 'There is always a wide range of options to choose from', 'Playing Musical Instruments', 'Worry about how a certain action affects another person', '0', 812621),
(5, 'Gerald Mico', 'ICT', 'Solving Math Problems', 'An Environment of Different Cultures', 'There is always a wide range of options to choose from', 'Trying Cool Science Experiments', 'Think outside the box', '0', 856689),
(6, 'Gerald Mico', 'Contemporary Issues', 'Solving Math Problems', 'An Environment of Different Cultures', 'Live with a system, calculate your actions', 'Selling Things Online', 'Stick to proven ways to solve the problem', '0', 718891),
(7, 'Gerald Mico', 'Biology', 'Solving Math Problems', 'An Environment of Different Cultures', 'Of course we can fix it', 'Solving puzzles', 'Consider various opinions from other people', '0', 772969),
(8, 'Testing', 'ICT', 'Reading about Philosophy', 'Creative Environment', 'There is always a wide range of options to choose from', 'Fixing Things and Organizing My Stuff', 'Worry about how a certain action affects another person', '0', 980041),
(9, 'Abegail', 'Music, Arts, Physical Education, and Health', 'Composing Music', 'Creative Environment', 'The biggest risk is not taking any', 'Playing Musical Instruments', 'Analyze informations before making a move', '0', 967315),
(10, 'Gerald Mico', 'Mathematics (Business)', 'Composing Music', 'Creative Environment', 'Of course we can fix it', 'Selling Things Online', 'Consider various opinions from other people', '0', 967854),
(11, 'Gerald Mico', 'Mathematics (Business)', 'Composing Music', 'An Environment of Different Cultures', 'There is always a wide range of options to choose from', 'Selling Things Online', 'Worry about how a certain action affects another person', '0', 929483),
(12, 'Testing', 'Music, Arts, Physical Education, and Health', 'Composing Music', 'An Environment of Different Cultures', 'There is always a wide range of options to choose from', 'Selling Things Online', 'Worry about how a certain action affects another person', '0', 827168),
(13, 'Testing', 'Mathematics (Business)', 'Reading about Philosophy', 'An Environment With a Mix of Everything', 'There is always a wide range of options to choose from', 'Trying Cool Science Experiments', 'Think outside the box', '0', 935831);

-- --------------------------------------------------------

--
-- Table structure for table `student_assigned`
--

CREATE TABLE `student_assigned` (
  `id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `student_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assigned`
--

INSERT INTO `student_assigned` (`id`, `year_id`, `user_id`, `student_id`) VALUES
(4, 1, 'daniel29', 88240);

-- --------------------------------------------------------

--
-- Table structure for table `student_grade`
--

CREATE TABLE `student_grade` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `class_name` varchar(250) NOT NULL,
  `teacher_user_id` varchar(200) NOT NULL,
  `student_user_id` varchar(200) NOT NULL,
  `period` varchar(50) NOT NULL,
  `grade` int(50) NOT NULL,
  `code` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_grade`
--

INSERT INTO `student_grade` (`id`, `class_id`, `class_name`, `teacher_user_id`, `student_user_id`, `period`, `grade`, `code`) VALUES
(2, 1, 'MAPAGKUMBABA', 'tricore012@gmail.com', 'daniel29', 'Q1', 70, 72833),
(3, 1, 'MAPAGKUMBABA', 'tricore012@gmail.com', 'daniel29', 'Q2', 80, 96084),
(4, 1, 'MAPAGKUMBABA', 'tricore012@gmail.com', 'daniel29', 'Q3', 65, 77121);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `emailAdd` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `F_Fname` varchar(50) NOT NULL,
  `F_Lname` varchar(50) NOT NULL,
  `M_Fname` varchar(50) NOT NULL,
  `M_Lname` varchar(50) NOT NULL,
  `Address_S` varchar(100) NOT NULL,
  `Zip_code` int(4) NOT NULL,
  `Gender_S` varchar(10) NOT NULL,
  `Date_OF_Birth` varchar(50) NOT NULL,
  `Strand_S` varchar(50) NOT NULL,
  `mobile_num` int(11) NOT NULL,
  `done` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `user_id`, `emailAdd`, `fname`, `lname`, `F_Fname`, `F_Lname`, `M_Fname`, `M_Lname`, `Address_S`, `Zip_code`, `Gender_S`, `Date_OF_Birth`, `Strand_S`, `mobile_num`, `done`) VALUES
(1, 'daniel', 'daniel@gmail.com', 'Daniel', 'Daniel', 'Edgar', 'Insular', 'Ma teresa', 'Insular', 'Balungao Calumpit Bulacan', 3003, 'Male', '1999-06-29', 'Strand 2', 2147483647, ''),
(2, 'daniel29', 'insulard@gmail.com', 'Daniel', 'Daniel', 'Edgar', 'Insular', 'Materesa', 'Insular', 'calumpit bulacan', 3003, 'Male', '1999-06-29', 'Strand 2', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assigned`
--

CREATE TABLE `teacher_assigned` (
  `id` int(10) NOT NULL,
  `year_id` int(50) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `class_id` int(50) NOT NULL,
  `teacher_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_assigned`
--

INSERT INTO `teacher_assigned` (`id`, `year_id`, `user_id`, `class_id`, `teacher_id`) VALUES
(4, 1, 'tricore012@gmail.com', 1, 80890);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `year_name` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year_name`, `date_created`) VALUES
(1, '1st Year', '2022-10-27'),
(2, '2nd Year', '2022-10-27'),
(3, '3rd Year', '2022-10-27'),
(4, '4th year', '2022-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `early_registration`
--
ALTER TABLE `early_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_db2`
--
ALTER TABLE `forgot_db2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_submission`
--
ALTER TABLE `grade_submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strand_question`
--
ALTER TABLE `strand_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_assigned`
--
ALTER TABLE `student_assigned`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_grade`
--
ALTER TABLE `student_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_assigned`
--
ALTER TABLE `teacher_assigned`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class_schedule`
--
ALTER TABLE `class_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `early_registration`
--
ALTER TABLE `early_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forgot_db2`
--
ALTER TABLE `forgot_db2`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grade_submission`
--
ALTER TABLE `grade_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `strand_question`
--
ALTER TABLE `strand_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_assigned`
--
ALTER TABLE `student_assigned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_grade`
--
ALTER TABLE `student_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_assigned`
--
ALTER TABLE `teacher_assigned`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
