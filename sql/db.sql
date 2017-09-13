DROP TABLE IF EXISTS sentence_classes;
DROP TABLE IF EXISTS sentence_partials;

CREATE TABLE sentence_classes (
  id VARCHAR(255),
  next VARCHAR(255)
);

CREATE TABLE sentence_partials (
  id INT,
  value TEXT,
  class VARCHAR(255)
);

INSERT INTO sentence_classes (id, next) VALUES
("LieuMas", "AdjMas"),
("AdjMas", "QuaMas"),
("QuaMas", "NomMas");
