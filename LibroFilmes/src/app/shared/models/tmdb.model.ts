import { Movie } from '../../features/movie/movie.model';

export class TMDB {
  results: Movie[];

  constructor(results: Movie[]) {
    this.results = results ?? [];
  }
}
