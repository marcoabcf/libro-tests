import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { MatCardModule } from '@angular/material/card';
import { ActivatedRoute } from '@angular/router';
import { Movie } from '../movie.model';
import { MovieService } from '../movie.service';

@Component({
  selector: 'app-movie-detail',
  standalone: true,
  imports: [CommonModule, MatCardModule],
  templateUrl: './movie-detail.component.html',
  styleUrls: ['./movie-detail.component.scss'],
})
export class MovieDetailComponent implements OnInit {
  bgImage: string = '';
  movie: Movie | null = null;

  constructor(
    private movieService: MovieService,
    private route: ActivatedRoute
  ) {}

  ngOnInit(): void {
    const stateMovie = history.state.movie;

    if (stateMovie) {
      this.movie = stateMovie;
      this.setBgImage(stateMovie.backdrop_image);
      return;
    }

    const movieId = this.route.snapshot.paramMap.get('id');

    if (movieId) {
      this.movieService
        .getMovieDetails(Number(movieId))
        .subscribe((data: Movie) => {
          this.movie = data;
          this.setBgImage(data.backdrop_image);
        });
    }
  }

  setBgImage(backdropImage?: string) {
    this.bgImage = backdropImage ? `url(${backdropImage})` : '';
  }

  getGenres(): string {
    return this.movie?.genres?.map((g) => g.name).join(', ') || 'Desconhecido';
  }
}
