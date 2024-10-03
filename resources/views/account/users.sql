CREATE DATABASE finalweb_2024
CREATE TABLE `users` (
`id` int(11) NOT NULL PRIMARY KEY,
`name` varchar(200) NOT NULL,
`email` varchar(200) NOT NULL,
`password` varchar(200) NOT NULL
) 

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;