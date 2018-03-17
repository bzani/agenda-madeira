CREATE DATABASE agenda_madeira;

CREATE TABLE agenda (
  id bigint(11) NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone bigint(13) NOT NULL,
  registered datetime NULL,
  modified datetime NULL
);

ALTER TABLE agenda
  ADD PRIMARY KEY (id);
  
ALTER TABLE agenda
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;