import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map, Observable } from 'rxjs';
import { TMDB } from '../../shared/models/tmdb.model';
import { Movie } from './movie.model';

@Injectable({
  providedIn: 'root',
})
export class MovieService {
  private apiUrl = 'https://api.themoviedb.org/3';
  private apiKey = 'f6e28bfe502b99460f11d652afef649f';

  private readonly imageBaseUrl = 'https://image.tmdb.org/t/p/w500';
  private readonly imageBackdropBaseUrl = 'https://image.tmdb.org/t/p/w1280';

  constructor(private http: HttpClient) {}

  getPopularMovies(): Observable<Movie[]> {
    return this.http
      .get<TMDB>(
        `${this.apiUrl}/movie/popular?api_key=${this.apiKey}&language=pt-BR`
      )
      .pipe(
        map(({ results }: TMDB) =>
          results.map((movie: Movie) => ({
            ...movie,
            image: this.getMovieImageUrl(movie.poster_path),
            backdrop_image: this.getMovieImageBackdropUrl(movie.backdrop_path),
          }))
        )
      );
  }

  getMovieDetails(id: number): Observable<Movie> {
    return this.http
      .get<Movie>(
        `${this.apiUrl}/movie/${id}?api_key=${this.apiKey}&language=pt-BR`
      )
      .pipe(
        map((response: Movie) => ({
          ...response,
          image: this.getMovieImageUrl(response.poster_path),
          backdrop_image: this.getMovieImageBackdropUrl(response.backdrop_path),
        }))
      );
  }

  getMovieImageUrl(posterPath: string): string {
    return posterPath ? `${this.imageBaseUrl}${posterPath}` : '';
  }

  getMovieImageBackdropUrl(backdropPath: string): string {
    return backdropPath ? `${this.imageBackdropBaseUrl}${backdropPath}` : '';
  }
}
