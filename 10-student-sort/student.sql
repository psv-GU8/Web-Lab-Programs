--
-- Database: `student`
--

CREATE TABLE `student` (
  `usn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `address`) VALUES
('5', 'z', 'z'),
('2', 'x', 'x'),
('3', 'c', 'c'),
('1', 'v', 'v');
COMMIT;
