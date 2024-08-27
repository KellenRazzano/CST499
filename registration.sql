/* 
*************************************
*	KELLEN RAZZANO					          *
*								                  	*
*	CST 499	Capstone            	    *
*	Class Registration Portal 				*
*									                  *
*	 August 2024			              	*
*									                  *
*								                  	*
*************************************
*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+08:00";


--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(255) DEFAULT NULL,
  `courseName` varchar(255) DEFAULT NULL,
  `courseCapacity` int(11) DEFAULT NULL,
  `courseOccupancy` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseCode`, `courseName`, `courseCapacity`, `courseOccupancy`) VALUES
(1, 'MAT100', 'Math 100', 20, 18),
(2, 'ENG100', 'English 100', 20, 7),
(3, 'SCI100', 'Science 100', 20, 15),
(4, 'HIS100', 'History 100', 20, 16),
(5, 'ART100', 'Art 100', 20, 11);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` enum('admin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `type`) VALUES
('kellenr@email.', 'kellen123', 'admin'),
('admin', 'admin1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semesterId` int(2) NOT NULL,
  `semesterName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semesterId`, `semesterName`) VALUES
(1, 'Spring'),
(2, 'Summer'),
(3, 'Fall');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name_first` varchar(50) NOT NULL,
  `name_last` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state_name` varchar(2) NOT NULL,
  `zip` int(5) NOT NULL,
  `phone` int(7) NOT NULL,
  `studentId` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`email`, `password`, `name_first`, `name_last`, `address`, `state_name`, `zip`, `phone`, `studentId`) VALUES
('jerryp@email.com', 'jerry123', 'Jerry', 'Phillips', '987 Some Street', 'CA', 90210, 2147483647, 56789),
('kellenr@email.com', 'kellen123', 'Kellen', 'Razzano', '123 Any Street', 'CA', 92618, 2147483647, 12345),
('ray@email.com', 'ray123', 'Ray', 'Thomas', '444 That Street', 'NY', 10001, 2147483647, 27890),
('travis.morton@email.com', 'travis123', 'Travis', 'Morton', '345 Foo Street', 'FL', 34787, 2147483647, 53535);

-- --------------------------------------------------------

--
-- Table structure for table `waitlist`
--

CREATE TABLE `waitlist` (
  `id` int(11) NOT NULL,
  `studentId` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `courseCode` varchar(6) DEFAULT NULL,
  `enrollDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `waitlist`
--

INSERT INTO `waitlist` (`id`, `studentId`, `semester`, `courseCode`, `enrollDate`) VALUES
(1, 12345, 3, 'ART100', '2024-08-10 19:59:13'),
(2, 56789, 2, 'HIS100', '2024-08-11 21:11:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semesterId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `waitlist`
--
ALTER TABLE `waitlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semesterId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `waitlist`
--
ALTER TABLE `waitlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
