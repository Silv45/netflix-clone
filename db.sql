CREATE TABLE MOVIES (
    id BIGINT PRIMARY KEY AUTO_INCREMENT
    movie_name VARCHAR(255) NOT NULL,
    release_year YEAR NOT NULL,
    synopsis TEXT,
    star_rating INT NOT NULL DEFAULT 0 CHECK(star_rating BETWEEN 0 AND 10),
    imdb_rating FLOAT NOT NULL DEFAULT 0.0 CHECK(imdb_rating BETWEEN 0.0 AND 10.0),
    duration_min INT NOT NULL,
    age_restrictions VARCHAR(16),
    director VARCHAR(255),
    img_horizontal TEXT,
    img_vertical TEXT
);

CREATE TABLE MOVIE_GENRES (
    movie_id BIGINT NOT NULL,
    genre VARCHAR(64) NOT NULL,
        CONSTRAINT movie_genres_movies_fk FOREIGN KEY (movie_id) REFERENCES MOVIES (id)
)