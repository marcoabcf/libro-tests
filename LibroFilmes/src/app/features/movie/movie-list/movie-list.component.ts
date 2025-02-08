import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { MatCardModule } from '@angular/material/card';
import { Router, RouterModule } from '@angular/router';
import { Movie } from '../movie.model';
import { MovieService } from '../movie.service';

@Component({
  selector: 'app-movie-list',
  standalone: true,
  imports: [CommonModule, MatCardModule, RouterModule],
  templateUrl: './movie-list.component.html',
  styleUrls: ['./movie-list.component.scss'],
})
export class MovieListComponent implements OnInit {
  movies: Movie[] = [];
  loadingList: boolean = true;

  constructor(private router: Router, private movieService: MovieService) {}

  ngOnInit(): void {
    this.movieService
      .getPopularMovies()
      .subscribe((data: Movie[]) => {
        this.movies = data;
      })
      .add(() => {
        this.loadingList = false;
      });
  }

  goToMovieDetails(movie: Movie) {
    this.router.navigate(['/movie', movie.id], { state: { movie } });
  }
}
