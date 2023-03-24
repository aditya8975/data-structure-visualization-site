

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `user` (
  `userid` int (5) NOT NULL,
   `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
 
  
  `user_type` varchar(60) NOT NULL
 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--





ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);


--
ALTER TABLE (`user`)
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
