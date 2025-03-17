<?php
$movies = [
    $interstellar = new Movie('Interstellar', 'Christopher Nolan', 2014, new Genre(['Sci-Fi', 'Drama'])),
    $inception = new Movie('Inception', 'Christopher Nolan', 2010, new Genre(['Sci-Fi', 'Action'])),
    $pulp_fiction = new Movie('Pulp Fiction', 'Quentin Tarantino', 1994, new Genre(['Crime', 'Drama'])),
    $django_unchained = new Movie('Django Unchained', 'Quentin Tarantino', 2012, new Genre(['Western', 'Drama'])),
    $fight_club = new Movie('Fight Club', 'David Fincher', 1999, new Genre(['Drama', 'Thriller'])),
    $se7en = new Movie('Se7en', 'David Fincher', 1995, new Genre(['Crime', 'Mystery', 'Thriller'])),
    $parasite = new Movie('Parasite', 'Bong Joon-ho', 2019, new Genre(['Thriller', 'Drama'])),
    $the_grand_budapest_hotel = new Movie('The Grand Budapest Hotel', 'Wes Anderson', 2014, new Genre(['Comedy', 'Drama'])),
    $avatar = new Movie('Avatar', 'James Cameron', 2009, new Genre(['Sci-Fi', 'Adventure'])),
    $titanic = new Movie('Titanic', 'James Cameron', 1997, new Genre(['Drama', 'Romance']))
];
?>